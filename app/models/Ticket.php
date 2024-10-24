<?php 
class Ticket {
    private $conn;

    // Properties 	 	 	 	 	 	
    public $id;
    public $ticket_id = "";
    public $vehicle_id = '';
    public $emergency_contact;
    public $status;
    public $created_at ;
    public $updated_at ;
    public $deleted_at;
    public $destination;
    public $departure = "Borno Express Maiduguri";

    // Constructor with database connection
    public function __construct($db) {
        $this->conn = $db;
    }

  // Create a new ticket
public function create() {
    $query = "INSERT INTO tickets 
              (ticket_id, vehicle_id, emergency_contact, status, destination, departure)
              VALUES 
              (?, ?, ?, ?, ?, ?)";

    // Prepare the statement
    $stmt = $this->conn->prepare($query);
    
    // Assuming vehicle_id is an integer, the correct types should be 'sissss'
    $stmt->bind_param(
        "sissss", 
        $this->ticket_id, 
        $this->vehicle_id, 
        $this->emergency_contact, 
        $this->status, 
        $this->destination, 
        $this->departure
    );

    // Execute the query
    if ($stmt->execute()) {
        return true;
    }

    // Return false if the execution failed
    return false;
}


    // Read all tickets
    public function read() {
        $query = "SELECT * FROM tickets WHERE deleted_at IS NULL";
        $stmt = $this->conn->prepare($query);
        $stmt->execute();
        return $stmt->get_result();
    }

    // Update a ticket
    public function update() {
        $query = "UPDATE tickets SET ticket_id = ?, vehicle_id = ?, emergency_contact = ?, status = ?, destination = ?, departure = ?, WHERE id = ?";
        $stmt = $this->conn->prepare($query);
        $stmt->bind_param("ssssssssi", $this->ticket_id, $this->vehicle_id, $this->emergency_contact, $this->status, $this->destination, $this->departure, $this->id);
        return $stmt->execute();
    }

    // Delete a ticket (soft delete)
    public function delete() {
        $query = "UPDATE tickets SET deleted_at = NOW() WHERE id = ?";
        $stmt = $this->conn->prepare($query);
        $stmt->bind_param("i", $this->id);
        return $stmt->execute();
    }
}
?>
