<?php
//In this tutorial I will be going over while loops and how they work.
//A while loop works a lot like an if statement, however, an if statement
//will only run once. A while loop will run until the equation in the ()
//returns false.  

//Because of this using While loops can be dangerous. If the value will never be
//false, you will have an infinite loop that will eat up resources, and never stop.

//While loops also use the same && and || logic that if statements use.

//The while loops will occur below so you can see what they print.

?>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"

        "http://www.w3.org/TR/html4/loose.dtd">
<html lang="en">
	<head>
		<meta http-equiv="content-type" content="text/html; charset=utf-8">
		<title>While Loops</title>
	</head>
	<body>
		<table>
			<tr>
				<td>First While Loop</td>
				<td>
					<?php
						//First Lets set a boolean to true;
						$keepGoing = true;
						
						//Now lets make a while loop.
						while($keepGoing){
							//This loop will keep going until keepGoing is set to false.
							//Lets echo something out and set keepGoing to false so we exit the loop.
							echo "Looped";
							$keepGoing = false;
						}
						//That ends the loop.
					?>
				</td>
			</tr>
			
			<tr>
				<td>Second While Loop</td>
				<td>
					<?php
						//Now that we understand how while loops work, lets make something more practical. 
						//Say we would like a select box that contains all the years between 1800 and 1850 for
						//a fun quiz.  Lets echo out all the years into a select.
					?>
					When did the war of 1812 start? <select id='year' name='year'>
					<?php
						//First set the beginning year
						$year = 1800;
						
						while($year <= 1850){
							echo "<option id='".$year."'>".$year."</option>";
							$year++;
						}
						//The loop above will continue until the year reaches 1850, then stop.
					?>
					</select>
				</td>
			</tr>
		</table>
	</body>
</html>