<?php
$mysqli = new mysqli("192.254.236.167", "candm_happgov", "happygov1!", "candm_happygov", 3306);
if ($mysqli->connect_errno) {
    echo "Failed to connect to MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
}
echo $mysqli->host_info . "\n";

?>




<?php
$mysqli->real_query("SELECT id FROM happy_gov ORDER BY id DESC limit 15");
$res = $mysqli->use_result();

echo "Result set order...\n";
while ($row = $res->fetch_assoc()) {
    echo " id = " . $row['id'] . "\n";
}
?>


<ul>
<li>Coffee</li>
<li>Milk</li>
</ul>