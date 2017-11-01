
<html>
<head>

<title>Employee Details</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
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

input[type=text], input[type=password]{
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    box-sizing: border-box;
    border-radius: 10px;
    font-family: courier;
    font-size:15px;
    height:5%;
}

select {
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
    padding: px 20px;
    margin: 8px 0;
    border: none;
    cursor: pointer;
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

body {font-family: "Lato", sans-serif;}


.tab {
    overflow: hidden;
    border: 1px solid #ccc;
    background-color: #333;
}

.tablinks {
    background-color: #333;
    border: none;
    color: white;
    padding: 15px 32px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 15px;
    margin: 4px 2px;
    cursor: pointer;
    font-family:courier;
}


.tablinks.active {
    background-color: #737373;
}

.tabcontent {
    display: none;
    padding: 6px 12px;
    border: 1px solid #ccc;
    border-top: none;
}

.view{
    padding-left:3cm;
    padding-right:3cm;
}
.container{
    padding-left:2cm;
    padding-right:5cm;
}
</style>

<script>
function myFunction() {
    window.alert("Can not Change the present Manager it will cause a circular reference error.");
}
</script>

<script type="text/javascript">
window.onload = function() {
    if(!window.location.hash) {
        window.location = window.location + '#loaded';
        window.location.reload(true);
    }
    
    <?php
    if($userid == 1){
                   echo "<script>".'$("#editli").hide()'."</script>";
                }
    ?>
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
	
	><div>
	        <h2 class="heading">
	            <?php
                include ('databaseConnect.php'); //including class

                $userid = $_GET['id'];
                
                
                $connect = new databaseConnect(); //creating object
                $connect->connect(); //calling function by using name
 

                $userdetails = mysqli_query($connect->myconn,"SELECT Name, Designation, Manager FROM Employee WHERE EID = '$userid'");
                
                $result = mysqli_fetch_array($userdetails);
                
                echo $result['Name']."<small><font color= #adad85>[Employee]</font></small>";
                ?>
	        </h2>
			<br>
			
			<hr class="line">
	</div>
	
<div class="view" >
	 
  <ul class="nav nav-pills1">
    <li id = "showli" style="float : left;" class="active"><a data-toggle="pill" href="#show">Show</a></li>
    <li id = "editli" style="float : left;"><a data-toggle="pill" href="#edit">Edit</a></li>
  </ul>
  
  <div class="tab-content">
    <div id="show" class="tab-pane fade in active">
     <div class="container">
  	<br>
    <label><b>Name</font></b></label>
    <input type="text" id="username"  name="employeename" readonly value="<?php echo $result['Name'] ?>">

    <label><b>Designation</b></label>
    <input type="text" id="userdesignation" name="employeedesignation" readonly value="<?php echo $result['Designation'] ?>">
    
     <label><b>Manager</b></label>
    <input type="text" id="manager" name="manager" readonly value="<?php echo $result['Manager'] ?>">
    </div>

    </div>
    <div id="edit" class="tab-pane fade">
      <form id="updateemployeeRegister"action="https://shivkantdohaliya.000webhostapp.com/Nineleaps/updateEmployee.php" method="POST">
	
 
  	<div class="container">
  	<br>
  	
  	<label><b>E.Id</font></b></label>
    <input readonly type="text" id="userid"  name="employeeid" value="<?php echo $userid ?>">
    
    <label><b>Name</font></b></label>
    <input type="text" id="username" placeholder="Full Name" name="employeename" value="<?php echo $result['Name'] ?>" required >

    <label><b>Designation</b></label>
    <input type="text" id="userdesignation" placeholder="Designation" name="employeedesignation" value="<?php echo $result['Designation'] ?>" required >
    
    <label><b>Manager</b></label>
    <select onclick="myFunction()" name="managername" form="employeeRegister" required>
     <?php
    
    echo '<option  selected value="'.$result['Manager'].'">'.$result['Manager'].'</option>';

    ?>
    
    </select>
    
        
    <button  onClick="history.go(0)" class="addEmployee" type="submit">Submit</button>
    
    <font face="courier" color="#737373"><small>All fields are required *.</small></font>
    
  	</div>

	</form>
    </div>
  </div>
     
    </div>

</body>
</html>