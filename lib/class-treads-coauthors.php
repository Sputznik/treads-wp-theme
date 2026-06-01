<?php

/**
 * BOOTSTRAPS COAUTHORS SPECIFIC FUNCTIONALITIES
 */
class TREADS_COAUTHORS {

  function __construct(){

    /* SHORTCODE TO RETURN POST AUTHORS LINK */
    add_shortcode( 'treads_post_authors', function(){
      $html = '<span class="treads-post-authors">By ';

    	if ( function_exists('coauthors') ) {
    		$html .= coauthors( null, null, null, null, false );
    	} else {
    		$html .= get_the_author();
    	}

      $html .= '</span>';
      return $html;
    } );

  }

}

new TREADS_COAUTHORS();
