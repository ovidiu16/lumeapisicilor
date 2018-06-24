<?php 
?>
 <head>
    <title>Lumea Pisicilor</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" href="assets/css/main.css" />
  </head>
  <body>

    <!-- Header -->
      <header id="header">
        <div class="logo"><a href="#">Lumea Pisicilor</a></div>
      </header>
      <head>
<style>
ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
    overflow: hidden;
    background-color: #333;
}

li {
    float: left;
}

li a {
    display: block;
    color: white;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
}

li a:hover:not(.active) {
    background-color: #111;
}

.active {
    background-color: #4CAF50;
}
</style>
</head>
<body>
<style>
body {margin:0;}

.topnav {
  overflow: hidden;
  background-color: #333;
}

.topnav a {
  float: left;
  display: block;
  color: #f2f2f2;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
}

.topnav a:hover {
  background-color: #ddd;
  color: black;
}

.active {
  background-color: #4CAF50;
  color: white;
}

.topnav .icon {
  display: none;
}

@media screen and (max-width: 600px) {
  .topnav a:not(:first-child) {display: none;}
  .topnav a.icon {
    float: left;
    display: block;
  }
}

@media screen and (max-width: 600px) {
  .topnav.responsive {position: relative;}
  .topnav.responsive .icon {
    position: absolute;
    right: 0;
    top: 0;
  }
  .topnav.responsive a {
    float: none;
    display: block;
    text-align: left;
  }

}
</style>
</head>
<body>

<div class="topnav" id="myTopnav">
  <a href="index.html">Acasa</a>
  <a href="desprepisici.html">Despre pisici</a>
  <a href="rasedepisici.html">Rase de pisici</a>
  <a href="curiozitati.html">Curiozitati</a>
  <a href="jucarii.html">Jucarii</a>
  <a href="contact.php">Contact</a>
  <a href="javascript:void(0);" style="font-size:15px;" class="icon" onclick="myFunction()">&#9776;</a>
</div>


<script>
function myFunction() {
    var x = document.getElementById("myTopnav");
    if (x.className === "topnav") {
        x.className += " responsive";
    } else {
        x.className = "topnav";
    }
}
</script>
</body>

    <!-- Main -->
      <section id="main">
        <div class="inner">
<div id="continut_pag">
	<main>
		<br></br>
		<h1 style="font-size:300%; text-align:center;"><i>Contact</i></h1>	
		<br></br>	
		<center><img src="images/catwriting.gif"  width="500" height="400"></center>
		<form name="formular" method="post" action="connection.php" class="centrat">


			<br></br>
			<center>
			<table style="width: 50%">
				<tr>
					<td>Nume:</td>
					<td><input type="text" name="nume" size=53></td>
				</tr>
				<tr>
					<td>Email:</td>
					<td><input type="text" name="email" size=53></td>
				</tr>
				<tr>
					<td>Subiect:</td>
					<td><input type="text" name="subiect" size=53></td>
				</tr>

				<tr>
					<td>Mesaj:</b></td>
					<td><textarea name="mesaj" rows=5 cols=43></textarea></td>
				</tr>
				<tr>
					<td colspan = "2">
						<input type="submit" style="float:center;"
						value="Introduceti mesaj...">
						<input type="reset" style="float:right;" value="Stergeti datele introduse...">
					</td>

<style> 
input[type=text] {
    width: 100%;
    text-decoration-style: solid;

    padding: 12px 20px;
    margin: 4px 3;
    box-sizing: border-box;
}
</style>



				</tr>
			</center>
			</table>
		</form>

	</main> 
</div>  <!-- continut pagina -->
</body>
<footer id="footer">
				<div class="container">
					<ul class="icons">
						<li><a href="#" class="icon fa-twitter"><span class="label">Twitter</span></a></li>
						<li><a href="https://www.facebook.com/blaga.adrianamaria?ref=bookmarks" class="icon fa-facebook"><span class="label">Facebook</span></a></li>
						<li><a href="#" class="icon fa-instagram"><span class="label">Instagram</span></a></li>
						<li><a href="contact.php" class="icon fa-envelope-o"><span class="label">Email</span></a></li>
					</ul>
				</div>
				<div class="copyright">
					&copy; By Ovidiu
				</div>
			</footer>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.poptrox.min.js"></script>
			<script src="assets/js/skel.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>

	</body>
</html>	
