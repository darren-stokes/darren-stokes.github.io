<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- Tell Dark Reader that it doesn't need to apply as we have a dark mode defined -->
        <meta name="darkreader-lock">
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
                        <source src="assets/stock_coding_video_540.mp4" type="video/mp4">
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
                                <p class="section-text">Mi carrera en IT ha abarcado varios roles, comenzando con un puesto de ingeniero de sistemas en Susquehanna International Group en Dublín, donde me centré en implementaciones de servidores y administración de configuración.</p>
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
            <section id="technical_skills" class="evens">
                <div class="wrapper">
                    <div class="content-box">
                        <div class="content-inner">
                            <div class="lang lang-en">
                                <h3 class="section-heading">Tech Skills</h3>
                            </div>
                            <div class="lang lang-es">
                                <h3 class="section-heading">Habilidades Tecnológicas</h3>
                            </div>
                            <div class="conveyor-belt">
                                <div class="icon-container">
                                    <img src="assets/terraform.png" class="skill-icon" alt="Terraform">
                                    <img src="assets/prometheus.png" class="skill-icon" alt="Prometheus">
                                    <img src="assets/grafana.png" class="skill-icon" alt="Grafana">
                                    <img src="assets/python.png" class="skill-icon" alt="Python">
                                    <img src="assets/jenkins.png" class="skill-icon" alt="Jenkins">
                                    <img src="assets/elastic_stack.png" class="skill-icon" alt="ElasticStack">
                                    <img src="assets/debian.png" class="skill-icon" alt="Debian">
                                    <!-- Repeat-->
                                    <img src="assets/terraform.png" class="skill-icon" alt="Terraform">
                                    <img src="assets/prometheus.png" class="skill-icon" alt="Prometheus">
                                    <img src="assets/grafana.png" class="skill-icon" alt="Grafana">
                                    <img src="assets/python.png" class="skill-icon" alt="Python">
                                    <img src="assets/jenkins.png" class="skill-icon" alt="Jenkins">
                                    <img src="assets/elastic_stack.png" class="skill-icon" alt="ElasticStack">
                                    <img src="assets/debian.png" class="skill-icon" alt="Debian">

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <div class="wrapper divider-wrapper evens">
            </div>
            <section id="education" class="odds">
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
                                        <p class="section-text strong"><i class="fa fa-graduation-cap"></i> Bachelor of Science (B.Sc.) in Applied Computing and Network Technologies</p>
                                        <p class="section-text italic"> - University of Limerick, Ireland</p>
                                    </div>
                                    <div class="lang lang-es">
                                        <p class="section-text strong"><i class="fa fa-graduation-cap"></i> Bachelor of Science (B.Sc.) in Applied Computing and Network Technologies</p>
                                        <p class="section-text italic"> - University of Limerick, Irlanda</p>
                                    </div>
                                </div>
                                <hr class="education-divider">
                                <div class="content-right">
                                    <div class="lang lang-en">
                                        <p class="section-text strong"><i class="fa fa-graduation-cap"></i> Master of Science (M.Sc.) in Management of Information Systems</p>
                                        <p class="section-text italic"> - Trinity College Dublin, Ireland</p>
                                    </div>
                                    <div class="lang lang-es">
                                        <p class="section-text strong"><i class="fa fa-graduation-cap"></i> Máster of Science (M.Sc.) in Management of Information Systems</p>
                                        <p class="section-text italic"> - Trinity College Dublin, Irlanda</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <div class="wrapper divider-wrapper odds">
            </div>
            <section id="experience" class="evens">
                <div class="wrapper">
                    <div class="content-box">
                        <div class="content-inner">
                            <div class="lang lang-en">
                                <h3 class="section-heading">Experience</h3>
                                    <!-- Cyferd -->
                                    <p class="section-text strong">DevOps Engineer - Cyferd<span class="experience-dates en"> | May 2023 - February 2024</span></p>
                                    <p class="section-text italic">Málaga, Spain</p>
                                    <p class="section-text">&#8226; I leveraged my DevOps expertise to develop Python-based custom metric exporters, deploy secure AWS environments, and overhaul Terraform code for improved reusability. My efforts to streamline CI/CD pipelines, enhance monitoring through Prometheus, and establish a centralized Jenkins shared library markedly boosted software delivery efficiency and operational performance. </p>
                                    <hr class="divider divider-exp">
                                    <!-- Rentalmatics -->
                                    <p class="section-text strong">DevOps Engineer - Rentalmatics<span class="experience-dates en"> | February 2020 - May 2023</span></p>
                                    <p class="section-text italic">Dublin, Ireland</p>
                                    <p class="section-text">&#8226; My position as Senior DevOps Engineer saw me enhancing deployment efficiency through CI/CD pipelines and automation tools like Jenkins and Terraform. I played a key role in optimizing GCP costs, implementing dynamic monitoring solutions, and spearheading the integration of Prometheus with Grafana, significantly improving system reliability and operational agility.</p>
                                    <hr class="divider divider-exp">
                                    <!-- Securelinx-->
                                    <p class="section-text strong">Linux Engineer - SecureLinx<span class="experience-dates en"> | October 2017 - January 2020</span></p>
                                    <p class="section-text italic">Dublin, Ireland</p>
                                    <p class="section-text">&#8226; I was instrumental in providing top-tier client support, overseeing monthly patching activities, and leading significant projects, including a web CMS upgrade for an insurer. My role emphasized proactive monitoring, system performance enhancements, and managing high-availability clusters, showcasing my deep understanding of Apache, Tomcat, and Linux environments.</p>
                                    <hr class="divider divider-exp">
                                    <!-- Susquehanna -->
                                    <p class="section-text strong">Systems Engineer - Susquehanna<span class="experience-dates en"> | June 2012 - October 2017</span></p>
                                    <p class="section-text italic">Dublin, Ireland</p>
                                    <p class="section-text">&#8226; Starting my career at Susquehanna International Group in Dublin, I initially served as an Infrastructure Engineer Intern, designing and implementing an internal website for server deployment management. Progressing to a Systems Engineer, I specialized in server deployments, streamlined processes with SCCM, and mastered Ansible for efficient server configuration, playing a crucial mentoring role for new team members.</p>
                            </div>
                            <div class="lang lang-es">
                                <h3 class="section-heading">Experiencia</h3>
                                    <!-- Cyferd -->
                                    <p class="section-text strong">Ingeniero DevOps - Cyferd<span class="experience-dates es"> | Mayo 2023 - Febrero 2024</span></p>
                                    <p class="section-text italic">Málaga, España</p>
                                    <p class="section-text">&#8226; Aproveché mi experiencia en DevOps para desarrollar exportadores de métricas personalizadas basados en Python, implementar entornos seguros de AWS y revisar el código de Terraform para mejorar la reutilización. Mis esfuerzos por optimizar las canalizaciones de CI/CD, mejorar la supervisión a través de Prometheus y establecer una biblioteca compartida centralizada de Jenkins aumentaron notablemente la eficiencia de la entrega de software y el rendimiento operativo.</p>
                                    <hr class="divider divider-exp">
                                    <!-- Rentalmatics -->
                                    <p class="section-text strong">Ingeniero DevOps - Rentalmatics<span class="experience-dates es"> | Febrero 2020 - Mayo 2023</span></p>
                                    <p class="section-text italic">Dublin, Irlanda</p>
                                    <p class="section-text">&#8226; Mi puesto como ingeniero sénior de DevOps me permitió mejorar la eficiencia de la implementación a través de canalizaciones de CI/CD y herramientas de automatización como Jenkins y Terraform. Desempeñé un papel clave en la optimización de los costos de GCP, la implementación de soluciones de monitoreo dinámico y la dirección de la integración de Prometheus con Grafana, mejorando significativamente la confiabilidad del sistema y la agilidad operativa.</p>
                                    <hr class="divider divider-exp">
                                    <!-- Securelinx-->
                                    <p class="section-text strong">Ingeniero Linux - SecureLinx<span class="experience-dates es"> | Octubre 2017 - Enero 2020</span></p>
                                    <p class="section-text italic">Dublin, Irlanda</p>
                                    <p class="section-text">&#8226; Desempeñé un papel decisivo en la prestación de asistencia al cliente de primer nivel, la supervisión de las actividades mensuales de aplicación de parches y la dirección de proyectos importantes, incluida una actualización de CMS web para una aseguradora. Mi función se centró en la supervisión proactiva, las mejoras en el rendimiento del sistema y la gestión de clústeres de alta disponibilidad, lo que demuestra mi profundo conocimiento de los entornos Apache, Tomcat y Linux.</p>
                                    <hr class="divider divider-exp">
                                    <!-- Susquehanna -->
                                    <p class="section-text strong">Ingeniero de Sistemas - Susquehanna<span class="experience-dates es"> | Junio 2012 - Octobre 2017</span></p>
                                    <p class="section-text italic">Dublin, Irlanda</p>
                                    <p class="section-text">&#8226; Al comenzar mi carrera en Susquehanna International Group en Dublín, inicialmente me desempeñé como pasante de ingeniería de infraestructura, diseñando e implementando un sitio web interno para la administración de implementación de servidores. Al progresar a ingeniero de sistemas, me especialicé en implementaciones de servidores, agilicé los procesos con SCCM y dominé Ansible para una configuración eficiente del servidor, desempeñando un papel crucial de tutoría para los nuevos miembros del equipo.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <div class="wrapper divider-wrapper evens">
            </div>
            <section id="contact" class="odds">
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
                                <h3 class="section-heading">Contacta Conmigo</h3>
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