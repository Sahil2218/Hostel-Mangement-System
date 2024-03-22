<!-- <?php
// include('db.php'); // Include the database connection file

// if ($_SERVER["REQUEST_METHOD"] == "POST") {
//     $username = $_POST['un'];
//     $password = $_POST['pw'];

//     $sql = "SELECT * FROM user WHERE username='$username' AND password='$password'";
//     $result = $conn->query($sql);

//     if ($result->num_rows > 0) {
//         // User exists, redirect to user page
//         header('Location: userhome.php');
//     } else {
//         // User does not exist or credentials are incorrect
//         echo "Invalid username or password";
//     }
// }
?> -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Login Page</title>
   <style>
   
   .sai {
  background-image: url('img/2150683501.jpg');
  background-repeat: no-repeat;
  background-size: cover; /* Ensures the background image covers the entire section */
  width: 100%;
  height: 100%;
   }

.sai2 {
  border-radius: 1rem 0 0 1rem;
  width: 100%; /* Ensure the image takes up the entire width of its container */
  height: 100%;/* Allow the height to adjust automatically based on the image's aspect ratio */
  object-fit: cover; 
  background-size: cover;/* Ensure the image covers the entire container without being stretched */
}
</style>
</head>
<body>
<section class="vh-100 sai" >
  <div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col col-xl-10">
        <div class="card" style="border-radius: 1rem;">
          <div class="row g-0">
            <div class="col-md-6 col-lg-5 d-none d-md-block">
              <img src="img/Designer (3).jpeg" alt="login form" class="img-fluid sai2" />
            </div>
            <div class="col-md-6 col-lg-7 d-flex align-items-center">
              <div class="card-body p-4 p-lg-5 text-black">
                  <h5 class="fw-normal mb-3 pb-3" style="letter-spacing: 1px;">login into your account</h5>
                <form id="loginForm" action="log.php" method="post">
                  <div class="form-outline mb-4">
                    <input type="text" id="username" name="un" class="form-control form-control-lg" required >
                    <label class="form-label" for="form2Example17">username</label>
                  </div>
                  <div class="form-outline mb-4">
                    <input type="password" class="form-control form-control-lg" id="password" name="pw" required >
                    <label class="form-label" for="form2Example27">Password</label>
                  </div>
                  <div class="form-outline mb-4" id="roomNoField" style="display: none;">
                    <input type="password" class="form-control form-control-lg" id="roomno" name="roomno" required >
                    <label class="form-label" for="form2Example27">room no</label>
                  </div>
                  <div class="form-group"> <!-- Added form-group here -->
                    <select name="role" id="role" class="form-control form-control-lg" onchange="toggleRoomNoField()" required>
                        <option selected value="user">User</option>
                        <option value="admin">Admin</option>
                    </select>
                    <label class="form-label" for="form2Example27">Role</label>
                  </div>
                  <div class="pt-1 mb-4">
                    <button class="btn btn-dark btn-lg btn-block" onclick="login()" type="button">Login</button>
                    <button class="btn btn-dark btn-lg btn-block" type="button"><a class="nav-link " href="index.html">Go Back</a></button>
                  </div>
                  <p class="mb-5 pb-lg-2" style="color: #393f81;">Don't have an account? <a href="signuppage.php" style="color: #393f81;">Register here</a></p>
                  <a href="#!" class="small text-muted">Terms of use.</a>
                  <a href="#!" class="small text-muted">Privacy policy</a>

              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<script>
    function login() {
    var username = document.getElementById('username').value;
    var password = document.getElementById('password').value;
    var role = document.getElementById('role').value;

    if (role === 'admin') {
        // Check if the provided credentials match the admin's predefined credentials
        if (username === "admin" && password === "pass") {
            window.location.href = 'admin.php'; // Redirect to admin home page
        } else {
            alert("Incorrect admin credentials.");
        }
    } else {
      document.getElementById('loginForm').submit();
    }
}

function toggleRoomNoField() {
    var role = document.getElementById('role').value;
    var roomNoField = document.getElementById('roomNoField');

    if (role === 'admin') {
        roomNoField.style.display = 'none'; // Hide room no field for admin
    } else {
        roomNoField.style.display = 'block'; // Show room no field for user
    }
}

// Call the toggleRoomNoField function on page load
toggleRoomNoField();
</script>

</body>
</html>
