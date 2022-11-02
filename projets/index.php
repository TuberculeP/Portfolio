<?php
$title = "Mes Projets - Félix Laviéville";
$meta_title = "Mes Projets - Félix Laviéville";
$meta_desc =
    "Sur cette page, retrouvez plusieurs projets que j'ai pu réaliser à l'école ou au lycée, en TD comme en autonomie !";
$meta_url = "https://felix-lavieville.com/projets/";
require_once '../template/head.php';
?>
	
	<body class="index project">

<?php
require_once '../template/header.php';
?>
	
	<main>
		<h1>PROJETS</h1>
		<p>Baladez-vous sur les pages ci-dessous pour découvrir les différents
			projets personnels ou scolaires que j'ai mené à bien depuis le
			début de mes études !</p>
		<div class="cta"><button>UN PROJET AU PIF</button></div>
		<ul>
			<li class="list-hidden"><div><a href="triminos.html">Triminos</a></div></li>
			<li class="list-hidden"><div><a href="magic-knob.php">Magic Knob</a></div></li>
			<li class="list-hidden"><div><a href="ray.html">Ray Tracing</a></div></li>
		</ul>
	</main>

<?php
require_once '../template/footer.php';
?>