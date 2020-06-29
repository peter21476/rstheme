<?php if ( have_posts() ) : while( have_posts() ): the_post();?>

<h3><?php the_title() ?></h3>

<?php the_content();?>

<?php endwhile; else:endif;?>
