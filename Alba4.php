<?php

	include("DataAccessLayer/PDOFactory.php");
	
	$datafactory = new PDOFactory();
	$datafactory->create();

	include("PresentationLayer/templates/header.html");
	
	include("PresentationLayer/addCourseUI.php");
	include("PresentationLayer/timetableUI.php");
	include("PresentationLayer/planUI.php");
	include("PresentationLayer/settingsUI.php");
	

	include ("PresentationLayer/templates/footer.html");

?>