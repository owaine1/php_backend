<?php
require_once('../common/connection.php');

$user = new DbConnect($admin, $pass);

$user_name = $_GET['user_name'];
$sql = "DROP USER $user_name";

$result = $user->conn->query($sql);

if ($result){
  logger("created user");
  echo "dropped user $user_name";
}
  else {
    logger($user->conn->error);
  }
