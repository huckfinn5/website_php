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

var master_id=<?php echo $workoutID; ?>;

</script>


<html>
    <body onload="opacity_setter()">
            <div class="stars">
                    <div id = "asteroids" class="twinkling">
                            <div style = "margin-top: 250px; z-index: -15" class="ufoWrap">
                                    <div class='center'>
                                      <div class="ufoInner">
                                        <div id='ufo'>
                                          <ul class='blinkers'>
                                            <li></li>
                                            <li></li>
                                            <li></li>
                                            <li></li>
                                          </ul>
                                          <div class="dome"></div>
                                          <div class="antigrav">
                                            <div class="rings">
                                              <div class="inner"></div>
                                              <ul>
                                                <li></li><li></li><li></li><li></li><li></li><li></li><li></li><li></li><li></li><li></li><li></li><li></li><li></li><li></li><li></li><li></li><li></li><li></li><li></li><li></li><li></li><li></li><li></li><li></li><li></li><li></li><li></li><li></li><li></li><li></li><li></li><li></li><li></li><li></li><li></li><li></li><li></li><li></li><li></li><li></li><li></li><li></li><li></li><li></li><li></li><li></li><li></li><li></li><li></li><li></li><li></li><li></li><li></li><li></li><li></li><li></li><li></li><li></li><li></li><li></li><li></li><li></li><li></li><li></li><li></li><li></li>
                                              </ul>
                                            </div><!-- end div.rings -->
                                          </div><!-- end div.antigrav -->
                                          <div class="thrust">
                                            <ul>
                                              <li></li>
                                              <li></li>
                                              <li></li>
                                              <li></li>
                                              <li></li>
                                              <li></li>
                                              <li></li>
                                              <li></li>
                                            </ul>
                                          </div><!-- end div.thrust -->
                                        </div><!-- end div#ufo -->
                                      </div><!-- end div#ufoInner -->
                                    </div><!-- end div.center -->
                                    </div><!-- end div.ufoInner -->                                    
	<link rel="stylesheet" href="./styles/styles.css">
    <script async src='./Javascript/workings.js'></script>
    <script async src='./Javascript/asteroids.js'></script>
	<h1 id = "total_points2" style="color:white; font-size: 50px; font-weight: normal; margin-top: -10px; font-family: Arial, Helvetica, sans-serif;"><div class = "points_total" style="color:#ffffff; font-size: 60px; text-align: left; padding-left: 75px; margin-top: 75px;">Fraction Viz</div><div style = "margin-top: -65px; margin-left: 559px; font-weight: normal; font-size: 30px; background-color: blueviolet" class="directions" onclick="instructions()">Instructions</div></h1>
    <p style="text-align: center; align-content: center; font-size: 25px;"><div id = "5007" style = "background-color: blue" class="difficulty" onclick="shape1()">Exercise:<br>&#9733</div><div id = "5008" style="background-color: green" id = "easy" class="difficulty" onclick="shape2()">Exercise:<br>&#9733&#9733</div><div id = "5009" style = "background-color: greenyellow" id = "easy_medium" class="difficulty" onclick="shape3()">Exercise:<br>&#9733&#9733&#9733</div></p>
    <div style="z-index: -10;" class="clouds">    
    </div>
    </div>
    </div>
    </body>
</html>