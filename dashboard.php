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
                    <div class="row stat-cards">



          <div class="col-12">
            <!--
            <div class="chart">
              <canvas id="myChart" aria-label="Site statistics" role="img"></canvas>
            </div> 
            -->
            <div class="users-table table-wrapper">
            <h1 class="main-title">System Users</h1>
              <table class="posts-table">
                <thead>
                  <tr class="users-table-info">
                    <th>
                      <label class="users-table__checkbox ms-20">
                        <input type="checkbox" class="check-all">S/N
                      </label>
                    </th>
                    <th>Email</th>
                    <th>Name</th>
                    <th>Status</th>
                    <th>Date</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>
                  <?php 
// 127.0.0.1/test.php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require_once __DIR__ . '/app/models/User.php'; 
require_once __DIR__ . '/database/Database.php';

$database = new Database;
$pdo = $database->pdo_connect();

$users = new User($database->getConnection()); 
$users = $users->read(); 
$count = 0;
foreach($users as $user){
  // Template row with dynamic data
  echo '<tr>';
  echo '  <td>';
  echo '    <label class="users-table__checkbox">';
  echo '      <input type="checkbox" class="check">';
  echo '      <div class="categories-table-img">';
  //echo '        <picture>';
  //echo '          <source srcset="./assets/img/categories/01.webp" type="image/webp">';
  //echo '          <img src="./assets/img/categories/01.jpg" alt="category">';
  //echo '        </picture>';
  echo ++$count;
  echo '      </div>';
  echo '    </label>';
  echo '  </td>';
  echo '  <td>' . htmlspecialchars($user['email']) . '</td>'; // Replace with actual field
  echo '  <td>';
  echo '    <div class="pages-table-img">';
 // echo '      <picture>';
 // echo '        <source srcset="./assets/img/avatar/avatar-face-04.webp" type="image/webp">';
 // echo '        <img src="./assets/img/avatar/avatar-face-04.png" alt="' . htmlspecialchars($user['name']) . '">';
 // echo '      </picture>';
  echo '      ' . htmlspecialchars($user['name']);
  echo '    </div>';
  echo '  </td>';
  echo '  <td><span class="badge-pending">' . htmlspecialchars($user['status']) . '</span></td>'; // Replace with actual status field
  echo '  <td>' . htmlspecialchars($user['created_at']) . '</td>'; // Replace with actual date field
  echo '  <td>';
  echo '    <span class="p-relative">';
  echo '      <button class="dropdown-btn transparent-btn" type="button" title="More info">';
  echo '        <div class="sr-only">More info</div>';
  echo '        <i data-feather="more-horizontal" aria-hidden="true"></i>';
  echo '      </button>';
  echo '      <ul class="users-item-dropdown dropdown">';
  echo '        <li><a href="##">Edit</a></li>';
  echo '        <li><a href="##">Quick edit</a></li>';
  echo '        <li><a href="##">Trash</a></li>';
  echo '      </ul>';
  echo '    </span>';
  echo '  </td>';
  echo '</tr>';
}

?>

                  
                </tbody>
              </table>
              
            <h1 class="main-title">System Routes</h1>
            </div>
     
  
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
