﻿
<!DOCTYPE html>
<html lang="en">
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
   					<h1 align="center"><a  class="effect-shine">КАНЕВ ЦЕНТЪР</h1></a>
					<p class="virtual" ><a class="effect-underline" >Виртуална разходка</p></a>
					<img src="pictures//icons/location.jpg" width=15% class="imagelocation">
				
					<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
					<button class="buttonbg" value="Refresh Page" onclick="window.location.href='insert.php'"><a class="effect-underline">БГ</a></button>
					<button class="buttonen" value="Refresh Page" onclick="window.location.href='insert_en.php'"><a class="effect-underline">EN</a></button>



		</div>

		<div class="topnav">
				<strong><a href="index.php">НАЧАЛО</a>
				<a href="kanevcentar.php">КАНЕВ ЦЕНТЪР</a>
				<a href="kanev.php">ИГНАТ КАНЕВ</a>
				<a href="programa.php">ПРОГРАМА</a>
				<a href="contacts.php">КОНТАКТИ</a></strong>
			
				

	</div>
		



<?php


include 'db_connection.php';
$conn = OpenCon();	
	mysqli_query($conn,"SET NAMES UTF8");
?>

<form method="post" action="programa.php">
    <h3>Изтрий представление</h3>
    <select name="id_predst">
      <?php
      $sql = mysqli_query($conn, "SELECT id_predst,ime_predst FROM predstavleniq");
      while ($row = mysqli_fetch_assoc($sql)){?>
        <option value="<?php echo $row['id_predst']; ?>"><?php echo $row['ime_predst']; ?></option>
      <?php }?>
    </select>
<input type="submit" name="delete" value="Изтрий представление">
</form>



<div id="footer">	
		<div class="left">
						<p class="hover" >ул. "Студентска" 8, Русе, пк. 7017<br></p>
						<p class="hover">Ректорат: (+359) 082 888 465<br></p>
						<p class="hover">Факс: (+359) 082 845 708<br></p>
						<p class="hover">Канцелария: (+359) 082 888 467<br></p>
						<p class="hover">Тел. централа: (+359) 082 888 211<br></p>
						<p class="hover"><a href="http://www.uni-ruse.bg">http://www.uni-ruse.bg</a></p>
							
					<a href="https://www.facebook.com/%D0%9A%D0%B0%D0%BD%D0%B5%D0%B2-%D1%86%D0%B5%D0%BD%D1%82%D1%8A%D1%80-%D0%A0%D1%83%D1%81%D0%B5%D0%BD%D1%81%D0%BA%D0%B8-%D1%83%D0%BD%D0%B8%D0%B2%D0%B5%D1%80%D1%81%D0%B8%D1%82%D0%B5%D1%82-978466515524007/?ref=br_rs" title="Click on me!" target="_blank">
					<img src="pictures/icons/fb.jpg" width=15% class="image6">	</a>
					
					<a href="https://www.instagram.com/explore/locations/754625904/kaneff-center/?hl=bg" title="Click on me!" target="_blank">
					<img src="pictures/icons/insta.jpg" width=15% class="image6">	</a>
					
					<a href="https://bg.wikipedia.org/wiki/%D0%9A%D0%B0%D0%BD%D0%B5%D0%B2_%D0%A6%D0%B5%D0%BD%D1%82%D1%8A%D1%80" title="Click on me!" target="_blank">
					<img src="pictures/icons/wikipedia.jpg" width=15% class="image6"></a>
					
					
		</div>					
			
		<div class="center">
				<p>(BETA) ©2014 Русенски университет "Ангел Кънчев"</p>
		</div>	
</div>
</body>
</html>


