<?php

$count=0;
for($i=1;$i<=100;$i++)
{
    for($j=1;$j<$j+1;$j++)
    {
        if($i%$j==0)
        {
            $count++;
        }
    }

}
if($count==2)
{
    print($i);
}
$count=0;   



?>