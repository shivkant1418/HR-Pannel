<html>
<head>
<title>List</title>

<style>


li a {
    color: #333;
    font-family:courier;
    font-size:17px;
    margin: 10px 0;
    
}

li a:hover {
    visibility: visible;
}

.home {
    background-color: #333;
    border: none;
    color: white;
    padding: 15px 32px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin: 4px 2px;
    cursor: pointer;
    float:right;
    font-family:courier;
}

.home:hover {
   
}

.heading{
    display: inline-block;
    font-size:25px;
    vertical-align: middle;
    padding-left:1cm;
    font-family: courier;
}

.menu{
    background:#333;
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
    
    

	<div class="Menu" style="height: 55px; ">
	    
		<a href="https://shivkantdohaliya.000webhostapp.com/Nineleaps/NineLeapsHrPanel.php"><input type="button" class="home" value="Logout"></a>
	<a href="https://shivkantdohaliya.000webhostapp.com/Nineleaps/list.php"><input type="button" class="home" value="List"></a>
	<a href="https://shivkantdohaliya.000webhostapp.com/Nineleaps/welcome.php"><input type="button" class="home" value="Table"></a>
    
	</div
	
	<div>
	        <h2 class="heading">LIST VIEW</h2>
			<br>
			
			<hr class="line">
	</div>
	
	<div class="list" >
	 
	        <?php

            $conn = mysqli_connect('localhost', 'id2271749_nineleaps', 'Nineleaps@1234','id2271749_nineleaps');

            if( !empty($conn->connect_errno)) die("Error " . mysqli_error($conn));

            employee_tree(null);


            function employee_tree($manager){
            global $conn;

            $sql = "select * from Employee where Manager ='".$manager."'";
            
            $result = $conn->query($sql);

            while($row = mysqli_fetch_object($result)):
            $i = 0;
            if ($i == 0) echo '<ul>';
            echo '<li>'.'<a href="show.php?id=' . $row->EID . '">' . $row->Name .'</a>'. "<small><font color= #adad85font >"."  ".$row->Designation.'</a></font></small>';
            employee_tree($row->Name);
            echo '</li>';
            $i++;
            if ($i > 0) echo '</ul>';
            endwhile;
            }

            mysqli_close($conn);
            ?>

	
	</div>
	<hr class="line">
	<div class="Menu" style="height: 20px; ">
	
	
</body>
</html>






