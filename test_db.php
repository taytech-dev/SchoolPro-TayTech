<?php
require 'config.php';

if ($mysqli) {
    echo "Database connection successful!";
} else {
    die("Database connection failed.");
}
?>

