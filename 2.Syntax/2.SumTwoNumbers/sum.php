<?php
    function sumNumbers($fist,$second){
        $sumed=round("$fist"+"$second",2);
        echo '$firstNumber + $secondNumber = '."$fist"." + "."$second"." = ".$sumed.'</br>';
    }

    sumNumbers(2,5);
    sumNumbers(123.2323123,123.23323123);
    sumNumbers(1.567808,0.123123);
    sumNumbers("firstNUmber","secondNumber");
?>