<?php
$con = mysqli_connect("192.254.236.167:3306","candm_happgov","happygov1!","candm_happygov");

// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
  
  echo $con->host_info . "\n";
?>


<ul>
<li>Coffee</li>
<li>Milk</li>
</ul>