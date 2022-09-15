<?php
    
    
    if (!isset($_COOKIE['role'])) {
        echo "Вы не авторезированы";
        header('Location: /login.php');
        exit();
    }

    $id=$_POST['id'];
    $cash = filter_var(trim($_POST['cash']), FILTER_SANITIZE_STRING);
    $time=$_POST['time'];
    $status = $_POST['status'];


    $name = $_FILES['image']['name'];
    $tmp_name = $_FILES['image']['tmp_name'];
    move_uploaded_file($tmp_name, "../img1/" . $name);
    $nameDir = "../img1/" . $name;

    

  


    $conn = new mysqli('localhost', 'root', '', 'ksmy');
 
        // $conn->query("UPDATE `users` SET `FIO`='$FIO',`email`='$email',`login`='$login',`role`='$role' WHERE `id`='$id' ");
    

        $conn->query("UPDATE `zayavka` SET `status`='$status',`cash`='$cash',`time`='$time',`img`='$nameDir' WHERE `id_zay`='$id' "); 

    header('Location: /admin.php');
   
?>