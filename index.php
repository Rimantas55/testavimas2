<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>PHP lydes ir <?php echo "ryt " . date("Y-m-d", strtotime('+1 days')) ; ?> </title>
</head>
<body>
<h1>Vardas - PHP su manim buvo ir <?php echo date("H", strtotime('-1 hours')) . " valanda!"; ?></h1>
<p><?php echo "Sekantys metai " . date('Y', strtotime('+1 years')) .  " uz kalnu!"; ?></p>



</body>

</html>



<?php
//
//print "Tekstas padarytas su php";
//
//print "<br>";
//
//print date('Y-m-d H:i:s');
//
//print "<br>";
//
//?>



