<?php
session_start();
    error_reporting(E_ALL ^ E_NOTICE);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
   <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <h1>
        The interactive map for coronavirus
        <?php
            if($_SESSION['user']){
                echo '<p style="display: inline-block;margin-left:30px;">Welcome:'.$_SESSION['user'].' | <a href="logout.php">log out</a></p>';
            }else{
                echo '<p style="display: inline-block;margin-left:30px;"><a href="register.php">register</a> | <a href="login.php">login</a></p>';
            }
        ?>
    </h1>
    <h1>
        <?php
        if($_SESSION['user']){
            echo '<a download="This is the file name" href="./css/WebScraping.csv">This is the file name</a>';
        }else{
            echo '<a href="javascript:alert(\'Please log in and download the file\');">This is the file name</a>';
        }
        ?>
    </h1>
    <div class="map">
        <iframe src="https://cn.batchgeo.com/map/45f6dfe18db65e6e4b0530d59ec99a10" frameborder="0" width="100%" height="800" sandbox="allow-top-navigation allow-scripts allow-popups allow-same-origin allow-modals allow-forms" style="border:1px solid #aaa;"></iframe>
    </div>
    <br>
    <br>

    <div class="map">
        <iframe src="https://batchgeo.com/map/0f672793fe26e6875949fa2bd0f3a035" frameborder="0" width="100%" height="800" sandbox="allow-top-navigation allow-scripts allow-popups allow-same-origin allow-modals allow-forms" style="border:1px solid #aaa;"></iframe>
    </div>

    <h2>Daily new cases in Victoria</h2>

<div class="flourish-embed flourish-chart" data-src="visualisation/3681284" data-url="https://flo.uri.sh/visualisation/3681284/embed" aria-label=""><script src="https://public.flourish.studio/resources/embed.js"></script></div>
<h2>Total cases in Victoria</h2>

<div class="flourish-embed flourish-chart" data-src="visualisation/3681103" data-url="https://flo.uri.sh/visualisation/3681103/embed" aria-label=""><script src="https://public.flourish.studio/resources/embed.js"></script></div></p>

<body>
</html>
