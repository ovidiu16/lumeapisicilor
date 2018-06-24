<?php 
?>

<div id="continut_pag">
	<main>
		<?php
		function testare($data) {
			$data = trim($data);
			$data = stripslashes($data);
			$data = htmlspecialchars($data);
			return $data;
		}

		$nume=testare($_REQUEST["nume"]);
		$email=testare($_REQUEST["email"]);
		$subiect=testare($_REQUEST["subiect"]);
		$mesaj=testare($_REQUEST["mesaj"]);

		include("conn.php");
		if(isset($cnx)) {

			$cda = "INSERT INTO formular (id, nume, email, subiect, mesaj)VALUES ('', :nume, :email, :subiect, :mesaj)";
			$stmt = $cnx->prepare($cda); 
			$stmt->bindParam(':nume', $nume, PDO::PARAM_STR);
			$stmt->bindParam(':email', $email, PDO::PARAM_STR);
			$stmt->bindParam(':subiect', $subiect, PDO::PARAM_STR);
			$stmt->bindParam(':mesaj', $mesaj, PDO::PARAM_STR);
			$stmt->execute(); 

			echo "<p class=\"inserare centrat\">"; 
			echo "<h1 class=\"italic centrat\"><span class=\"litera italic\">$nume </span><br /> Mesajul dv. s-a adaugat in cartea noastra de oaspeti<br /><br /> Va multumim!</h1><br />";

			echo "<br /><br /><br /><br />";
			echo " <a href=\"index.html\"> Acasa </a>";
			
			$cnx = null;
		}
		?>
	</main>
</div>  <!-- continut pagina -->
</body>
</html>