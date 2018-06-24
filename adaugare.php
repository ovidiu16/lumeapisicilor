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

		function testare($data) {
   $data = trim($data); // înlătură toate spaţiile de la începutul şi sfârşitul şirului 
   $data = stripslashes($data); //înlătură backslash
   $data = htmlspecialchars($data); //înlocuiește în șirul dat ca argument caracterele folosite în scrierea marcajelor HTML
   return $data; 
}
?>
		<h1 style="font-size:300%; text-align:center;" class="italic centrat"><span class="litera italic">A</span>daugare</h1><br />
			<form name="formular" enctype="multipart/form-data" method="post" action="inserare.php" class="centrat">
				<table class="login centrat">
					<tr>
						<td>Categoria :</td>
						<td>
							<select name="combo">
								<option selected value="initial">(Alege categoria)</option>
								<?php
								include("conn.php");


								class Categorie {
									public $id_categ;
									public $categoria;
								}


								if(isset($cnx)) {
									$cda= "SELECT * FROM categorie order by categoria ASC";
									$stmt = $cnx->prepare($cda);
									$stmt->execute();
									while ($categ = $stmt->fetchObject('Categorie')) {
										echo '<option value="' . $categ->id_categ . '">' . $categ->categoria . 
										'</option>\n';
									}
									$cnx = null;
								}
								?>

							</select>
						</td>
					</tr>
					<tr>
						<td>Selectati imaginea : </td>
						<td><input type="file" name="fisier" /></td>
					</tr>
						<tr>
							<td>Nume: </td>
							<td><input type="text" name="nume" /></td>
						</tr>
						<tr>
							<td>Prezentare : </td>
							<td><textarea name="prez"></textarea></td>
						</tr>
						<tr>
							<td class="centrat"><input type="submit" name="Submit" value="Adauga"></td>
							<td class="centrat"><input type="reset" style="float:right;" name="Submit" value="Sterge"></td>
						</tr>
					</table>
				</form>
				<br>
			</main> 
			
		</div>  <!-- continut pagina -->
	</body>

	</html>	
	