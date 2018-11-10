<?php get_header(); ?>
<?php echo do_shortcode( "[rev_slider alias='home']" ); ?>
    <section class="row Home-tutorials">

		<?php
		$args = array(
			'post_type'      => 'tutorial',
			'post_status'    => 'publish',
			'posts_per_page' => 8,
		);
		$loop = new WP_Query( $args );
		while ( $loop->have_posts() ) : $loop->the_post() ?>
            <article class="col-8 col-l-4 Home-article ">
                <img src="<?php echo get_the_post_thumbnail_url() ?>" alt="">
                <div class="Home-articleContent justify-center row middle-items">
                    <h3 class="col-16 is-text-center"><?php the_title()?></h3>
                    <div class="Home-articleContentLink"><a href="<?php the_permalink()?>">VER +</a></div>
                </div>
            </article>
		<?php endwhile;
		wp_reset_postdata(); ?>
        <div class="col-16 ">
            <div class="col-16 is-text-center margin-40 load-more">
                <a class="load-moreLink" href="/tutoriales">CARGAR MÁS TUTORIALES</a>
                <hr class="load-moreHr">
            </div>
        </div>
    </section>
    <div class="Newsletter">
        <div class="Newsletter-container row">
            <div class="col-16 col-l-10">
                <h4 class="Newsletter-h4">SE PARTE DEL EJERCITO GRÁFICO</h4>
                <p class="Newsletter-p">sSuscríbete para informarte sobre nuevos tutoriales, recursos, talleres y noticias de tu interés.</p>
                <form action="" class="row Newsletter-form">
                    <input class=" col-16 col-m-12 Newsletter-input" type="text" placeholder="Escribe tu correo">
                    <button type="submit" class=" col-16 col-m-4 Newsletter-button">Suscribete</button>
                </form>
            </div>
            <figure class="Newsletter-image col-6">
                <img src="<?php bloginfo( 'template_url' ) ?>/public/images/img-newsletter.png" alt="">
            </figure>
        </div>
    </div>
<?php get_footer();
