<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Include Google Fonts-Russo One-->
    <link href="https://fonts.googleapis.com/css2?family=Russo+One&display=swap" rel="stylesheet">

    <!-- Include Google Fonts-Roboto Mono reg500-->
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Mono&display=swap" rel="stylesheet">

    <!-- Include Font-Awesome CDN-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- Include Default Custom CSS-->
    <link rel="stylesheet" href="css/index.css">

    <!-- Changed Color Theme CSS-->
    <link id="theme-style" rel="stylesheet" href="">

    <title>Portfolio-Arjie Redoña</title>
</head>
<body>
    <!-- Main Section-->
    <section class="main-section">
        <div class="main-container">
            <!-- Page Heading-->
            <div class="heading-wrapper">
                <h1>Hi, I am Arjie Redoña!</h1>
            </div>
            <!-- //!Page Heading-->

            <div class="introduction-wrapper">
                <div class="nav-wrapper">
                    <!-- Three dots Navigation-->
                    <div class="dots-wrapper">
                        <div id="dot-1" class="browser-dot"></div>
                        <div id="dot-2" class="browser-dot"></div>
                        <div id="dot-3" class="browser-dot"></div>
                    </div>
                    <!-- //!Three dots Navigation-->
                    <ul id="navigation">
                        <li><a href="#contactMe">Contact Me</a></li>
                    </ul>
                </div>
                <!-- Left Column-->
                <div class="left-column">
                    <img id="profile" src="assets/img/Me.jpeg" alt="Profile">
                    <h5 style="text-align: center; line-height: 3;">Personalize Theme</h5>
                    <!-- Theme Options Picker-->
                    <div id="theme-options-wrapper">
                        <div data-mode="light" id="light-theme" class="dot-theme"></div>
                        <div data-mode="blue" id="blue-theme" class="dot-theme"></div>
                        <div data-mode="green" id="green-theme" class="dot-theme"></div>
                        <div data-mode="purple" id="purple-theme" class="dot-theme"></div>
                    </div>
                    <!-- //!Theme Options Picker-->
                    <p id="settings-note">
                        *Theme settings will be saved for<br> your next visit
                    </p>
                </div>
                <!-- //!Left Column-->

                <!-- Right Column-->
                <div class="right-column">
                    <div id="preview-shadow">
                        <!-- What do I do Section-->
                        <div id="preview">
                            <div id="corner-tl" class="corner"></div>
                            <div id="corner-tr" class="corner"></div>
                            <h3>What I do?</h3>
                            <p>I don't know exactly when we turned on each other, but I know that seven of us survived the slide...</p>
                            <div id="corner-br" class="corner"></div>
                            <div id="corner-bl" class="corner"></div>
                        </div>
                        <!-- //!What do I do Section-->
                    </div>
                </div>
                <!-- Right Column-->
            </div>
        </div>
    </section>
    <!-- Main Section-->

    <!-- About Me Section-->
    <section class="sub-section">
        <div class="main-container">
            <div class="about-wrapper">
                <div class="about-me">
                    <h4 style="padding-bottom: 10px;">More about me</h4>
                    <p>
                        My money's in that office, right? If she start giving me some bullshit about it ain't there, and we got to go someplace else and get it, I'm gonna shoot you in the head then and there. Then I'm gonna shoot that bitch in the kneecaps, find out where my goddamn money is.
                    </p><br>
                    <p>
                        and that nigga Winston or anybody else is in there, you the first motherfucker to get shot. You understand?
                    </p>
                    <hr>
                    <h4 style="padding-bottom: 10px;">Top Expertise</h4>
                    <p>
                        Web Developer  with primary focus on PHP + Laravel:<br>
                        <a 
                            target="_blank" href="docs/resume.pdf">
                            Download Resume
                        </a>
                    </p>

                    <div id="skills">
                        <!-- Left Side Skills-->
                        <ul>
                            <li>PHP</li>
                            <li>Laravel</li>
                            <li>JavaScript</li>
                            <li>ReactJS</li>
                            <li>Python</li>
                            <li>C#.Net</li>
                        </ul>
                        <!-- //!Left Side Skills-->

                        <!-- Right Side Skills-->
                        <ul>
                            <li>Bootstrap</li>
                            <li>SQL</li>
                            <li>HTML5/CSS3</li>
                            <li>Saas</li>
                            <li>Heroku</li>
                            <li>ASP.Net</li>
                        </ul>
                        <!-- //!Right Side Skills-->
                    </div>
                </div>

                <!-- Social Media Links-->
                <div class="social-wrapper">
                    <div class="social">
                        <h4 style="padding-bottom: 20px;">Social Media Links</h4>
                        <a href="#" target="_blank" class="fa fa-facebook"></a>
                        <a href="#" target="_blank" class="fa fa-google"></a>
                        <a href="#" target="_blank" class="fa fa-linkedin"></a>
                        <a href="#" target="_blank" class="fa fa-instagram"></a>
                        <a href="#" target="_blank" class="fa fa-github"></a>
                        <p style="padding-top: 25px;">Connect with me!</p>
                    </div>
                </div>
                <!-- //!Social Media Links-->
            </div>
        </div>
    </section>
    <!-- //!About Me Section-->

    <!-- Projects Section-->
    <section class="main-section">
        <div class="main-container">
            <h3 style="text-align: center; padding-top: 25px">Some of my projects</h3>
            <div class="project-wrapper">
                    <div class="project">
                        <img class="thumbnail" src="assets/projects/Boebot-Directory.png" alt="Boebot">
                        <div class="project-preview">
                            <h6 class="project-title">Boebot Campus Directory</h6>
                            <p class="project-intro">This is where you describe the projects desctiption.</p>
                            <a class="read-more" href="boebot.php" target="_blank">Read more</a>
                        </div>
                    </div>
                    <div class="project">
                        <img class="thumbnail" src="assets/projects/AHK-POSIM.png" alt="Boebot">
                        <div class="project-preview">
                            <h6 class="project-title">AHK POSIM</h6>
                            <p class="project-intro">This is where you describe the projects desctiption.</p>
                            <a class="read-more" href="#" target="_blank">Read more</a>
                        </div>
                    </div>
                    <div class="project">
                        <img class="thumbnail" src="assets/projects/Marketeer.png" alt="Boebot">
                        <div class="project-preview">
                            <h6 class="project-title">Fur Food Marketeer</h6>
                            <p class="project-intro">This is where you describe the projects desctiption.</p>
                            <a class="read-more" href="#" target="_blank">Read more</a>
                        </div>
                    </div>
            </div>
        </div>
    </section>
    <!-- //!Projects Section-->

    <!-- Contact Me Section-->
    <section id="contactMe" class="sub-section">
        <div class="main-container">
            <h3 style="text-align: center; padding: 50px">Get in Touch</h3>

            <form id="contact-form">
                <label>Name</label>
                <input type="text" class="input-field" name="name">

                <label>Subject</label>
                <input type="text" class="input-field" name="subject">

                <label>Email</label>
                <input type="text" class="input-field" name="email">

                <label>Message</label>
                <textarea class="input-field" name="message"></textarea>

                <input id="submit-button" type="submit" value="Send">
            </form>
        </div>
    </section>
    <!-- //!Contact Me Section-->

    <!-- Include the JavaScript File-->
    <script type="text/javascript" src="js/index.js"></script>

</body>
</html>