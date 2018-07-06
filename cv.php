<!DOCTYPE html>
<html>
<?php
try
{
	$bdd = new PDO('mysql:host=localhost;dbname=cv;charset=utf8', 'root', '');
}
catch(Exception $e)
{
        die('Erreur : '.$e->getMessage());
}




	//declaration des varaibles
	$pageTitle = "Mon CV";
	$includeBasePath = "views/";
	
	//include du header
	include($includeBasePath."header.php");
	?>
	<body>
		<?php // bodybuilding
		include($includeBasePath."title.php");
		include($includeBasePath."personal-details.php");
		include($includeBasePath."language.php");
		include($includeBasePath."profile.php");
		?>
	</body>
</html>