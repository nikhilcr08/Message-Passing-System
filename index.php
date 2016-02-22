<html lang="en"><!--<![endif]--><head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <title>Message Passing System</title>
  <link rel="stylesheet" href="css/style.css">
  <!--[if lt IE 9]><script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
  <link href="css/freelancer.css" rel="stylesheet">
  
  <style type="text/css">
   
    nw{
      text-align: left;



    }
  
  </style>
</head>
<body>
  <br>
   <br>
   <div>
     <img class="logimage" src="img/profilee.png" align="middle">
   
<h2> MESSAGE PASSING SYSTEM </h2>
   <form method="post" class="login">
    <p>
      <label for="login">Username:</label>
      <input type="text" name="username" id="username" >
    </p>

    <p>
      <label for="password">Password:</label>
      <input type="password" name="password" id="password" >
    </p>

    <p class="login-submit">
      <button type="submit" class="login-button">Login</button>
    </p>

    <p class="forgot-password"><a href="index.php">Forgot your password?</a></p>
    <p class="new-user"><a href="newuser.php">New user?</a></p>
  </form>
  

</div>

</body>
</html>



<?php

session_start(); // Starting Session
$error=''; // Variable To Store Error Message
//if (isset($_POST['submit']))
//{
  if (empty($_POST['username']) || empty($_POST['password'])) 
  {
    $error = "Username or Password is invalid";
  }
  else
  {
    // Define $username and $password
    $username=$_POST['username'];
    $password=$_POST['password'];
    // Establishing Connection with Server by passing server_name, user_id and password as a parameter
    $connection = mysql_connect("localhost", "root", "");

    // To protect MySQL injection for Security purpose
    $username = stripslashes($username);
    $password = stripslashes($password);
    $username = mysql_real_escape_string($username);
    $password = mysql_real_escape_string($password);
    // Selecting Database
    $db = mysql_select_db("mps", $connection);
    // SQL query to fetch information of registerd users and finds user match.
    $query = mysql_query("select * from login where pass='$password' AND user='$username'", $connection);
    $rows = mysql_num_rows($query);
	$array = mysql_fetch_array($query);
    if ($rows == 1) 
    {
         // echo "Username or Password $pass  $password   $username";
		//while($row1=mysql_fetch_array($query))
		//{     
		//$_SESSION['login_user']=$row1[uid];// Initializing Session
		$_SESSION['login_user']=$username;
		
		//}
		if($array['u_type']==st)
		{
			header("location: home.php"); // Redirecting To Other Page
		}
		else
		{
			header("location: homeadmin.php"); // Redirecting To Other Page
		}
    } 
    else 
    {
        //  echo "wrong Username or Password $pass  $password   $username";
      $error = "Username or Password is invalid";
      echo "Username or Password is invalid";
    }
    mysql_close($connection); // Closing Connection
  }
//}


?>
