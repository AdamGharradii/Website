<!doctype html>
<html lang="de">
<head>
<title>Gharradi GmbH Kontakt</title>
<meta charset ="utf-8">
<link href="https://fonts.googleapis.com/css2?family=Roboto+Slab&display=swap" rel="stylesheet"> 
<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@500&display=swap" rel="stylesheet"> 

<style>
html, body{
margin: 0px;
padding: 0px;
height: 100%;
text-align: center;
}

section{
min-height: 100%;
}

a{
text-decoration: none;
}

li{
list-style-type: none;
}

h1, h2, h3, a{
font-family: 'Roboto', sans-serif;
font-weight: 500;
color: #494949;
text-transform: uppercase;
}

h2{
color: #5d7177;
}

h3{
font-size: 40px;
padding-top: 8%;
margin-bottom: 5px;
}

h4, p{
font-family: 'Roboto Slab', serif
color: #494949;
}

hr{
height: 3px;
width: 30px;
border: 0px;
background: #494949;
margin: 0 auto 40px auto;
}

li, #logo, img, .button{transition: all 300ms; -webknit-transition: all 300ms; -moz-transition: all 300ms; -o-transition: all 300ms;}

/*HEADER***************************/

header{
width: 100%;
height: 65px;
position: fixed;
top: 0px;
left: 0px;
background: #fff;
box-shadow: 0 1px 5px rgba(0, 0, 0, 0.1);
z-index: 1;
}

#logo{
width: 140px;
float: left;
margin: 10px 0px 0px 50px;
}

#logo:hover{
opacity: 0.5;
}

#logo img{
width: 100%;
}

header nav{
float: right;
margin: 10px 50px 0px 0px;
}

header nav ul li{
float: left;
margin-right: 25px
}

header nav ul li a{
font-size: 16px;
}

header nav ul li:hover{
padding-top: 5px;
}

/*Home***************************/

#Home{
background: url(Bilder/landing.jpg); 
background-position: center center;
background-size: cover;
background-attachment: fixed;
}

#Home h1{
margin: 240px auto 0px auto;
font-size: 110px;
}

#Home h2{
margin: 0px auto 0px auto;
font-size: 25px;
}

#Home img{
width: 32px;
margin-top: 120px;
opacity: 0.5;
}


#Home img:hover{
opacity: 1;
}


/*About***************************/

#uber img{
width: 240px;
}

#uber img:hover{
transform: scale(1.2);
-webkit-transform: scale(1.2);
-moz-transform: scale(1.2);
-o-transform: scale(1.2);
}

#uber h4{
font-size; 24px;
}

#uber p{
width: 700px;
margin: 0 auto 0 auto;
}

/*About***************************/

#ware{
background-color: #f0f0f0;
}

#warenbilder{
width: 900px;
margin: 0 auto 0 auto;
}

#warenbilder ul{
padding: 0px;
}

#warenbilder ul li{
width: 33.3%;
float: left;
margin-bottom: 15px;
}

#warenbilder img{
width: 280px;
height: 170px;
border-radius: 10px;
}

#warenbilder img:hover{
transform: scale(1.2);
-webkit-transform: scale(1.2);
-moz-transform: scale(1.2);
-o-transform: scale(1.2);
box-shadow: 0 7px 7px rgba(0, 0, 0, 0.5);
}

/*Kontakt***************************/

form input, textarea{
font-family: 'Roboto Slab', serif;
font-size: 15px;
margin-bottom: 10px;
border-radius: 5px;
border-color: #494949;
border: 2px solid;
}

form input{
width: 552px;
height: 30px;
}

form input:first-child{
margin-top: 10px;
}

form textarea{
width: 550px;
height: 200px;
resize: none;
}

.input1{
color: #494949;
padding-left: 10px; 
}

::-ms-placeholder{color: #99999};
::-webkit-placeholder{color: #99999};
::-moz-placeholder{color: #99999};
::-o-placeholder{color: #99999};

.button{
background-color: #f0f0f0;
color: #494949;
width: 575px;
height: 50px;
}

.button:hover{
background-color: #494949;
color: #f0f0f0;
}

/*Footer***************************/

footer{
width: 100%;
height: 70px;
background-color: 3f3f3f;
}

footer p{
font-size: 12px;
color: #f0f0f0;
padding-top: 30px;
}
</style>
</head>

<body>
    <header>
		<div id="logo">
			<a href="#">
				<img src="Bilder/icon.png" alt="Logo">
			</a>
		</div>
			<nav id="nav">
				<ul>
					<li><a href="Home.html #Home">Home</a></li>
					<li><a href="Home.html #Uber">Über</a></li>
					<li><a href="Home.html #Ware">Ware</a></li>
					<li><a href="#">Kontakt</a></li>
				</ul>  
			</nav>
	</header>
	<section id="Kontakt">
		<h3>Kontakt</h3>
		<hr>
		
		<form method="post" action="senden.php">
					<input class="input1" type="text" required tabindex="1" placeholder="Name" name="name"><br>
					
					<input class="input1" type="email" required tabindex="2" placeholder="E-Mail" name="email"><br>
					
					<input class="input1" type="text" required tabindex="3" placeholder="Betreff" name="subject"><br>
										
					<textarea class="input1" required tabindex="4" placeholder="Nachricht" name="message"></textarea><br>
					
					<button class="button" name="submit" type="submit"></button>
			</form>
	</section>	
	<footer>
		<p>
			&copy; Gharradi GmbH 2020
		</p>
	</footer>
	
</body>
</html>
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	