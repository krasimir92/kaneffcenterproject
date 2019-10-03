<?php
/*** set the content type header ***/
/*** Without this header, it wont work ***/
header("Content-type: text/css");


$font_family = 'Arial, Helvetica, sans-serif';
$font_size = '0.7em';
$border = '1px solid';
?>



body {
  margin:0 auto;
  background-color: white;
  font-family: Helvetica;
  

}

.header {
	background-color:black;
  height: 100px;
  margin-top: -21px;

}

.virtual{
	text-align: right;
	margin-top: -50px;
	margin-right: 300px;
	color:darkorange;
  position: absolute;
  top:13%;
  right:-50px;
	
}

.virtual:hover{

color: white;

}

.welcome{
	text-align: right;
	margin-top: 45px;
  margin-bottom: 50px;
	color:black;
  padding-right: 10px;




}

.buttonbg{
  background-color: black;
  color: darkorange;
  border:none;
  font-size: 16px;
  position: absolute;
  right: 60px;
  top: 5%;
  cursor:pointer;
}


.buttonen{
  background-color: black;
  color: darkorange;
  border:none;
  font-size: 16px;
  position: absolute;
  right: 20px;
  top: 5%;
  cursor:pointer;
}

.language:hover{

color:white;

}

.buttonlog{
  background-color: black;
  color: darkorange;
  border:none;
  font-size: 16px;
  position: absolute;
  top: 5%;
}



.image0 { 
   width: 120px;
   height: 120px;
   border-radius: 30px;

}

.image00 { 
   width: 100px;
   height: 100px;
   border-radius: 30px;

}

.image1 { 
   margin-left:15%;
   margin-top: 0.5%;
}

.image1:hover {
	-ms-transform: scale(1.2); /* IE 9 */
  -webkit-transform: scale(1.2); /* Safari 3-8 */
  transform: scale(1.2); 
}





.img-hover-zoom {
  height: auto; /* Modify this according to your need */
  overflow: hidden; /* Removing this will break the effects */
  width:auto;
  border-radius:30px;
  margin-top:5%;
  margin-bottom:5%;
}

/* Brightness-zoom Container */
.img-hover-zoom--brightness img {
  transition: transform 2s, filter 1.5s ease-in-out;
  transform-origin: center center;
  filter: brightness(50%);
  border-radius:30px;
}

/* The Transformation */
.img-hover-zoom--brightness:hover img {
  filter: brightness(100%);
  transform: scale(1.1);
}



.image6 {
   margin-right:50px;
   float: left;
   width: 40px;
   height: 40px;
   border-radius: 40%;
   border:5px solid gray;
}

.image6:hover {
	-ms-transform: scale(1.2); /* IE 9 */
  -webkit-transform: scale(1.2); /* Safari 3-8 */
  transform: scale(1.2); 
}


.kanevcentar1{ 
   width: 100%;
   height: 450px;
}


.kanevcentar2{ 
   width: 100%;
   height: 300px;
}

.writetome{
  width: 20%;
  height: 250px
}

* {
  box-sizing: border-box;
}


.imagelocation {
   margin-top: -60px;
   margin-right: 200px;
   float: right;
   width: 30px;
   height: 30px;
   border-radius: 30%;
   border:5px solid orange;

   
}

.imageprograma1 { 
   width: 600px;
   height: 800px;
   border-radius: 30px;
   padding-bottom: 2%;
}



.imageprograma2 { 
   width: 800px;
   height: 650px;
   border-radius: 30px;
   padding-bottom:2%;
   padding-top:2%;
}

ul {
  list-style-type: none;
  margin:0 auto;  
  overflow: hidden;
  background-color: #FFFF;
}

li {
  float: right;
}

li a {
  display: block;
  color: black;
  font-size: 15px;
  font-family: Helvetica;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}

a:link { 
color: darkorange; 
text-decoration: none
}

a:active {
	color:rgb(255,140,0);
}

a:visited {
	color:rgb(255,140,0);
}

div.info {
  text-indent: 50px;
}

.info1 {
  background-color: white;
  padding-left: 40px;
  margin-left: 10%;
  padding-right: 10%;
  line-height: 30px;
  margin-bottom: 5%;
  display:inline-block;
  font-family: "Lucida Console", Monaco, monospace;

}

