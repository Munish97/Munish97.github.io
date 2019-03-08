<?php
if(!isset($_SESSION)) session_start();
require_once "mysqli_connect.php";
$logerror=$username=$password="";
if(isset($_POST["uname"]))$username=$_POST["uname"];
if(isset($_POST["pass"]))$password=$_POST["pass"];
/*if($username=='admin' && $password=='admin')
{
	header("Location: admin.php");
}
if($username=='admin' && $password!='admin'){$logerror="*Invalid password";}*/

if(isset($_SESSION["username"])){$logerror="*Already logged in..";}
else if($_SERVER["REQUEST_METHOD"]=="POST")
{	//echo $username.$password;
	$query="select password,firstname,cust_id from customer_details where username='$username'";
$result=$conn->query($query);
if($result->num_rows==0)$logerror="*Not registered yet..Please do register";
else {
	$salt1="hey";
	$hashpass=hash('ripemd128',"$salt1$password");
	$result_array=$result->fetch_array(MYSQLI_NUM);
	//echo $hashpass;
	if($hashpass==$result_array[0])
	{
		$_SESSION["username"]=$username;
		$_SESSION["firstname"]=$result_array[1];
		$_SESSION["cust_id"]=$result_array[2];
		header("Location: index.php");
	}
	else{
		$logerror="*Invalid id or password";
	}

}
}


?>

<html>
<head>
	<title>Login Page</title>
	<link rel="stylesheet" type="text/css" href="css/login.css">
</head>
<body>
	<?php include_once "newnav.php";?>
<br /><br />
	<div class="loginbox">
	<img src="images/avatar.png" class="avatar" /><br /><br />
	<h1>Login Here</h1>
	<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
		<p>Username</p>
		<input type="text" required name="uname" placeholder="Enter Username" />
		<p>Password</p>
		<input type="password" required name="pass" placeholder="Enter Password" /><?php echo $logerror; ?>
		<input type="submit" name="ccc" value="Login" />
		<center><a href="forgotpass.php">Forgot password?</a></center><br>
		<center><a href="register.php">&nbsp;&nbsp;&nbsp; Register</a></center>
	</form>
	</div>


</body>
</html>
