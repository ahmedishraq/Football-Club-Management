<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width">
        <title>Manchester United</title>

    <style>
      body{
       font-family:"Arial", sans-serif;
       margin:0px;
      background-color: white;
      }

      header{
        font-family: "Arial" , sans-serif;
        text-align: center;
        background-image: url("https://drive.google.com/uc?export=view&id=1f7N-8LcI2PVpLm7LRHWtPtZ-yJCX-qKc");
        color: #b30000;
        padding:250px;
        font-size: 50px;
        }
   
 nav{
  background-color: #b30000;
  overflow: hidden;
  }

  nav ul{
    list-style: none;
    padding: 0px;
    margin: 0px;

  }
  nav ul li{
    float: left;

  }
  nav ul li a{
    text-decoration: none;
    color:white;
    padding: 10px 25px;
    display: inline-block;
    font-size: 18px;

  }
  nav ul li a:hover{
    background-color: black;
  }
  nav ul li a.active{
    background-color: grey;
  }

  .title{
    background-image: url("https://drive.google.com/uc?export=view&id=1iSeV7imNZgWfMXyB58lwARElfbQ44TDV");
    width: 100%;
    padding: 12px 20px;
    margin-top: 40px;
    text-align:center;
    text-transform: Uppercase;
    font-weight: 800;
    font-size: 30px;
  }

  .button-log {
   -webkit-border-radius: 24px;
   -moz-border-radius: 24px;
   border-radius: 24px;
   height: 3px;
   line-height: 3px;
   color: #FFFFFF;
   font-family: Arial;
   width: 300px;
   font-size: 18px;
   font-weight: 100;
   padding: 20px;
   background-color: #F31B2F;
   text-decoration: none;
   display: block;
   cursor: pointer;
   text-align: center;
   margin: auto;
}

label{
  color: #888;
  font-size: 18px;
  padding: 10px;
}

input{
  display: block;
  border: 2px solid #ccc;
  width: 95%;
  padding: 10px;
  margin: 10px auto;
  border-radius: 5px;
}

form{
  width: 500px;
  border: 5px solid #ccc;
  padding: 40px;
  background: #fff;
  border-radius: 15px;
}

.body-log{
  /*background: #1690A7;*/
  font-family: "Arial", sans-serif;
  display: flex;
  justify-content: center;
  align-items: center;
  /*height: 100vh;*/
  flex-direction: column;

}

.error {
   background: #F2DEDE;
   color: #A94442;
   padding: 10px;
   width: 95%;
   border-radius: 5px;
   margin: 20px auto;
}

.title-log{
  text-align: center;
  margin-bottom: 40px;
}
.title-sig{
  text-align: center;
  margin-bottom: 40px;
  /*margin-top: 300px;*/
}

.sub-log{
  text-align: center;
  text-decoration: bold;
  font-size: 18px;
}

.design{
  color: black;
}

.design:hover, .design:active{
  color: red;
}

  </style>

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <!-- <link href="css/style.css" rel="stylesheet" type="text/css" /> -->
  </head>
  <body>
        <header>
      <h1>MANCHESTER UNITED</h1>  
    </header>
    <section id="section1">
      <div class="title" style="color:white;">MY UNITED</div><br style="line-height: 100px;">
    <div class="body-log">
         <form action="signup-info.php" method="post">
      <h2 class="title-sig">SIGN FOR UNITED</h2>
      <div>
        <h4 class="sub-log">Already have an account? <a href="login.php" class="design">LOG IN for United</a></h4>
      </div>
      <?php if (isset($_GET['error'])) { ?>
        <p class="error"><?php echo $_GET['error']; ?></p>
      <?php } ?>
      <label>Name</label>
      <input type="text" name="name" placeholder="Name"><br>

      <label>Email Address</label>
      <input type="text" name="email" placeholder="Email Address"><br>

      <label>User ID</label>
      <input type="text" name="uid" placeholder="User ID"><br>

      <label>Password</label>
      <input type="password" name="password" placeholder="Password"><br>

      <label>Phone Number</label>
      <input type="tel" name="phone" placeholder="Phone Number"><br>

      <label>Region</label>
      <input type="text" name="region" placeholder="Region"><br>

      <label>Date Of Birth</label>
      <input type="date" name="dob" placeholder="Date Of Birth"><br>

        <button class="button-log" type="submit">SIGN FOR UNITED</button>  
     </form>
   </div>


<!-- main footer -->
</section><br style="line-height: 100px;">
<footer>
<h5 style="color:black" align="center";>Copyright &copy;2021-2022 , Manchester United</h5>
<p style="color:red" align="center";>All rights are reserved.</p>
<small style="color:black">Developed & maintained by Mustakin, Wakil, Sababa, Ishraq, Bidhan</small>
</footer>

  </body>
</html>