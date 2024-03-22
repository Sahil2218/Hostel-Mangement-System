<?php 
   session_start();
   $sname = "localhost";
$uname = "root";
$password = "";

$db_name = "HOSTEL";

$conn = mysqli_connect($sname, $uname, $password, $db_name);

if (!$conn) {
	echo "Connection Failed!";
	exit();
}
   if (isset($_SESSION['username']) && isset($_SESSION['id'])) {   ?>

<!DOCTYPE html>
<html>
<head>
	<title>HOME</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
</head>
<body>
      <div class="container d-flex justify-content-center align-items-center"
      style="min-height: 100vh">
      	<?php if ($_SESSION['role'] == 'admin') {?>
      		<!-- For Admin -->
      		<h1>hello welcome to admin page</h1>
			
				  	<?php 
				  	$i =1;
				  	while ($rows = mysqli_fetch_assoc($res)) {?>
				    <tr>
				     
				      <td><?=$rows['username']?></td>
				      <td><?=$rows['role']?></td>
				    </tr>
				    <?php $i++; }?>
				  </tbody>
				</table>
				<?php }?>
			</div>
      	<?php }else { ?>
      		<!-- FORE USERS -->
      		<h1>hello welcome to user page</h1>
      	<?php } ?>
      </div>
</body>
</html>
<?php  ?>