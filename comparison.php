<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>comparison operators</title>
</head>
<body>
    <?php
      //comparison operators ==, ===, != , !==, <>, > , >=, <, <=, <=>
      // reture always true or false
    //   $a=10;
    //   $b=10;
    //   $c= $a==$b;
    //   echo $c;

    // $a="10";//string
    // $b=10;  //integer
    // $c= $a==$b; // compair data type  but return ture don't compair value;
    // echo $c;
    
    // $a="10";// string 
    // $b=10;  // integer
    // $c= $a===$b; // compair both data type and value
    // echo $c;

    // $a=10;
    // $b=20;
    // $c = $a != $b;
    // echo $c;

    // $a="10";
    // $b=20;
    // $c = $a !== $b;
    // echo $c;
    
    // $a=10;
    // $b=20;
    // $c = $a > $b;
    // echo $c;

    // $a=10;
    // $b=20;
    // $c = $a < $b;
    // echo $c;
      
    // $a=10;
    // $b=20;
    // $c = $a >= $b;
    // echo $c;

    // $a=10;
    // $b=20;
    // $c = $a <= $b;
    // echo $c;

    $a=10;
    $b=20;
    $c = $a <=> $b;
    echo $c;

    ?>
</body>
</html>