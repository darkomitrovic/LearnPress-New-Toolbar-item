<?php // Do not copy this line 

// Copy from under this line and paste into your child theme's functions.php

function certificate_buttons_callback( $fields ) {    
	$fields[] = [
        'name'  => 'phone-number',
        'icon'  => 'dashicons-phone',
        'title' => __( 'Phone Number', 'learnpress-certificates' )
	];
    return $fields;
}
add_filter( 'certificates/fields', 'certificate_buttons_callback' );

class LP_Certificate_Phone_Number_Layer extends LP_Certificate_Layer {
	public function apply( $data ) {        
		$this->options['text'] = ! empty( $data['user_id'] ) ? get_user_meta( $data['user_id'], 'lp_info_phone', true ) : $this->options['text'];
	}
}
