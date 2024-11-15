<?php
// 127.0.0.1/components/dashboard/index.php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require_once __DIR__ . '/../../app/models/Passenger.php'; // Corrected the path
require_once __DIR__ . '/../../app/models/Ticket.php'; // Corrected the path
require_once __DIR__ . '/../../database/Database.php'; // Corrected the path

$database = new Database;
$pdo = $database->pdo_connect();

$ticket = new Ticket($database->getConnection());
$passenger = new Passenger($database->getConnection());
$all_ticket = $ticket->read();
$_GET['ticket'] = isset($_GET['ticket']) ? $_GET['ticket'] : '';

if ($_GET['ticket'] != '' && $ticket->find($_GET['ticket'])) {
    echo '
    <div class="row stat-cards">
       <div class="col">
         <article class="stat-cards-item">
           <div class="stat-cards-icon primary">
             <i data-feather="file" aria-hidden="true"></i>
           </div>
           <div class="stat-cards-info">
             <p class="stat-cards-info__num">Emergency Contact: ' . $ticket->emergency_contact . '</p>
             <p class="stat-cards-info__title">Departure: ' . $ticket->departure . '</p>
             <p class="stat-cards-info__title">Destination: ' . $ticket->destination . '</p>
             <p class="stat-cards-info__title">REF: '. $ticket->ticket_id . '</p>
             <p class="stat-cards-info__progress">
               <span class="stat-cards-info__profit success">
                 <i data-feather="trending-up" aria-hidden="true"></i>' . $ticket->status . ' ' . $ticket->created_at .'
               </span>

             </p>
           </div>
         </article>
       </div>
      </div>
    ';


    if ($passenger->find($_GET['ticket'])) {
    echo '
    <div class="row stat-cards">
       <div class="col">
         <article class="stat-cards-item">
           <div class="stat-cards-icon primary">
             <i data-feather="file" aria-hidden="true"></i>
           </div>
           <div class="stat-cards-info">
             <p class="stat-cards-info__num">Emergency Contact: ' . $passenger->emergency_number . '</p>
             <p class="stat-cards-info__title">Name: ' . $passenger->name . '</p>
             <p class="stat-cards-info__title">Phone Number: ' . $passenger->phone_number . '</p>
             <p class="stat-cards-info__title">Address: '. $passenger->address . '</p>
             <p class="stat-cards-info__progress">
               <span class="stat-cards-info__profit success">
                 <i data-feather="trending-up" aria-hidden="true"></i>' . $ticket->created_at .'
               </span>

             </p>
           </div>
         </article>
       </div>
      </div>
    ';
    }else {
       echo "Ticket not found";
   }
} else {
    echo "Ticket not found";
}
?>

