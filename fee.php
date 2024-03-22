<!DOCTYPE html>
    <html lang="en">
    <head>
      <meta charset="UTF-8" />
      <title>fee Page</title>
      <link rel="stylesheet" href="room.css">
      <!-- Font Awesome Cdn Link -->
      <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"/> -->

      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"/>

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
        <div>
        <p class="titpg"></p>
        <div class="submit">
        <h1>Payment details</h1>
        <div class="sub" style="width: 900px;">
        <form action="feedb.php" method="post">
            Amount<br>
            ₹<input type="text" name="amt" placeholder="Enter amount">
            <input type="text" name="email" placeholder="Email">
            <br>
           
            <br>
            Phone <br>
            <input type="text" name="phone" placeholder="phone">
            <input type="text" name="usn" placeholder="USN"><br>
            <br>
            
            student name <br>
            <input type="text" name="student" placeholder="Student Name">
            <input type="text" name="fn" placeholder="father name"><br>

            <br>
            course name <br>

            <select name="cn">
            <option value="BE">BE/B.tech</option>
            <option value="mba">MBA</option>
            <!-- <option value="EC">EC</option> -->
            </select>
          
            
            <select name="bn">
            <option value="ISE">ISE</option>
            <option value="cse">CSE</option>
            <option value="EC">EC</option>
            </select>
           
            <select name="y">
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
            </select>
           
            <select name="s">
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
            <option value="5">5</option>
            <option value="6">6</option>
            <option value="7">7</option>
            <option value="8">8</option>
            </select>
            <br>
            <br>
            <input type="submit" value="pay ₹ 0.00">
        </form>
          </div>

        </div>
        </div>
      </div>
    </body>
    </html>  
</span>