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
            font-family: 'Roboto', sans-serif;
        }
        
        body {
            background-color: #14213d;  /* White background */
            color: #212529; /* Darker text for better readability */
        }
        /* section{
            margin-bottom: 20px;
        } */
        
        /* Navbar */
        .navbar {
            background-color: transparent; /* Transparent or desired background color */
            padding: 1rem 2rem;
            position: fixed; /* Fixes navbar to the top */
            top: 0; /* Aligns it to the top of the viewport */
            left: 0;
            width: 100%; /* Makes sure it spans the full width */
            z-index: 1000; /* Ensures it stays above other elements */
            transition: background-color 0.3s ease; /* Smooth transition for background */
        }

        .navbar.scrolled {
            background-color: #E1E8ED; /* Add a background when scrolling */
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1); /* Optional shadow for better visibility */
        }


        
        .navbar a {
            color: #4A90E2 !important; /* Soft Blue for links */
            transition: color 0.3s ease;
        }
        
        .navbar a:hover {
            color: #F5A623 !important; /* Warm Yellow on hover */
        }
        
        .navbar .navbar-brand {
            font-size: 1.8rem;
            font-weight: bold;
            color: #4A90E2 !important; /* Soft Blue for brand */
        }
        
        /* Hero Section */
        .hero-section {
            background: url('/images/shake.jpg') center/cover no-repeat;
            height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            text-align: center;
            color: #f5f5f5;
            position: relative;
        }
        
        .hero-section:after {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: rgba(0, 0, 0, 0.5);  /* Overlay to make text stand out */
        }
        
        .hero-section .content {
            position: relative;
            z-index: 2;
        }
        
        .hero-section h1 {
            font-size: 4rem;
            color: #4A90E2;  /* Soft Blue */
            text-shadow: 3px 3px 8px rgba(0, 0, 0, 0.7);
        }
        
        .hero-section p {
            font-size: 1.5rem;
            margin-top: 1rem;
        }
        
        .hero-section a {
            background-color: #F5A623;  /* Warm Yellow for buttons */
            color: #ffffff;
            padding: 12px 30px;
            font-size: 1.1rem;
            border-radius: 5px;
            text-decoration: none;
        }
        
        .hero-section a:hover {
            background-color: #F0A000;  /* Slightly darker Warm Yellow on hover */
        }
        
        /* About Section */
        .about-section {
            background-color: #FFFFFF;  /* White background */
            padding: 60px 20px;
        }
        
        .about-section h2 {
            color: #4A90E2;  /* Soft Blue for headers */
            font-size: 2rem;
            margin-bottom: 20px;
        }
        
        .about-section p {
            font-size: 1.1rem;
            line-height: 1.8;
            color: #6c757d; /* Softer text for readability */
        }
        
        /* Service Section */
        .services-section {
            background-color: #14213d;  
            padding: 60px 20px;
        }
        
        .services-section h2 {
            color: #4A90E2;  /* Soft Blue for headers */
            font-size: 2rem;
            text-align: center;
            margin-bottom: 30px;
        }
        
        /* Icon Box */
        .icon-box {
            background-color: #E1E8ED;  /* Light Gray background for boxes */
            padding: 20px;
            margin: 10px 0;
            border-radius: 8px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
            transition: all 0.3s ease;
        }
        
        .icon-box:hover {
            transform: translateY(-10px);
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.15);
        }
        
        .icon-box i {
            font-size: 2.5rem;
            color: #4A90E2;  /* Soft Blue for icons */
            margin-bottom: 15px;
        }
        
        .icon-box h4 {
            font-size: 1.2rem;
            font-weight: bold;
            margin-bottom: 10px;
        }
        
        .icon-box p {
            color: #6c757d;
            font-size: 1rem;
        }
        
        /* Footer */
        .footer {
            background-color: #212529;  /* Dark footer */
            color: #f8f9fa;
            text-align: center;
            padding: 20px;
        }
        
        .footer a {
            color: #F5A623;  /* Warm Yellow for footer links */
            text-decoration: none;
        }
        
        /* Contact Section */
        .contact-section .form-control {
            background-color: #F8F9FA;  /* Light Gray background for form inputs */
            color: #212529;
            border: 1px solid #4A90E2; /* Soft Blue for borders */
        }

        .card {
  background-color: #fff;
  padding: 20px;
  border-radius: 10px;
  box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.1);
  text-align: center;
  transition: all 0.3s ease;
}

