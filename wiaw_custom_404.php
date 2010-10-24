<?php


remove_action('thesis_hook_404_title', 'thesis_404_title');
add_action('thesis_hook_404_title', 'custom_thesis_404_title');

function custom_thesis_404_content() {
    ?>
<p>Can't find what you want?</p>

    <?php if (smart404_loop()) : ?>
<p>Try one of these posts instead:</p>
    <?php while (have_posts()) : the_post(); ?>
<h4><a href="<?php the_permalink() ?>" rel="bookmark"
	title="<?php the_title_attribute(); ?>"> <?php the_title(); ?></a></h4>
<small><?php the_excerpt(); ?></small>
    <?php endwhile; ?>
    <?php endif; ?>

    <?php
}

remove_action('thesis_hook_404_content', 'thesis_404_content');
add_action('thesis_hook_404_content', 'custom_thesis_404_content');


?>
