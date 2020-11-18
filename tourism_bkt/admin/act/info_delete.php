<?php
session_start();
include ('../../../connect.php');
$id_info = $_GET['id_informasi'];
$id = $_GET['id'];
//echo "$id_info --> id_info";

	$sql1   = "delete from information_admin where id_informasi = $id_info";
	$delete1 = pg_query($sql1);
	if ($delete1){
		echo "<script>alert ('Data Successfully Delete');</script>";
		// echo "<script>eval(\"location:../?page=tourism_detail&id=$id\");</script>";
		header("location:../?page=tourism_detail&id=$id");
	}
	else{
		echo "<script>alert ('Error');</script>";
	}
	
	if($_SESSION['A']===true){
	echo "<script>eval(\"location:../?page=tourism_detail&id=$id\");</script>";
	}
	else{
		echo "<script>eval(\"location:../indexu.php?page=tourism_detail&id=$id\");</script>";
	}
?>