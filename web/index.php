<?php

session_start();
// include_once 'index.html';
// $userName = $_SESSION['username'];
// echo '<a href="/exit.php">Exit</a>';
// echo 'Hello, '.$_SESSION['username'];
if (isset($_SESSION['username'])) {
    echo 'Hello, '.$userName.'!!!';
    echo '<a href="/exit.php">Exit</a>';
} else {
    include 'index.html';
}