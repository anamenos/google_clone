<?php
if (isset($_GET['term']) && ($_GET['term'] !== "")) {
    $term = $_GET['term'];
} else {
    exit("You must entera search term");
}

if (isset($_GET['type']) && ($_GET['type'] !== "")) {
    $type = $_GET['type'];
} else {
    $type = "sites";
}
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="assets/styles/style.css" type="text/css">
    <title>Search</title>
</head>
<body>
<div class="wrapper">
    <div class="header">
        <div class="headerContent">
            <div class="logoContainer">
                <a href="index.php">
                    <img src="https://www.google.com/images/branding/googlelogo/1x/googlelogo_color_272x92dp.png"
                         alt="google image here">
                </a>
            </div>
            <div class="searchContainer">
                <form action="search.php" method="get">
                    <div class="searchBarContainer">
                        <input type="text" class="searchBox" name="term">
                        <button>Search</button>
                    </div>
                </form>
            </div>
        </div>
        <div class="tabsContainer">
            <div class="tabList">
                <li class='<?php echo $type=="sites" ? "active" : "" ?>'>
                    <a href='<?php echo "search.php?term=$term"; ?>'>Sites</a>
                </li>
                <li class='<?php echo $type=="images" ? "active" : "" ?>'>
                    <a href='<?php echo "search.php?term=$term&type=images"; ?>'>Images</a>
                </li>
            </div>
        </div>
    </div>
</div>
</body>
</html>