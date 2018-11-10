<aside class="Social Blog-sidebar">

    <div class="Blog-box">
        <h4 class="Social-h4 ">POST RECIENTES</h4>
        <ul class="Blog-sidebarList is-list-less">
			<?php
			$args = array(
				'post_type'      => 'post',
				'post_status'    => 'publish',
				'posts_per_page' => 5,
			);
			$loop = new WP_Query( $args );
			while ( $loop->have_posts() ) : $loop->the_post() ?>
                <li><a href="<?php the_permalink() ?>"><?php the_title() ?> </a></li>
			<?php endwhile;
			wp_reset_postdata(); ?>
        </ul>
    </div>
    <form action="/" class="Blog-sidebarForm row"  role="search" method="get" >
        <label for="" class="col-11 col-m-16 col-l-11 ">
            <input type="text" name="s" placeholder="Buscar"></label>
        <div class="col-l-5 col-5 col-m-16">
            <button type="submit">Buscar</button>
        </div>
    </form>
    <div class="Blog-box">
        <h4 class="Social-h4 ">COMENTARIOS RECIENTES</h4>
        <ul class="Blog-sidebarList is-list-less">
            <li>Mustache fixie chillwave dolor butcher</li>
            <li>Paleo umami stumptown dolor irony</li>
            <li>Hashtag lomo blue bottle typewriter.</li>
            <li>Lomo blue bottle typewriter shoreditch.</li>
            <li>Lomo blue bottle typewriter shoreditch.</li>
        </ul>
    </div>
    <div class="Blog-box">
        <h4 class="Social-h4 ">CATEGORÍAS</h4>
        <ul class="Blog-sidebarList is-list-less">
			<?php $categories = get_categories();
			foreach ( $categories as $category ): ?>
                <li><a href="<?php echo get_category_link($category->term_id)?>"><?php echo $category->name ?></a></li>
			<?php endforeach ?>
        </ul>
    </div>
    <div class="Blog-box Tags">
        <h4 class="Social-h4 ">TAGS</h4>
        <ul class="Blog-sidebarList is-list-less row">
			<?php $tags = get_tags( $post );
			foreach ( $tags as $tag ):?>

                <li><a href="<?php echo get_tag_link( $tag->term_id ); ?>"><?php echo $tag->name; ?></a></li>

			<?php endforeach; ?>

        </ul>
    </div>
</aside>
