<?php
	$host = "ec2-54-166-114-48.compute-1.amazonaws.com";
	$user = "cfkdkcqzzckgdm";
	$pass = "b43055ae09ead5ce0ed8f16edbcc0aa428364372d361e4ff024955ecd01e1711";
	$port = "5432";
	$dbname = "d1t9rg7qou5d67";
	$conn = pg_connect("host=".$host." port=".$port." dbname=".$dbname." user=".$user." password=".$pass) or die("Gagal");
	// header("Access-Control-Allow-Origin: *");
?>