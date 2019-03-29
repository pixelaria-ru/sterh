<?php get_header(); ?>

    <main class="main"> 
      <!-- Первый экран -->
      <section class="section--initial-screen flex a-i__c">
        <div class="container pd-200">
          <div class="initial-screen__info"> 
            <h1>Аренда техники на любой срок</h1>
            <div class="initial-screen__info--text">
              <p>Строительное оборудование: дизель-генераторы, компрессоры, виброплиты от ведущих мировых производителей </p>
            </div>
          </div>
        </div><a class="mouse-down" href="#goods">
          <div class="mousey"> 
            <div class="scroller"> </div>
          </div></a>
      </section>
      <!-- Секция с товарами-->
      <section class="section--goods bg-pattern" id="goods">
        <div class="container pd-200 flex j-c__c f-w__w">
             <?php
  $loop = new WP_Query( array(
    'post_type' => 'product',  // указываем, что выводить нужно именно товары
    'posts_per_page' => 3, // количество товаров для отображения
    'orderby' => 'date', // тип сортировки (в данном случае по дате)
    //'product_cat' => 'catalog', // указываем слаг нужной категории
    ));
   
   
   
   if ( $loop->have_posts()) :
   
   while ($loop->have_posts()) :
   
   $loop->the_post();
   
   $product = get_product(  $loop->post->ID );  ?>
   
   <article class="goods-item"><a class="flex f-d__c a-i__c" href="<?php  echo get_post_permalink(); ?>">
                  <h3><?php  echo get_the_title(); ?></h3>
                  <div class="goods-item__img"> <?php the_post_thumbnail(); ?></div>
                  <ul class="goods-item__list">
                    <li class="goods-item__item flex">
                      <p>Мощности:</p>
                      <p>от 14 до 320 кВт</p>
                    </li>
                    <li class="goods-item__item flex">
                      <p>Исполнение: </p>
                      <p>в кожухе, передвижные </p>
                    </li>
                    <li class="goods-item__item flex">
                      <p>Время поставки: </p>
                      <p>от 1 суток</p>
                    </li>
                  </ul>
                  <div class="goods-item__info">
                    <p>Atlas Copro, SDMO, Visa Onis</p>
                  </div></a></article>
   
   
   
   <?php endwhile; ?>
   
   <?php endif; ?>
   
   <?php wp_reset_query(); // Remember to reset
   ?>
        </div>
      </section>
      <!-- Больше чем аренда-->
      <section class="section--rent container pd-200">
        <div class="flex j-c__s-b a-i__c f-w__w">
          <div class="section--rent__img"><img src="<?php echo STERH_IMG_DIR; ?>/img-1.jpg" alt=""></div>
          <div class="section--rent__info">
            <h2>Больше, чем аренда</h2>
            <p>Цель нашей работы — подобрать для вас лучшее решение, обеспечить ваш объект необходимым оборудованием точно в срок, проконтролировать бесперебойную работу на каждом этапе эксплуатации и оказать высококвалифицированную поддержку в случае необходимости. </p>
          </div>
        </div>
        <div class="flex">
          <ul class="section--rent__list flex j-c__s-b">
            <li class="section--rent__item flex f-d__c a-i__c"><img src="<?php echo STERH_IMG_DIR; ?>/icon-1.png" alt="">
              <p>Доставим оборудование на ваш объект</p>
            </li>
            <li class="section--rent__item flex f-d__c a-i__c"><img src="<?php echo STERH_IMG_DIR; ?>/icon-2.png" alt="">
              <p>Установим, подключим и настроим технику</p>
            </li>
            <li class="section--rent__item flex f-d__c a-i__c"><img src="<?php echo STERH_IMG_DIR; ?>/icon-3.png" alt="">
              <p>Проконсультируем по вопросам эксплуатации</p>
            </li>
            <li class="section--rent__item flex f-d__c a-i__c"><img src="<?php echo STERH_IMG_DIR; ?>/icon-4.png" alt="">
              <p>Профессиональное обслуживание, контроль </p>
            </li>
          </ul>
        </div>
      </section>
      <!-- Схема работы-->
      <section class="section--shema bg-pattern">
        <div class="container pd-200 flex f-d__c a-i__c">
          <h2>Схема работы <span>STERH</span></h2>
          <ul class="section--shema__list flex">
            <li class="section--shema__item flex j-c__c a-i__c">
              <p>Вы описываете ваши задачи,время и сроки реализации</p>
            </li>
            <li class="section--shema__item flex j-c__c a-i__c">
              <p>Наш специалист помогает выбрать оптимальное оборудование </p>
            </li>
            <li class="section--shema__item flex j-c__c a-i__c">
              <p>Уточняем условия, подписываем договор, передаем документацию</p>
            </li>
            <li class="section--shema__item flex j-c__c a-i__c">
              <p>Подготавливаем оборудование. Внесение оплаты аренды, доп. услуг</p>
            </li>
            <li class="section--shema__item flex j-c__c a-i__c">
              <p>Доставляем заказ, установливаем и передаем технику в эксплуатацию</p>
            </li>
          </ul>
        </div>
      </section>
      <!-- Преимущества работы-->
      <section class="section--advantages container">
        <div class="section--advantages__tabs flex j-c__s-b a-i__c">
          <div class="wrd-tabs flex f-d__c">
            <!-- wrd tabs  links--><a class="wrd-tabs__link" href="#wrd-tab-1">Гибкое ценообразование</a><a class="wrd-tabs__link active" href="#wrd-tab-2">Сервисная поддержка 24/7</a><a class="wrd-tabs__link" href="#wrd-tab-3">Ремонт оборудования</a><a class="wrd-tabs__link" href="#wrd-tab-4">Еще одно преимущество</a>
          </div>
          <div class="wrd-tabs__content" id="wrd-tab-1">
            <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy.</p>
          </div>
          <div class="wrd-tabs__content active" id="wrd-tab-2">
            <p>2 It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy.</p>
          </div>
          <div class="wrd-tabs__content" id="wrd-tab-3">
            <p>3 It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy.</p>
          </div>
          <div class="wrd-tabs__content" id="wrd-tab-4">
            <p>4 It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy.</p>
          </div>
        </div>
        <div class="section--advantages__seo-text pd-200">
          <h2>Преимущества аренды</h2><img src="<?php echo STERH_IMG_DIR; ?>/big-logo.jpg" alt="">
          <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like  opposed to using 'Content here, content here', making it look like </p>
          <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy.</p>
          <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy.</p>
        </div>
      </section>
    </main>
   
 <?php get_footer();?>