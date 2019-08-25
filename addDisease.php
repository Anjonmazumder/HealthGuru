<?php
session_start();
error_reporting(E_ALL ^ E_NOTICE);
require_once 'dbconnection.php';
require_once 'Helper.php';
Helper::checkAuthorization();
Helper::isAdmin();
if (isset($_POST['submit'])) {
    Helper::addDisease();
}
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Add a disease</title>
        <?php require_once 'includedFiles.php'; ?>
    </head>
    <body>
        <div class="container">
            <?php require_once 'menu.php'; ?>
            <h3>Add a Disease</h3>
            <form class="myform"  enctype="multipart/form-data" method="post" >
                <div class="form-group">
                    <label for="d_name">Disease Name</label>
                    <input type="text" name="name" class="form-control" id="d_name" placeholder="Disease name" required>
                </div>
                <div class="form-group" id="symptom-group">
                    <label for="">Symptoms</label>
                    <input type="text" name="symptom[]" class="form-control plus-txt" placeholder="Symptom"  required>
                </div>
                <div class="form-group">
                    <button type="button" id="btn-plus-symptom" class="btn btn-info">+</button>
                </div>
                <div class="form-group" id="effect-group">
                    <label for="">Effects</label>
                    <input type="text" name="effect[]" class="form-control plus-txt" placeholder="Effect"  required>
                </div>
                <div class="form-group">
                    <button type="button" id="btn-plus-effect" class="btn btn-info">+</button>
                </div>
                <div class="form-group" id="cure-group">
                    <label for="">Cure</label>
                    <input type="text" name="cure[]" class="form-control plus-txt" placeholder="Food Name"  required>
                    <textarea id="" name="curedesc[]" class="form-control plus-txt" cols="30" rows="10" placeholder="Description"  required></textarea>
                    <input type="file" name="cure-img[]" class="form-control plus-txt" required>

                </div>
                <div class="form-group">
                    <button type="button" id="btn-plus-cure" class="btn btn-info">+</button>
                </div>
                <div class="form-group" id="dis-group">
                    <label for="">Disease image</label>
                    <input type="file" name="dis_image[]" class="form-control plus-txt"  required>
                </div>
                <div class="form-group">
                    <button type="button" id="btn-plus-dis" class="btn btn-info">+</button>  
                </div>
                <button type="submit" name="submit" class="btn btn-success">Submit</button>
            </form>
        </div>
    </body>
</html>
