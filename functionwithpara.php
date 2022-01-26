<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>function with parameter</title>
</head>
<body>
    <?php
    //function with parameter;
    //   function FunctionName($name1 , $name2){
    //       echo "$name1 . $name2 <br>"; 
    //   }
    //   FunctionName("uzzal ", "roy");
    //   FunctionName("sintheya"," roy");
    //   FunctionName("shonjib kumar", " roy");
    
    function FunctionName($a , $b){
        echo $a+$b ."<br>";
    }
    FunctionName(10, 20);
    for($a=1; $a<10;$a++){
        if($a==6){
            continue;
        }
        echo "$a <br>";
    }
    FunctionName(30,70);
    ?>
</body>
</html>