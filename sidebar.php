<aside class="Social">

		<?php dynamic_sidebar( 'Sidebar-social' ); ?>

    <div class="Social-newsletter">
        <h4 class="Social-h4">Anda pendiente de lo que pasa</h4>
        <p class="Social-p"> Mantente al tanto de todo. Suscríbete a mi página web y recibe en tu correo noticias sobre
            nuevos tutoriales, recursos y talleres que siempre traigo para ti. </p>
		<?php if ( is_active_sidebar( 'sidebar-1' ) ) : ?>
			<?php dynamic_sidebar( 'sidebar-1' ); ?>
		<?php endif; ?>
    </div>

</aside>
