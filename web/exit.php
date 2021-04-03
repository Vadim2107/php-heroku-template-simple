<?php
// $_SESSION = null;
// $_SESSION['username'] = null;
session_destroy();
// session_unset();

header("Location: index.php");