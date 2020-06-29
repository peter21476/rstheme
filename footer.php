<!--FOOTER SECTION-->
<?php if(Kirki::get_option('restauranttheme_kirki_fields', 'footer_select' ) === 'option-1') { ?>
    <section id="footer-section">
    <div class="container">
    <div class="row center-flex">
        <div class="col-lg-12 social-media">
            <?php $facebook_check = get_theme_mod( 'restauranttheme_kirki_fields', 'social_media_checks', array( 'facebook' ) ); ?>
            <?php if ( ! empty( $facebook_check ) ) : ?>
                <a class="facebook-link" href="<?php
                $facebook_link = Kirki::get_option('restauranttheme_kirki_fields', 'facebook_link');
                    echo $facebook_link; 
                    ?>"><i class="fab fa-facebook-square"></i></a>
            <?php endif; ?>

            <?php $twitter_check = get_theme_mod( 'restauranttheme_kirki_fields', 'social_media_checks', array( 'twitter' ) ); ?>
            <?php if ( ! empty( $twitter_check ) ) : ?>
                <a class="twitter-link" href="<?php
                $twitter_link = Kirki::get_option('restauranttheme_kirki_fields', 'twitter_link');
                    echo $twitter_link; 
                    ?>"><i class="fab fa-twitter-square"></i></a>
            <?php endif; ?>

            <?php $instagram_check = get_theme_mod( 'restauranttheme_kirki_fields', 'social_media_checks', array( 'instagram' ) ); ?>
            <?php if ( ! empty( $instagram_check ) ) : ?>
                <a class="instagram-link" href="<?php
                $instagram_link = Kirki::get_option('restauranttheme_kirki_fields', 'instagram_link');
                    echo $instagram_link; 
                    ?>"><i class="fab fa-instagram-square"></i></a>
            <?php endif; ?>

            <?php $pinterest_check = get_theme_mod( 'restauranttheme_kirki_fields', 'social_media_checks', array( 'pinterest' ) ); ?>
            <?php if ( ! empty( $pinterest_check ) ) : ?>
                <a class="pinterest-link" href="<?php
                $pinterest_link = Kirki::get_option('restauranttheme_kirki_fields', 'pinterest_link');
                    echo $pinterest_link; 
                    ?>"><i class="fab fa-pinterest-square"></i></a>
            <?php endif; ?>

            <?php $youtube_check = get_theme_mod( 'restauranttheme_kirki_fields', 'social_media_checks', array( 'youtube' ) ); ?>
            <?php if ( ! empty( $youtube_check ) ) : ?>
                <a class="youtube-link" href="<?php
                $youtube_link = Kirki::get_option('restauranttheme_kirki_fields', 'youtube_link');
                    echo $youtube_link; 
                    ?>"><i class="fab fa-youtube-square"></i></a>
            <?php endif; ?>
            </div>
        </div>
    <div class="row">
        <div class="col-lg-12 fix-text" style="color:<?php echo Kirki::get_option('restauranttheme_kirki_fields', 'footer_text_color'); ?>">
        <?php if ( Kirki::get_option('restauranttheme_kirki_fields', 'footer_editor_section' ) ) {
        $footer_editor_text = Kirki::get_option('restauranttheme_kirki_fields', 'footer_editor_section');
        echo $footer_editor_text;
        } ?>
        </div>
    </div>
    </div>
</section>
        <?php } ?>

<?php wp_footer() ?>
</body>
</html>