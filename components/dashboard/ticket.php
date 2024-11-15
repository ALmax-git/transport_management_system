<?php
// Enable error reporting
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require_once __DIR__ . '/../../app/models/Passenger.php';
require_once __DIR__ . '/../../app/models/Ticket.php';
require_once __DIR__ . '/../../database/Database.php';

// Database connection
$database = new Database();
$pdo = $database->pdo_connect();

$ticket = new Ticket($database->getConnection());
$passenger = new Passenger($database->getConnection());

// Retrieve all tickets
$all_ticket = $ticket->read();
$ticketId = isset($_GET['tickets']) ? htmlspecialchars($_GET['tickets']) : '';
// echo '<div class="row">';
function displayTicketInfo($ticket, $passenger = null) {
    // print_r($ticket);
    echo '
    <div class="col-6" style="margin-bottom:8px;">
       <div class="">
         <article class="stat-cards-item">
           <div class="stat-cards-icon primary">
             <i data-feather="file" aria-hidden="true"></i>
           </div>
           <div class="stat-cards-info">
             <p class="stat-cards-info__num">Ticket</p>
             <p class="stat-cards-info__num">Emergency Contact: ' . $ticket->emergency_contact . '</p>
             <p class="stat-cards-info__title">Departure: ' . $ticket->departure . '</p>
             <p class="stat-cards-info__title">Destination: ' . $ticket->destination . '</p>
             <p class="stat-cards-info__title">REF: ' . $ticket->ticket_id . '</p>
             <p class="stat-cards-info__progress">
               <span class="stat-cards-info__profit success">
                 <i data-feather="trending-up" aria-hidden="true"></i>' . $ticket->status . ' ' . $ticket->created_at . '
               </span>
             </p><p><br></p>
           </div>
         </article>
       </div>
    </div>';

    if ($passenger) {
        echo '
        <div class="col-6" style="margin-bottom:8px;">
           <div class="" >
             <article class="stat-cards-item">
               <div class="stat-cards-info">
             <p class="stat-cards-info__num">Passenger</p>
                 <p class="stat-cards-info__title">Name: ' . $passenger->name . '</p>
                 <p class="stat-cards-info__title">Phone Number: ' . $passenger->phone_number . '</p>
                 <p class="stat-cards-info__title">Emergency Contact: ' . $passenger->emergency_number . '</p>
                 <p class="stat-cards-info__title">Address: ' . $passenger->address . '</p>
                 <p class="stat-cards-info__progress">
                   <span class="stat-cards-info__profit success">' . $passenger->created_at . '
                   </span>
                 </p>
               </div>
             </article>
           </div>
        </div>';
    }
}
// echo '</div>';
// Display specific ticket details
if ($ticketId && $ticket->find($ticketId)) {
    $passenger->find($ticketId);
    displayTicketInfo($ticket, $passenger);
} else {
    // Display all tickets
    foreach ($all_ticket as $ticketData) {
// echo "<hr>";
// print_r($ticketData);
// echo "<hr>";
 // print_r($ticketData['ticket_id']);
// echo "<hr>";
       $ticket->find($ticketData['ticket_id']);
 // print_r($ticket);
       $passenger->find($ticket->ticket_id);

      displayTicketInfo($ticket, $passenger);
    }
}


?>
