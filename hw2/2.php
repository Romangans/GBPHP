<?php
    $a = rand(0,15);

    function f($a)
    {
        if($a > 15)
        {
            return;
        }
        echo $a." ";
        f($a + 1);
       
    }
    f($a);
?>


