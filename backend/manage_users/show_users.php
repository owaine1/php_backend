<?php
require_once('../common/connection.php');

$user = new DbConnect($admin, $pass);

$sql = 'SELECT User FROM mysql.user; SHOW USERS;';

$result = $user->conn->query($sql);

if ($result){
  $output = $result->fetchAll();
  logger($output);
  echo json_encode($output);
  // do true stuff
}
  else {
    logger($user->conn->error);
    // do false stuff
  }
