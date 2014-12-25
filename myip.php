<?php

if (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
    $myip = $_SERVER['HTTP_X_FORWARDED_FOR'];
} else {
    $myip = $_SERVER['REMOTE_ADDR'];
}

echo "haha " . $myip;
