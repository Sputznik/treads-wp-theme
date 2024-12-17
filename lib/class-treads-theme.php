<?php

/**
 * BOOTSTRAPS THEME SPECIFIC FUNCTIONALITIES
 */
class TREADS_THEME {

  public function __construct() {

    add_action( 'wp_enqueue_scripts', array( $this, 'assets' ) );  // LOAD ASSETS

  }

  function assets() {

    // ENQUEUE STYLES
    wp_enqueue_style('treads-core-css', TREADS_THEME_URI.'/assets/css/main.css', array('sp-core-style'), TREADS_THEME_VERSION );

  }

}

new TREADS_THEME;
