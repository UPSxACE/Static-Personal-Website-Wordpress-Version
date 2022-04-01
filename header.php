<!DOCTYPE html>
<html lang="en">
<head>
    <!-- This website was coded LINE by LINE by: Eduardo Botelho ^^ -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> <!-- important to make website responsive -->
    <title>Eduardo Botelho</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.css" rel="stylesheet">
    <link href="<?php echo get_template_directory_uri(); ?>/style.css" rel="stylesheet">
    <script>
        function switchTab(tabID, contactID) {
            var tab = document.getElementById(tabID)
            if (tab.classList.contains("active")){

            } else {
                var hamburguer = document.getElementById("navbarSupportedContent");
                hamburguer.classList.remove("show")
                if (hamburguer.classList.contains("collapsing")){
                    setTimeout(() => { hamburguer.classList.remove("show") }, 200);
                }

                var triggerElement = document.getElementById(tabID)
                var tabTrigger = new bootstrap.Tab(triggerElement)
                tabTrigger.show();

                var ListActives = document.getElementsByClassName("active")
                for(let i = 0; i< ListActives.length; i++){
                    ListActives[i].classList.remove("active");
                }

                var triggerElement2 = document.getElementById(tabID)
                triggerElement2.classList.add("active");

            };





        };
    </script>
    <script src="https://kit.fontawesome.com/13b7256d55.js" crossorigin="anonymous"></script>


    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Alatsi&display=swap" rel="stylesheet">


    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Catamaran:wght@300;400;500;700;900&display=swap" rel="stylesheet">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;300;400;500;600;700&display=swap" rel="stylesheet">


    <?php wp_head();?>
</head>
<body>
<div class="main">