<?php

	$conn = mysqli_connect('localhost','anu','anu0501','malyaraaj-313537e38d');

	if(!$conn){
		die("Could not connect to the database due to the following error --> ".mysqli_connect_error());
	}

?>