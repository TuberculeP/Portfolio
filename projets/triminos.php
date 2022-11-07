<?php
$title = "Les Triminos - Félix Laviéville";
$meta_title = "Les Triminos - Félix Laviéville";
$meta_desc = "Prenons un grand cadrillage et retirons lui une case au hasard. Est-ce possible de remplir le reste du cadrillage avec des pièces identiques ?";
$meta_url = "https://felix-lavieville.com/projets/triminos.php";
$meta_img = "/media/trimi_5.webp";
$meta_img .= "https://felix-lavieville.com";
require_once '../template/head.php';
?>
	
	<body>

<?php
require_once '../template/header.php';
?>
	
	<main class="project">
		<h1 class="project-title">Triminos</h1>
		<img src="/media/trimi_5.webp" alt="TRIMINO 5" class="project-banner">
		<blockquote>
			<i>Mon code est moche mais, eh : ça fonctionne !</i>
		</blockquote>
		
		<div class="languages">
			<h2>Langages utilisés :</h2>
			<div>
				<i class="devicon-python-plain"></i>
			</div>
		</div>
		
		<div class="flex">
			<img src="/media/trimi_3.webp" alt="trimino 3" class="project-img">
			<div>
				<h3 class="project-title">Application d'une curiosité mathématique avec Python2</h3>
                <p>Pour tout n, (2<sup>n</sup>-1) est un multiple de 3<br>
                    Donc en dessinant un cadrillage de 2<sup>n</sup> sur 2<sup>n</sup> et en retirant une cellule, il est possible de remplir l'intégralité du cadrillage avec des "triminos", des pièces de 3 blocs</p>
            </div>
            
			<div>
                <p>J'ai réalisé ce projet au lycée dans le cadre d'un projet de semestre. <br>
                    Il est possible de retrouver le code source et une démo graphique sur mon repo <a href="https://github.com/TuberculeP/Triminos/">GitHub</a></p>
            </div>
			<img src="/media/trimi_github.webp" alt="trimino github pages" class="project-img">
		
		</div>
	
	</main>

<?php
require_once '../template/footer.php';
?>