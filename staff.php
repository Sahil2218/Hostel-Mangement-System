<span style="font-family: verdana, geneva, sans-serif;"><!DOCTYPE html>
    <html lang="en">
    <head>
      <meta charset="UTF-8" />
      <title>Admin staff Page</title>
      <link rel="stylesheet" href="staff.css" />
      <!-- Font Awesome Cdn Link -->
      <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"/> -->

      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"/>

    </head>
    <body style="background: linear-gradient(120deg, rgba(21,21,21,1) 34%, rgba(57,57,57,1) 66%);">
      <div class="container">
        <nav>
          <ul>
            <li><a href="admin.php" class="logo">
              <img src="https://img.freepik.com/premium-photo/man-with-green-suit-tie-that-says-doctor-who_771335-52843.jpg?w=740">
              <span class="nav-item">Admin</span>
            </a></li>
            <li><a href="adroom.php">
              <i class="fas fa-regular fa-building"></i>
              <span class="nav-item">Room</span>
            </a></li>
            <li><a href="staff.php">
              <i class="fas fa-solid fa-users"></i>
              <span class="nav-item">Staff</span>
            </a></li>
            
            <li><a href="feeshow.php">
              <i class="fas fa-solid fa-sign-hanging"></i>
              <span class="nav-item">Fee Details</span>
            </a></li>
            <!-- <li><a href="#">
              <i class="fas fa-cog"></i>
              <span class="nav-item">Setting</span>
            </a></li> -->
    
            <li><a href="loginpage.php" class="logout">
              <i class="fas fa-sign-out-alt"></i>
              <span class="nav-item">Log out</span>
            </a></li>
          </ul>
        </nav>
        <section class="main">
          <div class="main-top">
            <h1>Welcome Admin..!</h1>
            <i class="fas fa-regular fa-user-gear"></i>
          </div>
          <div class="users">
            <!-- <div class="card">
              <img src="https://img.freepik.com/free-vector/meeting-concept-illustration_114360-717.jpg?size=626&ext=jpg&ga=GA1.1.2008673500.1700206067&semt=ais">
              <h4>Staff Details</h4>
          
              <a href=""> <button>View</button></a>
            </div> -->
            <div class="card">
              <img src="https://img.freepik.com/free-photo/small-room-with-bed-bookcase-bookcase_1340-43286.jpg?size=626&ext=jpg&ga=GA1.1.2008673500.1700206067&semt=ais_ai_generated">
              <h4> Adding new Staff</h4>
              <!-- <p>285</p> -->
              <a href="addStaff.php"><button>view</button></a>
            </div>
          </div>
        </section>
      </div>
    
    </body>
    </html>
    </span>