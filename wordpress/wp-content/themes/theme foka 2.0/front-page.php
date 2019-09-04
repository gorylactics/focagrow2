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
      <div class="col-lg-9 contenedorRecomendados">
        
        
        <a href="recomendados">
          <h3 class="mt-3" style="text-align: center;">Recomendados de foca</h3>
        </a>
        <hr>
          <?php 
          // The Query
          $the_query = new WP_Query( array( 'posts_per_page' => 9,  'category_name' => 'recomendados'));
          // The Loop
          if ( $the_query->have_posts() ) : ?>    
            <?php while ( $the_query->have_posts() ) :
                          $the_query->the_post(); ?>
              
              
                <a href="<?php the_permalink() ?>">
                  <?php if ( has_post_thumbnail() ) 
                        {the_post_thumbnail('post-thumbnails' , array('class' => 'img-fluid recomendado '));
                        }
                        ?>
                </a>
                      
        
                <?php endwhile ?>
            <?php wp_reset_postdata();
                    else : ?>
                        <p>no posts found </p> 
                <?php endif; ?>  
              
           

            
                  
          </div>
          <div class=" padre col-lg-12">
              <a href="reportajes">
            <h3>Historio del</h3>
            </a>
            <hr>
            <div class="historia col-lg-3">
              <img src="<?php bloginfo('template_url')?>/adr.png" alt="" class="img-fluid">
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

