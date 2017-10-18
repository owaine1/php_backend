<?php
require_once('../common/connection.php');

$db = new DbConnect($admin, $pass);

$db_name = $_GET['db_name'];
$sql = "DROP USER $user_name";

$result = $db->conn->query($sql);

if ($result){
  logger("created user");
  echo "dropped user $user_name";
}
  else {
    logger($db->conn->error);
  }
