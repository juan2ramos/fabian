<!doctype html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php bloginfo( 'name' ); ?><?php wp_title(); ?></title>
    <link rel="profile" href="http://gmpg.org/xfn/11">
    <link rel="shortcut icon" href="<?php bloginfo( 'template_url' ) ?>/public/images/favicon.ico" type="image/x-icon"/>
    <link rel="icon" type="image/png" sizes="32x32"
          href="<?php bloginfo( 'template_url' ) ?>/public/images/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96"
          href="<?php bloginfo( 'template_url' ) ?>/public/images/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16"
          href="<?php bloginfo( 'template_url' ) ?>/public/images/favicon-16x16.png">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900" rel="stylesheet">
    <meta name="description" content="<?php if ( is_single() ) {
		single_post_title( '', true );
	} else {
		bloginfo( 'name' );
		echo " - ";
		bloginfo( 'description' );
	}
	?>"/>
	<?php wp_head() ?>
</head>
<body <?php body_class(); ?> data-url="<?php echo site_url(); ?>" id="body">
<header class="Header">
    <div class="Header-social row container row justify-end middle-items">
        <figure class="Header-logo">
            <a href="/">
                <img src="<?php bloginfo( 'template_url' ) ?>/public/images/logo.gif" alt="">
            </a>
        </figure>
        <i>¡Sigueme!</i>
        <span>
           <a target="_blank" href="https://www.facebook.com/FabianElPublicista">

<svg width="32px" height="32px" viewBox="0 0 50 50" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
    <!-- Generator: Sketch 50.2 (55047) - http://www.bohemiancoding.com/sketch -->
    <desc>Created with Sketch.</desc>
    <defs></defs>
    <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
        <g id="iconfacebook" fill="#001E5D" fill-rule="nonzero">
            <path d="M47.4,18.4 C46.1,17.3 44.4,16.6 42.7,16.6 L41.1,16.6 L35.4,16.6 L32.7,16.6 L32.7,9.5 C32.7,6.1 31.7,3.7 29.7,2.2 C26.6,-0.1 22.3,1.2 22.1,1.3 C21.4,1.5 20.9,2.2 20.9,3 L20.9,11.5 C20.9,14.1 19.7,16.3 17.2,18.1 C15.3,19.4 13.4,20.1 13.2,20.1 L13,20.1 C12.3,19.4 11.4,18.9 10.3,18.9 L3.6,18.9 C1.6,18.9 0,20.5 0,22.5 L0,44.3 C0,46.3 1.6,47.9 3.6,47.9 L10.3,47.9 C11.2,47.9 12,47.6 12.6,47.1 C13.9,48.4 15.8,49.2 17.7,49.2 L24.3,49.2 L25,49.2 L38.6,49.2 C40.7,49.2 42.5,48.7 44,47.7 C45.8,46.5 46.9,44.5 47.2,42.1 L49.9,25.3 C50.3,22.7 49.4,20 47.4,18.4 Z M10.4,44.3 C10.4,44.4 10.4,44.4 10.3,44.4 L3.6,44.4 C3.5,44.4 3.5,44.4 3.5,44.3 L3.5,22.5 C3.5,22.4 3.5,22.4 3.6,22.4 L10.3,22.4 C10.4,22.4 10.4,22.4 10.4,22.5 L10.4,44.3 Z M46.4,24.7 L43.7,41.5 C43.7,41.5 43.7,41.5 43.7,41.6 C43.6,42.6 43.2,45.7 38.6,45.7 L25,45.7 L24.3,45.7 L17.7,45.7 C15.8,45.7 14.2,44.3 13.9,42.4 C13.9,42.3 13.9,42.3 13.9,42.2 L13.9,23.5 L14,23.5 C14,23.5 14,23.5 14.1,23.5 C14.2,23.5 16.7,22.8 19.1,21 C22.5,18.6 24.3,15.3 24.3,11.5 L24.3,4.4 C25.3,4.3 26.6,4.3 27.6,5.1 C28.6,5.9 29.2,7.4 29.2,9.6 L29.2,18.4 C29.2,19.4 30,20.1 30.9,20.1 L35.4,20.1 L41.1,20.1 L42.7,20.1 C43.6,20.1 44.4,20.4 45.1,21 C46.2,21.9 46.7,23.3 46.4,24.7 Z" id="Shape"></path>
        </g>
    </g>
</svg>
               </a>
        </span>
        <span>
            <a target="_blank" href="https://www.instagram.com/fabianelpublicista/">

<svg width="32px" height="32px" viewBox="0 0 28 28" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
    <!-- Generator: Sketch 50.2 (55047) - http://www.bohemiancoding.com/sketch -->
    <desc>Created with Sketch.</desc>
    <defs></defs>
    <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
        <g id="iconinstagram" fill="#001E5D" fill-rule="nonzero">
            <path d="M20.944,0 L7.056,0 C3.192,0 0,3.192 0,7.056 L0,20.944 C0,24.808 3.192,28 7.056,28 L20.944,28 C24.864,28 28,24.808 28,20.944 L28,7.056 C28,3.192 24.808,0 20.944,0 Z M24.976,20.944 C24.976,23.184 23.184,24.976 20.944,24.976 L7.056,24.976 C4.816,24.976 3.024,23.184 3.024,20.944 L3.024,7.056 C3.024,4.816 4.816,3.024 7.056,3.024 L20.944,3.024 C23.184,3.024 24.976,4.816 24.976,7.056 L24.976,20.944 Z" id="Shape"></path>
            <path d="M21.448,8.288 C20.496,8.288 19.768,7.504 19.768,6.608 C19.768,5.656 20.552,4.928 21.448,4.928 C22.4,4.928 23.128,5.712 23.128,6.608 C23.128,7.504 22.4,8.288 21.448,8.288 Z" id="Shape"></path>
            <path d="M14,6.776 C10.024,6.776 6.776,10.024 6.776,14 C6.776,17.976 10.024,21.224 14,21.224 C17.976,21.224 21.224,17.976 21.224,14 C21.224,10.024 17.976,6.776 14,6.776 Z M14,18.144 C11.704,18.144 9.856,16.296 9.856,14 C9.856,11.704 11.704,9.856 14,9.856 C16.296,9.856 18.144,11.704 18.144,14 C18.144,16.296 16.296,18.144 14,18.144 Z" id="Shape"></path>
        </g>
    </g>
