<html>
	<body onload="loader()">
	<div>
	<canvas id="myCanvas">
					Your browser does not support canvas.				
	</canvas>
	<link rel="stylesheet" href="./styles/styles.css">
	<script async src='./JavaScript/clock.js'></script>
	<script async src='./JavaScript/background.js'></script>
	<div id = "clock" class="clock"></div><h1 id = "total_points2" style="color:white; margin-left: 250px; font-size: 50px; font-weight: normal; font-family: Arial, Helvetica, sans-serif;"><div class = "points-total" id="total_points" style="color:#ffffff; margin-left: 25px; margin-top: 75px;"></div></h1><div id = "points-scored" class="points_scored_blank"></div>
		<div id = "fireworks" class="nothing">
			<div class="before"></div>
			<div class="after"></div>
		  </div>
	<p style="text-align: center; align-content: center;"><div style ="background-color: rgb(252, 5, 42); opacity: 0;" id = "correct_one" class="fraction_hidden" top =11 bottom="8"></div><div style="background-color: rgb(253, 153, 168)" id = "correct_two" class="fraction" top="5" bottom="8"></div></p>
	<p><div id = "choice_one" class="fraction1" onclick="checker('choice_one');"></div><div id = "choice_two" class="fraction1" onclick="checker('choice_two')"></div><div id = "choice_three" class="fraction1" onclick="checker('choice_three');"></div><div id = "choice_four" class="fraction1" onclick="checker('choice_four');"></div><div id = "choice_five" class="fraction1" onclick="checker('choice_five');"></div></p>
	<form id="form1" method="post" action="http://ekmathematics.com/Results/ResultsPosted.php"></form>	
</body>
</html>