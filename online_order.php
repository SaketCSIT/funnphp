<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- <script>
        function Add()
        {
            x=document.getElementsByName('p1').value;
            x2=document.getElementsByName('p2').value;
            x3=document.getElementsByName('p3').value;
            x4=document.getElementsByName('p4').value;
            x5=document.getElementsByName('p5').value;

            x1=200;
            x2=300;
            x4=500;
            x5=100;

            if(x1+x2+x3+x4+x5+x5<1000)
            {
                alert("Congo")
            }
        }
    </script> -->
</head>
<body>
    <form action="get">
    <h1>Welcome to Online Food</h1>
    Plese Select The Food item
    <ul>
        <li><button name="p1">Paneer</button></li>
        <li><button name="p2">Matar Paneer</button></li>
        <li><button name="p3">Mix Veg </button></li>
        <li><button name="p4"> Paneer</button></li>
        <li><button name="p5">Dum Aloo</button></li>
    </ul>
    <input type="submit" value="Submit">
    </form>
<?php
$x1=$_GET['p1'];
$x2=$_GET['p2'];
$x3=$_GET['p3'];
$x4=$_GET['p4'];
$x5=$_GET['p5'];
echo "ht";


?>
</body>
</html>