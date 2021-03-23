<?php
require_once 'connection.php';

if ($con) {
  $name = $_POST['name'];

  $insert = "INSERT INTO users(name) VALUES('$name')";

  if ($name != "") {
    $result = mysqli_query($con, $insert);

    $response = array(
      'status' => $result
    );
  } else {
    $response = array(
      'status' => false
    );
  }
} else {
  $response = array(
    'status' => false
  );
}

echo json_encode($response);
mysqli_close($con);
