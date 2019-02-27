<?php  get_header(); ?>

<main class="cd-main-content">

    <div class="item">
      <div style="height: 150px;" class="bg-primary">
        <h1 class="text-center">PUBLICACIONES</h1>
      </div>
    </div>

    <section class="py-5 my-4">
      <div class="container">
        <div class="row">
          <?php if(have_posts()) : the_post(); ?>
          <div class="col-12 col-lg-9 mt-4" id="content">
            <h2 class="mb-1" style="text-transform: unset;"><?php the_title(); ?></h2>
            <time datetime="<?php the_time('Y-m-d G:i'); ?>"><?php the_time('d \d\e F Y'); ?></time>
            <div class="my-5"></div>
            
            <?php the_content(); ?>

            <p class="text-xs">
                Este artículo intenta proveer al lector de información básica acerca de cuestiones de interés general, no pretende ser exhaustivo ni brindar asesoramiento legal. Para asesoramiento acerca de hechos particulares o cuestiones legales, por favor consulte con su consejero legal.
            </p>
          </div>

          <?php endif; ?>

          <div class="col-12 col-lg-3 mt-4">
            <h2 style="text-transform: unset;font-size:22px; color: #777777;" class="mb-3">Otros artículos</h2>

            <?php 
            
            $args = "array(
              'post_type' => 'post',
              'posts_per_page' => 3,
              'order_by' => date,
              'order' => DESC,
            )";

            $the_query = new WP_Query( $args );
            
            if($the_query->have_posts()) : while($the_query->have_posts()) : $the_query->the_post();
            ?>

              <div class="rw-card bg-grey mb-4">
                <div class="rw-card-body">
                  <span>
                    <ul>
                      <li><?php the_category( ', ' );?></li>
                    </ul>
                  </span>
                  <a href="<?php the_permalink(); ?>"><h3 class="mb-4 pr-lg-4"><?php the_title(); ?>.</h3></a>
                  <time datetime="<?php the_time('Y-m-d G:i'); ?>"><?php the_time('d \d\e F Y'); ?></time>
                </div>
              </div>
            
            <?php endwhile; wp_reset_postdata(); endif;?>

            <div class="row justify-content-center mx-0">
              <div class="col-12 bg-primary p-4 text-center">
                <p class="text-white mb-3 font-weight-normal">¿Necesita asistencia legal profesional?</p>
                <a href="<?php echo home_url(); ?>/contacto" class="btn btn-light btn-block ">CONTACTENOS</a>
              </div>
            </div>
          </div>

        </div>
      </div>
    </section>
</main>

<?php  get_footer(); ?>