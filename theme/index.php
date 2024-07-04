<?php
get_header();
?>
<h1><?php bloginfo('name'); ?></h1>
<h2><?php bloginfo('description'); ?></h2>

    <?php
    while (have_posts()) {
        the_post();
        get_template_part("template-parts/content", get_post_format());
    }
	?>

	<?php
	if (get_next_posts_link()) {
		next_posts_link();
	}
	?>
	<?php
	if (get_previous_posts_link()) {
		previous_posts_link();
	}
	?>

<?php get_footer(); ?>