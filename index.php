<?php get_header(); ?>
<div class="container-lg FullContent">
        <div class="row g-0">
            <header class="col-12 navbarHeader">
                <nav class="navbar navbar-expand-lg navbar-light bg-light outside">
                    <div class="navWrapper">
                        <button class="navbar-toggler outside" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                            <i class="fa-solid fa-bars"></i>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarSupportedContent2">
                            <ul class="nav nav-tabs NavBar" id="myTab2" role="tablist">

                                <li class="nav-item" role="presentation">
                                    <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home" type="button" role="tab" aria-controls="home" aria-selected="true">HOME</button>
                                    <!--<button type="button" onclick="switchTab('home-tab', 'contactTrigger')" class="btn btn-dark btn-lg active" id="contactTrigger">HOME</button>-->



                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="about-tab" data-bs-toggle="tab" data-bs-target="#about" type="button" role="tab" aria-controls="about" aria-selected="false">ABOUT</button>
                                    <!--<button type="button" onclick="switchTab('about-tab', 'contactTrigger2')" class="btn btn-dark btn-lg" id="contactTrigger2">ABOUT</button>-->

                                </li>

                            </ul>
                        </div> <!-- navbar content-->
                    </div>
                </nav>
                <nav class="navbar navbar-expand-lg navbar-light bg-light inside">
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <i class="fa-solid fa-bars"></i>
                    </button>
                    <div class="collapse navbar-collapse inside" id="navbarSupportedContent">
                        <ul class="nav nav-tabs NavBar" id="myTab" role="tablist">

                            <li class="nav-item" role="presentation">
                                <!--<button onclick="unshow('home-tab')" class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home" type="button" role="tab" aria-controls="home" aria-selected="true">HOME</button>-->
                                <button type="button" onclick="switchTab('home-tab', 'contactTriggerHome')" class="btn btn-dark btn-lg" id="contactTrigger4">HOME</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <!--<button onclick="unshow('about-tab')" class="nav-link" id="about-tab" data-bs-toggle="tab" data-bs-target="#about" type="button" role="tab" aria-controls="about" aria-selected="false">ABOUT</button>-->
                                <button type="button" onclick="switchTab('about-tab', 'contactTriggerAbout')" class="btn btn-dark btn-lg" id="contactTrigger5">ABOUT</button>
                            </li>

                        </ul>
                    </div> <!-- navbar content-->
                </nav>
            </header>
        </div>
        <div class="row MainContent g-0">
            <div class="col-12 pictureDivider">
                <img class="pic" src="<?php echo get_template_directory_uri(); ?>/img/pic.jpg">
                <div class="outsideColumn tab-content" id="myTabContent">
                    <!-- HOME -->
                    <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                        <div class="container-fluid contentHome">
                            <div class="row row1 g-0">
                                <div class="col-12 outsideColumn">

                                    <article>

                                        <div class="contentBlock">

                                            <div class="centeredContent">
                                                <img class="squarepic" src="<?php echo get_template_directory_uri(); ?>/img/square.jpg">
                                                <h1 class="display-1">EDUARDO BOTELHO</h1>
                                                <div class="CentralText">
                                                    <h4>A young aspiring software engineer, desperate to create something big. </h4>
                                                    <h4>Addicted to coding, loves to face challenges, because if it was easy, it wouldn't be fun.</h4>
                                                    <h4>"The first steps are very scary... but here I go!"</h4>
                                                </div>
                                                <button type="button" onclick="switchTab('about-tab')" class="btn btn-dark btn-lg" id="contactTrigger3">MORE ABOUT ME</button>
                                                <div class="socialMediaIcons">
                                                    <a href="https://www.linkedin.com/in/eduardobotelho1029/?locale=en_US" target=”_blank”><h1 class="display-6 fab fa-linkedin"></h1></a>
                                                    <a href="https://github.com/UPSxACE" target=”_blank”><h1 class="fab fa-github"></h1></a>
                                                    <a href="https://www.instagram.com/upsxace/" target=”_blank”><h1 class="display-6 fab fa-instagram"></h1></a>
                                                    <a href="https://www.facebook.com/eduardo1029x/" target=”_blank”><h1 class="display-6 fab fa-facebook-square"></h1></a>
                                                </div>
                                            </div>
                                        </div>
                                    </article>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /HOME -->

                    <!-- ABOUT -->
                    <div class="tab-pane fade" id="about" role="tabpanel" aria-labelledby="about-tab">
                        <div class="container-fluid contentAbout">
                            <div class="row row1 g-0">
                                <div class="col-12 outsideColumn">

                                    <article>
                                        <div class="contentBlock">
                                            <div class="container-fluid ContentByRows">
                                                <div class="row g-0">
                                                    <!-- ABOUT / ABOUT ME -->
                                                    <div class="col-12">
                                                        <div class="titleWithLine">
                                                            <h1 class="titleWithLine">ABOUT ME</h1>
                                                            <div class="titleLine">
                                                                <span class="titleLine"></span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- Maybe this 2 lines are  not necessary
                                                    </div>
                                                    <div class="row g-0">
                                                    -->
                                                    <div class="col-6 left">
                                                        <p>I started learning how to code by myself on the internet in 2020, and now I am currently studying to become a Software Engineer. I love to solve problems, to overcome challenges, and to create things! </p>
                                                        <p>Very dedicated to my goals, I try my best on anything I am doing, and practice coding as much as possible on my free time.</p>
                                                        <p>Currently trying to find my path in this wide world that is IT/Programming ^-^</p>
                                                    </div>
                                                    <div class="col-6 right">
                                                        <div class="spaced-span1">
                                                            <span class="first">Name:</span>
                                                            <span class="second">Eduardo Botelho </span>
                                                        </div>
                                                        <div class="spaced-span1">
                                                            <span class="first">Country:</span>
                                                            <span class="second">Portugal </span>
                                                        </div>
                                                        <div class="spaced-span1">
                                                            <span class="first">City:</span>
                                                            <span class="second">Bragança</span>
                                                        </div>
                                                        <div class="spaced-span1">
                                                            <span class="first">Languages:</span>
                                                            <span class="second">Portuguese, English</span>
                                                        </div>
                                                        <div class="spaced-span1">
                                                            <span class="first">Degree:</span>
                                                            <span class="second">Currently Studying Software Development </span>
                                                        </div>
                                                        <div class="spaced-span1">
                                                            <span class="first">Mail:</span>
                                                            <span class="second">eduardo11224b@gmail.com </span>
                                                        </div>
                                                        <div class="spaced-span1">
                                                            <span class="first">Phone:</span>
                                                            <span class="second">+351 962 075 694 </span>
                                                        </div>
                                                    </div>
                                                    <!-- SOFT SKILLS -->
                                                    <div class="col-6 left">
                                                        <div class="titleWithLine">
                                                            <h1 class="titleWithLine">SOFT SKILLS</h1>
                                                            <div class="titleLine">
                                                                <span class="titleLine"></span>
                                                            </div>
                                                        </div>
                                                        <div class="spanList">
                                                                    <span class="first">
                                                                        <i class="fas fa-caret-right"></i>
                                                                    </span>
                                                            <span class="second">
                                                                        Problem Solving
                                                                    </span>
                                                        </div>
                                                        <div class="spanList">
                                                                    <span class="first">
                                                                        <i class="fas fa-caret-right"></i>
                                                                    </span>
                                                            <span class="second">
                                                                        Presentation Skills
                                                                    </span>
                                                        </div>
                                                        <div class="spanList">
                                                                    <span class="first">
                                                                        <i class="fas fa-caret-right"></i>
                                                                    </span>
                                                            <span class="second">
                                                                        Communication
                                                                    </span>
                                                        </div>
                                                        <div class="spanList">
                                                                    <span class="first">
                                                                        <i class="fas fa-caret-right"></i>
                                                                    </span>
                                                            <span class="second">
                                                                        Public Speaking
                                                                    </span>
                                                        </div>
                                                        <div class="spanList">
                                                                    <span class="first">
                                                                        <i class="fas fa-caret-right"></i>
                                                                    </span>
                                                            <span class="second">
                                                                        Team Leadership
                                                                    </span>
                                                        </div>
                                                        <div class="spanList">
                                                                    <span class="first">
                                                                        <i class="fas fa-caret-right"></i>
                                                                    </span>
                                                            <span class="second">
                                                                        Teamwork
                                                                    </span>
                                                        </div>
                                                    </div>
                                                    <!-- INTERESTS -->
                                                    <div class="col-6 right">
                                                        <div class="titleWithLine">
                                                            <h1 class="titleWithLine">INTERESTS</h1>
                                                            <div class="titleLine">
                                                                <span class="titleLine"></span>
                                                            </div>
                                                        </div>
                                                        <div class="spanList">
                                                                    <span class="first">
                                                                        <i class="fas fa-caret-right"></i>
                                                                    </span>
                                                            <span class="second">
                                                                        Anime & Games
                                                                    </span>
                                                        </div>
                                                        <div class="spanList">
                                                                    <span class="first">
                                                                        <i class="fas fa-caret-right"></i>
                                                                    </span>
                                                            <span class="second">
                                                                        Drawing & Art
                                                                    </span>
                                                        </div>
                                                        <div class="spanList">
                                                                    <span class="first">
                                                                        <i class="fas fa-caret-right"></i>
                                                                    </span>
                                                            <span class="second">
                                                                        Music & Movies
                                                                    </span>
                                                        </div>
                                                        <div class="spanList">
                                                                    <span class="first">
                                                                        <i class="fas fa-caret-right"></i>
                                                                    </span>
                                                            <span class="second">
                                                                        Neurology & Psychology
                                                                    </span>
                                                        </div>
                                                    </div>
                                                    <!-- HARD SKILLS -->
                                                    <div class="col-6 left">
                                                        <div class="titleWithLine">
                                                            <h1 class="titleWithLine">HARD SKILLS</h1>
                                                            <div class="titleLine">
                                                                <span class="titleLine"></span>
                                                            </div>
                                                        </div>
                                                        <div class="spanList">
                                                                    <span class="first">
                                                                        <i class="fas fa-caret-right"></i>
                                                                    </span>
                                                            <span class="second">
                                                                        Web Development
                                                                    </span>
                                                        </div>
                                                        <div class="spanList">
                                                                    <span class="first">
                                                                        <i class="fas fa-caret-right"></i>
                                                                    </span>
                                                            <span class="second">
                                                                        Responsive Web Design
                                                                    </span>
                                                        </div>
                                                        <div class="spanList">
                                                                    <span class="first">
                                                                        <i class="fas fa-caret-right"></i>
                                                                    </span>
                                                            <span class="second">
                                                                        Object-Oriented Programming
                                                                    </span>
                                                        </div>
                                                        <div class="spanList">
                                                                    <span class="first">
                                                                        <i class="fas fa-caret-right"></i>
                                                                    </span>
                                                            <span class="second">
                                                                        Wordpress
                                                                    </span>
                                                        </div>
                                                        <div class="spanList">
                                                                    <span class="first">
                                                                        <i class="fas fa-caret-right"></i>
                                                                    </span>
                                                            <span class="second">
                                                                        Github
                                                                    </span>
                                                        </div>
                                                        <div class="spanList">
                                                                    <span class="first">
                                                                        <i class="fas fa-caret-right"></i>
                                                                    </span>
                                                            <span class="second">
                                                                        Unified Modeling Language (UML)
                                                                    </span>
                                                        </div>
                                                    </div>
                                                    <!-- PROGRAMMING -->
                                                    <div class="col-6 right">
                                                        <div class="titleWithLine">
                                                            <h1 class="titleWithLine">PROGRAMMING</h1>
                                                            <div class="titleLine">
                                                                <span class="titleLine"></span>
                                                            </div>
                                                        </div>
                                                        <div class="spanList">
                                                                    <span class="first">
                                                                        <i class="fas fa-caret-right"></i>
                                                                    </span>
                                                            <span class="second">
                                                                        HTML & CSS
                                                                    </span>
                                                        </div>
                                                        <div class="spanList">
                                                                    <span class="first">
                                                                        <i class="fas fa-caret-right"></i>
                                                                    </span>
                                                            <span class="second">
                                                                        Javascript
                                                                    </span>
                                                        </div>
                                                        <div class="spanList">
                                                                    <span class="first">
                                                                        <i class="fas fa-caret-right"></i>
                                                                    </span>
                                                            <span class="second">
                                                                        C#
                                                                    </span>
                                                        </div>
                                                        <div class="spanList">
                                                                    <span class="first">
                                                                        <i class="fas fa-caret-right"></i>
                                                                    </span>
                                                            <span class="second">
                                                                        Python
                                                                    </span>
                                                        </div>
                                                        <div class="spanList">
                                                                    <span class="first">
                                                                        <i class="fas fa-caret-right"></i>
                                                                    </span>
                                                            <span class="second">
                                                                        SQL
                                                                    </span>
                                                        </div>
                                                    </div>



                                                </div>
                                            </div>
                                        </div>
                                    </article>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--NOTE: If I have a future problem with the footer, I will move it outside the 'FullContent' div-->
        <div class="row Footer g-0">
            <div class="col-12">
                <p>Website Coded Line By Line From Scratch By: <strong>Eduardo Botelho</strong></p>
            </div>
        </div>

</div>
<?php get_footer(); ?>