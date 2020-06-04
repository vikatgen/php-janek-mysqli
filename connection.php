<?php

$config = require_once 'config.php';

$link = mysqli_connect(
    $config['host'],
    $config['user'],
    $config['pass'],
    $config['db']
);

/* check connection */
if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
};