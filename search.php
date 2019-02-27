<?php get_header(); ?>

<main class="cd-main-content">

    <div class="item">
      <div style="height: 150px;" class="bg-primary">
        <h1 class="text-center">RESULTADO DE BÚSQUEDA</h1>
      </div>
    </div>

    <section class="py-5 my-4">
      <div class="container">
        <div class="row">

          <div class="col-12">
            <h2>Resultados para: 
              <?php /* Search Count */ 
              $allsearch = new WP_Query("s=$s&showposts=-1"); 
              $key = wp_specialchars($s, 1); 
              $count = $allsearch->post_count; _e(''); 
              _e('<span class="search-terms">'); echo $key; 
              _e('</span>');?>
              <small><?php _e(' &mdash; '); echo $count . ' '; _e('artículo/s'); wp_reset_query();  ?></small>
            </h2>
          </div>

          <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

          <div class="col-12 mt-4">
            <div class="rw-card bg-grey">
              <div class="rw-card-body">
                <span>
                  <ul>
                    <li><?php the_category( ', ' );?></li>
                  </ul>
                </span>
                <h3 class="w-75 mb-1"><?php the_title(); ?>.</h3>
                <time datetime="<?php the_time('Y-m-d G:i'); ?>"><?php the_time('d \d\e F Y'); ?></time>
                <p class="mt-3"><?php the_excerpt(); ?></p>
              </div>
            </div>
          </div>

          <?php endwhile; endif; ?>

          <ul class="mt-5 mx-auto">
            <?php
            echo paginate_links( array( 'prev_text'          => __('<span class="fa-stack" style="vertical-align: top;"><i class="far fa-circle fa-stack-2x"></i><i class="fas fa-chevron-left fa-stack-1x"></i></span>'),
                                        'next_text'          => __('<span class="fa-stack" style="vertical-align: top;"><i class="far fa-circle fa-stack-2x"></i><i class="fas fa-chevron-right fa-stack-1x"></i></span>'),
                                        ) 
                                );
            ?>
          </ul>

        </div>
      </div>
    </section>
</main>

<?php get_footer(); ?>