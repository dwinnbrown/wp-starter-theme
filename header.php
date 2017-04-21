<!doctype html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" />
    <title>
        <?php bloginfo('name'); ?> | <?php if ( is_front_page() ) {bloginfo( 'description'); } else {wp_title(''); } ?>
    </title>
<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <div id="site-container" class="site-container">
        <header id="site-header" class="header">
                <nav class="site-nav">
                    <div class="container">
                        <div class="nav-wrapper">
                            <div class="left-nav">
                                <a href="<?php echo esc_url( home_url() ) ?>" title="<?php bloginfo('name'); ?>">
                                    <h1><?php bloginfo('name'); ?></h1>
                                </a>
                            </div>
                            <div class="right-nav">
                                <i class="fa fa-bars dropdown-toggle"></i>
                                <?php wp_nav_menu(array(
                                    'container' => false,
                                    'theme_location' => 'main-menu',
                                )); ?>
                            </div>
                        </div>
                    </div>
                </nav>
        </header>
        <div class="site-content">
