<?php
$conn = new mysqli('localhost', 'root', '', 'sunsguem_bakery');
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
?>