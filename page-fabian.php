<?php get_header(); ?>
<?php echo do_shortcode( "[rev_slider alias='fabian']" ); ?>
<?php while ( have_posts() ) : the_post(); ?>
	<?php the_content() ?>
<?php endwhile; ?>

<?php get_footer();
