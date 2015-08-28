<!DOCTYPE html>
<html>
<head></head>
<body>
<form action="">
    Categories<input type="text" name="categ"/>
    Tags<input type="text" name="tags"/>
   Months <input type="text" name="months"/>
    <input type="submit" value="generate"/>
</form>

<?php

    function toArraium($value){
        $value=preg_split("/, /","$value");
        return $value;
    }

    function toListium($arr){
        echo "<ul>";
        for($i=0;$i<count($arr);$i++){
            echo "<li>$arr[$i]</li>";
        }
        echo "</ul>";
    }
    if(isset($_GET['categ'],$_GET['tags'],$_GET['months'])){

        $categories=$_GET['categ'];
        $tags=$_GET['tags'];
        $months=$_GET['months'];

        $categories=toArraium($categories);
        $tags=toArraium($tags);
        $months=toArraium($months);

        echo "<h1>Categories</h1>";
        toListium($categories);

        echo "<h1>Tags</h1>";
        toListium($tags);

        echo "<h1>Months</h1>";
        toListium($months);



    }
?>

</body>
</html>