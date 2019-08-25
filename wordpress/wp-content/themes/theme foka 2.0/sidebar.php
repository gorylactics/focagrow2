<!-- aside -->
<div class="container col-lg-3">
    <div class="aside card card-body col-lg-12">
    <?php if ( is_active_sidebar( 'widgets-derecha' ) ) : ?>
                <?php dynamic_sidebar( 'widgets-derecha' ); ?>
            <?php else : ?>
                <!-- para agregar un nuevo sidebar -->
            <?php endif; ?>
    </div>
    <hr>
    
  </div>
<!-- /aside -->