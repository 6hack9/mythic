<?php namespace ABC; ?>

<?php posts_pagination( [
	'container_tag'   => 'nav',
	'container_class' => 'pagination pagination--posts',
	'list_tag'        => 'ul',
	'list_class'      => 'pagination__items',
	'item_tag'        => 'li',
	'item_class'      => 'pagination__item pagination__item--%s',
	'anchor_class'    => 'pagination__anchor pagination__anchor--%s'
] ) ?>
