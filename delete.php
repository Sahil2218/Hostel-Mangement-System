
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .sai{
            display: grid;
            justify-content: center;
            align-items: center; 
           padding-top: 23%;
           font-size:  45px;
           font-family: Arial, Helvetica, sans-serif;
            text-align: center;

        }
        button {
  width: 140px;
  height: 56px;
  overflow: hidden;
  border: none;
  color: #fff;
  background: none;
  position: relative;
  padding-bottom: 2em;
  cursor: pointer;
}

button > div,
button > svg {
  position: absolute;
  width: 100%;
  height: 100%;
  display: flex;
}

button:before {
  content: "";
  position: absolute;
  height: 2px;
  bottom: 0;
  left: 0;
  width: 100%;
  transform: scaleX(0);
  transform-origin: bottom right;
  background: currentColor;
  transition: transform 0.25s ease-out;
}

button:hover:before {
  transform: scaleX(1);
  transform-origin: bottom left;
}

button .clone > *,
button .text > * {
  opacity: 1;
  font-size: 1.3rem;
  transition: 0.2s;
  margin-left: 4px;
}

button .clone > * {
  transform: translateY(60px);
}

button:hover .clone > * {
  opacity: 1;
  transform: translateY(0px);
  transition: all 0.2s cubic-bezier(0.215, 0.61, 0.355, 1) 0s;
}

button:hover .text > * {
  opacity: 1;
  transform: translateY(-60px);
  transition: all 0.2s cubic-bezier(0.215, 0.61, 0.355, 1) 0s;
}

button:hover .clone > :nth-child(1) {
  transition-delay: 0.15s;
}

button:hover .clone > :nth-child(2) {
  transition-delay: 0.2s;
}

button:hover .clone > :nth-child(3) {
  transition-delay: 0.25s;
}

button:hover .clone > :nth-child(4) {
  transition-delay: 0.3s;
}
/* icon style and hover */
button svg {
  width: 20px;
  right: 0;
  top: 50%;
  transform: translateY(-50%) rotate(-50deg);
  transition: 0.2s ease-out;
}

button:hover svg {
  transform: translateY(-50%) rotate(-90deg);
}

        .tracking-in-contract {
	-webkit-animation: tracking-in-contract 0.8s cubic-bezier(0.215, 0.610, 0.355, 1.000) both;
	        animation: tracking-in-contract 0.8s cubic-bezier(0.215, 0.610, 0.355, 1.000) both;
}
/* ----------------------------------------------
 * Generated by Animista on 2024-3-5 2:21:48
 * Licensed under FreeBSD License.
 * See http://animista.net/license for more info. 
 * w: http://animista.net, t: @cssanimista
 * ---------------------------------------------- */

/**
 * ----------------------------------------
 * animation tracking-in-contract
 * ----------------------------------------
 */
@-webkit-keyframes tracking-in-contract {
  0% {
    letter-spacing: 1em;
    opacity: 0;
  }
  40% {
    opacity: 0.6;
  }
  100% {
    letter-spacing: normal;
    opacity: 1;
  }
}
@keyframes tracking-in-contract {
  0% {
    letter-spacing: 1em;
    opacity: 0;
  }
  40% {
    opacity: 0.6;
  }
  100% {
    letter-spacing: normal;
    opacity: 1;
  }
}

    </style>
</head>
<body><?php
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

// Check if the parameters are set
if (isset($_GET['name']) && isset($_GET['year']) && isset($_GET['sem']) && isset($_GET['floorno']) && isset($_GET['roomno'])) {
    $name = $_GET['name'];
    $year = $_GET['year'];
    $sem = $_GET['sem'];
    $floorno = $_GET['floorno'];
    $roomno = $_GET['roomno'];
    
    // Prepare a delete statement
    $stmt = $conn->prepare("DELETE FROM complaints WHERE name = ? AND year = ? AND sem = ? AND floorno = ? AND roomno = ?");
    $stmt->bind_param("sssss", $name, $year, $sem, $floorno, $roomno);
    
    // Execute the delete statement
    if ($stmt->execute()) {
        echo "<div class='tracking-in-contract sai'><b>Record deleted successfully</b>
    <form action='compf.php' method='post'>
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
        echo "Error deleting record: " . $conn->error;
    }
    
    // Close the prepared statement
    $stmt->close();
}

// Close the connection
$conn->close();
?>
</body></html>