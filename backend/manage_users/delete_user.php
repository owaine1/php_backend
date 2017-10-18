<?php
require_once('../common/connection.php');

$user = new DbConnect($admin, $pass);

$user_name = $_GET['user_name'];

function safety ($user_name){
  $restricted_names = ['bill', 'bob', 'betty', 'root', 'mysql.sys', 'mysql.session'];
  if (in_array($user_name, $restricted_names)){
    logger('if is true');
    echo "$user_name cannot be deleted!";
  } else {
    logger('if is false');
    global $user;
$sql = "DROP USER $user_name";
$result = $user->conn->query($sql);

if ($result){
  logger("deleted user");
  echo "dropped user $user_name";
}
  else {
    logger($user->conn->error);
  }
}
}
safety($user_name);
