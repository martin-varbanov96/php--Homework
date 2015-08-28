<?php

function checkRepeat($var){
    $initialVar=$var;
    $first=$var%10;
    $var=round($var/10,0);
    $second=$var%10;
    $var=round($var/10,0);
    $third=$var%10;

    if($first!=$second&&
        $first!=$third&&
        $second!=$third){

        echo "$initialVar";
        echo $initialVar;

    }
}

function loop($var){
    for($i=102;$i<=$var;$i++){
        checkRepeat($var);

    }
}

checkRepeat(123);


//
//
//$digits = findDigits(1234);
//printResult($digits);
//$digits = findDigits(145);
//printResult($digits);
//$digits = findDigits(15);
//printResult($digits);
//$digits = findDigits(247);
//printResult($digits);
//
//function printResult($digits) {
//    if (count($digits) > 0) {
//        echo implode(', ', $digits);
//    } else {
//        echo "no";
//    }
//    echo "";
//}
//function findDigits($n) {
//    $array = [];
//    if ($n < 100) {
    //        return $array;
//    }
//    for ($i = 1; $i <= 9; $i++) {
//        for ($j = 0; $j <= 9; $j++) {
//            for ($k = 0; $k <= 9; $k ++) {
//                if ($i != $j && $j != $k && $k != $i) {
//                    $result = "${i}${j}${k}";
//                    if ((int)$result <= $n) {
//                        array_push($array, $result);
//                    }
//                }
//            }
//        }
//    }
//    return $array;
//}
//
//

?>
