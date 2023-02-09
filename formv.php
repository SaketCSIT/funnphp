<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<style>
        #larger {
            margin-top: 50px;
        }

        .para {
            margin: 4em;
            padding: auto;
            text-align: center;
            font-size: 40px;
            position: relative;
            font-variant: small-caps;
        }

        .center {
            margin-right: 40px;
            margin-bottom: 18px;
        }

        input[type="text"] {
            font-size: 20px;
            border-radius: 2.5px;
            background: transparent;
            margin-right: -40px;
        }

        input[type="checkbox"] {
            font-size: 30px;
        }

        input[type="submit"] {
            margin-top: 20px;
            font-variant: small-caps;
            background-color: transparent;
            font-size: 20px;
        }

        input[type="submit"] {
            margin-top: 20px;
            font-variant: small-caps;
            background-color: transparent;
            font-size: 20px;

        }

        input[type="submit"]:hover {
            margin-top: 20px;
            font-variant: small-caps;
            background-color: transparent;
            font-size: 20px;
            background-color: aquamarine;
        }

        input[type="tel"] {
            margin-top: 30px;
            font-variant: small-caps;
            background-color: transparent;
            font-size: 20px;
            margin-right: 139px;
            ;
        }

        marquee {
            font-size: 28px;
        }

        .lower {
            margin-top: -35px;

        }

        input#larger {
            width: 30px;
            height: 30px;

        }
    </style>
    <script>
        function Validate() {
            var name_1 = document.getElementById("nam").value;
            let number_1 = document.getElementById("num").value;

            if (name_1 == "") {
                alert("Enter The Name")
                return false;
            }

            if (number_1 == "") {
                alert("Enter The Mobile Number")
                return false;
            }

            return true;
        }

        function nextpage() {
            location.href = "research.html"
        }
    </script>

<body>
    
    
    <form onsubmit="return Validate()" method="post" action="formv.php">
        <marquee>Welcome To This Site Dear</marquee>
        <div class="para">
            <h3>Please Enter The Deatails </h3>
            <div clas="main">
                <div class="center">
                    Name:<input type="text" name="n1" id="nam"><br>
                    Mobile Number: <input type="tel" value="" id="num">
                </div>
                <div class="lower">
                    Gender: male<input type="radio" name="male" id="larger">
                    female<input type="radio" name="female" id="larger"><br>

                    <input type="submit" value="Submit" id="ho">
                </div>
            </div>
        </div>
        <h3>This Was Made BY Saket</h3>

        
    </form>

    <?php
    $name=$_GET['n1'];
    print($name);
    ?>

    
</body>
</html>