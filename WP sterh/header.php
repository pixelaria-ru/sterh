<!DOCTYPE html>
<html lang="<?php bloginfo('language'); ?>">
  <head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover">
    <link rel="stylesheet" href="css/style.min.css">
    <title><?php bloginfo('name'); ?></title>
    <?php wp_head(); ?>
  </head>
  <body> 
    <header class="header container pd-200 flex j-c__s-b a-i__c">
      <div class="header__left flex"> <a class="logo" href="/"><img src="<?php echo STERH_IMG_DIR; ?>/logo.png" alt=""></a>
       <?php if(has_nav_menu('header-menu')){
       		wp_nav_menu([
				'theme_location'  => 'header-menu', 
				'container'       => 'nav', 
				'container_class' => 'header__nav flex a-i__c', 
				'menu_class'      => 'header__list flex', 
				'items_wrap'      => '<ul class="header__list flex">%3$s</ul>',
				'depth'           => 2,
			]); 
       }
      	 


			?>


       
      </div>
      <div class="header__right flex">
        <button class="button-leed flex a-i__c j-c__c">Заказать </button>
        <div class="header__contacts flex f-d__c"><a class="tel" href="tel:+78123334546">8 (812) 333-45-46 </a><a class="mail" href="mailto:e.belenkov@sterh.net"> e.belenkov@sterh.net</a></div>
        <button class="header__hamburger"> <span> </span></button>
      </div>
    </header>