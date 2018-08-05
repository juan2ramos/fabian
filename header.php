<!doctype html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php bloginfo('name'); ?><?php wp_title(); ?></title>
    <link rel="profile" href="http://gmpg.org/xfn/11">
    <link rel="shortcut icon" href="<?php bloginfo('template_url') ?>/public/images/favicon.ico" type="image/x-icon"/>
    <link rel="icon" type="image/png" sizes="32x32"
          href="<?php bloginfo('template_url') ?>/public/images/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96"
          href="<?php bloginfo('template_url') ?>/public/images/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16"
          href="<?php bloginfo('template_url') ?>/public/images/favicon-16x16.png">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900" rel="stylesheet">
    <meta name="description" content="<?php if (is_single()) {
        single_post_title('', true);
    } else {
        bloginfo('name');
        echo " - ";
        bloginfo('description');
    }
    ?>"/>
    <?php wp_head() ?>
</head>
<body <?php body_class(); ?> data-url="<?php echo site_url(); ?>" id="body">
<header class="Header">
    <div class="Header-social row container row justify-end middle-items">
        <figure class="Header-logo">
            <img src="<?php bloginfo('template_url') ?>/public/images/logo.gif" alt="">
        </figure>
        <i>¡Sigueme!</i>
        <span style="height: 32px; width: 32px;text-align: center; line-height: 32px;">F</span>
        <span style="height: 32px; width: 32px;text-align: center; line-height: 32px;">I</span>
        <span style="height: 32px; width: 32px;text-align: center; line-height: 32px;">Y</span>
    </div>
    <nav >
        <ul class="is-list-less row container row justify-end">
            <li><a href="">Inicio</a></li>
            <li><a href="">Fabian</a></li>
            <li><a href="">Recursos</a></li>
            <li><a href="">Contacto</a></li>
        </ul>
    </nav>

</header>


