<html lang="en"><head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Freelancer - Start Bootstrap Theme</title>

    <!-- Bootstrap Core CSS - Uses Bootswatch Flatly Theme: http://bootswatch.com/flatly/ -->
  <link href="css/newuser.css" rel="stylesheet">

    <!-- Custom CSS -->
    

    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body id="page-top" class="index">

    <!-- Navigation -->
    

    <!-- Header -->
    <header>
        <div class="container">
            
        </div>
    </header>

   
   

    <!-- Footer -->
    

    
    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
    <script src="js/classie.js"></script>
    <script src="js/cbpAnimatedHeader.js"></script>

    <!-- Contact Form JavaScript -->
    <script src="js/jqBootstrapValidation.js"></script>
    <script src="js/contact_me.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="js/freelancer.js"></script>



    <div class="nav">
<h1><a href="index.php"> MESSAGE PASSING SYSTEM </a><a></a></h1><a>    
</a></div><a>


<h2 class="register-title">Create New Account</h2>
  <form class="register" method="post">
    
    <input type="text" name="username" id="username" class="register-input" value="Username">
    <input type="password" name="password1" id="password1" class="register-input" value="Password">
    <input type="password" name="password2" id="password2" class="register-input" value="Confirm Password">
   


<button class="createaccount"  type="submit" class="login-button">Create account </button>



 </form>
 


</body></html>



<?php

if (empty($_POST['username']) || empty($_POST['password1']) || empty($_POST['password2']) ) 
  {
    $error = "Username or Password is invalid";
	echo"error";
  }
  else
  {
    // Define $username and $password
    $username=$_POST['username'];
    $password1=$_POST['password1'];
	$password2=$_POST['password2'];
	echo"$username";
	echo"$password";
	echo"$password1";
    // Establishing Connection with Server by passing server_name, user_id and password as a parameter
    $connection = mysql_connect("localhost", "root", "");

    // Selecting Database
    $db = mysql_select_db("mps", $connection);
	if($password1==$password2)
	{
    // SQL query to fetch information of registerd users and finds user match.
    $query = mysql_query("INSERT INTO login(user,pass,u_type,uid) VALUES ('$username','$password1',' ',' ') ", $connection);
	header("location: userinfoo.php");
    
	}
	else
	{
		echo"Invalid password";
	}
	/*else{
		echo"passwords do not match";
	}
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
  }*/
}


			

		//$query = mysql_query("INSERT INTO message(sender,sendname,receiver,recname,date,message) VALUES ('$login_session','$sname','$receiver','$rname','$dt','$message')", $connection);
		
	?>




