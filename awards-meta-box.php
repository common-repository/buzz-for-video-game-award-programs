<?php 

/*
Plugin Name: Buzz for Video Game Award Programs
Plugin URI: http://avishiwebstudio.com
Description: Incorporate the awards nomination process into your posting workflow! While adding a new post about a game, check off categories while the experience is fresh in your mind.
Version: 1.0
Author: AvishiWebStudio
Author URI: http://avishiwebstudio.com
License: GPLv2
*/


include('buzzmetaboxes/meta_box.php');


$prefix = 'navgtrawards_';

$fields = array(
	array( // Text Input
		'label'	=> '1. Name of game or honorary recipient related to this post', // <label>
		'desc'	=> 'Enter Name of game or honorary recipient related to this post.', // description
		'id'	=> $prefix.'text_one', // field id and name
		'type'	=> 'text' // type of field
	),
	array( // Text Input
		'label'	=> '2. Developer (optional)', // <label>
		'desc'	=> ' ', // description
		'id'	=> $prefix.'text_two', // field id and name
		'type'	=> 'text' // type of field
	),
	array( // Text Input
		'label'	=> '3. Publisher (optional)', // <label>
		'desc'	=> ' ', // description
		'id'	=> $prefix.'text_three', // field id and name
		'type'	=> 'text' // type of field
	),
	

	array ( // Checkbox group
		'label'	=> '4. Release or preview status ', // <label>
		'desc'	=> ' ', // description
		'id'	=> $prefix.'preview_status', // field id and name
		'type'	=> 'checkbox_group', // type of field
		'options' => array ( // array of options
			'one' => array ( // array key needs to be the same as the option value
				'label' => 'date not announced', // text displayed as the option
				'value'	=> 'date not announced' // value stored for the option
			),
			'two' => array (
				'label' => 'out next year',
				'value'	=> 'out next year'
			),
			'three' => array (
				'label' => 'available now, released in current awards year, ballot-ready',
				'value'	=> 'available now, released in current awards year, ballot-ready'
			),
			'four' => array (
				'label' => 'reviewable',
				'value'	=> 'reviewable'
			),
			'five' => array (
				'label' => 'gold',
				'value'	=> 'gold'
			),
			'six' => array (
				'label' => 'beta',
				'value'	=> 'beta'
			),
			'seven' => array (
				'label' => 'demo, hands-on',
				'value'	=> 'demo, hands-on'
			),
			'eight' => array (
				'label' => 'demo, video',
				'value'	=> 'demo, video'
			),
			'nine' => array (
				'label' => 'trailer',
				'value'	=> 'trailer'
			),
			'ten' => array (
				'label' => 'screenshots, actual',
				'value'	=> 'screenshots, actual'
			),
			'eleven' => array (
				'label' => 'screenshots, posed',
				'value'	=> 'screenshots, posed'
			),
			'twelve' => array (
				'label' => 'concept art',
				'value'	=> 'concept art'
			),
			'thirteen' => array (
				'label' => 're-release',
				'value'	=> 're-release'
			),
			'fourteen' => array (
				'label' => 'not eligible due to prior release',
				'value'	=> 'not eligible due to prior release'
			)
		
		)
	),
	
	array ( // Checkbox group
		'label'	=> '5. Nominate in the following categories', // <label>
		'desc'	=> ' ', // description
		'id'	=> $prefix.'nominate_category', // field id and name
		'type'	=> 'checkbox_group', // type of field
		'options' => array ( // array of options
			'one' => array ( // array key needs to be the same as the option value
				'label' => 'GAME OF THE YEAR', // text displayed as the option
				'value'	=> 'GAME OF THE YEAR' // value stored for the option
			),
			'two' => array (
				'label' => 'ANIMATION',
				'value'	=> 'ANIMATION'
			),
			'three' => array (
				'label' => 'ANIMATION, INTERACTIVE',
				'value'	=> 'ANIMATION, INTERACTIVE'
			),
			'four' => array (
				'label' => 'ART DIRECTION, PERIOD',
				'value'	=> 'ART DIRECTION, PERIOD'
			),
			'five' => array (
				'label' => 'ART DIRECTION, FANTASY',
				'value'	=> 'ART DIRECTION, FANTASY'
			),
			'six' => array (
				'label' => 'ART DIRECTION, CONTEMPORARY',
				'value'	=> 'ART DIRECTION, CONTEMPORARY'
			),
			'seven' => array (
				'label' => 'CAMERA DIRECTION IN A GAME ENGINE',
				'value'	=> 'CAMERA DIRECTION IN A GAME ENGINE'
			),
			'eight' => array (
				'label' => 'CHARACTER DESIGN',
				'value'	=> 'CHARACTER DESIGN'
			),
			'nine' => array (
				'label' => 'CONTROL DESIGN, 2D OR LIMITED 3D',
				'value'	=> 'CONTROL DESIGN, 2D OR LIMITED 3D'
			),
			'ten' => array (
				'label' => 'CONTROL DESIGN, 3D',
				'value'	=> 'CONTROL DESIGN, 3D'
			),
			'eleven' => array (
				'label' => 'CONTROL PRECISION',
				'value'	=> 'CONTROL PRECISION'
			),
			'twelve' => array (
				'label' => 'COSTUME DESIGN',
				'value'	=> 'COSTUME DESIGN'
			),
			'thirteen' => array (
				'label' => 'DIRECTION IN A GAME CINEMA',
				'value'	=> 'DIRECTION IN A GAME CINEMA'
			),
			'fourteen' => array (
				'label' => 'GAME DESIGN, NEW IP',
				'value'	=> 'GAME DESIGN, NEW IP'
			),
			'fifteen' => array (
				'label' => 'GAME DESIGN, FRANCHISE',
				'value'	=> 'GAME DESIGN, FRANCHISE'
			),
			'sixteen' => array (
				'label' => 'GAME ENGINEERING',
				'value'	=> 'GAME ENGINEERING'
			),
			'seventeen' => array (
				'label' => 'GRAPHICS, TECHNICAL',
				'value'	=> 'GRAPHICS, TECHNICAL'
			),
			'eighteen' => array (
				'label' => 'INNOVATION IN GAME TECHNOLOGY',
				'value'	=> 'INNOVATION IN GAME TECHNOLOGY'
			),
			'nineteen' => array (
				'label' => 'LEAD PERFORMANCE IN A COMEDY',
				'value'	=> 'LEAD PERFORMANCE IN A COMEDY'
			),
			'twenty' => array (
				'label' => 'LEAD PERFORMANCE IN A DRAMA',
				'value'	=> 'LEAD PERFORMANCE IN A DRAMA'
			),
			'twenty-one' => array (
				'label' => 'LIGHTING/TEXTURING',
				'value'	=> 'LIGHTING/TEXTURING'
			),
			'twenty-two' => array (
				'label' => 'ORIGINAL LIGHT MIX SCORE, NEW IP',
				'value'	=> 'ORIGINAL LIGHT MIX SCORE, NEW IP'
			),
			'twenty-three' => array (
				'label' => 'ORIGINAL LIGHT MIX SCORE, FRANCHISE',
				'value'	=> 'ORIGINAL LIGHT MIX SCORE, FRANCHISE'
			),
			'twenty-four' => array (
				'label' => 'ORIGINAL DRAMATIC SCORE, NEW IP',
				'value'	=> 'ORIGINAL DRAMATIC SCORE, NEW IP'
			),
			'twenty-five' => array (
				'label' => 'ORIGINAL DRAMATIC SCORE, FRANCHISE',
				'value'	=> 'ORIGINAL DRAMATIC SCORE, FRANCHISE'
			),
			'twenty-six' => array (
				'label' => 'ORIGINAL/ADAPTED SONG',
				'value'	=> 'ORIGINAL/ADAPTED SONG'
			),
			'twenty-seven' => array (
				'label' => 'SONG COLLECTION',
				'value'	=> 'SONG COLLECTION'
			),
			'twenty-eight' => array (
				'label' => 'SOUND EDITING IN A GAME CINEMA',
				'value'	=> 'SOUND EDITING IN A GAME CINEMA'
			),
			'twenty-nine' => array (
				'label' => 'SOUND EFFECTS',
				'value'	=> 'SOUND EFFECTS'
			),
			'thirty' => array (
				'label' => 'SUPPORTING PEFORMANCE IN A COMEDY',
				'value'	=> 'SUPPORTING PEFORMANCE IN A COMEDY'
			),
			'thirty-one' => array (
				'label' => 'SUPPORTING PERFORMANCE IN A DRAMA',
				'value'	=> 'SUPPORTING PERFORMANCE IN A DRAMA'
			),
			'thirty-two' => array (
				'label' => 'USE OF SOUND, NEW IP',
				'value'	=> 'USE OF SOUND, NEW IP'
			),
			'thirty-three' => array (
				'label' => 'USE OF SOUND, FRANCHISE',
				'value'	=> 'USE OF SOUND, FRANCHISE'
			),
			'thirty-four' => array (
				'label' => 'WRITING IN A COMEDY',
				'value'	=> 'WRITING IN A COMEDY'
			),
			'thirty-five' => array (
				'label' => 'WRITING IN A DRAMA',
				'value'	=> 'WRITING IN A DRAMA'
			),
			'thirty-six' => array (
				'label' => 'GAME, CLASSIC REVIVAL',
				'value'	=> 'GAME, CLASSIC REVIVAL'
			),
			'thirty-seven' => array (
				'label' => 'GAME, MUSIC OR PERFORMANCE',
				'value'	=> 'GAME, MUSIC OR PERFORMANCE'
			),
			'thirty-eight' => array (
				'label' => 'GAME, ORIGINAL ACTION',
				'value'	=> 'GAME, ORIGINAL ACTION'
			),
			'thirty-nine' => array (
				'label' => 'GAME, ORIGINAL ADVENTURE',
				'value'	=> 'GAME, ORIGINAL ADVENTURE'
			),
			'forty' => array (
				'label' => 'GAME, ORIGINAL CHILDREN&rsquo;S',
				'value'	=> 'GAME, ORIGINAL CHILDREN&rsquo;S'
			),
			'forty-one' => array (
				'label' => 'GAME, ORIGINAL FIGHTING',
				'value'	=> 'GAME, ORIGINAL FIGHTING'
			),
			'forty-two' => array (
				'label' => 'GAME, ORIGINAL RACING',
				'value'	=> 'GAME, ORIGINAL RACING'
			),
			'forty-three' => array (
				'label' => 'GAME, ORIGINAL ROLE PLAYING',
				'value'	=> 'GAME, ORIGINAL ROLE PLAYING'
			),
			'forty-four' => array (
				'label' => 'GAME, ORIGINAL SPORTS',
				'value'	=> 'GAME, ORIGINAL SPORTS'
			),
			'forty-five' => array (
				'label' => 'GAME, FRANCHISE ACTION',
				'value'	=> 'GAME, FRANCHISE ACTION'
			),
			'forty-six' => array (
				'label' => 'GAME, FRANCHISE ADVENTURE',
				'value'	=> 'GAME, FRANCHISE ADVENTURE'
			),
			'forty-seven' => array (
				'label' => 'GAME, FRANCHISE CHILDREN&rsquo;S',
				'value'	=> 'GAME, FRANCHISE CHILDREN&rsquo;S'
			),
			'forty-eight' => array (
				'label' => 'GAME, FRANCHISE FIGHTING',
				'value'	=> 'GAME, FRANCHISE FIGHTING'
			),
			'forty-nine' => array (
				'label' => 'GAME, FRANCHISE RACING',
				'value'	=> 'GAME, FRANCHISE RACING'
			),
			'fifty' => array (
				'label' => 'GAME, FRANCHISE ROLE PLAYING',
				'value'	=> 'GAME, FRANCHISE ROLE PLAYING'
			),
			'fifty-one' => array (
				'label' => 'GAME, FRANCHISE SPORTS',
				'value'	=> 'GAME, FRANCHISE SPORTS'
			),
			'fifty-two' => array (
				'label' => 'GAME, SIMULATION',
				'value'	=> 'GAME, SIMULATION'
			),
			'fifty-three' => array (
				'label' => 'GAME, SPECIAL CLASS',
				'value'	=> 'GAME, SPECIAL CLASS'
			),
			'fifty-four' => array (
				'label' => 'GAME, STRATEGY',
				'value'	=> 'GAME, STRATEGY'
			),
			'fifty-five' => array (
				'label' => 'HONORARY AWARD',
				'value'	=> 'HONORARY AWARD'
			)
		)
	),
	
	array( // Textarea
		'label'	=> '6. Notes', // <label>
		'desc'	=> 'A description for the field.', // description
		'id'	=> $prefix.'textarea', // field id and name
		'type'	=> 'textarea' // type of field
	)
	
	
);


