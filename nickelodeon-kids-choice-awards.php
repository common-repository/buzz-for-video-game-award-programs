<?php

$prefix = 'nickelodeon_kids_awards';

$nickoloedeonfields = array(
	
	array ( // Checkbox group
		'label'	=> 'Nominate in the following categories', // <label>
		'desc'	=> ' ', // description
		'id'	=> $prefix.'nominate_category', // field id and name
		'type'	=> 'checkbox_group', // type of field
		'options' => array ( // array of options
			'one' => array ( // array key needs to be the same as the option value
				'label' => 'Favorite App', // text displayed as the option
				'value'	=> 'Favorite App' // value stored for the option
			),
			'two' => array (
				'label' => 'Favorite Videogame',
				'value'	=> 'Favorite Videogame'
			)
			
		)
	)
	
);

$sample_box = new custom_add_meta_box( 'nickelodeon_kids_awards', 'NICKELODEON KIDS CHOICE AWARDS', $nickoloedeonfields, 'post', true );