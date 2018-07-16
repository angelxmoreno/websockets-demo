<?php
require '../config/bootstrap.php';
require '../config/routes.php';
// Run app
try {
    $app->run();
} catch (\Throwable $e) {
    echo $e->getMessage();
}
