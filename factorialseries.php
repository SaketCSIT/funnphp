<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Series</title>
</head>
<body>
    <?php
    echo "1";
    for($x=1;$x<10;$x++)
    {   
        if($x%2==1)
        {
            echo "-";
        }
        else
        {
            echo "!";
        }
        echo " ";
        echo "x^$x/$x";
    }

    ?>
    
</body>
</html>