<?php

$prefix = 'aias_awards';

$aiasfields = array(
	
	array ( // Checkbox group
		'label'	=> 'Nominate in the following categories', // <label>
		'desc'	=> ' ', // description
		'id'	=> $prefix.'nominate_category', // field id and name
		'type'	=> 'checkbox_group', // type of field
		'options' => array ( // array of options
			'one' => array ( // array key needs to be the same as the option value
				'label' => 'Action Game of the Year', // text displayed as the option
				'value'	=> 'Action Game of the Year' // value stored for the option
			),
			'two' => array (
				'label' => 'Adventure Game of the Year',
				'value'	=> 'Adventure Game of the Year'
			),
			'three' => array (
				'label' => 'Downloadable Game of the Year',
				'value'	=> 'Downloadable Game of the Year'
			),
			'four' => array (
				'label' => 'Family Game of the Year',
				'value'	=> 'Family Game of the Year'
			),
			'five' => array (
				'label' => 'Fighting Game of the Year',
				'value'	=> 'Fighting Game of the Year'
			),
			'six' => array (
				'label' => 'Game of the Year',
				'value'	=> 'Game of the Year'
			),
			'seven' => array (
				'label' => 'Handheld Game of the Year',
				'value'	=> 'Handheld Game of the Year'
			),
			'eight' => array (
				'label' => 'Mobile Game of the Year',
				'value'	=> 'Mobile Game of the Year'
			),
			'nine' => array (
				'label' => 'Outstanding Achievement in Animation',
				'value'	=> 'Outstanding Achievement in Animation'
			),
			'ten' => array (
				'label' => 'Outstanding Achievement in Art Direction',
				'value'	=> 'Outstanding Achievement in Art Direction'
			),
			'eleven' => array (
				'label' => 'Outstanding Achievement in Character - Male or Female',
				'value'	=> 'Outstanding Achievement in Character - Male or Female'
			),
			'twelve' => array (
				'label' => 'Outstanding Achievement in Connectivity',
				'value'	=> 'Outstanding Achievement in Connectivity'
			),
			'thirteen' => array (
				'label' => 'Outstanding Achievement in Gameplay Engineering',
				'value'	=> 'Outstanding Achievement in Gameplay Engineering'
			),
			'fourteen' => array (
				'label' => 'Outstanding Achievement in Online Gameplay',
				'value'	=> 'Outstanding Achievement in Online Gameplay'
			),
			'fifteen' => array (
				'label' => 'Outstanding Achievement in Original Music Composition',
				'value'	=> 'Outstanding Achievement in Original Music Composition'
			),
			'sixteen' => array (
				'label' => 'Outstanding Achievement in Sound Design',
				'value'	=> 'Outstanding Achievement in Sound Design'
			),
			'seventeen' => array (
				'label' => 'Outstanding Achievement in Story',
				'value'	=> 'Outstanding Achievement in Story'
			),
			'eighteen' => array (
				'label' => 'Outstanding Achievement in Visual Engineering',
				'value'	=> 'Outstanding Achievement in Visual Engineering'
			),
			'nineteen' => array (
				'label' => 'Outstanding Innovation in Gaming',
				'value'	=> 'Outstanding Innovation in Gaming'
			),
			'twenty' => array (
				'label' => 'Racing Game of the Year',
				'value'	=> 'Racing Game of the Year'
			),
			'twenty-one' => array (
				'label' => 'Sports Game of the Year',
				'value'	=> 'Sports Game of the Year'
			),
			'twenty-two' => array (
				'label' => 'Strategy/Simulation Game of the Year',
				'value'	=> 'Strategy/Simulation Game of the Year'
			),
			'twenty-three' => array (
				'label' => 'Web Based Game of the Year',
				'value'	=> 'Web Based Game of the Year'
			),
			'twenty-four' => array (
				'label' => 'Casual Game of the Year',
				'value'	=> 'Casual Game of the Year'
			),
			'twenty-five' => array (
				'label' => 'Outstanding Achievement in Game Direction',
				'value'	=> 'Outstanding Achievement in Game Direction'
			),
			'twenty-six' => array (
				'label' => 'Role-Playing/Massively Multiplayer Game of the Year',
				'value'	=> 'Role-Playing/Massively Multiplayer Game of the Year'
			),
			array( // Text Input
		'label'	=> 'Other', // <label>
		'desc'	=> ' ', // description
		'id'	=> $prefix.'text', // field id and name
		'type'	=> 'text' // type of field
	)
		)
	)
	
);

$sample_box = new custom_add_meta_box( 'aias_awards', 'AIAS AWARDS', $aiasfields, 'post', true );