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
		<div class="text">
            <h1>PROJETS</h1>
            <p>Baladez-vous sur les pages ci-dessous pour découvrir les différents
                projets personnels ou scolaires que j'ai mené à bien depuis le
                début de mes études !
            </p>
            <div class="cta">
                <button>Indécis ?</button>
            </div>
        </div>
        
        <div class="grid-container">
            <a href="magic-knob.php" class="grid-main">
                <h3>Magic Knob</h3>
                <img src="/media/magic-knob-schema-montage.webp" alt="magic knob">
            </a>
            <a href="ray.html" class="grid-sec">
                <h3>Ray Tracing</h3>
                <img src="/media/ray1.webp" alt="Ray Tracing">
            </a>
            <a href="triminos.html" class="grid-sec">
                <h3>Triminos</h3>
                <img src="/media/trimi_5.webp" alt="magic knob">
            </a>
            <a href="template.html" class="grid-sec">
                <h3>Magic Knob</h3>
                <img src="/media/magic-knob-schema-montage.webp" alt="magic knob">
            </a>
        </div>
	</main>

<?php
require_once '../template/footer.php';
?>