<?php

$prefix = 'mtvgame_awards';

$mtvgamefields = array(
	
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
				'label' => 'Best Game for Sharing Your World',
				'value'	=> 'Best Game for Sharing Your World'
			),
			'three' => array (
				'label' => 'Best Game to Shake Your Body To',
				'value'	=> 'Best Game to Shake Your Body To'
			),
			'four' => array (
				'label' => 'Best Rivalry',
				'value'	=> 'Best Rivalry'
			),
			'five' => array (
				'label' => 'Best Latino Participation in a Game',
				'value'	=> 'Best Latino Participation in a Game'
			),
			'six' => array (
				'label' => 'Best Song in a Game',
				'value'	=> 'Best Song in a Game'
			),
			'seven' => array (
				'label' => 'Classic of Classics',
				'value'	=> 'Classic of Classics'
			),
			'eight' => array (
				'label' => 'Most Realistic Game',
				'value'	=> 'Most Realistic Game'
			),
			'nine' => array (
				'label' => 'Best Game for Pulling the Trigger',
				'value'	=> 'Best Game for Pulling the Trigger'
			),
			'ten' => array (
				'label' => 'Most Anticipated Game',
				'value'	=> 'Most Anticipated Game'
			),
			'eleven' => array (
				'label' => 'Best Weapon of Mass Destruction',
				'value'	=> 'Best Weapon of Mass Destruction'
			),
			'twelve' => array (
				'label' => 'Legend Award',
				'value'	=> 'Legend Award'
			)
		)
	)
	
);

$sample_box = new custom_add_meta_box( 'mtvgame_awards', 'MTV GAME AWARDS', $mtvgamefields, 'post', true );