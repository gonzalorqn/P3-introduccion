<?php
    $vec = array();
    $promedio = 0;
    for($i=0;$i<5;$i++)
    {
        array_push($vec, rand);
    }
    for($i=0;$i<5;$i++)
    {
        $promedio += $vec[$i];
    }
    $promedio = $promedio / 5;
    if($promedio < 6)
        echo "El promedio es menor a 6";
    else if($promedio = 6)
        echo "El promedio es igual a 6";
    else if($promedio > 6)
        echo "El promedio es mayor a 6";
