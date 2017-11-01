<?php

include ('databaseConnect.php'); //including class

$employeename = $_POST['employeename'];
$employeedesignation = $_POST['employeedesignation'];
$managername = $_POST['managername'];

$connect = new databaseConnect(); //creating object
$connect->connect(); //calling function by using name
 

$user_check = mysqli_query($connect->myconn,"SELECT * FROM Employee WHERE Name = '$employeename'");
$count  = mysqli_num_rows($user_check);
$result = mysqli_fetch_array($user_check);

if($count > 0) {
            
           echo "<script>alert('Employee Name Must Be Unique!!');window.location.href='https://shivkantdohaliya.000webhostapp.com/Nineleaps/addEmployee.php';</script>";
			
		} else {
		    
		    $sql = "INSERT INTO Employee (Name, Designation, Manager) VALUES ('$employeename', '$employeedesignation', '$managername')";

            	if (mysqli_query($connect->myconn, $sql)) {
            	    
            	    echo "<script>window.location.href='https://shivkantdohaliya.000webhostapp.com/Nineleaps/welcome.php';alert('Employee Added Successfully.');</script>";
            	    
			} else {
			    
	                echo "<script>alert('Please Try Again Later!!');window.location.href='https://shivkantdohaliya.000webhostapp.com/Nineleaps/addEmployee.php';</script>";
			
			}
	
			}
		
$connect->closeconnection(); //closing connection function call
?>