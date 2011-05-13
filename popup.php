<?php

/*
Plugin Name: Popup
Plugin URI: http://www.gopiplus.com/work/2011/01/14/wordpress-popup/
Description: One easy way to send your visitors a welcome message, notice, or advertisement is to add a this popup plugin to your site. 
Author: Gopi.R
Version: 2.0
Author URI: http://www.gopiplus.com/work/2011/01/14/wordpress-popup/
Donate link: http://www.gopiplus.com/work/2011/01/14/wordpress-popup/
*/

global $wpdb, $wp_version;

function PPOPOUPUP_activation()
{
	add_option('PPOPOUPUP_RANDOM', "YES");
	add_option('PPOPOUPUP_IMG1', "Sample text message 1");
	add_option('PPOPOUPUP_URL1', "http://www.gopiplus.com/work/wp-content/uploads/pluginimages/320x250/320x250_2.jpg");
	add_option('PPOPOUPUP_IMG2', "Sample text message 2");
	add_option('PPOPOUPUP_URL2', "http://www.gopiplus.com/work/wp-content/uploads/pluginimages/320x250/320x250_1.jpg");
	add_option('PPOPOUPUP_IMG3', "Sample text message 3");
	add_option('PPOPOUPUP_URL3', "http://www.gopiplus.com/work/wp-content/uploads/pluginimages/320x250/320x250_3.jpg");
	add_option('PPOPOUPUP_IMG4', "Sample text message 4");
	add_option('PPOPOUPUP_URL4', "http://www.gopiplus.com/work/wp-content/uploads/pluginimages/320x250/320x250_4.jpg");
	add_option('PPOPOUPUP_IMG5', "Sample text message 5");
	add_option('PPOPOUPUP_URL5', "http://www.gopiplus.com/work/wp-content/uploads/pluginimages/320x250/320x250_5.jpg");
	add_option('PPOPOUPUP_IMG6', "Sample text message 6");
	add_option('PPOPOUPUP_URL6', "http://www.gopiplus.com/work/wp-content/uploads/pluginimages/320x250/320x250_6.jpg");
	add_option('PPOPOUPUP_SESSION', "NO");
}

function PPOPOUPUP_deactivate() 
{

}

function PPOPOUPUP_add_to_menu() 
{
	add_options_page('Popup', 'Popup', 'manage_options', __FILE__, 'PPOPOUPUP_admin_options' );
}

if (is_admin()) 
{
	add_action('admin_menu', 'PPOPOUPUP_add_to_menu');
}

