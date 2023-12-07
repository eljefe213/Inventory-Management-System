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
                    <div id="userAddFormContainer">
                        <form action="" class="appForm">
                            <div class="appFormInputContainer">
                                <label for="first_name">First Name</label>
                                <input type="text" class="appFormInput" id="first_name" name="first_name" />
                            </div>
                            <div class="appFormInputContainer">
                                <label for="last_name">Last Name</label>
                                <input type="text" class="appFormInput" id="last_name" name="last_name" />
                            </div>
                            <div class="appFormInputContainer">
                                <label for="email">Email</label>
                                <input type="text" class="appFormInput" id="email" name="email" />
                            </div>
                            <div class="appFormInputContainer">
                                <label for="password">Password</label>
                                <input type="password" class="appFormInput" id="password" name="password" />
                            </div>
                            <button type="submit"><i class="fa fa-plus"></i> Add User</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

<script src="js/script.js"></script>
</body>
</html>
