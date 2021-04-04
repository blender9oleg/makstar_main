<?php

$name = htmlspecialchars(stripslashes(trim($_POST['name'])));
$email = htmlspecialchars(stripslashes(trim($_POST['email'])));
$number = htmlspecialchars(stripslashes(trim($_POST['number'])));
$time = htmlspecialchars(stripslashes(trim($_POST['time'])));
$title = htmlspecialchars(stripslashes(trim($_POST['title'])));
$msg_time =  date("h:i:sa");
$msg_date = date("Y.m.d");

$head = "$title, $msg_date";

$message = "
$title

Замовник: $name,
Пошта: $email,
Номер: $number,
Час для дзвінка: $time,

Дата замовлення: $msg_time, $msg_date";


  // Make number array
  $howMany = 2 ;

  for ($i = 1; $i <= $howMany; $i++) {
    $numbers[] = rand(10,100);
  }
  $result = mail("makstar@makstar.com.ua", $head, $message);
  if(!$result) {   
       echo "Помилка. Спробуйте пізніше:( <a href='/index.html'><h2>Повернутись на головну</h2></a>";   
  } 
?>
<!DOCTYPE html>
<html>
  <head>
    <title>Замовлення відправлене</title>
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <link rel="stylesheet" href="/style/style.css">
    <link rel="stylesheet" media="(max-width: 700px)" href="/style/mobile.css">
    <link rel="shortcut icon" href="/img/makstarico.png" type="image/png">
    <style>.final{
        color: orangered;
        margin-top: 16%;
        margin-bottom: 10%;
        }
        .php_div{
        display: flex;
        margin: 0 auto;
        justify-content: center;
        }
    </style> 
  </head>
  <body>
    <h1 class="final">Замовлення відправлене!</h1>
    <div class="php_div">
        <a href='/index.html'><button><h2>Головна</h2></button></a>
    </div>
    
  </body>
</html>
