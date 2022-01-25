<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Difference between echo and print statement</title>
</head>
<body>
    <?php
       // different betweent echo and print
       // accept comma , in echo statement but fatal in comma when used print statement
         echo "<h1>hello world </h1>";
         echo "<h1> hello php "." with ashis roy</h1>";
         print "hello i'm print";
         print "<h2> hello I am fault</h2>"."hello fault";
         // do not use multiple time , statement;
         // so when code run and display result try to use echo statement

    ?>
</body>
</html>