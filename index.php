<?php
$title = "Mon Portfolio - Félix Laviéville";
$meta_title = "Mon Portfolio - Félix Laviéville";
$meta_desc = "Bienvenue sur mon portfolio ! Je suis étudiant en 2e année à l'IIM en Coding & Digital Innovation et je vous présente ici quelques projets !";
$meta_url = "https://felix-lavieville.com/";
require_once 'template/head.php';
?>

<body class="index home">

<?php
require_once 'template/header.php';
?>

<main>
    <div class="index presentation">
        <div class="border">
            <img src="/media/tubercule_neon.webp" alt="Félix Laviéville" id="img_profile">
        </div>

        <div>
            <div>
                <div class="pseudo">
                    <h1>FÉLIX LAVIÉVILLE</h1>
                </div>
                <div class="reseaux">
                    <svg id="discord" class="hidden" width="30" height="30" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" style="transition: all 0.1s ease 0s;">
                        <g clip-path="url(#clip0_2_31)">
                            <path d="M20.317 4.492C18.787 3.802 17.147 3.292 15.432 3.002C15.4167 2.99907 15.4009 3.00096 15.3868 3.00741C15.3726 3.01386 15.3608 3.02455 15.353 3.038C15.143 3.407 14.909 3.888 14.745 4.268C12.9261 3.99624 11.0769 3.99624 9.25799 4.268C9.07533 3.84686 8.86934 3.43623 8.64099 3.038C8.63325 3.02439 8.62154 3.01345 8.60743 3.00666C8.59331 2.99987 8.57746 2.99755 8.56199 3C6.84799 3.29 5.20799 3.8 3.67699 4.491C3.66382 4.49653 3.65265 4.50595 3.64499 4.518C0.532992 9.093 -0.320008 13.555 0.0989923 17.961C0.100158 17.9718 0.103508 17.9822 0.108837 17.9917C0.114167 18.0011 0.121364 18.0094 0.129992 18.016C1.94638 19.3384 3.97233 20.3458 6.12299 20.996C6.13798 21.0006 6.15402 21.0006 6.16901 20.996C6.18399 20.9913 6.19723 20.9823 6.20699 20.97C6.66979 20.3511 7.07989 19.6944 7.43299 19.007C7.43789 18.9976 7.44072 18.9873 7.44127 18.9767C7.44183 18.9661 7.44011 18.9555 7.43622 18.9457C7.43233 18.9358 7.42637 18.9269 7.41874 18.9195C7.41111 18.9122 7.40199 18.9065 7.39199 18.903C6.746 18.6597 6.12008 18.3662 5.51999 18.025C5.50921 18.0188 5.50012 18.0101 5.49355 17.9996C5.48698 17.989 5.48312 17.977 5.48233 17.9647C5.48153 17.9523 5.48383 17.9399 5.48901 17.9286C5.49418 17.9173 5.50208 17.9075 5.51199 17.9C5.63799 17.807 5.76399 17.71 5.88399 17.613C5.89479 17.6043 5.9078 17.5987 5.92158 17.597C5.93535 17.5952 5.94934 17.5973 5.96199 17.603C9.88899 19.367 14.142 19.367 18.023 17.603C18.0357 17.5969 18.0498 17.5946 18.0638 17.5962C18.0778 17.5978 18.091 17.6032 18.102 17.612C18.222 17.71 18.347 17.807 18.474 17.9C18.484 17.9073 18.492 17.917 18.4974 17.9282C18.5027 17.9394 18.5052 17.9517 18.5046 17.9641C18.504 17.9765 18.5004 17.9885 18.494 17.9992C18.4876 18.0098 18.4787 18.0187 18.468 18.025C17.87 18.369 17.248 18.66 16.595 18.902C16.585 18.9056 16.5758 18.9114 16.5682 18.9188C16.5606 18.9263 16.5546 18.9353 16.5507 18.9452C16.5468 18.9552 16.5451 18.9658 16.5457 18.9765C16.5463 18.9871 16.5491 18.9975 16.554 19.007C16.914 19.694 17.326 20.348 17.779 20.969C17.7884 20.9817 17.8015 20.9913 17.8166 20.9963C17.8316 21.0013 17.8478 21.0015 17.863 20.997C20.0173 20.3486 22.0466 19.3408 23.865 18.016C23.8739 18.0098 23.8813 18.0018 23.8868 17.9925C23.8923 17.9831 23.8958 17.9728 23.897 17.962C24.397 12.868 23.059 8.442 20.348 4.52C20.3413 4.50726 20.3303 4.49732 20.317 4.492ZM8.01999 15.278C6.83799 15.278 5.86299 14.209 5.86299 12.898C5.86299 11.586 6.81899 10.518 8.01999 10.518C9.22999 10.518 10.196 11.595 10.177 12.898C10.177 14.21 9.22099 15.278 8.01999 15.278V15.278ZM15.995 15.278C14.812 15.278 13.838 14.209 13.838 12.898C13.838 11.586 14.793 10.518 15.995 10.518C17.205 10.518 18.171 11.595 18.152 12.898C18.152 14.21 17.206 15.278 15.995 15.278V15.278Z" fill="#F0EEEE"></path>
                        </g>
                        <defs>
                            <clipPath id="clip0_2_31">
                                <rect width="24" height="24" fill="white"></rect>
                            </clipPath>
                        </defs>
                    </svg>
                    <a href="https://github.com/TuberculeP" target="_blank"><svg id="github" class="hidden" width="30" height="30" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" style="transition: all 0.1s ease 0s;">
                            <g clip-path="url(#clip0_2_29)">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M12 0C5.37 0 0 5.37 0 12C0 17.31 3.435 21.795 8.205 23.385C8.805 23.49 9.03 23.13 9.03 22.815C9.03 22.53 9.015 21.585 9.015 20.58C6 21.135 5.22 19.845 4.98 19.17C4.845 18.825 4.26 17.76 3.75 17.475C3.33 17.25 2.73 16.695 3.735 16.68C4.68 16.665 5.355 17.55 5.58 17.91C6.66 19.725 8.385 19.215 9.075 18.9C9.18 18.12 9.495 17.595 9.84 17.295C7.17 16.995 4.38 15.96 4.38 11.37C4.38 10.065 4.845 8.985 5.61 8.145C5.49 7.845 5.07 6.615 5.73 4.965C5.73 4.965 6.735 4.65 9.03 6.195C9.99 5.925 11.01 5.79 12.03 5.79C13.05 5.79 14.07 5.925 15.03 6.195C17.325 4.635 18.33 4.965 18.33 4.965C18.99 6.615 18.57 7.845 18.45 8.145C19.215 8.985 19.68 10.05 19.68 11.37C19.68 15.975 16.875 16.995 14.205 17.295C14.64 17.67 15.015 18.39 15.015 19.515C15.015 21.12 15 22.41 15 22.815C15 23.13 15.225 23.505 15.825 23.385C18.2072 22.5807 20.2772 21.0497 21.7437 19.0074C23.2101 16.965 23.9993 14.5143 24 12C24 5.37 18.63 0 12 0Z" fill="#F0EEEE"></path>
                            </g>
                            <defs>
                                <clipPath id="clip0_2_29">
                                    <rect width="24" height="24" fill="white"></rect>
                                </clipPath>
                            </defs></svg></a>
                    <a href="mailto:lavieville.felix@gmail.com"><svg id="mail" class="hidden" width="30" height="30" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" style="transition: all 0.1s ease 0s;">
                            <path d="M24 7.0595V17.75C24 18.7446 23.6049 19.6984 22.9017 20.4017C22.1984 21.1049 21.2446 21.5 20.25 21.5H3.75C2.75544 21.5 1.80161 21.1049 1.09835 20.4017C0.395088 19.6984 0 18.7446 0 17.75V7.0595L11.619 13.8965C11.7344 13.9646 11.866 14.0005 12 14.0005C12.134 14.0005 12.2656 13.9646 12.381 13.8965L24 7.0595ZM20.25 2C21.1727 1.99985 22.0631 2.33991 22.7508 2.95511C23.4385 3.57031 23.8753 4.41746 23.9775 5.3345L12 12.38L0.0225002 5.3345C0.124737 4.41746 0.561486 3.57031 1.24919 2.95511C1.9369 2.33991 2.82728 1.99985 3.75 2H20.25Z" fill="#F0EEEE"></path></svg></a>
                </div>
            </div>
            <section>
                <h2>Hello !</h2>
                <p>
                    Bienvenue sur mon portfolio ! Je suis étudiant à l’IIM en Coding &
                    Digital Innovation et je vous présente ici mes passions et mes
                    projets.
                </p>
            </section>
            <div class="cta">
                <a href="projets/" class="button">DÉCOUVRIR</a>
            </div>
        </div>
    </div>
    <div class="index competence">
        <h1>Compétences</h1>
        <div>
            <div class="languages">
                <div>
                    <i class="devicon-html5-plain"></i>
                    <h2>HTML</h2>
                </div>
                <div>
                    <i class="devicon-css3-plain"></i>
                    <h2>CSS</h2>
                </div>
                <div>
                    <i class="devicon-javascript-plain"></i>
                    <h2>JavaScript</h2>
                </div>
                <div>
                    <i class="devicon-discordjs-plain"></i>
                    <h2>Discord.js</h2>
                </div>
                <div>
                    <i class="devicon-python-plain"></i>
                    <h2>Python</h2>
                </div>
                <div>
                    <i class="devicon-mysql-plain"></i>
                    <h2>MySQL</h2>
                </div>
                <div>
                    <i class="devicon-php-plain"></i>
                    <h2>PHP</h2>
                </div>
                <div>
                    <i class="devicon-wordpress-plain"></i>
                    <h2>WordPress</h2>
                </div>

            </div>
            <div class="skills">
                <div>
                    <h2>Hard Skills</h2>
                    <ul>
                        <li>UX/UI Design</li>
                        <li>Modélisation de Base de Données</li>
                        <li>Programmation objet</li>
                        <li>Back-End</li>
                    </ul>
                </div>
                <div>
                    <h2>Soft Skills</h2>
                    <ul>
                        <li>Communication</li>
                        <li>Coopération</li>
                        <li>Adaptabilité</li>
                        <li>Organisation</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
 
</main>

<?php
require_once 'template/footer.php';
?>