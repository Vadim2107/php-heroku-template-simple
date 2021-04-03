<?php
// $_SESSION = null;
$_SESSION['username'] = null;
// session_destroy();
session_unset();
echo 'Session-null';
header("Location: index.php");