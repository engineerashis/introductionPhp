<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>for each loop </title>
</head>
<body>
    <?php
       $cars=array(
           "a"=>" volvo",
           "b"=> "toyota",
           "c"=>" shymoli"
       );
       foreach($cars as $key => $value){
           echo  $key .  $value. "<br>";
       }
    
    
    
    ?>
</body>
</html>