<?php

$prefix = 'tec_awards';

$tecfields = array(
	
	
	
	array ( // Checkbox group
		'label'	=> 'Nominate in the following categories', // <label>
		'desc'	=> ' ', // description
		'id'	=> $prefix.'nominate_category', // field id and name
		'type'	=> 'checkbox_group', // type of field
		'options' => array ( // array of options
			'one' => array ( // array key needs to be the same as the option value
				'label' => 'Interactive Entertainment Sound Production', // text displayed as the option
				'value'	=> 'Interactive Entertainment Sound Production' // value stored for the option
			)))
	
);

$sample_box = new custom_add_meta_box( 'tec_awards', 'TEC AWARDS', $tecfields, 'post', true );