function create_user(){
  console.log('Inside create_user');
  var db = $('#user_name').val();
  var pass = ('#user_password').val();
  var data = {user_name: db, password: pass};
  $.get('backend/manage_db/create_user.php', data).done(created_user).fail(blow_up);
  $('#create_user').removeClass('btn-primary').addClass('btn-warning').text('creating...');
}

function created_user(){
  console.log('Inside created_user');
  $('#create_user').removeClass('btn-warning').addClass('btn-success').text('created!');
  setup();
}
