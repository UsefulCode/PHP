<?php
//In this tutorial I will be going over for loops and how they work.
//A for loop works a lot like a while, however, it takes some more parameters.

//For loops are a little less dangerous than while loops, because it is harder to 
//make an infinite loop.

//For loops also use the same && and || logic that if, and while statements use.

//The for loops will occur below so you can see what they print.

?>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"

        "http://www.w3.org/TR/html4/loose.dtd">
<html lang="en">
	<head>
		<meta http-equiv="content-type" content="text/html; charset=utf-8">
		<title>For Loops</title>
	</head>
	<body>
		<table>
			<tr>
				<td>First For Loop</td>
				<td>
					<?php
						//Now lets make a for  loop.
						for($keepGoing = true; $keepGoing; $keepGoing = false){
							//This loop will keep going until keepGoing is set to false.
							//The statement above will only run the loop once.
							
							//Lets echo something out and set keepGoing to false so we exit the loop.
							echo "Looped";
						}
						//That ends the loop.
					?>
				</td>
			</tr>
			
			<tr>
				<td>Second For Loop</td>
				<td>
					<?php
						//Now that we understand how for loops work, lets make something more practical. 
						//Say we would like a select box that contains all the years between 1800 and 1850 for
						//a fun quiz.  Lets echo out all the years into a select.
						//This time we will use a for loop.
					?>
					When did the war of 1812 start? <select id='year' name='year'>
					<?php
						for($year = 1800; $year <= 1850; $year++){
							echo "<option id='".$year."'>".$year."</option>";
						}
						//The loop above will continue until the year reaches 1850, then stop.
					?>
					</select>
				</td>
			</tr>
		</table>
	</body>
</html>