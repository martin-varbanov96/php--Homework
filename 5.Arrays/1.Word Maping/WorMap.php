<!DOCTYPE html>
<html>
<head>
</head>
<body>
<form action="">
    <textarea name="input" id="input" cols="30" rows="10">
    </textarea>
    <input type="submit"/>
</form>
<?php
 if(isset($_GET['input'])){
     $value = $_GET['input'];
     $value=strtolower($value);
     $arr = preg_split("/[^a-zA-Z]+/", $value);
     //array_count_values
     $sort=array_count_values($arr);
     echo "<table>";
//     for ($i = 0; $i < count($sort); $i++) {
//         echo "<tr ><td></td><td>$sort[$i]</td></tr>";
//     }
     foreach($sort as $key => $values){
         echo "<tr ><td>$key</td><td>$values</td></tr>";

     }
     echo "</table>";
 }

?>
</body>
</html>