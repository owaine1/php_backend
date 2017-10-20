console.log('loaded');

$(document).ready(setup);

function setup(){
    console.log('Inside setup');
    $('#inside').hide();
    $('#login').click(do_login);
    $('#logout').click(do_logout);
    check_backend();
}
function do_login(){
  console.log('Inside do_login');
  var user = $('username').val();
  var pass = $('password').val();

  var signin_creds = {
    user: user,
    pass: pass
  };

}
function do_logout(){
  console.log('Inside do_logout');
}

function check_backend(){
    console.log('Inside check_backend');
    $.get('backend/common/check.php').done(success).fail(fail);
}

function success(data){
    console.log(data);
}

function fail(data){
    console.log('oops...');
    console.log(data);
}
