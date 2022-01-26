<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>break , continue and goto statement</title>
</head>
<body>
    <?php
    // simple print 1 - 10;
    //    for($a=1; $a<=10; $a++){
    //        echo "$a <br>";
    //    }

    //use break & continue statement 
    for($a=1; $a<10; $a++){
        if($a==3){
            // break;
            continue;
        }
        echo "$a <br>";
    }

    ?>
</body>
</html>