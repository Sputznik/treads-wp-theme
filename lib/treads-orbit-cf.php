<?php

// CREATES META FIELD
add_filter( 'orbit_meta_box_vars', function( $meta_box ){

  $meta_box['post'] = array(
    array(
			'id'			=> 'treads-post-metafield',
			'title'		=> 'Additional Information',
			'fields'	=> array(
        'pdf_link'	=> array(
					'type' => 'text',
					'text' => 'PDF link'
				)
			)
		)
	);

	return $meta_box;

});
