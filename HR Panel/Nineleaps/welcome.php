<html>
<head>
<title>Welcome</title>

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

button {
    background-color: #333;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    cursor: pointer;
    width: 100%;
}

button:hover {
    opacity: 0.8;
}

table {
    font-family: courier;
    border-collapse: collapse;
    width : 100%;
}

td, th {
    border: 1px solid #dddddd;
    text-align: left;
    padding: 8px;
}

tr:nth-child(even) {
    background-color: #dddddd;
}

button {
    float : right;
}

.add{
    
    float : right;
    background-color: #333;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    cursor: pointer;
    vertical-align: middle;
    font-family:courier;
    font-size:20px;
}


.add:hover {
    opacity: 0.8;
}

.table{
    padding-left: 2cm;
    padding-right: 2cm;
    padding-top: 1cm;
}

.heading{
    display: inline-block;
    font-size:25px;
    vertical-align: middle;
    padding-left:1cm;
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
    
	</div>
	
	<div>
	        <h2 class="heading">ALL EMPLOYEES</h2>
			<a href="https://shivkantdohaliya.000webhostapp.com/Nineleaps/addEmployee.php"><input class="add" type="submit" value="+ Add Employee"  onClick="history.go(0)"></a>
			<br>
			
			<hr class="line">
	</div>
	
	<div class="table" >
	 
	<?php

    include('databaseConnect.php');

    $connect = new databaseConnect(); //creating object
    $connect->connect(); //calling function by using name
    
    $sql = "SELECT EID, Name, Designation, Manager FROM Employee";
	$result_id = mysqli_query($connect->myconn,$sql);
    
    echo "<table>";
        
    echo "<tr> 
            <th>E.ID</th> 
            <th>Name</th> 
            <th>Designation</th> 
            <th>Manager</th> 
            <th>View</th>
          </tr>";


    while($row = mysqli_fetch_array($result_id)) {

    echo "<tr>";

    echo '<td>' . $row['EID'] . '</td>';

    echo '<td>' . $row['Name'] . '</td>';

    echo '<td>' . $row['Designation'] . '</td>';
    
    echo '<td>' . $row['Manager'] . '</td>';

    echo '<td><a href="show.php?id=' . $row['EID'] . '">View</a></td>';


    echo "</tr>";

    }

    echo "</table>";

    ?>
	</div>
	<hr class="line">
	<div class="Menu" style="height: 100px; ">
	
	
</body>
</html>