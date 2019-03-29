 <?php get_header(); ?>
 <main class="main bg-pattern">
      <section class="section--initial-screen initial-screen-catalog flex a-i__c">
        <div class="container pd-200 flex f-d__c a-i__f-e">
          <div class="initial-screen__info"> 
            <h1><?php woocommerce_page_title(); ?></h1>
            <div class="initial-screen__info--text">
            <?php do_action( 'woocommerce_archive_description' ); ?>
            </div>
           </div>
        </div>
      </section>
      <div class="container pd-200">

      		<?php 
      			if ( wc_get_loop_prop( 'total' ) ) {
    					while ( have_posts() ) {
    						the_post();
    	
    						do_action( 'woocommerce_shop_loop' );
    						wc_get_template_part( 'catalog', 'product' );
    						}
    					}

      		?>
      		

      </div>
      <section class="section--consultation">
        <div class="container pd-200">
          <h2>Трудно определиться с выбором?</h2>
          <p>Наш специалисты будут рады помочь подобрать оптимальное оборудование для решения ваших задач</p><a class="button--consultation" href="#">Заказать консульттацию</a>
        </div>
      </section>
    </main>

     <?php get_footer();?>