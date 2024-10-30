<?php

$prefix = 'wga_awards';

$wgafields = array(
	
	
	array ( // Checkbox group
		'label'	=> 'Nominate in the following categories', // <label>
		'desc'	=> ' ', // description
		'id'	=> $prefix.'nominate_category', // field id and name
		'type'	=> 'checkbox_group', // type of field
		'options' => array ( // array of options
			'one' => array ( // array key needs to be the same as the option value
				'label' => 'Outstanding Achievement in Videogame Writing', // text displayed as the option
				'value'	=> 'Outstanding Achievement in Videogame Writing' // value stored for the option
			)))
	
	
);

$sample_box = new custom_add_meta_box( 'wga_awards', 'WGA AWARDS', $wgafields, 'post', true );