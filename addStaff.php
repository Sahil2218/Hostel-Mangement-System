<!DOCTYPE html>
    <html lang="en">
    <head>
      <meta charset="UTF-8" />
      <title>adding staff Page</title>
      <link rel="stylesheet" href="addstaff.css">
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
           
            <li><a href="#">
              <!-- <i class="fas fa-solid fa-comment"></i> -->
              <i class="fas fa-solid fa-file-invoice"></i>
              <span class="nav-item">Remarks</span>
            </a></li>
            <li><a href="#">
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
        <div>
        <p class="titpg">Adding New staff</p>
        <div class="submit">
        <h1>New staff details</h1>
        <div class="sub">
        <form action="staffdb.php" method="post">
        Name<br>
            <input type="text" name="s" placeholder="first name">
            <br>
            <br>
        Gender <br>
            <input type="radio" name="g" value="male">Male
            <input type="radio" name="g" value="female">Female
            <br>
            <br>
        Department<br>
            <input type="text" name="A" placeholder="Department name"><br>
            <br>
        Designation<br>
            <input type="text" name="Ad" placeholder="Designation"><br>
            <br>
        Qualification<br>
            <input type="text" name="q" placeholder="qualification"><br>
            <br>
            
            <input type="submit"  value="submit"></form></div>
</div>
        </div>
      </div>
    </body>
    </html>  
</span>