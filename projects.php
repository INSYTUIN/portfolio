<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Adrian | Projects</title>

    <!-- Bootstrap 5.3.8 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">

    <!-- My custom CSS -->
    <link rel="stylesheet" href="style.css">

    <style>
        /* Small page-specific styles kept simple on purpose. */
        .projects-hero {
            min-height: 72vh;
            background-image: url("https://images.unsplash.com/photo-1518770660439-4636190af475?auto=format&fit=crop&w=2200&q=85");
            background-size: cover;
            background-position: center;
            position: relative;
            display: flex;
            align-items: center;
            color: #FFFFFF;
        }

        .projects-hero h1 {
            font-size: 40px;
            line-height: 1.2;
            max-width: 760px;
        }

        .project-detail {
            padding: 110px 0;
            background: #FFFFFF;
        }

        .project-detail:nth-of-type(even) {
            background: #F4F4F4;
        }

        .project-number {
            color: #3E6AE1;
            font-size: 14px;
            font-weight: 500;
            letter-spacing: 1.5px;
        }

        .project-detail h2 {
            font-size: 36px;
            line-height: 1.2;
            margin-bottom: 18px;
        }

        .project-detail h3 {
            font-size: 18px;
            margin-bottom: 10px;
        }

        .detail-text {
            color: #393C41;
            font-size: 15px;
            line-height: 1.7;
        }

        .detail-image {
            min-height: 430px;
            background-size: cover;
            background-position: center;
            border-radius: 12px;
        }

        .library-image {
            background-image: url("https://images.unsplash.com/photo-1507842217343-583bb7270b66?auto=format&fit=crop&w=1400&q=85");
        }

        .social-image {
            background-image: url("https://images.unsplash.com/photo-1555066931-4365d14bab8c?auto=format&fit=crop&w=1400&q=85");
        }

        .portfolio-image {
            background-image: url("https://images.unsplash.com/photo-1497366754035-f200968a6e72?auto=format&fit=crop&w=1400&q=85");
        }

        .detail-list {
            margin: 0;
            padding-left: 20px;
            color: #393C41;
            font-size: 15px;
            line-height: 1.8;
        }

        .tech-list {
            display: flex;
            flex-wrap: wrap;
            gap: 8px;
        }

        .tech-item {
            display: inline-block;
            padding: 8px 12px;
            background: #FFFFFF;
            border: 1px solid #D0D1D2;
            border-radius: 4px;
            color: #393C41;
            font-size: 13px;
        }

        .section-dark .tech-item {
            background: transparent;
            border-color: rgba(255, 255, 255, 0.22);
            color: #FFFFFF;
        }

        .project-back {
            color: #5C5E62;
            text-decoration: none;
            font-size: 14px;
        }

        .project-back:hover {
            color: #171A20;
            text-decoration: underline;
        }

        .summary-box {
            padding: 28px;
            background: #F4F4F4;
            border-radius: 4px;
        }

        .summary-box p {
            margin-bottom: 6px;
            color: #5C5E62;
            font-size: 14px;
        }

        .summary-box strong {
            color: #171A20;
            font-weight: 500;
        }

        @media (max-width: 767.98px) {
            .projects-hero h1 {
                font-size: 29px;
            }

            .project-detail {
                padding: 80px 0;
            }

            .project-detail h2 {
                font-size: 30px;
            }

            .detail-image {
                min-height: 280px;
            }
        }
    </style>
