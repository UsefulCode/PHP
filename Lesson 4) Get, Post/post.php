<?php
//In this tutorial I will be going over Post statements

//By using the POST command, you are able to pass variables without using the URL.

//The best way to pass the variables is through a form. 

//This is ideal if you use passwords, which should not be passed via the URL.
?>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"

        "http://www.w3.org/TR/html4/loose.dtd">
<html lang="en">
	<head>
		<meta http-equiv="content-type" content="text/html; charset=utf-8">
		<title>POST</title>
	</head>
	<body>
		<table>
			<tr>
				<td>Form Using POST:</td>
				<td>
					<!-- 
						Forms do not require any PHP code to use POST.  
						All that needs to be done is to set the form method to POST.
						
						The form's action is where the form re-directs to.
						# will bring the user back to the same page.
					-->
					<form method='post' action='#'>
						Your First Name: <input type='text' name='firstName' id='firstName' /><br>
						Your Last Name:  <input type='text' name='lastName' id='lastName' /><br>
						<input type='submit' name='names' value='go'>
					</form>
				</td>
			</tr>
			<?php
				//We only want to show output if the user clicks send on the form.
				//To do this we can use an isset function.  It will return true if the value passed in 
				//holds something other than null, and false if it holds null.
				if(isset($_POST['names'])){
			?>
			<tr>
			
				<td>POST output:</td>
				<td>
					<?php
						//Now if we would like to retrieve the data from the above form, we will use a POST statement.
						//Since we will allow users to input code, we would like to protect from scripting attacks.
						//By using htmlspecialchars (a PHP command) we can make sure no one tries anything funny.
						
						//Unlike the GET statement, you cannot see the information that a user sends over in the URL.
						
						//To grab what the user in putted we do:
						$firstName = htmlspecialchars($_POST['firstName']);
						$last = htmlspecialchars($_POST['lastName']);
						//The variable names do not matter, what matters is the text in the ''.
						//This text must match the keys in the URL.
						
						//Notice how htmlspecialchars is wrapped around the POST.  This will prevent people from using
						//any HTML tags.
						
						//Now lets echo it back out.
						echo "First Name: ".$firstName."<br>Last Name: ".$last;
					?>
				</td>
			</tr>
			<?php
				}
			?>
		</table>
	</body>
</html>