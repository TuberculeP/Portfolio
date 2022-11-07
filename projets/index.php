<?php
$title = "Mes Projets - Félix Laviéville";
$meta_title = "Mes Projets - Félix Laviéville";
$meta_desc =
    "Sur cette page, retrouvez plusieurs projets que j'ai pu réaliser à l'école ou au lycée, en TD comme en autonomie !";
$meta_url = "https://felix-lavieville.com/projets/";
$meta_img = "/media/profile_square.webp";
$meta_img .= "https://felix-lavieville.com";
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
            <a href="passfrance.php" class="grid-main">
                <h3>PassFrance</h3>
                <img src="/media/passfrance_main.webp" alt="passfrance">
            </a>
            <a href="magic-knob.php" class="grid-sec">
                <h3>Magic Knob</h3>
                <img src="/media/magic-knob-schema-montage.webp" alt="magic knob">
            </a>
            <a href="ray.php" class="grid-sec">
                <h3>Ray Tracing</h3>
                <img src="/media/ray1.webp" alt="Ray Tracing">
            </a>
            <a href="triminos.php" class="grid-sec">
                <h3>Triminos</h3>
                <img src="/media/trimi_5.webp" alt="triminos">
            </a>
        </div>
	</main>

<?php
require_once '../template/footer.php';
?>