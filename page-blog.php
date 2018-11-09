<?php get_header(); ?>

    <main class="Blog  container row ">
        <section class="margin-top-60 col-m-11 col-16 row justify-between">
			<?php echo do_shortcode( "[rev_slider alias='blog']" ); ?>
            <div class="Blog-articlesContent">
				<?php for ( $i = 0; $i < 8; $i ++ ) : ?>
                    <article class=" col-16 Blog-article row">
                        <figure class="col-m-6 col-16">
                            <img src="<?php bloginfo( 'template_url' ) ?>/public/images/<?php echo $i + 1 ?>.jpg"
                                 alt="">
                        </figure>
                        <div class="col-m-10 col-16 Blog-content">
                            <h3>Este es un título del blog de Fabian el publicista </h3>
                            <div class="margin-top-28 margin-bottom-20">
                                <span> FABIAN EL PUBLICISTA • </span>
                                <span> NOVIEMBRE 12, 2017 • </span>
                                <span> 1 COMENTARIO </span>
                            </div>
                            <p>Lorem ipsum dolor amet crucifix farm-to-table banh mi, live-edge forage succulents synth
                                retro austin waistcoat jean shorts.Lorem ipsum dolor amet crucifix farm-to-table banh
                                mi, live-edge forage succulents synth retro austin waistcoat jean shorts. Quinoa tacos
                                four loko, venmo beard kinfolk tbh marfa cronut viral. Celiac flannel enamel pin tumeric
                                narwhal man bun. Ennui flexitarian deep. <a class="Blog-link" href="">Leer Más >></a> </p>
                        </div>
                    </article>
				<?php endfor; ?>
            </div>
        </section>
        <div class="col-m-5 col-16 margin-top-16">
			<?php get_sidebar( 'blog' ); ?>
        </div>
    </main>

<?php get_footer();
