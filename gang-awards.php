<?php 

$prefix = 'gang_awards';

$gangfields = array(
	
	array ( // Checkbox group
		'label'	=> 'Nominate in the following categories', // <label>
		'desc'	=> ' ', // description
		'id'	=> $prefix.'nominate_category', // field id and name
		'type'	=> 'checkbox_group', // type of field
		'options' => array ( // array of options
			'one' => array ( // array key needs to be the same as the option value
				'label' => 'Audio of the Year', // text displayed as the option
				'value'	=> 'Audio of the Year' // value stored for the option
			),
			'two' => array (
				'label' => 'Best Cinematic/Cut-Scene Audio',
				'value'	=> 'Best Cinematic/Cut-Scene Audio'
			),
			'three' => array (
				'label' => 'Best Audio in a Casual/Indie/Social Game',
				'value'	=> 'Best Audio in a Casual/Indie/Social Game'
			),
			'four' => array (
				'label' => 'Best Handheld Audio',
				'value'	=> 'Best Handheld Audio'
			),
			'five' => array (
				'label' => 'Music of the Year',
				'value'	=> 'Music of the Year'
			),
			'six' => array (
				'label' => 'Best Interactive Score',
				'value'	=> 'Best Interactive Score'
			),
			'seven' => array (
				'label' => 'Best Original Instrumental Song',
				'value'	=> 'Best Original Instrumental Song'
			),
			'eight' => array (
				'label' => 'Best Original Vocal Song - Choral',
				'value'	=> 'Best Original Vocal Song - Choral'
			),
			'nine' => array (
				'label' => 'Best Original Vocal Song - Pop',
				'value'	=> 'Best Original Vocal Song - Pop'
			),
			'ten' => array (
				'label' => 'Best Use of Licensed Music',
				'value'	=> 'Best Use of Licensed Music'
			),
			'eleven' => array (
				'label' => 'Best Original Soundtrack Album',
				'value'	=> 'Best Original Soundtrack Album'
			),
			'twelve' => array (
				'label' => 'Sound Design of the Year',
				'value'	=> 'Sound Design of the Year'
			),
			'thirteen' => array (
				'label' => 'Best Audio Mix',
				'value'	=> 'Best Audio Mix'
			),
			'fourteen' => array (
				'label' => 'Best Dialogue',
				'value'	=> 'Best Dialogue'
			),
			'fifteen' => array (
				'label' => 'Lifetime Achievement Award',
				'value'	=> 'Lifetime Achievement Award'
			),
			'sixteen' => array (
				'label' => 'G.A.N.G. Recognition Award',
				'value'	=> 'G.A.N.G. Recognition Award'
			),
			'seventeen' => array (
				'label' => 'Rookie of the Year',
				'value'	=> 'Rookie of the Year'
			),
			'eighteen' => array (
				'label' => 'G.A.N.G. Student/Apprentice',
				'value'	=> 'G.A.N.G. Student/Apprentice'
			),
			'nineteen' => array (
				'label' => 'Best Game Audio Article, Publication or Broadcast',
				'value'	=> 'Best Game Audio Article, Publication or Broadcast'
			)
		)
	)
	
);

$sample_box = new custom_add_meta_box( 'gang_awards', 'GANG AWARDS', $gangfields, 'post', true );