
<?php 
  session_start(); 

  if (!isset($_SESSION['username'])) {
  	$_SESSION['msg'] = "You must log in first";
  	header('location: login_en.php');
  }
  if (isset($_GET['logout'])) {
  	session_destroy();
  	unset($_SESSION['username']);
  	header("location: login_en.php");
  }
?>

<!doctype html>
<body>
<style>
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
   					<h1 align="center"><a href="index_en.php">KANEFF CENTER</h1></a>
					<a href="https://www.google.bg/maps/@43.8542249,25.9688844,3a,75y,141.01h,101.11t/data=!3m7!1e1!3m5!1sULsNYe1kdbMAAAQuoP4EPg!2e0!3e2!7i13312!8i6656"><p class="virtual">Virtual walk</p></a>
					<img src="pictures//icons/location.jpg" width=15% class="imagelocation">

					<p class="welcome" >Welcome: <strong><?php echo $_SESSION['username']; ?></strong> / <a href="../index_en.php?logout='1'" style="color: red;">[logout]</a></p>
				
					<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
					<button class="buttonbg" value="Refresh Page" onclick="window.location.href='insert.php'"><a class="language">БГ</a></button>
					<button class="buttonen" value="Refresh Page" onclick="window.location.href='insert_en.php'"><a class="language">EN</a></button>



		</div>



	<div class="topnav">
	
				<strong><a href="index_en.php">HOME</a>
				<a href="kanevcentar_en.php">KANEFF CENTER</a>
				<a href="kanev_en.php">IGNAT KANEV</a>
				<a href="predstavleniq_en.php">PERFORMANCES</a>
				<a href="programa_en.php">PROGRAM</a>
				<a href="contacts_en.php">CONTACT US</a></strong>
			
				

	</div>

<body>

<div class="insertformlabel">
  	<h2>Add new performance!</h2>
</div>

<form action="insert_en.php" method="post">
    <div class="input-predstavlenie">
        <label for="ShowName">Performance's name</label>
        <input type="text" name="show_name" id="ShowName">
    </div>
    <div class="input-predstavlenie">
        <label for="organization">Performing organization:</label>
        <input type="text" name="org" id="organization">
    </div>
    <div class="input-predstavlenie">
        <label for="uchastnici">Participants in the performance:</label>
        <input type="text" name="uch" id="uchastnici">
    </div>
    <div class="input-predstavlenie">
        <label for="vreme">Performance time:</label>
        <input type="time" name="time" id="vreme">
    </div>
    <div class="input-predstavlenie">
        <label for="data">Performance date:</label>
        <input type="date" name="date" id="data">
    </div>
    <div>
        <input type="submit" value="Save" class="btn">
            <div id="statusMessage"> 
                        <?php
                        if (! empty($message)) {
                            ?>
                            <p class='<?php echo $type; ?>Message'><?php echo $message; ?></p>
                        <?php
                        }
                        ?>
            </div>
    </div>

    
    <?php

    include 'db_connection.php';
    $conn = OpenCon();	
    mysqli_query($conn,"SET NAMES UTF8");



 //     write you php code for insert here
    if ($_SERVER['REQUEST_METHOD'] == 'POST'){
    $show_name = mysqli_real_escape_string($conn, $_REQUEST['show_name']);
    $org = mysqli_real_escape_string($conn, $_REQUEST['org']);
    $uch = mysqli_real_escape_string($conn, $_REQUEST['uch']);
    $date = mysqli_real_escape_string($conn, $_REQUEST['date']);
    $time = mysqli_real_escape_string($conn, $_REQUEST['time']);
    
   
    $sql = "INSERT INTO predstavleniq_en (ime_predst, organizaciq_predst, uchastnici_predst, time_predst, date_predst) VALUES ('$show_name', '$org', '$uch', '$time', '$date')";
    if(mysqli_query($conn, $sql))
        {
            echo $message = "Your information was saved successfully.";
         } 
    else
         {
             echo $message ="ERROR: Could not able to execute $sql. " . mysqli_error($conn);
        }

          
    // Close connection
    mysqli_close($conn);
    }
    ?>
</form>
<br><br><br>



<a href="programa_en.php"><button class="buttonback"><span>Back</span></button></a>


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


