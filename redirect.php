<?php
session_start();

if (!isset($_SESSION['last']) || $_SESSION['last'] === 'b') {
    $_SESSION['last'] = 'a';
    header("Location: https://twitch.tv");
} else {
    $_SESSION['last'] = 'b';
    header("Location: https://youtube.com");
}
exit;

