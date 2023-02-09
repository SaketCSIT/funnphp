<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Form</title>
    <script>
        function validation()
        {
            let a=document.getElementById("n1").value;
            let b=document.getElementById("n2").value;
            let c =document.getElementById("a1").value;

            if(a=="")
            {
                alert("Enter The Name");
                return False;
            }
            if(b=="")
            {
                alert("Enter The Last Name");
                return false;
            }
            if(c=="")
            {
                alert("Enter The Age");
                return false;
            }
            return true;
        }
    </script>
    <style>
        body {

            height: 500%;
            width: 100%;
        }

        h1 {
            text-align: center;
        }

        .container {
            text-align: center;
            background: linear-gradient(blue,snow);
            border-radius: 25px;
            margin-left: 185px;
            margin-right: 250px;
            height: fit-content;
            padding: 45px;
            margin-top: 165px;
            font-size: 25px;
        }

        input[type="text"],
        input[type="number"] {
            margin-bottom: 26px;
            text-align: center;
            border-radius: 24px;
            font-size: 20px;
        }

        #hov
        {
            padding: 5px;
            border-radius: 5px;
            font-size: 20px;
            overflow: auto;
           
            background: linear-gradient(blue,white);
        }
        #hov:hover
        {
            transition: 0.5s;
            overflow: hidden;
            transform:rotate(-5deg);
        }

        #n2 {
            margin-right: 45px;
        }

        #a1 {
            margin-left: 25px;
        }
        #as
        {
            margin-right:22px;
        }
        #id
        {
            margin-left: 35px;
        }
        #sall
        {
            margin-right:8px ;
        }
        #des
        {
            margin-right: 50px;
        }

        img
        {
           border-color: pink;
        }
    </style>
</head>

<body>
    <form method="POST" onsubmit="return validation()">
    <div class="container">
        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTxZAwSetp9sNYaGsbedUxJWcG8R6MZjqP_kN1TDhh08w&s" alt="" srcset="">
        <h1>Registration Form</h1>
        Enter The Name
        <input type="text" name="n4" id="n1"><br>
        Enter The Last Name
        <input type="text" name="n2" id="n2"><br>
        Enter The ID
        <input type="number" name="a1" id="id"><br>
        Enter The Salary
        <input type="number" name="s1" id="sall"><br>
        Enter The Designation
        <input type="text" name="d1" id="des"><br>
        <input type="submit" value="Submit" name="submit" id="hov">
        </form>
    </div>
    <?php
    $a=$_POST['n4'];
    $b=$_POST['n2'];
    $c=$_POST['a1'];
    $d=$_POST['s1'];
    $x='Name:';
    $y='Last Name:';
    $z='Age';
    $y='Id';
    $z='Salary';
    $z1='Designati';
    print($x.$a);
    print("<br>");
    print($y.$b);
    print("<br>");
    print($z.$c);
    




    ?>

</body>

</html>