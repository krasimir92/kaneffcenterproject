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
				
					<p class="welcome" >Welcome: <strong><?php echo $_SESSION['username']; ?></strong> / <a href="index_en.php?logout='1'" style="color: red;">[logout]</a></p>

					<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
					<button class="buttonbg" value="Refresh Page" onclick="window.location.href='kanev.php'"><a class="language">БГ</a></button>
					<button class="buttonen" value="Refresh Page" onclick="window.location.href='kanev_en.php'"><a class="language">EN</a></button>



		</div>



	<div class="topnav">
				
				
				<strong><a href="index_en.php">HOME</a>
				<a href="kanevcentar_en.php">KANEFF CENTER</a>
				<a href="kanev_en.php">IGNAT KANEV</a>
				<a href="predstavleniq_en.php">PERFORMANCES</a>
				<a href="programa_en.php">PROGRAM</a>
				<a href="contacts_en.php">CONTACT US</a></strong>
			
				

	</div>
			


	<div class="info2">	
		
		<h2 align="left"><a class="effect-underline">Ignat Kanev</a></h2>
		<div class="img-hover-zoom img-hover-zoom--brightness img ">
  			<img src="pictures/kanev1.jpg" >
		</div>
		
		<p>Honorary Consul of the Republic of Bulgaria in Mississauga Ignat Kanev was personally honored by the Governor-General
		of Canada by David Johnston with the title of "Member of the Order of Canada." The award took place on May 12
		at the official residence of the Governor-General in Ottawa. </p>
		
		<p>During the ceremony, the Governor-General stated that he was pleased to award the Order of Canada to his new members - in the year,
		not only celebrating the 150th anniversary of the founding of the Canadian Confederation, but also celebrating the 50th anniversary of the founding of the Order.
		"Let us be inspired by the example of these remarkable Canadians and use the occasion to build a smarter and more caring country,
		in which every single individual can achieve the greatest success possible. "</p>
		<p>In his personal address to Ignat Kanev, the Governor-General noted his merits
		in the field of home construction and entrepreneurship for 50 years and defined it as a "driver of economic growth".
		His role as a catalyst for initiatives in the education, health, social services and arts sectors was highlighted.</p> 
		<p>Acknowledgment was expressed for his generosity and philanthropic activities that helped enrich the lives of residents of his city and citizens of Bulgaria,
		his home country.</p>
		<p>In connection with the award, the day before, Kanev was invited to the Senate of Canada. Ontario Senator Victor Oo,
		Vice-Chair of the Friendship Group with Bulgaria in Parliament, read a congratulatory address before the Senate plenary,
		emphasizing the merits of Kanev and the contribution for which he was awarded the highest Canadian distinction.</p>
		<p>The Senate paid tribute to Ignat Kanev with his feet and applause. Before the ceremony in the Senate, Ignat Kaneff was personally greeted by the Speakers of the two Houses of Parliament,
		by co-chair of the Friendship Group, Senator Jonah Martin, and by many MPs and senators.</p>
		<p><i>Established in 1967
		by Her Majesty Queen Elizabeth II, the Order of Canada is a cornerstone of the Canadian prize system and is awarded for outstanding achievement,
		dedication to the community and service to the nation. Since its founding today, more than six thousand people from all walks of life in Canadian society have
		were honored with the distinction. The order's motto is DESIDERANTES MELIOREM PATRIAM (They want a better country). Her Majesty is sovereign of the Order,
		and the Governor-General is his Chancellor and Chief Cavalier. 
		The title of "Member of the Order of Canada", one of the three degrees of distinction,
		recognizes the exceptional contribution made at local and regional level or special area of ​​activity. The symbol of the Order is made of fine silver and
		there are three individual fragments: a snowflake, an annular element, and a maple leaf. Colors are added by hand
		through the unique application of matte and transparent enamel. The design of the insignia of the Order of Canada dates from 1967.
		The technical drawings used by the Royal Canadian Mint in Ottawa for this new generation of insignia,
		were made by the Canadian Heraldic Authorities to the Governor General's Secretariat.</i></p>

		<p align="right"><b>Text and photo: Embassy of the Republic of Bulgaria in Ottawa, Canada</b></p>
		
		<div class="img-hover-zoom img-hover-zoom--brightness img ">
  			<img src="pictures/kanev2.jpg" >
		</div>
		
		<p>Ignat Hristov Kanev was born on October 6, 1926 in Gorno Ablanovo, Ruse District. He is the fourth of seven children
		(Cagno, Lambie, Kuna, Ignatius, Mary, Simeon and Peter) of Hristo and Mita Kanevi.</p>
        <p>He has no financial opportunity to study and is forced to leave Bulgaria at the age of 14 and settle in Austria to seek a living.
		In March 1941, he and several other boys went to Nikola Paruscholakov, a gardener from Gorna Oryahovitsa,
		which has vegetable gardens in Austria and markets agricultural products. After 1945 he was dissuaded from returning to Bulgaria.
		After 5 years, apprenticeships now have their own trade and a small production of fruits and vegetables.</p>
		<p>In 1951, he wound up doing business in Austria, and with almost no resources, without knowing English and without any connections and friends, he left for Canada.
		He settled in Toronto, where he went into the construction business. He initially built small houses for new arrivals.
		Five years later, in 1956, he established his first construction company there. Next year, he builds his first greater suffering -
		on 3 floors with 9 apartments, and 10 years later is already building a building with 262 apartments. Subsequently, his company's annual turnover reached
		over $ 250 million. During his active work as a construction contractor, he builds thousands of houses,
		many world-class public buildings and golf facilities.</p>
		<p>He is also involved in the car trade. Becomes a representative of General Motors and sells thousands of cars and trucks.</p>
		<p>He owns 6 golf courses and a large construction company in Canada. He is the manager of a charitable foundation bearing his name.</p>
		<p>Honorary Consul is to Bulgaria in Canada.</p>
		
	</div>
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


