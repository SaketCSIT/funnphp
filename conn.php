<?php

$con = mysqli_connect('localhost','root','saket876667');

mysqli_select_db($con,'crud');

if($con){
    echo "Connected";
}
else{
    echo "Error";
}

?>