<?php

class Helper {

    public static function checkAuthorization() {
        $loggedIn = false;
        if (isset($_SESSION['id'])) {
            $loggedIn = true;
        }
        if (!$loggedIn) {
            ?>
            <p>You are not logged in. Redirecting you to login page . . .</p>
            <?php

            header("refresh:3;url=login.php");
            die();
        }
    }
    
    public static function isAdmin() {
        if (isset($_SESSION['id']) && $_SESSION['userType'] != 'admin') {
            ?>
            <p>You are not authorized. Redirecting you to home page . . .</p>
            <?php
            header("refresh:3;url=index.php");
            die();
        }
    }

    public static function addDisease() {
        require 'dbconnection.php';
        $nameExists = false;
        if(trim($_POST['name']) != ""){
            $nameExists = true;
        }
        $diseaseName = $_POST['name'];
        $symptoms = $_POST['symptom'];
        $effects = $_POST['effect'];
        $foodNames = $_POST['cure'];
        $foodDesc = $_POST['curedesc'];

        $flag = true;
        mysqli_autocommit($con, false);
        $sql = "insert into diseases (name) values('$diseaseName')";
        $result = mysqli_query($con, $sql);
        $id = $con->insert_id;
        if (!$result) {
            $flag = false;
        }

        $sqlEffects = array();
        foreach ($effects as $effect) {
            $sqlEffects[] = "('$id' , '$effect')";
        }
        $result = mysqli_query($con, "INSERT INTO diseases_effects (disease_id, effect) values " . implode(',', $sqlEffects));
        if (!$result) {
            $flag = false;
        }

        $sqlSymptoms = array();
        foreach ($symptoms as $symptom) {
            $sqlSymptoms[] = "('$id' , '$symptom')";
        }
        $result = mysqli_query($con, "INSERT INTO diseases_symptoms (disease_id, symptom) values " . implode(',', $sqlSymptoms));
        if (!$result) {
            $flag = false;
        }

        $sqlFoods = array();

        $valid_formats = array("jpg", "png", "gif");
        $path = "uploads/";

        for ($i = 0; $i < count($foodNames); $i++) {
            if ($_FILES['cure-img']['error'][$i] == 0) {
                $name = $_FILES['cure-img']['name'][$i];
                if (!in_array(pathinfo($name, PATHINFO_EXTENSION), $valid_formats)) {
                    $message[] = "$name is not a valid format";
                    continue; // Skip invalid file formats
                } else {
                    $n = $_FILES["cure-img"]["tmp_name"][$i];
                    move_uploaded_file($n, $path . $id.$name);
                }
            }
            $sqlFoods[] = "('$id' , '$foodNames[$i]', '$foodDesc[$i]','$id$name')";
        }

        $result = mysqli_query($con, "INSERT INTO diseases_foods (disease_id, food_name, food_desc, food_image) values " . implode(',', $sqlFoods));
        if (!$result) {
            $flag = false;
        }

        
        $sqldis = array();

//        $paths = "uploads";
        for ($j = 0; $j < count($_FILES['dis_image']['name']); $j++) {
            if ($_FILES['dis_image']['error'][$j] == 0) {
                $name = $_FILES['dis_image']['name'][$j];
                if (!in_array(pathinfo($name, PATHINFO_EXTENSION), $valid_formats)) {

                    $message[] = "$name is not a valid format";
                    continue;
                } else {
                    $n = $_FILES["dis_image"]["tmp_name"][$j];
                    move_uploaded_file($n, $path .$id.$name);
                }
            }
            $sqldis[] = "('$id','$id$name')";
        }
        $result = mysqli_query($con, "INSERT INTO disease_image(disease_id, image)values" . implode(',', $sqldis));
        if (!$result) {
            $flage = false;
        }
        if ($flag && $nameExists) {
            mysqli_commit($con);
            echo "Added successfully";
        } else {
            mysqli_rollback($con);
            echo "Something went wrong. Please try again with appropriate values.";
        }
    }

}
