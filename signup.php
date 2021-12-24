<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width">
    <title>Football Club Management</title>
    <link href="css/style.css" rel="stylesheet" type="text/css" />
  </head>
  <body class="body-log">
         <form action="signup-info.php" method="post">
      <h2 class="title-sig">SIGN FOR UNITED</h2>
      <div>
        <h4 class="sub-log">Already have an account? <a href="login.php">LOG IN for United</a></h4>
      </div>
      <?php if (isset($_GET['error'])) { ?>
        <p class="error"><?php echo $_GET['error']; ?></p>
      <?php } ?>
      <label class="label-form">Name</label>
      <input class="input-form" type="text" name="name" placeholder="Name"><br>

      <label class="label-form">Email Address</label>
      <input class="input-form" type="text" name="email" placeholder="Email Address"><br>

      <label class="label-form">User ID</label>
      <input class="input-form" type="text" name="uid" placeholder="User ID"><br>

      <label class="label-form">Password</label>
      <input class="input-form" type="password" name="password" placeholder="Password"><br>

      <label class="label-form">Phone Number</label>
      <input class="input-form" type="tel" name="phone" placeholder="Phone Number"><br>

      <label class="label-form">Region</label>
      <input class="input-form" type="text" name="region" placeholder="Region"><br>

      <label class="label-form">Date Of Birth</label>
      <input class="input-form" type="date" name="dob" placeholder="Date Of Birth"><br>

        <button class="button-log" type="submit">SIGN FOR UNITED</button>  
     </form>

    <script src="script.js"></script>
  </body>
</html>