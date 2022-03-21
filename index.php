<?php session_start(); /* Starts the session */

if(!isset($_SESSION['UserData']['Username'])){
	header("location:login.php");
	exit;
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="utf-8"/>
<link rel="stylesheet" href="stylesheet.css">
<title> Jeopardy </title>
</head>


<body>

<div>
<img src="logo.png" class="logo">
</div>





<main>

<table>
	<tr>
		<td>Q set 1</td>
		<td>Q set 2</td>
		<td>Q set 3</td>
		<td>Q set 4</td>
		<td>Q set 5</td>
		<td>Q set 6</td>
	</tr>
	<tr>
		<td>
				<a href="dummy.html"><img src="one.png" alt="$200" class="dollars"></a>
		</td>
		
		<td>
				<a href="dummy.html"><img src="one.png" alt="$200" class="dollars"></a>
		</td>
		<td>
				<a href="dummy.html"><img src="one.png" alt="$200" class="dollars"></a>
		</td>
		<td>
				<a href="dummy.html"><img src="one.png" alt="$200" class="dollars"></a>
		</td>
		<td>
				<a href="dummy.html"><img src="one.png" alt="$200" class="dollars"></a>
		</td>
		<td>
				<a href="dummy.html"><img src="one.png" alt="$200" class="dollars"></a>
		</td>
	</tr>
	<tr>
		<td>
				<a href="dummy.html"><img src="two.png" alt="$400" class="dollars"></a>
		</td>
		
		<td>
				<a href="dummy.html"><img src="two.png" alt="$400" class="dollars"></a>
		</td>
		<td>
				<a href="dummy.html"><img src="two.png" alt="$400" class="dollars"></a>
		</td>
		<td>
				<a href="dummy.html"><img src="two.png" alt="$400" class="dollars"></a>
		</td>
		<td>
				<a href="dummy.html"><img src="two.png" alt="$400" class="dollars"></a>
		</td>
		<td>
				<a href="dummy.html"><img src="two.png" alt="$400" class="dollars"></a>
		</td>
	</tr>
	<tr>
		<td>
				<a href="dummy.html"><img src="three.png" alt="$800" class="dollars"></a>
		</td>
		
		<td>
				<a href="dummy.html"><img src="three.png" alt="$800" class="dollars"></a>
		</td>
		<td>
				<a href="dummy.html"><img src="three.png" alt="$800" class="dollars"></a>
		</td>
		<td>
				<a href="dummy.html"><img src="three.png" alt="$800" class="dollars"></a>
		</td>
		<td>
				<a href="dummy.html"><img src="three.png" alt="$800" class="dollars"></a>
		</td>
		<td>
				<a href="dummy.html"><img src="three.png" alt="$800" class="dollars"></a>
		</td>
	</tr>
	<tr>
		<td>
				<a href="dummy.html"><img src="four.png" alt="$800" class="dollars"></a>
		</td>
		
		<td>
				<a href="dummy.html"><img src="four.png" alt="$800" class="dollars"></a>
		</td>
		<td>
				<a href="dummy.html"><img src="four.png" alt="$800" class="dollars"></a>
		</td>
		<td>
				<a href="dummy.html"><img src="four.png" alt="$800" class="dollars"></a>
		</td>
		<td>
				<a href="dummy.html"><img src="four.png" alt="$800" class="dollars"></a>
		</td>
		<td>
				<a href="dummy.html"><img src="four.png" alt="$800" class="dollars"></a>
		</td>
	</tr>
	<tr>
		<td>
				<a href="dummy.html"><img src="five.png" alt="$1600" class="dollars"></a>
		</td>
		
		<td>
				<a href="dummy.html"><img src="five.png" alt="$1600" class="dollars"></a>
		</td>
		<td>
				<a href="dummy.html"><img src="five.png" alt="$1600" class="dollars"></a>
		</td>
		<td>
				<a href="dummy.html"><img src="five.png" alt="$1600" class="dollars"></a>
		</td>
		<td>
				<a href="dummy.html"><img src="five.png" alt="$1600" class="dollars"></a>
		</td>
		<td>
				<a href="dummy.html"><img src="five.png" alt="$1600" class="dollars"></a>
		</td>
	</tr>
</table>

</main>

<div class="counter">
	<h3> $ </h3>
</div>

<div class="reset">
	<h3> RESET </h3>
</div>







<p class="banner"> This is an interactive Jeopardy game. Click on buttons on the grid to choose the question. Your money will increase or decrease depending on whether or not you answer correctly. Click the reset button to start over. </p>
</body>




</html>
