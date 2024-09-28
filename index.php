<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>

	 <!-- The form submits to the same page using GET method -->
	<form action="testGet.php" method="GET">

		<!-- Input field for the username. Take note of the value stored in the name attribute -->
		<p>A<input type="text" placeholder="Value of a here" name="a"></p>
		<p>B<input type="text" placeholder="Value of b here" name="b"></p>
        <p>C<input type="text" placeholder="Value of c here" name="c"></p>

		<!-- Submit button -->
		<p><input type="submit" value="Submit" name="getDiscriminant"></p>
	</form>
</body>
</html>