function PPOPOUPUP_admin_options() 
{
	?>
	<div class="wrap">
	  <h2><?php echo wp_specialchars( 'POPUP' ); ?></h2>
	  <?php
	global $wpdb, $wp_version;
	
	$PPOPOUPUP_RANDOM = get_option('PPOPOUPUP_RANDOM');
	$PPOPOUPUP_IMG1 = get_option('PPOPOUPUP_IMG1');
	$PPOPOUPUP_IMG2 = get_option('PPOPOUPUP_IMG2');
	$PPOPOUPUP_IMG3 = get_option('PPOPOUPUP_IMG3');
	$PPOPOUPUP_IMG4 = get_option('PPOPOUPUP_IMG4');
	$PPOPOUPUP_IMG5 = get_option('PPOPOUPUP_IMG5');
	$PPOPOUPUP_IMG6 = get_option('PPOPOUPUP_IMG6');
	
	$PPOPOUPUP_URL1 = get_option('PPOPOUPUP_URL1');
	$PPOPOUPUP_URL2 = get_option('PPOPOUPUP_URL2');
	$PPOPOUPUP_URL3 = get_option('PPOPOUPUP_URL3');
	$PPOPOUPUP_URL4 = get_option('PPOPOUPUP_URL4');
	$PPOPOUPUP_URL5 = get_option('PPOPOUPUP_URL5');
	$PPOPOUPUP_URL6 = get_option('PPOPOUPUP_URL6');
	$PPOPOUPUP_SESSION = get_option('PPOPOUPUP_SESSION');
	
	
	
	if ($_POST['PPOPOUPUP_submit']) 
	{
		$PPOPOUPUP_RANDOM = stripslashes(trim($_POST['PPOPOUPUP_RANDOM']));
		$PPOPOUPUP_IMG1 = stripslashes(trim($_POST['PPOPOUPUP_IMG1']));
		$PPOPOUPUP_IMG2 = stripslashes(trim($_POST['PPOPOUPUP_IMG2']));
		$PPOPOUPUP_IMG3 = stripslashes(trim($_POST['PPOPOUPUP_IMG3']));
		$PPOPOUPUP_IMG4 = stripslashes(trim($_POST['PPOPOUPUP_IMG4']));
		$PPOPOUPUP_IMG5 = stripslashes(trim($_POST['PPOPOUPUP_IMG5']));
		$PPOPOUPUP_IMG6 = stripslashes(trim($_POST['PPOPOUPUP_IMG6']));
		
		$PPOPOUPUP_URL1 = stripslashes(trim($_POST['PPOPOUPUP_URL1']));
		$PPOPOUPUP_URL2 = stripslashes(trim($_POST['PPOPOUPUP_URL2']));
		$PPOPOUPUP_URL3 = stripslashes(trim($_POST['PPOPOUPUP_URL3']));
		$PPOPOUPUP_URL4 = stripslashes(trim($_POST['PPOPOUPUP_URL4']));
		$PPOPOUPUP_URL5 = stripslashes(trim($_POST['PPOPOUPUP_URL5']));
		$PPOPOUPUP_URL6 = stripslashes(trim($_POST['PPOPOUPUP_URL6']));
		$PPOPOUPUP_SESSION = stripslashes(trim($_POST['PPOPOUPUP_SESSION']));
		
		
		update_option('PPOPOUPUP_RANDOM', $PPOPOUPUP_RANDOM );
		update_option('PPOPOUPUP_IMG1', $PPOPOUPUP_IMG1 );
		update_option('PPOPOUPUP_IMG2', $PPOPOUPUP_IMG2 );
		update_option('PPOPOUPUP_IMG3', $PPOPOUPUP_IMG3 );
		update_option('PPOPOUPUP_IMG4', $PPOPOUPUP_IMG4 );
		update_option('PPOPOUPUP_IMG5', $PPOPOUPUP_IMG5 );
		update_option('PPOPOUPUP_IMG6', $PPOPOUPUP_IMG6 );
		
		update_option('PPOPOUPUP_URL1', $PPOPOUPUP_URL1 );
		update_option('PPOPOUPUP_URL2', $PPOPOUPUP_URL2 );
		update_option('PPOPOUPUP_URL3', $PPOPOUPUP_URL3 );
		update_option('PPOPOUPUP_URL4', $PPOPOUPUP_URL4 );
		update_option('PPOPOUPUP_URL5', $PPOPOUPUP_URL5 );
		update_option('PPOPOUPUP_URL6', $PPOPOUPUP_URL6 );
		update_option('PPOPOUPUP_SESSION', $PPOPOUPUP_SESSION );	
		
	}
	
	echo '<table width="100%" border="0" cellspacing="5" cellpadding="0">';
	echo '<tr>';
	echo '<td align="left">';
	echo '<form name="form_PopUpFad" method="post" action="">';
	
	echo '<p>Random message	:<br />	<input  style="width: 100px;" type="text" value="';
	echo $PPOPOUPUP_RANDOM . '" name="PPOPOUPUP_RANDOM" id="PPOPOUPUP_RANDOM" /> ( YES / NO ) </p>';
	
	echo '<p>Popup IMG1 txt	:<br /> <input  style="width: 500px;" type="text" value="';
	echo $PPOPOUPUP_IMG1 . '" name="PPOPOUPUP_IMG1" id="PPOPOUPUP_IMG1" /> (IMG1)</p>';
	echo '<p>Popup IMG1 url :<br /> <input  style="width: 600px;" type="text" value="';
	echo $PPOPOUPUP_URL1 . '" name="PPOPOUPUP_URL1" id="PPOPOUPUP_URL1" /> </p>';
	
	echo '<p>Popup IMG2 txt :<br /> <input  style="width: 500px;" type="text" value="';
	echo $PPOPOUPUP_IMG2 . '" name="PPOPOUPUP_IMG2" id="PPOPOUPUP_IMG2" /> (IMG2)</p>';
	echo '<p>Popup IMG2 url :<br /> <input  style="width: 600px;" type="text" value="';
	echo $PPOPOUPUP_URL2 . '" name="PPOPOUPUP_URL2" id="PPOPOUPUP_URL2" /> </p>';
	
	echo '<p>Popup IMG3 txt :<br /> <input  style="width: 500px;" type="text" value="';
	echo $PPOPOUPUP_IMG3 . '" name="PPOPOUPUP_IMG3" id="PPOPOUPUP_IMG3" /> (IMG3)</p>';
	echo '<p>Popup IMG3 url :<br /> <input  style="width: 600px;" type="text" value="';
	echo $PPOPOUPUP_URL3 . '" name="PPOPOUPUP_URL3" id="PPOPOUPUP_URL3" /> </p>';
	
	echo '<p>Popup IMG4 txt :<br /> <input  style="width: 500px;" type="text" value="';
	echo $PPOPOUPUP_IMG4 . '" name="PPOPOUPUP_IMG4" id="PPOPOUPUP_IMG4" /> (IMG4)</p>';
	echo '<p>Popup IMG4 url :<br /> <input  style="width: 600px;" type="text" value="';
	echo $PPOPOUPUP_URL4 . '" name="PPOPOUPUP_URL4" id="PPOPOUPUP_URL4" /> </p>';
	
	echo '<p>Popup IMG5 txt :<br /> <input  style="width: 500px;" type="text" value="';
	echo $PPOPOUPUP_IMG5 . '" name="PPOPOUPUP_IMG5" id="PPOPOUPUP_IMG5" /> (IMG5)</p>';
	echo '<p>Popup IMG5 url :<br /> <input  style="width: 600px;" type="text" value="';
	echo $PPOPOUPUP_URL5 . '" name="PPOPOUPUP_URL5" id="PPOPOUPUP_URL5" /> </p>';
	
	echo '<p>Popup IMG6 txt :<br /> <input  style="width: 500px;" type="text" value="';
	echo $PPOPOUPUP_IMG6 . '" name="PPOPOUPUP_IMG6" id="PPOPOUPUP_IMG6" /> (IMG6)</p>';
	echo '<p>Popup IMG6 url :<br /> <input  style="width: 600px;" type="text" value="';
	echo $PPOPOUPUP_URL6 . '" name="PPOPOUPUP_URL6" id="PPOPOUPUP_URL6" /> </p>';
	
	echo '<p>Popup session option:<br /> <input  style="width: 100px;" type="text" value="';
	echo $PPOPOUPUP_SESSION . '" name="PPOPOUPUP_SESSION" id="PPOPOUPUP_SESSION" maxlength="3" /> ( YES / NO ) </p>';
	
	echo '<input type="submit" id="PPOPOUPUP_submit" name="PPOPOUPUP_submit" lang="publish" class="button-primary" value="Update Setting" value="1" />';
	echo '</form>';
	echo '</td>';
	echo '<td align="left">';
	echo '</td>';
	echo '</tr>';
	echo '</table>';
	
	?>
  <h2><?php echo wp_specialchars( 'plugin Information!' ); ?></h2>
  Plug-in created by <a target="_blank" href='http://www.gopiplus.com/work/'>Gopi</a>.<br>
  <a target="_blank" href='http://www.gopiplus.com/work/2011/01/14/wordpress-popup/'>Click here</a> to post suggestion, comments, feedback.<br>
  <a target="_blank" href='http://www.gopiplus.com/work/2011/01/14/wordpress-popup/'>Click here</a> to see plugin live demo.<br>
  <a target="_blank" href='http://www.gopiplus.com/work/2011/01/14/wordpress-popup/'>Click here</a> to see more info, faq help.<br>
  <a target="_blank" href='http://www.gopiplus.com/work/2011/01/14/wordpress-popup/'>Click here</a> to download my other plugins and support.<br>
  <h2><?php echo wp_specialchars( 'FAQ!' ); ?></h2>
  	<p>1. How to arrange the width & height?</p>	
	<p>2. Possible to add the pop up into the particular page/post?</p>	
	<p>3. How to update the popup information?</p>		
	<p>4. How to display the message in random order?</p>
    <p>5. Is possible to set the popup once per session?</p>
    <p>6. Is possible to add text in the popup?</p>	
  <br>
</div>
<?php
}


