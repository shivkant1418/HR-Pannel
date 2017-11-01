<?php

include ('databaseConnect.php'); //including class

$employeeid = $_POST['employeeid'];
$employeename = $_POST['employeename'];
$employeedesignation = $_POST['employeedesignation'];

$connect = new databaseConnect(); //creating object
$connect->connect(); //calling function by using name

$result = mysqli_query($connect->myconn,"UPDATE Employee SET Name='$employeename', Designation = '$employeedesignation' WHERE EID = $employeeid");

    if($result){
        echo "<script>window.location.href='https://shivkantdohaliya.000webhostapp.com/Nineleaps/welcome.php';alert('Employee Updated Successfully!!');</script>";
    }else{
        echo "<script>window.location.href='https://shivkantdohaliya.000webhostapp.com/Nineleaps/welcome.php';alert('Sorry please try again later!!');</script>";
    }

$connect->closeconnection(); //closing connection function call
?>