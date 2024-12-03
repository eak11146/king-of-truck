<?php
	/**** Class Database ****/
	Class MyDatabase
	{ 
		//constructor
	 
		
		/**** function connect to database ****/
		function CDB($strHost,$strDB,$strUser,$strPassword)
		{	 
		 
			 
				$this->zone= date_default_timezone_set('Asia/Bangkok');
				$this->objConnect = mysql_connect($strHost,$strUser,$strPassword);
				$this->DB = mysql_select_db($strDB);
				$this->charset = mysql_set_charset("utf8");
		}
 
		  
		/**** function insert record ****/
		function fncInsertRecord()
		{
				$strSQL = "INSERT INTO $this->strTable ($this->strField) VALUES ($this->strValue) ";
				return mysql_query($strSQL);
		}

		/**** function select record ****/
		function fncSelectRecord()
		{
				$strSQL = "SELECT * FROM $this->strTable WHERE $this->strCondition ";
				$objQuery = @mysql_query($strSQL);	
				$this->num_row = mysql_num_rows($objQuery);
				return @mysql_fetch_array($objQuery);
		}
		 
		function fncSelect($tb,$select,$condi)
		{
			 
				if(empty($select)){
				 
					$select="*";
				}
				if($condi){
					$strSQL .=" WHERE".$condi;
				}
				$strSQL = "SELECT * FROM $tb";
				$objQuery = @mysql_query($strSQL);
		
				return $objQuery;
				//return @mysql_fetch_array($objQuery);
		}

		/**** function update record (argument) ****/
		function fncUpdateRecord($strTable,$strCommand,$strCondition)
		{
				$strSQL = "UPDATE $strTable SET  $strCommand WHERE $strCondition ";
				return @mysql_query($strSQL);
		}

		/**** function delete record ****/
		 function fncDeleteRecord()
		{
			 	$strSQL = "DELETE FROM $this->strTable WHERE $this->strCondition ";
				return @mysql_query($strSQL);
		}
	 

		/*** end class auto disconnect ***/
		function __destruct() {
				return @mysql_close($this->objConnect);
	    }
	}			
	
	
	 Class ExtDb extends MyDatabase {
		  
		
		function delp(){			 
	 
		 $upSQL ="SELECT * FROM upload_data WHERE post_id='$this->idp'";
		$QueryP = mysql_query($upSQL);
		$count_pic = mysql_num_rows($QueryP);
		 
		 while($objP = mysql_fetch_array($QueryP)){
					$pphoto = $objP["file_name"];
					$linkp = $this->pathf.$pphoto;
					unlink($linkp); //delete it
		 }
			$dqlp="DELETE FROM upload_data WHERE post_id='$this->idp'";
			// $delQueryp  = mysql_query($dqlp);	 
		}
		
		
	 }
  
?>