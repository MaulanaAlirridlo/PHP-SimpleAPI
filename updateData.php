<?php
require_once 'connection.php';

if ($con) {
  $id = $_POST['id'];
  $name = $_POST['name'];

  if ($name != "" || $id != "") {
    $update = "UPDATE users SET name = '$name' WHERE id = '$id'";
    $exequery = mysqli_query($con, $update);
  
    $response = array(
      'status' => $exequery
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
