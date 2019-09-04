<?php get_header(); ?>

<!-- contenido -->
    <div class="row">
<!-- secciones -->
      <div class="col-lg-12">
        <h3 class="mt-3" style="text-align: center;">Secciones
        </h3>
        <hr>
      </div>
    
      <div class="container padre col-lg-9">
        <div class="card">
          <a href="semillas">
            <img class="img-fluid" src="<?php bloginfo('template_url')?>/assets/img/secciones/semillas.JPEG" alt="">
          </a>
        </div>

        <div class="card">
          <a href="extracciones">
            <img class="img-fluid" src="<?php bloginfo('template_url')?>/assets/img/secciones/extracciones.JPEG" alt="">
          </a>
        </div>

        <div class="card">
          <a href="fertilizantes">
            <img class="img-fluid" src="<?php bloginfo('template_url')?>/assets/img/secciones/fertilizantes.JPEG" alt="">
          </a>
        </div>

        <div class="card">
          <a href="iluminacion">
            <img class="img-fluid" src="<?php bloginfo('template_url')?>/assets/img/secciones/iluminacion.JPEG" alt="">
          </a>
        </div>

        <div class="card">
          <a href="sustrato">
            <img class="img-fluid" src="<?php bloginfo('template_url')?>/assets/img/secciones/sustratos.JPEG" alt="">
          </a>
        </div>
        <hr>
      </div>  
<!--/secciones  -->

<?php get_sidebar(); ?>

<!-- seccion 2 -->
<div class="col-lg-9">
        <h3 class="mt-3" style="text-align: center;">Recomendados de foca
        </h3>
        <hr>
          <div class="col-lg-12 padre padre3">
            
            <span class="col-lg-3 hijo2">
              <a href="">
                <img class="recomendado" src="adr.png" alt="">
              </a>
            </span>

            
                  
          </div>
          <div class=" padre col-lg-12">
            <h3>Historio del</h3>
            <hr>
            <div class="historia col-lg-3">
              <img src="adr.png" alt="" class="img-fluid">
              <p style="margin: 10px;">Lorem ipsum dolor sit amet consectetur adipisicing elit. Beatae, ea blanditiis. Aspernatur error, architecto, optio illo deleniti nam vel maxime sunt et aliquam numquam dignissimos omnis asperiores dicta voluptas cumque!</p>
              <button class="btn btn-block"><p style="text-align: center;">
                <a href="single.html">click aca</a></p></button>
            </div>
          </div>
          
      </div>
<!-- seccion 2 -->
    </div><!-- div principal cierre ROW del Contenido-->
<!-- /contenido -->

<?php get_footer(); ?>

