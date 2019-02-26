<?php  get_header(); ?>

<main class="cd-main-content">
    <div class="owl-carousel" id="owl-hero">

      <div class="item">
        <div style="background-image: url('<?php bloginfo('template_url'); ?>/img/hero.jpeg');" class="cover">
          <h1>ASESORAMIENTO LEGAL DE ALTA CALIDAD
              CON UN ENFOQUE CREATIVO E INNOVADOR</h1>
        </div>
      </div>

      <div class="item">
        <div style="background-image: url('<?php bloginfo('template_url'); ?>/img/hero.jpeg');" class="cover">
          <h1>ASESORAMIENTO LEGAL DE ALTA CALIDAD
              CON UN ENFOQUE CREATIVO E INNOVADOR</h1>
        </div>
      </div>
      
    </div>

    <!-- <section class="bg-danger" style="height: 408px"></section> -->

    <section class="bg-primary py-3">
      <div class="container">
        <div class="row justify-content-center justify-content-sm-between align-items-center cta">
          <div class="col-12 mb-4 mb-sm-0 col-sm">
            <p class="text-white">¿Necesita asistencia legal profesional?</p>
          </div>
          <div class="col-auto">
            <a href="<?php echo home_url(); ?>/contacto" class="btn btn-light ">Haga su consulta</a>
          </div>
        </div>
      </div>
    </section>

    <section id="aniversario">
      <div class="container">
        <div class="row justify-content-center justify-content-lg-end justify-content-xl-center">
          <div class="col-auto d-lg-none mb-5">
              <img src="<?php bloginfo('template_url'); ?>/img/50.png" alt="50">
          </div>
          <div class="col-auto offset-xl-2">
            <p class="b-lead"><span>50 años</span> brindando seriedad y eficacia legal.<br>
                ¡Gracias a nuestros clientes por elegirnos!</p>
          </div>
          <img src="<?php bloginfo('template_url'); ?>/img/50.png" alt="50" class="d-none d-lg-block">
        </div>
      </div>
    </section>

    <section id="partners" class="bg-secondary">
      <div class="container">
        <div class="owl-carousel" id="owl-brand">
          <img src="<?php bloginfo('template_url'); ?>/img/clientes/farmacity.jpg" alt="farmacity">
          <img src="<?php bloginfo('template_url'); ?>/img/clientes/cablevision.jpg" alt="cablevision">
          <img src="<?php bloginfo('template_url'); ?>/img/clientes/mapfre.jpg" alt="mapfre">
          <img src="<?php bloginfo('template_url'); ?>/img/clientes/movistar.jpg" alt="movistar">
          <img src="<?php bloginfo('template_url'); ?>/img/clientes/sancorseguros.jpg" alt="sancorseguros">
          <img src="<?php bloginfo('template_url'); ?>/img/clientes/telecom.jpg" alt="telecom">
          <img src="<?php bloginfo('template_url'); ?>/img/clientes/zurich.jpg" alt="zurich">
          <img src="<?php bloginfo('template_url'); ?>/img/clientes/ferrum.jpg" alt="ferrum">
          <img src="<?php bloginfo('template_url'); ?>/img/clientes/farmacity.jpg" alt="farmacity">
          <img src="<?php bloginfo('template_url'); ?>/img/clientes/cablevision.jpg" alt="cablevision">
          <img src="<?php bloginfo('template_url'); ?>/img/clientes/mapfre.jpg" alt="mapfre">
          <img src="<?php bloginfo('template_url'); ?>/img/clientes/movistar.jpg" alt="movistar">
          <img src="<?php bloginfo('template_url'); ?>/img/clientes/sancorseguros.jpg" alt="sancorseguros">
          <img src="<?php bloginfo('template_url'); ?>/img/clientes/telecom.jpg" alt="telecom">
          <img src="<?php bloginfo('template_url'); ?>/img/clientes/zurich.jpg" alt="zurich">
          <img src="<?php bloginfo('template_url'); ?>/img/clientes/ferrum.jpg" alt="ferrum">
        </div>
      </div>
    </section>

    <section class="py-5" id='quote'>
      <div class="container">
        <div class="row justify-content-center justify-content-lg-start">
          <div class="col-lg-9 mb-5 mb-lg-0">
            <p class="pr-lg-5">
              Con más de 50 años de experiencia seguimos defendiendo los intereses de nuestros clientes con el más alto estándar de seguridad posible, proporcionando un asesoramiento jurídico personalizado, eficaz y de calidad con un enfoque creativo e innovador en el logro de sus objetivos, generador de confianza y resultados.
            </p>
            <img src="<?php bloginfo('template_url'); ?>/img/quote.svg" alt="quote">
          </div>
          <div class="col-md-6 col-lg-3">
            <h2>Que hacemos</h2>
            <ul>
              <li>- Derecho Bancario Y Financiero</li>
              <li>- Reestructuración de Deudas</li>
              <li>- Concursos y Quiebras</li>
              <li class="d-md-none d-lg-block">- Derecho Administrativo</li>
              <li class="d-md-none d-lg-block">- Derecho Ambiental</li>
              <li class="d-md-none d-lg-block">- Derecho comercial y de la competencia</li>
            </ul>
          </div>
          <div class="col-md-6 col-lg-3 d-none d-md-block d-lg-none">
              <h2 style="visibility: hidden;">Que hacemos</h2>
              <ul>
                <li>- Derecho Administrativo</li>
                <li>- Derecho Ambiental</li>
                <li>- Derecho comercial y de la competencia</li>
              </ul>
            </div>
          <div class="col-auto mt-5">
            <a href="<?php echo home_url(); ?>/firma" class="btn btn-lg btn-primary">MÁS SOBRE NOSOTROS</a>
          </div>
        </div>
      </div>
    </section>

    <section id="home-blog" class="bg-secondary">
      <div class="container">
        <div class="row">
          <div class="col">
            <h2>Publicaciones</h2>
          </div>
        </div>
        <div class="row">

          <?php 
            
          $args = "array(
            'posts_per_page' => 3,
            'order_by' => date,
            'order' => DESC,
          )";

          $the_query = new WP_Query( $args );
          
          if($the_query->have_posts()) : while($the_query->have_posts()) : $the_query->the_post();
          ?>
          
          <div class="col-md-6 col-lg-4 mb-5 mb-lg-0">
            <div class="rw-card">
              <!-- <div class="rw-card-top cover" style="background-image: url('https://picsum.photos/200/300')"></div> -->
              <div class="rw-card-body">
                <a href="<?php the_permalink(); ?>"><h3><?php the_title(); ?>.</h3></a>
                <p><?php the_excerpt(); ?></p>
                <span>
                  <!-- Etiqueta -->
                  <ul>
                  <li><?php the_category( ', ' );?></li>
                  </ul>
                </span>
              </div>
            </div>
          </div>

          <?php endwhile; wp_reset_postdata(); endif;?>

        </div>
      </div>
    </section>
</main>

<?php  get_footer(); ?>