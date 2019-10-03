
<!doctype html>
<body>
<style>
div:not(.loginform):not(.input-group) {
  opacity: 0.6;
  filter: alpha(opacity=10);
}

form, .content {
  width: 30%;
  margin: 0px auto;
  padding: 20px;
  border: 1px solid #B0C4DE;
  background: white;
  border-radius: 0px 0px 10px 10px;
}


</style>
<head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
<script type='text/javascript' src='http://ajax.googleapis.com/ajax/libs/jquery/1.7.0/jquery.min.js?ver=1.7.0'></script>

      <link rel="stylesheet" href="styles.php" media="screen">

	
    </head>	

   <div class="header">
   					<h1 align="center"><a  class="effect-shine">KANEFF CENTER</h1></a>
					<p class="virtual" ><a class="effect-underline" >Virtual walk</p></a>
					<img src="pictures//icons/location.jpg" width=15% class="imagelocation">
				
					<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
					<button class="buttonbg" value="Refresh Page" onclick="window.location.href='login.php'"><a class="effect-underline">БГ</a></button>
					<button class="buttonen" value="Refresh Page" onclick="window.location.href='login_en.php'"><a class="effect-underline">EN</a></button>



		</div>

		<div class="topnav">
	
	<strong><a href="index_en.php">HOME</a>
	<a href="kanevcentar_en.php">KANEFF CENTER</a>
	<a href="kanev_en.php">IGNAT KANEV</a>
	<a href="predstavleniq_en.php">PERFORMANCES</a>
	<a href="programa_en.php">PROGRAM</a>
	<a href="contacts_en.php">CONTACT US</a></strong>

	

</div>


	<div class="loginform">
  	<h5>Welcome!</h5>
 	 </div>
	 
  <form method="post" action="login_en.php">
  <?php include('server_en.php') ?>
  	<?php include('errors.php'); ?>
  	<div class="input-group">
  		<label>User name</label>
  		<input type="text" name="username" >
  	</div>
  	<div class="input-group">
  		<label>Password</label>
  		<input type="password" name="password">
  	</div>
  	<div class="input-group">
  		<button type="submit" class="btn" name="login_user">Log in</button>
  	</div>
  	<p>Don't have an account yet?<a href="register_en.php">Register</a></p>
  </form>
  <br><br><br>




  <div id="footer">

	
<div class="left">
					<a class="lang" key="STUDENTSKA"><p class="hover" >8 Studentska str., Rousse, 7017<br></p>
					<p class="hover">Rectorate: (+359) 082 888 465<br></p>
					<p class="hover">Fax: (+359) 082 845 708<br></p>
					<p class="hover">University office: (+359) 082 888 467<br></p>
					<p class="hover">Call center: (+359) 082 888 211<br></p></a>
					<p class="hover"><a href="http://www.uni-ruse.bg">http://www.uni-ruse.bg</a></p>
						
				<a href="https://www.facebook.com/%D0%9A%D0%B0%D0%BD%D0%B5%D0%B2-%D1%86%D0%B5%D0%BD%D1%82%D1%8A%D1%80-%D0%A0%D1%83%D1%81%D0%B5%D0%BD%D1%81%D0%BA%D0%B8-%D1%83%D0%BD%D0%B8%D0%B2%D0%B5%D1%80%D1%81%D0%B8%D1%82%D0%B5%D1%82-978466515524007/?ref=br_rs" title="Click on me!" target="_blank">
				<img src="pictures/icons/fb.jpg" width=15% class="image6">	</a>
				
				<a href="https://www.instagram.com/explore/locations/754625904/kaneff-center/?hl=bg" title="Click on me!" target="_blank">
				<img src="pictures/icons/insta.jpg" width=15% class="image6">	</a>
				
				<a href="https://bg.wikipedia.org/wiki/%D0%9A%D0%B0%D0%BD%D0%B5%D0%B2_%D0%A6%D0%B5%D0%BD%D1%82%D1%8A%D1%80" title="Click on me!" target="_blank">
				<img src="pictures/icons/wikipedia.jpg" width=15% class="image6"></a>
				
				
</div>					
		
<div class="center">
		
<a class="lang" key="footer">	<p>(BETA) ©2014  "Angel Kanchev" University of Ruse</p></a>
</div>
	
</div>





</body>
</html>


