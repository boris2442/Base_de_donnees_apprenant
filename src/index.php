
<?php

require_once"connexion.php";



?>



<!doctype html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link href="output.css" rel="stylesheet">
</head>
<body class="overflow-x-hidden" data-barba="wrapper">
    <header class="h-15vh w-[100vw] flex justify-around bg-blue-400 items-center text-white font-bold sticky top-[0] z-[10]">

        <div class="">
            <img src="../asset/logo AM corporation.jpeg" alt="" class="w-[100px] h-[100px] rounded-full ">
        </div>
        <nav class="">
            <ul class="flex gap-[30px]">
                <li>
                    <a href="index.php" class="text-1.75xl hover:text-[#333]">Accueil</a>
                </li>
                <li>
                    <a href="enregistrement.php" class="text-1.75xl hover:text-[#333]">S'enregistrer</a>
                </li>
                <li>
                    <a href="table.php" class="text-1.75xl hover:text-[#333]">Table</a>
                </li>
            </ul>
        </nav>
    </header>
    <div class="container-bandes">
        <div class="bandes"></div>
        <div class="bandes"></div>
        <div class="bandes"></div>
        <div class="bandes"></div>
        <div class="bandes"></div>
        <div class="bandes"></div>
        <div class="bandes"></div>
        <div class="bandes"></div>
        <div class="bandes"></div>
        <div class="bandes"></div>
     </div>
     <div class="wipe-transition"></div>
     <main data-barba="container" data-barba-namespace="home">
        <!-- <div class="accueil1"></div> -->
    </main>
    <section id="" class="pt-[30px] ">
        <div class=" flex justify-between gap-[30px] px-[40px]">
        <div class="flex flex-col justify-center ">

            <h1 class="titleHome text-2xl font-bold pb-[15px]"></h1>
            <p class="paragraphe font-semibold text-1.5xl">Boostez vos chances de réussite avec nos cours de préparation aux concours<br> et nos séances de révision sur mesure. 🚀 Que vous visiez un examen national<br> ou une admission sélective, nous vous accompagnons avec des ressources adaptées<br> et un encadrement de qualité.

            📝 Cours interactifs | 🎓 Coaching personnalisé | 📈 Méthodes efficaces
            
            Rejoignez-nous et atteignez vos objectifs avec confiance ! 💡💪</p>
            <div class="pt-[25px]">
                
                <a href="enregistrement.php" class="enregistrement bg-blue-400 py-[10px] px-[20px] text-2xl text-[#000] rounded-full font-bold z-10">S'enregistrer</a>
            </div>
        </div>
        <div class="">
            <img src="/asset/istockphoto-502282478-1024x1024.jpg" alt="" class="imageHome">
        </div>

        </div>
    </section>
<section class=" mt-[30px] ">
  
    <div class="pt-[20px] flex justify-around">

        <p class="font-bold">
            <i class="fa-brands fa-google text-2xl text-[#D14836]"></i>
            <a href="mailto:aubinborissimotsebo@gmail.com" class="" target="_blank">amcorporation@gmail.com</a>
        </p>
        <p class="font-bold">
           
           
            <a href="https:wa.me/655476087" class="" target="_blank"> <i class="fa-brands fa-whatsapp text-3xl text-green-600"></i></a>
            AM Corporation
        </p>
        <p class="font-bold">
            <i class="fa-sharp fa-solid fa-location-dot text-2xl text-[#D14836]"></i>
            <a href="#" class="">Bafousam entree de la ville</a>
        </p>
    </div>
</section>
<footer class="">
    <p class="copy font-bold text-2xl text-center p-[20px]">propulsé par <a href="aubinborissimotsebo@gmail.com" class="text-blue-600" target="_blank">simodev infinity</a>  2025</p>
</footer>

<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/gsap.min.js" integrity="sha512-7eHRwcbYkK4d9g/6tD/mhkf++eoTHwpNM9woBxtPUBWm67zeAfFC+HrdoE2GanKeocly/VxeLvIqwvCdk7qScg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdn.jsdelivr.net/npm/@barba/core"></script>
<script src="https://unpkg.com/scrollreveal"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/TypewriterJS/2.21.0/core.min.js" integrity="sha512-fo6X5UXaTRf/mHuTYJBR3Q/rpPa+LB2KUyDMROluMkZnfEEF4DhQyI5AHRoAe/zzu1Ty58MMmZXG4SuVEpXsng==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="../javascript/script.js"></script>
</body>
</html>