.info2 {
  background-color: white;
  margin: 0;
  top: 28%;
  margin-left: 10%;
  padding-left: 40px;
  padding-right: 10%;
  padding-top: 20px;
  margin-bottom: 50px;
  display:inline-block;
  font-family: "Lucida Console", Monaco, monospace;
  
}


.info3 {
  background-color: white;
  margin: 0;
  top: 28%;
  margin-left: 15%;
  padding-left: 40px;
  padding-right: 15%;
  padding-top: 20px;
  margin-bottom: 50px;
  display:inline-block;
  font-family: "Lucida Console", Monaco, monospace;

}

.border{
	border:1px dotted black;
    border-radius: 30px;	
}

.events{
    border-radius: 30px;
    text-align: center;	
	font-family: "Lucida Console", Monaco, monospace;
	font-size: 20px;
	text-shadow: 2px 2px 5px green;
	padding-top: 30px;
	padding-bottom: 30px;
}


h1{
  color: darkorange;
  margin-right: 45%;
  margin-left:15%;
  padding-top:1.5%;
}

h1 a {
  color: darkorange;
  font-size: 1.3em;
  text-decoration: none;
  display: inline-block;
  position: relative;
  font-family: 'Dosis', sans-serif;
}

/*effect-underline*/
a.effect-underline:after {
	content: '';
  position: absolute;
  left: 0;
  display: inline-block;
  height: 1em;
  width: 100%;
  border-bottom: 1px solid;
  margin-top: 10px;
  opacity: 0;
	-webkit-transition: opacity 0.35s, -webkit-transform 0.35s;
	transition: opacity 0.35s, transform 0.35s;
	-webkit-transform: scale(0,1);
	transform: scale(0,1);
}

a.effect-underline:hover:after {
  opacity: 1;
	-webkit-transform: scale(1);
	transform: scale(1);
}

.wrapper {
  display: block;
  position: absolute;
  top: 50%;
  left:50%;
  -webkit-transform: translate(-50%,-50%);
}



h2{
	 font-family: "Lucida Console", Monaco, monospace;
	 font-size: 30px;
	 text-shadow: 2px 2px 5px;
   margin-top: 5%;
   margin-bottom:5%;
}

h2 a {
  font-size: 1.3em;
  text-decoration: none;
  display: inline-block;
  position: relative;
  font-family: 'Dosis', sans-serif;
}

h3{
	 font-family: "Lucida Console", Monaco, monospace;
	 font-size: 35px;
	 text-align:left;
	 padding-left:100px;
}

h4{
	 font-family: "Lucida Console", Monaco, monospace;
	 font-size: 35px;
	 text-align:left;
	 padding-left:100px;
	 padding-top: 30px;
}

h5{

  color: darkorange;

}


h6{
  font-size: 15px;
  color: black;

}

h6:hover{
  font-size: 15px;
  color: darkorange ;

}


table.table1 {
	font-family: "Lucida Console", Monaco, monospace;
    font-size: 20px;
    margin-left: auto;
    margin-right: auto;
   

	margin-bottom: 110px;
  border-collapse: collapse;
			
}



table.table2 {
	font-family: "Lucida Console", Monaco, monospace;
    font-size: 20px;
    margin-left: 100px;
    margin-right: 100px;
	border:none;
	margin-bottom: 110px;
	margin-top:50px;
	border-collapse:collapse;
			
}

table.table3 {
	font-family: "Lucida Console", Monaco, monospace;
    font-size: 20px;
    margin-left: 100px;
    margin-right: 100px;
	border:none;
	margin-bottom: 110px;
	margin-top:50px;
	border-collapse:collapse;
			
}


.new_font{
	font-family: "Lucida Console", Monaco, monospace;
    font-size: 20px;
    margin-left: 28%;
    margin-right: 100px;
	margin-top: -200px;
}

.button1 {
  background-image: url("red.jpg");
  border: none;
  color: white;
  padding: 30px 60px;
  float:centre;
  text-decoration: none;


  margin-left:43%;
  margin-bottom: 5%;
  margin-top: 5%;
  font-size: 16px;
}

.button1:hover{
    background:rgba(255, 0, 0, 1);
	box-shadow: 0 12px 16px 0 rgba(0,0,0,0.24),0 17px 50px 0 rgba(0,0,0,0.19);

}

