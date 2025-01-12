<?php
include 'connect.php';
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../CSS/adminstyle.css">
    <!-- Boxicons CDN Link -->
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
   </head>
<body>
  <div class="sidebar">
    <div class="logo-details">
      <span class="logo_name">STEPCORRECT</span>
    </div>
      <ul class="nav-links">
        <li>
          <a href="admin.php" class="active">
            <i class='bx bx-grid-alt' ></i>
            <span class="links_name">Users</span>
          </a>
        </li>
        <li>
          <a href="adminproduct.php" action="adminproduct.php">
            <i class='bx bx-box' ></i>
            <span class="links_name">Product</span>
          </a>
        </li>
        <li>
          <a href="adminorders.php">
            <i class='bx bx-list-ul' ></i>
            <span class="links_name">Order list</span>
          </a>
        </li>
        <li>
          <a href="#">
            <i class='bx bx-coin-stack' ></i>
            <span class="links_name">Stock</span>
          </a>
        </li>
        <li>
          <a href="#">
            <i class='bx bx-book-alt' ></i>
            <span class="links_name">Total order</span>
          </a>
        </li>
        <li class="log_out">
          <a href="logout.php">
            <i class='bx bx-log-out'></i>
            <span class="links_name">Log out</span>
          </a>
        </li>
      </ul>
  </div>
  <section class="home-section">
    <nav>
      <div class="sidebar-button">
        <i class='bx bx-menu sidebarBtn'></i>
        <span class="users">Users</span>
      </div>
      <div class="search-box">
        <input type="text" placeholder="Search...">
        <i class='bx bx-search' ></i>
      </div>
      <div class="profile-details">
        <span class="admin_name">Admin</span>
        <i class='bx bx-chevron-down' ></i>
      </div>
    </nav>

    <div class="home-content">
      <div class="overview-boxes">
        <div class="box">
          <div class="right-side">
            <!-- <div class="box-topic">Total Order</div>
            <div class="number">£</div> -->
          </div>
          <i class='bx bx-cart-alt cart'></i>
        </div>
        <div class="box">
          <div class="right-side">
            <!-- <div class="box-topic">Total Sales</div>
            <div class="number">£</div> -->
          </div>
          <i class='bx bxs-cart-add cart two' ></i>
        </div>
        <div class="box">
          <div class="right-side">
            <!-- <div class="box-topic">Total Profit</div>
            <div class="number">£</div> -->
          </div>
          <i class='bx bx-cart cart three' ></i>
        </div>
        <div class="box">
          <div class="right-side">
            <!-- <div class="box-topic">Total Return</div>
            <div class="number">£</div> -->
          </div>
          <i class='bx bxs-cart-download cart four' ></i>
        </div>
      </div>

      <div class="sales-boxes">
        <div class="recent-sales box">
          <div class="title">Users</div>
          <div class="sales-details">
            <ul class="details">
              <?php
                $sql = "SELECT user_id, user_firstname, user_lastname, user_email, user_address, telephone_number FROM user";
                $results = mysqli_query($conn, $sql);
                if(mysqli_num_rows($results)>0){
                  while($row = mysqli_fetch_array($results)){
                  
                      echo "User ID: ", $row[0];
                      echo "<br>";
                      echo "Firstname: ", $row[1];
                      echo "<br>";
                      echo "Lastname: ", $row[2];
                      echo "<br>";
                      echo "Email Address: ", $row[3];
                      echo "<br>";
                      echo "Address: ", $row[4];
                      echo "<br>";
                      echo "Telephone number: ", $row[5];
                      echo "<br>";
                      echo "<br>";
                    
                  }
                }
                else{
                  echo "<script> alert(\"There are no Users\") </script>";
                }
              ?>
          </div>
          <div class="button">
            <a href="#">See All</a>
          </div>
        </div>
  <script>
   let sidebar = document.querySelector(".sidebar");
let sidebarBtn = document.querySelector(".sidebarBtn");
sidebarBtn.onclick = function() {
  sidebar.classList.toggle("active");
  if(sidebar.classList.contains("active")){
  sidebarBtn.classList.replace("bx-menu" ,"bx-menu-alt-right");
}else
  sidebarBtn.classList.replace("bx-menu-alt-right", "bx-menu");
}
 </script>

</body>
</html>

