<?php
$username = $_POST['username'];
$q1 = $_POST['q1'];
$q2 = $_POST['q2'];
$q3 = $_POST['q3'];
$q4 = $_POST['q4'];
$q5 = $_POST['q5'];
$q6 = $_POST['q6'];
$q7 = $_POST['q7'];
$q8 = $_POST['q8'];
$q9 = $_POST['q9'];
$q10 = $_POST['q10'];



//Conexiune

$conn = new mysqli('localhost','root','','answersdb');
if($conn -> connect_error)
{
    die('Conenction Failed : ' .$conn->connect_error);
}
else
{
    $stmt = $conn->prepare("insert into answers (username,q1,q2,q3,q4,q5,q6,q7,q8,q9,q10)
    values(?,?,?,?,?,?,?,?,?,?,?)");
    $stmt -> bind_param("sssssssssss",$username,$q1,$q2,$q3,$q4,$q5,$q6,$q7,$q8,$q9,$q10);
    $stmt ->execute();
    echo "Todo es bien!";
    $stmt -> close();
    $conn -> close();
}

?>