.button2 {
  background-image: url("red.jpg");
  border: none;
  color: white;
  padding: 30px 60px;
  float:centre;
  text-decoration: none;
  margin-left:43%;
  margin-bottom: 5%;
  font-size: 16px;
}

.button2:hover{
    background:rgba(255, 0, 0, 1);
	box-shadow: 0 12px 16px 0 rgba(0,0,0,0.24),0 17px 50px 0 rgba(0,0,0,0.19);

}

.topnav {
  overflow: hidden;
  background-color: rgb(255,140,0);
  float: center;
  padding: 15px 15px ;
  padding-left: 5%;
  }


.topnav a {
  float: center;
  color: black;
  text-align: center;
  padding: 20px 20px;
  padding-bottom: 10px;
  padding-top: 10px;
  text-decoration: none;
  font-size: 15px;
  font-family: Verdana, Geneva, sans-serif;
}
 .topnav a:not(:first-child) {border-left: 0.5px solid gray;}

.topnav a:hover {
 
  color: white;
 
}

.topnav a.active {
  color: ;
}




#footer {
	font-size: 14px;
	height: 300px;
	background-image: url("pictures/fotpic.jpg");
    background-size: 100% 100%;
	border-top: 5px solid orange;
}


.left{
padding-top: 20px;
padding-left: 9%;
padding-right: 70%;
text-align:left;
float:left;
line-height: 20px;
color:gray;
}

.hover:hover{
	color:white;
}

.right{
padding-top: 20px;
padding-right: 7%;
float:right;
color:gray;
text-align:right;
}

.right:hover{
	color:white;
}


.center{
padding-top: 250px;
text-align:center;
color:gray;
}

.center:hover{
	color:white;
}



select {
   margin-left: 450px;
   margin-bottom:20%;
   margin-top:3%;
   font-size: 20px; 
   font-family: "Lucida Console", Monaco, monospace;
   border:2px solid black;
   border-radius: 30px;
}

.contacts{
	display:inline;
	height: 50px;
	background-color: rgb(255,140,0);
	margin-top: -15px;
}

* {box-sizing: border-box;}
body {font-family: Verdana, sans-serif;}
.mySlides {display: none;}
img {vertical-align: middle;}

/* Slideshow container */
.slideshow-container {
  max-width: auto;
  position: relative;
  margin: auto;
}

/* Caption text */
.text {
  color: #f2f2f2;
  font-size: 15px;
  padding: 8px 12px;
  position: absolute;
  bottom: 8px;
  width: 100%;
  text-align: center;
}

/* Number text (1/3 etc) */
.numbertext {
  color: #f2f2f2;
  font-size: 12px;
  padding: 8px 12px;
  position: absolute;
  top: 0;
}

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



/* Fading animation */
.fade {
  -webkit-animation-name: fade;
  -webkit-animation-duration: 1.5s;
  animation-name: fade;
  animation-duration: 1.5s;
}

@-webkit-keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

@keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

/* On smaller screens, decrease text size */
@media only screen and (max-width: 300px) {
  .text {font-size: 11px}
}



.containerprograma1 {
  position: relative;
  width: 40%;
}

.containerprograma2 {
  position: relative;
  width: 70%;
}

.imageprograma {
  opacity: 1;
  display: block;
  height: 350px;
  transition: .5s ease;
  backface-visibility: hidden;
  border-radius: 30px;
}


.containerprograma1:hover .imageprograma {
  opacity: 0.3;
}

.containerprograma2:hover .imageprograma {
  opacity: 0.3;
}


.containerprograma1:hover .middle1 {
  opacity: 1;

}


.containerprograma2:hover .middle2 {
  opacity: 1;

}

.text {
  background-color: darkorange;
  color: black;
  font-size: 16px;
  padding: 16px 32px;
  border-radius: 20%;
}


.buttonback {
  border-radius: 4px;
  background-color: darkorange;
  border: none;
  color: black;
  text-align: center;
  font-size: 28px;
  padding: 15px;
  width: 250px;
  transition: all 0.5s;
  cursor: pointer;
  margin-left: 80%;
  margin-bottom: 4%;
}

.buttonback span {
  cursor: pointer;
  display: inline-block;
  position: relative;
  transition: 0.5s;
}

