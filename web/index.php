<?php

include_once 'index.html';

if ($_SESSION['username']) {
    echo 'Hello, '.$_SESSION['username'];

}
//  else {
//     include 'index.html';
// }