 <!-- footer -->
 <footer class="container__fluid py-4 text-center text-light bg-none footer col-lg-12">
  <div class="row">
    <div class="container col-lg-12 padre">
    <div class="col-lg-4 rrss">
      <a class="navbar-brand" href="<?php echo esc_url(('api.whatsapp.com/send?phone=56931319340')); ?>">
        <img src="<?php bloginfo('template_url')?>/assets/images/whatsapp-brands.svg" alt="rrss" class="rrss" >
      </a>
    <hr>
   <h6> Contactanos </h6>
  </div>

    <div class="col-lg-4 rrss">
    <a class="navbar-brand" href="<?php echo esc_url(home_url('/')); ?>">
        <img src="<?php bloginfo('template_url')?>/assets/images/globe-americas-solid.svg" alt="rrss" class="rrss" >
      </a>
    <hr>
     <h6> www.focagrow.cl </h6>
    </div>

    <div class="col-lg-4 rrss">
    <a class="navbar-brand" href="<?php echo esc_url(('https://www.instagram.com/foca_growshop')); ?>">
        <img src="<?php bloginfo('template_url')?>/assets/images/instagram-brands.svg" alt="rrss" class="rrss" >
      </a>
    <hr>
   <h6> Siguenos </h6>
  </div>
  </div>
  </div>
</footer>
    <!-- footer -->

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <?php wp_footer(); ?>
  </body>
</html>