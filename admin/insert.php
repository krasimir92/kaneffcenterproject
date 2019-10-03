
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

<body>

<div class="insertformlabel">
  	<h2>Добавете ново представление!</h2>
</div>

<form action="insert.php" method="post">
    <div class="input-predstavlenie">
        <label for="ShowName">Име на представлението</label>
        <input type="text" name="show_name" id="ShowName">
    </div>
    <div class="input-predstavlenie">
        <label for="organization">Организация провеждаща представлението:</label>
        <input type="text" name="org" id="organization">
    </div>
    <div class="input-predstavlenie">
        <label for="uchastnici">Участници в представлението:</label>
        <input type="text" name="uch" id="uchastnici">
    </div>
    <div class="input-predstavlenie">
        <label for="vreme">Час на представлението:</label>
        <input type="time" name="time" id="vreme">
    </div>
    <div class="input-predstavlenie">
        <label for="data">Дата на представлението:</label>
        <input type="date" name="date" id="data">
    </div>
    <div>
        <input type="submit" value="Запази" class="btn">
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
    
   
    $sql = "INSERT INTO predstavleniq (ime_predst, organizaciq_predst, uchastnici_predst, time_predst, date_predst) VALUES ('$show_name', '$org', '$uch', '$time', '$date')";
    if(mysqli_query($conn, $sql))
        {
            echo $message = "Вашата информация е запазена успешно.";
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



<a href="programa.php"><button class="buttonback"><span>Връщане към програмата</span></button></a>


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


