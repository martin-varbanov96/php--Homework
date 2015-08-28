<!DOCTYPE html>
<html>
<head>
    <title>Interest</title>
</head>
<body>
<form action="">
    Enter Amount<input type="text" name="amount" />
    <input type="radio" name="currency" value="USD"/>USD
    <input type="radio" name="currency" value="EUR"/>EUR
    <input type="radio" name="currency" value="BGN"/>BGN
    compound Interest Amount <input type="text" name="interest"/>
    <select name="time" id="time">
        <option value="6" name="month">6 Months</option>
        <option value="1" name="month">1 year</option>
        <option value="2" name="month">2 years</option>
        <option value="5" name="month">5 years</option>
    </select>
    <input type="submit" value="submit" name="submit"/>
</form>
<?php
    if(isset($_GET['amount'],$_GET['interest'])){
        $months=0;
        $amount=$_GET['amount'];
        $interest=$_GET['interest'];
        $interestMonth=$interest/12;

        if($_GET['time']==6){
            $months=6;
        }
        if($_GET['time']==1){
            $months=12;
        }
        if($_GET['time']==2){
            $months=24;
        }
        if($_GET['time']==5){
            $months=60;
        }

        for($i=1;$i<=$months;$i++){
            $amount=$amount+($amount*($interestMonth/100));
        }
        if($_GET['currency']=="USD"){
            echo '$ '.round($amount,2);

        }
        if($_GET['currency']=="EUR"){
            echo '€ '.round($amount,2);
        }
        if($_GET['currency']=="BGN"){
            echo 'лв '.round($amount,2);

        }

    }
?>

</body>
</html>