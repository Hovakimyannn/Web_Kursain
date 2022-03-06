<?php

require_once 'DataBase.php';

$dataBase = new DataBase();
$dataBase->connect();
$search = explode(' ', $_POST['search']);
$models = $dataBase->queryLike("SELECT model FROM auto_shop.cars where name LIKE ?","%", $search);
$arr = [];
foreach ($models as $model) {
    $arr[] = $model['model'];
}
$models = array_unique($arr);
$dataBase->close();

header('location: https://limitless-earth-58194.herokuapp.com/view/search_page.html' . '#' . $models[0]);