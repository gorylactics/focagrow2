<?php get_header(); ?>
<div class="row">
    <div class="col-lg-12 contenedorRecomendados">
        <div class="col-lg-12">    
            <h3 class="mt-3" style="text-align: center;">Semillas
            </h3>
            <hr>
        </div> 
        <div class="col-lg-12">    
            <h3 class="mt-3" style="text-align: center;">Sativas Feminizadas
            </h3>
            <hr>
        </div> 
        <div class="col-lg-12">   
          <?php 
          // The Query
          $the_query = new WP_Query( array( 'posts_per_page' => 6,  'category_name' => 'reportajes'));
          // The Loop
          if ( $the_query->have_posts() ) : ?>    
            <?php while ( $the_query->have_posts() ) :
                          $the_query->the_post(); ?>
            <div class="card col-lg-3">
                <a href="<?php the_permalink() ?>">
                <p><?php the_title() ?></p>
                  <?php if ( has_post_thumbnail() ) 
                        {the_post_thumbnail('post-thumbnails' , array('class' => 'img-fluid  '));
                        }
                    ?>
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
        <div class="col-lg-12">    
            <h3 class="mt-3" style="text-align: center;">Sativas Automaticas
            </h3>
            <hr>
        </div> 
        <div class="col-lg-12">   
          <?php 
          // The Query
          $the_query = new WP_Query( array( 'posts_per_page' => 9,  'category_name' => 'sativas-automaticas'));
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
            <hr>  
        </div>      
    </div>
</div>

          
          
<?php get_footer(); ?>