.buttonback span:after {
  content: '\00bb';
  position: absolute;
  opacity: 0;
  top: 0;
  right: -20px;
  transition: 0.5s;
}

.buttonback:hover span {
  padding-right: 25px;
}

.buttonback:hover span:after {
  opacity: 1;
  right: 0;
}



.buttonback2 {
  border-radius: 4px;
  background-color: darkorange;
  border: none;
  color: black;
  text-align: center;
  font-size: 28px;
  padding: 15px;
  width: 250px;
  transition: all 0.5s;
  cursor: pointer;
  margin-left: 80%;
  margin-bottom: 4%;
}

.buttonback2 span {
  cursor: pointer;
  display: inline-block;
  position: relative;
  transition: 0.5s;
}

.buttonback2 span:after {
  content: '\00bb';
  position: absolute;
  opacity: 0;
  top: 0;
  right: -20px;
  transition: 0.5s;
}

.buttonback2:hover span {
  padding-right: 25px;
}

.buttonback2:hover span:after {
  opacity: 1;
  right: 0;
}



.buttonprogram {
  border-radius: 4px;
  background-color: darkorange;
  border: none;
  color: black;
  text-align: center;
  font-size: 18px;
  padding: 10px;
  width: 150px;
  transition: all 0.5s;
  cursor: pointer;
  margin-left: 60%;
  margin-top: 2%;
  margin-bottom: 2%;
}

.buttonprogram span {
  cursor: pointer;
  display: inline-block;
  position: relative;
  transition: 0.5s;
}

.buttonprogram span:after {
  content: '\00bb';
  position: absolute;
  opacity: 0;
  top: 0;
  right: -20px;
  transition: 0.5s;
}

.buttonprogram:hover span {
  padding-right: 25px;
}

.buttonprogram:hover span:after {
  opacity: 1;
  right: 0;
}


.buttonprogram2 {
  border-radius: 4px;
  background-color: darkorange;
  border: none;
  color: black;
  text-align: center;
  font-size: 18px;
  padding: 10px;
  width: 150px;
  transition: all 0.5s;
  cursor: pointer;
  margin-left: 15%;
  margin-left: 5%;
  margin-top: 2%;
  margin-bottom: 2%;
}

.buttonprogram2 span {
  cursor: pointer;
  display: inline-block;
  position: relative;
  transition: 0.5s;
}

.buttonprogram2 span:after {
  content: '\00bb';
  position: absolute;
  opacity: 0;
  top: 0;
  right: -20px;
  transition: 0.5s;
}

.buttonprogram2:hover span {
  padding-right: 25px;
}

.buttonprogram2:hover span:after {
  opacity: 1;
  right: 0;
}

.buttonmessage {
  border-radius: 4px;
  background-color: darkorange;
  border: none;
  color: black;
  text-align: center;
  font-size: 18px;
  padding: 10px;
  width: 150px;
  transition: all 0.5s;
  cursor: pointer;
  margin-left: 80%;
  margin-top: 2%;
  margin-bottom: 2%;
}

.buttonmessage span {
  cursor: pointer;
  display: inline-block;
  position: relative;
  transition: 0.5s;
}

.buttonmessage span:after {
  content: '\00bb';
  position: absolute;
  opacity: 0;
  top: 0;
  right: -20px;
  transition: 0.5s;
}

.buttonmessage:hover span {
  padding-right: 25px;
}

.buttonmessage:hover span:after {
  opacity: 1;
  right: 0;
}


.container1{

  margin-right: -500%;
  margin-top: 100px;

}

.form-container {
    width: 700px;
    margin-left:30%;
    margin-top: 5%;
    margin-bottom: 5%;
    background: #FF8C00;
    border: gray 1px solid;
    padding:20px;
    border-radius: 20px;
  
}

.input-row {
  margin-bottom: 20px;
}

.input-row label {
    color: black;
}

.input-field {
    width: 100%;
    border-radius: 2px;
    padding: 10px;
    border: #e0dfdf 1px solid;
    box-sizing: border-box;
    margin-top: 2px;
}

.span-field {
    font: Arial;
    font-size: small;
    text-decoration: none;
}

.btn-submit {
    padding: 10px 60px;
    background: black;
    border: #8c8880 1px solid;
    color: darkorange;
    font-size: 0.9em;
    border-radius: 20px;
    cursor: pointer;
}

