<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
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
        	font-size: 40px;

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
	color:#ffffff;
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


    </style>

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

</head>
<body>
<!-- main header -->
<header>
	<h1>MANCHESTER UNITED</h1>
	
</header>
<!-- main nav -->
<nav>
	<ul>
	<li><b><a href="index.php">HOME</a></b></li>
	<li><b><a href="all_players.php">PLAYERS</a></b></li>
	<li><b><a href="S.M_mechaniclogin.php">CLUB STAFF</a></b></li>
	<li><b><a href="S.M_userlogin.php">BOARD MEMBERS</a></b></li>
	<li><b><a href="S.M_adminlogin.php">CLUB SHOP</a></b></li>

</ul>
</nav>

<!-- contents -->

  

    
    <section id = "section1">
        <div class="title" style="color:white";> Players </div>

        
          <div style="margin-left:10%;margin-right:10%;margin-top:50px;margin-bottom:50px;text-align:center;background:#b30000;">
          <div class="row" style="padding:5px;">
            <div class="col-md-3" style="color:white";><b> Jersey No. </b></div>  
            <div class="col-md-3" style="color:white";><b> First Name </b></div>
            <div class="col-md-3" style="color:white";><b> Last Name </b></div>
            <div class="col-md-3" style="color:white";><b> Age </b></div>
          </div>
		  <!-- here we will write php codes to fetch data from database and will show in the rows of this table -->
		  <?php
		  require_once("DBconnect.php");
		  $sql = "SELECT * FROM player";
		  $result = mysqli_query($conn,$sql);
		  if(mysqli_num_rows($result) != 0){
			while($row = mysqli_fetch_array($result)){
			?>
				
			<div class="row" style="padding:5px;">
				<div class="col-md-3" style="color:white";> <?php echo $row[0]; ?> </div>  
				<div class="col-md-3" style="color:white";> <?php echo $row[1]; ?> </div>
				<div class="col-md-3" style="color:white";> <?php echo $row[2]; ?> </div>
				<div class="col-md-3" style="color:white";> <?php echo $row[3]; ?> </div>
			</div>
			
			<?php
			}
		  }
		  
		  
		  ?>
		  		  
		  
        </div>
        

    </section>
	
<nav>
	<ul style="margin-left:22%;">
	<li><b><a href="goalkeepers.php">GOAL KEEPERS</a></b></li>
	<li><b><a href="defenders.php">DEFENDERS</a></b></li>
	<li><b><a href="midfielders.php">MIDFIELDERS</a></b></li>
	<li><b><a href="forwards.php">FORWARDS</a></b></li>
	<li><b><a href="injury.php">INJURY UPDATE</a></b></li>
	

</ul>
</nav>	
	
	
	
<!-- main footer -->
</section>
<footer>
<h5 style="color:black" align="center";>Copyright &copy;2021-2022 , Manchester United</h5>
<p style="color:red" align="center";>All rights are reserved.</p>
<small style="color:black">Developed & maintained by Mustakin, Wakil, Sababa, Ishraq, Bidhan</small>
</footer>


</body>
</html>