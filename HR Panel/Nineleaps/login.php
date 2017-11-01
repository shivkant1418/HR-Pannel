<?php

include ('databaseConnect.php'); //including class

$useremail = $_POST['useremail'];
$password = $_POST['userpassword'];



$connect = new databaseConnect(); //creating object
$connect->connect(); //calling function by using name
 

$user_check = mysqli_query($connect->myconn,"SELECT * FROM login WHERE user_email = '$useremail' and user_password = '$password'");
$count  = mysqli_num_rows($user_check);

if($count > 0) {
            
            echo "<script>window.location.href='https://shivkantdohaliya.000webhostapp.com/Nineleaps/welcome.php';alert('Login Successfull!!');</script>";
			
		} else {
		    
			echo "<script>window.location.href='https://shivkantdohaliya.000webhostapp.com/Nineleaps/NineLeapsHrPanel.php';alert('Please check your details!!');</script>";
	
			}
		
$connect->closeconnection(); //closing connection function call
?>