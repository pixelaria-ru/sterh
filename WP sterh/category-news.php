 <?php get_header(); ?>
    <main class="main bg-pattern">
      <div class="bg-img"> <img src="<?php echo STERH_IMG_DIR; ?>/bg-category-news.jpg" alt=""></div>
      <div class="container pd-200">
        <div class="page">
          <h1>Последние Новости</h1>

            <?php 
              if ( have_posts() ) : 
              while ( have_posts() ) : 
                the_post(); 
              ?>
              <article class="news-article"><a class="flex" href="<?php  echo get_post_permalink(); ?>"><?php the_post_thumbnail(); ?>
                  <div class="news-article__info">
                    <h3><?php echo get_the_title(); ?></h3>
                    <?php the_excerpt(); ?>

                  </div></a></article>

                  <?php endwhile; ?>
                  <?php endif; ?>
         
        </div>
      </div>
    </main>
 <?php get_footer();?>