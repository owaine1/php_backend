<?php

function safety(){

}

// back-end with php
// check the names as they come in,
// send an error back via ajax to say the delete was stopped
// stop the databases from being sent as part of the array of db names

//cannot delete database if a restricted name
// restricted names are:
// mysql
// performance_schema
// sys
// information_schema
if ($db_name == $restricted_names){
$restricted_names = [mysql, performance_schema, sys, information_schema]
} else {

}
// use bill, bob names as test

// maybe needs special password to do it or / and needs to be different user
// display message "You don't have the rights to do this..."
// does it involve
//
// This marries to delete_user.php need to add a bit of code.
