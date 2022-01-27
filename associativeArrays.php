<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Associative array</title>
</head>
<body>
    <?php
    //associative array
    // $age=array(
    //     "a"=>10,
    //     "b"=>20,
    //     "c"=>30
    // );
    $age=[
        "a"=>10,
        "b"=>20,
        "c"=>30
    ];
    echo "<pre>";
    var_dump ($age);
  //  print_r ($age);
    echo "</pre>";
    echo $age["a"]."<br>";
    echo $age["b"]."<br>";
    echo $age["c"]."<br>";
    
    
    
    
    
    
    
    
    
    
    
    
    ?>
</body>
</html>