.btn-submit:hover {
  background: red;
  color:white;
}

.errorMessage {
    background-color: #e66262;
    border: #AA4502 1px solid;
    padding: 5px 10px;
    color: #FFFFFF;
    border-radius: 3px;
}

.successMessage {
    background-color: #9fd2a1;
    border: #91bf93 1px solid;
    padding: 5px 10px;
    color: #3d503d;
    border-radius: 20px;
    cursor: pointer;
    font-size: 0.9em;
}

.info10 {
    font-size: .8em;
    color: red;
    letter-spacing: 2px;
    padding-left: 5px;
}



.button {
  background-color: darkorange;
  border: none;
  color: black;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  border-radius: 20px;
} 

.button:hover {
  color:white;
}


#actionbuttons li{
  float: right;
  list-style: none;
  text-align: center;
  margin-right: 150px;
  width: 100px;
  line-height: 60px;
}

#actionbuttons2 li{
  float: left;
  list-style: none;
  text-align: center;
  margin-right: 100px;
  margin-left: 30px;
  width: 6px;
  line-height: 60px;
}




.loginform {
  width: 30%;
  margin: 50px auto 0px;
  color: black;
  background: darkorange;
  text-align: center;
  border: 1px solid #B0C4DE;
  border-bottom: none;
  border-radius: 10px 10px 0px 0px;
  padding: 20px;
}

.input-group {
  margin: 10px 0px 10px 0px;
}
.input-group label {
  display: block;
  text-align: left;
  margin: 3px;
}
.input-group input {
  height: 30px;
  width: 93%;
  padding: 5px 10px;
  font-size: 16px;
  border-radius: 5px;
  border: 1px solid gray;
}



.btn {
  padding: 10px;
  font-size: 15px;
  color: black;
  background: darkorange;
  border: none;
  border-radius: 5px;
}
.btn:hover {
color: white;
}
.error {
  width: 92%; 
  margin: 0px auto; 
  padding: 10px; 
  border: 1px solid #a94442; 
  color: #a94442; 
  background: #f2dede; 
  border-radius: 5px; 
  text-align: left;
}
.success {
  color: #3c763d; 
  background: #dff0d8; 
  border: 1px solid #3c763d;
  margin-bottom: 20px;
}


#suobshteniq2 li{
  float: left;
  margin-left: 120px;
  margin-right: 100px;


}




.insertformlabel {
  width: 30%;
  margin: 50px auto 0px;
  color: black;
  background: darkorange;
  text-align: center;
  border: 1px solid #B0C4DE;
  border-bottom: none;
  border-radius: 10px 10px 0px 0px;
  padding: 20px;
  
}



.input-predstavlenie {
  margin: 10px 0px 10px 0px;
  
}
.input-predstavlenie label {
  display: block;
  text-align: left;
  margin: 3px;
}
.input-predstavlenie input {
  height: 30px;
  width: 93%;
  padding: 5px 10px;
  font-size: 16px;
  border-radius: 5px;
  border: 1px solid gray;
}










.gallery-image {
  padding: 20px;
  display: flex;
  flex-wrap: wrap;
  justify-content: center;
}

.gallery-image img {
  height: 250px;
  width: 350px;
  transform: scale(1.0);
  transition: transform 0.4s ease;
}

.img-box {
  box-sizing: content-box;
  margin: 10px;
  height: 250px;
  width: 350px;
  overflow: hidden;
  display: inline-block;
  color: white;
  position: relative;
  background-color: white;
}

.caption {
  position: absolute;
  bottom: 40%;
  left: 40%;
  opacity: 0.0;
  transition: transform 0.3s ease, opacity 0.3s ease;
}



.transparent-box {
  height: 250px;
  width: 350px;
  background-color:rgba(0, 0, 0, 0);
  position: absolute;
  top: 0;
  left: 0;
  transition: background-color 0.3s ease;
}

.img-box:hover img { 
  transform: scale(1.1);
}

.img-box:hover .transparent-box {
  background-color:rgba(0, 0, 0, 0.5);
}

.img-box:hover .caption {
  transform: translateY(-20px);
  opacity: 1.0;
}

.img-box:hover {
  cursor: pointer;
}

.caption > p:nth-child(2) {
  font-size: 0.8em;
}