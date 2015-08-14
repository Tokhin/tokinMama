<?php
function getField($key)
	{
	return @$_REQUEST[$key];		
	}

function createUser()
    {
	  	return runSQL(sprintf(INSERT_USER, 	getField('first_name'),
						    	getField('last_name'),
							getField('email'),
	   						getField('username'),
							md5(getField('password'))
			));
     }

  //define User class
  class User{
   public $id, $name, $email, $username;
   public function __construct($user_id){
      $result = runSQL("select * from users where id = '$user_id'");
	  $user = mysql_fetch_array($result);
	  $this->id = $user['id'];
	  $this->name = $user['first_name'].' '.$user['last_name'];
	  $this->email = $user['email'];
	  $this->username = $user['username'];
   }
  }	 
  
  //define current loggedin user
  if(isLogin()){
  $current_user = new User($_SESSION['sharebd_user_id']);
  }

function getTopMenu()
  {
   $temp = '<div class="menu"><a href="index.php">HOME</a></div>';
   if(isLogin()){
   $temp .='<div class="menu"><a href="index.php">Your Wall</a></div>
            <div class="menu"><a href="logout.php">Logout</a></div>';
   }
   else {
   $temp .='<div class="menu"><a href="signup.php">Registration</a></div>
			<div class="menu"><a href="login.php">Login</a></div>';
    }
   return $temp;
  }

/**********************************************************************************************************/
/****************************************** Login Functionality *******************************************/
/**********************************************************************************************************/


function isValidUser()

	{ $result=runSQL('SELECT id FROM users where username="'.getField('username').'" and password="'.md5(getField('password')).'" ');

		if(mysql_num_rows($result)==1)

		{ $row=mysql_fetch_array($result);

		  $_SESSION['sharebd_user_id']=$row['id'];			  

		  return true;

		}	

		return false;

	}



function isLogin()

	{

		if(@$_SESSION['sharebd_user_login']=='yes')

			return true;

			

		return false;

	}

	

function setLogin()

	{ 

		$_SESSION['sharebd_user_login']='yes';		

	}

	

function logout()

	{

		$_SESSION['sharebd_user_login']='';

        $_SESSION['sharebd_user_id']='';

	}



function runSQL($query)
	{
		global $conf;
		
		$link = mysql_connect($conf['db_hostname'], $conf['db_user'], $conf['db_password']);
		
		mysql_select_db($conf['db_name']);
		
		return mysql_query($query);
    }
?>