$prefix = 'choiceawards_';

$choicefields = array(
	
	array ( // Checkbox group
		'label'	=> 'Nominate in the following categories', // <label>
		'desc'	=> ' ', // description
		'id'	=> $prefix.'nominate_category', // field id and name
		'type'	=> 'checkbox_group', // type of field
		'options' => array ( // array of options
			'one' => array ( // array key needs to be the same as the option value
				'label' => 'Lifetime Achievement', // text displayed as the option
				'value'	=> 'Lifetime Achievement' // value stored for the option
			),
			'two' => array (
				'label' => 'Pioneer Award',
				'value'	=> 'Pioneer Award'
			),
			'three' => array (
				'label' => 'Ambassador Award',
				'value'	=> 'Ambassador Award'
			),
			'four' => array (
				'label' => 'Game of the Year',
				'value'	=> 'Game of the Year'
			),
			'five' => array (
				'label' => 'Best Narrative',
				'value'	=> 'Best Narrative'
			),
			'six' => array (
				'label' => 'Best Game Design',
				'value'	=> 'Best Game Design'
			),
			'seven' => array (
				'label' => 'Best Technology',
				'value'	=> 'Best Technology'
			),
			'eight' => array (
				'label' => 'Best Visual Arts',
				'value'	=> 'Best Visual Arts'
			),
			'nine' => array (
				'label' => 'Best Debut',
				'value'	=> 'Best Debut'
			),
			'ten' => array (
				'label' => 'Innovation Award',
				'value'	=> 'Innovation Award'
			),
			'eleven' => array (
				'label' => 'Best Handheld/Mobile Game',
				'value'	=> 'Best Handheld/Mobile Game'
			),
			'twelve' => array (
				'label' => 'Best Audio',
				'value'	=> 'Best Audio'
			),
			'thirteen' => array (
				'label' => 'Best Downloadable Game',
				'value'	=> 'Best Downloadable Game'
			)
		)
	)
	
	
);


