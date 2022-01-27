<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Recursive function </title>
</head>
<body>
    <?php
    //   function FunctionName($number){
    //       if($number<=5){
    //           echo "$number <br>";
    //          FunctionName($number+1);
    //       }
    //   }
    //   FunctionName(1);
    function Factorial($n){
        if($n==0){
            return 1;
        }else{
            return ($n*Factorial($n-1));
        }
    }
    $b=Factorial(5);
    echo $b;
     
    ?>
</body>
</html>