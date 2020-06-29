<?php get_header(); ?>

<!--ABOUT SECTION-->
<?php if(Kirki::get_option('restauranttheme_kirki_fields', 'about_select' ) === 'option-1') { ?>
    <section id="about-section">
    <div class="container">
    <div class="row">
        <div class="col-md-12">
            <h2 style="color:<?php echo Kirki::get_option('restauranttheme_kirki_fields', 'about_text_color'); ?>"><?php if ( Kirki::get_option('restauranttheme_kirki_fields', 'about_headline_section' ) ) {
        $aboutus_headline = Kirki::get_option('restauranttheme_kirki_fields', 'about_headline_section');
        echo $aboutus_headline;
        } ?></h2>
        </div>
    </div>
    <div class="row">
    <?php if(Kirki::get_option('restauranttheme_kirki_fields', 'about_section_image')): ?>
         <div class="col-lg-6">
        <img src="<?php echo Kirki::get_option('restauranttheme_kirki_fields', 'about_section_image'); ?>" class="img-fluid" />
        </div>
        <div class="col-lg-6 fix-text" style="color:<?php echo Kirki::get_option('restauranttheme_kirki_fields', 'about_text_color'); ?>">
        <?php if ( Kirki::get_option('restauranttheme_kirki_fields', 'about_editor_section' ) ) {
        $aboutus_editor_text = Kirki::get_option('restauranttheme_kirki_fields', 'about_editor_section');
        echo $aboutus_editor_text;
        } ?>
        </div>
    <?php endif; ?>
    <?php if(Kirki::get_option('restauranttheme_kirki_fields', 'about_section_image') === ''): ?>
        <div class="col-lg-12 fix-text" style="color:<?php echo Kirki::get_option('restauranttheme_kirki_fields', 'about_text_color'); ?>">
        <?php if ( Kirki::get_option('restauranttheme_kirki_fields', 'about_editor_section' ) ) {
        $aboutus_editor_text = Kirki::get_option('restauranttheme_kirki_fields', 'about_editor_section');
        echo $aboutus_editor_text;
        } ?>
        </div>
    <?php endif; ?>
    </div>
    </div>
</section>
        <?php } ?>



<!--FOOD SECTION-->
<?php if(Kirki::get_option('restauranttheme_kirki_fields', 'food_select' ) === 'option-1') { ?>
    <section id="food-section">
    <div class="container">
    <div class="row">
        <div class="col-md-12">
            <h2 style="color:<?php echo Kirki::get_option('restauranttheme_kirki_fields', 'food_text_color'); ?>"><?php if ( Kirki::get_option('restauranttheme_kirki_fields', 'food_headline_section' ) ) {
        $food_headline = Kirki::get_option('restauranttheme_kirki_fields', 'food_headline_section');
        echo $food_headline;
        } ?></h2>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12 fix-text" style="color:<?php echo Kirki::get_option('restauranttheme_kirki_fields', 'food_text_color'); ?>">
        <?php if ( Kirki::get_option('restauranttheme_kirki_fields', 'food_editor_section' ) ) {
        $food_editor_text = Kirki::get_option('restauranttheme_kirki_fields', 'food_editor_section');
        echo $food_editor_text;
        } ?>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12">
        
        </div>
    </div>
    <div id="react-app"></div><!-- #react-app -->
    </div>

</section>
        <?php } ?>


