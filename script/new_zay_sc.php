<?php
    if (!isset($_COOKIE['role'])) {
        echo "Вы не авторезированы";
        header('Location: /login.php');
        exit();
    }

    $user = $_COOKIE['id'];
    $mesto = $_POST['mesto'];
    $phone = $_POST['phone'];
    $odject = $_POST['odject'];
    $cat = $_POST['cat'];

   

    $conn = new mysqli('localhost', 'root', '', 'ksmy' );
    // $conn->query("INSERT INTO `zayavki` (`opisanie`, `ylitsa`, `user`, `status`, `categorize`, `img`)
    // VALUES ( '{$opisanie}', '{$ylitsa}', '{$user}', '1', '{$cat}', '{$name}');");

     $conn->query("INSERT INTO `zayavka` (`mesto`, `phone`, `oject`, `cat`, `status`, `user`, `cash`,`time` ,`img`) 
     VALUES ('{$mesto}', '$phone', '$odject', ' $cat', '1', '$user' , '0' , '0', '$name' );");

header('Location: /profile.php');

    ?>
      
     