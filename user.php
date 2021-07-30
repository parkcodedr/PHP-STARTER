<?php

include("script.php");
// if (isset($_GET['ref'])) {
//     $referer = $_GET["ref"];
//     echo ($referer);
// } else {
//     echo "no referer";
// }

$sentence = "The man is coming very soon";
$username = "maryGH  ";
$usernameTrim = trim($username);

echo (strlen($username) . "<br>");
echo (strlen($usernameTrim) . "<br>");
echo ($sentence . "<br>");
echo (strrev($sentence) . "<br>");

echo (substr($sentence, 0, 12));


$age =  18;
if ($age >= 18) {
    echo "<br> Eligible to vote";
} else {
    echo "<br> Not eligible to vote";
}

$num1 = 40;
$num2 = 50;
$num3 = 20;

if ($num1 > $num3) {
    echo $num1;
} else if ($num3 > $num2) {
    echo $num3;
} else {
    echo $num2;
}

$date = date('D');

$full_date = date('m');

echo $full_date;
