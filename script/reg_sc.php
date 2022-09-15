<?php
if(isset($_POST["register"])){
    
    $FIO= htmlspecialchars($_POST['FIO']);
    $email=htmlspecialchars($_POST['email']);
    $login=htmlspecialchars($_POST['login']);
    $password=htmlspecialchars($_POST['password']);
    $password_hash = md5($password);
    $conn = new mysqli('localhost', 'root', '', 'ksmy');
    $query=mysqli_query($conn,"SELECT * FROM users WHERE login='".$login."'");
    $numrows=mysqli_num_rows($query);

    

    if($numrows==0)
    {
    $sql="INSERT INTO users
    (FIO, email, login,password,role)
    VALUES('".$FIO."','".$email."', '".$login."', '".$password_hash."', '1')";
    $result=mysqli_query($conn, $sql);
    if($result){
    $message = "Аккаунт создан";
    }
    else {
    $message = "Failed to insert data information! SQL query:".$sql;
    }
    }
    else {
    $message = "That username already exists! Please try another one!";
    }
    }
    else {
    $message = "All fields are required!";
    }
    


    if (!empty($message)) 
    {
        echo "<p class='error'>" . "MESSAGE: ". $message . "</p>";
    } 

   

    
    
    header('Location: /login.php');

    ?>