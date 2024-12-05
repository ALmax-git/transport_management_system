<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <title>Index - Borno Express</title>
        <meta name="description" content="">
        <meta name="keywords" content="">

        <link href="assets/img/favicon.png" rel="icon">
        <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

        <link href="https://fonts.googleapis.com" rel="preconnect">
        <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>

        <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
        <link href="assets/vendor/aos/aos.css" rel="stylesheet">
        <link href="assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet">
        <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
        <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

        <!-- Main CSS File -->
        <link href="assets/css/main.css" rel="stylesheet">
    </head>

    <body class="index-page">
        <?php include './components/header.php'; ?>
        <main class="main">
            <?php include './components/search.php'; ?>

<?php if(isset($_GET['about']) && $_GET['about'] == "true"): ?>
    <!-- About Section -->
            <section id="about" class="about section">

                <div class="container">

                    <div class="row gy-4">
                        <!-- Image and Video Section -->
                        <div class="col-lg-6 position-relative align-self-start order-lg-last order-first"
                            data-aos="fade-up" data-aos-delay="200">
                            <img src="assets/img/about.jpg" class="img-fluid" alt="Borno Express Transportation">
                            <a href="https://www.youtube.com/watch?v=Y7f98aduVJ8"
                                class="glightbox pulsating-play-btn"></a>
                        </div>

                        <!-- About Us Content Section -->
                        <div class="col-lg-6 content order-last order-lg-first" data-aos="fade-up" data-aos-delay="100">
                            <h3>About Borno Express</h3>
                            <p>
                                At Borno Express, we are dedicated to providing fast, reliable, and efficient
                                transportation services
                                across Borno State and beyond. With a commitment to passenger satisfaction and safety,
                                we ensure
                                that every journey with us is a joyful experience.
                            </p>
                            <ul>
                                <li>
                                    <i class="bi bi-diagram-3"></i>
                                    <div>
                                        <h5>Efficient Route Planning</h5>
                                        <p>Our routes are optimized for efficiency, ensuring you reach your destination
                                            quickly,
                                            with minimal delays and maximum comfort.</p>
                                    </div>
                                </li>
                                <li>
                                    <i class="bi bi-fullscreen-exit"></i>
                                    <div>
                                        <h5>Customer-Centric Services</h5>
                                        <p>We place our passengers at the heart of everything we do, offering
                                            personalized
                                            travel experiences, from booking to arrival.</p>
                                    </div>
                                </li>
                                <li>
                                    <i class="bi bi-broadcast"></i>
                                    <div>
                                        <h5>Safety and Reliability</h5>
                                        <p>Your safety is our top priority. Our fleet is equipped with the latest safety
                                            features
                                            and is regularly maintained to ensure smooth, reliable trips.</p>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>

                </div>

            </section><!-- /About Section -->

            <!-- Services Section -->
            <section id="services" class="services section">

                <!-- Section Title -->
                <div class="container section-title" data-aos="fade-up">
                    <span>Our Services<br></span>
                    <h2>Our Services</h2>
                    <p>Experience fast, reliable, and secure transportation and logistics solutions across Borno State
                        and beyond.</p>
                </div><!-- End Section Title -->

                <div class="container">
                    <div class="row gy-4">

                        <!-- Storage Service -->
                        <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
                            <div class="card">
                                <div class="card-img">
                                    <img src="assets/img/service-1.jpg" alt="Storage Service" class="img-fluid">
                                </div>
                                <h3>Storage Solutions</h3>
                                <p>We provide secure and flexible storage services for your goods, ensuring safety and
                                    easy access when needed.</p>
                            </div>
                        </div><!-- End Card Item -->

                        <!-- Borno Expresstics Service -->
                        <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
                            <div class="card">
                                <div class="card-img">
                                    <img src="assets/img/service-2.jpg" alt="Borno Expresstics" class="img-fluid">
                                </div>
                                <h3><a href="#" class="stretched-link">Borno Expresstics</a></h3>
                                <p>Efficient logistics and delivery services designed to meet your business and personal
                                    transportation needs across the region.</p>
                            </div>
                        </div><!-- End Card Item -->

                        <!-- Cargo Service -->
                        <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
                            <div class="card">
                                <div class="card-img">
                                    <img src="assets/img/service-3.jpg" alt="Cargo Service" class="img-fluid">
                                </div>
                                <h3><a href="#" class="stretched-link">Cargo Transport</a></h3>
                                <p>Reliable cargo transportation with modern vehicles, ensuring timely delivery of your
                                    large shipments, both locally and regionally.</p>
                            </div>
                        </div><!-- End Card Item -->

                        <!-- Trucking Service -->
                        <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="400">
                            <div class="card">
                                <div class="card-img">
                                    <img src="assets/img/service-4.jpg" alt="Trucking Service" class="img-fluid">
                                </div>
                                <h3><a href="#" class="stretched-link">Trucking</a></h3>
                                <p>Our trucking services cover both short and long-distance hauls, ensuring safe
                                    transport for all types of cargo, big or small.</p>
                            </div>
                        </div><!-- End Card Item -->

                        <!-- Packaging Service -->
                        <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="500">
                            <div class="card">
                                <div class="card-img">
                                    <img src="assets/img/service-5.jpg" alt="Packaging Service" class="img-fluid">
                                </div>
                                <h3>Packaging Services</h3>
                                <p>We offer professional packaging solutions to ensure your goods are well protected
                                    during transit, with a focus on security and efficiency.</p>
                            </div>
                        </div><!-- End Card Item -->

                        <!-- Warehousing Service -->
                        <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="600">
                            <div class="card">
                                <div class="card-img">
                                    <img src="assets/img/service-6.jpg" alt="Warehousing Service" class="img-fluid">
                                </div>
                                <h3><a href="#" class="stretched-link">Warehousing</a></h3>
                                <p>Our warehousing facilities offer storage solutions that are secure, scalable, and
                                    designed to handle your logistics needs efficiently.</p>
                            </div>
                        </div><!-- End Card Item -->

                    </div>
                </div>


            </section><!-- /Services Section -->
            
