 <!-- <!DOCTYPE html>
 <html lang="en">
 <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
 </head>
 <body>
   <form action="index.php" method='post'>
    <label>Quantity:</label><br/>
    <input type="text" name="quantity"><br>
    <input type="submit" value="Total">
    </form>
 </body>
 </html> -->
 <?php
//   $item="pizza";
//   $price=5.99;
//   $total=null;
//   $quantity=$_POST["quantity"];

//   $total=$quantity*$price;
//   echo "you have ordered {$quantity}x{$item}/s <br>";
//   echo "total:\${$total}";
 ?>
 <!-- <!DOCTYPE html>
 <html lang="en">
 <head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Document</title>
 </head>
 <body>
   <form action="index.php" method="post">
      <label >x:</label>
      <input type="text" name="x">
      <label >Y:</label>
      <input type="text" name="y">
      <label >Z:</label>
      <input type="text" name="z">
      <input type="submit" value="total">
   </form>
 </body>
 </html> -->
 <?php
   // $x=$_POST['x'];
   // $y=$_POST['y'];
   // $z=$_POST['z'];
   // $total=null;
   // $total=null;
   // $total=abs($x);
   // $total=round($x);
   // $total=floor($x);
   // $total=ceil($x);
   // $total=pow($x,$y);
   // $total=sqrt($x);
   // $total=max($x,$y,$z);
   // $total=min($x,$y,$z);
   // $total=pi(); //print pi value
   // $total=rand(1,6);
   // echo $total;
 ?>
<!-- <!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Document</title>
</head>
<body>
   <form action="index.php" method="post">
      <label >radius:</label>
      <input type="text" name="radius">
      <input type="submit" value="calculate">
   </form>
</body>
</html> -->
<?php
   // $radius=$_POST["radius"];
   // $circumference=null;

   // $circumference=2*pi()*$radius;
   // echo round($circumference,2);
?>
<!-- ----------**IF_ELSE**------------- -->

<?php
   $age=19;
   $adult=true;
   if($age>=18 && $adult){
      echo "you may enter this side";
   }elseif($age<=0){
      echo "Stop kidding";
   }else{
      echo "Access denied";
   }
?>
