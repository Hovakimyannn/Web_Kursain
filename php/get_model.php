<?php
require_once './search_page_back.php';
$models = queryEq($_REQUEST['q']);
$s = "";
$str1 = $str2 = "";
for ($i = 0; $i < count($models); $i++) {
    $str1 = "<div class='main_content main_content_border' id='" . $models[$i]['model'] . "'>
                           <h3>" . $models[$i]['model'][0] . "</h3>";
    $str2 = '</div>';
    $s .= "

            <div class='content_box'>
                            <a type='button' href='/view/".$models[$i]['model'].'.html#'.$models[$i]['name']."' class='content_box_button'>Show more</a>
            <img class='image' src='./images/" . $models[$i]['image'] . "' alt='" . $models[$i]['name'] . "'>
                " .
        (strpos($models[$i]['name'], 'M', 2) ? "<img src='./images/BMW_M_100px.png' alt='BMW_M_100px.png' height='15px' width='45px'>" :
            (strpos($models[$i]['name'], 'I') ? "<img src='./images/BMW_i_100px.png' alt='BMW_i_100px.png' height='15px' width='45px'>" : ""))
        . "
                <p>" . str_replace('_', ' ', $models[$i]['name']) . "<br>" . $models[$i]['fuel'] . "</p>
            </div>";
    if ($models[$i]['model'][0] != $models[$i + 1]['model'][0]){
        echo $str1 . $s . $str2;
        $s = "";
    }
}