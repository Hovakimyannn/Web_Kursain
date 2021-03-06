<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
    <link rel="icon" type="image/x-icon" href="../images/logo-light.svg">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta name="Harutyun Hovakimyan">
    <title>All models</title>
    <link rel="stylesheet" href="css/search_page.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
</head>
<body class="grid_wrapper">
<header class="header_box header" id="start">
    <img src="../images/search_page_wallpaper.webp" height="auto" width="100%" />
    <a href="#start"><i class="fa fa-angle-double-up back_to_top"></i></a>
    <header class="top_side">
        <div class="flex_wrapper">
            <a href="search_page.php" class="button active">Models</a>
            <a href="#" class="button">Services</a>
            <a href="./Discover.html" class="button">Discover</a>
            <a href="Electromobility.html" class="button">Electromobility</a>
            <div class="search_div">
                <form action="../php/index.php" method="POST" class="search_form_flex">
                    <div>
                        <input type="text" name="search" class="search_box">
                        <button style="all: unset; padding: 5px">
                            <i type="button" class="fa fa-search mouse_cursor_pointer"
                               style="font-size: 24px; color: whitesmoke"></i>
                        </button>
                    </div>
                </form>
            </div>
            <a href="../index.php">
                <img src="../images/logo-light.svg" alt="logo-light.svg" width="64" height="64">
            </a>
        </div>
    </header>
</header>
<div class="body">
    <nav class="nav_bar">
        <div class="pagination">
            <a class="hover_off">Series</a>
            <a href="#1-series" class="btn">1</a>
            <a href="#2-series" class="btn">2</a>
            <a href="#3-series" class="btn">3</a>
            <a href="#4-series" class="btn">4</a>
            <a href="#5-series" class="btn">5</a>
            <a href="#6-series" class="btn">6</a>
            <a href="#7-series" class="btn">7</a>
            <a href="#8-series" class="btn">8</a>
            <a href="#X-series" class="btn">X</a>
            <a href="#Z-series" class="btn">Z</a>
            <a href="#M-series" class="btn">M</a>
            <a href="#I-series" class="btn">I</a>
        </div>
    </nav>
    <main>
        <?php
        require_once '../php/search_page_back.php';
        $models = queryEq();
        $s = "";
        $str1 = $str2 = "";
        for ($i = 0; $i < count($models); $i++) {
            $str1 = "<div class='main_content main_content_border' id='" . $models[$i]['model'] . "'>
                           <h3>" . $models[$i]['model'][0] . "</h3>";
            $str2 = '</div>';
            $s .= "
            
            <div class='content_box'>
                            <a type='button' href='/view/".$models[$i]['model'].'.html#'.$models[$i]['name']."' class='content_box_button'>Show more</a>
            <img class='image' src='../images/" . $models[$i]['image'] . "' alt='" . $models[$i]['name'] . "'>
                " .
                (strpos($models[$i]['name'], 'M', 2) ? "<img src='../images/BMW_M_100px.png' alt='BMW_M_100px.png' height='15px' width='45px'>" :
                    (strpos($models[$i]['name'], 'I') ? "<img src='../images/BMW_i_100px.png' alt='BMW_i_100px.png' height='15px' width='45px'>" : ""))
                . "
                <p>" . str_replace('_', ' ', $models[$i]['name']) . "<br>" . $models[$i]['fuel'] . "</p>
            </div>";
            if ($models[$i]['model'][0] != $models[$i + 1]['model'][0]) {
                echo $str1 . $s . $str2;
                $s = "";
            }
        }
        ?>
    </main>
</div>
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
            <a class="button" href="#">Link</a>
        </div>
    </section>
</footer>
</body>
<script src="../js/search_page.js" defer>

</script>
</html>