.card:hover {
  box-shadow: 0px 6px 15px rgba(0, 0, 0, 0.15);
  background-color: #f4f4f4; /* Slightly darker on hover */
}

.icon img {
  width: 40px;
  height: 40px;
  margin-bottom: 15px;
  color: #4A90E2; /* Accent color */
}

.title {
  font-family: 'Poppins', sans-serif;
  font-size: 20px;
  color: #333;
  font-weight: bold;
  margin-bottom: 10px;
}

.text {
  font-family: 'Open Sans', sans-serif;
  font-size: 14px;
  color: #666;
}


        
        /* Media Queries */
        @media (max-width: 768px) {
            .hero-section h1 {
                font-size: 3rem;
            }
            .navbar .navbar-brand {
                font-size: 1rem;
                font-weight: bold;
                color: #4A90E2 !important; /* Soft Blue for brand */
            }
        
            .hero-section p {
                font-size: 1.2rem;
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
    <style>
        /* About Section Styling */
        .about-section {
            position: relative;
            background: linear-gradient(to right, rgba(0, 0, 0, 0.6), rgba(0, 0, 0, 0.6)), 
                        url('/images/14.webp') center/cover no-repeat;
            color: #ffffff; /* White text for contrast */
            padding: 100px 20px;
            height: 100vh;
            display: flex;
            align-items: center;
            justify-content: flex-end; /* Align content to the right */
        }
        
        .about-content {
            max-width: 50%;
            text-align: right; /* Align text to the right */
            z-index: 2; /* Ensure content is above the background */
        }
        
        .about-content h2 {
            font-size: 2.5rem;
            margin-bottom: 20px;
            color: #F5A623; /* Warm Yellow for heading */
        }
        
        .about-content p {
            font-size: 1.2rem;
            line-height: 1.8;
            margin-bottom: 20px;
            
        }
        
        .about-content .icon-box {
            display: flex;
            align-items: center;
            justify-content: flex-end; /* Align icons to the right */
            margin-bottom: 20px;
            background: #14213d;
        }
        
        .about-content .icon-box i {
            font-size: 2rem;
            color: #4A90E2; /* Soft Blue for icons */
            margin-left: 15px;
        }
        
        .about-content .icon-box div {
            text-align: right;
        }
        
        .about-content .icon-box h4 {
            font-size: 1.4rem;
            font-weight: bold;
            margin-bottom: 5px;
        }
        
        .about-content .icon-box p {
            font-size: 1rem;
        }
        
        /* Media Queries */
        @media (max-width: 768px) {
            .about-content {
                max-width: 100%;
                text-align: center; /* Center align for small screens */
            }
        
            .about-content .icon-box {
                justify-content: center;
                margin-left: 0;
            }
        }
        </style>
        
        <section id="about" class="about-section" data-aos="fade-right">
            <div class="about-content">
                <h2>About Us</h2>
                <p style="color: #e5e5e5">At Avery Morgan Solicitors, we pride ourselves on delivering exceptional legal services tailored to meet the needs of our clients.</p>
                <div class="icon-box">
                    <div>
                        <h4>Client-Centered Approach</h4>
                        <p>We prioritize clear communication and tailored solutions.</p>
                    </div>
                    <i class="fas fa-users"></i>
                </div>
                <div class="icon-box">
                    <div>
                        <h4>Expertise You Can Trust</h4>
                        <p>Years of experience delivering successful outcomes.</p>
                    </div>
                    <i class="fas fa-balance-scale"></i>
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
    
    <style>
        /* Why Choose Us Section */
        .why-choose-us-section {
            background-color: #1b1f3a; /* Background color */
            padding: 60px 20px;
            color: #ffffff; /* White text for contrast */
        }
        
        .why-choose-us-section .section-title {
            font-size: 2.5rem;
            font-weight: bold;
            margin-bottom: 30px;
            color: #fca311; /* Warm Yellow accent for the title */
        }
        
        .why-choose-us-section .list-group {
            border: none;
            margin-top: 20px;
        }
        
        .why-choose-us-section .list-group-item {
            background-color: transparent; /* Transparent background for items */
            border: none;
            margin-bottom: 20px;
            color: #e1e8ed; /* Light gray for text */
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.3); /* Subtle shadow for depth */
            transition: all 0.3s ease;
        }
        
        .why-choose-us-section .list-group-item:hover {
            background-color: #1d3557; /* Slightly lighter shade on hover */
            transform: translateY(-5px); /* Lift effect */
            box-shadow: 0 6px 12px rgba(0, 0, 0, 0.4); /* Enhanced shadow on hover */
        }
        
        .why-choose-us-section .highlight {
            font-size: 1.5rem;
            font-weight: bold;
            color: #fca311; /* Warm Yellow for highlights */
            margin-bottom: 10px;
        }
        </style>
        
        <!-- Why Choose Us Section -->
        <section id="why-choose-us" class="why-choose-us-section" data-aos="fade-up">
            <div class="container text-center">
                <h2 class="section-title">Why Choose Us?</h2>
                <div class="row">
                    <div class="col-md-8 offset-md-2">
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
    <style>
        /* Meet Our Team Section */
        .meet-our-team-section {
            background: linear-gradient(135deg, #4a90e2, #14213d); /* Gradient background */
            padding: 80px 20px;
            color: #ffffff;
            text-align: center;
            position: relative;
        }
        
        .meet-our-team-section::before {
            content: "";
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: rgba(0, 0, 0, 0.4); /* Subtle overlay for better text contrast */
            z-index: 1;
        }
        
        .meet-our-team-section .container {
            position: relative;
            z-index: 2;
        }
        
        .meet-our-team-section .section-title {
            font-size: 2.5rem;
            font-weight: bold;
            margin-bottom: 30px;
            color: #fca311; /* Warm yellow for the title */
        }
        
        .meet-our-team-section .team-description {
            font-size: 1.2rem;
            margin-bottom: 50px;
            color: #e1e8ed;
        }
        
        .meet-our-team-section .team-member {
            margin-bottom: 30px;
            background: #ffffff;
            border-radius: 15px;
            padding: 30px 20px;
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.3);
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            text-align: center;
        }
        
        .meet-our-team-section .team-member:hover {
            transform: translateY(-10px);
            box-shadow: 0 12px 24px rgba(0, 0, 0, 0.5);
        }
        
        .meet-our-team-section .team-member-img {
            width: 100px;
            height: 100px;
            margin: 0 auto 20px;
            border-radius: 50%;
            background: linear-gradient(135deg, #fca311, #ff7f50); /* Gradient avatar background */
            display: flex;
            align-items: center;
            justify-content: center;
            color: #14213d;
            font-size: 3rem;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.3);
        }
        
        .meet-our-team-section .team-name {
            font-size: 1.5rem;
            font-weight: bold;
            color: #14213d;
            margin-bottom: 10px;
        }
        
        .meet-our-team-section .team-position {
            font-size: 1rem;
            color: #555555;
        }
        
        /* Responsive Design */
        @media (max-width: 768px) {
            .meet-our-team-section .team-member {
                margin-bottom: 20px;
            }
        }
        </style>
        
        <!-- Meet Our Team Section -->
        <section id="meet-our-team" class="meet-our-team-section" data-aos="fade-up">
            <div class="container">
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
        

        <style>
            /* Let Us Help Section */
            #let-us-help {
                background: url('images/legal.png') no-repeat center center/cover; /* Replace with your image URL */
                color: #f1f1f1;
                padding: 80px 20px;
                text-align: center;
                position: relative;
                overflow: hidden;
            }
            
            #let-us-help::before {
                content: "";
                position: absolute;
                top: 0;
                left: 0;
                right: 0;
                bottom: 0;
                background: rgba(0, 0, 0, 0.7); /* Subtle overlay for readability */
                z-index: 1;
            }
            
            #let-us-help .container {
                position: relative;
                z-index: 2;
            }
            
            #let-us-help h2 {
                font-size: 3rem;
                font-weight: bold;
                margin-bottom: 20px;
                color: #ffd700; /* Gold color for the heading */
                text-transform: uppercase;
                letter-spacing: 1.5px;
            }
            
            #let-us-help p {
                font-size: 1.2rem;
                line-height: 1.8;
                max-width: 800px;
                margin: 0 auto;
                color: #e1e8ed;
            }
            
            #let-us-help a {
                display: inline-block;
                margin-top: 30px;
                padding: 15px 40px;
                background: linear-gradient(135deg, #ffd700, #fca311); /* Gradient button */
                color: #1a1a1a;
                text-transform: uppercase;
                font-weight: bold;
                border-radius: 30px;
                text-decoration: none;
                transition: all 0.3s ease;
                box-shadow: 0 8px 15px rgba(0, 0, 0, 0.3);
            }
            
            #let-us-help a:hover {
                background: #fca311;
                color: #ffffff;
                transform: translateY(-5px); /* Lift effect */
                box-shadow: 0 12px 20px rgba(0, 0, 0, 0.5);
            }
            
            #let-us-help::after {
                content: "";
                position: absolute;
                top: -50px;
                left: -50px;
                width: 200px;
                height: 200px;
                background: rgba(255, 215, 0, 0.1); /* Decorative element */
                border-radius: 50%;
                z-index: 0;
                animation: float 6s infinite;
            }
            
            @keyframes float {
                0%, 100% {
                    transform: translate(0, 0);
                }
                50% {
                    transform: translate(30px, 30px);
                }
            }
            </style>
            
            <section id="let-us-help">
                <div class="container">
                    <h2>Let Us Help You</h2>
                    <p>
                        Whether you're seeking legal advice, representation, or planning for the future, 
                        <strong>Avery Morgan Solicitors</strong> is your trusted partner in navigating the complexities of the legal world.
                        Reach out to us today and let us provide the solutions you need.
                    </p>
                    <a href="#contact">Contact Us</a>
                </div>
            </section>
            
                <!-- Contact Section -->
            <style>
                /* Contact Section */
                #contact {
                    background: linear-gradient(135deg, #14213d, #1a1a1a); /* Elegant gradient background */
                    color: #f1f1f1;
                    padding: 80px 20px;
                    text-align: center;
                    position: relative;
                    overflow: hidden;
                }
                
                #contact h2 {
                    font-size: 3rem;
                    font-weight: bold;
                    color: #ffd700; /* Gold color for heading */
                    text-transform: uppercase;
                    margin-bottom: 40px;
                    letter-spacing: 2px;
                }
                
                #contact form {
                    background: rgba(255, 255, 255, 0.1); /* Transparent background for form */
                    padding: 30px;
                    border-radius: 10px;
                    box-shadow: 0 8px 15px rgba(0, 0, 0, 0.3);
                    max-width: 600px;
                    margin: 0 auto;
                }
                
                #contact .form-label {
                    font-size: 1.1rem;
                    color: #f1f1f1;
                    font-weight: bold;
                }
                
                #contact .form-control {
                    background: #2b2b2b;
                    color: #f1f1f1;
                    border: none;
                    border-radius: 8px;
                    padding: 12px;
                    font-size: 1rem;
                    margin-bottom: 20px;
                    transition: background-color 0.3s ease;
                }
                
                #contact .form-control:focus {
                    background: #ffd700; /* Highlight input fields */
                    color: #1a1a1a;
                    box-shadow: 0 0 8px rgba(255, 215, 0, 0.8);
                }
                
                #contact .btn-custom {
                    background: #ffd700;
                    color: #1a1a1a;
                    font-weight: bold;
                    border-radius: 25px;
                    padding: 12px 30px;
                    font-size: 1.1rem;
                    border: none;
                    margin-top: 20px;
                    cursor: pointer;
                    transition: background-color 0.3s ease;
                    box-shadow: 0 8px 15px rgba(0, 0, 0, 0.2);
                }
                
                #contact .btn-custom:hover {
                    background: #fca311;
                    transform: translateY(-3px); /* Hover effect */
                    box-shadow: 0 12px 20px rgba(0, 0, 0, 0.3);
                }
                
                #contact::before {
                    content: "";
                    position: absolute;
                    top: 0;
                    left: 50%;
                    width: 300px;
                    height: 300px;
                    background: rgba(255, 215, 0, 0.2); /* Subtle glow effect */
                    border-radius: 50%;
                    z-index: 0;
                    animation: float 6s infinite;
                    transform: translateX(-50%);
                }
                
                @keyframes float {
                    0%, 100% {
                        transform: translate(0, 0);
                    }
                    50% {
                        transform: translate(20px, 20px);
                    }
                }
                </style>
                
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
                            <button type="submit" class="btn-custom">
                                Send Message
                            </button>
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
    <script>
        window.addEventListener("scroll", function () {
            const navbar = document.querySelector(".navbar");
            if (window.scrollY > 50) { 
                navbar.classList.add("scrolled"); // Add 'scrolled' class
            } else {
                navbar.classList.remove("scrolled"); // Remove 'scrolled' class
            }
        });
    </script>
    
</body>
</html>