</head>
<body>

    <!-- Navigation -->
    <nav id="mainNav" class="navbar navbar-expand-lg fixed-top portfolio-nav scrolled">
        <div class="container">
            <a class="navbar-brand" href="index.php">ADRIAN</a>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarMenu"
                aria-controls="navbarMenu" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarMenu">
                <ul class="navbar-nav mx-auto mb-2 mb-lg-0">
                    <li class="nav-item"><a class="nav-link" href="index.php#home">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="index.php#about">About</a></li>
                    <li class="nav-item"><a class="nav-link" href="projects.php#projects">Projects</a></li>
                    <li class="nav-item"><a class="nav-link" href="index.php#skills">Skills</a></li>
                    <li class="nav-item"><a class="nav-link" href="index.php#contact">Contact</a></li>
                </ul>

                <a class="nav-link contact-nav" href="index.php#contact">Let's talk</a>
            </div>
        </div>
    </nav>

    <!-- Projects Hero -->
    <header class="projects-hero">
        <div class="hero-overlay"></div>
        <div class="container position-relative" style="z-index: 2;">
            <p class="small-label">MY PROJECTS</p>
            <h1>Projects built to solve problems, practice skills, and turn ideas into working systems.</h1>
            <p class="hero-text mt-4 mb-0">
                This page gives more context about what each project does, why it was created, and the technologies I used.
            </p>
        </div>
    </header>

    <!-- Project 1 -->
    <section id="library" class="project-detail">
        <div class="container">
            <div class="row align-items-center g-5">
                <div class="col-lg-6">
                    <div class="detail-image library-image"></div>
                </div>

                <div class="col-lg-6">
                    <p class="project-number">01 / RESEARCH + SOFTWARE</p>
                    <h2>Library Seat Management System</h2>
                    <p class="detail-text">
                        A proposed automated system for managing library seats using student ID scanning. The goal is to make seat assignment more organized and give library staff a clearer view of which seats are occupied or available.
                    </p>

                    <div class="summary-box mt-4">
                        <p><strong>Problem:</strong> Seats can become overcrowded, randomly occupied, or blocked by personal belongings.</p>
                        <p><strong>Solution:</strong> Scan a student ID and assign an available seat while recording the seat status.</p>
                        <p class="mb-0"><strong>Main goal:</strong> Improve seat utilization and real-time monitoring.</p>
                    </div>

                    <div class="row g-4 mt-2">
                        <div class="col-md-6">
                            <h3>Key features</h3>
                            <ul class="detail-list">
                                <li>Student ID-based check-in</li>
                                <li>Automatic seat assignment</li>
                                <li>Occupied and available seat monitoring</li>
                                <li>Seat release/check-out process</li>
                            </ul>
                        </div>

                        <div class="col-md-6">
                            <h3>Tools</h3>
                            <div class="tech-list">
                                <span class="tech-item">Java</span>
                                <span class="tech-item">JFrame</span>
                                <span class="tech-item">Database</span>
                                <span class="tech-item">Student ID</span>
                            </div>
                        </div>
                    </div>

                    <p class="detail-text mt-4 mb-0">
                        <strong>My focus:</strong> Combining research, system design, and programming to solve a practical problem in a school library.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Project 2 -->
    <section id="social-one" class="project-detail">
        <div class="container">
            <div class="row align-items-center g-5">
                <div class="col-lg-6 order-lg-2">
                    <div class="detail-image social-image"></div>
                </div>

                <div class="col-lg-6 order-lg-1">
                    <p class="project-number">02 / MOBILE APP</p>
                    <h2>Social One</h2>
                    <p class="detail-text">
                        A mobile browser application focused on handling user information and syncing app data with Firebase Firestore. The project gave me practice with authentication, cloud data, and organizing information inside an Android application.
                    </p>

                    <div class="summary-box mt-4">
                        <p><strong>Purpose:</strong> Connect the mobile app to a cloud database so user-related information can be stored and synchronized.</p>
                        <p><strong>Cloud service:</strong> Firebase Authentication and Cloud Firestore.</p>
                        <p class="mb-0"><strong>Learning focus:</strong> Working with app data, callbacks, and database updates.</p>
                    </div>

                    <div class="row g-4 mt-2">
                        <div class="col-md-6">
                            <h3>Key parts</h3>
                            <ul class="detail-list">
                                <li>User authentication</li>
                                <li>Cloud Firestore collection</li>
                                <li>Data synchronization</li>
                                <li>Loading and error handling</li>
                            </ul>
                        </div>

                        <div class="col-md-6">
                            <h3>Tools</h3>
                            <div class="tech-list">
                                <span class="tech-item">Android Studio</span>
                                <span class="tech-item">Java</span>
                                <span class="tech-item">FirebaseAuth</span>
                                <span class="tech-item">Firestore</span>
                            </div>
                        </div>
                    </div>

                    <p class="detail-text mt-4 mb-0">
                        <strong>My focus:</strong> Understanding how a mobile interface communicates with a cloud database and keeps user data organized.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Project 3 -->
    <section id="portfolio" class="project-detail">
        <div class="container">
            <div class="row align-items-center g-5">
                <div class="col-lg-6">
                    <div class="detail-image portfolio-image"></div>
                </div>

                <div class="col-lg-6">
                    <p class="project-number">03 / WEB DEVELOPMENT</p>
                    <h2>Personal Portfolio</h2>
                    <p class="detail-text">
                        This portfolio website is a simple responsive website that presents my background, skills, projects, and contact information. It was also built as a way to practice clean web layouts and responsive design.
                    </p>

                    <div class="summary-box mt-4">
                        <p><strong>Purpose:</strong> Create a clean personal website that can be used to present my work.</p>
                        <p><strong>Design:</strong> Minimal layout inspired by the provided Tesla design system.</p>
                        <p class="mb-0"><strong>Approach:</strong> Use Bootstrap for the layout and basic custom CSS for the visual style.</p>
                    </div>

                    <div class="row g-4 mt-2">
                        <div class="col-md-6">
                            <h3>Key features</h3>
                            <ul class="detail-list">
                                <li>Responsive navigation</li>
                                <li>Hero introduction</li>
                                <li>Project showcase</li>
                                <li>Contact section</li>
                            </ul>
                        </div>

                        <div class="col-md-6">
                            <h3>Tools</h3>
                            <div class="tech-list">
                                <span class="tech-item">HTML</span>
                                <span class="tech-item">CSS</span>
                                <span class="tech-item">JavaScript</span>
                                <span class="tech-item">Bootstrap 5</span>
                            </div>
                        </div>
                    </div>

                    <p class="detail-text mt-4 mb-0">
                        <strong>My focus:</strong> Keeping the code understandable while making the final website look clean, modern, and responsive.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Bottom Bar -->
    <div class="question-bar">
        <div class="container d-flex flex-wrap align-items-center justify-content-between gap-3">
            <span class="question-text">Want to know more? <strong>Let's talk about a project.</strong></span>
            <a href="index.php#contact" class="question-button">Contact me →</a>
        </div>
    </div>

    <!-- Footer -->
    <footer class="footer-section">
        <div class="container d-flex flex-wrap justify-content-between gap-2">
            <span>© <span id="currentYear"></span> Adrian</span>
            <span>Built with HTML, CSS, JavaScript & Bootstrap 5</span>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwxHj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
    <script>
        document.getElementById("currentYear").textContent = new Date().getFullYear();
    </script>
</body>
</html>
