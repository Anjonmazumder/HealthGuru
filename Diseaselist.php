<?php
session_start();
require_once 'Helper.php';
Helper::checkAuthorization();
require_once 'dbconnection.php';
$disease = mysqli_query($con, "select * from diseases");
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title> Disease List</title>
        <?php require_once 'includedFiles.php'; ?>
    </head>
    <body>
        <div class="container">
             <?php require_once 'menu.php'; ?>
            <h2>List of Diseases</h2>
            <ul>
                <?php while ($row = mysqli_fetch_array($disease)) { ?>
                    <li>
                        <a href="showDisease.php?id=<?php echo $row['id'] ?>">
                            <?php echo $row['name']; ?> 
                        </a>
                    </li>
                    <?php
                }
                ?>
            </ul>
        </div>
    </body>
</html>
