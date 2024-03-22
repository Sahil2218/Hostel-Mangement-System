<!DOCTYPE html>
    <html lang="en">
    <head>
      <meta charset="UTF-8" />
      <title>adding room Page</title>
      <link rel="stylesheet" href="addingroom.css">
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
        <p class="titpg">Adding New room</p>
        <div class="submit">
        <h1>New Room details</h1>
        <div class="sub">
            Floor No<br>
            <input type="text" name="AddFn" placeholder="floor Number"><br>
            <br>
            Room No<br>
            <input type="text" name="AddRn" placeholder="Room Number"><br>
            <br>
            
            Capcity
            <select>
            <option value="1">   1  </option>
            <option value="2">   2  </option>
            <option value="3">   3  </option>
            </select>
            Furniture
            <select>
            <option value="Yes">YES</option>
            <option value="No">NO</option>
            </select>
            <br>
            <br>
            <input type="submit" name="rsub" value="submit"></div>
        </div>
        </div>
      </div>
    </body>
    </html>  
</span>