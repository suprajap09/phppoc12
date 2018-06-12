<?php
include("config/core.php"); 
Class dbObj{
	
	// specify your own database credentials
	var $servername = "ec2-54-235-90-200.compute-1.amazonaws.com";
	var $username = "iyizcwyllniyol";
	var $password = "651e46d888978d82218887e33331ce58571e2e8d962080d41a90e67b8d0bb2ce";
	var $dbname = "dbsvd7rdbhtvq4";
	var $port = "5432";
	var $conn;
	var $sslmode= "require";
	
	  /*
	 Function Name: getConnstring
	 Params: NULL
	 Created BY:
	 Created ON : 
	 Description : connection for Postgres server in Heroku
    */
	function getConnstring() { 
		$con = pg_connect("host=".$this->servername." port=".$this->port." dbname=".$this->dbname." user=".$this->username." password=".$this->password." sslmode=".$this->sslmode."") or die("Connection failed: ".pg_last_error());
      
		/* check connection */
		if (pg_last_error()) {
			 echo json_encode(
				array("message" => "Connection failed")
			  );
			exit();
		} else {
			$this->conn = $con;
		}
		 // pg_close($con);
		return $this->conn;
	}
}
?>