<?
	  
	include("conn/classdb_connect.php");
	 
	/*
	$strHost = "localhost";
	$strDB = "isuzu4u_new";
	$strUser = "isuzu4u_new";
	$strPassword = "dfTo56@3";
	
	
	isuzu4u_new
	isuzu4u_new
	Nbg60h?7
	*/
	
	$strHost = "localhost";
	$strDB = "isuzu";
	$strUser = "root";
	$strPassword = "";
	
	 
	$MyDB = new MyDatabase();
	$MyDB->CDB($strHost,$strDB,$strUser,$strPassword);
	 
	 
?>