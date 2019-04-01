 <?php get_header(); ?>
    <main class="main bg-pattern main--product">
      <div class="bg-img"> <img src="<?php echo STERH_IMG_DIR; ?>/bg-category-news.jpg" alt=""></div>
      <div class="container pd-200">
        <div class="page page--product flex j-c__s-b f-w__w">
          <div class="page--product__left">
            <h1><?php  echo get_the_title(); ?></h1>
            <ul class="page__list list--contatcs">
              <li class="page__item item--contatcs flex">
                <div class="page__item--left">
                  <h6>Основная мощность:</h6>
                  <h6>Резервная мощность:</h6>
                </div>
                <div class="page__item--right">
                  <p><?php echo get_post_meta( $post->ID, 'Основная мощность', true ); ?></p>
                  <p><?php echo get_post_meta( $post->ID, 'Резервная мощность', true ); ?></p>
                </div>
              </li>
              <li class="page__item item--contatcs flex">
                <div class="page__item--left">
                  <h6>Двигатель:</h6>
                  <h6>Генератор переменного тока: </h6>
                </div>
                <div class="page__item--right">
                  <p><?php echo get_post_meta( $post->ID, 'Двигатель', true ); ?></p>
                  <p><?php echo get_post_meta( $post->ID, 'Генератор переменного тока', true ); ?></p>
                </div>
              </li>
              <li class="page__item item--contatcs flex">
                <div class="page__item--left">
                  <h6>Напряжение:</h6>
                  <h6>Объем топливного бака:</h6>
                  <h6>Габариты: </h6>
                  <h6>Вес сухой/рабочий</h6>
                </div>
                <div class="page__item--right">
                  <p><?php echo get_post_meta( $post->ID, 'Напряжение', true ); ?></p>
                  <p><?php echo get_post_meta( $post->ID, 'Объем топливного бака', true ); ?></p>
                  <p><?php echo get_post_meta( $post->ID, 'Габариты', true ); ?></p>
                  <p><?php echo get_post_meta( $post->ID, 'Вес сухой/рабочий', true ); ?></p>
                </div>
              </li>
            </ul>
            <div class="page--product__chart flex a-i__c"><img src="<?php echo STERH_IMG_DIR; ?>/product-chart.jpg" alt="">
              <p>Расход топлива л/ч при различной мощности</p>
            </div>
          </div>
          <div class="page--product__right">

          	
                <?php the_post_thumbnail(); ?>
            <div class="page--product__discription">
              <p><?php echo the_excerpt();  ?></p>
            </div>
            <div class="page--product__order flex a-i__c j-c__f-e"><a class="button--nav" href="#">Заказать консультацию</a>
              <button class="button button--blue button--order">ЗАКАЗАТЬ</button>
            </div>
            <div class="page--product__conditions">
              <p>Условия работы, сроков, можно кратко, одно-два предложения с ключевой информацией</p>
            </div>
            <!--<div class="page--product__speedbar"><a href="index.html">Главная страница  /  </a><span>Дизельные генераторы </span></div>-->
          </div>
        </div>
      </div>
    </main>
 <?php get_footer();?>