<!--PARALLAX SECTION-->
<?php if(Kirki::get_option('restauranttheme_kirki_fields', 'parallax_select' ) === 'option-1') { ?>
    <section id="parallax-section">
    <div class="container">
    <div class="row">
        <div class="col-md-12">
            <h2 style="color:<?php echo Kirki::get_option('restauranttheme_kirki_fields', 'parallax_text_color'); ?>"><?php if ( Kirki::get_option('restauranttheme_kirki_fields', 'parallax_headline_section' ) ) {
        $parallax_headline = Kirki::get_option('restauranttheme_kirki_fields', 'parallax_headline_section');
        echo $parallax_headline;
        } ?></h2>
        </div>
    </div>
    <div class="row">
    <?php if(Kirki::get_option('restauranttheme_kirki_fields', 'parallax_section_image')): ?>
         <div class="col-lg-6">
        <img src="<?php echo Kirki::get_option('restauranttheme_kirki_fields', 'parallax_section_image'); ?>" class="img-fluid" />
        </div>
        <div class="col-lg-6 fix-text" style="color:<?php echo Kirki::get_option('restauranttheme_kirki_fields', 'parallax_text_color'); ?>">
        <?php if ( Kirki::get_option('restauranttheme_kirki_fields', 'parallax_editor_section' ) ) {
        $parallax_editor_text = Kirki::get_option('restauranttheme_kirki_fields', 'parallax_editor_section');
        echo $parallax_editor_text;
        } ?>
        </div>
    <?php endif; ?>
    <?php if(Kirki::get_option('restauranttheme_kirki_fields', 'parallax_section_image') === ''): ?>
        <div class="col-lg-12 fix-text" style="color:<?php echo Kirki::get_option('restauranttheme_kirki_fields', 'parallax_text_color'); ?>">
        <?php if ( Kirki::get_option('restauranttheme_kirki_fields', 'parallax_editor_section' ) ) {
        $parallax_editor_text = Kirki::get_option('restauranttheme_kirki_fields', 'parallax_editor_section');
        echo $parallax_editor_text;
        } ?>
        </div>
    <?php endif; ?>
    </div>
    </div>
</section>
        <?php } ?>



<!--PHOTOGALLERY SECTION-->
<?php if(Kirki::get_option('restauranttheme_kirki_fields', 'photos_select' ) === 'option-1') { ?>
    <section id="photos-section">
    <div class="container">
    <div class="row">
        <div class="col-md-12">
            <h2 style="color:<?php echo Kirki::get_option('restauranttheme_kirki_fields', 'photos_text_color'); ?>"><?php if ( Kirki::get_option('restauranttheme_kirki_fields', 'photos_headline_section' ) ) {
        $photos_headline = Kirki::get_option('restauranttheme_kirki_fields', 'photos_headline_section');
        echo $photos_headline;
        } ?></h2>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12">
        <?php if ( function_exists( 'envira_gallery' ) ) { envira_gallery( 'food-gallery', 'slug' ); } ?>
        </div>
    </div>
    </div>
</section>
        <?php } ?>

<!--MAP SECTION-->
<?php if(Kirki::get_option('restauranttheme_kirki_fields', 'map_select' ) === 'option-1') { ?>
    <section id="map-section">
    <div class="container">
    <div class="row">
        <div class="col-md-12">
            <h2 style="color:<?php echo Kirki::get_option('restauranttheme_kirki_fields', 'map_text_color'); ?>"><?php if ( Kirki::get_option('restauranttheme_kirki_fields', 'map_headline_section' ) ) {
        $map_headline = Kirki::get_option('restauranttheme_kirki_fields', 'map_headline_section');
        echo $map_headline;
        } ?></h2>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-6" style="color:<?php echo Kirki::get_option('restauranttheme_kirki_fields', 'parallax_text_color'); ?>">
        <div class="map-responsive">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3002.2364866780067!2d-73.13304508433377!3d41.194817515873154!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89e80cf6f15e97c7%3A0x42a5b4aefbf8d6f3!2sStratford!5e0!3m2!1sen!2sus!4v1593048488731!5m2!1sen!2sus" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
        </div>
        </div>
        <div class="col-lg-6" style="color:<?php echo Kirki::get_option('restauranttheme_kirki_fields', 'map_text_color'); ?>">
        <?php if ( Kirki::get_option('restauranttheme_kirki_fields', 'map_editor_section' ) ) {
        $map_editor_text = Kirki::get_option('restauranttheme_kirki_fields', 'map_editor_section');
        echo $map_editor_text;
        } ?>
        </div>

    </div>
    </div>
</section>
        <?php } ?>


<?php get_footer(); ?>
