<?php get_header(); ?>

<!-- contenido -->
<div class="row">
<!-- secciones -->
  <div class="col-lg-12">
    <div class="col-lg-12">
    <h3 class="mt-3" style="text-align: center;">Secciones
    </h3>
    <hr>
    </div>
  </div>
  <div class="container padre col-lg-9">
    <div class="seccion">
      <a href="semilla">
        <img class="img-fluid" src="<?php bloginfo('template_url')?>/assets/img/secciones/semillas.JPEG" alt="">
      </a>
    </div>
    <div class="seccion">
      <a href="extracciones">
        <img class="img-fluid" src="<?php bloginfo('template_url')?>/assets/img/secciones/extracciones.JPEG" alt="">
      </a>
    </div>
    <div class="seccion">
      <a href="fertilizantes">
        <img class="img-fluid" src="<?php bloginfo('template_url')?>/assets/img/secciones/fertilizantes.JPEG" alt="">
      </a>
    </div>
    <div class="seccion">
      <a href="iluminacion">
        <img class="img-fluid" src="<?php bloginfo('template_url')?>/assets/img/secciones/iluminacion.JPEG" alt="">
      </a>
    </div>
    <div class="seccion">
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
    <a  class="link" href="recomendados">
      <h3 class="mt-3" style="text-align: center;">Recomendados de foca</h3>
    </a>
    <hr>
    <div>
    <?php
      $the_query = new WP_Query( array( 'posts_per_page' => 9,  'category_name' => 'recomendados'));
        if ( $the_query->have_posts() ) : ?>    
      <?php while ( $the_query->have_posts() ) :
                  $the_query->the_post(); ?>
        <a class="link" href="<?php the_permalink() ?>">
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
    <hr>     
  </div>
          
  <div class="col-lg-12">
    <a class="link" href="reportajes">
      <h3 class="mt-3" style="text-align: center;">Historias de una foca</h3>
    </a>
    <hr>
  </div>
  
    
  <div class="col-lg-12 padreProducto" >   
          <?php 
          // The Query
          $the_query = new WP_Query( array( 'posts_per_page' => 5,  'category_name' => 'reportajes , recomendados'));
          // The Loop
          if ( $the_query->have_posts() ) : ?>    
            <?php while ( $the_query->have_posts() ) :
                          $the_query->the_post(); ?>
            <div class="col-lg-3 historia" >
                <a class="link" href="<?php the_permalink() ?>">
                <p><?php the_title() ?></p>
                <hr>
                  <?php if ( has_post_thumbnail() ) 
                        {the_post_thumbnail('post-thumbnails' , array('class' => 'img-fluid'));
                        }
                    ?><hr>
                    <?php the_excerpt() ?>
                    
                </a>
                </div>
            <?php endwhile ?>
            <?php wp_reset_postdata();
                    else : ?>
                        <p>no posts found </p> 
                <?php endif; ?>
            <hr>  
        </div>
      </div>       
    </div>        
  </div>
<!-- seccion 2 -->
</div><!-- div principal cierre ROW del Contenido-->
<!-- /contenido -->

<?php get_footer() ?>

