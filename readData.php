<?php

require_once 'connection.php';

$query = "SELECT * FROM users";
$result = mysqli_query($con, $query);
$response = array();

while ($row = mysqli_fetch_array($result)) {
  array_push($response, array(
    "id" => $row[0],
    "name" => $row[1]
  ));
}

echo json_encode(array("res" => $response));
mysqli_close($con);
