<?php get_header(); ?>
    <main class="main bg-pattern">
    	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
      <div class="bg-img"> <?php the_post_thumbnail(); ?></div>
      <div class="container pd-200">
        <div class="page page--news">
          <h1><?php echo get_the_title(); ?></h1>
          <img src="images/news-image.jpg" alt="">
          <?php the_content(); ?>
          <div class="other-news flex j-c__s-b a-i__c"><a class="button--nav" href="#">Предыдущая новость</a><a class="button button--blue" href="category-news.html">ВСЕ НОВОСТИ</a><a class="button--nav" href="#">Следующая новость</a></div>
        </div>
      </div>

      <?php endwhile; ?>
      <?php endif; ?>
    </main>
 <?php get_footer();?>