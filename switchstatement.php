<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>switch statement</title>
</head>
<body>
    <?php
      // switch statement
    //   $weekday = 4;
    //   switch($weekday){
    //         case 1:
    //             echo "today is Monday";
    //             break;
    //         case 2:
    //             echo "today is Tuesday";
    //             break;
    //         case 3:
    //             echo "today is wednesday";
    //             break;
    //         case 4:
    //             echo "today is Thursday";
    //             break;
    //         case 5:
    //             echo "today is Friday";
    //             break;
    //         case 6:
    //             echo "today is Saturday";
    //             break;
    //         case 7:
    //             echo "toda is sanday";
    //             break;
    //         default: echo "enter valid weekday";
    //     }
     $age=21;
     switch($age){
         case ($age >=15 && $age <=20):
             echo "you are eligible";
             break;
         case($age>= 21 && $age <=30):
            echo "you are not eligible";
            break;
        default:
         echo "enter the valid age";
     }
        
         
     
    ?>
</body>
</html>