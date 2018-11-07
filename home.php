<?php get_header(); ?>
<?php echo do_shortcode( "[rev_slider alias='home']" ); ?>
    <section class="row Home-tutorials">
        <article class="col-8 col-l-4">
            <img src="<?php bloginfo( 'template_url' ) ?>/public/images/1.jpg" alt="">
        </article>
        <article class="col-8 col-l-4">
            <img src="<?php bloginfo( 'template_url' ) ?>/public/images/2.jpg" alt="">
        </article>
        <article class="col-8 col-l-4">
            <img src="<?php bloginfo( 'template_url' ) ?>/public/images/3.jpg" alt="">
        </article>
        <article class="col-8 col-l-4">
            <img src="<?php bloginfo( 'template_url' ) ?>/public/images/4.jpg" alt="">
        </article>
        <article class="col-8 col-l-4">
            <img src="<?php bloginfo( 'template_url' ) ?>/public/images/5.jpg" alt="">
        </article>
        <article class="col-8 col-l-4">
            <img src="<?php bloginfo( 'template_url' ) ?>/public/images/6.jpg" alt="">
        </article>
        <article class="col-8 col-l-4">
            <img src="<?php bloginfo( 'template_url' ) ?>/public/images/7.jpg" alt="">
        </article>
        <article class="col-8 col-l-4">
            <img src="<?php bloginfo( 'template_url' ) ?>/public/images/8.jpg" alt="">
        </article>

        <div class="col-16 is-text-center margin-40 load-more">
            <a class="load-moreLink" href="">CARGAR MÁS TUTORIALES</a>
            <hr class="load-moreHr">

        </div>
    </section>
    <div class="Newsletter">
        <div class="Newsletter-container row">
            <div class="col-16 col-l-10">
                <h4 class="Newsletter-h4">SE PARTE DEL EJERCITO GRÁFICO</h4>
                <p class="Newsletter-p">suscribete a nuestro newsletter para recibir recursos y noticias interesantes cada rato</p>
                <form action="" class="row Newsletter-form">
                    <input class=" col-16 col-m-12 Newsletter-input" type="text" placeholder="Escribe tu correo">
                    <button  type="submit" class=" col-16 col-m-4 Newsletter-button">Suscribete</button>
                </form>
            </div>
            <figure class="Newsletter-image col-6">
                <img src="<?php bloginfo('template_url') ?>/public/images/img-newsletter.png" alt="">
            </figure>
        </div>
    </div>
<?php get_footer();
