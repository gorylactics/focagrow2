<?php get_header() ?>

<div class="row">
    <div class="col-lg-2"></div>
    <div class="col-lg-8 single2">
        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
        <div class="">
            <h3>
                <?php the_title() ?>
            </h3>
            <hr>
            <?php if ( has_post_thumbnail() ) {
                    the_post_thumbnail('post-thumbnails' , array('class' => 'img-fluid'));
            }?>
            <hr>
            <p>
                <?php the_content() ?>
            </p>
            <hr>
            <p>
                <?php the_tags('Precio '); ?>
            </p>
            <hr>
            <p class="text-center btn-danger">
                Ver categoria completa : <?php the_category(' '); ?>
            </p>
        </div>
        </div>
       <?php endwhile; endif; ?>
       
    </div>
    
    <div class="col-lg-2"></div>
</div>


<?php get_footer() ?>