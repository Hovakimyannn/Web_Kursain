<?php

function queryEq($model = '')
{
    $mysqli = new mysqli('us-cdbr-east-05.cleardb.net', 'b67fe0a625343b', 'f158ca13', 'heroku_d1e343f1c933536');
    if ($mysqli->connect_error) {
        die('Connect Error (' . mysqli_connect_errno() . ') ' . mysqli_connect_error());
    }
    if ($model) {
        $stmt = $mysqli->prepare("SELECT name, model, fuel, image FROM heroku_d1e343f1c933536.cars where model = ?");
        $stmt->bind_param('s', $model);
    } else {
        $stmt = $mysqli->prepare("SELECT name, model, fuel, image FROM heroku_d1e343f1c933536.cars");
    }
    $stmt->execute();
    $result = $stmt->get_result();
    return $result->fetch_all(MYSQLI_ASSOC);
}