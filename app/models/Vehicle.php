<?php 
class Vehicle {
    private $conn;

    public $table = 'vehicles'; // Table name
    // Properties
    public $id;
    public $vehicle_number;
    public $capacity;
    public $type; // New property for vehicle type
    public $model; // New property for model
    public $driver_name;
    public $driver_contact;
    public $seat_count; // New property for seat count
    public $trip; // New property for trip count
    public $status;
    public $created_at;
    public $updated_at;
    public $deleted_at;

    // Constructor with database connection
    public function __construct($db) {
        $this->conn = $db;
    }

    // Create a new vehicle
    public function create() {
        $query = "INSERT INTO vehicles 
                  (vehicle_number, capacity, type, model, driver_name, driver_contact, seat_count, trip, status)
                  VALUES 
                  (?, ?, ?, ?, ?, ?, ?, ?, ?)";

        $stmt = $this->conn->prepare($query);
        $stmt->bind_param(
            "sissssiis", 
            $this->vehicle_number, 
            $this->capacity, 
            $this->type,
            $this->model,
            $this->driver_name, 
            $this->driver_contact, 
            $this->seat_count,
            $this->trip,
            $this->status
        );

        if ($stmt->execute()) {
            return true;
        }

        return false;
    }

    // Read all vehicles
    public function all() {
        $query = "SELECT * FROM vehicles WHERE deleted_at IS NULL";
        $stmt = $this->conn->prepare($query);
        $stmt->execute();
        return $stmt->get_result();
    }

    // Find a vehicle by ID
    public function find($id) {
        $query = "SELECT * FROM " . $this->table . " WHERE id = ? LIMIT 0,1";

        $stmt = $this->conn->prepare($query);
        $stmt->bind_param("i", $id);
        $stmt->execute();

        $result = $stmt->get_result();
        if ($row = $result->fetch_assoc()) {
            // Set object properties
            $this->vehicle_number = $row['vehicle_number'];
            $this->capacity = $row['capacity'];
            $this->type = $row['type'];
            $this->model = $row['model'];
            $this->driver_name = $row['driver_name'];
            $this->driver_contact = $row['driver_contact'];
            $this->seat_count = $row['seat_count'];
            $this->trip = $row['trip'];
            $this->status = $row['status'];
            $this->created_at = $row['created_at'];
            return true;
        }
        return false; // Return false if no record is found
    }

    // Update a vehicle
    public function update() {
        $query = "UPDATE vehicles SET 
                    vehicle_number = ?, 
                    capacity = ?, 
                    type = ?, 
                    model = ?, 
                    driver_name = ?, 
                    driver_contact = ?, 
                    seat_count = ?, 
                    trip = ?, 
                    status = ? 
                  WHERE id = ?";
        $stmt = $this->conn->prepare($query);
        $stmt->bind_param(
            "sissssiisi", 
            $this->vehicle_number, 
            $this->capacity, 
            $this->type, 
            $this->model, 
            $this->driver_name, 
            $this->driver_contact, 
            $this->seat_count, 
            $this->trip, 
            $this->status, 
            $this->id
        );
        return $stmt->execute();
    }

    // Delete a vehicle (soft delete)
    public function delete() {
        $query = "UPDATE vehicles SET deleted_at = NOW() WHERE id = ?";
        $stmt = $this->conn->prepare($query);
        $stmt->bind_param("i", $this->id);
        return $stmt->execute();
    }
}
?>
