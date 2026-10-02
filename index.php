<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Adrian | Personal Portfolio</title>

    <!-- Bootstrap 5.3.8 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">

    <!-- My custom CSS -->
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <!-- Navigation -->
    <nav id="mainNav" class="navbar navbar-expand-lg fixed-top portfolio-nav">
        <div class="container">
            <a class="navbar-brand" href="#home">ADRIAN</a>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarMenu"
                aria-controls="navbarMenu" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarMenu">
                <ul class="navbar-nav mx-auto mb-2 mb-lg-0">
                    <li class="nav-item"><a class="nav-link" href="#home">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="#about">About</a></li>
                    <li class="nav-item"><a class="nav-link" href="#projects">Projects</a></li>
                    <li class="nav-item"><a class="nav-link" href="#skills">Skills</a></li>
                    <li class="nav-item"><a class="nav-link" href="#contact">Contact</a></li>
                </ul>

                <a class="nav-link contact-nav" href="#contact">Let's talk</a>
            </div>
        </div>
    </nav>

    <!-- Hero -->
    <header id="home" class="hero-section">
        <div class="hero-overlay"></div>
        <div class="container hero-content">
            <p class="small-label">COLLEGE STUDENT • DEVELOPER</p>
            <h1>Building simple ideas<br>into useful digital experiences.</h1>
            <p class="hero-text">
                Hi, I'm Adrian. I enjoy learning technology, building projects, and improving my skills one step at a time.
            </p>
            <div class="hero-buttons">
                <a href="#projects" class="btn btn-primary-custom">View my projects</a>
                <a href="#about" class="btn btn-light-custom">About me</a>
            </div>
        </div>

        <a class="scroll-link" href="#about">Scroll to explore ↓</a>
    </header>

    <!-- About -->
    <section id="about" class="section-light min-vh-100 d-flex align-items-center">
        <div class="container py-5">
            <div class="row align-items-center g-5">
                <div class="col-lg-5">
                    <div class="section-photo about-photo"></div>
                </div>
                <div class="col-lg-7">
                    <p class="section-label">ABOUT ME</p>
                    <h2>I am a college student who likes to build, test, and learn.</h2>
                    <p class="section-text">
                        I am interested in software development, research, and practical technology. I like projects where I can solve a real problem instead of only writing code for practice.
                    </p>
                    <p class="section-text">
                        Right now, I am developing my foundation in web development, Java, databases, and mobile applications. My goal is to create systems that are simple to use and useful to people.
                    </p>
                    <a href="#contact" class="text-link">Get in touch →</a>
                </div>
            </div>
        </div>
    </section>

    <!-- Projects -->
    <section id="projects" class="section-white min-vh-100 d-flex align-items-center">
        <div class="container py-5">
            <div class="section-heading-row mb-4">
                <div>
                    <p class="section-label">SELECTED PROJECTS</p>
                    <h2>Things I have worked on.</h2>
                </div>
                <p class="heading-note">School projects, experiments, and ideas.</p>
            </div>

            <div class="row g-4">
                <div class="col-lg-6">
                    <article class="project-card project-one">
                        <div class="project-content">
                            <span class="project-type">RESEARCH + SOFTWARE</span>
                            <h3>Library Seat Management System</h3>
                            <p>Automated seat assignment and occupancy monitoring using student ID scanning.</p>
                            <a href="projects.php#library" class="project-link">View project →</a>
                        </div>
                    </article>
                </div>

                <div class="col-lg-6">
                    <article class="project-card project-two">
                        <div class="project-content">
                            <span class="project-type">MOBILE APP</span>
                            <h3>Social One</h3>
                            <p>A mobile application concept with Firebase-based user data and synced app information.</p>
                            <a href="projects.php#social-one" class="project-link">View project →</a>
                        </div>
                    </article>
                </div>

                <div class="col-lg-12">
                    <article class="project-card project-three">
                        <div class="project-content project-wide-content">
                            <span class="project-type">WEB DEVELOPMENT</span>
                            <h3>Personal Portfolio</h3>
                            <p>A responsive portfolio built with HTML, PHP, CSS, JavaScript, and Bootstrap 5.</p>
                            <a href="projects.php#portfolio" class="project-link">View project →</a>
                        </div>
                    </article>
                </div>
            </div>
        </div>
    </section>

    <!-- Skills -->
    <section id="skills" class="section-dark min-vh-100 d-flex align-items-center">
        <div class="container py-5">
            <div class="row g-5 align-items-start">
                <div class="col-lg-5">
                    <p class="section-label light-label">SKILLS</p>
                    <h2>What I am learning and using.</h2>
                    <p class="dark-text">
                        I focus on understanding the fundamentals first, then using tools and frameworks to turn those fundamentals into working projects.
                    </p>
                </div>

                <div class="col-lg-7">
                    <div class="skill-list">
                        <div class="skill-row">
                            <span>HTML & CSS</span>
                            <span>01</span>
                        </div>
                        <div class="skill-row">
                            <span>Bootstrap 5</span>
                            <span>02</span>
                        </div>
                        <div class="skill-row">
                            <span>Java</span>
                            <span>03</span>
                        </div>
                        <div class="skill-row">
                            <span>Firebase / Firestore</span>
                            <span>04</span>
                        </div>
                        <div class="skill-row">
                            <span>Git & GitHub</span>
                            <span>05</span>
                        </div>
                        <div class="skill-row">
                            <span>Research & Problem Solving</span>
                            <span>06</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact -->
    <section id="contact" class="contact-section min-vh-100 d-flex align-items-center">
        <div class="container text-center py-5">
            <p class="section-label">CONTACT</p>
            <h2>Let's build something useful.</h2>
            <p class="contact-text mx-auto">
                Have a project idea, school collaboration, or just want to talk about technology? Send me a message.
            </p>

            <a href="mailto:496adrianapilan@gmail.com" class="btn btn-primary-custom">Email me</a>

            <div class="contact-links mt-4">
                <a href="https://github.com/INSYTUIN" target="_blank">GitHub</a>
                <a href="https://www.linkedin.com/in/adrian-apilan-b71516439/" target="_blank">LinkedIn</a>
                <a href="#home">Back to top ↑</a>
            </div>
        </div>
    </section>

    <!-- Bottom Question Bar -->
    <div class="question-bar">
        <div class="container d-flex flex-wrap align-items-center justify-content-between gap-3">
            <span class="question-text">Have a question? <strong>Ask me anything.</strong></span>
            <a href="mailto:496adrianapilan@gmail.com" class="question-button">Send a message →</a>
        </div>
    </div>

    <!-- Footer -->
    <footer class="footer-section">
        <div class="container d-flex flex-wrap justify-content-between gap-2">
            <span>© <span id="currentYear"></span> Adrian</span>
            <span>Built with HTML, CSS, JavaScript & Bootstrap 5</span>
        </div>
    </footer>

    <!-- Bootstrap JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwxHj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>

    <!-- My JavaScript -->
    <script src="script.js"></script>
</body>
</html>
