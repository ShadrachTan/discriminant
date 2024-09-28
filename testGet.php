<?php  
if(isset($_GET['getDiscriminant'])) {

	// String passed inside our GET variable comes from the name attribute of our input element 
	$a= $_GET['a'];
	$b = $_GET['b'];
    $c = $_GET['c'];

	// Create a variable to store the sum.
	$discriminant = $b**2 - 4*$a*$c;

	// Print the result
	echo "<h2>The answer is " . $discriminant . "</h2>";
}
?>