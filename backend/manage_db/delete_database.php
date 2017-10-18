<?php
require_once('../common/connection.php');

$db = new DbConnect($admin, $pass);

$db_name = $_GET['db_name'];
function safety($db_name){
  $restricted_names = ['bill', 'bob', 'mysql', 'performance_schema', 'sys', 'information_schema'];
  if (in_array($db_name, $restricted_names)){
    logger('if is true');
    echo "$db_name cannot be deleted!";
    

    // send message to say delete stopped.
  } else {
    logger('if is false');
    global $db;
    $sql = "DROP DATABASE $db_name";
    $result = $db->conn->query($sql);
    //  go through command and delete
    if ($result){
      logger("deleted database");
      echo "dropped database $db_name";
    }
      else {
        logger($db->conn->error);
      }
    }
}
safety($db_name);
