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
<link rel="stylesheet" href="style.css">
<title> Jeopardy </title>
</head>


<body>

<div>
<img src="logo.png" class="logo">
</div>





<main>

<table>
	<tr>
		<td>GSU Campus Buildings</td>
		<td>Old-time Sayings</td>
		<td>Math</td>
		<td>Pop Culture</td>
		<td>Computer Science</td>
		<td>Biology</td>
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
	<a href="reset-page.php"><h3> RESET </h3></a>
</div>

<div class="giveup">
	<a href="logout.php"><h3> Give Up </h3></a>
</div>

<p class="banner"> This is an interactive Jeopardy game. Click on buttons on the grid to choose the question. Your money will increase or decrease depending on whether or not you answer correctly. Click the "reset" button to start over or the "give up" button to give up without posting your score to the leaderboards.</p>
</body>




</html>
