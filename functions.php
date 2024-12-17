<?php

/*  CONSTANTS */
if( !defined( 'TREADS_THEME_VERSION' ) ) {
  define( 'TREADS_THEME_VERSION', time() );
}

if( !defined( 'TREADS_THEME_URI' ) ) {
  define( 'TREADS_THEME_URI', get_stylesheet_directory_uri() );
}

if( !defined( 'TREADS_THEME_PATH' ) ) {
  define( 'TREADS_THEME_PATH', get_stylesheet_directory() );
}

// INCLUDE FILES
$inc_files = array(
  'lib/class-treads-theme.php',
  'lib/treads-orbit-cf.php'
);

foreach( $inc_files as $inc_file ){ require_once( $inc_file ); }
