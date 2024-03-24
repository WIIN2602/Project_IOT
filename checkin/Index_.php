<?php
  $name = $email = $phone = $Date_Check_In = $Date_Check_Out = $Adult = $Child = "";
  if(isset($_POST['random_code'])) {
      $code = $_POST['random_code'];

      $host = "localhost";
      $username = "root";
      $password = "";
      $dbname = "project";

      // create connect
      $conn = new mysqli ($host, $username, $password, $dbname);

      // Check connection
      if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
      }

      // Sanitize user input
      $code = $conn->real_escape_string($code);

      // get data
      $sql = "SELECT `Code`, `Name_for_booking`, `E-mail`, `Phone`, `Date_Check_In`, `Date_Check_Out`, `Adult`, `Child` FROM `database` WHERE Code = '$code'";
      $result = $conn->query($sql);

      if ($result) {
        if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();
            $code = $row["Code"];
            $name = $row["Name_for_booking"];
            $email = $row["E-mail"];
            $phone = $row["Phone"];
            $Date_Check_In = $row["Date_Check_In"];
            $Date_Check_Out = $row["Date_Check_Out"];
            $Adult = $row["Adult"];
            $Child = $row["Child"];
        } else {
            echo "No records found";
        }
      } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
      $conn->close();
  }
  
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <title>XYZ Hotel</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <meta content="" name="keywords" />
    <meta content="" name="description" />

    <!-- Libraries Stylesheet -->
    <link href="lib/animate/animate.min.css" rel="stylesheet" />
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet" />
    <link
      href="lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css"
      rel="stylesheet"
    />
    <link
      href="css/bootstrap.min.css"
      rel="stylesheet"
    />
    <link
      href="lib/animate/animate.min.css"
      rel="stylesheet"
    />
    <link
      href="lib/owlcarousel/assets/owl.carousel.min.css"
      rel="stylesheet"
    />
    <link
      href="lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css"
      rel="stylesheet"
    />

    <!-- Customized Bootstrap Stylesheet -->
    <link
      href="css/bootstrap.min.css"
      rel="stylesheet"
    />

    <!-- Template Stylesheet -->
    <link
      href="css/style_checkin.css"
      rel="stylesheet"
    />
  </head>

  <body>
    <div class="container-xxl bg-white p-0">
      <!-- Header Start -->
      <div class="container-fluid bg-dark px-0">
        <div class="row gx-0">
          <div class="col-lg-3 bg-dark d-none d-lg-block">
            <a
              href="#"
              class="navbar-brand w-100 h-100 m-0 p-0 d-flex align-items-center justify-content-center"
            >
              <h1 class="m-0 text-primary text-uppercase">XYZ Hotel</h1>
            </a>
          </div>
        </div>
      </div>
      <!-- Header End -->

      <!-- Carousel Start -->
      <div class="container-fluid p-0 mb-5">
        <div
          id="header-carousel"
          class="carousel slide"
          data-bs-ride="carousel"
        >
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img
                class="w-100 h-50"
                src="img/carousel-1.jpg"
                alt="Image"
              />
              <div
                class="carousel-caption d-flex flex-column align-items-center justify-content-center"
              >
                <div class="p-3" style="max-width: 700px">
                  <h6
                    class="section-title text-white text-uppercase mb-3 animated slideInDown"
                  >
                    Luxury Living
                  </h6>
                  <h1 class="display-3 text-white mb-4 animated slideInDown">
                    Discover A Brand Luxurious Hotel
                  </h1>
                  <a
                    href="Index_.php"
                    class="btn btn-primary py-md-3 px-md-5 me-3 animated slideInLeft"
                    >Have code? Click here</a
                  >
                  <a
                    href="index.html"
                    class="btn btn-light py-md-3 px-md-5 animated slideInRight"
                    >Book A Room Now</a
                  >
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- Carousel End -->

      <!-- Booking Start -->
      <div class="container-fluid booking pb-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container">
          <div class="bg-white" style="padding: 35px">
            <form action="#" method="post" style="display: flex; flex-direction: column;">
              <div style="display: flex; margin-bottom: 40px;">
                <div class="elem-group inlined" style="flex: 1;">
                  <input type="password" id="password" name="random_code" placeholder="Enter your code here" required />
                </div>
                <div class="elem-group inlined" style="flex: 1;">
                  <input type="text" id="name" name="booking_name" placeholder="Name" />
                </div>
                <div class="elem-group inlined" style="flex: 1;">
                  <input type="email" id="email" name="booking_email" placeholder="example@email.com" />
                </div>
                <div class="elem-group inlined" style="flex: 1;">
                  <input
                  type="tel"
                  id="phone"
                  name="booking_phone"
                  placeholder="012-345-6789"
                />
                </div>  
              </div> 
              <div style="display: flex; margin-bottom: 40px;">
                <div class="elem-group inlined" style="flex: 1;">
                  <input
                  type="number"
                  id="adult"
                  name="adult"
                  placeholder="2"
                  min="1"
                />
                </div>
                <div class="elem-group inlined" style="flex: 1;">
                  <input
                  type="number"
                  id="child"
                  name="child"
                  placeholder="2"
                  min="0"
                />
                </div>
                <div class="elem-group inlined" style="flex: 1;">
                  <label for="checkin-date">Check-in Date</label>
                  <input type="date" id="checkin-date" name="checkindate" />
                </div>
                <div class="elem-group inlined" style="flex: 1;">
                  <label for="checkout-date">Check-out Date</label>
                  <input type="date" id="checkout-date" name="checkoutdate"/>
                </div> 
              </div>   
              <div class="elem-group" style="display: flex;margin-top: 20px;">
                <div class="elem-group">
                  <button type="submit" onclick="showRoom()" name="booking_btn" style="height: 50px;
                  background: orange;
                  border: none;
                  color: white;
                  font-size: 1.25em;
                  font-family: 'Nanum Gothic';
                  border-radius: 4px;
                  cursor: pointer;
                  padding: 0 12px;">Payment</button>
                </div>
                <div class="elem-group">
                  <input type="submit" name="find_booking_btn" style="height: 50px;
                  background: blue;
                  border: none;
                  color: white;
                  font-size: 1.25em;
                  font-family: 'Nanum Gothic';
                  border-radius: 4px;
                  cursor: pointer;
                  padding: 0 12px;"
                  value="Find you booking">
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
      <!-- Booking End -->

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/counterup/counterup.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/tempusdominus/js/moment.min.js"></script>
    <script src="lib/tempusdominus/js/moment-timezone.min.js"></script>
    <script src="lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>

    <script>
        document.getElementByName('booking_btn').addEventListener('click', function() {
            // When button is clicked, make a request to trigger Python script
            fetch('../face_recog.py')
                .then(response => {
                    if (!response.ok) {
                        throw new Error('Failed to trigger detection');
                    }
                    return response.text();
                })
                .then(data => {
                    alert(data); // Alert success message from Python
                })
                .catch(error => {
                    console.error('Error:', error);
                });
        });
    </script>
    <script>
      function showRoom() {
        alert(
          "Your room is floor 1 room number 160\nYour room password is 3793"
        );
      }
    </script>
    <script>
      var currentDateTime = new Date();
      var year = currentDateTime.getFullYear();
      var month = currentDateTime.getMonth() + 1;
      var date = currentDateTime.getDate() + 1;
  
      if (date < 10) {
        date = "0" + date;
      }
      if (month < 10) {
        month = "0" + month;
      }
  
      var dateTomorrow = year + "-" + month + "-" + date;
      var checkinElem = document.querySelector("#checkin-date");
      var checkoutElem = document.querySelector("#checkout-date");
  
      checkinElem.setAttribute("min", dateTomorrow);
  
      checkinElem.onchange = function () {
        checkoutElem.setAttribute("min", this.value);
      };
    </script>
    <?php if(isset($_POST['random_code'])): ?>
      <script>
        document.getElementById('password').value = '<?php echo $code; ?>';
        document.getElementById('name').value = '<?php echo $name; ?>';
        document.getElementById('email').value = '<?php echo $email; ?>';
        document.getElementById('phone').value = '<?php echo $phone; ?>';
        document.getElementById('checkin-date').value = '<?php echo $Date_Check_In; ?>';
        document.getElementById('checkout-date').value = '<?php echo $Date_Check_Out; ?>';
        document.getElementById('adult').value = '<?php echo $Adult; ?>';
        document.getElementById('child').value = '<?php echo $Child; ?>';
      </script>
  <?php endif; ?>
  </body>
</html>
