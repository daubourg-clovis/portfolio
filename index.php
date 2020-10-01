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
                        <li><a href="#home">Home</a> </li>
                        <li><a href="#skills">Skills</a></li>
                        <li><a href="#work">Work</a></li>
                        <li><a href="#aboutme">About Me</a></li>
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
                    <h2>My Skills</h2>
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
                    <div class="toggle-3"><img src="medias/coding.png" alt="guy coding" height="200" width="211"> <span>Personal ></span> </div>
                    <div class="logo-personal">
                        <p class="br"><img src="medias/ukusflag.png" alt="mix of uk and us flag"> <br> English</p>
                        <p class="br"><img src="medias/frenchflag.png" alt="French flag"> <br> French</p>
                        <p>Adaptable</p>
                        <p>Curious</p>
                    </div>
                </div>
            </div>
        </section>
            <section class="work" id="work">
                <header class="container">
                    <h2><span class="glitch">My Work</span> </h2>
                </header>
                <div class="work-container">                    
                    <div class="dashboard work-1">
                        <div class="img-1"></div>                       
                        <div class="work-text">
                            <p><strong>Project :</strong> build a dashboard for a caretaker who has to change a building's lightbulbs.</p>
                            <p><strong>Technologies used :</strong>  Bootstrap4, HTML5, CSS3, JQuery,MySQL.</p>                  
                            <p><strong>Language :</strong> French.</p>
                            <div class="btn-seemore">
                                <p class="seemore"><a href="https://clovisd.promo-39.codeur.online/dashboard_lightbulb/login.php" target="_blank" rel="noopener noreferrer" class="seemore-content">See more ></a></p>                
                            </div>
                        </div>
                    </div>
                    <div class="placeholder1 work-2">
                        <div class="img-2"></div> 
                        <div class="work-text">
                            <p><strong>Project :</strong> classified ads website in groups of 2, I had to do the front-end part.</p>
                            <p><strong>Technologies used :</strong> HTML5, CSS3/Sass, Javascript, Bootstrap5, PhP, MySQL .</p>                  
                            <p><strong>Language :</strong> French.</p>
                            <div class="btn-seemore">
                                <p class="seemore"><a href="https://vanessak.promo-39.codeur.online/annonces/public/" target="_blank" rel="noopener noreferrer" class="seemore-content">See more ></a></p> 
                            </div>
                        </div>
                    </div>
                    <div class="placeholder2 work-3">
                        <div class="img-3"></div> 
                        <div class="work-text">
                            <p><strong>Project :</strong> mockup integration in group of 2.</p>
                            <p><strong>Technologies used :</strong> HTML5, CSS3, Javascript, JQuery.</p>                  
                            <p><strong>Language :</strong> English.</p>
                            <div class="btn-seemore">
                                <p class="seemore"><a href="https://clovisd.promo-39.codeur.online/integrationgroupe-4-leaz-clovisd/" target="_blank" rel="noopener noreferrer" class="seemore-content">See more ></a></p> 
                            </div>
                        </div>
                    </div>

                </div>    
            </section>
        <section class="aboutme" id="aboutme">
            <div class="container">
                <header>
                    <h2>About Me</h2>
                </header>
                <div>
                    <p>I’m a 25 year old male currently living in France. <br><br>
                        I’m passionate about the technologies and video games, that’s why after trying to major in English in college i’ve decided to change vocation and to train to become a developer.<br>
                        I’m following class and realising projects in the « Access Code School » a training center in Besançon, the east of France. I’ve started my training during the world health crisis of coronavirus, so i’m used to work remotely, but i’d also love to come into an office. <br><br>
                        I like reading novels or watching movies about a dystopian future like the MaddAddam trilogy from Margaret Atwood or medieval-fantasy like The Lord of The Rings trilogy by Peter Jackson. No, 3 is not my favorite number. <br><br>
                        I’d like to work abroad to discover new countries, new people and new culture and new languages if I’m not in a French or English speaking country. <br><br>
                    </p>
                </div>
                <footer>
                    <p><a href="medias/C-DAUBOURG-RESUME(French).pdf" download>DOWNLOAD RESUME <img src="medias/pdf.png" alt="pdf file"> <span>(296ko, pdf)</span></a></p>
                </footer>
            </div>
        </section>
        <section class="contact container" id="contact">
            <header>
                <h2 data-break="Contact"><span>Contact</span></h2>
            </header>
            <div class="form">
                <form action="" method="post">
                    <div class="form-top">
                        <div class="name">
                            <label for="name">Name :</label>
                            <input type="text" name="name" required>
                        </div>
                        <div class="email">
                            <label for="email">Email :</label>
                            <input type="email" name="email" required>
                        </div>
                    </div>
                    <div class="form-bot">
                        <div class="subject">
                            <label for="subject">Subject :</label>
                            <input type="text" name="subject" required>
                        </div>
                        <div class="message">
                            <label for="message">Message :</label>
                            <textarea name="message" class="textarea" cols="30" rows="8" required ></textarea>
                        </div>
                    </div>
                    <div class="send">
                        <div class="btn-send">
                            <button type="submit">
                                <span class="btn__content">SEND_</span>
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
        <video autoplay loop muted src="medias/bg-vid_citynight.mp4" type="video/mp4" class="bg-vid"></video>
         <div class="direct container">
            <div class="directcontact">
                <h3>Direct Contact</h3>
                <p><strong>Email :</strong> <a href="mailto:clovis.daubourg@gmail.com">clovis.daubourg@gmail.com</a></p>
                <p> <strong>Phone :</strong>  <a href="tel:+33621851162">+33 (0)6.21.85.11.62</a></p>
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
            <p>All Right Reserved | Website Made By <span>Clovis DAUBOURG</span></p>
        </div>

    </footer>
    <script src="script.js"></script>
</body>
</html>