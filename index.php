<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "hoteldb";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

if(isset($_POST['booking'])){
  $check_in = $_POST['check_in'];
  $check_out = $_POST['check_out'];
  $Adults = $_POST['Adults'];
  $children = $_POST['children']; 
  $phone = $_POST['phone']; 
  $tableName = 'booking';
    $sql = "INSERT INTO $tableName (check_in, check_out, Adults, children, phone) VALUES
    ('$check_in', '$check_out', $Adults, $children, '$phone')";

    if ($conn->query($sql) === TRUE) {
      echo "Thank you.Your booking has been successful";
    } else {
      echo "Error: " . $sql . "<br>" . $conn->error;
    }

}

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css"
      integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />

    <title>Home</title>

    <link rel="stylesheet" href="style.css" />
    <link
      rel="stylesheet"
      href="https://fontawesome.com/search?q=facebook&o=r"
    />
    <link
      rel="stylesheet"
      type="text/css"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css"
    />
  </head>

  <body>
  <section class="head" style="min-height: 100px ;">
      <div class="container fex1">
        <div class="nav-bar">
          <img class="logo" src="image/h-logo.png" alt="" />
          <ul>
            <li><a href="/index.php">Home</a></li>
            <li><a href="gallery.php">Gallery</a></li>
            <li>
              <a href="#service">Service <i class="fas fa-caret-down"></i></a>
              <div class="dropdown_menu">
                <ul>
                  <li><a href="food.php"> Food</a></li>
                  <li><a href="room.php"> Room</a></li>
                  <li><a href="others.php"> Others</a></li>
                </ul>
              </div>
            </li>
            <li><a href="about.php">About</a></li>
            <li><a href="contact.php">Contact</a></li>
          </ul>
        </div>
      </div>
    </section>



    <div class="date">
      <div class="possition-fext">

      
      <form action="" method="post">
                  <div class="elem-group inlined">
              <label for="checkin-date">Check-in Date</label>
              <input type="date" id="checkin-date" name="check_in" required>
            </div>
            <div class="elem-group inlined">
              <label for="checkout-date">Check-out Date</label>
              <input type="date" id="checkout-date" name="check_out" required>
            </div>
          <div class="elem-group inlined">
            <label for="adult">Adults</label>
            <input type="number" id="adult" name="Adults" placeholder="1" min="1" required>
          </div>
          <div class="elem-group inlined">
            <label for="child">Children</label>
            <input type="number" id="child" name="children" placeholder="0" min="" required>
          </div>
          
          <div class="elem-group inlined">
            <label for="phone">Phone Number </label>
            <input type="text" id="phone" name="phone" placeholder="+880"  required>
          </div><br>
  
          <div class="elem-group inlined">
            <button type="submit" name="booking">Confirm  
              <i class="fas fa-arrow-circle-right"></i></button>
        </div>
       
        </form>
      </div>
      </div>

<section class="welcome">
  <div class="container">
    <div class="heading2">
      <h5> Facilities</h5>
      <h3>Giving entirely Awesome</h3>
    </div>
    <div class="content2">
      <div class="box_2">
        <i class="fas fa-shipping-fast" ></i>
        <h3> Pick up & Drop</h3>
        <p>Lorem ipsum dolor .</p>
      </div>

      <div class="box_2">
        <i class="fa-solid fa-wine-glass-empty"></i>
        <h3> Guest WELCOME </h3>
        <p>Welcome drinks</p>
      </div>

      <div class="box_2">
        <i class="fa-solid fa-wifi"></i>
        <h3>Free Wifi</h3>
        <p>Full free Internet </p>
      </div>
      <div class="box_2">
        <i class="fas fa-mug-hot"></i>
        <h3> Pick up & Drop</h3>
        <p>Lorem ipsum m commodi.</p>
      </div>

    </div>
  </div>
