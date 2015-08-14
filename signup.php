<?php
require_once('conf.php');
require_once('lib.php');

if(getField('submit') == "Submit")
{
   createUser();
   header("Location: login.php");
}


$conf['pageTitle'] .= " | SignUp";

$data['menu'] = getTopMenu();
$data['bodyContent'] = getSignUpForm();

require_once(TEMPLATE);



function getSignUpForm()
   {
    $temp = '<div class="title">Registration</div>
             <div class="form">
             <div class="errors">
             </div>
             <form action="signup.php" method="post" id="signup_form">
    					<div class="field">
              <label for="first_name">First Name</label><br/>
              <input type="text" name="first_name" id="first_name"/>
                </div>
     					<div class="field">
              <label for="last_name">Last Name</label><br/>
              <input type="text" name="last_name" id="last_name"/>
                </div>
      				<div class="field">
              <label for="email">Email</label><br/>
              <input type="email" name="email" id="email"/>
                </div>
        			<div class="field">
              <label for="username">Username</label><br/>
              <input type="text" name="username" id="username"/>
                </div>
           		<div class="field">
              <label for="password">Password</label><br/>
              <input type="password" name="password" id="password"/>
                </div>
							<div class="field">
              <label for="password_confirmation">Verify Password</label><br/>
              <input type="password" name="password_confirmation" id="password_confirmation"/>
                </div>
								<div class="clear"></div>
            	<div class="field">
              <input type="submit" name="submit" value="Submit"/>
                </div>
	     				<div class="clear"></div>
								</form></div>';
     return $temp;
   }


?>
