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
            <form action="../data.php" method="post" style="display: flex; flex-direction: column;">
              <div style="display: flex; margin-bottom: 40px;">
                <div class="elem-group inlined" style="flex: 1;">
                  <input type="password" id="name" name="random_code" placeholder="Enter your code here" required />
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
                  <input type="date" id="checkout-date" name="checkoutdate" />
                </div> 
              </div>                   
              <div class="button-group">
                <button type="submit" name="booking_button">Booking</button>
                <button type="submit" name="find_booking_button">Find your booking</button>
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


<?php
// ตรวจสอบว่ามีการส่งค่า ID หรือไม่
if(isset($_POST['id'])) {
    $id = $_POST['id'];

    // เชื่อมต่อกับฐานข้อมูล MySQL
    $servername = "ชื่อเซิร์ฟเวอร์";
    $username = "ชื่อผู้ใช้";
    $password = "รหัสผ่าน";
    $dbname = "ชื่อฐานข้อมูล";

    $conn = new mysqli($servername, $username, $password, $dbname);

    // ตรวจสอบการเชื่อมต่อ
    if ($conn->connect_error) {
        die("เชื่อมต่อกับฐานข้อมูลไม่สำเร็จ: " . $conn->connect_error);
    }

    // ส่งคำสั่ง SQL เพื่อดึงข้อมูล
    $sql = "SELECT ชื่อ, นามสกุล, อีเมล FROM ตารางข้อมูล WHERE id = $id";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // แสดงข้อมูลใน input field
        $row = $result->fetch_assoc();
        ?>
        <h3>ข้อมูลที่ค้นพบ:</h3>
        <p>ชื่อ: <?php echo $row["ชื่อ"]; ?></p>
        <p>นามสกุล: <?php echo $row["นามสกุล"]; ?></p>
        <p>อีเมล: <?php echo $row["อีเมล"]; ?></p>
        <?php
    } else {
        echo "ไม่พบข้อมูลสำหรับ ID ที่ระบุ";
    }
    $conn->close();
}
?>
  </body>
</html>
