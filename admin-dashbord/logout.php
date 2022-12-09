<?php
session_start();
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

    <title>Log out</title>
    <link rel="stylesheet" href="hd-style.css" />


    <link
      rel="stylesheet"
      href="https://fontawesome.com/search?q=facebook&o=r"
    />
    <link
      rel="stylesheet"
      type="text/css"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css"
    />

<?php 
if(isset($_SESSION['use']))  
{
  session_unset();
  session_destroy();
  header("Location:login.php"); 
}
?>

<body>
    <nav>
        <ul>
          <li>
            <a href="#">
              <div class="logo">
                <img src="image/h-logo.png" /> <br />
                <span class="nav-item"> Admin Panel</span>
              </div>
            </a>
          </li>
          <li>
            <a href="hotel-dashbord.php">
              <i class="fas fa-chart-line"></i>
              <span class="nav-item">Dashbord</span>
            </a>
          </li>
        
          <li>
            <a href="calender.php">
              <i class="fas fa-calendar-days"></i>
              <span class="nav-item"> Calender </span>
            </a>
          </li>
          

          <li>
            <a href="logout.php">
                <i class="fas fa-power-off"></i>
              <span class="nav-item"> log out</span>
            </a>
          </li>
        </ul>
      </nav>
      
      <div class="nav-head">
        <h1>logout</h1>
      </div>
</body>
</html>