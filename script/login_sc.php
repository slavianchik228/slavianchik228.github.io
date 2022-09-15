
<?php
$UserName = filter_var(trim($_POST['login']), FILTER_SANITIZE_STRING);
$UserPass = filter_var(trim($_POST['password']), FILTER_SANITIZE_STRING);

$UserPass = md5($UserPass);


$conn = new mysqli('localhost', 'root', '', 'ksmy');
$result1 = $conn->query("SELECT * FROM `users` WHERE `login` = '$UserName'
AND `password` = '$UserPass'");

$user = $result1->fetch_assoc();
if (count($user) == 0) {
    header('Location: /login.php');
    exit();
} 

setcookie('user', $user['login'], time() + 360000, "/");
setcookie('id', $user['id'], time() + 360000, "/");
setcookie('mail', $user['email'], time() + 360000, "/");
setcookie('name', $user['FIO'], time() + 360000, "/");
setcookie('role', $user['role'], time() + 360000, "/");

$conn->close();

header('Location: /profile.php');


?>

