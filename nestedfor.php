<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>nested for loop </title>
</head>
<body>
    <?php
    //   for($a=1; $a<=100; $a=$a+10){
    //     for($b=$a; $b<$a+10; $b++){
    //         echo $b; 
    //     }
    //     echo "<br>";
       
    // }

    // for($a=100; $a>=1 ; $a--){
    //    for($b=$a; $b>$a-10; $b--){
    //        echo $a;
    //    }
    //    echo "<br>";
    // }
   
	
// for ($i=1; $i<=100; $i++)
// 	{
// 	 if($i%2==0)
// 	  {
// 	   @$even=$even+$i;
// 	  }
// 	  else
// 	  {
// 	  	@$odd=$odd+$i;
// 	  }
// } 
// 	 echo "Sum of even numbers=".$even."<br/>";
// 	 echo "Sum of odd numbers=".$odd;
@$f=$_GET['f'];
@$s=$_GET['s'];
for ($i=1; $i<=$s; $i++){
	 $f++; 
	} 
	 echo "Sum of given numbers=".$f;
 ?>
<form>
	 Enter first number <input type="text" name="f"><br/>
     Enter Second number<input type="text" name="s"><br/>
	 <input type="submit" value="add">
</form>
</body>
</html>