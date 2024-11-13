<?php
session_start();

// Display errors for debugging
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require_once __DIR__ . '/models/User.php';
require_once __DIR__ . '/models/Ticket.php';
require_once __DIR__ . '/models/Passenger.php';
require_once __DIR__ . '/../database/Database.php';

$database = new Database;
$pdo = $database->pdo_connect();
$status;
$departure = "Borno Express Maiduguri";

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

   if(isset($_POST['generate_ticket'])){
      $key = uniqid(); 
      $status = "Success";
      $passenger = new Passenger($database->getConnection());
      
      $ticket = new Ticket($database->getConnection()); 
      $ticket->vehicle_id = 1;
      $ticket->emergency_contact = $_POST['emergency_contact'];
      $ticket->status = $status ?? "Success";
      $ticket->destination = $_POST['destination'];
      $ticket->departure = $departure;
      
      $passenger->ticket_id = $key;
      $ticket->ticket_id = $key;
      
      $passenger->name = $_POST['name'];
      $passenger->address = $_POST['address'];
      $passenger->phone_number = $_POST['phone_number'];
      $passenger->gender = $_POST['gender'] ?? "Human";
      $passenger->age = $_POST['age'];
      $passenger->gender = $_POST['gender'];
      $passenger->emergency_number = $_POST['emergency_contact'];
      $passenger->first_contact_number = $_POST['first_contact_number'];
      
      // Create the ticket and passenger
      $ticket->create();
      $passenger->create();
      header("Location: ../dashboard.php?ticket=" . $ticket->ticket_id);
      exit();

   } else {
      echo 911;
      $status = "Fail";
      echo "Error";
   }
}
?>
