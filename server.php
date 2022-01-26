<?php
    require __DIR__ . '/database.php';

    $json = json_encode($discs);
    header('Content-Type: application/json');
    echo $json;
?>