<?php get_header() ?>


<div class="row">
    <div class="col-lg-9">
        <div>
            <?php 
            // The Query
            $the_query = new WP_Query( array( 'posts_per_page' => 1,  'category_name' => 'portada')); 

            // The Loop
            if ( $the_query->have_posts() ) : ?>
                
                <?php while ( $the_query->have_posts() ) :
                    $the_query->the_post(); ?>
                    <h1>
                        <p class="destacado">Destacado <?php the_title() ?>
                        </p>
                    </h1>
                    

                    <div class=" card card-body entradas col-lg-12">
                        <a href="<?php the_permalink() ?>">
                            <?php if ( has_post_thumbnail() ) 
                                {the_post_thumbnail('post-thumbnails' , array('class' => 'img-fluid mb-3'));
                                }
                            ?>  
                        </a>
                        <hr>
                    </div>
                <?php endwhile ?>
            <?php wp_reset_postdata();
                    else : ?>
                        <p>no posts found </p> 
                <?php endif; ?>
                </div>
<div>
<hr>

                <?php 
            // The Query
            $the_query = new WP_Query( array( 'posts_per_page' => 9,  'category_name' => 'destacadosecundario')); 

            // The Loop
            if ( $the_query->have_posts() ) : ?>
                
                <?php while ( $the_query->have_posts() ) :
                    $the_query->the_post(); ?>
                    <div class="card card-body entradas col-lg-4">
                    <p class="destacado_secundario">⭐️<?php the_title() ?>
                        </p>
                        <a href="<?php the_permalink() ?>">
                            <?php if ( has_post_thumbnail() ) 
                                {the_post_thumbnail('post-thumbnails' , array('class' => 'img-fluid mb-3'));
                                }
                            ?>  
                           
                        </a>
                        <p class="extracto">
                        <?php the_excerpt() ?></p>
                        <p><?php the_tags('Precio $'); ?></p>
                       
                    </div>
                <?php endwhile ?>
                <?php wp_reset_postdata();
                    else : ?>
                        <p>no posts found </p> 
                <?php endif; ?>
                </div>
        <div>
    </div>
</div>




<?php get_sidebar() ?>
<?php get_footer() ?>