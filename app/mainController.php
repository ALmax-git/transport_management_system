<?php
session_start();

// Display errors for debugging
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);

error_reporting(E_ALL);
require_once __DIR__ . '/models/User.php';
require_once __DIR__ . '/models/Passenger.php';
require_once __DIR__ . '/../database/Database.php';

echo "files loaded";
$database = new Database;
$pdo = $database->pdo_connect();

echo "Database Connected";

// Handle form submissions
if ($_SERVER['REQUEST_METHOD'] == 'POST') {

   echo "Post";
   
   if(isset($_POST['generate_ticket'])){
      echo "Generating Ticket";
   }else{
      echo "Error";
   }
}
?>
