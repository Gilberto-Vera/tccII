<?php
	$conn=pg_connect("host=localhost port=5432 dbname=dbtcc user=gilberto password=gilberto") 
	or die("Cannnot db,please check your connection string".pg_last_error());
?>
