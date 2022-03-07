<?php

function queryEq() {
    $mysqli = new mysqli('localhost', 'root', 'password', 'auto_shop');
    if ($mysqli->connect_error) {
        die('Connect Error (' . mysqli_connect_errno() . ') ' . mysqli_connect_error());
    }
    $stmt = $mysqli->prepare("SELECT name, model, fuel, image FROM auto_shop.cars");
    $stmt->execute();
    $result = $stmt->get_result();
    return $result->fetch_all(MYSQLI_ASSOC);
}