<?php get_header(); ?>

    <main class="Blog  container row ">
        <section class="margin-top-60 col-m-11 col-16">
            <h1 class="Blog-h1">
				<?php
				printf( esc_html__( '  Resultado de búsqueda: %s', 'mintecceramic' ), '<span>' . get_search_query() . '</span>' );
				?>
            </h1>
            <ul class="Search is-list-less">
				<?php

				while ( have_posts() ) : the_post();
					?>
                    <li class=" col-16  row middle-items">
                        <a class="Blog-link" href="<?php the_permalink() ?>">
                            <h3><?php the_title() ?> </h3>
                            <span class="is-text-uppercase"> <?php the_author() ?> • </span>
                            <span class="is-text-uppercase"> <?php the_date( 'M d, Y' ); ?> • </span>
                            <span class="is-text-uppercase"> 1 <?php get_comments_number() ?> COMENTARIO </span>
                        </a>

                    </li>
				<?php endwhile;
				wp_reset_postdata(); ?>
            </ul>
        </section>
        <div class="col-m-5 col-16 margin-top-16">
			<?php get_sidebar( 'blog' ); ?>
        </div>
    </main>

<?php get_footer();
