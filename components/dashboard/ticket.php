 
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
$ticketId = isset($_GET['ticket']) ? htmlspecialchars($_GET['ticket']) : '';

// Function to display ticket and passenger information
function displayTicketInfo($ticket, $passenger = null) {
    echo '
    <div class="ticket-card-wrapper row" style="margin-bottom:8px;">
       <div class="col-6">
         <article class="stat-cards-item ticket-card">
           <div class="stat-cards-icon primary">
             <i data-feather="file" aria-hidden="true"></i>
           </div>
           <div class="stat-cards-info">
             <p class="stat-cards-info__num ticket_emergency_contact">Emergency Contact: ' . $ticket->emergency_contact . '</p>
             <p class="stat-cards-info__title ticket_departure">Departure: ' . $ticket->departure . '</p>
             <p class="stat-cards-info__title ticket_destination">Destination: ' . $ticket->destination . '</p>
             <p class="stat-cards-info__title ticket_ref">REF: ' . $ticket->ticket_id . '</p>
             <p class="stat-cards-info__progress">
               <span class="stat-cards-info__profit success">
                 <i data-feather="trending-up" aria-hidden="true"></i>' . $ticket->status . ' ' . $ticket->created_at . '
               </span>
             </p>
           </div>
         </article>
       </div>';

    if ($passenger) {
        echo '
        <div class="col-6">
             <article class="stat-cards-item passenger-card">
               <div class="stat-cards-info">
                 <p class="stat-cards-info__num passenger_name">Name: ' . $passenger->name . '</p>
                 <p class="stat-cards-info__title passenger_phone">Phone Number: ' . $passenger->phone_number . '</p>
                 <p class="stat-cards-info__title passenger_emergency_contact">Emergency Contact: ' . $passenger->emergency_number . '</p>
                 <p class="stat-cards-info__title passenger_address">Address: ' . $passenger->address . '</p>
                 <p class="stat-cards-info__progress">
                   <span class="stat-cards-info__profit success">' . $passenger->created_at . '
                   </span>
                 </p>
               </div>
             </article>
        </div>';
    }
    echo '</div>';
}

// Display specific ticket details
if ($ticketId && $ticket->find($ticketId)) {
    $passenger->find($ticketId);
    displayTicketInfo($ticket, $passenger);
} else {
    // Display all tickets
    foreach ($all_ticket as $ticketData) {
       $ticket->find($ticketData['ticket_id']);
       $passenger->find($ticket->ticket_id);
       displayTicketInfo($ticket, $passenger);
    }
}
?>



<script>
// Function to filter tickets and passengers based on search input
function searchTickets() {
    let input = document.getElementById('searchInput').value.toLowerCase();
    
    // Get all ticket elements (which are now grouped together with passenger cards)
    let ticketPairs = document.querySelectorAll('.ticket-card-wrapper');
    
    // Loop through all ticket pairs (ticket + passenger)
    ticketPairs.forEach(pair => {
        let ticketFound = false;

        // Check if any of the ticket fields contain the search input
        let emergencyContact = pair.querySelector('.ticket_emergency_contact') ? pair.querySelector('.ticket_emergency_contact').innerText.toLowerCase() : '';
        let departure = pair.querySelector('.ticket_departure') ? pair.querySelector('.ticket_departure').innerText.toLowerCase() : '';
        let destination = pair.querySelector('.ticket_destination') ? pair.querySelector('.ticket_destination').innerText.toLowerCase() : '';
        let ref = pair.querySelector('.ticket_ref') ? pair.querySelector('.ticket_ref').innerText.toLowerCase() : '';
        let createdAt = pair.querySelector('.ticket_created_at') ? pair.querySelector('.ticket_created_at').innerText.toLowerCase() : '';
        
        // Check passenger fields if applicable
        let name = pair.querySelector('.passenger_name') ? pair.querySelector('.passenger_name').innerText.toLowerCase() : '';
        let phone = pair.querySelector('.passenger_phone') ? pair.querySelector('.passenger_phone').innerText.toLowerCase() : '';
        let passengerEmergencyContact = pair.querySelector('.passenger_emergency_contact') ? pair.querySelector('.passenger_emergency_contact').innerText.toLowerCase() : '';
        let address = pair.querySelector('.passenger_address') ? pair.querySelector('.passenger_address').innerText.toLowerCase() : '';

        // Check if any ticket or passenger field matches the search input
        if (
            emergencyContact.includes(input) ||
            departure.includes(input) ||
            destination.includes(input) ||
            ref.includes(input) ||
            createdAt.includes(input) ||
            name.includes(input) ||
            phone.includes(input) ||
            passengerEmergencyContact.includes(input) ||
            address.includes(input)
        ) {
            pair.style.display = ''; // Show the whole ticket + passenger pair
        } else {
            pair.style.display = 'none'; // Hide the whole ticket + passenger pair
        }
    });
}
</script>