</svg>
                </a>
        </span>
        <span class="padding-top-4">
            <a target="_blank" href="https://www.youtube.com/channel/UC6BTdM6cS_mMYWpVLai1QNA">

<svg width="32px" height="23px" viewBox="0 0 28 20" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
    <!-- Generator: Sketch 50.2 (55047) - http://www.bohemiancoding.com/sketch -->
    <desc>Created with Sketch.</desc>
    <defs></defs>
    <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
        <g id="iconyoutube" fill="#001E5D" fill-rule="nonzero">
            <path d="M3.50000007,19.1800004 C7.00000014,19.6000004 10.5000002,19.6000004 14.0000003,19.6000004 C17.5000003,19.6000004 21.0000004,19.6000004 24.5000005,19.1800004 C25.9700005,19.0400004 27.1600005,17.9200003 27.5100005,16.4500003 C28.0000005,14.3500003 28.0000005,12.0400002 28.0000005,9.80000019 C28.0000005,7.63000015 28.0000005,5.3200001 27.5100005,3.15000006 C27.1600005,1.68000003 25.9700005,0.560000011 24.5000005,0.420000008 C21.0000004,0 17.5000003,0 14.0000003,0 C10.5000002,0 7.00000014,0 3.50000007,0.420000008 C2.03000004,0.560000011 0.840000016,1.68000003 0.49000001,3.15000006 C0,5.3200001 0,7.63000015 0,9.80000019 C0,11.9700002 0,14.2800003 0.49000001,16.4500003 C0.840000016,17.9200003 2.03000004,19.0400004 3.50000007,19.1800004 Z M10.3600002,4.9000001 C13.3000003,6.44000013 16.2400003,7.98000016 19.2500004,9.52000019 C16.2400003,11.0600002 13.3000003,12.6000002 10.3600002,14.1400003 L10.3600002,4.9000001 Z" id="Shape"></path>
        </g>
    </g>
</svg>
            </a>

        </span>
    </div>

    <nav>
        <div class="mobile-menu">
            <span></span>
            <span></span>
            <span></span>
        </div>
        <ul class="large is-list-less row container row justify-end middle-items">
            <li><a href="/">Inicio</a></li>
            <li><a href="/fabian">Fabian</a></li>
            <li><a href="/tutoriales">Tutoriales</a></li>
            <li><a href="/recursos">Recursos</a></li>
            <li><a href="/cursos">Conferencias y talleres</a></li>
            <li><a href="/contacto">Contacto</a></li>
            <li><a href="">
                    <svg width="25px" height="25px" viewBox="0 0 25 25" version="1.1" xmlns="http://www.w3.org/2000/svg"
                         xmlns:xlink="http://www.w3.org/1999/xlink">
                        <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                            <g id="icon-search" fill="#00185E" fill-rule="nonzero">
                                <path d="M23.8586957,21.25 L18.5326087,15.923913 C18.4782609,15.8695652 18.4782609,15.8695652 18.423913,15.8695652 C19.4565217,14.2934783 20.0543478,12.3913043 20.0543478,10.326087 C20.0543478,4.7826087 15.5434783,0.27173913 10,0.27173913 C4.51086957,0.27173913 0,4.7826087 0,10.326087 C0,15.8695652 4.51086957,20.3804348 10.0543478,20.3804348 C12.1195652,20.3804348 13.9673913,19.7826087 15.5978261,18.75 C15.5978261,18.8043478 15.6521739,18.8043478 15.6521739,18.8586957 L20.9782609,24.1847826 C21.7934783,25 23.0434783,25 23.8586957,24.1847826 C24.673913,23.3152174 24.673913,22.0108696 23.8586957,21.25 Z M10.0543478,16.9021739 C6.41304348,16.9021739 3.47826087,13.9673913 3.47826087,10.326087 C3.47826087,6.68478261 6.41304348,3.75 10.0543478,3.75 C13.6956522,3.75 16.6304348,6.68478261 16.6304348,10.326087 C16.6304348,13.9673913 13.6956522,16.9021739 10.0543478,16.9021739 Z"
                                      id="Shape"></path>
                            </g>
                        </g>
                    </svg>
                </a></li>
        </ul>
    </nav>
    <div class="mobile-menuContent row is-full-screen middle-items justify-center">
        <ul class="is-list-less">
            <li><a href="/">Inicio</a></li>
            <li><a href="/fabian">Fabian</a></li>
            <li><a href="/tutoriales">Tutoriales</a></li>
            <li><a href="/recursos">Recursos</a></li>
            <li><a href="/cursos">Cursos</a></li>
            <li><a href="/contacto">Contacto</a></li>

        </ul>
    </div>
</header>


