<?php
	session_start();
  /* Database Configuration */	
	$conf['db_user']='root';        		//change this according to your default database user name
	$conf['db_password']='';				//change this according to your default database password
	$conf['db_hostname']='localhost';

	$conf['db_name']='sharebd_dev';
	$conf['pageTitle'] = "Share BD";


  /* Define Database query structures */
  define('INSERT_USER','INSERT INTO users ( id, first_name, last_name, email, username, password)
											VALUES (NULL, "%s", "%s", "%s", "%s", "%s");
		     ');

  /* Define Default HTML Template */
	define('TEMPLATE', 'template.php');



  /*****************************/
  /* Check Database Connection */
	$link = mysql_connect($conf['db_hostname'], $conf['db_user'], $conf['db_password']);
	if (!$link) {
    $temp = '<div style="width:600px;margin-left:auto;margin-right:auto;">
             <h2>Your Database Configuration is Not Correct.</h2>
             Please give the correct credentials at the top of <strong>conf.php</strong><br/><br/>
             <strong>Error details:</strong><br/>
            ';
    $temp .= mysql_error().'</div>';
  	die($temp);
	}

  //Create Database if not exists
  $db_name = $conf['db_name'];
  mysql_query("CREATE DATABASE IF NOT EXISTS $db_name;") or die(mysql_error());

	// Select Database if exists
	$db_selected = mysql_select_db($conf['db_name'], $link);
	if (!$db_selected) {
  	die (mysql_error());
	}

  //Create users table if not exists
  $create_users = "CREATE TABLE IF NOT EXISTS users (
  					id int(11) NOT NULL AUTO_INCREMENT,
  					first_name varchar(20) NOT NULL,
					last_name varchar(20) NOT NULL,
					email varchar(50) NOT NULL,
					username varchar(20) NOT NULL,
					password varchar(255) NOT NULL,
					PRIMARY KEY (id)
					) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;";
  mysql_query($create_users) or die(mysql_error());


?>
