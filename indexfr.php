<?php
    require_once('contact.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/css2?family=Aldrich&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Electrolize&display=swap" rel="stylesheet">
    <title>Clovis DAUBOURG - Web Developer</title>
</head>
<body>

    <header>
        <div class="navbar">
            <p class="logo">PORTFOLIO</p>
            <div class="navbar-end">
                <nav>
                    <ul>
                        <li><a href="#home">Accueil</a> </li>
                        <li><a href="#skills">Compétences</a></li>
                        <li><a href="#work">Créations</a></li>
                        <li><a href="#aboutme">À propos</a></li>
                        <li><a href="#contact">Contact</a></li>
                    </ul>
                </nav>
                 <div class="language">                
                     <p><a href="index.php"><img src="medias/ukusflag.png" alt="mix of UK and US flag" width="85" height="45"></a></p>
                     <p><a href="indexfr.php"><img src="medias/frenchflag.png" alt="French flag" width="85" height="45"></a></p>
                </div> 
            </div>
        </div>
        <div id="home">
            <h1>Clovis<br>DAUBOURG</h1>
            <h2 class="mirror" data-text="Web Developer">Web Developer</h2>
        </div>
    </header>
    <main>
        <section class="skills" id="skills">
            <div class="container">
                <header>
                    <h2>Mes compétences</h2>
                </header>
                <div class="front">
                    <div  class="toggle-1">
                        <img src="medias/painting.png" alt="penguin painting" width="214" height="200">
                        <span>Front-end ></span>
                    </div>
                    <div class="logo-front">
                        <p><img src="medias/html5.png" alt="html5 logo" width="100" height="100"> <br> HTML</p>
                        <p><img src="medias/css.png" alt="css3 logo" width="100" height="100"> <br> CSS</p>
                        <p><img src="medias/sass.png" alt="sass logo" width="100" height="100"> <br> Sass</p>
                        <p><img src="medias/bootstrap.png" alt="bootstrap logo" width="100" height="100"> <br> Bootstrap</p>
                        <p ><img src="medias/javascript.png" alt="javascript logo" width="100" height="100" class="js"> <br> Javascript</p>
                        <p><img src="medias/gitlogo.png" alt="git logo" width="100" height="100"> <br> Git</p>
                    </div>
                </div>
                <div class="back">
                    <div class="toggle-2"><img src="medias/gears.png" alt="gears" width="188" height="200"> <span>Back-end ></span> </div>
                    <div class="logo-back">
                        <p><img src="medias/php.png" alt="php logo"> <br> PHP</p>
                        <p><img src="medias/MySQL.png" alt="MySQL logo"> <br> SQL</p>
                        <p><img src="medias/composer.png" alt="Composer logo"> <br> Composer</p>
                    </div>
    
                </div>
                <div class="personal">
                    <div class="toggle-3"><img src="medias/coding.png" alt="guy coding" height="200" width="211"> <span>Personnelles ></span> </div>
                    <div class="logo-personal">
                        <p class="br"><img src="medias/ukusflag.png" alt="mix of uk and us flag"> <br> Anglais</p>
                        <p class="br"><img src="medias/frenchflag.png" alt="French flag"> <br> Français</p>
                        <p>Polyvalent</p>
                        <p>Curieux</p>
                    </div>
                </div>
            </div>
        </section>
            <section class="work" id="work">
                <header class="container">
                    <h2><span class="glitch">Mes créations</span> </h2>
                </header>
                <div class="work-container">                    
                    <div class="dashboard work-1">
                        <div class="img-1"></div>                       
                        <div class="work-text">
                            <p><strong>Projet : </strong> réaliser un dashboard pour le gardien d'un immeuble devant changer les ampoules.</p>
                            <p><strong>Technologies utilisées :</strong>  Bootstrap4, HTML5, CSS3, JQuery,MySQL.</p>                  
                            <p><strong>Langue :</strong> français.</p>
                            <div class="btn-seemore">
                                <p class="seemore"><a href="https://clovisd.promo-39.codeur.online/dashboard_lightbulb/login.php" target="_blank" rel="noopener noreferrer" class="seemore-content">Voir plus ></a></p>                
                            </div>
                        </div>
                    </div>
                    <div class="placeholder1 work-2">
                        <div class="img-2"></div> 
                        <div class="work-text">
                            <p><strong>Projet :</strong> site de petites annonces en groupe de 2, je me suis occupé de la partie front-end.</p>
                            <p><strong>Technologies utilisées :</strong> HTML5, CSS3.</p>                  
                            <p><strong>Langue :</strong> français.</p>
                            <div class="btn-seemore">
                                <p class="seemore"><a href="https://clovisd.promo-39.codeur.online/integration3/" target="_blank" rel="noopener noreferrer" class="seemore-content">Voir plus ></a></p> 
                            </div>
                        </div>
                    </div>
                    <div class="placeholder2 work-3">
                        <div class="img-3"></div> 
                        <div class="work-text">
                            <p><strong>Projet :</strong> intégration de maquette en groupe .</p>
                            <p><strong>Technologies utilisées :</strong> HTML5, CSS3, Javascript, JQuery.</p>                  
                            <p><strong>Langue :</strong> anglais.</p>
                            <div class="btn-seemore">
                                <p class="seemore"><a href="https://clovisd.promo-39.codeur.online/integrationgroupe-4-leaz-clovisd/" target="_blank" rel="noopener noreferrer" class="seemore-content">Voir plus ></a></p> 
                            </div>
                        </div>
                    </div>

                </div>    
            </section>
        <section class="aboutme" id="aboutme">
            <div class="container">
                <header>
                    <h2>À propos</h2>
                </header>
                <div>
                    <p>Je suis un homme de 25ans vivant actuellement en France.<br><br>
                        Je suis passionné de nouvelles technologies et de jeux vidéo, c'est pourquoi après avoir essayé de faire un licence d'anglais j'ai décidé de changer de voie.<br>
                        Je fais une formation à l'« Access Code School », un centre à Besançon. J'ai commencé celle-ci pendant la crise sanitaire liée au coronavirus, donc je suis habitué au télétravail, mais j'aimerais aussi pouvoir venir travailler dans des bureaux. <br><br>
                        J'aime regarder des films ou lire des romans de dystopie comme la trilogie "MaddAddam" de Margaret Atwood ou de la medieval-fantasy avec la trilogie du Seigneur Des Anneaux réalisée par Peter Jackson.<br><br>
                    </p>
                </div>
                <footer>
                    <p><a href="medias/C-DAUBOURG-RESUME(French).pdf" download> Télécharger mon CV<img src="medias/pdf.png" alt="pdf file"> <span>(296ko, pdf)</span></a></p>
                </footer>
            </div>
        </section>
        <section class="contact container" id="contact">
            <header>
                <h2 data-break="CONTACT"><span>CONTACT</span></h2>
            </header>
            <div class="form">
                <form  method="post">
                    <div class="form-top">
                        <div class="name">
                            <label for="name">Nom :</label>
                            <input type="text" name="name" id="name" required>
                        </div>
                        <div class="email">
                            <label for="email">Email :</label>
                            <input type="email" name="email" id="email" required>
                        </div>
                    </div>
                    <div class="form-bot">
                        <div class="subject">
                            <label for="subject">Sujet :</label>
                            <input type="text" name="subject" id="subject" required>
                        </div>
                        <div class="message">
                            <label for="message">Message :</label>
                            <textarea name="message" class="textarea" cols="30" rows="8" id="message" required ></textarea>
                        </div>
                    </div>
                    <div class="send">
                        <div class="btn-send">
                            <button type="submit">
                                <span class="btn__content">ENVOYER_</span>
                                <span class="btn__glitch"></span>
                                <span class="btn__label">DATA</span>
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </section>
        
    </main>
    <footer class="footer ">
        <video autoplay loop muted src="medias/bg-vid_citynight.mp4"  class="bg-vid"></video>
         <div class="direct container">
            <div class="directcontact">
                <h3>Contact direct</h3>
                <p><strong>Email :</strong> <a href="mailto:clovis.daubourg@gmail.com">clovis.daubourg@gmail.com</a></p>
                <p> <strong>Téléphone :</strong>  <a href="tel:+33621851162">06.21.85.11.62</a></p>
            </div>
            <div class="separator"></div>
            <div class="socials">
                <div class="icon-effect icon-effect-a">
                    <p class="tel hover"><a href="tel:+33621851162"><img src="medias/phone.png" alt="smarthphone icon"></a></p>
                    <p class="mail hover"><a href="mailto:clovis.daubourg@gmail.com"><img src="medias/mail.png" alt=""></a></p>
                </div>
                <div class="icon-effect icon-effect-a">
                    <p class="github hover"><a href="https://github.com/daubourg-clovis/" target="_blank" rel="noopener noreferrer"><img src="medias/github.png" alt=""></a></p>
                    <p class="linkedin hover"><a href="https://www.linkedin.com/in/clovis-daubourg-45b090167/" target="_blank" rel="noopener noreferrer"> <img src="medias/linkedin.png" alt=""></a></p>
                </div>
            </div>
        </div>
        <div class="legals">
            <p>Tous droits réservés | Site crée par <span>Clovis DAUBOURG</span></p>
        </div>

    </footer>
    <script src="script.js"></script>
</body>
</html>