$prefix = 'choiceawards_';

$choicefields = array(
	
	array ( // Checkbox group
		'label'	=> 'Nominate in the following categories', // <label>
		'desc'	=> ' ', // description
		'id'	=> $prefix.'nominate_category', // field id and name
		'type'	=> 'checkbox_group', // type of field
		'options' => array ( // array of options
			'one' => array ( // array key needs to be the same as the option value
				'label' => 'Lifetime Achievement', // text displayed as the option
				'value'	=> 'Lifetime Achievement' // value stored for the option
			),
			'two' => array (
				'label' => 'Pioneer Award',
				'value'	=> 'Pioneer Award'
			),
			'three' => array (
				'label' => 'Ambassador Award',
				'value'	=> 'Ambassador Award'
			),
			'four' => array (
				'label' => 'Game of the Year',
				'value'	=> 'Game of the Year'
			),
			'five' => array (
				'label' => 'Best Narrative',
				'value'	=> 'Best Narrative'
			),
			'six' => array (
				'label' => 'Best Game Design',
				'value'	=> 'Best Game Design'
			),
			'seven' => array (
				'label' => 'Best Technology',
				'value'	=> 'Best Technology'
			),
			'eight' => array (
				'label' => 'Best Visual Arts',
				'value'	=> 'Best Visual Arts'
			),
			'nine' => array (
				'label' => 'Best Debut',
				'value'	=> 'Best Debut'
			),
			'ten' => array (
				'label' => 'Innovation Award',
				'value'	=> 'Innovation Award'
			),
			'eleven' => array (
				'label' => 'Best Handheld/Mobile Game',
				'value'	=> 'Best Handheld/Mobile Game'
			),
			'twelve' => array (
				'label' => 'Best Audio',
				'value'	=> 'Best Audio'
			),
			'thirteen' => array (
				'label' => 'Best Downloadable Game',
				'value'	=> 'Best Downloadable Game'
			)
		)
	)
	
	
);

