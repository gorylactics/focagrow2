<?php get_header() ?>
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


                <!-- reportajes -->

                
              
           

            
             <hr>     
          </div>
<?php get_footer() ?>