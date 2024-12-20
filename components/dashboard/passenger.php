<div class="card" style="margin:auto;">
<div class="row">
<form class="form" action="./app/mainController.php" method="post">

   <label class="form-label-wrapper">
     <p class="form-label">Title</p>
     <select class="form-input"  name="title">
      <option value="Mr.">Mr.</option>
      <option value="Mrs">Mrs</option>
      <option value="Dr.">Dr.</option>
      <option value="">Others or non</option>
     </select>
   </label>
   <label class="form-label-wrapper">
     <p class="form-label">Name</p>
     <input class="form-input" type="text" name="name"  placeholder="Enter passenger name" required>
   </label>
   <label class="form-label-wrapper">
     <p class="form-label">Phone Number</p>
     <input class="form-input" type="tel" name="phone_number" placeholder="Enter passenger Phone number" required>
   </label>
   <label class="form-label-wrapper">
     <p class="form-label">Emergency Number</p>
     <input class="form-input" type="tel" name="emergency_contact" placeholder="Enter emergency number" required>
   </label>
   <label class="form-label-wrapper">
     <p class="form-label">First Contact</p>
     <input class="form-input" type="tel" name="first_contact_number" placeholder="Enter first contact number" required>
   </label>
   <label class="form-label-wrapper">
     <p class="form-label">Age</p>
     <input class="form-input" type="number" name="age" placeholder="Enter passenger age">
   </label>
   <label class="form-label-wrapper">
     <p class="form-label">Gender</p>
     <select class="form-input"  name="gender">
      <option value="male">Male</option>
      <option value="female">Female</option>
     </select>
   </label>

   <label class="form-label-wrapper">
     <p class="form-label">Select Vehicle</p>
     <select class="form-input"  name="vehicle_id">
      <?php
      ini_set('display_errors', 1);
      ini_set('display_startup_errors', 1);
      error_reporting(E_ALL);

      require_once __DIR__ . '/../../app/models/Vehicle.php';
      require_once __DIR__ . '/../../app/models/Passenger.php';
      require_once __DIR__ . '/../../app/models/Ticket.php';
      require_once __DIR__ . '/../../database/Database.php';

        // Database connection
      $database = new Database();
      $vehicles = new Vehicle($database->getConnection());
      $vehicles = $vehicles->all();

        foreach ($vehicles as $vehicle) {
           echo"<option value=" . $vehicle['id'] . "><div style='display:flex;justify-content:space-between;'><p>" . $vehicle['name'] . "</p>  -  <p>" . $vehicle['vehicle_number'] . "</p></option>";
        }
      ?>
     </select>
   </label>

   <label class="form-label-wrapper">
     <p class="form-label">Address</p>
     <input class="form-input" type="text" name="address" placeholder="Enter your password" required>
   </label>
   <label class="form-label-wrapper">
     <p class="form-label">Destination</p>
     <input class="form-input" type="text" name="destination" placeholder="Enter your destination" required>
   </label>
   <button class="form-btn primary-default-btn transparent-btn" name="generate_ticket">Generate Ticket</button>
</form>
</div>
</div>
	
