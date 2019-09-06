<?php get_header() ?>
<div class="row">
    <div class="col-lg-1"></div>
    <div class="col-lg-10">
        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
             
                <div class="card-body mb-auto elpost">
                <h3>
                        <?php the_title() ?>
                    </h3>
                    <?php if ( has_post_thumbnail() ) {
                    the_post_thumbnail('post-thumbnails' , array('class' => 'img-fluid mb-3 single'));
                    }?>
                   
                <p>
                    <?php the_content() ?>
                </p>
               


                    <a href="javascript:history.back()"> 
                    <input type="button" value=”Volver  onclick=”history.back(-1)” class="btn  btn-block"/></a>

            


                </div>
            </div>
       <?php endwhile; endif; ?>
    </div>
    <div class="col-lg-1"></div>
</div>
<?php get_footer() ?>