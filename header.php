<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta property="og:title" content="RS Theme" />
    <meta property="og:description" content="A custom Wordpress theme desidgned for restaurants" />
    <meta property="og:image" content="//wprestaurant.site/wp-content/themes/restaurant-theme/img/rsthemefacebook.jpg" />
    <title>RS Theme</title>

    <?php wp_head() ?>

</head>
<body>

<header>
    <div class="container-fluid menu-wrapper">
        <div class="row">
            <div class="col-lg-5 logo-text">
            <?php if ( Kirki::get_option('restauranttheme_kirki_fields', 'header_logo_text' ) ) {
                    $headerLogo_text = Kirki::get_option('restauranttheme_kirki_fields', 'header_logo_text');
                    echo $headerLogo_text;
            } ?>
            <div class="mobile-toggler"><i class="fas fa-toggle-on"></i></div>
            </div>
            <div class="col-lg-7">
                <?php 
                    wp_nav_menu (
                        array (
                            'theme_location'=> 'top-menu' ,
                            'menu_class' => 'top-bar'
                        )
                    );
                ?>
            </div>
        </div>
    </div>
    <div class="container-fluid remove-margin-padding">
        <div id="header" class="background-image">
            <div class="header-intro">
                <div class="header-text">
                <h1><?php if ( Kirki::get_option('restauranttheme_kirki_fields', 'header_background_text' ) ) {
                    $headerOne_text = Kirki::get_option('restauranttheme_kirki_fields', 'header_background_text');
                    echo $headerOne_text;
                    } ?></h1>
                    <h3><?php
                    $subtext = Kirki::get_option('restauranttheme_kirki_fields', 'header_background_subtext');
                    if($subtext != '') {
                        echo $subtext;
                    } else {
                        echo "Edit this by going to your...";
                    }
                ?>
                    </h3>
                </div>
            </div>
        </div>

    </div>
</header>