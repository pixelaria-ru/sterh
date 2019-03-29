<?php get_header(); ?>
	
    <main class="main bg-pattern">
    	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
      <div class="bg-img"> <img src="<?php echo STERH_IMG_DIR; ?>/initial-screen.jpg" alt=""></div>
      <div class="container pd-200">
        <div class="page page--contatcs">
          <h1><?php  echo get_the_title(); ?></h1>
          <?php the_content(); ?>
          <div class="map"></div>
        </div>
      </div>

       <?php endwhile; ?>
      <?php endif; ?>
    </main>


 <?php get_footer();?>