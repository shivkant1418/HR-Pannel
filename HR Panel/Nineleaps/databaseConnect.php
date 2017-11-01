<?php

class databaseConnect{
			
			var  $myconn; // without var it wont work because it helps in defining variable // we can use it as public $myconn;
			private  $servername = "localhost"; // here we hadnt defined var because private had automatically defined that it is a variable 
			private  $username = "id2271749_nineleaps"; // 
			private  $password = "Nineleaps@1234";
			private  $dbname = "id2271749_nineleaps";
			
	


			function connect(){
			// Create connection
			$conn = new mysqli($this->servername, $this->username, $this->password, $this->dbname);
			// Check connection
			if ($conn->connect_error) {
			die("Connection failed: " . $conn->connect_error);
			} 
			else
				$this->myconn=$conn; //helps in establishing connection form the signup.php
			}
			
			function closeconnection(){
				mysqli_close($this->myconn);
			}	
			
}

?>