<?php elseif(isset($_GET['contact']) && $_GET['contact'] == "true"): ?>
 <!-- Contact Section -->
    <section id="contact" class="contact section">

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="mb-4" data-aos="fade-up" data-aos-delay="200">
          <iframe style="border:0; width: 100%; height: 270px;" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d48389.78314118045!2d-74.006138!3d40.710059!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c25a22a3bda30d%3A0xb89d1fe6bc499443!2sDowntown%20Conference%20Center!5e0!3m2!1sen!2sus!4v1676961268712!5m2!1sen!2sus" frameborder="0" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div><!-- End Google Maps -->

        <div class="row gy-4">

          <div class="col-lg-4">
            <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="300">
              <i class="bi bi-geo-alt flex-shrink-0"></i>
              <div>
                <h3>Address</h3>
                <p>A108 Adam Street, New York, NY 535022</p>
              </div>
            </div><!-- End Info Item -->

            <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="400">
              <i class="bi bi-telephone flex-shrink-0"></i>
              <div>
                <h3>Call Us</h3>
                <p>+1 5589 55488 55</p>
              </div>
            </div><!-- End Info Item -->

            <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="500">
              <i class="bi bi-envelope flex-shrink-0"></i>
              <div>
                <h3>Email Us</h3>
                <p>info@example.com</p>
              </div>
            </div><!-- End Info Item -->

          </div>

          <div class="col-lg-8">
            <form action="forms/contact.php" method="post" class="php-email-form" data-aos="fade-up" data-aos-delay="200">
              <div class="row gy-4">

                <div class="col-md-6">
                  <input type="text" name="name" class="form-control" placeholder="Your Name" required="">
                </div>

                <div class="col-md-6 ">
                  <input type="email" class="form-control" name="email" placeholder="Your Email" required="">
                </div>

                <div class="col-md-12">
                  <input type="text" class="form-control" name="subject" placeholder="Subject" required="">
                </div>

                <div class="col-md-12">
                  <textarea class="form-control" name="message" rows="6" placeholder="Message" required=""></textarea>
                </div>

                <div class="col-md-12 text-center">
                  <div class="loading">Loading</div>
                  <div class="error-message"></div>
                  <div class="sent-message">Your message has been sent. Thank you!</div>

                  <button type="submit">Send Message</button>
                </div>

              </div>
            </form>
          </div><!-- End Contact Form -->

        </div>

      </div>

    </section><!-- /Contact Section -->

