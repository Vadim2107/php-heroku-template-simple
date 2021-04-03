<?php

include_once 'index.html';
// echo 'Hello, '.$_SESSION['username'];
if ($_SESSION['username'] === " ") {
    include 'index.html';
} else {
    echo 'Hello, '.$_SESSION['username'].'!!!';
}