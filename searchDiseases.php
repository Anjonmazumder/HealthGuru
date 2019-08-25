<?php
session_start();
require_once 'Helper.php';
Helper::checkAuthorization();
require_once 'dbconnection.php';
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Search Disease</title>
        <?php require_once 'includedFiles.php'; ?>
    </head>
    <body>
        <div class="container">
            <?php require_once 'menu.php'; ?>
            <h3>Search Disease</h3>
            <form action="" method="POST" class="form-inline">
                <div class="form-group">
                    <input type="text" name="search" id="search"  class="form-control"/>
                    <input type="submit" value="search" name="submit" class="btn btn-success"/>
                </div>
                
            </form>

            <?php
            if (isset($_POST['submit'])) {
                $searchq = $_POST['search'];
                $sql = "SELECT*FROM diseases  WHERE name LIKE '$searchq%'";

                $result = mysqli_query($con, $sql);
                $count = mysqli_num_rows($result);
                if ($count == 0) {
                    echo'no result found';
                } else {
                    
                    while ($row = mysqli_fetch_array($result)) {
                        ?><a href="showDisease.php?id=<?php echo $row['id'] ?>">
                            <?php echo $row['name']; ?> 
                        </a>
            <?php
                    }
                }
            }
            ?>   
        </div>
    </body>
</html>
