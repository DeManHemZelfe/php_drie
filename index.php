<?php
/**
 * Created by PhpStorm.
 * User: niels
 * Date: 23-11-2018
 * Time: 09:38
 */
?>
<!DOCTYPE html>
<html>
<head>

    <title>PHP OPDRACHTEN</title>
</head>
<body>
<?php
$leeftijd = 66;
$bedrag = 10;
if ($leeftijd > 65) {
    $bedrag = $bedrag * 0.5;
}
if ($leeftijd <= 12) {
    $bedrag = $bedrag * 0.5;
}
if ($leeftijd < 3) {
    $bedrag = $bedrag * 0;
}
echo $bedrag;

?>


</body>
</html>














<!--<style>-->
<!--    img {-->
<!--        width: 300px;-->
<!--        height: 270px;-->
<!--    }-->
<!--    body {-->
<!--        text-align: center;-->
<!--        background-color:black;-->
<!--    }-->
<!--    p#kleur {-->
<!--        background-color: wheat;-->
<!--    }-->
<!--    div {-->
<!--        color: yellow;-->
<!--        margin-top: 25px;-->
<!--        margin-bottom: -25px;-->
<!--        margin-right:1px ;-->
<!--    }-->
<!--</style>-->
<!--<title>PHP OPDRACHTEN</title>-->
<!--</head>-->
<!--<body>-->
<!--<div>*</div>-->
<?php
//
//for($i = 0; $i <=21; $i++) {
//    for($j = 0; $j<$i; $j++) {
//
//        if ($i % 1) {
//            echo "<span style='color: yellow'>*</span>";
//        }
//        else {
//            echo "<span style='color: silver'>*</span>";
//        }
//
//        if ($i % 1) {
//            echo "<span style='color: yellow'>*</span>";
//        }
//        else {
//            echo "<span style='color: green'>*</span>";
//        }
//
//
//    }
//    echo "<br>";
//
//}
//?>




<!---->
<!--<p id="kleur">--><?php //echo "KERSTBOOM"; ?><!--</p>-->


<!---->
<!--<style>-->
<!--    img {-->
<!--        width: 250px;-->
<!--        height: 200px;-->
<!---->
<!--    }-->
<!--    body {-->
<!--        text-align: center;-->
<!---->
<!--    }-->
<!--    .rood {-->
<!--        border: red solid 3px;-->
<!--        padding: 10px;-->
<!--    }-->
<!--    .groen {-->
<!--        border: greenyellow solid 3px;-->
<!--        padding: 10px;-->
<!--    }-->
<!--</style>-->
<!---->
<!---->
<?php
//
//for ($i = 1; $i <=9 ;$i ++) {
//    if ($i % 2 == 0) {
//        $class = "class='rood'";
//    }
//    else {
//        $class = "class='groen'";
//    }
//    echo "<img ".$class. "src='plaatjes/bvb".$i.".jpg'>";
//
//}
//
//
//
//
//
//$bomen = array("279b73b7-744c-42ab-8a2a-dda383ad37b5.jpg","Bomen.jpg", "bomen-zeeland-001-883x588.jpg","boom.jpg");
//foreach ($bomen as $boom) {
//    echo "<img src='plaatjes/bomen/".$boom."'>";
//
//}
//
//
//$i = 1;
//while($i<=9) {
//
//    echo "<img class='rood' src='plaatjes/bvb".$i.".jpg'>";
//    $i++;
//
//}
//
//
//
//?>














<!--//$apen = array("chimpansee", "oerang oetang", "gorilla", "neusaap");-->
<!--//echo $apen [2];-->
<!--//-->
<!--//$apen[4] = "mandril";-->
<!--//-->
<!--//$apen[6] = "baviaan";-->
<!--//-->
<!--//print_r($apen);-->
<!--//echo "<ul>";-->
<!--//foreach ($apen as $aap) {-->
<!--//    echo "<li>".$aap."</li>";-->
<!--//}-->
<!--//echo "</ul>";-->