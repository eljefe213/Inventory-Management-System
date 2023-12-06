<?php
    
    //start the session 
    session_start();
    if (!isset($_SESSION['user'])) header('Location: login.php');
        
    
    $user =$_SESSION['user'];
    


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>IMS - Dashboard</title>
    <link rel="stylesheet" href="css/login.css">
    <script src="https://kit.fontawesome.com/484691c9b6.js" crossorigin="anonymous"></script>
</head>
<body>
    <div id="dashboardMainContainer">
        <?php include('partials/app-sidebar.php') ?>
        <div class="dashboard_content_container" id="dashboard_content_container">
            <?php include('partials/app-topnav.php') ?>
            <div class="dashboard_content">
                <div class="dashboard_content_main">

                </div>
            </div>
        </div>
    </div>

<script src="js/script.js"></script>
</body>
</html>
