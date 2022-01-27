<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Function with retarning valvo</title>
</head>
<body>
    <?php 
    // function with returing value

    //    function FunctionName($fname="first", $lname="lname"){
    //        $a="$fname $lname";
    //        return $a;
    //    }
    //    $b = FunctionName("Ashis ", "Roy");
    //    echo "hello $b";
    // totol number of sum with parameter and returing value
    function FunctionName($math, $phy , $che){
        $sum=$math+$phy+$che;
        return $sum;
    }
    function percentage($st){
        $per=$st/3;
        echo $per;
    }
    $total=FunctionName(75, 65, 84);
    
    percentage($total);
    
    ?>
</body>
</html>