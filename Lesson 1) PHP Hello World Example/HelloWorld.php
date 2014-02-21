<?php
//All PHP code must be placed in the PHP tags.  Otherwise it will be views as HTML code.  
//Some servers will accept <? to start a php tag, all will accept <?php.

//In php variables are stated with a $ in front of them.  They must start with a letter.
$message = "Hello World";
//Now when we reference $message we will have the string "Hello World" attached to it.
//In php the variable type is automatically assigned based on the value. 
//We will use $message in the HTML below.
//Every line in PHP code must be completed with a semicolon. 
?>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"

        "http://www.w3.org/TR/html4/loose.dtd">
<html lang="en">
	<head>
		<meta http-equiv="content-type" content="text/html; charset=utf-8">
		<title>
			<?php
				//To print the value of the message to the page you can use an echo or print command.
				echo $message;
				//This will echo out "Hello World" into the title of the HTML page.
			?>
		</title>
	</head>
	<body>
		<p>
			<?php
			//Here we will use the print command to do the same thing.
			print $message;
			?>
		</p>
	</body>
</html>


