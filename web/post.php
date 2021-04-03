<?php

session_start();

$_SESSION['username'] = $_POST['user_name'];
echo $_SESSION['username'];

// header("Location: /index.php");