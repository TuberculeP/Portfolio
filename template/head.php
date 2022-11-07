<?php
$meta_img = "https://felix-lavieville.com".$meta_img;
?>

<!DOCTYPE html>
<html lang="fr">
<head>
	<!-- Navigateur & SEO -->
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
 
	<meta name="description" content="<?=$meta_desc?>">
	<meta name="keywords" content="portfolio code study student">
	<link rel="canonical" href="<?=$meta_url?>">
	<link rel="author" href="mailto:lavieville.felix@gmail.com">
 
	<!--Embed -->
	<meta content="<?=$meta_title?>" property="og:title">
	<meta content="<?=$meta_desc?>" property="og:description">
	<meta content="<?=$meta_url?>"  property="og:url">
	<meta content="<?=$meta_img?>" property="og:image">
    <meta property="og:image:height" content="600">
	<meta content="#FF90FB" data-react-helmet="true" name="theme-color">

    <!--Embed Twitter -->
    
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:site" content="<?=$meta_url?>">
    <meta name="twitter:creator" content="@TuberculeP">
    <meta name="twitter:title" content="<?=$meta_title?>">
    <meta name="twitter:description" content="<?=$meta_desc?>">
    <meta name="twitter:image" content="<?=$meta_img?>">
    
    
    <link rel="stylesheet" href="/style.css">
	<link rel="preload" href="/style.css" as="style">
	<link rel="preload" href="/scripts/script_index.js" as="script">
	<link rel="preload" href="/scripts/background_anim.js" as="script">
	<link rel="shortcut icon" href="/media/favicon.ico" type="image/x-icon">
    
    <!-- icones -->
    <link rel="preload" href="https://cdn.jsdelivr.net/gh/devicons/devicon@v2.15.1/devicon.min.css" as="style"
          onload="this.onload=null;this.rel='stylesheet'">
    <noscript><link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/devicons/devicon@v2.15.1/devicon.min.css"></noscript>
    <title><?=$title?></title>
    
    <!-- Balisage JSON-LD généré par l'outil d'aide au balisage de données structurées de Google -->
    <script type="application/ld+json">
        {
            "@context": "http://schema.org",
            "@type": "LocalBusiness",
            "name": "FÉLIX LAVIÉVILLE",
            "image": "https://felix-lavieville.com/media/tubercule_neon.webp",
            "telephone": "07 82 57 39 56",
            "email": "lavieville.felix@gmail.com",
            "address": {
                "@type": "PostalAddress",
                "addressLocality": "Sartrouville",
                "addressCountry": "France",
                "postalCode": "78500"
            },
            "url": "https://felix-lavieville.com/"
        }
    </script>
</head>