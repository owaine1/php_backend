<?php
require_once('../common/connection.php');

sleep('1'); // mimic a 'real' server, kinda...

$user = new DbConnect($admin, $pass);

$user_name = $_GET['user_name'];
$user_pass = $_GET['user_password'];
$sql = "CREATE USER $user_name";

$result = $user->conn->query($sql);

if ($result){
  logger("created user");
  echo "created user $user_name";
  echo "created user $user_password";

}
  else {
    logger($user->conn->error);
  }
