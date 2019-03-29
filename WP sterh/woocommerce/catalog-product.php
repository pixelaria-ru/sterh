 <article class="product-card"><a class="flex" href="<?php  echo get_post_permalink(); ?>">

  <?php the_post_thumbnail(); ?>
                <div class="product-card__info"> 
                  <h3><?php  echo get_the_title(); ?></h3>
                  <ul class="product-card__list">
                    <li class="product-card__item flex">
                      <p>Основная / резервная мощность:</p>
                      <p><?php echo get_post_meta( $post->ID, 'Основная мощность', true ); ?>/<?php echo get_post_meta( $post->ID, 'Резервная мощность', true ); ?></p>
                    </li>
                    <li class="product-card__item flex">
                      <p>Двигатель, генератор:</p>
                      <p><?php echo get_post_meta( $post->ID, 'Двигатель', true ); ?>, <?php echo get_post_meta( $post->ID, 'Генератор переменного тока', true ); ?></p>
                    </li>
                    <li class="product-card__item flex">
                      <p>Объем топливного бака:</p>
                      <p><?php echo get_post_meta( $post->ID, 'Объем топливного бака', true ); ?> </p>
                    </li>
                  </ul>
                </div>
                <button class="button button--blue">Заказать</button></a></article>