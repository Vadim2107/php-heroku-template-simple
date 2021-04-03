<?php

// include_once 'index.html';
$userName = $_SESSION['username'];
echo '<a href="/exit.php">Exit</a>';
// echo 'Hello, '.$_SESSION['username'];
if ($userName) {
    echo 'Hello, '.$userName.'!!!';
    echo '<a href="/exit.php">Exit</a>';
} else {
    include 'index.html';
}