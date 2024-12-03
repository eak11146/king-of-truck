<?
	  
	include("conn/classdb_connect.php");
	 
	
	$strHost = "localhost";
	$strDB = "isuzu";
	$strUser = "root";
	$strPassword = "";
	
	 
	$MyDB = new MyDatabase();
	$MyDB->CDB($strHost,$strDB,$strUser,$strPassword);
	 
	 
?>