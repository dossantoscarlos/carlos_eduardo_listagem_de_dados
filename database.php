<?php
    try {
        $dsn = "mysql:host=localhost;dbname=contrato";
        $user = "root";
        $pass = "";
        $pdo = new PDO( $dsn, $user, $pass);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    } catch( PDOException $Exception ) {
        throw new Error($Exception->getMessage(), $Exception->getCode());
    }