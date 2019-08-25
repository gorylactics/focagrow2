<?php

    // Register Custom Navigation Walker
    require_once get_template_directory() . '/template-parts/navbar.php';

    function themeFoka_agregar_css_js(){
        
        wp_register_style('style' ,get_stylesheet_uri());
        wp_register_style('bootstrap_css', 'https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css', null, null);
        wp_register_style('main', get_parent_theme_file_uri('/assets/css/main.css'), null, null);
        wp_register_style( 'fonts', 'https://fonts.googleapis.com/css?family=Bungee+Inline|Lobster+Two|Pompiere&display=swap', null, null, null );
        wp_register_style( 'fonts2', 'https://fonts.googleapis.com/css?family=Anton|Roboto+Mono&display=swap', null, null, null );


        
        wp_enqueue_style( 'style' );
        wp_enqueue_style( 'bootstrap_css' );
        wp_enqueue_style( 'main' );
        wp_enqueue_style( 'fonts' );
        wp_enqueue_style( 'fonts2' );
        
        wp_enqueue_script('bootstrap_js', 'https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js', array('jquery'),'4.2', true);
        wp_enqueue_script('app_js', get_template_directory_uri(). '/assets/js/app.js', array('bootstrap_js'), 1.0, true);

        
    };
    add_action('wp_enqueue_scripts', 'themeFoka_agregar_css_js');

    // soporte de imagenes destacadas
    if ( function_exists( 'add_theme_support' ) ) {
        add_theme_support( 'post-thumbnails' );
       
     }

    function themeFoka_widgets(){

        register_sidebar(array(
            'id' => 'widgets-derecha',
            'name' => __('widget derecha'),
            'description' => __('arma el widget'),
            'before_widget' => '<div class="card-body">',
            'after_widget' => '</div>',
            'before_title' => '<h4>',
            'after_title' => '</h4><hr>'
        ));
    } 
        add_action('widgets_init', 'themeFoka_widgets');
    
    


        function themeFoka_register_my_menus() {
            register_nav_menus(
              array(
                'menu-principal' => __( 'Menu Principal GROW' ),
                
               )
             );
           }
           add_action( 'init', 'themeFoka_register_my_menus' );
    

           function ejr_limite_extracto ($longitud) {
            return 13;
        }
        add_filter ('excerpt_length', 'ejr_limite_extracto', 999);


?>
