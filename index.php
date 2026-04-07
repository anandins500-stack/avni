<?php
$pageTitle = "Avni Gupta - Web Developer Portfolio";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $pageTitle; ?></title>
    <link rel="stylesheet" href="style.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
</head>
<body>
    <!-- Navigation -->
    <nav class="navbar">
        <div class="nav-container">
            <div class="nav-logo">
                <a href="#home">Avni Gupta</a>
            </div>
            <ul class="nav-menu">
                <li><a href="#home" class="nav-link">Home</a></li>
                <li><a href="#about" class="nav-link">About</a></li>
                <li><a href="#skills" class="nav-link">Skills</a></li>
                <li><a href="#projects" class="nav-link">Projects</a></li>
                <li><a href="#education" class="nav-link">Education</a></li>
                <li><a href="#contact" class="nav-link">Contact</a></li>
            </ul>
            <div class="hamburger">
                <span></span>
                <span></span>
                <span></span>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <section id="home" class="hero">
        <div class="hero-container">
            <div class="hero-content">
                <h1 class="hero-title">Hi, I'm <span class="highlight">Avni Gupta</span></h1>
                <h2 class="hero-subtitle">Aspiring Web Developer</h2>
                <p class="hero-description">
                    Motivated Computer Science student passionate about creating beautiful and functional websites.
                </p>
                <div class="hero-buttons">
                    <a href="#projects" class="btn btn-primary">View Projects</a>
                    <a href="#contact" class="btn btn-secondary">Contact Me</a>
                </div>
            </div>
            <div class="hero-image">
                <div class="profile-pic"></div>
            </div>
        </div>
    </section>

    <!-- About Section -->
    <section id="about" class="about">
        <div class="container">
            <h2 class="section-title">About Me</h2>
            <div class="about-content">
                <div class="about-text">
                    <p>
                        I am a motivated Web Developer and Computer Science student with basic knowledge of web development and database management. 
                        I am currently learning HTML, CSS and programming fundamentals. I like to create simple websites and complete practical assignments 
                        to improve my technical skills. My aim is to become a skilled web developer and continuously improve my knowledge in technology.
                    </p>
                    
                    <div class="career-objective">
                        <h3><i class="fas fa-bullseye"></i> Career Objective</h3>
                        <p>To start my career in the field of web development where I can apply my academic knowledge, improve my technical skills and gain practical experience while contributing to organizational growth.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Skills Section -->
    <section id="skills" class="skills">
        <div class="container">
            <h2 class="section-title">Skills</h2>
            <div class="skills-grid">
                <div class="skill-card">
                    <i class="fab fa-html5"></i>
                    <h3>HTML5</h3>
                </div>
                <div class="skill-card">
                    <i class="fab fa-css3-alt"></i>
                    <h3>CSS3</h3>
                </div>
                <div class="skill-card">
                    <i class="fas fa-paint-brush"></i>
                    <h3>Basic Web Designing</h3>
                </div>
                <div class="skill-card">
                    <i class="fas fa-database"></i>
                    <h3>DBMS Fundamentals</h3>
                </div>
                <div class="skill-card">
                    <i class="fas fa-sitemap"></i>
                    <h3>Data Structures Basics</h3>
                </div>
                <div class="skill-card">
                    <i class="fab fa-google"></i>
                    <h3>Google Forms</h3>
                </div>
                <div class="skill-card">
                    <i class="fas fa-code"></i>
                    <h3>Basic C Programming</h3>
                </div>
                <div class="skill-card">
                    <i class="fas fa-lightbulb"></i>
                    <h3>Problem Solving</h3>
                </div>
                <div class="skill-card">
                    <i class="fas fa-clock"></i>
                    <h3>Time Management</h3>
                </div>
            </div>
        </div>
    </section>

    <!-- Projects Section -->
    <section id="projects" class="projects">
        <div class="container">
            <h2 class="section-title">Academic Projects</h2>
            <div class="projects-grid">
                <div class="project-card">
                    <div class="project-icon">
                        <i class="fab fa-google"></i>
                    </div>
                    <h3>Google Form Development</h3>
                    <p>Created Google Forms for academic data collection and surveys. Learned how to design forms, manage responses and organize collected data.</p>
                </div>
                <div class="project-card">
                    <div class="project-icon">
                        <i class="fas fa-database"></i>
                    </div>
                    <h3>Database Management System (DBMS) Assignments</h3>
                    <p>Completed assignments related to normalization (1NF, 2NF, 3NF), ER diagrams and basic SQL queries. Learned how databases are structured and managed.</p>
                </div>
                <div class="project-card">
                    <div class="project-icon">
                        <i class="fas fa-sitemap"></i>
                    </div>
                    <h3>Data Structures (DSA) Assignments</h3>
                    <p>Implemented basic data structure concepts like arrays, searching and sorting algorithms through C programming assignments.</p>
                </div>
                <div class="project-card">
                    <div class="project-icon">
                        <i class="fab fa-html5"></i>
                    </div>
                    <h3>Web Technology Projects</h3>
                    <p>Developed basic webpages using HTML and CSS. Created simple layouts, forms and tables as part of practical assignments.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Education Section -->
    <section id="education" class="education">
        <div class="container">
            <h2 class="section-title">Education & Strengths</h2>
            <div class="education-content">
                <div class="education-card">
                    <h3><i class="fas fa-graduation-cap"></i> Education</h3>
                    <div class="edu-item">
                        <h4>Diploma / Bachelor in Computer Science</h4>
                        <p><strong>KCC ILHE</strong> | 2025-28</p>
                    </div>
                </div>
                <div class="strengths-card">
                    <h3><i class="fas fa-star"></i> Strengths</h3>
                    <ul>
                        <li><i class="fas fa-check"></i> Quick learner</li>
                        <li><i class="fas fa-check"></i> Hardworking</li>
                        <li><i class="fas fa-check"></i> Positive attitude</li>
                        <li><i class="fas fa-check"></i> Dedicated towards learning</li>
                        <li><i class="fas fa-check"></i> Good logical thinking</li>
                    </ul>
                </div>
                <div class="achievements-card">
                    <h3><i class="fas fa-trophy"></i> Achievements</h3>
                    <ul>
                        <li>Successfully completed web technology practical assignments</li>
                        <li>Developed basic websites using HTML and CSS</li>
                        <li>Improved database knowledge through DBMS assignments</li>
                        <li>Strengthened programming basics through DSA practice</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section id="contact" class="contact">
        <div class="container">
            <h2 class="section-title">Contact Me</h2>
            <div class="contact-content">
                <div class="contact-info">
                    <div class="contact-item">
                        <i class="fas fa-envelope"></i>
                        <h3>Email</h3>
                        <p>avni1610jgupta@gmail.com</p>
                    </div>
                    <div class="contact-item">
                        <i class="fas fa-phone"></i>
                        <h3>Phone</h3>
                        <p>9971445137</p>
                    </div>
                    <div class="contact-item">
                        <i class="fas fa-map-marker-alt"></i>
                        <h3>Location</h3>
                        <p>Delhi</p>
                    </div>
                    <div class="contact-item">
                        <i class="fas fa-user"></i>
                        <h3>Father Name</h3>
                        <p>Yoginder Kumar</p>
                    </div>
                </div>
                <form class="contact-form" id="contactForm" action="contact.php" method="POST">
                    <div class="form-group">
                        <input type="text" name="name" placeholder="Your Name" required>
                    </div>
                    <div class="form-group">
                        <input type="email" name="email" placeholder="Your Email" required>
                    </div>
                    <div class="form-group">
                        <input type="text" name="subject" placeholder="Subject" required>
                    </div>
                    <div class="form-group">
                        <textarea name="message" placeholder="Your Message" rows="5" required></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">Send Message</button>
                </form>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer>
        <div class="container">
            <p>&copy; 2024 Avni Gupta. All rights reserved. | Made with ❤️ using HTML, CSS, JS & PHP</p>
        </div>
    </footer>

    <script src="script.js"></script>
</body>
</html>