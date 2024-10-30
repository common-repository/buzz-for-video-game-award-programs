<?php

$prefix = 'bafta_awards';

$baftafields = array(
	
	array ( // Checkbox group
		'label'	=> 'Nominate in the following categories', // <label>
		'desc'	=> ' ', // description
		'id'	=> $prefix.'nominate_category', // field id and name
		'type'	=> 'checkbox_group', // type of field
		'options' => array ( // array of options
			'one' => array ( // array key needs to be the same as the option value
				'label' => 'ACTION & ADVENTURE', // text displayed as the option
				'value'	=> 'ACTION & ADVENTURE' // value stored for the option
			),
			'two' => array (
				'label' => 'ARTISTIC ACHIEVEMENT',
				'value'	=> 'ARTISTIC ACHIEVEMENT'
			),
			'three' => array (
				'label' => 'AUDIO ACHIEVEMENT',
				'value'	=> 'AUDIO ACHIEVEMENT'
			),
			'four' => array (
				'label' => 'BEST GAME',
				'value'	=> 'BEST GAME'
			),
			'five' => array (
				'label' => 'BRITISH GAME',
				'value'	=> 'BRITISH GAME'
			),
			'six' => array (
				'label' => 'DEBUT GAME',
				'value'	=> 'DEBUT GAME'
			),
			'seven' => array (
				'label' => 'FAMILY',
				'value'	=> 'FAMILY'
			),
			'eight' => array (
				'label' => 'GAME DESIGN',
				'value'	=> 'GAME DESIGN'
			),
			'nine' => array (
				'label' => 'GAME INNOVATION',
				'value'	=> 'GAME INNOVATION'
			),
			'ten' => array (
				'label' => 'MOBILE AND HANDHELD',
				'value'	=> 'MOBILE AND HANDHELD'
			),
			'eleven' => array (
				'label' => 'MULTIPLAYER',
				'value'	=> 'MULTIPLAYER'
			),
			'twelve' => array (
				'label' => 'MUSIC',
				'value'	=> 'MUSIC'
			),
			'thirteen' => array (
				'label' => 'PERFORMER',
				'value'	=> 'PERFORMER'
			),
			'fourteen' => array (
				'label' => 'SPORTS',
				'value'	=> 'SPORTS'
			),
			'fifteen' => array (
				'label' => 'STORY',
				'value'	=> 'STORY'
			),
			'sixteen' => array (
				'label' => 'STRATEGY',
				'value'	=> 'STRATEGY'
			),
			'seventeen' => array (
				'label' => 'FELLOWSHIP',
				'value'	=> 'FELLOWSHIP'
			),
			'eighteen' => array (
				'label' => 'THE SPECIAL AWARD',
				'value'	=> 'THE SPECIAL AWARD'
			),
			'nineteen' => array (
				'label' => 'BAFTA ONES TO WATCH',
				'value'	=> 'BAFTA ONES TO WATCH'
			)
		)
	)
	
);

$sample_box = new custom_add_meta_box( 'bafta_awards', 'BAFTA AWARDS', $baftafields, 'post', true );