add_filter('the_content','PPOPOUPUP_filter');

function PPOPOUPUP_filter($content){
	return 	preg_replace_callback('/\[POPUP=(.*?)\]/sim','PPOPOUPUP_filter_Callback',$content);
}

function PPOPOUPUP_filter_Callback($matches) 
{
	
	if(get_option('PPOPOUPUP_SESSION') == "YES")
	{
		session_start();
		
		if ( $_SESSION['popupsession'] <> "YES" )
		{
			$_SESSION['popupsession'] = "YES"; 
		
			if(get_option('PPOPOUPUP_RANDOM') == "YES") 
			{
				$randomalert =  rand(1, 5);
				$mytxt= array("PPOPOUPUP_IMG1", "PPOPOUPUP_IMG2", "PPOPOUPUP_IMG3", "PPOPOUPUP_IMG4", "PPOPOUPUP_IMG5", "PPOPOUPUP_IMG6");
				$myurl= array("PPOPOUPUP_URL1", "PPOPOUPUP_URL2", "PPOPOUPUP_URL3", "PPOPOUPUP_URL4", "PPOPOUPUP_URL5", "PPOPOUPUP_URL6");
				@$txt= get_option($mytxt[$randomalert]); 
				@$url= get_option($myurl[$randomalert]); 
			}
			else
			{
				@$imgurl =  $matches[1];
				if($imgurl == "IMG1") { 
					@$txt= get_option('PPOPOUPUP_IMG1'); 
					@$url= get_option('PPOPOUPUP_URL1'); 
				} elseif($imgurl == "IMG2") { 
					@$txt= get_option('PPOPOUPUP_IMG2'); 
					@$url= get_option('PPOPOUPUP_URL2'); 
				} elseif($imgurl == "IMG3") { 
					@$txt= get_option('PPOPOUPUP_IMG3'); 
					@$url= get_option('PPOPOUPUP_URL3'); 
				} elseif($imgurl == "IMG4") { 
					@$txt= get_option('PPOPOUPUP_IMG4'); 
					@$url= get_option('PPOPOUPUP_URL4'); 
				} elseif($imgurl == "IMG5") { 
					@$txt= get_option('PPOPOUPUP_IMG5'); 
					@$url= get_option('PPOPOUPUP_URL5'); 
				} elseif($imgurl == "IMG6") { 
					@$txt= get_option('PPOPOUPUP_IMG6'); 
					@$url= get_option('PPOPOUPUP_URL6'); 
				} else {
					@$txt= get_option('PPOPOUPUP_IMG1'); 
					@$url= get_option('PPOPOUPUP_URL1'); 
				}
			}
			
			$PPOPOUPUP_siteurl = get_option('siteurl');
			$PPOPOUPUP_pluginurl = $PPOPOUPUP_siteurl . "/wp-content/plugins/popup/";
			
			$PPOPOUPUP_txt = $PPOPOUPUP_txt . '<script type="text/javascript" src="'. $PPOPOUPUP_pluginurl . 'popup.js"></script>';
			$PPOPOUPUP_txt = $PPOPOUPUP_txt . '<link rel="stylesheet" type="text/css" href="'. $PPOPOUPUP_pluginurl . 'popup.css" />';
			$PPOPOUPUP_txt = $PPOPOUPUP_txt . '<div id="PopupDiv">';
				$PPOPOUPUP_txt = $PPOPOUPUP_txt . '<div class="PopupDivBar"><a href="#">'.$txt.'</a><a href="#" onClick="PopupDivStop()" class="close">&nbsp;</a></div>';
				$PPOPOUPUP_txt = $PPOPOUPUP_txt . '<div class="PopupDivAds"><a href="#"><img src="'.$url.'" alt="Advertisement" /></a></div>';
			$PPOPOUPUP_txt = $PPOPOUPUP_txt . '</div>';
			$PPOPOUPUP_txt = $PPOPOUPUP_txt . '<script type="text/javascript">PopupDivFunc();</script>';
			return $PPOPOUPUP_txt;
		}
	}
	else
	{
			if(get_option('PPOPOUPUP_RANDOM') == "YES") 
			{
				$randomalert =  rand(1, 5);
				$mytxt= array("PPOPOUPUP_IMG1", "PPOPOUPUP_IMG2", "PPOPOUPUP_IMG3", "PPOPOUPUP_IMG4", "PPOPOUPUP_IMG5", "PPOPOUPUP_IMG6");
				$myurl= array("PPOPOUPUP_URL1", "PPOPOUPUP_URL2", "PPOPOUPUP_URL3", "PPOPOUPUP_URL4", "PPOPOUPUP_URL5", "PPOPOUPUP_URL6");
				@$txt= get_option($mytxt[$randomalert]); 
				@$url= get_option($myurl[$randomalert]); 
			}
			else
			{
				@$imgurl =  $matches[1];
				if($imgurl == "IMG1") { 
					@$txt= get_option('PPOPOUPUP_IMG1'); 
					@$url= get_option('PPOPOUPUP_URL1'); 
				} elseif($imgurl == "IMG2") { 
					@$txt= get_option('PPOPOUPUP_IMG2'); 
					@$url= get_option('PPOPOUPUP_URL2'); 
				} elseif($imgurl == "IMG3") { 
					@$txt= get_option('PPOPOUPUP_IMG3'); 
					@$url= get_option('PPOPOUPUP_URL3'); 
				} elseif($imgurl == "IMG4") { 
					@$txt= get_option('PPOPOUPUP_IMG4'); 
					@$url= get_option('PPOPOUPUP_URL4'); 
				} elseif($imgurl == "IMG5") { 
					@$txt= get_option('PPOPOUPUP_IMG5'); 
					@$url= get_option('PPOPOUPUP_URL5'); 
				} elseif($imgurl == "IMG6") { 
					@$txt= get_option('PPOPOUPUP_IMG6'); 
					@$url= get_option('PPOPOUPUP_URL6'); 
				} else {
					@$txt= get_option('PPOPOUPUP_IMG1'); 
					@$url= get_option('PPOPOUPUP_URL1'); 
				}
			}
			
			$PPOPOUPUP_siteurl = get_option('siteurl');
			$PPOPOUPUP_pluginurl = $PPOPOUPUP_siteurl . "/wp-content/plugins/popup/";
			
			$PPOPOUPUP_txt = $PPOPOUPUP_txt . '<script type="text/javascript" src="'. $PPOPOUPUP_pluginurl . 'popup.js"></script>';
			$PPOPOUPUP_txt = $PPOPOUPUP_txt . '<link rel="stylesheet" type="text/css" href="'. $PPOPOUPUP_pluginurl . 'popup.css" />';
			$PPOPOUPUP_txt = $PPOPOUPUP_txt . '<div id="PopupDiv">';
				$PPOPOUPUP_txt = $PPOPOUPUP_txt . '<div class="PopupDivBar"><a href="#">'.$txt.'</a><a href="#" onClick="PopupDivStop()" class="close">&nbsp;</a></div>';
				$PPOPOUPUP_txt = $PPOPOUPUP_txt . '<div class="PopupDivAds"><a href="#"><img src="'.$url.'" alt="Advertisement" /></a></div>';
			$PPOPOUPUP_txt = $PPOPOUPUP_txt . '</div>';
			$PPOPOUPUP_txt = $PPOPOUPUP_txt . '<script type="text/javascript">PopupDivFunc();</script>';
			return $PPOPOUPUP_txt;
	}
		

}

register_activation_hook(__FILE__, 'PPOPOUPUP_activation');
add_action('admin_menu', 'PPOPOUPUP_add_to_menu');
register_deactivation_hook( __FILE__, 'PPOPOUPUP_deactivate' );


?>