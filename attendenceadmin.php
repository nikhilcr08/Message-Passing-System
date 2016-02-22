<!DOCTYPE html>
<html lang="en">
<head>
  <title>attendence</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="./css/custom1.css?v=1.0.2" rel="stylesheet">
   <link rel="stylesheet" href="css/style1.css">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
</head>
<body>

<form action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" method="post">
	<label for='formCountries[]'>Select the semestr and month that you want to update the attendence</label><br>
	<select name="formyear[]">
		<option value="1">YEAR 1</option>
		<option value="2">YEAR 2</option>
		<option value="3">YEAR 3</option>
		<option value="4">YEAR 4</option>
		
	</select><br>
	
	<select name="formmnth[]">
		<option value="jan">JANUARY</option>
		<option value="feb">FEBRUARI</option>
		<option value="mar">MARCH</option>
		<option value="apr">APRIL</option>
		<option value="may">MAY</option>
		<option value="jun">JUNE</option>
		<option value="jul">JULY</option>
		<option value="aug">AUGUST</option>
		<option value="sep">SEPTEMBER</option>
		<option value="oct">OCTOBER</option>
		<option value="nov">NOVEMBER</option>
		<option value="dec">DECCEMBER</option>

	
		
		
		
	</select>
	<input type="submit" name="formSubmit" value="Submit" >
</form>




</body>
</html>


<?php
include('session.php');
        $connection = mysql_connect("localhost", "root", "");
        $db = mysql_select_db("mps", $connection);
        //$query = mysql_query("select * from login where pass='$password' AND uid='$username'", $connection);
        //$rows = mysql_num_rows($query);
		echo 'hiii';
		
		if(isset($_POST['formSubmit'])) 
	{
		$aCountries = $_POST['formyear'];
		
		if(!isset($aCountries)) 
		{
			echo("<p>You didn't select any countries!</p>\n");
		} 
		else 
		{
			$nCountries = count($aCountries);
			
			echo("<p>You selected $nCountries countries: ");
			for($i=0; $i < $nCountries; $i++)
			{
				echo($aCountries[$i] . " ");
			}
			echo("</p>");
		}
	}



		
?>
