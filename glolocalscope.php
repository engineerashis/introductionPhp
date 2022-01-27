<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>global and local variable</title>
</head>
<body>
    <?php
         $a=10;
         $b=20;
         function wow(){
             global $a;
             echo "$a <br>";
             
         }
         wow();
         echo $b;
    ?>
</body>
</html>