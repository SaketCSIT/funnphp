<?php

$host='localhost';
$user='root';
$password='saket876667';
$database="saket";
$conn=new mysqli($host,$user,$password,$database);
$sql ="INSERT INTO t1(Employee_ID,First_Name,Last_Name,Salary,Designation) VALUES(112,'Rohan','Kumar',12000,'CEO')";
$conn->query($sql);


// $a=$_POST['n4'];
// print($a);
// $b=$_POST['n2'];
// print($b);
// $c=$_POST['a1'];
// print($c);



?>