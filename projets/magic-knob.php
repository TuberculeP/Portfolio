<?php
$title = "Le Magic Knob - Félix Laviéville";
$meta_title = "Le Magic Knob - Félix Laviéville";
$meta_desc = "Découverte de l'électronique et de l'IOT ! Le Magic Knob vous permet de contrôler vos instruments de musique et plugins avec votre main.";
$meta_url = "https://felix-lavieville.com/projets/magic-knob.php";
require_once '../template/head.php';
$meta_img = "/media/magic-knob-connected.webp";
?>
<body>
<?php
require_once '../template/header.php';
?>
<main class="project">
	
	<h1 class="project-title">Magic Knob</h1>
	<img src="/media/magic-knob-schema-montage.webp" alt="magic knob" class="project-banner">
    <blockquote>
        <i>Prenez des cartes et des capteurs et amusez vous !</i>
    </blockquote>
    
    <div class="languages">
        <h2>Langages Utilisés :</h2>
        <div>
            <i class="devicon-cplusplus-plain"></i>
        </div>
    </div>
 
    <div class="flex">
        <img src="/media/magic-knob-connected.webp" alt="magic_knob" class="project-img">

        <div>
            <h3 class="project-title">Création d'objet connecté MIDI</h3>
            <p>Avec deux camarades de classe, j'ai conçu un object connecté assez sympathique : </p>
            <p>En MAO (Musique Assistée par Ordinateur), on utilise souvent des contrôleurs MIDI pour interagir avec les instruments virtuels. Le protocole étant assez simple, (valeurs entre 0 et 127), il est assez aisé d'en créer un.</p>
        </div>
        <div>
            <p>Le Magic Knob est équipé d'un capteur de distance relié à une carte Arduino. Il convertit la distance de la main en valeur MIDI. On peut contrôler le volume, l'égalisation et bien d'autres choses simplement avec sa main</p>
            <p>Nous nous sommes effectivement bien amusé sur ce projet, entre coder en C++, découvrir l'électronique et l'impression 3D, ce projet est l'un de mes préférés !</p>
        </div>
        <img src="/media/magic-knob.webp" alt="schema" class="project-img">
    </div>

</main>

<?php
require_once '../template/footer.php';
?>