<?php else: ?> 
            <!-- Featured Services Section -->
            <section id="featured-services" class="featured-services section">

                <div class="container">

                    <div class="row gy-4">

                        <div class="col-lg-4 col-md-6 service-item d-flex" data-aos="fade-up" data-aos-delay="100">
                            <div class="icon flex-shrink-0"><i class="fa-solid fa-bus"></i></div>
                            <div>
                                <h4 class="title">Express Intercity Travel</h4>
                                <p class="description">Our fast and reliable intercity buses ensure you reach your
                                    destination on time, with top-notch comfort and safety.</p>
                                <a href="#" class="readmore stretched-link"><span>Learn More</span><i
                                        class="bi bi-arrow-right"></i></a>
                            </div>
                        </div>
                        <!-- End Service Item -->

                        <div class="col-lg-4 col-md-6 service-item d-flex" data-aos="fade-up" data-aos-delay="200">
                            <div class="icon flex-shrink-0"><i class="fa-solid fa-route"></i></div>
                            <div>
                                <h4 class="title">Customized Trip Routes</h4>
                                <p class="description">Select from a variety of tailored routes that best suit your
                                    travel needs, offering scenic views and optimized for shorter travel time.</p>
                                <a href="#" class="readmore stretched-link"><span>Learn More</span><i
                                        class="bi bi-arrow-right"></i></a>
                            </div>
                        </div>
                        <!-- End Service Item -->

                        <div class="col-lg-4 col-md-6 service-item d-flex" data-aos="fade-up" data-aos-delay="300">
                            <div class="icon flex-shrink-0"><i class="fa-solid fa-truck-loading"></i></div>
                            <div>
                                <h4 class="title">Cargo & Logistics</h4>
                                <p class="description">Transport goods with ease using our efficient cargo services.
                                    From small packages to large deliveries, we’ve got you covered.</p>
                                <a href="#" class="readmore stretched-link"><span>Learn More</span><i
                                        class="bi bi-arrow-right"></i></a>
                            </div>
                        </div>
                        <!-- End Service Item -->

                    </div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>
<style>
  .status-green {
      background-color: green;
      color: white;
      cursor: pointer;
  }
  .status-red {
      background-color: red;
      color: white;
      cursor: pointer;
  }
</style>
<table class="table table-striped table-bordered" id="hospitalTable">
   <thead class="table-primary">
       <tr>
           <th>ID</th>
           <th>Name</th>
           <th>Departure</th>
           <th>Destination</th>
           <th>Status</th>
           <th>Comments</th>
       </tr>
   </thead>
   <tbody id="tableBody">
       <!-- Rows will be dynamically generated -->
   </tbody>
