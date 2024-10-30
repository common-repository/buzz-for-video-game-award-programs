<?php

$prefix = 'goldenSat_awards';

$goldenSatfields = array(
	
	array ( // Checkbox group
		'label'	=> 'Nominate in the following categories', // <label>
		'desc'	=> ' ', // description
		'id'	=> $prefix.'nominate_category', // field id and name
		'type'	=> 'checkbox_group', // type of field
		'options' => array ( // array of options
			'one' => array ( // array key needs to be the same as the option value
				'label' => 'Sports / Racing Game', // text displayed as the option
				'value'	=> 'Sports / Racing Game' // value stored for the option
			),
			'two' => array (
				'label' => 'Action / Adventure Game',
				'value'	=> 'Action / Adventure Game'
			),
			'three' => array (
				'label' => 'Mobile Game',
				'value'	=> 'Mobile Game'
			),
			'four' => array (
				'label' => 'Role Playing Game',
				'value'	=> 'Role Playing Game'
			)
		)
	)
	
);

$sample_box = new custom_add_meta_box( 'goldenSat_awards', 'GOLDEN SATELLITE AWARDS', $goldenSatfields, 'post', true );