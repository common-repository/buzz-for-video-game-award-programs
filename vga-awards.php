<?php

$prefix = 'vga_awards';

$vgafields = array(
	
	array ( // Checkbox group
		'label'	=> 'Nominate in the following categories', // <label>
		'desc'	=> ' ', // description
		'id'	=> $prefix.'nominate_category', // field id and name
		'type'	=> 'checkbox_group', // type of field
		'options' => array ( // array of options
			'one' => array ( // array key needs to be the same as the option value
				'label' => 'Game of the Year', // text displayed as the option
				'value'	=> 'Game of the Year' // value stored for the option
			),
			'two' => array (
				'label' => 'Studio of the Year',
				'value'	=> 'Studio of the Year'
			),
			'three' => array (
				'label' => 'Best XBOX 360 Game',
				'value'	=> 'Best XBOX 360 Game'
			),
			'four' => array (
				'label' => 'Best PS3 Game',
				'value'	=> 'Best PS3 Game'
			),
			'five' => array (
				'label' => 'Best Wii / Wii-U Game',
				'value'	=> 'Best Wii / Wii-U Game'
			),
			'six' => array (
				'label' => 'Best PC Game',
				'value'	=> 'Best PC Game'
			),
			'seven' => array (
				'label' => 'Best Shooter',
				'value'	=> 'Best Shooter'
			),
			'eight' => array (
				'label' => 'Best Action / Adventure Game',
				'value'	=> 'Best Action / Adventure Game'
			),
			'nine' => array (
				'label' => 'Best RPG',
				'value'	=> 'Best RPG'
			),
			'ten' => array (
				'label' => 'Best MP Game',
				'value'	=> 'Best MP Game'
			),
			'eleven' => array (
				'label' => 'Best Individual Sports Game',
				'value'	=> 'Best Individual Sports Game'
			),
			'twelve' => array (
				'label' => 'Best Team Sports Game',
				'value'	=> 'Best Team Sports Game'
			),
			'thirteen' => array (
				'label' => 'Best Driving Game',
				'value'	=> 'Best Driving Game'
			),
			'fourteen' => array (
				'label' => 'Best Song in a Game',
				'value'	=> 'Best Song in a Game'
			),
			'fifteen' => array (
				'label' => 'Best Original Score',
				'value'	=> 'Best Original Score'
			),
			'sixteen' => array (
				'label' => 'Best Graphics',
				'value'	=> 'Best Graphics'
			),
			'seventeen' => array (
				'label' => 'Best Independent Game',
				'value'	=> 'Best Independent Game'
			),
			'eighteen' => array (
				'label' => 'Best Fighting Game',
				'value'	=> 'Best Fighting Game'
			),
			'nineteen' => array (
				'label' => 'Best Handheld / Mobile Game',
				'value'	=> 'Best Handheld / Mobile Game'
			),
			'twenty' => array (
				'label' => 'Best Performance by Human Female',
				'value'	=> 'Best Performance by Human Female'
			),
			'twenty-one' => array (
				'label' => 'Best Performance by Human Male',
				'value'	=> 'Best Performance by Human Male'
			),
			'twenty-two' => array (
				'label' => 'Best Adapted Video Game',
				'value'	=> 'Best Adapted Video Game'
			),
			'twenty-three' => array (
				'label' => 'Best DLC',
				'value'	=> 'Best DLC'
			),
			'twenty-four' => array (
				'label' => 'Best Downloadable Game',
				'value'	=> 'Best Downloadable Game'
			),
			'twenty-five' => array (
				'label' => 'Best Social Game',
				'value'	=> 'Best Social Game'
			),
			'twenty-six' => array (
				'label' => 'Most Anticipated Game of 2013',
				'value'	=> 'Most Anticipated Game of 2013'
			),
			'twenty-seven' => array (
				'label' => 'Character of the Year',
				'value'	=> 'Character of the Year'
			)
			
		)
	)
	
);

$sample_box = new custom_add_meta_box( 'vga_awards', 'VGA AWARDS', $vgafields, 'post', true );