</section>




    <!---offer -->
    <section class="offer mtop" id="services">
      <div class="container">
        <div class="heading2">
          <h5>NEW OFFER</h5>
          <h3>You can get an exclusive offer</h3>
        </div>
        <div class="content grid2 mtop">
          <div class="box flex">
            <div class="left">
              <img src="image/offer/O1.jpg" width="1000px 600px" />
            </div>
            <div class="right">
              <h1>Deluxes Room</h1>
              <div class="rate flex">
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-regular fa-star"></i>
              </div>
              <p>
                Featuring an outdoor swimming pool, fitness center and a sauna,
                Hotel Sarina is located <br />
                adjacent to Diplomatic Enclave, Baridhara and Gulshan Lake.
                <br />
                Free WiFi is available throughout the property. Checkout was a
                time consuming process.
              </p>
              <h5>From $70.7/ night</h5>
              <div class="elem-group inlined">
                <button type="submit">Confirm  
                  <i class="fas fa-arrow-circle-right"></i></button>
            </div>
           
            </div>
          </div>

          <div class="box flex">
            <div class="left">
              <img src="image/offer/O2.jpg" width="1000px 600px" />
            </div>
            <div class="right">
              <h1>Deluxes Room</h1>
              <div class="rate flex">
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-regular fa-star"></i>
              </div>
              <p>
                Featuring an outdoor swimming pool, fitness center and a sauna,
                Hotel Sarina is located <br />
                adjacent to Diplomatic Enclave, Baridhara and Gulshan Lake.
                <br />
                Free WiFi is available throughout the property. Checkout was a
                time consuming process.
              </p>
              <h5>From $70.7/ night</h5>
              
                <div class="elem-group inlined">
                  <button type="submit">Confirm  
                    <i class="fas fa-arrow-circle-right"></i></button>
              </div>
             
            </div>
          </div>

          <div class="box flex">
            <div class="left">
              <img src="image/offer/O3.jpg" alt="" />
            </div>
            <div class="right">
              <h1>Deluxes Room</h1>
              <div class="rate flex">
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-regular fa-star"></i>
              </div>
              <p>
                Featuring an outdoor swimming pool, fitness center and a sauna,
                Hotel Sarina is located <br />
                adjacent to Diplomatic Enclave, Baridhara and Gulshan Lake.
                <br />
                Free WiFi is available throughout the property. Checkout was a
                time consuming process.
              </p>
              <h5>From $70.7/ night</h5>
              <div class="elem-group inlined">
                <button type="submit">Confirm  
                  <i class="fas fa-arrow-circle-right"></i></button>
            </div>
           
            </div>
          </div>

          <div class="box flex">
            <div class="left">
              <img src="image/offer/O4.jpg" alt="" />
            </div>
            <div class="right">
              <h1>Deluxes Room</h1>
              <div class="rate flex">
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-regular fa-star"></i>
              </div>
              <p>
                Featuring an outdoor swimming pool, fitness center and a sauna,
                Hotel Sarina is located <br />
                adjacent to Diplomatic Enclave, Baridhara and Gulshan Lake.
                <br />
                Free WiFi is available throughout the property. Checkout was a
                time consuming process.
              </p>
              <h5>From $70.7/ night</h5>
              <div class="elem-group inlined">
                <button type="submit">Confirm  
                  <i class="fas fa-arrow-circle-right"></i></button>
            </div>
           
            </div>
          </div>
        </div>
      </div>
    </section>



    <div class="testimonials">
      <div class="inner">
        <h1>TESTIMONIALS</h1>
        <div class="t-border"></div>
        <div class="t-row">
          <div class="col">
            <div class="testimonial">
              <img src="image/c1.jpg" alt="" />
              <div class="name">Full Name</div>
              <div class="stars">
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star-half-stroke"></i>
                <i class="fa-regular fa-star"></i>
              </div>
              <p>
                Excellent hotel with excellent location located at the city center,extremely clean & comfortable . 
                Upon arrival we were warmly welcomed by the friendly reception staff . <br>
                Thank you again !!!
              </p>
            </div>
          </div>
          <div class="col">
            <div class="testimonial">
              <img src="image/c2.jpg" alt="" />
              <div class="name">Full Name</div>
              <div class="stars">
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-regular fa-star"></i>
              </div>
              <p>
                Location: good Ambience: average Surroundings: nothing to talk about 
                Food: Average quality and a little costly Free breakfast: A FARCE (and they serve it after 9 am)
          
                 Rooms: quite spacious
              </p>
            </div>
          </div>

          <div class="col">
            <div class="testimonial">
              <img src="image/c3.jpeg" alt="" />
              <div class="name">Full Name</div>
              <div class="stars">
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-regular fa-star"></i>
              </div>
              <p>
                Nice to stay and staff was very co-operate and especially watch men in morning times.
                 Hotel food is superb and value for money.
                 Pool side view is also superb. Room service is also nice and I can give 5 star to this hotel.
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- footer section start -->

    <footer class="footer___grids">
      <div class="legal">
        <p>&copy; 2022 Dafodil Hotel Management . All rights reserved.</p>
      </div>
    </footer>
    <!-- footer copy right section end -->
  </body>
</html>
