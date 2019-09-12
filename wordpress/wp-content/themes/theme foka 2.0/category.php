<?php get_header() ?>

<div class="row">
<div class="col-lg-12">
        <h1 class="text-center">
        <?php the_category('/'); ?>
        </h1>
        <hr>
    </div>
    <div class="col-lg-12 padreProducto" >   
    <?php 
        $the_query = new WP_Query( array( 'posts_per_page' => 99,  'category_name' => ''));
        
        if ( $the_query->have_posts() ) : ?>    
        <?php while ( $the_query->have_posts() ) :
                    $the_query->the_post(); ?>
        <div class="col-lg-2 historia" >
            <a href="<?php the_permalink() ?>">
                <p><?php the_title() ?></p>
                <hr>
                <?php if ( has_post_thumbnail() ) 
                    {the_post_thumbnail('medium' , array('class' => 'img-fluid'));
                    }?>
                <hr>
                <p><?php the_excerpt() ?></p><hr>
            </a>
                <p class="enlace"><?php the_tags('Precio: $')?></p>
                <hr>
        </div>
            <?php endwhile ?>
            <?php wp_reset_postdata();
                    else : ?>
                        <p>no posts found </p> 
                <?php endif; ?>
            <hr>  
    </div>
</div>


<?php get_footer() ?>