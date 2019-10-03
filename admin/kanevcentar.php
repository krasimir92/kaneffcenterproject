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

	
    </head>	

   <div class="header">

  					<h1 align="center"><a href="index.php">КАНЕВ ЦЕНТЪР</h1></a>
					<a href="https://www.google.bg/maps/@43.8542249,25.9688844,3a,75y,141.01h,101.11t/data=!3m7!1e1!3m5!1sULsNYe1kdbMAAAQuoP4EPg!2e0!3e2!7i13312!8i6656"><p class="virtual" >Виртуална разходка</p></a>
					<img src="pictures//icons/location.jpg" width=15% class="imagelocation">
				
					<p class="welcome" >Добре дошли: <strong><?php echo $_SESSION['username']; ?></strong> / <a href="../index.php?logout='1'" style="color: red;">[изход]</a></p>
				
					<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
					<button class="buttonbg" value="Refresh Page" onclick="window.location.href='kanevcentar.php'"><a class="language">БГ</a></button>
					<button class="buttonen" value="Refresh Page" onclick="window.location.href='kanevcentar_en.php'"><a class="language">EN</a></button>



		</div>



		<div class="topnav">
		<strong><a href="index.php">НАЧАЛО</a>
				<a href="kanevcentar.php">КАНЕВ ЦЕНТЪР</a>
				<a href="kanev.php">ИГНАТ КАНЕВ</a>
				<a href="predstavleniq.php">ПРЕДСТАВЛЕНИЯ</a>
				<a href="programa.php">ПРОГРАМА</a>
				<a href="contacts.php">КОНТАКТИ</a></strong>
			
			
				

	</div>
			

	<div class="info2">	
			<h2 align="left"><a class="effect-underline">Конгресен център "Канев център"</a></h2>

			<p>Комплекс <b>„Канев Център”</b> е осъществен по инициативата на ръководството на Русенски университет “Ангел Кънчев”, като през 2012 год. е изготвено прединвестиционно 
			проучване в два варианта за изграждане на експо-център с полифункционална зала, 2 конферентни зали и офиси. След посещение на г-н Игнат Канев, 
			през септември 2012 г, този комплекс прерастна в <b>Канев център Русенски университет</b>, който се изгради със средства, дарени от г-н Игнат Канев,
			и дофинансиране от Русенски университет „Ангел Кънчев”. Комплексът е изграден така, че да съответства на нуждите на ускореното развитие на научния и икономическия потенциал.
			<b>„Канев център”</b> е изграден на територията на Русенски университет „Ангел Кънчев”, като част от университетския кампус. Изграден е на две нива с разгъната застроена площ 3472 кв. м.
			и топла връзка към Ректората на университета. Двуетажният комплекс разполага с полифункционална зала с капациет 790 седящи места, от които 482 разположени
			в трибуни над входа на залата и в двете ложи (лява и дясна) амфитеатрално, останалите 308 места са разположени на равен под, за да може залата да се използва 
			за изложения и презентации, като между фоайето и залата е предвидено максимално отваряне, с оглед обединяването им.</p>
	
			<div class="img-hover-zoom img-hover-zoom--brightness img ">
			<img src="pictures/zalakanev.jpg" class="kanevcentar1" >
			</div>

			<div class="img-hover-zoom img-hover-zoom--brightness img ">
			<img src="pictures/zalakanev2.jpg" class="kanevcentar2" >
			</div>
			 
			<p>Над залата е изпълнен купол от метална конструкция със странично осветление и обслужващи площадки. 
			Сцената на залата е с площ около 120 кв. м., с аванс-сцена, малки джобове – ляв, десен и заден, като обслужващо пространство. 
			На сцената е предвидена оптимизирана горна сценична механизация – механични чиги и подвижен екран. Сценично осветление – с преден и заден осветителни мостове и 
			ефектно осветление от дъното на залата. Общото управление на системите се локализира в технически помещения над входа на залата.</p>

			<p>Във фоайето на <b>„Канев център”</b> са осигурени свободни площи за изложби и презентации.На втория етаж на комплекса са разположени заседателна зала със 70 места,
			конферентна зала със 100 места и зала за пресконференции. Оборудването е с модерни системи за осветление, озвучаване, презентации и симултантен превод. 
			Достъпът до втория етаж е осигурен посредством две ефирни стълбища и панорамен асансьор.</p>

			<div class="img-hover-zoom img-hover-zoom--brightness img ">
				<img src="pictures/konferentna.jpg" class="kanevcentar1" >
			</div>
			<div class="img-hover-zoom img-hover-zoom--brightness img ">
				<img src="pictures/prescentur.jpg" class="kanevcentar1" >
			</div>

			<p>Проектиран като мултифункционален културен център, комплексът служи за провеждане както на университетски, така и на градски, национални и международни форуми.
			В него се организират семинари, конференции, симпозиуми, конгреси, тържества и церемонии, трудови и кандидатстудентски борси, олимпиади, изложби и изложения,
			фестивали, изнасят се сценични постановки и концерти.</p></a>
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
		
<a class="lang" key="footer">	<p>(BETA) ©2014 Русенски университет "Ангел Кънчев"</p></a>
</div>
	
</div>





</body>
</html>


