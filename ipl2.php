<?php
    $con = new mysqli("localhost","root","","echo");
    $a = $_REQUEST['m'];
    $b = $_REQUEST['d'];
    $c = $_REQUEST['t'];
    $d = $_REQUEST['t1'];
    $e = $_REQUEST['t2'];
    $f = $_REQUEST['v'];
    $g = $_REQUEST['im1'];
    $h = $_REQUEST['im2'];

    $i = "insert into ipl(m,d,t,t1,t2,v,im1,im2)values('$a','$b','$c','$d','$e','$f'
    ,'$g','$h')";

    $j = mysqli_query($con,$i);
    if($j == true)
    {
        echo "Jai mata di";
    }
    else
    {
        echo "Aniket";
    }
?>