<!DOCTYPE html>
    <html lang="en">
    <head>
      <meta charset="UTF-8" />
      <title>User Page</title>
      <link rel="stylesheet" href="user.css" />
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
          <div class="main-top ">
            <h1>Welcome User..!</h1>
            <i class="fas fa-regular fa-user-gear"></i>
          </div>
          <div class="users">
            <div class="card rotate-center">
              <img src="https://img.freepik.com/free-photo/school-students-digital-art-style-education-day_23-2151164386.jpg?size=626&ext=jpg&ga=GA1.1.2008673500.1700206067&semt=ais_ai_generated">
              <h4>Student</h4>
              <p></p>
              <br>
              <button><a href="students.php">View</a></button>
            </div>
            <div class="card rotate-center">
              <img src="https://img.freepik.com/free-photo/3d-computer-workstation-with-desk-room_23-2150714135.jpg?size=626&ext=jpg&ga=GA1.1.2008673500.1700206067&semt=ais_ai_generated">
              <h4>Room</h4>
              <p></p>
              <br>
              <button><a href="roomdetails.php">view</a></button>
            </div>
            <div class="card rotate-center">
              <img src="https://img.freepik.com/premium-photo/group-photo-food-top-view-ai-generator_954970-358.jpg?size=626&ext=jpg&ga=GA1.1.2008673500.1700206067&semt=ais_ai_generated">
              <h4>Mess</h4>
              <p></p>
              <br>
              <button><a href="mess.php">View</a></button>
            </div>
            <div class="card rotate-center">
              <img src="https://img.freepik.com/free-photo/view-3d-hands-showing-thumbs-up-gesture_23-2150995891.jpg?size=626&ext=jpg&ga=GA1.1.2008673500.1700206067&semt=ais_ai_generated">
              <h4> Student Review</h4>
              <p></p>
              <br>
              <button><a href="usercomp.php">view</a></button>
            </div>
          </div>
    
          <section class="attendance">
            <div class="attendance-list">
              <h1><i class="fas fa-brands fa-trello"></i></i>Notice Board</h1>
              <div class="notice">
               Happy New Year
              </div>
              <div class="notice">
                Monthly special dinner will be provided today
              </div>              
              <div class="notice">
                Fresher's day[23th FEB 2024 (6.00pm)]
              </div>
            </div>
          </section>
        </section>
      </div>
    
    </body>
    </html>
    </span>