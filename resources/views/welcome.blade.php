<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Avery Morgan Solicitors</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css" rel="stylesheet">
    <style>
        /* Global Styles */
* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

html, body {
    width: 100%;
    overflow-x: hidden;
}

body {
    font-family: 'Roboto', sans-serif;
    background-color: #1b1b1b;
    color: #f5f5f5;
}

::-webkit-scrollbar {
    width: 12px;
}

::-webkit-scrollbar-track {
    background: #1a1a1a;
}

::-webkit-scrollbar-thumb {
    background: linear-gradient(90deg, #FFD700, #FFA500);
    border-radius: 6px;
    position: relative;
}

::-webkit-scrollbar-thumb::after {
    content: 'Scroll';
    position: absolute;
    top: 50%;
    left: -40px;
    transform: rotate(-90deg);
    transform-origin: left center;
    font-size: 12px;
    color: #000;
    font-weight: bold;
}

/* Container Adjustments */
.container-fluid, .container {
    padding-left: 0;
    padding-right: 0;
}

/* Navbar */
.navbar {
    background-color: transparent;
    padding: 1rem 2rem;
}

.navbar a {
    color: #f5f5f5 !important;
    transition: color 0.3s ease;
}

.navbar a:hover {
    color: #f0a500 !important;
}

.navbar .navbar-brand {
    font-size: 1.8rem;
    font-weight: bold;
    color: #f0a500 !important;
}

/* Hero Section */
.hero-section {
    background: linear-gradient(rgba(0, 0, 0, 0.7), rgba(0, 0, 0, 0.7)), url('/images/shake.jpg') center/cover;
    height: 100vh;
    display: flex;
    align-items: center;
    justify-content: center;
    text-align: center;
    color: #f5f5f5;
}

.hero-section h1 {
    font-size: 4rem;
    color: #f0a500;
    text-shadow: 3px 3px 8px rgba(0, 0, 0, 0.7);
}

.hero-section p {
    font-size: 1.5rem;
    margin-top: 1rem;
}

/* Section Styles */
.about-section, .services-section, .contact-section {
    padding: 60px 20px;
}

.about-section {
    background-color: #2d2d2d;
}

.services-section {
    background-color: #1b1b1b;
}

.services-section h2, .services-section h3 {
    color: #f0a500;
    font-weight: bold;
}

/* Icon Box */
.icon-box {
    display: block;
    padding: 20px;
    margin: 10px 0;
    border: 1px solid #f0a500;
    border-radius: 8px;
    background-color: #2d2d2d;
    transition: transform 0.3s ease;
}

.icon-box:hover {
    transform: translateY(-10px);
}

.icon-box i {
    font-size: 2.5rem;
    color: #f0a500;
    margin-bottom: 15px;
}

.icon-box h4 {
    font-size: 1.2rem;
    font-weight: bold;
    margin-bottom: 10px;
}

/* Button Customization */
.btn-custom {
    background-color: #f0a500;
    color: #1b1b1b;
    padding: 10px 25px;
    border-radius: 5px;
    font-size: 1.1rem;
    transition: background-color 0.3s ease;
}

.btn-custom:hover {
    background-color: #c48800;
}

/* Footer */
.footer {
    background-color: #2d2d2d;
    color: #f5f5f5;
    text-align: center;
    padding: 20px;
    margin-top: 30px;
}

.footer a {
    color: #f0a500;
    text-decoration: none;
}

/* Contact Section */
.contact-section .form-control {
    background-color: #1b1b1b;
    color: #f5f5f5;
    border: 1px solid #f0a500;
}

.contact-section .form-control:focus {
    background-color: #1b1b1b;
    border-color: #c48800;
    box-shadow: none;
}
.contact-section{
    background-color: #2d2d2d;
}

/* Why Choose Us Section */
.why-choose-us-section {
    background-color: #2d2d2d;
    padding: 50px 20px;
    color: #ffffff;
    margin-bottom: 50px;
}

.why-choose-us-section .section-title {
    color: #f0a500;
    font-weight: bold;
    margin-bottom: 30px;
    font-size: 2rem;
    
}

.why-choose-us-section .list-group-item {
    background-color: transparent;
    border: none;
    padding: 20px 10px;
}

.why-choose-us-section .list-group-item:not(:last-child) {
    border-bottom: 1px solid #f0a500;
}

.why-choose-us-section .highlight {
    color: #f0a500;
    font-weight: bold;
    font-size: 1.2rem;
}
.list-group-item p{
    color: #f1f1f1;
}
/* Meet Our Team Section */
.meet-our-team-section {
    background-color: #1a1a1a;
    padding: 50px 20px;
    color: #ffffff;
}

.meet-our-team-section .section-title {
    color: #f0a500;
    font-weight: bold;
    margin-bottom: 20px;
    font-size: 2rem;
}

.team-member {
    margin-bottom: 30px;
    text-align: center;
}

.team-member-img {
    font-size: 100px;
    color: #f0a500;
    background-color: #333333;
    border-radius: 50%;
    width: 150px;
    height: 150px;
    display: flex;
    align-items: center;
    justify-content: center;
    margin: 0 auto 15px;
}

.team-name {
    font-weight: bold;
    color: #f0a500;
    font-size: 1.2rem;
}

.team-position {
    font-size: 1rem;
    color: #d3d3d3;
}

/* Media Queries */
@media (max-width: 768px) {
    .hero-section h1 {
        font-size: 3rem;
    }

    .hero-section p {
        font-size: 1.2rem;
    }

    .icon-box i {
        font-size: 2rem;
    }

    .icon-box h4 {
        font-size: 1.1rem;
    }

    .meet-our-team-section .team-member-img {
        font-size: 80px;
        width: 120px;
        height: 120px;
    }

    .meet-our-team-section .team-name {
        font-size: 1rem;
    }

    .meet-our-team-section .team-position {
        font-size: 0.9rem;
    }
}

@media (max-width: 576px) {
    .hero-section h1 {
        font-size: 2.5rem;
    }

    .hero-section p {
        font-size: 1rem;
    }

    .btn-custom {
        padding: 8px 20px;
        font-size: 1rem;
    }
}

    </style>
    
</head>
<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Avery Morgan Solicitors</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link" href="#about">About Us</a></li>
                    <li class="nav-item"><a class="nav-link" href="#services">Services</a></li>
                    <li class="nav-item"><a class="nav-link" href="#why-choose-us">Why-choose-us</a></li>
                    <li class="nav-item"><a class="nav-link" href="#contact">Contact</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <section class="hero-section" data-aos="fade-up">
        <div class="content">
            <h1>Welcome to Avery Morgan Solicitors</h1>
            <p>Your trusted partner in navigating legal complexities.</p>
            <a href="#services" class="btn btn-custom">Explore Our Services</a>
        </div>
    </section>

    <!-- About Section -->
    <section id="about" class="about-section" data-aos="fade-right">
        <div class="container">
            <h2>About Us</h2>
            <p>At Avery Morgan Solicitors, we pride ourselves on delivering exceptional legal services tailored to meet the needs of our clients...</p>
            <div class="row">
                <div class="col-md-6">
                    <div class="icon-box">
                        <i class="fas fa-users"></i>
                        <div>
                            <h4>Client-Centered Approach</h4>
                            <p>We prioritize clear communication and tailored solutions.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="icon-box">
                        <i class="fas fa-balance-scale"></i>
                        <div>
                            <h4>Expertise You Can Trust</h4>
                            <p>Years of experience delivering successful outcomes.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Services Section -->
    <section id="services" class="services-section" data-aos="fade-left"> 
        <div class="container">
            <h2 class="text-center mb-5">Our Services</h2>
            <div class="row">
                <div class="col-md-4 col-sm-6 mb-4">
                    <div class="icon-box text-center">
                        <i class="fas fa-briefcase mb-3"></i>
                        <h3>Corporate & Commercial Law</h3>
                        <p>Helping businesses navigate complex legal landscapes...</p>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 mb-4">
                    <div class="icon-box text-center">
                        <i class="fas fa-gavel mb-3"></i>
                        <h3>Dispute Resolution</h3>
                        <p>Expert representation in resolving disputes efficiently...</p>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 mb-4">
                    <div class="icon-box text-center">
                        <i class="fas fa-home mb-3"></i>
                        <h3>Real Estate & Property Law</h3>
                        <p>Assisting with property transactions and disputes...</p>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 mb-4">
                    <div class="icon-box text-center">
                        <i class="fas fa-users mb-3"></i>
                        <h3>Family Law</h3>
                        <p>Offering compassionate guidance on matters such as divorce, child custody, and prenuptial agreements.</p>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 mb-4">
                    <div class="icon-box text-center">
                        <i class="fas fa-scroll mb-3"></i>
                        <h3>Wills, Trusts, & Estate Planning</h3>
                        <p>Ensuring your legacy is secure with tailored estate planning, probate, and trust management services.</p>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 mb-4">
                    <div class="icon-box text-center">
                        <i class="fas fa-briefcase mb-3"></i>
                        <h3>Employment Law</h3>
                        <p>Supporting both employers and employees in matters of workplace rights, contracts, and disputes.</p>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 mb-4">
                    <div class="icon-box text-center">
                        <i class="fas fa-lightbulb mb-3"></i>
                        <h3>Intellectual Property</h3>
                        <p>Protecting your creative works and innovations with robust intellectual property strategies.</p>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 mb-4">
                    <div class="icon-box text-center">
                        <i class="fas fa-passport mb-3"></i>
                        <h3>Immigration Law</h3>
                        <p>Guiding individuals and businesses through visa applications, citizenship, and immigration compliance.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
        <!-- Why Choose Us Section -->
        <section id="why-choose-us" class="why-choose-us-section" data-aos="fade-up">
            <div class="container text-center">
                <h2 class="section-title">Why Choose Us?</h2>
                <div class="row">
                    <div class="col-md-6 offset-md-3">
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item">
                                <h4 class="highlight">Expertise You Can Trust</h4>
                                <p>Our solicitors bring years of experience and specialized knowledge to every case.</p>
                            </li>
                            <li class="list-group-item">
                                <h4 class="highlight">Client-Centered Approach</h4>
                                <p>We prioritize clear communication, transparency, and tailored solutions.</p>
                            </li>
                            <li class="list-group-item">
                                <h4 class="highlight">Proven Track Record</h4>
                                <p>Our results speak for themselves, with successful outcomes in a wide range of cases.</p>
                            </li>
                            <li class="list-group-item">
                                <h4 class="highlight">Accessible & Approachable</h4>
                                <p>We make complex legal issues understandable and ensure you feel supported every step of the way.</p>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>


    <!-- Meet Our Team Section -->
<section id="meet-our-team" class="meet-our-team-section" data-aos="fade-up">
    <div class="container text-center">
        <h2 class="section-title">Meet Our Team</h2>
        <p class="team-description">Our team of skilled solicitors and legal professionals is dedicated to excellence and client satisfaction. With diverse expertise across various areas of law, we bring a collaborative approach to solving legal challenges.</p>
        <div class="row">
            <!-- Team Member 1 -->
            <div class="col-md-4">
                <div class="team-member">
                    <div class="team-member-img">
                        <i class="fas fa-user-circle"></i> <!-- Profile Icon -->
                    </div>
                    <h4 class="team-name">John Doe</h4>
                    <p class="team-position">Senior Solicitor</p>
                </div>
            </div>
            <!-- Team Member 2 -->
            <div class="col-md-4">
                <div class="team-member">
                    <div class="team-member-img">
                        <i class="fas fa-user-circle"></i> <!-- Profile Icon -->
                    </div>
                    <h4 class="team-name">Jane Smith</h4>
                    <p class="team-position">Legal Advisor</p>
                </div>
            </div>
            <!-- Team Member 3 -->
            <div class="col-md-4">
                <div class="team-member">
                    <div class="team-member-img">
                        <i class="fas fa-user-circle"></i> <!-- Profile Icon -->
                    </div>
                    <h4 class="team-name">Emily Clark</h4>
                    <p class="team-position">Paralegal</p>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="let-us-help" style="background-color: #1a1a1a; color: #f1f1f1; padding: 60px 20px; text-align: center;">
    <div class="container">
      <h2 style="font-size: 2.5rem; font-weight: bold; margin-bottom: 20px; color: #ffd700;">Let Us Help You</h2>
      <p style="font-size: 1.2rem; line-height: 1.8; max-width: 800px; margin: 0 auto;">
        Whether you're seeking legal advice, representation, or planning for the future, 
        <strong>Avery Morgan Solicitors</strong> is your trusted partner in navigating the complexities of the legal world.
        Reach out to us today and let us provide the solutions you need.
      </p>
      <a href="#contact" 
         style="display: inline-block; margin-top: 30px; padding: 12px 30px; background-color: #ffd700; 
                color: #1a1a1a; text-transform: uppercase; font-weight: bold; border-radius: 25px; 
                text-decoration: none; transition: background-color 0.3s;">
        Contact Us
      </a>
    </div>
  </section>
  
    <!-- Contact Section -->
    <section id="contact" class="contact-section" data-aos="zoom-in">
        <div class="container">
            <h2>Contact Us</h2>
            <form>
                <div class="mb-3">
                    <label for="name" class="form-label">Name</label>
                    <input type="text" class="form-control" id="name" placeholder="Your Name">
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" class="form-control" id="email" placeholder="Your Email">
                </div>
                <div class="mb-3">
                    <label for="message" class="form-label">Message</label>
                    <textarea class="form-control" id="message" rows="4" placeholder="Your Message"></textarea>
                </div>
                <button type="submit" class="btn btn-custom"><a style="color: #1a1a1a; text-decoration:none;" href="/">Send Message</a></button>
            </form>
        </div>
    </section>

    <!-- Footer -->
    <footer class="footer">
        <p>&copy; 2025 Avery Morgan Solicitors. All rights reserved.</p>
    </footer>

    <!-- Scripts -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>
    <script>
        AOS.init();
    </script>
</body>
</html>
