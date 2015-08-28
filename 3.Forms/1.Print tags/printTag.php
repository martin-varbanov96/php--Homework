<!DOCTYPE html>
<html>
<head>
    <title>Print Tags</title>
</head>
<body>
<form action="">
    Enter Tags<input type="text" name="name"/>
    <input type="submit" name="submit" value="submit"/>
</form>

<?php

    if(isset($_GET['name'])){
        $arrayList=preg_split("/, /",$_GET['name']);
       // echo "$arrayList";
        //print_r($arrayList);
        for($i=0;$i<count($arrayList);$i++){
            echo "$i"." : "."$arrayList[$i]"."</br>";
        }
    }

?>

</body>
</html>

