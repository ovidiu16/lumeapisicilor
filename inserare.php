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
       function testare($data) {
        $data = trim($data); 
        $data = stripslashes($data); 
        $data = htmlspecialchars($data); 
        return $data; 
     }
     if (testare($_FILES["fisier"]["error"]) > 0) {
        echo "Error: " . $_FILES["fisier"]["error"] . "<br />"; 
        exit; 
     }
     $numeimagine = testare($_FILES["fisier"]["name"]); //se testeaza daca avem fisier incarcat
     $poz = strrpos($numeimagine, "."); //vom preluat pozitia pct prin fct strrpos care returneaza pozitia ultimei aparitii in sir ca al II-lea argument
     $extensie = substr ($numeimagine, $poz);//in variabila preiau extensia fisierrului incarcat 

     $nmtmp = $_FILES["fisier"]["tmp_name"];

    

     $categoria = testare($_REQUEST["combo"]); 
     $nume = testare($_REQUEST["nume"]); 
     $prezentare = testare($_REQUEST["prez"]); 
     
     include("conn.php");
     if(isset($cnx)) {
        $cda= "INSERT INTO imagini (id_imagine, fisier_imagine,id_categ, nume, prezentare) VALUES ('', :numeimagine,  :idcateg, :nume, :prez)";
        $stmt = $cnx->prepare($cda); 
        $stmt->bindParam(':numeimagine', $numeimagine, PDO::PARAM_STR);
        $stmt->bindParam(':idcateg', $categoria, PDO::PARAM_STR); 
        $stmt->bindParam(':nume', $nume, PDO::PARAM_STR); 
        $stmt->bindParam(':prez', $prezentare, PDO::PARAM_STR);
       
     // se foloseste PARAM_STR chiar si pentru numere 
        $stmt->execute(); 
     // Preiau ID-ul pozei introduse in baza si construiesc un nou nume 
    
     echo "<p class=\"inserare centrat\">";
     echo "<h1><center>Imaginea s-a adaugat in baza de date</center></h1>";
     echo "<form class=\"centrat\"><input type=button value=\"Alta imagine\"
     onClick=\"location.href='adaugare.php'\">";
     
     echo "<input type=button value=\"Acasa\" onClick=\"location.href='index.html'\"></form>";
     echo "</p><br /><br />";
     
     $cnx = null;

  }
  ?>
  </main> 

  </div>  <!-- continut pagina -->
  </body>
  </body>
  </html>