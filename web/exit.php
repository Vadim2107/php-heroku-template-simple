<?php
session_start();
// $_SESSION = null;
// $_SESSION['username'] = " ";
// session_destroy();
// session_unset();
$_SESSION = array();

header("Location: /index.php");