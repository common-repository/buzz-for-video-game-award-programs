<?php

$prefix = 'igf_awards';

$igffields = array(
	
	array ( // Checkbox group
		'label'	=> 'Nominate in the following categories', // <label>
		'desc'	=> ' ', // description
		'id'	=> $prefix.'nominate_category', // field id and name
		'type'	=> 'checkbox_group', // type of field
		'options' => array ( // array of options
			'one' => array ( // array key needs to be the same as the option value
				'label' => 'Seumas McNally Grand Prize', // text displayed as the option
				'value'	=> 'Seumas McNally Grand Prize' // value stored for the option
			),
			'two' => array (
				'label' => 'Nuovo Award',
				'value'	=> 'Nuovo Award'
			),
			'three' => array (
				'label' => 'Excellence in Visual Arts',
				'value'	=> 'Excellence in Visual Arts'
			),
			'four' => array (
				'label' => 'Excellence in Audio',
				'value'	=> 'Excellence in Audio'
			),
			'five' => array (
				'label' => 'Excellence in Design',
				'value'	=> 'Excellence in Design'
			),
			'six' => array (
				'label' => 'Excellence in Narrative',
				'value'	=> 'Excellence in Narrative'
			),
			'seven' => array (
				'label' => 'Best Student Game',
				'value'	=> 'Best Student Game'
			),
			'eight' => array (
				'label' => 'Technical Excellence',
				'value'	=> 'Technical Excellence'
			),
			'nine' => array (
				'label' => 'Audience Award',
				'value'	=> 'Audience Award'
			)
		)
	)
	
);

$sample_box = new custom_add_meta_box( 'igf_awards', 'IGF AWARDS', $igffields, 'post', true );