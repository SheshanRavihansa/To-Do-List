<?php

$db_config = [
    'db_host' => 'localhost',
    'db_port' => '3306',
    'db_name' => 'To-Do-List',
    'db_username' => 'root',
    'db_password' => 'root',
    'site_url' => 'http://localhost:8090'
];

foreach ($db_config as $key => $value) {
    $GLOBALS[$key] = $value;
}
