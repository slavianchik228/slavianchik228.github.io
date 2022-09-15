<?php foreach($_COOKIE as $key => $value) setcookie($key, '', time() - 360000, '/');
header('Location: /index.html');
?>
