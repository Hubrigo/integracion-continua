<?php
require 'db.php';

if ($pdo) {
    echo "Connection successful!";
} else {
    echo "Connection failed.";
}
