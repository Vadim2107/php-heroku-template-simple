<?php

session_start();

$userName = $_SESSION['username'];

if (isset($userName)) {
    echo 'Hello, '.$userName.'!!!'.PHP_EOL;
    echo '<a href="/exit.php">Exit</a>';
} else {
    include 'index.html';
}