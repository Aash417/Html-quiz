<?php
session_start();
$_SESSION['result']=0;

$ans1=$_POST['q1'];
$ans2=$_POST['q2'];
$ans3=$_POST['q3'];
$ans4=$_POST['q4'];
$ans5=$_POST['q5'];
$ans6=$_POST['q6'];
$ans7=$_POST['q7'];
$ans8=$_POST['q8'];
$ans9=$_POST['q9'];
$ans10=$_POST['q10'];
$ans11=$_POST['q11'];
$ans12=$_POST['q12'];
$ans13=$_POST['q13'];
$ans14=$_POST['q14'];
$ans15=$_POST['q15'];
$ans16=$_POST['q16'];
$ans17=$_POST['q17'];
$ans18=$_POST['q18'];
$ans19=$_POST['q19'];
$ans20=$_POST['q20'];

$_SESSION['result']=$ans1+$ans2+$ans3+$ans4+$ans5+$ans6+$ans7+$ans8+$ans9+$ans10+$ans11+$ans12+$ans13+$ans14+$ans15+$ans16+$ans17+$ans18+$ans19+$ans20;

header("location:result.php");  
?>