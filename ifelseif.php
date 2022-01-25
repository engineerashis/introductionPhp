<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>if else if statement</title>
</head>
<body>
    <?php
       $per=214;
       if($per >=80 && $per <= 100){
           echo "your are in merit";
       }elseif($per >= 60 && $per<=80){
           echo "your are in first division";
       }elseif($per >= 45 && $per<=60){
        echo "your are in second division";
       }elseif($per >= 33 && $per<=45){
        echo "your are in third division";
       }elseif($per <= 33){
        echo "your are in fail";
       }else{
           echo " please enter valid result";
       }

    ?>
</body>
</html>