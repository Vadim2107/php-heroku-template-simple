<?php

// include_once 'index.html';
// echo 'Hello, '.$_SESSION['username'];
if ($_SESSION['username'] !== " ") {
    echo 'Hello, '.$_SESSION['username'].'!!!';
} else {
    include 'index.html';
}