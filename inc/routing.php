<?php

namespace BFS;


class Router {

	private static $rootDir = __ROOT__;

	public static $routeWithCMS = false;

	public static $urlSlug = null;

	public static $httpResponseCode = 200;	// assume that it's going to go well

	public static function getSanitizedURLSlug ( $path = null ) {
		$pathString = $path ?: $_SERVER[ 'REQUEST_URI' ];
		$pathStringMinusQueryParameters = strstr( $pathString, '?', true ) ?: $pathString;
		return trim( $pathStringMinusQueryParameters, '/' );
	}

	public static function route ( $path = null ) {

		if ( BFS_PRIVATE_SITE )
			header( 'X-Robots-Tag: noindex' );

		self::$urlSlug = self::getSanitizedURLSlug( $path );

		// If the URL resembles that of a post that has never been published (even once), and is a "preview" or "revision", i.e. like so
		// `/?p=19` or `/?page_id=19`
		// ... then delegate the routing to the CMS
		if (
			self::$urlSlug == ''
			and self::$routeWithCMS
			and (
				! empty( $_GET[ 'p' ] )
				or ! empty( $_GET[ 'page_id' ] )
			)
		) {
			require_once self::$rootDir . '/inc/cms.php';
			return \BFS\CMS::route();
		}

		// Find an exact match of the *entire* slug
		$routeFilename = self::$rootDir
						. '/pages/'
						. ( self::$urlSlug ?: 'home' )
						. '.php';
		if ( file_exists( $routeFilename ) )
			return require_once $routeFilename;

		// Find a match (recursively) for the slug (subtracting portions of it from the end)
		$urlSlugParts = explode( '/', self::$urlSlug );
		for (
			$i = count( $urlSlugParts ) - 1;
			$i > 0;
			$i -= 1
		) {
			$routeFilename = self::$rootDir
							. '/pages/'
							. implode( '/', array_slice( $urlSlugParts, 0, $i ) )
							. '.php';
			if ( file_exists( $routeFilename ) ) {
				$postSlug = implode( '/', array_slice( $urlSlugParts, $i ) );
				return require_once $routeFilename;
			}
		}

		if ( self::$routeWithCMS ) {
			require_once self::$rootDir . '/inc/cms.php';
			\BFS\CMS::route();
		}
		else {
			$routeFilename = self::$rootDir
							. '/pages/'
							. '404.php';
			self::$httpResponseCode = 404;
			return require_once $routeFilename;
		}

	}

}
