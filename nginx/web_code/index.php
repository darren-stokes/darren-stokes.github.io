<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Darren Stokes | DevOps Engineer</title>

        <!-- CSS -->
        <link href="https://fonts.googleapis.com/css?family=Schoolbell&v1" rel="stylesheet">
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link href="stylesheets/default.css" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.0/font/bootstrap-icons.css" rel="stylesheet">

        <!-- Javascript -->
        <script src="scripts/javascript.js"></script>
    </head>
    <body>
        <?php
        include('banner.html');
        ?>
        <!-- Content -->
        <div class="content">
            <div class="profile-overview content-box">
                <div class="overlay">
                    <!-- Video gotten from https://www.pexels.com/video/a-man-looking-at-computer-monitor-6962343/ -->
                    <video class="video-background" autoplay loop muted="muted" playsinline>
                        <source src="assets/stock_coding_video_1080.mp4" type="video/mp4">
                    </video>
                    <!-- Responsible for darking the video -->
                    <div class="overlay dark-background"></div>
                    <!-- Banner text -->
                    <div class="profile-banner">
                        <div class="lang lang-en">
                            <p class="salutation">Hello there, I'm</p>
                        </div>
                        <div class="lang lang-es">
                            <p class="salutation">Buenos días, soy</p>
                        </div>
                        <h1 class="name">Darren Stokes</h1>
                        <hr class="divider">
                        <div class="lang lang-en">
                            <p class="job-title">DevOps Engineer</p>
                        </div>
                        <div class="lang lang-es">
                            <p class="job-title">Ingeniero DevOps</p>
                        </div>
                    </div>
                    <!-- Down arrow -->
                    <div class="down-button">
                        <a href="#about">
                            <i class="bi bi-arrow-down-circle">
                            </i>
                        </a>
                    </div>
                </div>
            </div>
            <section id="about" class="about-me">
                <div class="wrapper">
                    <div class="content-box">
                        <div class="content-inner">
                            <div class="lang lang-en">
                                <h3 class="section-heading">About Me</h3>
                                <p class="section-text">My career in IT has spanned various roles, beginning with a Systems Engineer position at Susquehanna International Group in Dublin, where I focused on server deployments and configuration management.</p>
                                <p class="section-text">At Securelinx, I expanded my expertise as a Linux Engineer, managing system updates and leading key projects. My role as a Senior DevOps Engineer at Rentalmatics involved implementing CI/CD pipelines and enhancing monitoring and deployment processes.</p>
                                <p class="section-text">Most recently, at Cyferd in Málaga, I served as a DevOps Engineer, working on cloud computing and operational efficiency projects.</p>
                                <p class="section-text">My education includes a Master’s degree in Management of Information Systems from Trinity College Dublin and a Bachelor's in Applied Computing from the University of Limerick.</p>
                                <p class="section-text">My technical proficiency spans cloud platforms like GCP and AWS, as well as tools such as Terraform, Prometheus, and Python.</p>
                            </div>
                            <div class="lang lang-es">
                                <h3 class="section-heading">Sobre Mi</h3>
                                <p class="section-text">Mi carrera en TI ha abarcado varios roles, comenzando con un puesto de ingeniero de sistemas en Susquehanna International Group en Dublín, donde me centré en implementaciones de servidores y administración de configuración.</p>
                                <p class="section-text">En Securelinx, amplié mi experiencia como ingeniero de Linux, gestionando actualizaciones de sistemas y liderando proyectos clave. Mi función como ingeniero sénior de DevOps en Rentalmatics consistía en implementar pipelines de CI/CD y mejorar los procesos de supervisión e implementación.</p>
                                <p class="section-text">Más recientemente, en Cyferd en Málaga, me desempeñé como ingeniero DevOps, trabajando en proyectos de computación en la nube y eficiencia operativa.</p>
                                <p class="section-text">Mi formación incluye una Maestría en Gestión de Sistemas de Información del Trinity College de Dublín y una Licenciatura en Computación Aplicada de la Universidad de Limerick.</p>
                                <p class="section-text">Mi competencia técnica abarca plataformas en la nube como GCP y AWS, así como herramientas como Terraform, Prometheus y Python.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <div class="wrapper divider-wrapper odds">
            </div>
            <section id="education" class="evens">
                <div class="wrapper">
                    <div class="content-box">
                        <div class="content-inner">
                            <div class="lang lang-en">
                                <h3 class="section-heading">Education</h3>
                            </div>
                            <div class="lang lang-es">
                                <h3 class="section-heading">Educación</h3>
                            </div>
                            <div class="education-titles">
                                <div class="content-left">
                                    <div class="lang lang-en">
                                        <p class="section-text strong">&#8226; Bachelor of Science (B.Sc.) in Applied Computing and Network Technologies</p>
                                        <p class="section-text italic">University of Limerick, Ireland</p>
                                    </div>
                                    <div class="lang lang-es">
                                        <p class="section-text strong">&#8226; Bachelor of Science (B.Sc.) in Applied Computing and Network Technologies</p>
                                        <p class="section-text italic">University of Limerick, Ireland</p>
                                    </div>
                                </div>
                                <hr class="education-divider">
                                <div class="content-right">
                                    <div class="lang lang-en">
                                        <p class="section-text strong">&#8226; Máster of Science (M.Sc.) in Management of Information Systems</p>
                                        <p class="section-text italic">Trinity College Dublin, Irlanda</p>
                                    </div>
                                    <div class="lang lang-es">
                                        <p class="section-text strong">&#8226; Máster of Science (M.Sc.) in Management of Information Systems</p>
                                        <p class="section-text italic">Trinity College Dublin, Irlanda</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <div class="wrapper divider-wrapper evens">
            </div>
            <section id="experience">
                <div class="wrapper">
                    <div class="content-box">
                        <div class="content-inner">
                            <div class="lang lang-en">
                                <h3 class="section-heading">Experience</h3>
                                <p class="section-text">Masters in Management of Information Systems</p>
                                <p class="section-text">Trinity College Dublin, Ireland</p>
                            </div>
                            <div class="lang lang-es">
                                <h3 class="section-heading">Experiencia</h3>
                                <p class="section-text">Masters in Management of Information Systems</p>
                                <p class="section-text">Trinity College Dublin, Ireland</p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <div class="wrapper divider-wrapper odds">
            </div>
            <section id="contact" class="evens">
                <div class="wrapper">
                    <div class="content-box">
                        <div class="content-inner">
                            <div class="lang lang-en">
                                <h3 class="section-heading">Contact Me</h3>
                                <p class="content-text">
                                    <ul class="contact-list">
                                        <li class="section-text"><i class="material-icons">place</i> Málaga, Spain</li>
                                        <li class="section-text"><a href="mailto: careers@darren.stokes.technology"><i class="material-icons">local_post_office</i> careers@darren.stokes.technology</a></li>
                                        <li class="section-text"><a href="https://www.linkedin.com/in/darren-stokes-12a53a5a/"><i class="fa fa-linkedin-square"></i> LinkedIn Profile</a></li>
                                        <li class="section-text"><a href="https://github.com/darren-stokes"><i class="fa fa-github"></i> Github</a></li>
                                    </ul>
                                </p>
                            </div>
                            <div class="lang lang-es">
                                <h3 class="section-heading">Contactar Conmigo</h3>
                                <p class="content-text">
                                    <ul class="contact-list">
                                        <li class="section-text"><i class="material-icons">place</i> Málaga, España</li>
                                        <li class="section-text"><a href="mailto: careers@darren.stokes.technology"><i class="material-icons">local_post_office</i> careers@darren.stokes.technology</a></li>
                                        <li class="section-text"><a href="https://www.linkedin.com/in/darren-stokes-12a53a5a/"><i class="fa fa-linkedin-square"></i> LinkedIn Profile</a></li>
                                        <li class="section-text"><a href="https://github.com/darren-stokes"><i class="fa fa-github"></i> Github</a></li>
                                    </ul>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
        <?php
            include('footer.php');
            echo "\n";
            include('cookie_notice.html')
        ?>
    </body>
</html>