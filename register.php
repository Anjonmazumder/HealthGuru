<?php
require_once 'dbconnection.php';
if (isset($_POST['submit'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];
    $name = $_POST['name'];
    $sex = $_POST['sex'];
    $cont=$_POST['continent'];
    $encrypt_password = md5($password);
    if (mysqli_query($con, "insert into users(email, name, password, sex,continent) values('$email','$name','$encrypt_password','$sex','$cont')")) {
        echo "Successfully Registered";
    }
}
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Registration</title>
        <?php require_once 'includedFiles.php'; ?>
    </head>
    <body>
        <div class="container">
            <?php require_once 'menu.php'; ?>
            <center><h3>Registration Form</h3></center>
            <form action="#" method="POST"  class="myform">
                <div class="form-group">
                    <label for="email"> Email</label>
                    <input type="text" name="email" class="form-control" id="email_id" placeholder=" email" required>
                </div>
                <div class="form-group" id="name-group">
                    <label for="">Name</label>
                    <input type="text" name="name" class="form-control " placeholder="name" required>
                </div>

                <div class="form-group" id="password-group">
                    <label for="">Password</label>
                    <input type="password" name="password" class="form-control " placeholder="password" required>
                </div>
                <div class="form-group">
                    <label for="sex">Sex</label>
                    <input type="text" name="sex" class="form-control" id="sex" placeholder="sex" required>
                </div>
                
                <div class="form-group">
                    
                    <label for="">Continent</label>
                    <select id="cont_name" name="continent">                      
                    <option value="0">--Select Continent Name--</option>
                    <option value="Asia">Asia</option>
                    <option value="Africa">Africa</option>
                    <option value="Europe">Europe</option>
                    <option value="Australia">Australia</option>
                    <option value="NorthAmerica">North America</option>
                    <option value="SouthAmerica">South America</option>
                    <option value="Antarctica">Antarctica</option>
                </select> 
                    
                </div>
                <input type="submit" name="submit" value="Register" class="btn btn-primary">


            </form>
        </div>

    </body>
</html>
