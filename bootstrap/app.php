<?php

namespace ABC;

// Single instance of our app.
function app() {

	static $app = null;

	if ( is_null( $app ) ) {

		$dir = trailingslashit( get_parent_theme_file_path() );

		require_once( $dir . 'app/class-app.php' );
		require_once( $dir . 'app/class-container.php' );
		require_once( $dir . 'app/class-wrapper.php' );

		$app = new App( require_once( $dir . 'config/theme.php' ) );

		$app->container = new Container();

		$app->container->add( 'wrapper', new Wrapper() );

		$app->config['view'] = require_once( $dir . 'config/view.php' );
	}

	return $app;
}

app();

require_once( app()->dir . 'app/class-view.php' );

require_once( app()->dir . 'app/functions-setup.php' );
require_once( app()->dir . 'app/functions-template.php' );
