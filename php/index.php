<?php

$db = mysqli_connect('localhost', 'root', 'password', 'auto_shop');
if ($db->connect_error) {
    exit('Cloud not connect');
}

$sql = "SELECT model FROM cars where name LIKE ?";
$search = explode(' ', $_POST['search']);
$text = '%';
foreach ($search as $se) {
    $text .= $se . '%';
}
$stmt = $db->prepare($sql);
$stmt->bind_param('s', $text);
$stmt->execute();
$result = $stmt->get_result();
$models = $result->fetch_all(MYSQLI_ASSOC);
$arr = [];
foreach ($models as $model) {
    $arr[] = $model['model'];
}
$models = array_unique($arr);
if (count($models) > 1) {
    $model = '';
} else {
    $model = $models[0];
}
$stmt->close();

header('location: http://your_domain/kursain/view/search_page.html' . '#' . $model);