/**
 * Instantiate the class with all variables to create a meta box
 * var $id string meta box id
 * var $title string title
 * var $fields array fields
 * var $page string|array post type to add meta box to
 * var $js bool including javascript or not
 */
$sample_box = new custom_add_meta_box( 'navgtr_awards', 'NAVGTR AWARDS', $fields, 'post', true );

$sample_box_one = new custom_add_meta_box( 'choice_awards', 'CHOICE AWARDS', $choicefields, 'post', true );


include('aias-awards.php');

include('gang-awards.php');

include('igf-awards.php');

include('bafta-awards.php');

include('tec-awards.php');

include('wga-awards.php');

include('golden-satellite-awards.php');

include('vga-awards.php');

include('mtv-game-awards.php');

include('golden-joystick-awards.php');

include('nickelodeon-kids-choice-awards.php');

include('x-play-awards.php');



add_action( 'save_post', 'my_project_updated_send_email' );

function my_project_updated_send_email( $post_id ) {

	//verify post is not a revision
	if ( !wp_is_post_revision( $post_id ) ) {


        $post_title = get_the_title( $post_id );
		$subject = $post_title;

		
		
		function get_check_value($post_id,$meta_key)
		{
		$getcheckboxGroupValue = get_post_meta($post_id, $meta_key, true);
		
		
		if($getcheckboxGroupValue)
		{
		
		foreach ($getcheckboxGroupValue as $value)
		{
    	$checkboxList .=  $value.'<br>';
    	}
		}
		else
		{
			$checkboxList = '';
		}
		return $checkboxList;
		
		}


     $message = '<table rules="all" style="border-color: #666;" cellpadding="10" width="100%">';
     
	
	 
	 $nvg_question_one = get_post_meta($post_id, 'navgtrawards_text_one', true);
	 $nvg_question_two = get_post_meta($post_id, 'navgtrawards_text_two', true);
	 $nvg_question_three = get_post_meta($post_id, 'navgtrawards_text_three', true);
	 $nvg_question_four = get_check_value($post_id,'navgtrawards_preview_status');
	 $nvg_question_five = get_check_value($post_id,'navgtrawards_nominate_category');
	 $nvg_question_six = get_post_meta($post_id, 'navgtrawards_textarea', true);
	 
	 if($nvg_question_one != '' || $nvg_question_two != '' || $nvg_question_three != '' || $nvg_question_four != '' || $nvg_question_five != '' || $nvg_question_six != '' )
	 {
		 $message .= "<tr style='background: #eee;text-transform:uppercase'><td colspan='3'><strong>navgtr awards</strong> </td></tr>"; 
	 }
	 
	 if($nvg_question_one != '')
	 {
		 $message .= '<tr><td><strong>Name of game or honorary recipient related to this post:</strong> </td><td>'.$nvg_question_one.'</td>';
	 }
	 if($nvg_question_two != '')
	 {
		 $message .= '<tr><td><strong>Developer:</strong> </td><td>'.$nvg_question_two.'</td>';
	 }
	 if($nvg_question_three != '')
	 {
		 $message .= '<tr><td><strong>Publisher:</strong> </td><td>'.$nvg_question_three.'</td>';
	 }
	 if($nvg_question_four != '')
	 {
		 $message .= '<tr><td><strong>Release or preview status :</strong> </td><td>'.$nvg_question_four.'</td>';
	 }
	 if($nvg_question_five != '')
	 {
		 $message .= '<tr><td><strong>Nominate in the following categories:</strong> </td><td>'.$nvg_question_five.'</td>';
	 }
	 if($nvg_question_six != '')
	 {
		 $message .= '<tr><td><strong>Notes:</strong> </td><td>'.$nvg_question_six.'</td>';
	 }
	 
	 
	 
	
	 $choice_question_one = get_check_value($post_id,'choiceawards_nominate_category');
	 
	 if($choice_question_one != '')
	 {
		 $message .= "<tr style='background: #eee;text-transform:uppercase'><td colspan='3'><strong>Choice awards</strong> </td></tr>"; 
		 $message .= '<tr><td><strong>Nominate in the following categories:</strong> </td><td>'.$choice_question_one.'</td>';
	 }
	 
	 
	 $aias_question_one = get_check_value($post_id,'aias_awardsnominate_category');
	 
	 if($aias_question_one != '')
	 {
		 $message .= "<tr style='background: #eee;text-transform:uppercase'><td colspan='3'><strong>aias awards</strong> </td></tr>"; 
		 $message .= '<tr><td><strong>Nominate in the following categories:</strong> </td><td>'.$aias_question_one.'</td>';
	 }
	 
	 $gang_question_one = get_check_value($post_id,'gang_awardsnominate_category');
	 
	 if($gang_question_one != '')
	 {
		 $message .= "<tr style='background: #eee;text-transform:uppercase'><td colspan='3'><strong>Gang awards</strong> </td></tr>"; 
		 $message .= '<tr><td><strong>Nominate in the following categories:</strong> </td><td>'.$gang_question_one.'</td>';
	 }
	 
	 $igf_question_one = get_check_value($post_id,'igf_awardsnominate_category');
	 
	 if($igf_question_one != '')
	 {
		 $message .= "<tr style='background: #eee;text-transform:uppercase'><td colspan='3'><strong>igf awards</strong> </td></tr>"; 
		 $message .= '<tr><td><strong>Nominate in the following categories:</strong> </td><td>'.$igf_question_one.'</td>';
	 }
	 
	 $bafta_question_one = get_check_value($post_id,'bafta_awardsnominate_category');
	 
	 if($bafta_question_one != '')
	 {
		 $message .= "<tr style='background: #eee;text-transform:uppercase'><td colspan='3'><strong>bafta awards</strong> </td></tr>"; 
		 $message .= '<tr><td><strong>Nominate in the following categories:</strong> </td><td>'.$bafta_question_one.'</td>';
	 }
	 
	 $tec_question_one = get_check_value($post_id,'tec_awardsnominate_category');
	 
	 if($tec_question_one != '')
	 {
		 $message .= "<tr style='background: #eee;text-transform:uppercase'><td colspan='3'><strong>tec awards</strong> </td></tr>"; 
		 $message .= '<tr><td><strong>Nominate in the following categories:</strong> </td><td>'.$tec_question_one.'</td>';
	 }
	 
	 $wga_question_one = get_check_value($post_id,'wga_awardsnominate_category');
	 
	 if($wga_question_one != '')
	 {
		 $message .= "<tr style='background: #eee;text-transform:uppercase'><td colspan='3'><strong>wga awards</strong> </td></tr>"; 
		 $message .= '<tr><td><strong>Nominate in the following categories:</strong> </td><td>'.$wga_question_one.'</td>';
	 }
	 
	 $gsa_question_one = get_check_value($post_id,'goldenSat_awardsnominate_category');
	 
	 if($gsa_question_one != '')
	 {
		 $message .= "<tr style='background: #eee;text-transform:uppercase'><td colspan='3'><strong>golden satellite awards</strong> </td></tr>"; 
		 $message .= '<tr><td><strong>Nominate in the following categories:</strong> </td><td>'.$gsa_question_one.'</td>';
	 }
	 
	 $vga_question_one = get_check_value($post_id,'vga_awardsnominate_category');
	 
	 if($vga_question_one != '')
	 {
		 $message .= "<tr style='background: #eee;text-transform:uppercase'><td colspan='3'><strong>vga awards</strong> </td></tr>"; 
		 $message .= '<tr><td><strong>Nominate in the following categories:</strong> </td><td>'.$vga_question_one.'</td>';
	 }
	 
	 
	 $mtv_question_one = get_check_value($post_id,'mtvgame_awardsnominate_category');
	 
	 if($mtv_question_one != '')
	 {
		 $message .= "<tr style='background: #eee;text-transform:uppercase'><td colspan='3'><strong>MTV Game awards</strong> </td></tr>"; 
		 $message .= '<tr><td><strong>Nominate in the following categories:</strong> </td><td>'.$mtv_question_one.'</td>';
	 }
	 
	 $gja_question_one = get_check_value($post_id,'golden_joy_awardsnominate_category');
	 
	 if($gja_question_one != '')
	 {
		 $message .= "<tr style='background: #eee;text-transform:uppercase'><td colspan='3'><strong>Golden Joystick awards</strong> </td></tr>"; 
		 $message .= '<tr><td><strong>Nominate in the following categories:</strong> </td><td>'.$gja_question_one.'</td>';
	 }
	 
	 $nick_question_one = get_check_value($post_id,'nickelodeon_kids_awardsnominate_category');
	 
	 if($nick_question_one != '')
	 {
		 $message .= "<tr style='background: #eee;text-transform:uppercase'><td colspan='3'><strong>nickelodeon kids awards</strong> </td></tr>"; 
		 $message .= '<tr><td><strong>Nominate in the following categories:</strong> </td><td>'.$nick_question_one.'</td>';
	 }
	 
	 
	 
	 $xplay_question_one = get_check_value($post_id,'x_play_awardsnominate_category');
	 
	 if($xplay_question_one != '')
	 {
		 $message .= "<tr style='background: #eee;text-transform:uppercase'><td colspan='3'><strong>x-play awards</strong> </td></tr>"; 
		 $message .= '<tr><td><strong>Nominate in the following categories:</strong> </td><td>'.$xplay_question_one.'</td>';
	 }
	 
	 
	 
	 
 
	 
	 $message .= '</table>';

$admin_email = get_option( 'admin_email' );

$to = 'amicus.curai@gmail.com';	
$headers  = 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

// Additional headers

$headers .= 'From: BUZZ Plugin <'.$admin_email.'>' . "\r\n";
$headers .= "Reply-To: BUZZ Plugin <".$admin_email."> \r\n" ;

if($nvg_question_one != '' || $nvg_question_two != '' || $nvg_question_three != '' || $nvg_question_four != '' || $nvg_question_five != '' || $nvg_question_six != '' || $choice_question_one != '' || $aias_question_one != '' || $gang_question_one != '' || $igf_question_one != '' || $bafta_question_one != '' || $tec_question_one != '' ||$wga_question_one != '' || $gsa_question_one != '' || $vga_question_one != '' || $mtv_question_one != '' || $gja_question_one != '' || $nick_question_one != '' || $xplay_question_one != '' )
{
		//send email to admin
		wp_mail( $to, $subject, $message, $headers );
		
}
		
	}

}