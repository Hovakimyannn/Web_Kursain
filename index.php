<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="icon" type="image/x-icon" href="./images/logo-light.svg">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta name="Harutyun Hovakimyan">
    <title>Harut's AutoShop</title>
    <link rel="stylesheet" href="view/css/index.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
</head>
<body class="grid_wrapper">
<header class="header_box header" id="start">
    <img src="images/BMW-X6.jpg" height="auto" width="100%" />
    <a href="#start"><i class="fa fa-angle-double-up back_to_top"></i></a>
    <header class="top_side">
        <div class="flex_wrapper">
            <a href="./view/search_page.php" class="button">Models</a>
            <a href="#" class="button">Services</a>
            <a href="#" class="button">Discover</a>
            <a href="./view/Electromobility.html" class="button">Electromobility</a>
            <div class="search_div">
                <form action="php/index.php" method="POST" class="search_form_flex">
                    <div>
                        <input type="text" name="search" class="search_box">
                        <button style="all: unset; padding: 5px">
                            <i type="button" class="fa fa-search mouse_cursor_pointer" style="font-size: 24px;"></i>
                        </button>
                    </div>
                </form>
            </div>
            <a href="./index.php">
                <img src="images/logo-light.svg" alt="logo-light.svg" width="64" height="64">
            </a>
        </div>
    </header>
</header>
<main>
    <nav class="nav_bar">
        <div class="pagination">
            <button class="btn mouse_cursor_pointer"  id="1">1</button>
            <button class="btn mouse_cursor_pointer" id="2">2</button>
            <button class="btn mouse_cursor_pointer" id="3">3</button>
            <button class="btn mouse_cursor_pointer" id="4">4</button>
            <button class="btn mouse_cursor_pointer" id="5">5</button>
            <button class="btn mouse_cursor_pointer" id="6">6</button>
            <button class="btn mouse_cursor_pointer" id="7">7</button>
            <button class="btn mouse_cursor_pointer" id="8">8</button>
            <button class="btn mouse_cursor_pointer" id="X">X</button>
            <button class="btn mouse_cursor_pointer" id="Z">Z</button>
            <button class="btn mouse_cursor_pointer" id="M">M</button>
            <button class="btn mouse_cursor_pointer" id="I">I</button>
        </div>
    </nav>
    <div>
        <?php
        require_once './php/search_page_back.php';
        $models = queryEq('X-series');
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
            if ($models[$i]['model'][0] != $models[$i + 1]['model'][0]) {
                echo $str1 . $s . $str2;
                $s = "";
            }
        }
        ?>
    </div>
</main>
<footer class="footer_box">
    <div class="between_200_height">
    </div>
    <div class="footer_box_flex">
    </div>
    <div class="footer_box_flex">
    </div>
    <section class="section_box">
        <div>
            <i>By Harut Hovakimyan</i>
        </div>
        <div>
            <a class="color_black" href="#">Link</a>
        </div>
    </section>
</footer>
</body>

<script src="js/index.js" defer>

</script>
</html>