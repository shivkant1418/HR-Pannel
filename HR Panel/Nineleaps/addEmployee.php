
<html>
<head>

<title>Add Employee</title>

<style>

ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
    overflow: hidden;
    background-color: #333;
}

li {
    float: right; 
}


li a {
    display: inline-block;
    color: white;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
    padding: 25px;
    font-family:courier;
    
}

li a:hover {
    background-color: #666666;
}

input[type=text], input[type=password], select {
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    box-sizing: border-box;
    border-radius: 10px;
    font-family: courier;
    font-size:15px;
}

button {
    background-color: #333;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    cursor: pointer;
    width: 100%;
    font-family:courier;
    font-size:20px;
}

button:hover {
    opacity: 0.8;
}

.heading{
    display: inline-block;
    font-size:25px;
    vertical-align: middle;
    padding-left:1cm;
    font-family: courier;
}

.headingclass{
    background-color : #b3b3b3;
}

.register{
    padding-left:8cm;
    padding-right:8cm;
}

label{
    font-family: courier;
}

</style>

<script type="text/javascript">
window.onload = function() {
    if(!window.location.hash) {
        window.location = window.location + '#loaded';
        window.location.reload(true);
    }
}
</script>


</head>

<body oncontextmenu="return false" style="height: 427px; ">
    

	<div class="Menu" style="height: 90px; ">
	
    <ul style="height: 60px; ">
    <li style="height: 60px; "><a href="https://shivkantdohaliya.000webhostapp.com/Nineleaps/NineLeapsHrPanel.php">Logout</a></li>
    <li style="height: 60px; "><a href="https://shivkantdohaliya.000webhostapp.com/Nineleaps/list.php">List</a></li>
    <li style="height: 60px; "><a href="https://shivkantdohaliya.000webhostapp.com/Nineleaps/welcome.php">Table</a></li>
    </ul>
    
	</div
	
	<div>
	        <h2 class="heading">ADD A EMPLOYEE</h2>
			<br>
			
			<hr class="line">
	</div>
	
	<div class="register" >
	 
	<form id="employeeRegister"action="https://shivkantdohaliya.000webhostapp.com/Nineleaps/addEmployeeResult.php" method="POST">
	
 
  	<div class="container">
  	
    <label><b>Name</font></b></label>
    <input type="text" id="username" placeholder="Full Name" name="employeename" required >

    <label><b>Designation</b></label>
    <input type="text" id="userdesignation" placeholder="Designation" name="employeedesignation" required >
    
    <label><b>Manager</b></label>
    <select name="managername" form="employeeRegister" required>
     <option disabled selected value>-- Select Reporting Manager --</option>
     <?php

    include('databaseConnect.php');

    $connect = new databaseConnect(); //creating object
    $connect->connect(); //calling function by using name
    
    $sql = "SELECT DISTINCT Name FROM Employee ORDER BY Name";
	$result_id = mysqli_query($connect->myconn,$sql);
    

    while($row = mysqli_fetch_array($result_id)) {

    echo '<option value="'.$row['Name'].'">'.$row['Name'].'</option>';

    }

    ?>
    
    </select>
    
        
    <button  onClick="history.go(0)" class="addEmployee" type="submit">Submit</button>
    
    <font face="courier" color="#737373"><small>All fields are required *.</small></font>
    
  	</div>

	</form>
	
  	</div>
</body>
</html>