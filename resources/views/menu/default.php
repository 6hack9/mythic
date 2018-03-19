<?php if ( has_nav_menu( $data->name ) ) : ?>

	<nav class="menu menu--<?= esc_attr( $data->name ) ?>">

		<h3 class="menu__title screen-reader-text"><?= Hybrid\get_menu_name( $data->name ) ?></h3>

		<?php wp_nav_menu( [
			'theme_location' => $data->name,
			'container'      => '',
			'menu_id'        => '',
			'menu_class'     => 'menu__items',
			'items_wrap'     => '<ul class="%2$s">%3$s</ul>',
			'item_spacing'   => 'discard'
		] ) ?>

	</nav>

<?php endif ?>
