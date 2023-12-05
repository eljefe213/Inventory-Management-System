<div class="dashboard_sidebar" id="dashboard_sidebar">
    <h3 class="dashboard_logo" id="dashboard_logo">IMS</h3>
    <div class="dashboard_sidebar_user">
        <img src="./images/user/selena.png" alt="user image" id="userImage">
        <span><?= $user['firstname'] . ' ' . $user['lastname'] ?></span>
    </div>
    <div class="dashboard_sidebar_menus">
        <ul class="dashboard_menu_lists">
            <!-- class="menuActive" -->
            <li>
                <a href="./dashboard.php" ><i class="fa fa-dashboard"></i><span class="menuText"> Dashboard</span></a>
            </li> 
            <li> 
                <a href="./dashboard.php"><i class="fa-solid fa-user-plus"></i><span class="menuText"> Add user</span></a>
            </li>
        </ul>
    </div>
</div>