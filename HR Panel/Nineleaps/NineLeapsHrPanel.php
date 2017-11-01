
<html>
<head>


<title>HR PANEL</title>

<style>
ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
    overflow: hidden;
    background-color: #333;
}

form {
    border: 3px solid #f1f1f1;
    width: 100%;
}


input[type=text], input[type=password] {
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

.imgcontainer {
    text-align: center;
    margin: 24px 0 12px 0;
}

img.avatar {
    width: 14%;
    border-radius:40%;
}

.container {
    padding: 16px;
}

.Login{
    padding-left:8cm;
    padding-right:8cm;
}

.heading1{
    font-family : courier;
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

	<div class="<Menu" style="height: 90px; ">
	
    <ul style="height: 60px; ">
    
	</div>
	
	<div class="view" style="height: 100px; ">
	
	<H1 class="heading1"><center>LOGIN TO HR PANEL</center></H1>
	<hr class="line">
	
	</div>
	
	<div class="Login" >
	
	<form action="https://shivkantdohaliya.000webhostapp.com/Nineleaps/login.php" method="post">
	
 	<div class="imgcontainer">
 	
    <img src="https://shivkantdohaliya.000webhostapp.com/Nineleaps/images/logo/hrlogo.jpg" alt="Avatar" class="avatar">
  	
  	</div>

  	<div class="container">
  	
    <label><b>Username</b></label>
    <input type="text" id="emailId" placeholder="Enter Username" name="useremail" required >

    <label><b>Password</b></label>
    <input type="password" id="password" placeholder="Enter Password" name="userpassword" required>
        
    <button  onClick="history.go(0)" type="submit">Login</button>
    
  	</div>

	</form>
	</div>
</body>
</html>