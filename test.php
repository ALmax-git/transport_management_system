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
$x = uniqid();
echo $x;
// Start of HTML table
echo '<table>';

foreach($users as $user){
  // Template row with dynamic data
  echo '<tr>';
  echo '  <td>';
  echo '    <label class="users-table__checkbox">';
  echo '      <input type="checkbox" class="check">';
  echo '      <div class="categories-table-img">';
  echo '        <picture>';
  echo '          <source srcset="./assets/img/categories/01.webp" type="image/webp">';
  echo '          <img src="./assets/img/categories/01.jpg" alt="category">';
  echo '        </picture>';
  echo '      </div>';
  echo '    </label>';
  echo '  </td>';
  echo '  <td>' . htmlspecialchars($user['travel_blog']) . '</td>'; // Replace with actual field
  echo '  <td>';
  echo '    <div class="pages-table-img">';
  echo '      <picture>';
  echo '        <source srcset="./assets/img/avatar/avatar-face-04.webp" type="image/webp">';
  echo '        <img src="./assets/img/avatar/avatar-face-04.png" alt="' . htmlspecialchars($user['name']) . '">';
  echo '      </picture>';
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

// End of HTML table
echo '</table>';
?>
