<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>multidimentional index array</title>
</head>
<body>
    <?php

    //multidimensional index array
       $emp=[
           ["1", "A","2000","No 1"],
           ["2","B","3000","No 2"],
           ["3", "C", "4000", "No 3"]
       ];
        //    echo $emp[0][0]. "  ";
        //    echo $emp[0][1]. "  ";
        //    echo $emp[0][2]. "  ";
        //    echo $emp[0][3]. "  ";
         
        //    echo "<br>";
        //    echo $emp[1][0]. "  ";
        //    echo $emp[1][1]. "  ";
        //    echo $emp[1][2]. "  ";
        //    echo $emp[1][3]. "  ";

        //    echo "<br>";
        //    echo $emp[2][0]. "  ";
        //    echo $emp[2][1]. "  ";
        //    echo $emp[2][2]. "  ";
        //    echo $emp[2][3]. "  ";
       
    //    echo "<pre>";
    //    print_r($emp);
    //    echo "</pre>";

    // for($row=0; $row<3; $row++){
    //     for($col=0; $col<3; $col++){
    //         echo $emp[$row][$col]. "  ";
    //     }
    //     echo "<br>";
    // }

    foreach($emp as $v1){
        foreach($v1 as $v2){
            echo $v2. "  ";
        }
        echo "<br>";
    }

    ?>
</body>
</html>