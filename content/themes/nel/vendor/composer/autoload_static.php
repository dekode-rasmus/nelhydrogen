<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

use Closure;

class ComposerStaticInit0ff5401441457bb307ed29c7ab62f1f4 {
	public static $prefixesPsr0 = array(
		'M' =>
			array(
				'Mustache' =>
					array(
						0 => __DIR__ . '/..' . '/mustache/mustache/src',
					),
			),
	);

	public static function getInitializer( ClassLoader $loader ) {
		return Closure::bind( function () use ( $loader ) {
			$loader->prefixesPsr0 = ComposerStaticInit0ff5401441457bb307ed29c7ab62f1f4::$prefixesPsr0;

		}, null, ClassLoader::class );
	}
}