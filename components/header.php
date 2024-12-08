  <header id="header" class="header d-flex align-items-center bg-dark">
      <div class="container-fluid container-xl position-relative d-flex align-items-center">

          <a href="#" class="logo d-flex align-items-center me-auto">
              <h1 class="sitename">Borno Express</h1>
          </a>

          <nav id="navmenu" class="navmenu">
              <ul>
                  <li><a href="./" class="active">Home<br></a></li>
                  <li><a href="#" type="button" data-bs-toggle="modal" data-bs-target="#open_manipest">Manipest</a></li>
                  <li><a href="./?about=true">About</a></li>
                  <li><a href="./?contact=true">Contact</a></li>
              </ul>
              <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
          </nav>

          <a class="btn-getstarted" href="./auth.php">Get Started</a>

      </div>
  </header>

            <?php
            require_once __DIR__ . '/../app/models/Vehicle.php';
            require_once __DIR__ . '/../app/models/Passenger.php';
            require_once __DIR__ . '/../app/models/User.php';
            require_once __DIR__ . '/../app/models/Ticket.php';
            require_once __DIR__ . '/../database/Database.php';
$database = new Database;
$pdo = $database->PDO_connect();

                if (isset($_POST['login'])) {
                 // Login logic
                $email = $_POST['email'];
                $password = $_POST['password'];
                    $stmt = $pdo->prepare("SELECT * FROM users WHERE email = ?");
                    $stmt->execute([$email]);
                    $user = $stmt->fetch(PDO::FETCH_ASSOC);

                    if ($user && password_verify($password, $user['password'])) {
                        $_SESSION['user'] = $user['email'];
                // echo '<script>alert(22);</script>';
                        // header("Location: ../../dashboard.php"); // Redirect to a secure page
                        // exit;
                    } else {
                        $_SESSION['message'] = "Invalid email or password!";
                        // header("Location: ../../auth.php");
                // echo '<script>alert(111);</script>';
                        // exit;
                    }
                }
                ?>
<div class="modal fade" id="open_manipest" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="open_manipestLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="open_manipestLabel">Root</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <?php if(isset($_SESSION['user'])): ?>
           <?php

            // Database connection
            $database = new Database();
            $vehicles = new Vehicle($database->getConnection());
            $vehicles = $vehicles->all();
            $count=0;
            
           ?>
           <div class="accordion accordion-flush" id="accordionFlushExample">
                <?php foreach($vehicles as $vehicle): ?>
                <div class="accordion-item">
                    <h2 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse<?php echo $count;?>" aria-expanded="false" aria-controls="flush-collapseOne">
                        <div class="row">
                            <div class="col-4"><?php echo $vehicle['name'];?></div>
                            <div class="col-4"><?php echo $vehicle['type'];?></div>
                            <div class="col-4"><?php echo $vehicle['vehicle_number'];?></div>
                        </div>
                    </button>
                    </h2>
                    <div id="flush-collapse<?php echo $count;?>" class="accordion-collapse <?php echo ++$count > 0 ? 'collapse' : '';?>" data-bs-parent="#accordionFlushExample">
                       <div class="accordion-body">
                        <div class="table-responsive">
                        <?php
                            $tickets = new Ticket($database->getConnection());
                            $tickets = $tickets->read();
                        ?>
                        <table class="table">
                             <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Departure</th>
                                    <th scope="col">Destination</th>
                                    <th scope="col">Name</th>
                                    <th scope="col">Age</th>
                                    <th scope="col">Telephone</th>
                                    <th scope="col">Gender</th>
                                </tr>
                            </thead>
                            <tbody class="table-group-divider">
                                <?php  $x=0; foreach($tickets as $ticket):?>
                                    <?php if($ticket['vehicle_id'] == $vehicle['id']):?>
                                        <?php $passsenger = new Passenger($database->getConnection()); $p = ($passsenger->find($ticket['ticket_id']));?>
                                        <tr>
                                            <th scope="row"><?php ++$x; echo $x;?></th>
                                            <td><?php echo $ticket['departure'] ;?></td>
                                            <td><?php echo $ticket['destination'] ;?></td>
                                            <td><?php echo $p['name'] ;?></td>
                                            <td><?php echo $p['age'] ;?></td>
                                            <td><?php echo $p['phone_number'] ;?></td>
                                            <td><?php echo $p['gender'] ;?></td>
                                        </tr>
                                    <?php endif;?>
                                <?php endforeach;?>
                            </tbody>

                        </table>
                        </div>
                       </div>
                    </div>
                </div>
                <?php endforeach;?>
            </div>
        <?php else: ?>
            <form method="POST">
                <div id="emailHelp" class="text-danger"><?php echo $_SESSION['message'] ?? "Require Authetication!";?></div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Email address</label>
                    <input type="email" class="form-control" name="email" id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Password</label>
                    <input type="password" class="form-control" name="password" id="exampleInputPassword1">
                </div>
                <button type="submit" name="login"   class="btn btn-primary">Submit</button>
            </form>                
        <?php endif; ?> 
      </div>
    </div>
  </div>
</div>
