console.log('loaded databases.js');

$(document).ready(setup);

function setup(){
  console.log('Inside setup');
  $('*').off();
  $('.table tbody').html('');
  $('#create_user').click(create_user);
  $.get('backend/manage_users/show_users.php').done(show_user).fail(blow_up);
}

function blow_up(data){
  console.log('Inside blow_up');
  console.log(data);
}
