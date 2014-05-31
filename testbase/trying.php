<?php
$mysqli = new mysqli("192.254.236.167", "candm_happgov", "happygov1!", "candm_happygov", 3306);
if ($mysqli->connect_errno) {
    echo "Failed to connect to MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
}
echo $mysqli->host_info . "\n";

?>


<ul>
<li>Coffee</li>
<li>Milk</li>
</ul>