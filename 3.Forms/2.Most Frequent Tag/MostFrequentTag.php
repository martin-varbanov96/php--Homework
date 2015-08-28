<!DOCTYPE html>
 <html>
<head>
    <title>Most Frequent</title>
</head>
<body>

<form action="">
    Enter Tags<input type="text" name="name"/>
    <input type="submit" name="submit" value="submit"/>
</form>

<?php

    $count=array();
    $br=0;
    $max=0;

    if(isset($_GET['name'])){
        $result=preg_split("/, /",$_GET['name']);
        for($i=0;$i<count($result);$i++){
            for($k=0;$k<count($result);$k++){
                if($result[$i]==$result[$k]){
                    $br++;

                }
            }
            array_push($count,$br);
            $br=0;
        }
        for($j=0;$j<count($result);$j++){
            echo "$result[$j]"." : ".$count[$j]."</br>";
        }

        for($j=0;$j<count($result);$j++){
            for($l=0;$l<count($result);$l++){
                if($count[$l]>$max){
                    $max=$count[$l];
                    $index=$result[$l];
                }
            }
        }

        echo "The most frequent is: "."$index";


    }
?>

</body>
 </html>