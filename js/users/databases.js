console.log('loaded databases.js');

$(document).ready(setup);

function setup(){
  console.log('Inside setup');
  $('*').off();
  $('.table tbody').html('');
  $('#create_db').click(create_db);
  $.get('backend/manage_db/show_databases.php').done(show_dbs).fail(blow_up);
}

function blow_up(data){
  console.log('Inside blow_up');
  console.log(data);
}
