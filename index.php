<!-- Instruktion til webbrowser om at vi kører HTML5 -->
<!DOCTYPE html>

<!-- html starter og slutter hele dokumentet / lang=da: Fortæller siden er på dansk -->
<html class="h-full" lang="da">

<!-- I <head> har man opsætning - det ser brugeren ikke, men det fortæller noget om siden -->
<head>
    <!-- Sætter tegnsætning til utf-8 som bl.a. tillader danske bogstaver -->
    <meta charset="utf-8">

    <!-- Titel som ses oppe i browserens tab mv. -->
    <title>Lasellah|portfolio</title>
    <meta name="description" content=" ">

    <!-- Metatags der fortæller at søgemaskiner er velkomne, hvem der udgiver siden og copyright information -->
    <meta name="robots" content="All">
    <meta name="author" content="Udgiver">
    <meta name="copyright" content="Information om copyright">

    <!-- Sikrer man kan benytte CSS ved at tilkoble en CSS fil -->
    <link href=".output.css" rel="stylesheet" type="text/css">
    <link href="style.css" rel="stylesheet" type="text/css">
    <script src="https://cdn.jsdelivr.net/npm/alpinejs@3.x/dist/alpine.js" defer></script>
    <script src="https://kit.fontawesome.com/b7f7f27b49.js" crossorigin="anonymous"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Electrolize&display=swap" rel="stylesheet">
    <!-- Sikrer den vises korrekt på mobil, tablet mv. ved at tage ift. skærmstørrelse - bliver brugt til responsive websider -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="google-site-verification" content="J6u67RSpJQc8zAta_JrpOyyXqgVbY5zUhOjR_iK6WEQ" />
</head>

<!-- i <body> har man alt indhold på siden som brugeren kan se -->
<body class="bg-primary h-full">

<!-- Her skal sidens indhold ligge -->

<?php include "includes/nav.php"; ?>


<header class="relative h-full">
    <div class="video">
        <video playsinline autoplay muted loop id="myVideo" class="absolute w-full">
            <source src="images/HTML%20Tutorial%20for%20Beginners%20HTML%20Crash%20Course%20%5B2021%5D.mp4">
        </video>
    </div>

    <div class="text-header1 text-center text-white text-8xl pt-3">
        <p class="text-text text-5xl">
            velkommen til
        </p>
        <h1 class="pt-3 text-text text-3xl">
            >/Lasellah>
        </h1>
    </div>

    <div class="mt-5 btn1">
        <a class="p-3 flex justify-center items-center rounded-none" href="#projekter">
            <p class="m-0 text-white">>/Projekter></p>
        </a>
</header>

<section class="container mx-auto">
    <div class="flex flex-wrap">
        <div id="ommig" class="flex items-center justify-center pt-5 w-full md:w-1/2">
            <img class="card-img max-w-xs rounded-lg" src="images/IMG_6051.JPG" alt="mig selv">
        </div>

        <div class="w-full md:w-1/2 p-5 flex flex-col justify-end">
            <h2 class="text-center text-text pt-4">
                >/Om mig>
            </h2>
            <p class="text-text text-center p-5">
                Mit navn er Loay, 29 år og studerende inden for webudvikling.
                <br>
                Min styrke ligger inden for en bred vifte af teknologier, herunder HTML, CSS, samt forskellige CSS-frameworks.
                Derudover har jeg solid erfaring med PHP, databaser, og WordPress - inklusiv kodning og tilpasning i WordPress-miljøet.
                Jeg besidder også kompetencer inden for SEO, hvilket forstærker mit arbejde med webudvikling.
            </p>
            <div class="flex justify-center pb-5">
                <a class=" bg-bg-btn p-3 rounded-none bg-transparent" href="images/cv.pdf" target="_blank">
                    <p class="m-0 text-white">
                        >/Se Mit CV>
                    </p>
                </a>
            </div>
        </div>
    </div>
</section>

<div class="flex justify-center">
    <div class="line w-3/4 mt-10">
    </div>
</div>


<section class="container mx-auto">
    <div id="projekter">
        <h2 class="text-white text-center pt-5">
            >/Projekter>
        </h2>
        <div class="flex flex-col md:flex-row pt-5">
            <a class="text-decoration-none" href="DinIndreJuvel.php">
                <img class="pt-5" src="images/dij.png" alt="Asellah">
                <h2 class="text-white pt-3 text-center">
                    Din Indre Juvel
                </h2>
            </a>

    <a class="text-decoration-none" href="marittima.php">
        <img class="pt-5" src="images/marittima.png" alt="marittima">
        <h2 class="text-center pt-3 text-text">
            Marittima
        </h2>
    </a>
    <a class="text-decoration-none" href="Musik.php">
        <img class="pt-5" src="images/Melsroom.png" alt="melsroom">
        <h2 class="text-text text-center pt-3">
            Mel´s Room
        </h2>
    </a>

    </div>
    </div>

</section>

<div class="flex justify-center">
    <div class="line w-3/4 mt-10">
    </div>
</div>

<section class="mt-12">
    <div id="kontakt">
           <div>
                <p class="text-center text-text p-4">
                  >/Håber at jeg har vagt din interesse.
                  <br>
                  Har du lyst til at vi skal arbejde sammen,
                  eller vil du vide mere <br>kan jeg let kontaktes via denne formular>
                 </p>
            </div>

    </div>


    <div class=" mt-2 flex-col flex items-center">
        <form action="mailto:louy.hajjo21@gmail.com" method="post" enctype="text/plain">
            <div class="flex flex-col items-center ">
              <div class="pt-3">
                <p class="text-text">>/Navn></p>
                <input class="px-5 py-2 border-0 rounded-0" id="Name" name="Navn" type="text">
              </div>
            <div class="pt-3" >
                <p class="text-text">>/Mobilnummer></p>
                <input class="px-5 py-2 rounded-0 border-0" id="phone" name="phone" type="text">
            </div>
            <div class="pt-3" >
                <p class="text-text">>/Email></p>
                <input class="px-5 py-2 rounded-0 border-0" id="email" name="email" type="email">
            </div>
            <div class="pt-3" >
                <p class="text-text">>/Besked></p>
                <textarea class="px-5 py-2 rounded-0 border-0" id="besked" name="besked" ></textarea>
            </div>
            </div>
            <div class="bg-text mt-3">
                <input  type="submit"  value="Send" class="px-4 py-2  border-0 text-center rounded-0">
            </div>
</section>



<?php include "includes/footer.php"; ?>

</body>
</html>
