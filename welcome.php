<html>
<body>

Welcome <?php echo $_POST["name"]; ?><br>
Your email address is: <?php echo $_POST["email"]; ?>
<?php setcookie("user",$_POST["name"] , time()+3600); ?>

<?php
$con=mysqli_connect("localhost","root","password","test");
// Check connection
if (mysqli_connect_errno())
  {
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

$sql="INSERT INTO employees (first_name, last_name)
VALUES
('$_POST[name]', '$_POST[email]')";

if (!mysqli_query($con,$sql))
  {
    die('Error: ' . mysqli_error($con));
  }
echo "1 record added";

mysqli_close($con);
?> 


<p> <a href="form.php">back </a> </p>
<p> <a href="list.php">list </a> </p>
</body>
</html> 
