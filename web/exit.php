<?php
$_SESSION = null;
$_SESSION['username'] = null;
session_destroy();

header("Location: index.php");