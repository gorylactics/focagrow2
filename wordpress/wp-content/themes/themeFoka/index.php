<?php get_header(); ?>

<div class="row">
    <div class="col-lg-9">
<!-- entradas -->
        <?php if ( have_posts() ) : while ( have_posts() ) : the_post('feminizadas','bong'); ?>
            <div class="card-body entradas col-lg-4">
                <a href="<?php the_permalink() ?>">
                    <h2>
                        <?php the_title()?>
                    </h2>
                </a>
                <h6><p class="small mb-0">fecha: <?php the_time('F j, Y'); ?></p>
                <p class="small mb-0">autor: <?php the_author(); ?></p>
                <p class="small mb-0">etiquetas: <?php the_tags('', '/', ''); ?>
                <p class="small mb-0">categoria: <?php the_category('/'); ?> </h6>
        
        <?php if ( has_post_thumbnail() ) {
            the_post_thumbnail('post-thumbnails' , array('class' => 'img-fluid mb-3'));}?>
            <?php the_excerpt()?>
            <a href="<?php the_permalink()?>" class="btn btn-primary btn-block">ir al articulo
            </a>
            <hr>
        </div>
<?php endwhile; endif; ?>
<!-- /entradas -->

<!-- paginacion -->
    <div class="card-body entradas col-lg-12">
        <?php get_template_part('template-parts/content', 'paginacion'); ?>
    </div>  
<!-- /paginacion -->

</div>
<!-- linea 33 div de cierre index.php -->

<?php get_sidebar(); ?>

<?php get_footer(); ?>

