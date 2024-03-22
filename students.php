

<!DOCTYPE html>
    <html lang="en">
    <head>
      <meta charset="UTF-8" />
      <title>User Page</title>
      <link rel="stylesheet" href="user.css" />
      <!-- Font Awesome Cdn Link -->
      <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"/> -->
<link  rel="stylesheet" href="usercard.css"/>
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
   

  </style>
    </head>
    <body style="background: linear-gradient(120deg, rgba(21,21,21,1) 34%, rgba(57,57,57,1) 66%);">
      <div class="container">
        <nav>
          <ul>
            <li><a href="userhome.php" class="logo">
              <img src="https://img.freepik.com/premium-photo/man-with-green-suit-tie-that-says-doctor-who_771335-52843.jpg?w=740">
              <span class="nav-item">User</span>
            </a></li>
            <!-- <li><a href="room.php">
              <i class="fas fa-regular fa-building"></i>
              <span class="nav-item">Room No</span>
            </a></li> -->
            <li><a href="fee.php">
            <i class="fas fa-solid fa-money-check-dollar"></i>
              <span class="nav-item">Fees</span>
            </a></li>
            <li><a href="mess.php">
              <!-- <i class="fas fa-solid fa-comment"></i> -->
              <i class="fas fa-solid fa-bowl-food"></i>
              <span class="nav-item">Mess</span>
            </a></li>
            <li><a href="complaints.php">
              <i class="fas fa-solid fa-sign-hanging"></i>
              <span class="nav-item">Complaints</span>
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
        <?php
session_start();

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "HOSTEL";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SESSION['role'] == 'admin') {
    $sql = "SELECT * FROM user"; // Query to fetch all users
} else {
    $name = $_SESSION["name"];
    $sql = "SELECT name,usn,address,phone,role FROM user WHERE name = ?";;
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $name);
    $stmt->execute();
    $result = $stmt->get_result();
    $stmt->close();
}

// Execute the query and process the result as needed


if ($result->num_rows > 0) {
    
    while($row = $result->fetch_assoc()) {
        echo "<div class='user-description'>";
       echo '<div class="card">';
    echo '<div class="ds-top"></div>';
    echo '<div class="avatar-holder">';
      echo '<img src="img/360_F_117959178_mOp22kjhdhWdoSoePHPafN7GLUYyvFNY.jpg ">';
      echo '</div>';
      echo '<div class="name">';
      echo '<h2>' . $row["name"] . '</h2>';
      echo '<br>';
      echo '<h4 title="Followers"><span class="followers">USN :' . $row["usn"] . '</span></h4>';
     
      echo '<h5 title="Followers"><span class="followers">ADDRESS  :' . $row["address"] . '</span></h4>';
      // echo '<br>';
      // echo '<br>';
      echo '</div>';
      
      echo '<div class="ds-info">';
      
      echo '<div class="ds pens">';
      echo ' <h5 title="Number of pens created by the user">PHONE </h5>';;
      echo '<p>' . $row["phone"] . '</p>';
      echo '</div>';
      echo '<div class="ds projects">';
      echo ' <h5 title="Number of projects created by the user">ROLE</h5>';;
      echo ' <p>' . $row["role"] . '</p>';
      echo '</div>';
      
      echo '</div>';
      echo '</div>';   
        echo "</div>";
        
    }
    
} else {
    echo "0 results";
}
$conn->close();
?>

       
            
        </section>
   
    
    </body>
    </html>
    </span>
    
