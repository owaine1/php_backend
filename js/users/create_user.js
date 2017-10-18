function create_user(){
  console.log('Inside create_user');
  var user_name = $('#user_name').val();
  console.log(user_name);

  var pass = $('#user_password').val();
  console.log(pass);


  var data = {user_name: user_name, user_password: pass};
  $.get('backend/manage_users/create_user.php', data).done(created_user).fail(blow_up);
  $('#create_user').removeClass('btn-primary').addClass('btn-warning').text('creating...');
}

function created_user(){
  console.log('Inside created_user');
  $('#create_user').removeClass('btn-warning').addClass('btn-success').text('created!');
  setup();
}
