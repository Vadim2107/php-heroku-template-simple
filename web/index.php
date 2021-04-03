<?php

// include 'index.html';

if ($_SESSION['username']) {
    echo 'Hello, '.$_SESSION['username'];

} else {
    include 'index.html';
}