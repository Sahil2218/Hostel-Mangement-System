<!DOCTYPE html>
    <html lang="en">
    <head>
      <meta charset="UTF-8" />
      <title>COMPLAINTS</title>
      
      <!-- Font Awesome Cdn Link -->
      <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"/> -->

      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"/>
<style>
    @import url("https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap");
*{
  margin: 0;
  padding: 0;
  outline: none;
  border: none;
  text-decoration: none;
  box-sizing: border-box;
  font-family: "Poppins", sans-serif;
}
.sai {
  margin: 10px;
  padding: 10px;
  border: 2px solid #01262f;
  width: 630px;
  height: 200px;
  border-radius: 5px;
  resize: none; /* Disable resizing */
  font-family: "Poppins", sans-serif; /* Apply font-family */
  color: #01262f; /* Text color */
   /* Background color */
}
body{
  background: rgb(226, 226, 226);
}
nav{
  position: sticky;
  top: 0;
  bottom: 0;
  height: 100vh;
  left: 0;
  width: 90px;
  /* width: 280px; */
  background: #fff;
  overflow: hidden;
  transition: 1s;
}
nav:hover{
  width: 280px;
  transition: 1s;
}
.logo{
    text-align: center;
    display: flex;
    margin: 10px 0 0 10px;
    padding-bottom: 3rem;
  }
  
  .logo img{
    width: 45px;
    height: 45px;
    border-radius: 50%;
  }
  .logo span{
    font-weight: bold;
    padding-left: 15px;
    font-size: 18px;
    text-transform: uppercase;
  }
  a{
    position: relative;
    width: 280px;
    font-size: 14px;
    color: rgb(85, 83, 83);
    display: table;
    padding: 10px;
  }
  nav .fas{
    position: relative;
    width: 70px;
    height: 40px;
    top: 20px;
    font-size: 20px;
    text-align: center;
  }
  .attendance .fas{
    padding: 10px;
    position: relative;
    align-content: center;
    font-size: 20px;
    color: rgb(85, 83, 83);
  }
  .attendance h1{
    align-content: center;
  }
  .nav-item{
    position: relative;
    top: 12px;
    margin-left: 10px;
  }
  a:hover{
    background: #eee;
  }
  a:hover i{
    color: #0f7188;
    transition: 0.5s;
  }
  .logout{
    position: absolute;
    bottom: 0;
  }
  
  .container{
    display: flex;
  }
  .titpg{
    text-align: left;
    padding: 20px;
    margin: 20px;
    color: #01262f;
    font-size: 40px;
    font-weight:bold;

  }
  .sub{
    padding: 20px;
    width: 800px;
    /* align-items: center; */
    padding-left:100px ;
  }
  .submit{
    margin-top: 20px;
    margin-left: 250px;
    /* padding: 20px; */
    font-size: 20px;
    align-content: center;
    display: relative;
    border: 1px solid black;
    align-content: center;
  }
 .submit input[type=text]{
  margin: 10px;
  padding: 10px;
  border: 2px solid #01262f;
  width: 300px;
  border-radius: 5px;
 }
 .submit h1{
  /* margin: 0; */
    padding: 20px;
    text-align: center;
    background: #01262f;
    color: #5D6F78;
    font-size: 24px;
    font-weight: 300;
    border-bottom: 1px solid #DEDEDE;
    border-top-left-radius: 8px;
    border-top-right-radius: 8px;
 }
 .submit select{
  margin: 10px;
  padding: 10px;
  width: 150px;
  border: 2px solid #01262f;
  border-radius: 5px;
 }
 .submit input[type=submit]{
  margin: 10px;
  padding: 10px;
  border: 2px solid #01262f;
  width: 100px;
  border-radius: 5px;
  color: #fff;
  background: #01262f;
  cursor: pointer;
 }
 .submit input[type=submit]:hover{
  width: 120px;
  transition: 1s;
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
        
        <div>
        <p class="titpg">COMPLAINTS</p>
        <div class="submit">
        <h1>DETAILS</h1>
        <div class="sub">
        <form action="comp.php" method="post">
            Name<br>
            <input type="text" name="name" placeholder=" name">
            <br>
            <br>
            year and usn <br>
            <input type="text" name="year" placeholder=" year">
            <input type="text"name="sem" placeholder="usn"><br>
            <br>
            Floor and  room no <br>
            <input type="text" name="fn" placeholder="floor-No">
            <input type="text" name="rn" placeholder="Room-No"><br>
            Description <br>
            <textarea type="text" id="description" class="sai" name="description" rows="4" placeholder="Description"></textarea>
            <br>
            <br>
            <input type="submit"  value="submit">
        </form></div>
        </div>
        </div>
      </div>
    </body>
    </html>  
</span>