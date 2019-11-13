<?php
session_start();
date_default_timezone_set('UTC');
$ldate = time();
//print_r($ldate);

    function db_query($db,$query) {
        // Connect to the database

        // Query the database
        $result = mysqli_query($db,$query);

        return $result;
    }


    function db_connect() {

        // Define connection as a static variable, to avoid connecting more than once
        static $connection;

        // Try and connect to the database, if a connection has not been established yet
        if(!isset($connection)) {
             // Load configuration as an array. Use the actual location of your configuration file
            $connection = mysqli_connect('72.167.233.13','redlasalleus','LuEdH5!8Hq','redlasalleus');    
	}

        // If connection was not successful, handle the error
        if($connection === false) {
            // Handle error - notify administrator, log to a file, show an error screen, etc.
            echo "fail";
		return mysqli_connect_error();
        }
        return $connection;
    }
	if (isset($_POST['submit'])) {
        	//check button pressed
		$use = $_POST['username'];
        	$pass = $_POST["password"];


		$db = db_connect();
		$db->set_charset("utf8");
		mysqli_real_escape_string ($db , $use);
		mysqli_real_escape_string ($db , $pass);

		$query = "SELECT id FROM tor_logins WHERE user = '$use' AND pass = PASSWORD('$pass')";
		$id = db_query ($db,$query);

		//printf ("id %d", mysqli_num_rows($id));

		if (mysqli_num_rows($id)==1){
			$fila = $id -> fetch_row();
			$_SESSION['id']  = $fila[0];
			$_SESSION['ldate'] = 7200+$ldate;
			$_SESSION['user'] = 'admin';
			$_SESSION['type'] = 1;
			mysqli_close($db);
				header("Location: torneos.php");
			echo '<br />Si no eres redirigido, puedes: <a href="torneos.php">continuar al inicio</a>';
			die();

		}
		else {
			echo "Error: Bad Credentials";
			$_SESSION['id'] = NULL;
			$_SESSION['ldate'] = 0;
		}
}


?>
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


