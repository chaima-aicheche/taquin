<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>taquin</title>
	<link href="../src/img/icone.png" rel="icon" type="image/x-icon" />
	<link rel="stylesheet" type="text/css" href="css/styles_taquin.css">
</head>
<body>
<script type="text/javascript" src="../src/js/Grille.js"></script>
<script type="text/javascript" src="../src/js/Case.js"></script>
<script type="text/javascript" src="../src/js/Taquin.js"></script>

	<div id="plateau">
		<div id="titre"><p>Taquin</p></div>
		<div id="boutons">
			<select id="themes">
				<option selected value="nombres">Nombres</option>
				<option value="turing">Alan Turing</option>
				<option value="einstein">Albert Einstein</option>
				<option value="mur">Mur de pierres</option>
				<option value="buzz">Buzz Aldrin</option>
				<option value="ciel">Ciel</option>
			</select>
			<input type="button" id="melanger" value="mélanger">
			<input type="button" id="solution" value="solution">
		</div>
		<div id="jeu">
			<div id="ligne0" class="ligne">
				<!-- J'ai supprimé les images parce qu'il arrivait que l'on puisse voir les images "nombres" un très bref instant -->
				<img id="photo0" class="img_puzzle" src=''>
				<img id="photo1" class="img_puzzle" src=''>
				<img id="photo2" class="img_puzzle" src=''>
				<img id="photo3" class="img_puzzle" src=''>
			</div>
			<div id="ligne1" class="ligne">
				<img id="photo4" class="img_puzzle" src=''>
				<img id="photo5" class="img_puzzle" src=''>
				<img id="photo6" class="img_puzzle" src=''>
				<img id="photo7" class="img_puzzle" src=''>
			</div>
			<div id="ligne2" class="ligne">
				<img id="photo8" class="img_puzzle" src=''>
				<img id="photo9" class="img_puzzle" src=''>
				<img id="photo10" class="img_puzzle" src=''>
				<img id="photo11" class="img_puzzle" src=''>
			</div>
			<div id="ligne3" class="ligne">
				<img id="photo12" class="img_puzzle" src=''>
				<img id="photo13" class="img_puzzle" src=''>
				<img id="photo14" class="img_puzzle" src=''>
				<img id="photo15" class="img_puzzle" src=''>
			</div>
		</div>
		<div id="modele">
			<img id="photo16" src=''>
		</div>	
		<div id="message">0 coup(s), 0 bien placé(s)</div>
	</div>
</body>
<script type="text/javascript" src="../src/js/Main.js"></script>
</html>
