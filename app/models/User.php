<?php
// use /database/database.php;
class User {
    private $conn;

    // Properties
    public $id;
    public $name = "Anonymous";
    public $email;
    public $password;
    public $status = "Active";
    public $is_admin = false;
    public $created_at;
    public $updated_at;
    public $deleted_at;
    public $address = '';
    public $phone_number = '';
    public $profile_picture;

    // Constructor with database connection
    public function __construct($db) {
        $this->conn = $db;
    }

    // Create a new user
    public function create() {
        $query = "INSERT INTO users (name, email, password, status, is_admin, address, phone_number, profile_picture)
                  VALUES (?, ?, ?, ?, ?, ?, ?, ?)";

        $stmt = $this->conn->prepare($query);
        $stmt->bind_param("sssiisss", $this->name, $this->email, $this->password, $this->status, $this->is_admin, $this->address, $this->phone_number, $this->profile_picture);

        if ($stmt->execute()) {
            return true;
        }

        return false;
    }

    // Read all users
    public function read() {
        $query = "SELECT * FROM users WHERE deleted_at IS NULL";
        $stmt = $this->conn->prepare($query);
        $stmt->execute();
        return $stmt->get_result();
    }

    // Update a user
    public function update() {
        $query = "UPDATE users SET name = ?, email = ?, password = ?, status = ?, is_admin = ?, address = ?, phone_number = ?, profile_picture = ? WHERE id = ?";
        $stmt = $this->conn->prepare($query);
        $stmt->bind_param("ssiiisssi", $this->name, $this->email, $this->password, $this->status, $this->is_admin, $this->address, $this->phone_number, $this->profile_picture, $this->id);
        return $stmt->execute();
    }

    // Delete a user (soft delete)
    public function delete() {
        $query = "UPDATE users SET deleted_at = NOW() WHERE id = ?";
        $stmt = $this->conn->prepare($query);
        $stmt->bind_param("i", $this->id);
        return $stmt->execute();
    }
}
?>
