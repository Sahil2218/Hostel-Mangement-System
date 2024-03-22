<?php
session_start(); // Start the session

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "HOSTEL";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// User registration
$n = $_POST["name"];
$u = $_POST["usn"];
$a = $_POST["add"];
$p = $_POST["pw"];
$m = $_POST["mb"];
$r = $_POST["role"];

$sql = "INSERT INTO `user` (name, usn, address, password, phone, role) VALUES (?, ?, ?, ?, ?, ?)";

$stmt = $conn->prepare($sql);

// Check if the prepare() succeeded
if (!$stmt) {
    echo "Prepare failed: (" . $conn->errno . ") " . $conn->error;
    exit();
}

$stmt->bind_param("ssssss", $n, $u, $a, $p, $m, $r);

if ($stmt->execute()) {
    // Registration successful, set session variables
    $_SESSION['username'] = $n;
    $_SESSION['password'] = $p;
    
    echo "<div class='tracking-in-contract sai'><b>YOU ARE SIGNED IN !!!</b>
    <form action='room.php' method='post'>
    <button type='submit'><div class='text'> 
    <span>Continue</span>
    </div>
    <div class='clone'>
      <span>Continue</span>
      
    </div>
    <svg
      stroke-width='2'
      stroke='currentColor'
      viewBox='0 0 24 24'
      fill='none'
      class='h-6 w-6'
      xmlns='http://www.w3.org/2000/svg'
      width='20px'
    >
      <path
        d='M14 5l7 7m0 0l-7 7m7-7H3'
        stroke-linejoin='round'
        stroke-linecap='round'
      ></path>
    </svg></button>
    </form></div>";
} else {
    echo "User registration failed.";
}

$stmt->close();
$conn->close();
?>
