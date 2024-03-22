
    



<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <title>Admin Page</title>
  <link rel="stylesheet" href="admin.css" />
  <!-- Font Awesome Cdn Link -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"/>
  <style>
     html,
    body {
        height: 100%;
    }

    body {
        margin: 0;
        background: linear-gradient(45deg, #49a09d, #5f2c82);
        font-family: sans-serif;
        font-weight: 100;
    }

    .container {
        position: relative;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
    }

    table {
        width: 1200px;
        border-collapse: collapse;
        overflow: hidden;
        box-shadow: 0 0 20px rgba(0,0,0,0.1);
    }

    th,
    td {
        padding: 15px;
        background-color: rgba(255,255,255,0.2);
        color: #fff;
    }

    th {
        text-align: left;
        background-color: black;
    }

    tbody tr:hover {
        background-color: rgba(255,255,255,0.3);
    }

    tbody td {
        position: relative;
    }

    tbody td:hover::before {
        content: "";
        position: absolute;
        left: 0;
        right: 0;
        top: -9999px;
        bottom: -9999px;
        background-color: rgba(255,255,255,0.2);
        z-index: -1;
    }
  </style>
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
        <li><a href="Staff.php">
          <i class="fas fa-solid fa-users"></i>
          <span class="nav-item">Staff</span>
        </a></li>
        <li><a href="feeshow.php">
          <i class="fas fa-solid fa-sign-hanging"></i>
          <span class="nav-item">Fee Details</span>
        </a></li>
        <li><a href="loginpage.php" class="logout">
          <i class="fas fa-sign-out-alt"></i>
          <span class="nav-item">Log out</span>
        </a></li>
      </ul>
    </nav>
    <section class="main" style="padding-left: 30px; padding-top: 70px;">
    <h2>Complaints Data</h2>
<table>
  <tr>
    <th>Name</th>
    <th>Year</th>
    <th>Semester</th>
    <th>Floor No</th>
    <th>Room No</th>
    <th>Description</th>
    <th>Action</th>
  </tr>
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
  $sql = "SELECT name, year, sem, floorno, roomno, descr FROM complaints";
  $result = $conn->query($sql);
  if ($result->num_rows > 0) {
    // Output data of each row
    while($row = $result->fetch_assoc()) {
      echo "<tr>";
      echo "<td>" . $row["name"] . "</td>";
      echo "<td>" . $row["year"] . "</td>";
      echo "<td>" . $row["sem"] . "</td>";
      echo "<td>" . $row["floorno"] . "</td>";
      echo "<td>" . $row["roomno"] . "</td>";
      echo "<td>" . $row["descr"] . "</td>";
      // Add a delete button that sends a request to delete.php with the complaint ID
      echo "<td><a href='delete.php?name=" . $row["name"] . "&year=" . $row["year"] . "&sem=" . $row["sem"] . "&floorno=" . $row["floorno"] . "&roomno=" . $row["roomno"] . "' class='delete-btn'>Delete</a></td>";

      echo "</tr>";
    }
  } else {
    echo "<tr><td colspan='7'>0 results</td></tr>";
  }
  $conn->close();
  ?>
</table>
    </section>
  </div>
</body>
</html>

