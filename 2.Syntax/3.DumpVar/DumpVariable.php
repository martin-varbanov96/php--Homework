<?php
    function dumpVar($var){
        $type=gettype($var);
        echo "$type";
       if(is_numeric($var)){
           echo '('."$var".")"."</br>";
       }
        else{
            echo "</br>";
        }


    }

    dumpVar("hello");
    dumpVar(15);
    dumpVar(1.123);
    dumpVar(123);
    dumpVar(array(3,2,5))

?>