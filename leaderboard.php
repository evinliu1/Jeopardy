<?php session_start();?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8"/>
        <title>Jeopardy</title>
    </head>
	<body>
	
	<div class="counter">
	<h3> Your final score is : </h3>
	<h3>
		<?php echo "$".$_COOKIE["score"]; ?>
	</h3>
	</div>
	
	<h3> Score Tracking: </h3>
	<?php
		$file = fopen("leaders.txt", "a");
		$txt = "anonymous".";".$_COOKIE["score"]."\n";
		fwrite($file,$txt);	
		?>
		
		<pre> <?php echo file_get_contents('leaders.txt'); ?> </pre>
	
	</body>
</html>