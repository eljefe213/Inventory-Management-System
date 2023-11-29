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
        <div class="dashboard_sidebar" id="dashboard_sidebar">
            <h3 class="dashboard_logo" id="dashboard_logo">IMS</h3>
            <div class="dashboard_sidebar_user">
                <img src="./images/user/selena.png" alt="user image" id="userImage">
                <span>Gomez</span>
            </div>
            <div class="dashboard_sidebar_menus">
                <ul class="dashboard_menu_lists">
                    <li class="menuActive">
                        <a href="" ><i class="fa fa-dashboard"></i><span class="menuText"> Dashboard</span></a>
                    </li> 
                    <li> 
                        <a href=""><i class="fa-solid fa-bullhorn"></i><span class="menuText"> Campaigns</span></a>
                    </li>
                    <li> 
                        <a href=""><i class="fa-solid fa-dollar-sign"></i><span class="menuText"> Revenue Management</span></a>
                    </li>
                    <li> 
                        <a href=""><i class="fa-solid fa-book"></i><span class="menuText"> Accounts receivable</span></a>
                    </li>
                    <li> 
                        <a href=""><i class="fa-solid fa-gear"></i><span class="menuText"> Configuration</span></a>
                    </li>
                    <li> 
                        <a href=""><i class="fa-solid fa-chart-line"></i><span class="menuText"> Stats</span></a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="dashboard_content_container" id="dashboard_content_container">
            <div class="dashboard_topNav">
                <a href="" id="toggle_btn"><i class="fa fa-navicon"></i></a>  
                <a href="" id="logout_btn"><i class="fa fa-power-off"></i>Log-out</a>
            </div>
            <div class="dashboard_content">
                <div class="dashboard_content_main">

                </div>
            </div>
        </div>
    </div>

<script>
    var sidebarIsOpen = true;
    toggle_btn.addEventListener('click' , (event) => {
        event.preventDefault();
        if(sidebarIsOpen){
                
            dashboard_sidebar.style.width = '10%';
            dashboard_sidebar.style.transition = '0.3s all'
            dashboard_content_container.style.width = '90%';
            dashboard_logo.style.fontSize = '60px';
            userImage.style.fontSize = '60px';

            menuIcons = document.getElementsByClassName('menuText');
            for(var i = 0; i < menuIcons.length; i++){
                menuIcons[i].style.display = 'none';
            }

            document.getElementsByClassName('dashboard_menu_lists')[0].style.textAlign = 'center';
            sidebarIsOpen = false;
        }else{
            
            dashboard_sidebar.style.width = '20%';
            dashboard_content_container.style.width = '80%';
            dashboard_logo.style.fontSize = '80px';
            userImage.style.fontSize = '80px';

            menuIcons = document.getElementsByClassName('menuText');
            for(var i = 0; i < menuIcons.length; i++){
                menuIcons[i].style.display = 'inline-block';
            }

            document.getElementsByClassName('dashboard_menu_lists')[0].style.textAlign = 'left';
            sidebarIsOpen = true;
        }

    });
</script>
</body>
</html>
