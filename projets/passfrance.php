<?php
$title = "PassFrance - Félix Laviéville";
$meta_title = "PassFrance - Félix Laviéville";
$meta_desc =
	"PassFrance est un site de présentation d'un service mobilité fictif : 1 Pass unique donnant l'accès à toute la France.";
$meta_url = "https://felix-lavieville.com/projets/passfrance.php";
require_once '../template/head.php';
?>
	
	<body>

<?php
require_once '../template/header.php';
?>
	
	<main class="project">
        <h1 class="project-title">PassFrance</h1>
        <img src="/media/passfrance_main.webp" alt="magic knob" class="project-banner top">
        <blockquote>
            <i>PassFrance, 1 forfait, 13 régions.</i>
        </blockquote>
        
        <div class="languages">
            <h2>Langages utilisés :</h2>
            <div>
                <i class="devicon-html5-plain"></i>
                <i class="devicon-css3-plain"></i>
                <i class="devicon-javascript-plain"></i>
                <i class="devicon-php-plain"></i>
                <i class="devicon-mysql-plain"></i>
            </div>
        </div>
        
        <div class="flex">
            <img src="/media/passfrance_modal.webp" alt="passfrance modal" class="project-img">
            <div>
                <h3 class="project-title">Réalisation d'un site web Front&Back</h3>
                <p>Durant l'année RESTART à l'IIM, j'ai élaboré ce projet dans le cadre du premier cours de Marketing.
                    <br>Cours après cours, ce projet m'a suivi en communication, web design et finalement en projet final de Coding.</p>
            </div>
            <div>
                <p>Ce site est conçu pour remplir tous les critères que l'axe nécessitait:</p>
                <p>Il possède plusieurs pages dynamiques, certaines étant générées via des bases de donnée, il est également complètement responsive.</p>
            </div>
            <img src="/media/passfrance_responsive.webp" alt="passfrance responsive" class="project-img">
            <img src="/media/passfrance_newarticle.webp" alt="passfrance newarticle" class="project-img">
            <div>
                <p>Il est équipé d'une partie administration pour gérer les avis et écrire de nouveaux articles de blog et d'une partie inscription disponible en modal sur chacune des pages.</p>
            </div>
            <img src="/media/passfrance_blog.webp" alt="passfrance blog admin" class="project-img">
            <img src="/media/passfrance_modal.webp" alt="passfrance modal" class="project-img">

        </div>
        
    </main>

<?php
require_once '../template/footer.php';
?>