<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "HOSTEL";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Retrieve the total number of students
$sql = "SELECT COUNT(*) AS totalStudents FROM user";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    $totalStudents = $row["totalStudents"];
} else {
    $totalStudents = 0;
}

// Retrieve the total number of rooms
$sql = "SELECT COUNT(*) AS totalRooms FROM room";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    $totalRooms = $row["totalRooms"];
} else {
    $totalRooms = 0;
}

// Retrieve the total number of staff
$sql = "SELECT COUNT(*) AS totalStaff FROM staff";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    $totalStaff = $row["totalStaff"];
} else {
    $totalStaff = 0;
}
$sql = "SELECT COUNT(*) AS totalComplaints FROM complaints";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    $totalComplaints = $row["totalComplaints"];
} else {
    $totalComplaints = 0;
}

// Close the database connection
$conn->close();
?>




<span style="font-family: verdana, geneva, sans-serif;"><!DOCTYPE html>
    <html lang="en">
    <head>
      <meta charset="UTF-8" />
      <title>Admin Page</title>
      <link rel="stylesheet" href="admin.css" />
      <!-- Font Awesome Cdn Link -->
      <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"/> -->

      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"/>

    </head>
    <body style="background: linear-gradient(120deg, rgba(21,21,21,1) 34%, rgba(57,57,57,1) 66%);">
      <div class="container">
        <nav>
          <ul>
            <li><a href="" class="logo">
              <img src="https://img.freepik.com/premium-photo/man-with-green-suit-tie-that-says-doctor-who_771335-52843.jpg?w=740">
              <span class="nav-item">Admin</span>
            </a></li>
            <li><a href="adroom.php">
              <i class="fas fa-regular fa-building"></i>
              <span class="nav-item">Room</span>
            </a></li>
            <li><a href="Staff.php">
              <i class="fas fa-solid fa-users"></i>
              <span class="nav-item">Staff</span>
            </a></li>
            <!-- <li><a href="#">
              <i class="fas fa-solid fa-file-invoice"></i>
              <span class="nav-item">Remarks</span>
            </a></li> -->
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
            <div class="card">
              <img src="https://img.freepik.com/free-vector/meeting-concept-illustration_114360-717.jpg?size=626&ext=jpg&ga=GA1.1.2008673500.1700206067&semt=ais">
              <h4>Hostellers</h4>
              <p><?php echo $totalStudents; ?></p>
              <button><a href="adminone.php">View</a></button>
            </div>
            <div class="card">
              <img src="https://img.freepik.com/free-photo/small-room-with-bed-bookcase-bookcase_1340-43286.jpg?size=626&ext=jpg&ga=GA1.1.2008673500.1700206067&semt=ais_ai_generated">
              <h4>Room</h4>
              <p><?php echo $totalRooms; ?></p>
              <button><a href="roomf.php">view</a></button>
            </div>
            <div class="card">
              <img src="https://img.freepik.com/free-vector/hotel-staff-concept-illustration_114360-14048.jpg?size=626&ext=jpg&ga=GA1.1.2008673500.1700206067&semt=sph">
              <h4>Staffs</h4>
              <p><?php echo $totalStaff; ?></p>
              <button><a href="stafff.php">View</a></button>
            </div>
            <div class="card">
              <img src="https://img.freepik.com/free-vector/organic-flat-feedback-concept_52683-62653.jpg?size=626&ext=jpg&ga=GA1.1.2008673500.1700206067&semt=sph">
              <h4>Remarks</h4>
              <p><?php echo $totalComplaints; ?></p>
              <button><a href="compf.php">view</a></button>
            </div>
          </div>
    
          <section class="attendance">
            <div class="attendance-list">
              <h1><i class="fas fa-brands fa-trello"></i>Circulars</h1>
              <div class="notice">
              Fee Dues must be cleared within this weekend.
              </div>
              <div class="notice">
              Hostel faculties must ensure that no students should indulge in illegal activities.
              </div>              
              <div class="notice">
              Higher Authorities are visiting our hostel this week.
              </div>
            </div>
          </section>
        </section>
      </div>
    
    </body>
    </html>
    </span>