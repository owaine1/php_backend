<?php
session_start();
require_once('../common/connection.php');
require_once('../common/logger.php');
sleep('1'); // mimic a 'real'server, kinda...

$db = new DbConnect($app_user, $app_pass);

$user_name = $_GET['user'];
$user_pass = md5($_GET['pass']);
logger($user_name . $user_pass);

$sql = "SELECT * FROM users WHERE user = '$user_name' && pass = '$user_pass'";
$result = $db->conn->query($sql);

if ($result->rowCount() == 1) {
  logger("user is registered");
  $_SESSION['logged_in'] = true;
  logger($_SESSION);
  echo "logged in";
}else {
  header('Location: index.php');
  echo 'sorry - you must be logged in';
  logger($db->conn->error);
}