
<!DOCTYPE html>
<html>

<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>php_backend</title>
  <link rel="icon" href="https://www.codester.com/static/uploads/categories/10/icon.png">

  <!-- stylesheets-->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat|Roboto" rel="stylesheet">
  <link rel="stylesheet" href="css/style.css">

  <!-- javscript-->
  <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <script src="js/javascript.js"></script>
</head>

<body class="container">

  <div class="jumbotron">
    <h1>Welcome to php_backend</h1>
    <p>This site will demo stuff</p>
  </div>

<div id="login_div">
  <div id="outside">
    <input type="text" id="username" value="bertie" placeholder="enter username">
    <input type="password" id="password" placeholder="enter password">

    <button type="submit" id="login">login</button>
    <div id="message"></div>
  </div>
  <div id="inside">
    <p>you are logged in!</p>
    <button id="logout">logout</button>
    // now show only logged in stuff!
    <a href="page2.php">go to page 2</a>
  </div>
</div>
  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsam nam et rem, aspernatur accusantium fugit dolorum itaque adipisci dolore vero, eos facere ullam, expedita totam fuga ad ea aperiam harum.</p>

</body>

</html>
