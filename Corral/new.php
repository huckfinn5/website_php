<?php
$bool = false;
$num = 3 + 4;
$str = "A string here";
?>

<script type="text/javascript">
// boolean outputs "" if false, "1" if true
var baller = "<?php echo $bool ?>"; 
localStorage.setItem("baller", baller);

// numeric value, both with and without quotes
var num = <?php echo $num ?>; // 7
var str_num = "<?php echo $num ?>"; // "7" (a string)

var str = "<?php echo $str ?>"; // "A string here"
</script>