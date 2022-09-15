<?php
    
    
    if (!isset($_COOKIE['role'])) {
        echo "Вы не авторезированы";
        header('Location: /login.php');
        exit();
    }

    $id=$_COOKIE['id'];
    $FIO=$_COOKIE['name'];
    $role=$_COOKIE['role'];
    $email = $_POST['email'];
    $login = $_POST['login'];

    $password=htmlspecialchars($_POST['password']);
    $password_hash = md5($password);


    $conn = new mysqli('localhost', 'root', '', 'ksmy');


    if(!($password)){


    
        $conn->query("UPDATE `users` SET `FIO`='$FIO',`email`='$email',`login`='$login',`role`='$role' WHERE `id`='$id' ");
    
    
    }else{
    
        $conn->query("UPDATE `users` SET `FIO`='$FIO',`email`='$email',`login`='$login',`password`='$password_hash',`role`='$role' WHERE `id`='$id' ");
          
        
    }
    
    
    

    header('Location: /script/logout_sc.php');




    


?>