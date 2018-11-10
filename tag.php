<?php get_header(); ?>

    <main class="Blog  container row ">
        <section class="margin-top-60 col-m-11 col-16 row justify-between">
			<?php echo do_shortcode( "[rev_slider alias='blog']" ); ?>

            <h1 class="col-16 Blog-h1">Tag: <?php single_tag_title(); ?></h1>
            <div class="Blog-articlesContent">
				<?php

				while ( have_posts() ) : the_post();
				?>
                    <article class=" col-16 Blog-article row">
                        <figure class="col-m-6 col-16">
                            <img class="Blog-articleImg"
                                 src="<?php echo get_the_post_thumbnail_url( )?>"
                                 alt="">
                        </figure>
                        <div class="col-m-10 col-16 Blog-content">
                            <h3><?php the_title()?> </h3>
                            <div class="margin-top-28 margin-bottom-20">
                                <span class="is-text-uppercase"> <?php the_author()?> • </span>
                                <span class="is-text-uppercase"> <?php the_date('M d, Y');?> • </span>
                                <span class="is-text-uppercase"> 1 <?php get_comments_number()?> COMENTARIO </span>
                            </div>
                            <p><?php echo excerpt_tutorial(510);?> <a class="Blog-link" href="<?php the_permalink()?>">Leer Más >></a>
                            </p>
                        </div>
                    </article>
				<?php endwhile;
				wp_reset_postdata(); ?>
            </div>
        </section>
        <div class="col-m-5 col-16 margin-top-16">
			<?php get_sidebar( 'blog' ); ?>
        </div>
    </main>

<?php get_footer();
