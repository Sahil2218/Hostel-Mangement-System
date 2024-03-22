<!DOCTYPE html>
    <html lang="en">
    <head>
      <meta charset="UTF-8" />
      <title>Room Page</title>
      <link rel="stylesheet" href="room.css">
      <!-- Font Awesome Cdn Link -->
      <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"/> -->

      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"/>

    </head>
    <body style="background: linear-gradient(120deg, rgba(21,21,21,1) 34%, rgba(57,57,57,1) 66%);">
      <div class="container">
        <nav>
          <ul>
            <li><a href="#" class="logo">
              <img src="https://img.freepik.com/premium-photo/man-with-green-suit-tie-that-says-doctor-who_771335-52843.jpg?w=740">
              <span class="nav-item">User</span>
            </a></li>
            <li><a href="room.php">
              <i class="fas fa-regular fa-building"></i>
              <span class="nav-item">Room No</span>
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
        <p class="titpg">ROOM VIEW</p>
        <div class="submit">
        <h1>Room details</h1>
        <div class="sub">
        <form action="roomdb.php" method="post">
            Name<br>
            <input type="text" name="name" placeholder="name">
            
            <br>
            year and sem <br>
            <input type="text" name="year" placeholder=" year">
            <input type="text"name="sem" placeholder="sem"><br>
            <br>
            Floor <br>
            <input type="text" name="fn" placeholder="floor-No"><br>
            <br>
            room no <br>
            <input type="text" name="rn" placeholder="Room-No"><br>
            <br>
            Capcity
            <select name="c">
            <option value="1">   1  </option>
            <option value="2">   2  </option>
            <option value="3">   3  </option>
            </select>
            <br>
            <br>
            <input type="submit"   value="submit">
        </form></div>
        </div>
        </div>
      </div>
    </body>
    </html>  
</span>