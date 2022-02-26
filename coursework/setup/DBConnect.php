<?php

try {
    $link = new PDO(
        'mysql:host=mysql;dbname=cis_12',
        "root",
        "secret",
        options: [
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_OBJ
        ]
    );
} catch (PDOException $e) {
    throw new PDOException($e->getMessage(), $e->getCode());
}

$link = mysqli_connect(
    "mysql",
    "root",
    "secret",
    "cis_12"
);

if(mysqli_connect_error()) {
    die ("Connection Error");
}