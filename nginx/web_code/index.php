<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Darren Stokes | DevOps Engineer</title>
        <?php
            include('styles_and_scripts.html');
        ?>
    </head>
    <body>
        <?php
            include('banner.php');
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
                            <p class="salutation">Hola, soy</p>
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
                                <p class="section-text">I'm an experienced IT professional with a solid background in Linux engineering, supported by a BSc in Applied Computing from the University of Limerick and an MSc in Management of Information Systems from Trinity College Dublin. My career trajectory showcases a commitment to technological excellence and strategic insight across various domains.</p>
                                <p class="section-text">Skilled in a broad spectrum of technologies, I have developed proficiency in AWS, Kubernetes, ArgoCD, Helm, Elastic Stack, Python, Docker, Jenkins, Git, Grafana, Prometheus, Terraform, and GCP. This technical journey is augmented by my experiences in the financial sector and customer-facing roles, demonstrating my capability to excel in demanding situations and surpass expectations.</p>
                                <p class="section-text">Currently, I am focusing on deepening my understanding of Python, drawn to its adaptability and innovative applications. My expertise also covers advanced data analysis and visualization through the Elastic Stack, aiming to enhance organizational insights.</p>
                                <p class="section-text">I am eager to leverage my specialized skill set in an innovative organization, driving transformative projects forward and contributing to sustained business growth. With a proven track record in navigating complex IT challenges and a deep passion for technology, I am well-prepared to deliver significant contributions and results.</p>
                            </div>
                            <div class="lang lang-es">
                                <h3 class="section-heading">Sobre Mi</h3>
                                <p class="section-text">Soy un profesional de TI con experiencia y una sólida formación en ingeniería Linux, respaldado por un grado en Informatica Aplicada de la Universidad de Limerick y un master en Gestión de Sistemas de Información en Trinity College Dublin. Mi trayectoria profesional demuestra un compromiso con la excelencia tecnológica y la perspicacia estratégica en diversos ámbitos.</p>
                                <p class="section-text">Experto en un amplio espectro de tecnologías, he desarrollado competencias en AWS, Kubernetes, ArgoCD, Helm, Elastic Stack, Python, Docker, Jenkins, Git, Grafana, Prometheus, Terraform y GCP. Este viaje técnico se complementa con mi experiencia en el sector financiero y roles orientados al cliente, demostrando mi capacidad para sobresalir en situaciones exigentes y superar expectativas.</p>
                                <p class="section-text">Actualmente, estoy concentrándome en profundizar mi conocemiento de Python, atraído por su adaptabilidad y aplicaciones innovadoras. Mi experiencia también abarca el análisis y la visualización avanzada de datos a través de Elastic Stack, con el objetivo de mejorar las percepciones organizativas.</p>
                                <p class="section-text">Estoy entusiasmado por aprovechar mi conjunto de habilidades completo en una empresa progresiva, contribuyendo a proyectos transformadores y promoviendo el crecimiento empresarial. Con una rica experiencia y pasión por la tecnología, estoy preparado para enfrentar desafíos complejos y entregar resultados significativos.</p>
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
                                    <img src="assets/terraform.png" class="skill-icon" alt="Terraform" loading="lazy">
                                    <img src="assets/prometheus.png" class="skill-icon" alt="Prometheus" loading="lazy">
                                    <img src="assets/grafana.png" class="skill-icon" alt="Grafana" loading="lazy">
                                    <img src="assets/python.png" class="skill-icon" alt="Python" loading="lazy">
                                    <img src="assets/jenkins.png" class="skill-icon" alt="Jenkins" loading="lazy">
                                    <img src="assets/elastic_stack.png" class="skill-icon" alt="ElasticStack" loading="lazy">
                                    <img src="assets/debian.png" class="skill-icon" alt="Debian" loading="lazy">
                                    <!-- Repeat-->
                                    <img src="assets/terraform.png" class="skill-icon" alt="Terraform" loading="lazy">
                                    <img src="assets/prometheus.png" class="skill-icon" alt="Prometheus" loading="lazy">
                                    <img src="assets/grafana.png" class="skill-icon" alt="Grafana" loading="lazy">
                                    <img src="assets/python.png" class="skill-icon" alt="Python" loading="lazy">
                                    <img src="assets/jenkins.png" class="skill-icon" alt="Jenkins" loading="lazy">
                                    <img src="assets/elastic_stack.png" class="skill-icon" alt="ElasticStack" loading="lazy">
                                    <img src="assets/debian.png" class="skill-icon" alt="Debian" loading="lazy">

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
                                        <p class="section-text strong"><i class="fa fa-graduation-cap"></i> Grado en Ciencia (B.Sc.) Informática Aplicada y Tecnologías de Redes</p>
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
                                        <p class="section-text strong"><i class="fa fa-graduation-cap"></i> Master en Ciencia (M.Sc.) de Gestión de Sistemas de Información</p>
                                        <p class="section-text italic"> - Trinity College Dublín, Irlanda</p>
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
                                    <p class="section-text">&#8226; Utilicé mi experiencia en DevOps para desarrollar exportadores de métricas personalizados basados en Python, desplegar entornos seguros de AWS y revisar el código de Terraform para mejorar su reutilización. Mis esfuerzos por optimizar pipelines de CI/CD, mejorar el monitoreo a través de Prometheus y establecer una biblioteca compartida centralizada de Jenkins, incrementaron notablemente la eficiencia en la entrega de software y el rendimiento operativo.</p>
                                    <hr class="divider divider-exp">
                                    <!-- Rentalmatics -->
                                    <p class="section-text strong">Ingeniero DevOps - Rentalmatics<span class="experience-dates es"> | Febrero 2020 - Mayo 2023</span></p>
                                    <p class="section-text italic">Dublín, Irlanda</p>
                                    <p class="section-text">&#8226; Mi posición como Ingeniero Senior de DevOps me llevó a mejorar la eficiencia de despliegue a través de pipelines de CI/CD y herramientas de automatización como Jenkins y Terraform. Desempeñé un papel clave en la optimización de costes en GCP, implementando soluciones de monitoreo dinámico y liderando la integración de Prometheus con Grafana, mejorando significativamente la fiabilidad del sistema y la agilidad operacional.</p>
                                    <hr class="divider divider-exp">
                                    <!-- Securelinx-->
                                    <p class="section-text strong">Ingeniero Linux - SecureLinx<span class="experience-dates es"> | Octubre 2017 - Enero 2020</span></p>
                                    <p class="section-text italic">Dublín, Irlanda</p>
                                    <p class="section-text">&#8226; Tuve un rol fundamental a la hora de proporcionar soporte de primer nivel a los clientes, supervisar las actividades de parcheo mensuales y liderar proyectos significativos, incluida una actualización del CMS web para una aseguradora. Mi labor enfatizó el monitoreo proactivo, las mejoras en el rendimiento del sistema y la gestión de grupos de alta disponibilidad, demostrando mi profundo entendimiento de los entornos Apache, Tomcat y Linux.</p>
                                    <hr class="divider divider-exp">
                                    <!-- Susquehanna -->
                                    <p class="section-text strong">Ingeniero de Sistemas - Susquehanna<span class="experience-dates es"> | Junio 2012 - Octobre 2017</span></p>
                                    <p class="section-text italic">Dublín, Irlanda</p>
                                    <p class="section-text">&#8226; Iniciando mi carrera en Susquehanna International Group en Dublín, comencé como Ingeniero becario de Infraestructura, diseñando e implementando un sitio web interno para la gestión del despliegue de servidores. Ascendí a Ingeniero de Sistemas, me especialicé en despliegues de servidores, optimicé procesos con SCCM y dominé Ansible para una configuración eficiente de servidores, desempeñando un papel de mentoría crucial para los nuevos miembros del equipo.</p>
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