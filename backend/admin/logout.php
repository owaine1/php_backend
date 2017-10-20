<?php
session_start();
require_once('../common/logger.php');

sleep('1'); // mimic a 'real' server, kinda...

$_SESSION['logged_in'] = false;  //users th $_SESSION global array
echo 'logged out...'; //send message to js front-end
