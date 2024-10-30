<?php

$prefix = 'golden_joy_awards';

$goldenjoyfields = array(
	
	array ( // Checkbox group
		'label'	=> 'Nominate in the following categories', // <label>
		'desc'	=> ' ', // description
		'id'	=> $prefix.'nominate_category', // field id and name
		'type'	=> 'checkbox_group', // type of field
		'options' => array ( // array of options
			'one' => array ( // array key needs to be the same as the option value
				'label' => 'Best Action-Adventure', // text displayed as the option
				'value'	=> 'Best Action-Adventure' // value stored for the option
			),
			'two' => array (
				'label' => 'Best Use of DLC',
				'value'	=> 'Best Use of DLC'
			),
			'three' => array (
				'label' => 'Best Download Game',
				'value'	=> 'Best Download Game'
			),
			'four' => array (
				'label' => 'Best Fighter',
				'value'	=> 'Best Fighter'
			),
			'five' => array (
				'label' => 'Best Handheld Game',
				'value'	=> 'Best Handheld Game'
			),
			'six' => array (
				'label' => 'Best MMO Shortlist',
				'value'	=> 'Best MMO Shortlist'
			),
			'seven' => array (
				'label' => 'Best Mobile or Tablet Game',
				'value'	=> 'Best Mobile or Tablet Game'
			),
			'eight' => array (
				'label' => 'Best Racing Game',
				'value'	=> 'Best Racing Game'
			),
			'nine' => array (
				'label' => 'Best RPG',
				'value'	=> 'Best RPG'
			),
			'ten' => array (
				'label' => 'Best Shooter',
				'value'	=> 'Best Shooter'
			),
			'eleven' => array (
				'label' => 'Best Browser Game',
				'value'	=> 'Best Browser Game'
			),
			'twelve' => array (
				'label' => 'Best Sports Game',
				'value'	=> 'Best Sports Game'
			),
			'thirteen' => array (
				'label' => 'Best Strategy Game',
				'value'	=> 'Best Strategy Game'
			),
			'fourteen' => array (
				'label' => 'The One to Watch Award',
				'value'	=> 'The One to Watch Award'
			),
			'fifteen' => array (
				'label' => 'Top Gaming Moment',
				'value'	=> 'Top Gaming Moment'
			),
			'sixteen' => array (
				'label' => 'The Golden Joystick Ultimate Game Award',
				'value'	=> 'The Golden Joystick Ultimate Game Award'
			),
			'seventeen' => array (
				'label' => 'YouTube Gamer of the Year',
				'value'	=> 'YouTube Gamer of the Year'
			),
			'eighteen' => array (
				'label' => 'Outstanding Contribution',
				'value'	=> 'Outstanding Contribution'
			)
			
		)
	)
	
);

$sample_box = new custom_add_meta_box( 'golden_joy_awards', 'GOLDEN JOYSTICK AWARDS', $goldenjoyfields, 'post', true );