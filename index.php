<?php
session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <?php require_once 'includedFiles.php'; ?>
    </head>
    <body>
        <div class="container">
            <?php 
            require_once 'menu.php'; 
            require_once 'slideShow.php';
            ?>
        </div>
    </body>
</html>
