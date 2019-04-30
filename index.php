<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">

    <style>
        body {
            background-color: rgb(<?php print rand(0,255) . "," . rand(0,255) . "," . rand(0,255); ?>);
        }
        h1 {
            font-size: <?php print rand(1,30) . "pt";?>;
        }
        p {
            color: rgb(<?php print rand(0,255) . "," . rand(0,255) . "," . rand(0,255); ?>);
        }
    </style>
    <title>PHP lydes ir <?php echo "ryt " . date("Y-m-d", strtotime('+1 days')); ?> </title>
</head>
<body>
<h1>Vardas - PHP su manim buvo ir <?php echo date("H", strtotime('-1 hours')) . " valanda!"; ?></h1>
<p><?php echo "Sekantys metai " . date('Y', strtotime('+1 years')) . " uz kalnu!"; ?></p>

<p>Random funkcija</p>
<p>PHP lydes ir <?php print date("Y-m-d", strtotime("+" . rand(0, 10) . "years")) . "<br>"; ?></p>
<p>Vardas - Galbut turesiu <?php print rand(1, 5) . " vaiku" . "<br>"; ?></p>
<p>D. Trump'as nebebus prezidentu <?php print date("Y-m-d", strtotime('+' . rand(2, 12) . "years")) . "<br>"; ?></p>
<p>antras budas</p>
<p>D. Trump'as nebebus prezidentu <?php print rand(2021, 2031) . "-" . date("m-d") . "<br>"; ?></p>

<p>keiciam spalvas su php</p>


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



