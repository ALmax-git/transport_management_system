<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Borno Express | Dashboard</title>
    <!-- Favicon -->
    <link rel="shortcut icon" href="./assets/img/svg/logo.svg" type="image/x-icon">
    <!-- Custom styles -->

    <link rel="stylesheet" href="./assets/css/style.min.css">
</head>

<body>
    <div class="layer"></div>
    <!-- ! Body -->
    <a class="skip-link sr-only" href="#skip-target">Skip to content</a>
    <div class="page-flex">
        <!-- ! Sidebar -->
        <?php include './components/dashboard/aside.php'; ?>
        <div class="main-wrapper">
            <!-- ! Main nav -->
            <?php include './components/dashboard/navigation.php'; ?>

            <!-- ! Main -->
            <main class="main users chart-page" id="skip-target">
                <div class="container">
                    <h2 class="main-title">Dashboard</h2>
                    <div class="row">
                        <?php
                           if(isset($_GET['routes'])){
                             include './components/dashboard/route.php';
                             //echo 1;
                           }
                           elseif(isset($_GET['passengers'])){
                             include './components/dashboard/passenger.php';
                             //echo 2;
                           }
                           elseif(isset($_GET['tickets'])){
                             include './components/dashboard/ticket.php';
                             //echo 2;
                           }
                           else{
                             include './components/dashboard/index.php';
                             //echo 3;
                           }
                        ?>
                    </div>
                </div>
            </main>
            <!-- ! Footer -->
            <footer class="footer">
                <div class="container">
                    &COPY; Copyright 2024 <a href="#">ALmax</a> | Created by <a href="https://github.com/ALmax-git"
                        target="_blank">ALmax Team</a><br>
                </div>
            </footer>
        </div>
    </div>
    <!-- Chart library -->
    <script src="./assets/plugins/chart.min.js"></script>
    <!-- Icons library -->
    <script src="./assets/plugins/feather.min.js"></script>
    <!-- Custom scripts -->
    <script src="./assets/js/script.js"></script>
</body>

</html>
