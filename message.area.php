<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Freelancer - Start Bootstrap Theme</title>

    <!-- Bootstrap Core CSS - Uses Bootswatch Flatly Theme: http://bootswatch.com/flatly/ -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
        <!-- Custom CSS -->
    <link href="css/freelancer.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css">
	 <link rel="apple-touch-icon" href="//mindmup.s3.amazonaws.com/lib/img/apple-touch-icon.png" />
    <link rel="shortcut icon" href="http://mindmup.s3.amazonaws.com/lib/img/favicon.ico" >
    <link href="external/google-code-prettify/prettify.css" rel="stylesheet">
    <link href="http://netdna.bootstrapcdn.com/twitter-bootstrap/2.3.1/css/bootstrap-combined.no-icons.min.css" rel="stylesheet">
    <link href="http://netdna.bootstrapcdn.com/twitter-bootstrap/2.3.1/css/bootstrap-responsive.min.css" rel="stylesheet">
		<link href="http://netdna.bootstrapcdn.com/font-awesome/3.0.2/css/font-awesome.css" rel="stylesheet">
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js"></script>
		<script src="external/jquery.hotkeys.js"></script>
    <script src="http://netdna.bootstrapcdn.com/twitter-bootstrap/2.3.1/js/bootstrap.min.js"></script>
    <script src="external/google-code-prettify/prettify.js"></script>
		<link href="index.css" rel="stylesheet">
    <script src="bootstrap-wysiwyg.js"></script>

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body id="page-top" class="index">

    <!-- Navigation -->
    <nav class="navbar navbar-default navbar-fixed-top">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="home.php">Message Passing System</a>
            </div>
			<div>
			</nav>
			<br>
			<div class="container">
  <div class="hero-unit">
  <div class="pull-right">
	<br/>
     
  </div>
  
   <header>
      <div class="container">
            <div class="row1">
                <div class="col-lg-12">
                 <form method="post" class="login">

</form>
   
              </div>
            </div>
        </div>
  </header> 
	
	<!---
	Please read this before copying the toolbar:

	* One of the best things about this widget is that it does not impose any styling on you, and that it allows you 
	* to create a custom toolbar with the options and functions that are good for your particular use. This toolbar
	* is just an example - don't just copy it and force yourself to use the demo styling. Create your own. Read 
	* this page to understand how to customise it:
    * https://github.com/mindmup/bootstrap-wysiwyg/blob/master/README.md#customising-
	--->
   <form method="post" class="login">
    <p>
   <label for="login">SEND TO</label>
  <input type="text" name="receiver" id="receiver" >
  <input type="text" name="message" id="message"  value="Type here your message" height="1000px"  style="padding: 100px; width: 1000px";  >
      </p>
	  
	  <p class="login-submit">
      <button type="submit" class="login-button "  >SEND</button>
    </p>
	
	  </form>
  
  
</body>
</html>





<?php
include('session.php');
		$connection = mysql_connect("localhost", "root", "");
		$db = mysql_select_db("mps", $connection);
		//$query = mysql_query("select * from login where pass='$password' AND uid='$username'", $connection);
		//$rows = mysql_num_rows($query);

echo"<h4 align='center'> INBOX </h4>";


if (empty($_POST['message']) ) 
  {
    $error = "Username or Password is invalid";
  }
  else
  {
    // Define $username and $password
    $message=$_POST['message'];
	$receiver=$_POST['receiver'];
	//echo"$message";
	//echo"$login_session";
	//echo"$receiver";
	$query1 = mysql_query("select * from profile where st_id='$login_session'", $connection);
	$array = mysql_fetch_array($query1);
	$sname=$array['name'];
	
	$query2 = mysql_query("select * from profile where st_id='$receiver'", $connection);
	$array2 = mysql_fetch_array($query2);
	$rname=$array2['name'];
	
	echo"$sname";
	echo"$rname";
	$query = mysql_query("INSERT INTO message(sender,sendname,receiver,recname,date,message) VALUES ('$login_session','$sname','$receiver','$rname','$dt','$message')", $connection);
	//$rows = mysql_num_rows($query);
	
//	echo"$message";
	
  }

 
$ch = curl_init();
$user="nikhilcr08@gmail.com:27535691";
$receipientno="8089746675"; 
$senderID="TEST SMS"; 
$msgtxt="this is test message , test"; 
curl_setopt($ch,CURLOPT_URL,  "http://api.mVaayoo.com/mvaayooapi/MessageCompose");
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, "user=$user&senderID=$senderID&receipientno=$receipientno&msgtxt=$msgtxt");
$buffer = curl_exec($ch);
if(empty ($buffer))
{ echo " buffer is empty "; }
else
{ echo $buffer; } 
curl_close($ch);



   mysql_close($connection); // Closing Connection

?>