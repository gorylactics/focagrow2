<?php get_header() ?>

<div class="row">
    <div class="col-lg-1"></div>
    <div class="col-lg-10">
        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
             
                <div class="card-body mb-auto elpost">
                    
                    <?php if ( has_post_thumbnail() ) {
                    the_post_thumbnail('post-thumbnails' , array('class' => 'img-fluid mb-3 single'));
                    }?>
                    <h3>
                        <?php the_title() ?>
                    </h3>
                <p>
                    <?php the_content() ?>
                </p>
                <?php the_tags('Precio '); ?>
                    <!-- <p class=" mb-0">fecha: <?php the_time('F j, Y'); ?></p>
                    <p class=" mb-0">autor: <?php the_author()?></p>
                    <p class=" mb-0">categoria: <?php the_category('/'); ?>    
                    <hr> -->


                    <a href="javascript:history.back()"> 
                    <input type="button" value=”Volver  onclick=”history.back(-1)” class="btn btn-primary btn-block"/></a>

            


                </div>
            </div>
       <?php endwhile; endif; ?>
    </div>
    <div class="col-lg-1"></div>
</div>


<?php get_footer() ?>