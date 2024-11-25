<?php
    // ----------**Intro to PHP*----------
    // echo"I love php <br>";
    // echo"it's really popular";
    // <br> is  a new line command
    /*This 
    is Multiline 
    comment */


    // ----------**Variables*----------
    // String
    $name="Rai yo";
    $food="taco";
    $email="rai@gmail.com";
    // Integer
    $age=23;
    // float
    $gpa=7.5;
    $price=4.99;
    // boolean
    $employed=true;
    echo "Hello {$name}<br>";
    echo "you like {$food}<br>";
    echo "Email: {$email} <br>";
    echo "You are {$age} years old <br>";
    echo "the price of the pizza is \${$price} <br>";
    echo "Employed:{$employed} <br>";
    $total=$price*3;
    echo $total;





    
?>
<!-- php files can contain html,css ,js files as well! -->
 <!DOCTYPE html>
 <html lang="en">
 <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
 </head>
 <body>
    <br>
    <button>order pizza</button>
 </body>
 </html>