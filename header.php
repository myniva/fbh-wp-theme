<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="<?php bloginfo( 'charset' ); ?>">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <meta name="viewport" content="width=device-width">
        <title><?php bloginfo('name'); ?><?php wp_title('|'); ?></title>
        
        <!-- Font für Titel -->
        <link href='http://fonts.googleapis.com/css?family=Syncopate:400,700' rel='stylesheet' type='text/css'>
        <link href='http://fonts.googleapis.com/css?family=Graduate' rel='stylesheet' type='text/css'>
        <!-- Font für Fliesstext -->
        <link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro' rel='stylesheet' type='text/css'>

        <link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>">        

        <script src="<?php echo get_template_directory_uri(); ?>/js/lib/modernizr-2.6.2-respond-1.1.0.min.js"></script>
        
        <?php 
            /* Always have wp_head() just before the closing </head>
             * tag of your theme, or you will break many plugins, which
             * generally use this hook to add elements to <head> such
             * as styles, scripts, and meta tags.
             */
            wp_head();
        ?>
    </head>

    <body <?php body_class(); ?>>

        <div class="container">
            <div class="wrapper clearfix">
            
                <div class="navigation">
                    <div class="title">
                        <a href="<?php echo site_url(); ?>"><img src="<?php echo get_template_directory_uri(); ?>/images/logo_transparent_250x288.png" alt="Logo Floorball Heiden" /></a>
                    </div>
                    <?php wp_nav_menu(
                        array(
                            'menu' => 'main',
                            'sort_column' => 'menu_order',
                            'container' => 'nav',
                            'container_class' => 'menu-header',
                            'depth' => '2',
                            'fallback_cb' => 'wp_page_menu'
                        )
                    );?>
                </div>