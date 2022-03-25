<?php session_start(); /* Starts the session */

if(!isset($_SESSION['Username'])){
	header("location:index.php");
	exit;
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="utf-8"/>
<link rel="stylesheet" href="style.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
<title>Jeopardy</title>
</head>


<body>

<div>
<img src="logo.png" class="logo">
</div>

<main>

<table class>
	<tr>
		<td>GSU Campus Buildings</td>
		<td>Old-time Sayings</td>
		<td>Math</td>
		<td>Pop Culture</td>
		<td>Computer Science</td>
		<td>Biology</td>
	</tr>
	<tr>
		<!-- $200 Questions -->
		<td>
				<a href="questions.php?id=buildings-200"><img src="one.png" alt="$200" class="dollars"></a>
		</td>
		
		<td>
				<a href="questions.php?id=sayings-200"><img src="one.png" alt="$200" class="dollars"></a>
		</td>
		<td>
				<a href="questions.php?id=math-200"><img src="one.png" alt="$200" class="dollars"></a>
		</td>
		<td>
				<a href="questions.php?id=pop-200"><img src="one.png" alt="$200" class="dollars"></a>
		</td>
		<td>
				<a href="questions.php?id=cs-200"><img src="one.png" alt="$200" class="dollars"></a>
		</td>
		<td>
				<a href="questions.php?id=bio-200"><img src="one.png" alt="$200" class="dollars"></a>
		</td>
	</tr>
	<tr>
		<!-- $400 Questions -->
		<td>
				<a href="questions.php?id=buildings-400"><img src="two.png" alt="$400" class="dollars"></a>
		</td>
		
		<td>
				<a href="questions.php?id=sayings-400"><img src="two.png" alt="$400" class="dollars"></a>
		</td>
		<td>
				<a href="questions.php?id=math-400"><img src="two.png" alt="$400" class="dollars"></a>
		</td>
		<td>
				<a href="questions.php?id=pop-400"><img src="two.png" alt="$400" class="dollars"></a>
		</td>
		<td>
				<a href="questions.php?id=cs-400"><img src="two.png" alt="$400" class="dollars"></a>
		</td>
		<td>
				<a href="questions.php?id=bio-400"><img src="two.png" alt="$400" class="dollars"></a>
		</td>
	</tr>
	<tr>
		<!-- $600 Questions -->
		<td>
				<a href="questions.php?id=buildings-600"><img src="three.png" alt="$600" class="dollars"></a>
		</td>
		
		<td>
				<a href="questions.php?id=sayings-600"><img src="three.png" alt="$600" class="dollars"></a>
		</td>
		<td>
				<a href="questions.php?id=math-600"><img src="three.png" alt="$600" class="dollars"></a>
		</td>
		<td>
				<a href="questions.php?id=pop-600"><img src="three.png" alt="$600" class="dollars"></a>
		</td>
		<td>
				<a href="questions.php?id=cs-600"><img src="three.png" alt="$600" class="dollars"></a>
		</td>
		<td>
				<a href="questions.php?id=bio-600"><img src="three.png" alt="$600" class="dollars"></a>
		</td>
	</tr>
	<tr>
		<!-- $800 Questions -->
		<td>
				<a href="questions.php?id=buildings-800"><img src="four.png" alt="$800" class="dollars"></a>
		</td>
		
		<td>
				<a href="questions.php?id=sayings-800"><img src="four.png" alt="$800" class="dollars"></a>
		</td>
		<td>
				<a href="questions.php?id=math-800"><img src="four.png" alt="$800" class="dollars"></a>
		</td>
		<td>
				<a href="questions.php?id=pop-800"><img src="four.png" alt="$800" class="dollars"></a>
		</td>
		<td>
				<a href="questions.php?id=cs-800"><img src="four.png" alt="$800" class="dollars"></a>
		</td>
		<td>
				<a href="questions.php?id=bio-800"><img src="four.png" alt="$800" class="dollars"></a>
		</td>
	</tr>
	<tr>
		<!-- $1000 Questions -->
		<td>
				<a href="questions.php?id=buildings-1000"><img src="five.png" alt="$1600" class="dollars"></a>
		</td>
		
		<td>
				<a href="questions.php?id=sayings-1000"><img src="five.png" alt="$1000" class="dollars"></a>
		</td>
		<td>
				<a href="questions.php?id=math-1000"><img src="five.png" alt="$1000" class="dollars"></a>
		</td>
		<td>
				<a href="questions.php?id=pop-1000"><img src="five.png" alt="$1000" class="dollars"></a>
		</td>
		<td>
				<a href="questions.php?id=cs-1000"><img src="five.png" alt="$1000" class="dollars"></a>
		</td>
		<td>
				<a href="questions.php?id=bio-1000"><img src="five.png" alt="$1000" class="dollars"></a>
		</td>
	</tr>
</table>

</main>

<!-- Score Counter -->
<div class="counter">
	<h3>
		<?php
		error_reporting(0);
		echo "$".$_COOKIE["score"];
		?>
	</h3>
</div>

<!-- Reset Score -->
<div class="reset">
	<a href="reset-page.php"><h3> RESET </h3></a>
</div>

<!-- Log Out -->
<div class="giveup">
	<a href="logout.php"><h3> Give Up </h3></a>
</div>

<!-- Description -->
<p class="banner"> This is an interactive Jeopardy game. Click on buttons on the grid to choose the question. Your money will increase or decrease depending on whether or not you answer correctly. Click the "reset" button to start over or the "give up" button to give up without posting your score to the leaderboards.</p>
</body>




</html>