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
		
		<?php
		include("conn.php");

		class Categorie {
			public $id_imagine;
			public $fisier_imagine;
			public $id_categ;
			public $nume;
			public $prezentare;
		}

		if(isset($cnx)) {
			$idp = $_REQUEST['idprod'];
			$cda = "select * from categorie WHERE id_categ=$idp"; 
			$stmt = $cnx->prepare($cda);
			$stmt->execute();
			$prod = $stmt->fetchObject('Categorie');
			echo "<article class=\"cadegorie\"><h1>$categ->nume_categorie</h1>";
			echo "<div class=\"mostra\">";
			echo '<img src="imagini/'.$categ->imagine.'" alt="" />';
			echo "</div>";

			echo "<div class=\"descriere\">";
			echo "<h2>Prezentare</h2><p>$nume->prezentare</p>";
			echo "</div>";
			echo "</article>";
			$cnx = null;
		} 
		?>
		
		
	</main> 
</div>  <!-- continut pagina -->
</body>
</html>		

