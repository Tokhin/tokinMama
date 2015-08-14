<?php
require_once('conf.php');
require_once('lib.php');

$error = "";
if(getField('submit') == "Login")
{
  if(isValidUser())
   {
   setLogin();
   header("Location: index.php");
   }
   else
   {
   $error = "Invalid Username or Password!";
   }
}


$conf['pageTitle'] .= " | SignUp";

$data['menu'] = getTopMenu();
$data['bodyContent'] = getLoginForm($error);

require_once(TEMPLATE);

function getLoginForm($error)
   {
    $temp = '<div class="title">User Login</div>
             <div class="form login-form">
             <div class="errors">'
             .$error.
			 '</div>
             <form action="login.php" method="post" id="login_form">
        	<div class="field">
              <label for="username">Username</label><br/>
              <input type="text" name="username" id="username"/>
                </div>
           		<div class="field">
              <label for="password">Password</label><br/>
              <input type="password" name="password" id="password"/>
                </div>
				<div class="clear"></div>
            	<div class="field">
              <input type="submit" name="submit" value="Login"/>
                </div>
	     		<div class="clear"></div>
				</form>
				</div>';
     return $temp;
   }

?>
