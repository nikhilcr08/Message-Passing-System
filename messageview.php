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

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body id="page-top" class="index">
<div class="container">
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
			 <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
			
                <ul class="nav navbar-nav navbar-right">
				<BR><br>
				<span class="label label-primary">MESSAGES</span>
			

				
                    <li class="hidden">
                        <a href="#page-top"></a>
                    </li>
								 			</nav>
 <div class="row">
                <div class="col-lg-12">
                    
                    <div class="intro-text">
                        
                        
        
                    </div>
                </div>
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
	 </div>
                </div>
            </div>
        </div>
    
</body>

</html>



<?php
include('session.php');
		$connection = mysql_connect("localhost", "root", "");
		$db = mysql_select_db("mps", $connection);
		//$query = mysql_query("select * from login where pass='$password' AND uid='$username'", $connection);
		//$rows = mysql_num_rows($query);

echo"<h4 align='center'> INBOX </h4>";

/*$query = mysql_query("select * from $login_session where name='Nikhil CR'", $connection);
while($row1 = mysql_fetch_array($query))
{
	echo"<table border='1'>
	<tr>
	<th>NAME</th>
	<th>ADDRESS</th>
	<th>PHONE</th>
	<th>EMAIL</th>
	<th>S1</th>
	<th>S2</th>
	</tr>";
	
	echo"<tr>";
	echo"<td>".$row1['name']."</td>";
	echo"<td>".$row1['address']."</td>";
	echo"<td>".$row1['phone']."</td>";
	echo"<td>".$row1['email']."</td>";
	echo"<td>".$row1['s1']."</td>";
	echo"<td>".$row1['s2']."</td>";
}*/

 $query = mysql_query("select * from message where receiver='$login_session' order by date", $connection);
 $rows = mysql_num_rows($query);

	
if($rows<1)	
{
		echo"<h6 align='center'>NO MESSAGES FOUND </h6>";
}	
else
{
echo"<table width=1000 border=2 cellspacing=0 cellpadding=0 align='center'>
	<tr>
	<th>Receiver </th>
	<th> Message </th>
	<th>Date </th>
	</tr><tr></tr>";
	
while($array = mysql_fetch_array($query))
{
	
	echo"<tr>";
	echo"<td>".$array['sendname']."</td>";
	echo"<td>".$array['message']."</td>";
	echo"<td>".$array['date']."</td>";
	echo"</tr>";
	
}
}
echo"</table>";



echo"<br><br><h4 align='center'> OUTBOX </h4>";
$query1 = mysql_query("select * from message where sender='$login_session' order by date", $connection);
 $rows2 = mysql_num_rows($query1);

	
if($rows2<1)	
{
	echo"<h6 align='center'>NO MESSAGES FOUND </h6>";
}
	
else
{
	echo"<table width=1000 border=2 cellspacing=0 cellpadding=0 align='center'>
	<tr>
	<th>Receiver </th>
	<th> Message </th>
	<th>Date </th>
	</tr><tr></tr>";
	
	while($array1 = mysql_fetch_array($query1))
	{
	
		echo"<tr>";
		echo"<td>".$array1['recname']."</td>";
		echo"<td>".$array1['message']."</td>";
		echo"<td>".$array1['date']."</td>";
		echo"</tr>";
	
	}
}

echo"</table>";

    mysql_close($connection); // Closing Connection

?>