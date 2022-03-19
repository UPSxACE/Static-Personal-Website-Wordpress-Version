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

                                <!-- CONTACT ME -->
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="contact-tab" data-bs-toggle="tab" data-bs-target="#contact" type="button" role="tab" aria-controls="home" aria-selected="true">CONTACT ME</button>
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

                            <!--CONTACT ME-->
                            <li class="nav-item" role="presentation">
                                <button type="button" onclick="switchTab('contact-tab', 'contactTriggerContact')" class="btn btn-dark btn-lg" id="contactTrigger6">CONTACT ME</button>
                            </li>

                        </ul>
                    </div> <!-- navbar content-->
                </nav>
            </header>
        </div>
        <div class="row MainContent g-0">
            <div class="col-12 pictureDivider">
                <img class="pic" src="<?php echo get_template_directory_uri(); ?>/img/pic3.jpg">
                <div class="outsideColumn tab-content" id="myTabContent">
                    <!-- HOME -->
                    <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                        <div class="container-fluid contentHome">
                            <div class="row row1 g-0">
                                <div class="col-12 outsideColumn">

                                    <article>

                                        <div class="contentBlock">

                                            <div class="centeredContent">
                                                <img class="squarepic" src="<?php echo get_template_directory_uri(); ?>/img/square3.jpg">
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
                                                            <span class="first">Location:</span>
                                                            <span class="second">Bragança, Portugal </span>
                                                        </div>
                                                        <div class="spaced-span1">
                                                            <span class="first">Languages:</span>
                                                            <span class="second">Portuguese, English</span>
                                                        </div>
                                                        <div class="spaced-span1">
                                                            <span class="first">Degree:</span>
                                                            <span class="second">Currently Studying Software Development </span>
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

                    <!-- CONTACT ME -->
                    <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
                        <div class="container-fluid contentContact">
                            <div class="row row1 g-0">
                                <div class="col-12 outsideColumn">

                                    <article>
                                        <div class="contentBlock">
                                            <div class="container-fluid ContentByRows">
                                                <div class="row g-0">
                                                    <!-- GET IN TOUCH -->
                                                    <div class="col-12">
                                                        <div class="titleWithLine">
                                                            <h1 class="titleWithLine">GET IN TOUCH</h1>
                                                            <div class="titleLine">
                                                                <span class="titleLine"></span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-12 squareWrapper">
                                                        <div class="row g-0">
                                                            <div class="col-4 square">
                                                                <i class="fa-solid fa-location-dot"></i>
                                                                <span>Bragança, Portugal</span>
                                                            </div>
                                                            <div class="col-4 square">
                                                                <i class="fa-solid fa-envelope"></i>
                                                                <span>eduardo11224b@gmail.com</span>
                                                            </div>
                                                            <div class="col-4 square">
                                                                <i class="fa-solid fa-phone"></i>
                                                                <span>+351 962 075 694</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-6 left"><!--Eu.Jotform.Com Script-->
                                                        <script src="https://cdn01.jotfor.ms/static/prototype.forms.js" type="text/javascript"></script>
                                                        <script src="https://cdn02.jotfor.ms/static/jotform.forms.js?3.3.31150" type="text/javascript"></script>
                                                        <script defer src="https://cdnjs.cloudflare.com/ajax/libs/punycode/1.4.1/punycode.js"></script>
                                                        <script type="text/javascript">	JotForm.newDefaultTheme = true;
                                                            JotForm.extendsNewTheme = false;
                                                            JotForm.newPaymentUIForNewCreatedForms = false;
                                                            JotForm.newPaymentUI = true;

                                                            JotForm.setConditions([{"action":[{"field":"9","visibility":"Show","id":"action_0_1579704830003"}],"id":"1579704830003","index":"0","link":"Any","priority":"0","terms":[{"field":"8","operator":"equals","value":"Other (Please specify...)"}],"type":"field"}]);
                                                            JotForm.init(function(){
                                                                /*INIT-START*/
                                                                if (window.JotForm && JotForm.accessible) $('input_17').setAttribute('tabindex',0);
                                                                setTimeout(function() {
                                                                    $('input_17').hint('Name');
                                                                }, 20);
                                                                setTimeout(function() {
                                                                    $('input_6').hint('Email');
                                                                }, 20);
                                                                if (window.JotForm && JotForm.accessible) $('input_11').setAttribute('tabindex',0);
                                                                JotForm.setCustomHint( 'input_11', 'Message' );
                                                                /*INIT-END*/
                                                            });

                                                            JotForm.prepareCalculationsOnTheFly([null,null,{"name":"sendMessage","qid":"2","text":"Send Message","type":"control_button"},null,null,null,{"name":"email6","qid":"6","subLabel":"","text":"","type":"control_email"},null,null,null,null,{"name":"feedbackAbout11","qid":"11","text":"","type":"control_textarea"},null,null,null,null,null,{"description":"","name":"nome","qid":"17","subLabel":"","text":"","type":"control_textbox"}]);
                                                            setTimeout(function() {
                                                                JotForm.paymentExtrasOnTheFly([null,null,{"name":"sendMessage","qid":"2","text":"Send Message","type":"control_button"},null,null,null,{"name":"email6","qid":"6","subLabel":"","text":"","type":"control_email"},null,null,null,null,{"name":"feedbackAbout11","qid":"11","text":"","type":"control_textarea"},null,null,null,null,null,{"description":"","name":"nome","qid":"17","subLabel":"","text":"","type":"control_textbox"}]);}, 20);
                                                        </script>
                                                        <style type="text/css">@media print{.form-section{display:inline!important}.form-pagebreak{display:none!important}.form-section-closed{height:auto!important}.page-section{position:initial!important}}</style>
                                                        <link type="text/css" rel="stylesheet" href="https://cdn01.jotfor.ms/themes/CSS/5e6b428acc8c4e222d1beb91.css?themeRevisionID=5eb3b4ae85bd2e1e2966db96"/>
                                                        <link type="text/css" rel="stylesheet" href="https://cdn02.jotfor.ms/css/styles/payment/payment_styles.css?3.3.31150" />
                                                        <link type="text/css" rel="stylesheet" href="https://cdn03.jotfor.ms/css/styles/payment/payment_feature.css?3.3.31150" />
                                                        <form class="jotform-form" action="https://submit.jotformeu.com/submit/220516004677350/" method="post" name="form_220516004677350" id="220516004677350" accept-charset="utf-8" autocomplete="on">
                                                            <input type="hidden" name="formID" value="220516004677350" />
                                                            <input type="hidden" id="JWTContainer" value="" />
                                                            <input type="hidden" id="cardinalOrderNumber" value="" />
                                                            <div role="main" class="form-all">
                                                                <style>
                                                                    .form-all:before { background: none;}
                                                                </style>
                                                                <ul class="form-section page-section">
                                                                    <li class="form-line" data-type="control_textbox" id="id_17">
                                                                        <label class="form-label form-label-top form-label-auto" id="label_17" for="input_17">  </label>
                                                                        <div id="cid_17" class="form-input-wide" data-layout="full">
                                                                            <input type="text" id="input_17" name="q17_nome" data-type="input-textbox" class="form-textbox" data-defaultvalue="" style="width:310px" size="310" value="" placeholder="Name" data-component="textbox" aria-labelledby="label_17" />
                                                                        </div>
                                                                    </li>
                                                                    <li class="form-line" data-type="control_email" id="id_6">
                                                                        <label class="form-label form-label-top form-label-auto" id="label_6" for="input_6">  </label>
                                                                        <div id="cid_6" class="form-input-wide" data-layout="full">
                                                                            <input type="email" id="input_6" name="q6_email6" class="form-textbox validate[Email]" data-defaultvalue="" style="width:310px" size="310" value="" placeholder="Email" data-component="email" aria-labelledby="label_6" />
                                                                        </div>
                                                                    </li>
                                                                    <li class="form-line jf-required" data-type="control_textarea" id="id_11">
                                                                        <label class="form-label form-label-top form-label-auto" id="label_11" for="input_11">

                                                                        </label>
                                                                        <div id="cid_11" class="form-input-wide jf-required" data-layout="full">
                                                                            <textarea id="input_11" class="form-textarea validate[required]" name="q11_feedbackAbout11" style="width:648px;height:163px" data-component="textarea" required="" aria-labelledby="label_11"></textarea>
                                                                        </div>
                                                                    </li>
                                                                    <li class="form-line" data-type="control_button" id="id_2">
                                                                        <div id="cid_2" class="form-input-wide" data-layout="full">
                                                                            <div data-align="left" class="form-buttons-wrapper form-buttons-left   jsTest-button-wrapperField">
                                                                                <button id="input_2" type="submit" class="btn btn-dark btn-lg form-submit-button submit-button jf-form-buttons jsTest-submitField" data-component="button" data-content="">
                                                                                    Send Message
                                                                                </button>
                                                                            </div>
                                                                        </div>
                                                                    </li>
                                                                    <li style="display:none">
                                                                        Should be Empty:
                                                                        <input type="text" name="website" value="" />
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                            <script>
                                                                JotForm.showJotFormPowered = "new_footer";
                                                            </script>
                                                            <script>
                                                                JotForm.poweredByText = "Powered by Jotform";
                                                            </script>
                                                            <input type="hidden" class="simple_spc" id="simple_spc" name="simple_spc" value="220516004677350" />
                                                            <script type="text/javascript">
                                                                var all_spc = document.querySelectorAll("form[id='220516004677350'] .si" + "mple" + "_spc");
                                                                for (var i = 0; i < all_spc.length; i++)
                                                                {
                                                                    all_spc[i].value = "220516004677350-220516004677350";
                                                                }
                                                            </script>
                                                            <!-- looks pointless
                                                            <div class="formFooter-heightMask">
                                                            </div>
                                                            -->
                                                        </form>
                                                        <script type="text/javascript">JotForm.forwardToEu=true;</script><script src="https://cdn.jotfor.ms//js/vendor/smoothscroll.min.js?v=3.3.31150"></script>
                                                        <script src="https://cdn.jotfor.ms//js/errorNavigation.js?v=3.3.31150"></script>
                                                    </div>
                                                    <div class="col-6 right map">
                                                        <div class="mapouter"><div class="gmap_canvas"><iframe id="gmap_canvas" src="https://maps.google.com/maps?q=Largo%20Coronel%20Albino%20Lopo&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe><a href="https://123movies-to.org"></a><br><style>.mapouter{position:relative;text-align:right;}</style><a href="https://www.embedgooglemap.net"></a><style>.gmap_canvas {overflow:hidden;background:none!important;}</style></div></div>
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