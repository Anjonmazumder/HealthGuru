<?php
session_start();
require_once'dbconnection.php';
$current_month = date('M');
$nmonth = date("m", strtotime($current_month));
$sql1 = "SELECT month(login_time) AS month, count(distinct(user_id)) AS count FROM login_logs WHERE month(login_time)='$nmonth' group by month(login_time)";
$result = mysqli_query($con, $sql1);
$countObj = mysqli_fetch_assoc($result);
?>
<html>
    <head>
        <meta charset="UTF-8">
        <?php require_once 'includedFiles.php'; ?>

        <title>Login</title>
    </head>
    <body>
        <div class="container">
            <?php require_once 'menu.php'; ?>
            <h2>Login Form</h2>
            <?php
            if (isset($_POST['submit'])) {
                $username = $_POST['email'];
                $password = md5($_POST['password']);
                if (!$_POST['email'] || !$_POST['password']) {
                    echo("<SCRIPT LANGUAGE='JavaScript'>
                                    window.alert('you do not complete all the requirements')
                                    </script>");
                }
                $sql = mysqli_query($con, "select * from users where email='$username' AND password='$password'");
                if (mysqli_num_rows($sql) > 0) {
                    $now = date('Y-m-d H:i:s');
                    $user = mysqli_fetch_assoc($sql);
                    $id = $user['id'];
                    $type = $user['type'];
                    mysqli_query($con, "INSERT INTO login_logs(user_id, login_time) VALUES('$id', '$now')");
                    $_SESSION['id'] = $id;
                    echo $id;
                    $_SESSION['userType'] = $type;
                    echo '<script language="javascript">';
                    echo 'window.alert("login successfull")';
                    echo'</script>';
                    header('Location:index.php');
                } else {
                    echo '<script language="javascript">';
                    echo 'window.alert("Login unsuccessfull")';
                    echo '</script>';
                }
            }
            ?>
        
                <form action="#" method="POST"class="myform">
                    <div class="form-group">
                        <label for="email"> Email</label>
                        <input type="text" name="email" class="form-control" id="email_id" placeholder=" email" required>
                    </div>
                    <div class="form-group" id="password-group">
                        <label for="">Password</label>
                        <input type="password" name="password" class="form-control " placeholder="password" required>
                    </div>
                    <input type="submit" name="submit" value="Login" class="btn btn-success">
                </form>       
                <p>Total Distinct Users of This Month: <?php echo $countObj['count']; ?></p>
        
        </div>
    </body>
</html>
