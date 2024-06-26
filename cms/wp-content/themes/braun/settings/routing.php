<?php

/*
 |
 | Routing
 |
 */
add_action( 'template_redirect', function () {

	// If the URL slug is simply `cms`, then forward to the login or admin screen depending on if the user is already logged in or not
	global $wp;
	if ( $wp->request == 'cms' ) {
		nocache_headers();
		$redirectURL = is_user_logged_in() ? get_admin_url() : wp_login_url();
		wp_redirect( $redirectURL, 302, 'BFS' );
		exit;
	}

	// If the site is private, prompt the user to log in
	if ( BFS_PRIVATE_SITE and ! is_user_logged_in() )
		if ( substr( $_SERVER[ 'REQUEST_URI' ], 0, strlen( '/robots.txt' ) ) != '/robots.txt' ) {
			$redirectURL = wp_login_url() . '?redirect_to=' . urlencode( get_home_url() . $_SERVER[ 'REQUEST_URI' ] );
			wp_redirect( $redirectURL, 302, 'BFS' );
			exit;
		}

} );


/*
 |
 | ----- robots.txt
 | 	Disable the default one.
 |
 */
// If the site is private, then prevent the Google Sitemap plugin from adding the sitemap line in the robots.txt file
add_action( 'wp_loaded', function () {
	if ( BFS_PRIVATE_SITE or ! get_option( 'blog_public' ) )
		remove_all_actions( 'do_robots', 100 );
} );
add_filter( 'robots_txt', function ( $output, $isSitePublic ) {
	if ( BFS_PRIVATE_SITE or ! $isSitePublic ) {
		$output = 'User-agent: *'
				. "\n"
				. 'User-agent: AdsBot-Google'
				. "\n"
				. 'Disallow: /'
				. "\n"
				. 'Disallow: /*'
				. "\n"
				. 'Disallow: /*?'
				. "\n";
	}
	else {
		$output = 'User-agent: *'
				. "\n"
				. 'Disallow: /media'
				. "\n"
				. 'Allow: /media/*.png'
				. "\n"
				. 'Allow: /media/*.svg'
				. "\n"
				. 'Allow: /media/*.jpg'
				. "\n"
				. 'Allow: /media/*.jpeg'
				. "\n";
	}

	return $output;
}, 100, 2 );

// Cache page routes to the CDN (CloudFlare), for 1 minute
add_filter( 'send_headers', function () {
	if ( is_user_logged_in() ) {
		// ^ This does not work in this filter.
		// 	Hence this check is performed in CloudFlare's cache rule instead,
		// 	looking for the presence of the `wordpress_logged_in...` cookie.
		return;
	}

	header( 'Cache-Control: s-maxage=60', true );
}, PHP_INT_MAX );
