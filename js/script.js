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