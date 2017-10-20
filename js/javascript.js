console.log('loaded');

$(document).ready(setup);

function setup(){
    console.log('Inside setup');
    $('#inside').hide();
    $('#login').click(do_login);
    $('#logout').click(do_logout);
    //check_backend();
}
function do_login(){
  console.log('Inside do_login');
  var user = $('#username').val();
  var pass = $('#password').val();

  var signin_creds = {
    user: user,
    pass: pass
  };
$.get('backend/admin/login.php', signin_creds).done(logged_in);
}
function logged_in(data){
  console.log('Inside logged_in');
  console.log(data);
  if(data == 'logged in'){
    $('#outside').slideUp(800);
    $('#inside').slideDown(800);
  }
  else{
    $('message').text('Sorry you must be logged in');
  }

}
function do_logout(){
  console.log('Inside logged_out');
  $.get('backend/admin/logout.php').done(logged_out).fail(blow_up);
}

function logged_out(){
  console.log('Inside logged_out');
  console.log(data);
  window.location = 'index.php'; // redirect to homepage

}


function blow_up(data){
    console.log('oops...');
    console.log(data);
}
