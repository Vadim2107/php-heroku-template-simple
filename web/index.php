<?php
// $_SESSION = null;
// session_start();

// include_once 'index.html';
$userName = $_SESSION['username'];
// echo '<a href="/exit.php">Exit</a>';
// echo 'Hello, '.$_SESSION['username'];
if (isset($userName)) {
    echo 'Hello, '.$userName.'!!!'.PHP_EOL;
    echo '<a href="/exit.php">Exit</a>';
} else {
    include 'index.html';
}