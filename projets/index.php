<?php
$title = "Mes Projets - Félix Laviéville";
$meta_title = "Mes Projets - Félix Laviéville";
$meta_desc =
    "Sur cette page, retrouvez plusieurs projets que j'ai pu réaliser à l'école ou au lycée, en TD comme en autonomie !";
$meta_url = "https://felix-lavieville.com/projets/";
$meta_img = "/media/profile_square.webp";
require_once '../template/head.php';
?>
	
	<body class="index project">

<?php
require_once '../template/header.php';

//se connecter à GitHub et récuperer tous les repo
$repos = [];
$curl = curl_init();
curl_setopt_array($curl, [
    CURLOPT_URL => "https://api.github.com/users/TuberculeP/repos",
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_FOLLOWLOCATION => true,
    CURLOPT_ENCODING => "",
    CURLOPT_MAXREDIRS => 10,
    CURLOPT_TIMEOUT => 30,
    CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
    CURLOPT_CUSTOMREQUEST => "GET",
    CURLOPT_HTTPHEADER => [
        "cache-control: no-cache",
        "user-agent: TuberculeP",
        "Authorization: Bearer TOKENICI"
    ],
]);
$response = curl_exec($curl);
$err = curl_error($curl);
curl_close($curl);
if ($err) {
    echo "cURL Error #:" . $err;
} else {
    $repos = json_decode($response);
}

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
        <div class="list">
			<?php
			//afficher tous les repos avec Titre, Description, Dernière mise à jour, Langages utilisés
			foreach ($repos as $repo) {
				
				?>
                    <div class="project-listed">
                        <a href="<?=$repo->html_url?>">
                            <h2><?= $repo->name ?></h2>
                            <div>Dernière mise à jour : <?= date('d/m/Y', strtotime($repo->updated_at)) ?></div>
                            <p><i><?= $repo->description ?></i></p>
                        </a>
                    </div>
				<?php
			}
			?>
        </div>
	</main>

<?php
require_once '../template/footer.php';
?>