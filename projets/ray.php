<?php
$title = "Ray Tracing PY - Félix Laviéville";
$meta_title = "Ray Tracing PY - Félix Laviéville";
$meta_desc = "Projet de mise en application directe des formules physiques de réflexion et réfraction de la lumière via un script Python3.";
$meta_url = "https://felix-lavieville.com/projets/ray.php";
$meta_img = "/media/ray1.webp";
$meta_img .= "https://felix-lavieville.com";
require_once '../template/head.php';
?>
<body>
<?php
require_once '../template/header.php';
?>
<main class="project">
	
	<h1 class="project-title">Ray Tracing PY</h1>
	<img src="/media/ray_code.webp" alt="ray code" class="project-banner">
	<blockquote>
		<i>Désormais je déteste le Python (mon colloc)</i>
	</blockquote>
	
	<div class="languages">
		<h2>Langage Utilisé :</h2>
		<div>
			<i class="devicon-python-plain"></i>
		</div>
	</div>
	
	<div class="flex">
		<img src="/media/ray1.webp" alt="magic_knob" class="project-img">
		
		<div>
			<h3 class="project-title">Un script de rendu d'image avec Python</h3>
            <p>Le but du TP était de pouvoir calculer la réfraction de la lumière sur des objets simples via Python3.<br>
                Ce projet est plus mathématique que purement algorithmique puisque 80% de la difficulté résidait dans l'implémentation
                des calculs vectoriels sur Python.
            </p>
        </div>
		<div>
            <p>Une fois ceci fait, on donnait à notre programme un fichier scene contenant des informations sur les objets présents dans la scène, puis le rendu s'effectuait !</p>
            <p>Le rendu prend entre 15 et 30 secondes par images pour des scènes peu complexes mais l'application en python d'équations physiques de la lumière était très enrichissant.</p>
        </div>
		<img src="/media/ray2.webp" alt="schema" class="project-img">
	</div>

</main>

<?php
require_once '../template/footer.php';
?>


