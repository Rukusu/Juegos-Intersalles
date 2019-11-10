
<!DOCTYPE html>
<html>
   
   <head>

     	<!--<link rel="shortcut icon" href="http://vignette3.wikia.nocookie.net/mlp/images/6/64/Favicon.ico/revision/latest?cb=20101215000701" />-->
 	<link rel="shortcut icon" href="icon.png" />
	<meta charset="UTF-8"> 	
	<title>Login Page</title>      
   </head>

 <form action = "" method = "post">
 	<label>
		Username  :
	</label>
<input type = "text" name = "username" class = "box"/>
<br /><br />
         <label>Password  :
	</label>
<input type = "password" name = "password" class = "box" />
<br/><br />
        <input type = "submit" name = "submit" value = " Submit "/><br />
         </form>
</html>
<?php
date_default_timezone_set('UTC');
$ldate = time();
//print_r($ldate);

    function db_query($db,$query) {
        // Connect to the database

        // Query the database
        $result = mysqli_query($db,$query);

        return $result;
    }

	include('../core.php');


	if (isset($_POST['submit'])) {
        	//check button pressed
		$use = $_POST['username'];
        $pass = $_POST["password"];
		$db = connect_bajio(); 
		mysqli_real_escape_string ($db , $use);
		mysqli_real_escape_string ($db , $pass);

		$query = "SELECT id FROM logins WHERE user = '$use' AND passwd = PASSWORD('$pass')";
		$id = db_query ($db,$query);

		//printf ("id %d", mysqli_num_rows($id));

		if (mysqli_num_rows($id)==1){
			$fila = $id -> fetch_row();
			$_SESSION['id']  = $fila[0];
			$_SESSION['ldate'] = 7200+$ldate;
			mysqli_close($db);
			echo '<br /><a href="index.php">Index</a>';
			header("Location: index.php");
			die();

		}
		else {
			echo "Error: Bad Credentials";
			$_SESSION['id'] = NULL;
			$_SESSION['ldate'] = 0;
		}
}


?>

