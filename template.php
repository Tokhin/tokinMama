<html>
<!--
MMMMM       MMMMM   HHH      HHH   BBBBBBBB-.    WWW             WWW  EEEEEEEEEEE   BBBBBBBB-. 
MMMMMM     MMMMMM   HHH      HHH   BBB       B   WWW             WWW  EEEEEEEEEEE   BBB       B
MMM MMM   MMM MMM   HHH      HHH   BBB       B   WWW             WWW  EEE           BBB       B
MMM  MMM MMM  MMM   HHHHHHHHHHHH   BBB------'    WWW     WWW     WWW  EEEEEEEEE     BBB------' 
MMM   MMMM    MMM   HHHHHHHHHHHH   BBB******.     WWW   WWWWW   WWW   EEEEEEEEE     BBB******. 
MMM           MMM   HHH      HHH   BBB       B     WWW WWW WWW WWW    EEE           BBB       B
MMM           MMM   HHH      HHH   BBB       B      WWWWW   WWWWW     EEEEEEEEEEE   BBB       B
MMM           MMM   HHH      HHH   BBBBBBBBB*        WWWW   WWWW      EEEEEEEEEEE   BBBBBBBBB* 
-->
	<head>
	 <meta charset="utf-8"/>
		<title><?php echo $conf['pageTitle']; ?></title>
    <link href="css/main.css" rel="stylesheet" type="text/css">
    <script src="js/jquery-1.3.2.js"></script>
    <script src="js/script.js"></script>
	</head>
  <body>
     <div id="container">
 					<div id="header">
            <div class="logo">	
             ShareBD<br/>
			 Logo
             </div>
			 <div class="page-title">
			 Share Your Thoughts
			 </div>
             <div class="menu-container">
              <?php echo $data['menu']; ?>
             </div>
             <div class="clear"></div>
   				</div>

					<div id="body">
            <?php  echo $data['bodyContent']; ?>
          </div>

          <div id="footer">
            &copy; 2012 NSTU
          </div>

			</div>
  </body>

</html>
