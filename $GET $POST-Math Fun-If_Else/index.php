 <!DOCTYPE html>
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
 </html>
 <?php
  $item="pizza";
  $price=5.99;
//   $total=null;
  $quantity=$_POST["quantity"];

  $total=$quantity*$price;
  echo "you have ordered {$quantity}x{$item}/s <br>";
  echo "total:\${$total}";
?>