<aside class="sidebar">
    <div class="sidebar-start">
        <div class="sidebar-head">
            <a href="/" class="logo-wrapper" title="Home">
                <span class="sr-only">Home</span>
                <span class="icon logo" aria-hidden="true"></span>
                <div class="logo-text">
                    <span class="logo-title">BORNO</span>
                    <span class="logo-subtitle">Express</span>
                </div>

            </a>
            <button class="sidebar-toggle transparent-btn" title="Menu" type="button">
                <span class="sr-only">Toggle menu</span>
                <span class="icon menu-toggle" aria-hidden="true"></span>
            </button>
        </div>
        <div class="sidebar-body">
            <ul class="sidebar-body-menu">
                <li>
                    <a class="<?php if(isset($_GET['index'])){echo "active";}?>" href="./dashboard.php?index=1"><span class="icon home" aria-hidden="true"></span>Dashboard</a>
                </li>
                <li>
                    <a class="<?php if(isset($_GET['routes'])){echo "active";}?>" href="./dashboard.php?routes=1"><span class="icon home" aria-hidden="true"></span>Routes</a>
                </li>
                <li>
                    <a class="<?php if(isset($_GET['tickets'])){echo "active";}?>" href="./dashboard.php?tickets=all"><span class="icon home" aria-hidden="true"></span>Tickets</a>
                </li>
                <li>
                    <a class="<?php if(isset($_GET['passengers'])){echo "active";}?>" href="./dashboard.php?passengers=1"><span class="icon home" aria-hidden="true"></span>Passengers</a>
                </li>
            </ul>
            <span class="system-menu__title">system</span>
            <ul class="sidebar-body-menu">
                <li>
                    <a href="##"><span class="icon setting" aria-hidden="true"></span>Settings</a>
                </li>
            </ul>
        </div>
    </div>
    <div class="sidebar-footer">
        <a href="##" class="sidebar-user">
            <span class="sidebar-user-img">
                <picture>
                    <source srcset="./assets/img/avatar/avatar-illustrated-01.webp" type="image/webp"><img
                        src="./assets/img/avatar/avatar-illustrated-01.png" alt="User name">
                </picture>
            </span>
            <div class="sidebar-user-info">
                <span class="sidebar-user__title">Ali Mustapha Shettima</span>
                <span class="sidebar-user__subtitle">Source Code manager</span>
            </div>
        </a>
    </div>
</aside>
