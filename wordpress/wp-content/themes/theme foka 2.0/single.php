<?php get_header() ?>
<div class="row">
    <div class="col-lg-5">
        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
        <div class="card-body mb-auto">
            <h3>
            <?php the_title() ?>
            </h3>
            <?php if ( has_post_thumbnail() ) {
            the_post_thumbnail('medium' , array('class' => 'img-fluid'));
            }?>
            <p>
                <?php the_content() ?>
            </p>
            <p>ver todo <?php the_category(' ') ?></p>
            <p><?php the_tags('Precio = $ ') ?></p>
            <a href="javascript:history.back()"> 
                <input type="button" value=Volver  onclick=”history.back(-1)”/>
            </a>
        </div>    
       <?php endwhile; endif; ?>
       <div>
       
            </div>
</div>
<?php get_footer() ?>