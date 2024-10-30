<?php

$prefix = 'x_play_awards';

$xplayfields = array(
	
	array ( // Checkbox group
		'label'	=> 'Nominate in the following categories', // <label>
		'desc'	=> ' ', // description
		'id'	=> $prefix.'nominate_category', // field id and name
		'type'	=> 'checkbox_group', // type of field
		'options' => array ( // array of options
			'one' => array ( // array key needs to be the same as the option value
				'label' => 'Most Original Game', // text displayed as the option
				'value'	=> 'Most Original Game' // value stored for the option
			),
			'two' => array (
				'label' => 'Best Multiplayer Game',
				'value'	=> 'Best Multiplayer Game'
			),
			'three' => array (
				'label' => 'Best Multiplayer Co-Op Game',
				'value'	=> 'Best Multiplayer Co-Op Game'
			),
			'four' => array (
				'label' => 'Best Sports Game',
				'value'	=> 'Best Sports Game'
			),
			'five' => array (
				'label' => 'Best Downloadable Game',
				'value'	=> 'Best Downloadable Game'
			),
			'six' => array (
				'label' => 'Best Shooter',
				'value'	=> 'Best Shooter'
			),
			'seven' => array (
				'label' => 'Best Role-Playing Game',
				'value'	=> 'Best Role-Playing Game'
			),
			'eight' => array (
				'label' => 'Best Fighting Game',
				'value'	=> 'Best Fighting Game'
			),
			'nine' => array (
				'label' => 'Best Art Direction',
				'value'	=> 'Best Art Direction'
			),
			'ten' => array (
				'label' => 'Best Animation',
				'value'	=> 'Best Animation'
			),
			'eleven' => array (
				'label' => 'Best Writing',
				'value'	=> 'Best Writing'
			),
			'twelve' => array (
				'label' => 'Best Soundtrack',
				'value'	=> 'Best Soundtrack'
			),
			'thirteen' => array (
				'label' => 'Best Sound Design',
				'value'	=> 'Best Sound Design'
			),
			'fourteen' => array (
				'label' => 'Best Action/Adventure Game',
				'value'	=> 'Best Action/Adventure Game'
			),
			'fifteen' => array (
				'label' => 'Best Racing Game',
				'value'	=> 'Best Racing Game'
			),
			'sixteen' => array (
				'label' => 'Best Social Game',
				'value'	=> 'Best Social Game'
			),
			'seventeen' => array (
				'label' => 'Best Platformer',
				'value'	=> 'Best Platformer'
			),
			'eighteen' => array (
				'label' => 'Best Puzzle/Strategy Game',
				'value'	=> 'Best Puzzle/Strategy Game'
			),
			'nineteen' => array (
				'label' => 'Best Mobile Game',
				'value'	=> 'Best Mobile Game'
			),
			'twenty' => array (
				'label' => 'Best Fitness Game',
				'value'	=> 'Best Fitness Game'
			),
			'twenty-one' => array (
				'label' => 'Best Voice Acting Performance',
				'value'	=> 'Best Voice Acting Performance'
			),
			'twenty-two' => array (
				'label' => 'Best Remake/Retro Release',
				'value'	=> 'Best Remake/Retro Release'
			)
			
		)
	)
	
);

$sample_box = new custom_add_meta_box( 'x_play_awards', 'X-PLAY AWARDS', $xplayfields, 'post', true );