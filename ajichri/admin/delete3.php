<?php
include "db_connect.php";
$id = $_GET["id"];
$sql = "DELETE FROM `client` WHERE id = $id";
$result = mysqli_query($conn, $sql);

if ($result) {
  header("Location: data_client.php?msg=Data deleted successfully");
} else {
  echo "Failed: " . mysqli_error($conn);
}