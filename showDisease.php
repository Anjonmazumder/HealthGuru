<?php
session_start();
error_reporting(E_ALL ^ E_NOTICE);
require_once 'dbconnection.php';
require_once 'Helper.php';

Helper::checkAuthorization();
$disease_id = $_GET['id'];
$dis = mysqli_query($con, "select * from diseases where id='$disease_id'");

$sql = "SELECT * FROM Diseases WHERE id='$disease_id'";
$disease = mysqli_query($con, $sql);

$sql2 = "SELECT * FROM diseases_symptoms WHERE disease_id='$disease_id'";
$symptoms = mysqli_query($con, $sql2);

$sql3 = "SELECT * FROM diseases_effects WHERE disease_id='$disease_id'";
$effects = mysqli_query($con, $sql3);

$sql4 = "SELECT * FROM diseases_foods WHERE disease_id='$disease_id'";
$foods = mysqli_query($con, $sql4);

$sql5 = "SELECT * FROM disease_image WHERE disease_id='$disease_id'";
$images = mysqli_query($con, $sql5);

$sql6="SELECT name FROM diseases";
$name=mysqli_query($con,$sql6);
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Diseases detail</title>
        <?php require_once 'includedFiles.php'; ?>
    </head>
    <body>
        <div class="container">
            <?php require_once 'menu.php'; ?>
            <?php $row =  mysqli_fetch_array($disease)?>
            <div>
                <h3><?php echo $row['name']; ?></h3>
                <a href="showGraph.php?name=<?php echo $row['name']; ?>">[Graph]</a> 
            </div>
            <div class="effect-container">
                <h4>Effects</h4>
                <ul>
                    <?php while ($row = mysqli_fetch_array($effects)) { ?>
                        <li><?php echo $row['effect']; ?></li>
                    <?php }
                    ?>
                </ul>
            </div>
            <div class="symptom-container">
                <h4>Symptoms</h4>
                <ul>
                    <?php while ($row = mysqli_fetch_array($symptoms)) { ?>
                        <li><?php echo $row['symptom']; ?></li>
                    <?php }
                    ?>
                </ul>
            </div>
            <div class="symptom-container">
                <h4>Cure Foods</h4>
                <?php while ($row = mysqli_fetch_array($foods)) { ?>
                    <div>
                        <h4><?php echo $row['food_name']; ?></h4>
                        <p><?php echo $row['food_desc']; ?></p>
                        <img class="img-food" src="<?php echo 'uploads/' . $row['food_image'] ?>">
                    </div>
                <?php }
                ?>
            </div>
            <div class="img-container">
                <h4>Images</h4>
                <?php while ($row = mysqli_fetch_array($images)) { ?>
                    <img class="disease-image" src="<?php echo 'uploads/' . $row['image'] ?>">
                <?php }
                ?>
            </div>
                      
        </div>
    </body>
</html>
