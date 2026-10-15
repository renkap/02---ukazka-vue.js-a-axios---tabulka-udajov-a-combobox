<!DOCTYPE html>
<?php session_start(); ?>
<html>
<head>

    <?php include_once "head.php";
	include "config.php";
	include "lib.php";
	include 'login.php';

	if (!isset($_SESSION['Login_Prihlasovacie_meno']))  // nie je prihlaseny
		{
		exit;
		}
	include_once "navbar.php";
	echo "<span class='oznam cervene d-block text-center'>Nemáte práva na zadanie opravy.</span>";
    exit;
	?>  
 <meta name="viewport" content="width=device-width, initial-scale=1">

</head>	
</body>

</html>