</table>
    <script>
        // Define 20 routes in an array
        const routes = [
            { id: 1, name: "Route 1", departure: "Borno Express", destination: "Kano", status: "Available", comments: "Good service" },
            { id: 2, name: "Route 2", departure: "Borno Express", destination: "Damaturu", status: "Not Available", comments: "Temporarily suspended" },
            { id: 3, name: "Route 3", departure: "Borno Express", destination: "Wudil", status: "Available", comments: "On schedule" },
            { id: 4, name: "Route 4", departure: "Borno Express", destination: "Katsina", status: "Available", comments: "Safe and secure" },
            { id: 5, name: "Route 5", departure: "Borno Express", destination: "Gombe", status: "Not Available", comments: "Maintenance required" },
            { id: 6, name: "Route 6", departure: "Borno Express", destination: "Zamfara", status: "Available", comments: "Popular route" },
            { id: 7, name: "Route 7", departure: "Borno Express", destination: "Bauchi", status: "Not Available", comments: "Road repairs ongoing" },
            { id: 8, name: "Route 8", departure: "Borno Express", destination: "Azare", status: "Available", comments: "Reliable service" },
            { id: 9, name: "Route 9", departure: "Borno Express", destination: "Kano", status: "Available", comments: "Fast and efficient" },
            { id: 10, name: "Route 10", departure: "Borno Express", destination: "Sokoto", status: "Not Available", comments: "No recent trips" },
            { id: 11, name: "Route 11", departure: "Borno Express", destination: "Kaduna", status: "Available", comments: "Well-maintained" },
            { id: 12, name: "Route 12", departure: "Borno Express", destination: "Abuja", status: "Available", comments: "Customer favorite" },
            { id: 13, name: "Route 13", departure: "Borno Express", destination: "Patiskum", status: "Available", comments: "Great experience" },
            { id: 14, name: "Route 14", departure: "Borno Express", destination: "Jos", status: "Not Available", comments: "Weather issues" },
            { id: 15, name: "Route 15", departure: "Borno Express", destination: "Yola", status: "Available", comments: "Smooth trip" },
            { id: 16, name: "Route 16", departure: "Borno Express", destination: "Bauchi", status: "Available", comments: "Frequent departures" },
            { id: 17, name: "Route 17", departure: "Borno Express", destination: "Jigawa", status: "Available", comments: "High demand" },
            { id: 18, name: "Route 18", departure: "Borno Express", destination: "Zamfara", status: "Not Available", comments: "Driver shortage" },
            { id: 19, name: "Route 19", departure: "Borno Express", destination: "Kaduna", status: "Available", comments: "Reliable service" },
            { id: 20, name: "Route 20", departure: "Borno Express", destination: "Zariya", status: "Not Available", comments: "Low patronage" }
        ];

        // Populate table with routes
        function populateTable() {
            const tableBody = document.getElementById("tableBody");
            tableBody.innerHTML = ""; // Clear table body
            routes.forEach(route => {
                const row = document.createElement("tr");
                row.innerHTML = `
                    <td>${route.id}</td>
                    <td>${route.name}</td>
                    <td>${route.departure}</td>
                    <td>${route.destination}</td>
                    <td class="${route.status === 'Available' ? 'bg-success' : 'bg-danger'}" 
                        onclick="showDetails('${route.name}', '${route.status}', '${route.departure} to ${route.destination}')">
                        ${route.status}
                    </td>
                    <td>${route.comments}</td>
                `;
                tableBody.appendChild(row);
            });
        }

        // Filter table rows based on search input
        document.getElementById('searchInput').addEventListener('keyup', function () {
            let filter = this.value.toLowerCase();
            const filteredRoutes = routes.filter(route =>
                route.name.toLowerCase().includes(filter) ||
                route.departure.toLowerCase().includes(filter) ||
                route.destination.toLowerCase().includes(filter)
            );
            const tableBody = document.getElementById("tableBody");
            tableBody.innerHTML = ""; // Clear table body
            filteredRoutes.forEach(route => {
                const row = document.createElement("tr");
                row.innerHTML = `
                    <td>${route.id}</td>
                    <td>${route.name}</td>
                    <td>${route.departure}</td>
                    <td>${route.destination}</td>
                    <td class="${route.status === 'Available' ? 'bg-success' : 'bg-danger'}" 
                        onclick="showDetails('${route.name}', '${route.status}', '${route.departure} to ${route.destination}')">
                        ${route.status}
                    </td>
                    <td>${route.comments}</td>
                `;
                tableBody.appendChild(row);
            });
        });

        // Show SweetAlert popup for status details
        function showDetails(route, status, details) {
            swal({
                title: `Details for ${route}`,
                text: `Status: ${status}\nDetails: ${details}`,
                icon: status === 'Available' ? 'success' : 'error',
            });
        }

        // Initialize table
        populateTable();
    </script>
                </div>

            </section><!-- /Featured Services Section -->

        
            <!-- Call To Action Section -->
            <!-- Call To Action Section -->
            <section id="call-to-action" class="call-to-action section dark-background">

                <img src="assets/img/cta-bg.jpg" alt="Call to Action Background Image">

                <div class="container">
                    <div class="row justify-content-center" data-aos="zoom-in" data-aos-delay="100">
                        <div class="col-xl-10">
                            <div class="text-center">
                                <h3>Ready to Get Started?</h3>
                                <p>Experience fast, reliable, and secure transportation with Borno Express. Whether you
                                    need to move cargo, store goods, or deliver packages, we’ve got you covered. Contact
                                    us today to learn more about our comprehensive logistics solutions.</p>
                                <a class="cta-btn" href="#">Get in Touch</a>
                            </div>
                        </div>
                    </div>
                </div>

            </section><!-- /Call To Action Section -->


            <!-- Faq Section -->
            <section id="faq" class="faq section">

                <!-- Section Title -->
                <div class="container section-title" data-aos="fade-up">
                    <span>Frequently Asked Questions</span>
                    <h2>Your Questions, Answered</h2>
                    <p>Find answers to the most common questions about Borno Express and our services.</p>
                </div><!-- End Section Title -->

                <div class="container">

                    <div class="row justify-content-center">

                        <div class="col-lg-10">

                            <div class="faq-container">

                                <div class="faq-item faq-active" data-aos="fade-up" data-aos-delay="200">
                                    <i class="faq-icon bi bi-question-circle"></i>
                                    <h3>What services does Borno Express offer?</h3>
                                    <div class="faq-content">
                                        <p>We provide a variety of logistics services, including cargo transportation,
                                            trucking, warehousing, and more. Explore our full range of solutions to find
                                            what suits your needs.</p>
                                    </div>
                                    <i class="faq-toggle bi bi-chevron-right"></i>
                                </div><!-- End Faq item-->

                                <div class="faq-item" data-aos="fade-up" data-aos-delay="300">
                                    <i class="faq-icon bi bi-question-circle"></i>
                                    <h3>How do I track my shipment?</h3>
                                    <div class="faq-content">
                                        <p>Once your shipment is dispatched, you'll receive a tracking number via email.
                                            Use this number on our website to track your shipment in real-time.</p>
                                    </div>
                                    <i class="faq-toggle bi bi-chevron-right"></i>
                                </div><!-- End Faq item-->

                                <div class="faq-item" data-aos="fade-up" data-aos-delay="400">
                                    <i class="faq-icon bi bi-question-circle"></i>
                                    <h3>What areas does Borno Express cover?</h3>
                                    <div class="faq-content">
                                        <p>We operate throughout Nigeria, with a focus on providing reliable services to
                                            both urban and rural areas, ensuring your goods reach their destination
                                            safely.</p>
                                    </div>
                                    <i class="faq-toggle bi bi-chevron-right"></i>
                                </div><!-- End Faq item-->

                                <div class="faq-item" data-aos="fade-up" data-aos-delay="500">
                                    <i class="faq-icon bi bi-question-circle"></i>
                                    <h3>How do I schedule a shipment with Borno Express?</h3>
                                    <div class="faq-content">
                                        <p>Scheduling a shipment is easy. Simply visit our website, fill out the
                                            shipping form, or contact our customer service team for assistance.</p>
                                    </div>
                                    <i class="faq-toggle bi bi-chevron-right"></i>
                                </div><!-- End Faq item-->

                                <div class="faq-item" data-aos="fade-up" data-aos-delay="600">
                                    <i class="faq-icon bi bi-question-circle"></i>
                                    <h3>What safety measures are in place for cargo?</h3>
                                    <div class="faq-content">
                                        <p>Your cargo's safety is our priority. We employ state-of-the-art security
                                            protocols, including real-time tracking and secure warehousing to ensure
                                            your goods are protected.</p>
                                    </div>
                                    <i class="faq-toggle bi bi-chevron-right"></i>
                                </div><!-- End Faq item-->

                            </div>

                        </div>

                    </div>

                </div>

            </section><!-- /Faq Section -->
<?php endif; ?>

        </main>

        <?php
  include './components/footer.php';
  ?>

        <!-- Scroll Top -->
        <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i
                class="bi bi-arrow-up-short"></i></a>

        <!-- Preloader -->
        <div id="preloader"></div>

        <!-- Vendor JS Files -->
        <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
        <script src="assets/vendor/php-email-form/validate.js"></script>
        <script src="assets/vendor/aos/aos.js"></script>
        <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
        <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
        <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>

        <!-- Main JS File -->
        <script src="assets/js/main.js"></script>

    </body>

</html>
