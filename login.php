<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width">
    <title>Football Club Management</title>
    <link href="css/style.css" rel="stylesheet" type="text/css" />
  </head>
  <body class="body-log">
         <form action="login-info.php" method="post">
      <h2 class="title-log">LOG IN TO MY UNITED</h2>
      <div>
        <h4 class="sub-log"> Don't have an account? <a href="signup.php">Sign for United</a></h4>
      </div>
      <?php if (isset($_GET['error'])) { ?>
        <p class="error"><?php echo $_GET['error']; ?></p>
      <?php } ?>
      <label class="label-form">User Name</label>
      <input class="input-form" type="text" name="uname" placeholder="User Name"><br>

      <label class="label-form">Password</label>
      <input class="input-form" type="password" name="password" placeholder="Password"><br>

        <button class="button-log" type="submit">Login</button>  
     </form>

    <script src="script.js"></script>
  </body>
</html>