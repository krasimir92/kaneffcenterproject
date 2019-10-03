<?php 
  session_start(); 

  if (!isset($_SESSION['username'])) {
  	$_SESSION['msg'] = "You must log in first";
  	header('location: login.php');
  }
  if (isset($_GET['logout'])) {
  	session_destroy();
  	unset($_SESSION['username']);
  	header("location: login.php");
  }
?>






<!doctype html>
<body>

<head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
<script type='text/javascript' src='http://ajax.googleapis.com/ajax/libs/jquery/1.7.0/jquery.min.js?ver=1.7.0'></script>

      <link rel="stylesheet" href="styles.php" media="screen">
	  <style>





/* The dots/bullets/indicators */
.dot {
  height: 15px;
  width: 15px;
  margin: 0 2px;
  background-color: #bbb;
  border-radius: 50%;
  display: inline-block;
  transition: background-color 0.6s ease;
}

.active{
  background-color: #717171;
}



</style>
	
    </head>	

   <div class="header">

  
   					<h1 align="center"><a href="index.php">КАНЕВ ЦЕНТЪР</h1></a>
					<a href="https://www.google.bg/maps/@43.8542249,25.9688844,3a,75y,141.01h,101.11t/data=!3m7!1e1!3m5!1sULsNYe1kdbMAAAQuoP4EPg!2e0!3e2!7i13312!8i6656"><p class="virtual" >Виртуална разходка</p></a>
					<img src="pictures//icons/location.jpg" width=15% class="imagelocation">
				
					<p class="welcome" >Добре дошли: <strong><?php echo $_SESSION['username']; ?></strong> / <a href="index.php?logout='1'" style="color: red;">[изход]</a></p>
				
					<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
					<button class="buttonbg" value="Refresh Page" onclick="window.location.href='index.php'"><a class="language">БГ</a></button>
					<button class="buttonen" value="Refresh Page" onclick="window.location.href='index_en.php'"><a class="language">EN</a></button>



		</div>



	<div class="topnav">
	
				<strong><a href="index.php">НАЧАЛО</a>
				<a href="kanevcentar.php">КАНЕВ ЦЕНТЪР</a>
				<a href="kanev.php">ИГНАТ КАНЕВ</a>
				<a href="predstavleniq.php">ПРЕДСТАВЛЕНИЯ</a>
				<a href="programa.php">ПРОГРАМА</a>
				<a href="contacts.php">КОНТАКТИ</a></strong>
			
				

	</div>


	<div class="slideshow-container">



<div class="mySlides fade">
	<img src="pictures/background3.jpg" style="width:100%;height:350px;">
</div>

<div class="mySlides fade">
<img src="pictures/evergreen4.jpg" style="width:100%;height:350px;">
</div>

<div class="mySlides fade">
<img src="pictures/chetirimata3.jpg" style="width:100%;height:350px;">
</div>

<div class="mySlides fade">
<img src="pictures/pikapoka3.jpg" style="width:100%;height:350px;">
</div>

<div class="mySlides fade">
<img src="pictures/riton3.jpg" style="width:100%;height:350px;">
</div>

<div class="mySlides fade">
<img src="pictures/money3.jpg" style="width:100%;height:350px;">
</div>

<div class="mySlides fade">
<img src="pictures/predgradie3.jpg" style="width:100%;height:350px;">
</div>

</div>
<br>

<div style="text-align:center">
<span class="dot"></span> 
<span class="dot"></span> 
<span class="dot"></span> 
<span class="dot"></span> 
<span class="dot"></span> 
<span class="dot"></span> 
<span class="dot"></span> 
</div>


<script>
var slideIndex = 0;
showSlides();

function currentSlide() {
  showSlides();
}

function showSlides() {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";  
  }
  slideIndex++;
  if (slideIndex > slides.length) {slideIndex = 1}    
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";
  setTimeout(showSlides, 5000); 
}
</script>




<div class="info1">	
	<h2 align="left"><a class="effect-underline">ЗА ПОСЕТИТЕЛИ</a></h2>
	<p>​​Центърът разполага с над 200 паркоместа за леки автомобили.</p>
	<p style="color:red;">ПАРКИНГЪТ Е ОТВОРЕН ПОЛОВИН ЧАС ПРЕДИ СЪБИТИЕТО ЗА ПОСЕТИТЕЛИ, НО САМО ДО ПРИКЛЮЧВАНЕ НА МЕРОПРИЯТИЕТО (КОНЦЕРТ, ТЕАТЪР И ДР.).</p>
	<p>Канев център е изграден в съответствие с изискванията за достъпна среда. Осигурен е асансьор за хора със затруднено придвижване.</p>
	<p>Безплатен детски кът в Канев център.</p>
	<p>Родители, които посещават събитията в Канев център, могат да се възползват от безплатен кът, в който децата им ще се забавляват с аниматори-студенти. 	
		Четвъртокурсници от специалност Начална училищна педагогика с чужд език се занимават с децата, като организират различни игри и творчески задачи 
		според възрастта им. ​Заниманията са за момичета и момчета над 3 години. Необходимо е предварително записване тел. 0889 693 298, 
		за да бъдат съобразени заниманията с техните възрастови интереси и възможности.</p>

</div>






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


