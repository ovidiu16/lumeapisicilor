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

//declar clasa Admin, de tip public
//clasa odata declarata se pot crea instanţe clasei
//clasa poate fi instanţiată printr-un număr oarecare de obiecte
class Admin {
   public $id_admin;//variabila instanteti clasei Admin
   public $nume;
   public $parola;
}

$n = testare($_REQUEST["numeletau"]); //$_REQUEST este un sir de caractere care contine volorile campului asociat
$p = testare($_REQUEST["parolata"]);//campul parolata este valoarea proprietăţii name a controlului Windows a cărui valoare dorim să o preluăm
if(isset($cnx)) {//isset verifica daca variabilei i s-a atribuit o valoare
   $cda= "SELECT * from admin";//comanda SQL este memorata in variabila $cda
   $stmt = $cnx->prepare($cda);
   $stmt->execute();//trimite spre server comanda SELECT, prin aplelul metodei execute
   $gasit = false;
   while ($utilizator = $stmt->fetchObject('Admin')) {
   	if($utilizator->nume == $n && $utilizator->parola == $p) {
                 echo '<center><h1 class="italic centrat">'.$n.'</h1>';
                 echo '<h1 style="font-size:200%; class="italic centrat"><span class="litera italic"> S</span>unteti autorizat</h1></center>';
                 echo "<center><form class=\"centrat\" method=\"post\"action=\"adaugare.php\"></center>";
                 echo "<center><input type=\"submit\" name=\"submit1\"value=\"Adaugare\"></center>";
                  echo "</form></center>";
                  echo"<br />";
                  
                  echo "<center><form class=\"centrat\" method=\"post\"action=\"sterge.php\"><center>";
                  echo "<center><input type=\"submit\" name=\"submit2\"value=\"Stergere\"></center>";
                  echo"<br />";
                  
                  echo "</form></center>";

         $gasit = true;
         break;
      }
   }
   if(!$gasit) {
   	echo '<h1 class="italic centrat"><span class="litera italic"> NU</span>avti acces in baza de date</h1><br />';
   	echo '<form class="centrat"><input type="button" value="Mai incearca" onClick="location.href=\'login.html\'"></form></center>';
   }
   $cnx = null;
}
?>


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
