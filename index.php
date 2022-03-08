<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="Harutyun Hovakimyan">
    <title>Harut's AutoShop</title>
    <link rel="stylesheet" href="view/css/index.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
</head>
<body class="grid_wrapper">
<header class="header_box header">
    <header class="top_side">
        <div class="flex_wrapper">
            <a href="./view/search_page.php" class="button">Models</a>
            <a href="#" class="button">Services</a>
            <a href="#" class="button">Discover</a>
            <a href="#" class="button">Electromobility</a>
            <div class="search_div">
                <form action="php/index.php" method="POST" class="search_form_flex">
                    <div>
                        <input type="text" name="search"  class="search_box">
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
            <button class="btn" id="1">1</button>
            <button class="btn" id="2">2</button>
            <button class="btn" id="3">3</button>
            <button class="btn" id="4">4</button>
            <button class="btn" id="5">5</button>
            <button class="btn" id="6">6</button>
            <button class="btn" id="7">7</button>
            <button class="btn" id="8">8</button>
            <button class="btn" id="X">X</button>
            <button class="btn" id="Z">Z</button>
            <button class="btn" id="M">M</button>
            <button class="btn" id="I">I</button>
        </div>
    </nav>
    <div>

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
            <a class="color_black" href="#">Link</a>
            <a class="color_black" href="#">Link</a>
            <a class="color_black" href="#">Link</a>
        </div>
    </section>
</footer>
</body>
<script src="js/index.js" defer>

</script>
</html>