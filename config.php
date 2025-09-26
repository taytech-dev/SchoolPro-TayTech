<?php
/*
TayTech SchoolPro: MySQL SSL connection configuration
For Render deployment
*/

$databaseServer   = getenv('DB_HOST') ?: 'mysql-taytech2025-taytechschool.j.aivencloud.com';
$databasePort     = getenv('DB_PORT') ?: 14620;
$databaseUsername = getenv('DB_USER') ?: 'avnadmin';
$databasePassword = getenv('DB_PASSWORD') ?: '';
$databaseName     = getenv('DB_NAME') ?: 'defaultdb';

// Path to CA certificate
$caCertPath = __DIR__ . '/ca.pem';

// Initialize MySQLi with SSL
$mysqli = mysqli_init();
mysqli_ssl_set($mysqli, NULL, NULL, $caCertPath, NULL, NULL);

if (!mysqli_real_connect(
    $mysqli,
    $databaseServer,
    $databaseUsername,
    $databasePassword,
    $databaseName,
    $databasePort,
    NULL,
    MYSQLI_CLIENT_SSL
)) {
    die('Database connection failed: ' . mysqli_connect_error());
}

mysqli_set_charset($mysqli, 'utf8mb4');

// System-wide unique ID
$guid = 'txomo7b4v-j49-47r3-gj9-md9opupj8w2';

// Caching factor (page loads between cache refresh)
$caching = 10;
?>
