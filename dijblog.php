<!-- Instruktion til webbrowser om at vi kører HTML5 -->
<!DOCTYPE html>

<!-- html starter og slutter hele dokumentet / lang=da: Fortæller siden er på dansk -->
<html class="h-full" lang="da">

<!-- I <head> har man opsætning - det ser brugeren ikke, men det fortæller noget om siden -->
<head>
    <!-- Sætter tegnsætning til utf-8 som bl.a. tillader danske bogstaver -->
    <meta charset="utf-8">

    <!-- Titel som ses oppe i browserens tab mv. -->
    <title>Din indre Juvel Blog</title>
    <meta name="description" content="Din indre Juvel er en forretning der udbyder spirituelle og alternative produkter, som f.eks. røgelse og urter. ">
    <!-- Metatags der fortæller at søgemaskiner er velkomne, hvem der udgiver siden og copyright information -->
    <meta name="robots" content="All">
    <meta name="author" content="Udgiver">
    <meta name="copyright" content="Information om copyright">

    <!-- Sikrer man kan benytte CSS ved at tilkoble en CSS fil -->
    <link href=".output.css" rel="stylesheet">
    <link href="style.css" rel="stylesheet" type="text/css">
    <script src="https://kit.fontawesome.com/b7f7f27b49.js" crossorigin="anonymous"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Electrolize&display=swap" rel="stylesheet">
    <!-- Sikrer den vises korrekt på mobil, tablet mv. ved at tage ift. skærmstørrelse - bliver brugt til responsive websider -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<!-- i <body> har man alt indhold på siden som brugeren kan se -->
<body class="h-full bg-primary">
<?php include "includes/nav.php"; ?>

<div class="justify-center flex">
    <img class="w-2/4" src="images/dijlogofooterhvid.svg" alt="logo">
</div>
<div>
    <h1 class="text-text p-4 text-center">
        Din Indre Juvel
    </h1>
</div>
<!--link til hjemmeside-->
<div class="text-center">
    <a class="text-decoration-none" href="https://github.com/loay0013/dinindrejuvel" target="_blank">
        <h2 class="bg-link">>/Link til Github></h2></a>
</div>
<!--text-->

<h2 class="text-text text-center pt-4">
    >/eksamensprojekt>
</h2>
<div class="container mx-auto">
    <p class="mt-4 p-4 text-center  text-text">
        I den projekt tog jeg udfordringen op at bygge en hjemmeside fra bunden for "Din Indre Juvel blog",
        en platform dedikeret til wellness og spirituel healing.
        Projektet involverede omfattende arbejde med PHP for at skabe en skræddersyet løsning,
        der imødekommer specifikke behov.
        Jeg udviklede et mini CMS-system, For at skabe en indbydende og brugervenlig oplevelse anvendte jeg HTML og CSS sammen med Bootstrap,
        hvilket sikrede et responsivt og æstetisk tiltalende design. Backend-funktionaliteten blev understøttet af MySQL,
        hvilket gav en solid database-struktur til at håndtere brugerdata og produktinformation effektivt.
    </p>
</div>
<!--link næste projekt-->
<div class="text-center pb-5">
    <a class="text-decoration-none næste"  href="Musik.php"><h2>>/Næste projekt></h2></a>
</div>


<?php include "includes/footer.php"; ?>


</body>
</html>
