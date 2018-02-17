<?php 
    function faktorial($m)
    {
        if ($m==0)
            return 0;
        else
            return $m*faktorial($m-1);
    }
    print("1! = %d<br>\n". faktorial(1));
    print("4! = %d<br>\n". faktorial(4));
?>
