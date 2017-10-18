console.log('loaded databases.js');

$(document).ready(setup);

function setup(){
  console.log('Inside setup');
  $('*').off();
  $('.table tbody').html('');
  $('#create_db').click(create_db);
  $.get('backend/manage_db/show_databases.php').done(show_dbs).fail(blow_up);
}


function delete_db(){
  console.log('Inside delete_db');
  var db_to_be_deleted =$(this).attr('id');
  console.log(db_to_be_deleted);
  var data = {db_name: db_to_be_deleted};
  $.get('backend/manage_db/delete_database.php', data).done(deleted_db).fail(blow_up);
}

function deleted_db(data){
  console.log('Inside deleted_db');
  console.log(data);
  setup();
}
function blow_up(data){
  console.log('Inside blow_up');
  console.log(data);
}
function create_db(){
  console.log('Inside create_db');
  var db = $('#db_name').val();
  var data = {db_name: db};
  $.get('backend/manage_db/create_database.php', data).done(created_db).fail(blow_up);
  $('#create_db').removeClass('btn-primary').addClass('btn-warning');
}

function created_db(){
  console.log('Inside created_db');
  $('#create_db').removeClass('btn-warning').addClass('btn-success');

  setup();
}
