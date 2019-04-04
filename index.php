<?php session_start();

$workoutID=$_SESSION[workoutID];

//connect to the server and select the database
$db_name ="2440535_numberdna";
$connection = @mysql_connect("pdb6.awardspace.net:3306","2440535_numberdna","1Algebra_Practice") or die(mysql_error());
$db = @mysql_select_db($db_name,$connection)or die(mysql_error(Trouble1));

//build and issue the query
$sql ="SELECT * FROM AA_PracticePages WHERE id = $workoutID ";
$result = @mysql_query($sql,$connection) or die(mysql_error());
$row = mysql_fetch_array($result);
$workoutTitle=$row['title'];
$url=$row['url'];
?>

<script type="text/javascript">
var master_id=<?php echo $workoutID; ?>;;
</script>


<html>
	<body onload="opacity_setter()">
			<div>
	<link rel="stylesheet" href="./styles/styles.css">
	<script async src='./trial1.php'></script>
	<script async src='./JavaScript/background.js'></script>
	<div class="wrapper_index">
	<h1 id = "total_points2" style="color:black; align-content: center; font-size: 50px; font-weight: normal; font-family: Arial, Helvetica, sans-serif;"><div id = "fractions1" class = "points_total" style="color:white; font-size: 65px; text-align: left; padding-left: 70px; background: -webkit-linear-gradient(rgb(5, 5, 5), #164581); -webkit-background-clip: text; -webkit-text-fill-color: transparent; margin-top: 75px;">Equivalent Fractions</div> <div style="color:transparent" class="container"><span style="color:transparent" id = "fractions2" class="text1"></span></div><div style = "margin-top: -80px; margin-left: 785px; font-weight: normal; text-align: center; font-size: 30px;" class="directions" onclick="instructions()">Progress</div></h1>
	<div style="margin-left:140px;" id="viz1" class="text2">Vizualization 1</div><div style="margin-left:165px;" id="viz2" class="text2">Vizualization 2</div><div style="margin-left:155px;" id="fireworks" class="text2">Fireworks Game</div>
	<p style="text-align: center; align-content: center; font-size: 25px;"><img id = "5000" onclick="viz_one()" onmouseover="on_one()" onmouseout="off_one()"  class="image" src = "Gifs/Asteroid_chosen.gif" alt="asteroids"><img id = "5007" onclick="viz_two()" onmouseover="on_two()" onmouseout="off_two()" class="image" src = "Gifs/Space_Ship_chosen.gif" alt="asteroids"><img id = "5010" onclick="fireworks()" onmouseover="on_three()" onmouseout="off_three()" class="image" src = "Gifs/FireWork_Chosen.gif" alt="asteroids"></p>
	<br>
	<div style="margin-left:150px;" id="corral" class="text2">Corral Game</div><div style="margin-left:150px;" id="fill1" class="text2">Fill-In-The-Blanks 1</div><div style="margin-left:110px;" id="fill2" class="text2">Fill-In-The-Blanks 2</div>
	<p style="text-align: center; align-content: center; font-size: 25px;"><img id = "5016" onclick="corral()" onmouseover="on_four()" onmouseout="off_four()" class="image" src = "Gifs/Corral_Chosen.gif" alt="asteroids"><img id = "5022" onclick="fill_one()" onmouseover="on_five()" onmouseout="off_five()" class="image" src = "Gifs/Birds_chosen.gif" alt="asteroids"><img id = "5028" onclick="fill_two()" onmouseover="on_six()" onmouseout="off_six()" class="image" src = "Gifs/Boat_chosen.gif" alt="asteroids"></p>
	</div>
	<br>
	<br>
	</body>
</html>