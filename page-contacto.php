<?php  get_header(); ?>

<main class="cd-main-content">

    <div class="item">
      <div style="height: 150px;" class="bg-primary">
        <h1 class="text-center">CONTACTO</h1>
      </div>
    </div>

    <section class="py-5 my-4">
      <div class="container">
        <div class="row">

          <div class="col-lg-6">
            <h2>CONTACTO</h2>
            <p class="mb-4">
              Av.. 25 de Mayo 480 <br>
              Planta Alta - Oficina 6<br>
              H3500AAR<br>
              54 (0362) 4444832 / 4430617<br>
              Resistencia - Chaco - Argentina<br>
              <a href="mailto:info@gabardini-abogados.com.ar">info@gabardini-abogados.com.ar</a>
            </p>
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3540.7060639343313!2d-58.992420248724464!3d-27.44726982223808!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94450c601ac23f2d%3A0x7ac179b50f0da33a!2sAv.+25+de+Mayo+480%2C+H3500AAR+Resistencia%2C+Chaco!5e0!3m2!1ses-419!2sar!4v1551196536431" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
          </div>

          <div class="col-lg-6 pl-lg-5 mt-5 mt-lg-0">
            <h2>CONSULTAS</h2>
            <p class="mb-4">
                Nos dedicamos  al asesoramiento jurídico tanto en la prevención de conflictos legales como a la hora de realizar nuevos emprendimientos.
            </p>
            <?php echo do_shortcode('[ninja_form id=2]'); ?>
          </div>
        </div>
      </div>
    </section>
</main>

<?php  get_footer(); ?>