<?php
$loggedIn = false;
$isAdmin = false;
if (isset($_SESSION['id'])) {
    $loggedIn = true;
    if ($_SESSION['userType'] === 'admin') {
        $isAdmin = true;
    }
}
?>
<h3>Health Guru</h3>
<nav class="navbar navbar-default">
    <div class="container-fluid">
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <?php if ($loggedIn) { ?>
                <ul class="nav navbar-nav navbar-left">
                    <li><a href="Diseaselist.php">Diseases</a></li>
                    <li class="dropdown"><a href="searchDiseases.php">Search</a></li>
                    <?php
                    if ($isAdmin) {
                        ?>
                        <li class="dropdown"><a href="addDisease.php">Add Disease</a></li>
                        <?php
                    }
                    ?>
                    <li class="dropdown"><a href="logout.php">Logout</a></li>
                    
                </ul>
            <?php
            } else {
                ?>
                <ul class="nav navbar-nav navbar-left">
                    <li><a href="register.php">Register</a></li>
                    <li class="dropdown"><a href="login.php">Login</a></li>
                </ul> 
                <?php
            }
            ?>
        </div>
    </div>
</nav>