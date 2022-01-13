<!DOCTYPE html>
<html>
    <head>
        <title>Personal Website</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta charset="UTF-8">
        <!-- Latest compiled and minified CSS -->
        <link href="style/css/bootstrap-5.0.2/css/bootstrap.css" rel="stylesheet">

        <!-- CSS Files -->
        <link href="style/css/main.css" type="text/css" rel="stylesheet">

        <!-- Latest compiled JavaScript -->
        <script src="style/css/bootstrap-5.0.2/js/bootstrap.js"></script>

        <!-- Font Awesome -->
        <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
    </head>
    <style>
         * {
            box-sizing: border-box;
        }
        body {
            background-color: #F0F0F0;
            scroll-behavior: smooth;
        }
        @font-face {
            font-family: navfont;
            src: url("style/fonts/MerriMuli/Merriweather/Merriweather-Regular.ttf");
        }
        @font-face {
            font-family: navlinkfont;
            src: url("style/fonts/MerriMuli/Muli/Muli-Light.ttf");
        }
        @font-face {
            font-family: headingfont;
            src: url('style/fonts/WorkOpen/WorkSans/WorkSans-Light.ttf');
        }
        @font-face {
            font-family: subheading;
            src: url('style/fonts/WorkOpen/OpenSans/OpenSans-Regular.ttf');
        }
        .brand {
            font-family: navfont;
        }
        .nav-link {
            font-family: navlinkfont;
        }
        .strong-heading {
            text-align: center;
            font-family: headingfont;
            margin-top: 250px;
        }
        .sub-heading {
            text-align: center;
            font-family: subheading;
        }
        .icons {
            text-align: center;
            margin-top: 220px;
            padding-bottom: 20px;
        }
        .fab {
            padding: 10px 10px;
            font-size: 20px;
            cursor: pointer;
            color: black;
        }
        .about-us {
            width: 100%;
            min-height: 200px;
            background-color: white;
            padding: 60px;
        }
        .about-us-title {
            padding-top: 30px;
            font-family: headingfont;
            font-size: 40px; 
        }
        .about-us-para {
            font-family: subheading;
            line-height: 1.8;
            text-align: justify;
            padding: 10px 10px; 
        }
        .resume {
            width: 100%;
            min-height: 200px;
            padding: 60px;
        }
        .fa-mobile-alt {
            font-size: 130px;
            padding: 30px;
        }
        .fa-desktop {
            font-size: 130px;
            padding: 30px;
        }
        .footer{
            width: 100%;
            padding: 10px;
            color: white;
            background-color: black;
        }
    </style>
    <body>
        <nav class="nav navbar-expand-md navbar-light bg-light shadow-lg fixed-top">
            <a href="#" class="navbar-brand brand">Suraj TheDeveloper</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavbar">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="collapsibleNavbar">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="index.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#about">About Me</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#resume">Resume</a>
                    </li> 
                    <li class="nav-item">
                        <a class="nav-link" href="#services">Services</a>
                    </li> 
                    <li class="nav-item">
                        <a class="nav-link" target="_blank" href="https://thedevelopersuraj.blogspot.com/">Blog</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#contact">Contact</a>
                    </li>       
                </ul>
            </div>
        </nav>
        <div class="container">
            <h1 class="strong-heading">Hi I Am Suraj Kumar L .N. S .K</h1>
            <h3 class="sub-heading">Web Developer | PHP Developer</h3>
            <div class="icons">
                <a href="https://www.instagram.com/suraj_thedeveloper/"><i class="fab fa-instagram"></i></a>
                <a href="https://twitter.com/surajthedevelo1"><i class="fab fa-twitter"></i></a>
                <a href="https://github.com/suraj-TheDeveloper"><i class="fab fa-github"></i></a>
                <a href="https://t.me/s/surajthedeveloper"><i class="fab fa-telegram"></i></a>
                <a href="https://thedevelopersuraj.blogspot.com"><i class="fab fa-blogger"></i></a>
                <a href="https://www.youtube.com/channel/UCq44E-HDYZwdysceXUDFv4A"><i class="fab fa-youtube"></i></a>
            </div>
        </div>
        <div class="about-us" id="about">
            <h1 class="text-center about-us-title">About Me And My Interest</h1>
            <p class="about-us-para">hi! I am suraj kumar from madurai. My 10th graduation was at mahatma montessori school with 90.5 % -2016 and my 12th graduation was at mahatma montessori school with 66 % 2018 . I got my bachelor's Degree at Subbalakshmi Lakshmipathy college of science (B. Sc - Computer Science) - 2021.</p>
            <p class="about-us-para">The interest for developing the websites came while pursuing second year of college start of july month. So i started to desgin and develop a site for about 5 months as next step of my career i went to ACE training institute and completed Web designing course. while pursuing the course i learnt more about web design and web development than design and develop a site. then i completed a project with the help of ACE Training centre and got completion certificate. During lockdown periods i practice by developing more sites and upgrading my skills. Then i learnt Laravel - PHP Framework by self - study and done some small projects and upgraded my skill. Before learning laravel i completed course WordPress and Angular JS in ACE Training, done projects in WordPress and Angular JS and got completion certificate. After learning these i got more and more interest in learning server side technologies and mobile apps and i started to learn linux to got to next level in my career. To upgrade my skills in real time web development i started to work as a PHP Developer in a web development company for 4 months.</p>
        </div>
        <div class="resume" id="resume">
            <h1 class="text-center about-us-title">Resume - CV</h1>
            <h1 class="about-us-title">Career Objective</h1>
            <p class="about-us-para">hi! I am suraj kumar from madurai. basically I am interested in programming languages and using them to build a product. I learnt programming languages from ACE TRAINING, Udemy and self learning and i love to explore the internet and new technologies</p>
            <h1 class="about-us-title">Education Qualification</h1>
            <div class="table-responsive">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>S. No</th>
                            <th>Graduations</th>
                            <th>Percentage</th>
                            <th>Year</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="about-us-para">
                            <td>1</td>
                            <td>10th Graduation under Mahatma Montessori Matriculation Higher Secondary School</td>
                            <td>90.5</td>
                            <td>2016</td>
                        </tr>
                        <tr class="about-us-para">
                            <td>2</td>
                            <td>12th Graduation under Mahatma Montessori Matriculation Higher Secondary School</td>
                            <td>66</td>
                            <td>2018</td>
                        </tr>
                        <tr class="about-us-para">
                            <td>3</td>
                            <td>B. Sc – Computer Science(Security System Specialization) under subbalakshmi lakshmmipathy college of science</td>
                            <td>-</td>
                            <td>2021</td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <h1 class="about-us-title">Certificates</h1>
            <div class="table-responsive">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>S. No</th>
                            <th>Certificate Name</th>
                            <th>Certificate Provider</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="about-us-para">
                            <td>1</td>
                            <td>Understanding Dev ops for Developers session</td>
                            <td>geeksup</td>
                        </tr>
                        <tr class="about-us-para">
                            <td>2</td>
                            <td>ubuntu linux fundamentals learn linux server with ubuntu</td>
                            <td>Udemy</td>
                        </tr>
                        <tr class="about-us-para">
                            <td>3</td>
                            <td>Mastering linux command line</td>
                            <td>Udemy</td>
                        </tr>
                        <tr class="about-us-para">
                            <td>4</td>
                            <td>Web designing Course</td>
                            <td>ACE Training</td>
                        </tr>
                        <tr class="about-us-para">
                            <td>5</td>
                            <td>Ubuntu Linux desktop basics</td>
                            <td>Udemy</td>
                        </tr>
                        <tr class="about-us-para">
                            <td>6</td>
                            <td>AngularJS and WordPress</td>
                            <td>ACE Training</td>
                        </tr>
                        <tr class="about-us-para">
                            <td>7</td>
                            <td>Web programming workshop</td>
                            <td>Zerame Infotech</td>
                        </tr>
                        <tr class="about-us-para">
                            <td>8</td>
                            <td>Won 3rd price at web design competition</td>
                            <td>SLCS</td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <h1 class="about-us-title">Experience</h1>
            <div class="table-responsive">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>S. No</th>
                            <th>Company Name</th>
                            <th>Designation</th>
                            <th>Start Month</th>
                            <th>End Month</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="about-us-para">
                            <td>1</td>
                            <td>RTLx Groups</td>
                            <td>Web Developer - Intern</td>
                            <td>Jan - 2021</td>
                            <td>April - 2021</td>
                        </tr>
                        <tr class="about-us-para">
                            <td>2</td>
                            <td>Hitasoft Technology Solutions</td>
                            <td>PHP Developer</td>
                            <td>September - 2021</td>
                            <td>December - 2021</td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <h1 class="about-us-title">Known Programming Languages</h1>
            <div class="table-responsive">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>S. No</th>
                            <th>Programming Languages</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="about-us-para">
                            <td>1</td>
                            <td>HTML</td>
                        </tr>
                        <tr class="about-us-para">
                            <td>2</td>
                            <td>CSS</td>
                        </tr>
                        <tr class="about-us-para">
                            <td>3</td>
                            <td>JavaScript (Jquery, Ajax)</td>
                        </tr>
                        <tr class="about-us-para">
                            <td>4</td>
                            <td>PHP</td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <h1 class="about-us-title">Known Frameworks</h1>
            <div class="table-responsive">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>S. No</th>
                            <th>Frameworks</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="about-us-para">
                            <td>1</td>
                            <td>Bootstrap (CSS Frameowrk)</td>
                        </tr>
                        <tr class="about-us-para">
                            <td>2</td>
                            <td>Laravel (PHP Framework)</td>
                        </tr>
                        <tr class="about-us-para">
                            <td>3</td>
                            <td>WordPress (PHP - Content Management System)</td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <h1 class="about-us-title">Technical Skills</h1>
            <div class="table-responsive">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>S. No</th>
                            <th>Skills</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="about-us-para">
                            <td>1</td>
                            <td>Fast Learning</td>
                        </tr>
                        <tr class="about-us-para">
                            <td>2</td>
                            <td>Knowledge in Ubuntu Basics</td>
                        </tr>
                        <tr class="about-us-para">
                            <td>3</td>
                            <td>Design and Develop a site from scratch</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <div class="about-us" id="services">
            <h1 class="about-us-title text-center">Services I Do</h1>
            <div class="row">
                <div class="col-md-6">
                    <center>
                        <i class="fa fa-mobile-alt"></i>
                        <h4 class="about-us-para text-center">Mobile App Development (Android/Ios)</h4>
                    </center>
                </div>
                <div class="col-md-6">
                    <center>
                            <i class="fas fa-desktop"></i>
                            <h4 class="about-us-para text-center">Web Development</h4>
                    </center>
                </div>
            </div>
        </div>
        <div class="resume" id="contact">
            <h1 class="about-us-title text-center">Contact Me</h1>
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <form action="#" method="POST">
                        <div class="mb-3 mt-3">
                            <label class="form-label">Name</label>
                            <input type="text" name="name" id="name" class="form-control" placeholder="Enter Name...">
                        </div>
                        <div class="mb-3 mt-3">
                            <label class="form-label">Email</label>
                            <input type="email" name="email" id="email" class="form-control" placeholder="Enter Email Id...">
                        </div>
                        <div class="mb-3 mt-3">
                            <label class="form-label">Message</label>
                            <textarea name="message" id="message" class="form-control" rows="6" placeholder="Enter Your Thoughts..."></textarea>
                        </div>
                        <input type="submit" value="Send Message" class="btn btn-primary">
                    </form>
                </div>
            </div>
        </div>
        <div class="footer">
            <p class="about-us-para text-center"><i class="fa fa-copyright"></i> Copyrights 2022 - <?php echo date('Y'); ?> Design and Developed By Suraj Kumar</p>
        </div>
    </body>
</html>