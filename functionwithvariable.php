<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>function with variable</title>
</head>
<body>
   <?php
    //  function Hello($name){
    //      $a=$name;
    //      echo $a;
    //  }
    //  $b="Hello";
    //  $b("Ashis");
// Anonymous functions
    $a=function($name){
        echo "hello $name";
    };
    $a("ashis");


   ?>
</body>
</html>