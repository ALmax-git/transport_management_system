<?php 
class Passenger {
    private $conn;

    // Properties
    public $id;
    public $name = "";
    public $address = '';
    public $phone_number = '';
    public $gender;
    public $age;
    public $created_at;
    public $updated_at;
    public $deleted_at;
    public $ticket_id;
    public $emergency_contact = "";
    public $first_contact_number = "";

    // Constructor with database connection
    public function __construct($db) {
        $this->conn = $db;
    }

    // Create a new passenger
    public function create() {
        $query = "INSERT INTO passengers 
                  (name, address, phone_number, gender, age, ticket_id, emergency_contact, first_contact_number)
                  VALUES 
                  (?, ?, ?, ?, ?, ?, ?, ?)";

        $stmt = $this->conn->prepare($query);
        $stmt->bind_param(
              "ssssssss", 
              $this->name, 
              $this->address, 
              $this->phone_number, 
              $this->gender, $this->age, 
              $this->ticket_id, 
              $this->emergency_contact, 
              $this->first_contact_number
         );

        if ($stmt->execute()) {
            return true;
        }

        return false;
    }

    // Read all passengers
    public function read() {
        $query = "SELECT * FROM passengers WHERE deleted_at IS NULL";
        $stmt = $this->conn->prepare($query);
        $stmt->execute();
        return $stmt->get_result();
    }

    // Update a passenger
    public function update() {
        $query = "UPDATE passengers SET name = ?, address = ?, phone_number = ?, gender = ?, age = ?, ticket_id = ?, emergency_contact = ?, first_contact_number = ? WHERE id = ?";
        $stmt = $this->conn->prepare($query);
        $stmt->bind_param("ssssssssi", $this->name, $this->address, $this->phone_number, $this->gender, $this->age, $this->ticket_id, $this->emergency_contact, $this->first_contact_number, $this->id);
        return $stmt->execute();
    }

    // Delete a passenger (soft delete)
    public function delete() {
        $query = "UPDATE passengers SET deleted_at = NOW() WHERE id = ?";
        $stmt = $this->conn->prepare($query);
        $stmt->bind_param("i", $this->id);
        return $stmt->execute();
    }
}
?>
