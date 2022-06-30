<?php 
    function maxvalue ($a, $b, $c) {
        if ($a >= $b && $a >= $c) {
            $max = $a;
            echo "Jadi nilai max dari 3 buah nilai adalah a dengan nilai ";
        }
        else if ($b >= $a && $b >= $c) {
            $max = $b;
            echo "Jadi nilai max dari 3 buah nilai adalah b dengan nilai ";
        }
        else if ($c >= $b && $c >= $a) {
            $max = $c;
            echo "Jadi nilai max dari 3 buah nilai adalah c dengan nilai ";
        }

        echo $max;
    }

    maxvalue(4,6,9);
?>