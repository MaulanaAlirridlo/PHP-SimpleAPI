<?php
require_once 'connection.php';

if ($con) {
  $id = $_POST['id'];

  if ($id != "") {
      $delete = "DELETE FROM users WHERE id = '$id'";
      $exequery = mysqli_query($con, $delete);

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
