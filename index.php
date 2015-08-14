<?php
require_once('conf.php');
require_once('lib.php');

$conf['pageTitle'] .= " | Home";

$data['menu'] = getTopMenu();
$data['bodyContent'] = getHomeBodyContent();

require_once(TEMPLATE);


function getHomeBodyContent()
  {
    $temp = '<div class="home-container">';

	if(isLogin()){
    global $current_user;	
	$temp .= '<div class="user-info">';
	$temp .= 'Welcome '.$current_user->name.'<br/>';
    $temp .= 'Email: '.$current_user->email.'<br/>';
	$temp .= 'Username: '.$current_user->username.'<br/>';
	$temp .= '</div>';
	}
	else
	{
	$temp .= '<div class="banner">
			  <img src="images/home-banner.jpg" width="597"/>
			  </div>
			  <div class="notice">
			  Share your feelings with your connections.<br/><br/>
			  <a href="signup.php" class="btn">Signup Now</a>
			  </div>
			  <div class="clear"></div>
			 ';
	}
	
	$temp .= '</div>';
    return $temp;
  }


?>
