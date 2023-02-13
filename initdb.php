<?php
		//print("I'm in the init of Ruben Peña<br>");
		require_once("MySQLdb.php");

		if(isset($_POST['functionCreate1'])) $_POST["Control"]="Create";
		if(isset($_POST['functionRead1'])) $_POST["Control"]="Read";

		$db = new MySQLdb();
		echo '<script>window.location.assign("http://localhost/M12-BackEnd/PaginaPrincipal.html");</script>';
?>
