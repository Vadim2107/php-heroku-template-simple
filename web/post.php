<?php

session_start();
// header("Location: /index.html");
$_SESSION['username'] = $_POST['user_name'];
echo $_SESSION['username'];
