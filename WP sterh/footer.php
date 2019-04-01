<footer class="footer">
  
      <div class="modalus flex j-c__c a-i__c bg-dark">
        <form class="form--order">
          <input class="form--order__input" type="text" name="name" placeholder="Ваше имя">
          <input class="form--order__input" type="email" name="email" placeholder="Ваш email">
          <input class="form--order__input" type="tel" name="tel" placeholder="Ваш телефон">
          <button class="form--order__submit button--blue">Отправить</button>
        </form>
      </div>

      <div class="container flex j-c__s-b pd-85">
        <div class="footer__left flex">
          <?php if(has_nav_menu('footer-menu-1')){
                  wp_nav_menu([
                'theme_location'  => 'footer-menu-1', 
                'container'       => 'false', 
                'menu_class'      => 'footer__list', 
                'items_wrap'      => '<ul class="footer__list">%3$s</ul>',
                'depth'           => 1,
              ]); 
           }
             
          ?>

          <?php if(has_nav_menu('footer-menu-2')){
                  wp_nav_menu([
                'theme_location'  => 'footer-menu-2', 
                'container'       => 'false', 
                'menu_class'      => 'footer__list', 
                'items_wrap'      => '<ul class="footer__list">%3$s</ul>',
                'depth'           => 1,
              ]); 
           }
             
          ?>

          <?php if(has_nav_menu('footer-menu-3')){
                  wp_nav_menu([
                'theme_location'  => 'footer-menu-3', 
                'container'       => 'false', 
                'menu_class'      => 'footer__list', 
                'items_wrap'      => '<ul class="footer__list">%3$s</ul>',
                'depth'           => 1,
              ]); 
           }
             
          ?>

     
      
        </div>
        <div class="footer__right"> 
          <ul class="footer__list"> 
            <li class="footer__item"><a class="b-line" href="#">8 (812) 000-00-00</a></li>
            <li class="footer__item"><a class="b-line" href="#">СПБ, Дворцовая пл., д. 12, офис 314</a></li>
            <li class="footer__item"><a class="b-line" href="#">service@sterh.net </a></li>
          </ul>
        </div>
      </div>
      <div class="footer__bottom container flex j-c__s-b pd-85">
        <p>2018 г. Копирование материалов сайта только с письменного разрешения владельца </p><a href="#">Разработано в <span>Pixelaria</span></a>
      </div>
    </footer>
    <?php wp_footer(); ?>
  </body>
</html>