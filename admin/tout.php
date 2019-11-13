<!DOCTYPE html>
<html>
        <head>
                <link rel="shortcut icon" href="icon.png" />
                <title>Session Expired</title>
        </head>
	<body>
		<?php

			session_start();
			session_destroy();
			echo "Session Expired\n\r";

		?>
		<br>
		<a href=lgin.php>Login</a>
	</body>
</html>
