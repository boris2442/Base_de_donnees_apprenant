<?php

require_once "connexion.php";

$req = "SELECT * FROM apprenant ORDER BY id ASC";
$re = $cnx->prepare($req);
$re->execute();
$tab = $re->fetchAll();



?>



<!doctype html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="./output.css" rel="stylesheet">
</head>

<body class="overflow-x-hidden" data-barba="wrapper">
    <header class="h-15vh w-[100vw] flex justify-around bg-blue-400 items-center text-white font-bold sticky top-[0] z-[10]">

        <div class="">
            <img src="/asset/logo AM corporation.jpeg" alt="" class="w-[100px] h-[100px] rounded-full ">
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
    <!-- <div class="container-bandes">
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
    <div class="wipe-transition"></div> -->
    <main data-barba="container" data-barba-namespace="enregistrement">
        <!-- <div class="accueil2"></div> -->
    </main>
    <section class="min-h-[100vh]" id="">
        <h2 class="titleEnregistrement text-center text-3xl p-[30px] font-bold">Listes des apprenants</h2>
        <!-- <div class="flex justify-center h-[80px]  gap-[30px]  w-[100%]">

            <div class="">
                <a href="#" class="enregistrement font-bold text-2xl rounded-full w-[300px] bg-blue-400 p-[10px]">Ajouter un etudiant</a>
            </div>
            <div class="">
                <a href="#" class="enregistrement font-bold text-2xl rounded-full w-[300px] bg-blue-400 p-[10px]">Retour</a>
            </div>
           
        </div> -->
        <table class="table w-[100%]  ">
            <thead>
                <tr class=" px-[30px] py-[30px] text-2xl border-2 border-solid border-[#333] bg-blue-950 text-[#fff] ">
                    <td class="hover:text-blue-400">ID</td>
                    <td class="hover:text-blue-400">Nom</td>
                    <td class="hover:text-blue-400">Etablissement</td>
                    <td class="hover:text-blue-400">Classe</td>
                    <td class="hover:text-blue-400">Serie</td>
                    <td class="hover:text-blue-400">Moyenne</td>
                    <td class="hover:text-blue-400">Contact</td>
                    <td class="hover:text-blue-400">Contact_parent</td>
                    <td class="hover:text-blue-400">Concours</td>
                    <td class="hover:text-blue-400">Actions</td>



                </tr>
            </thead>
            <tbody>
            <tr>
                <?php foreach ($tab as $table): ?>
                    <th><?= $table["id"]; ?></th>
                    <th><?= $table["nom"]; ?></th>
                    <th><?= $table["etablissement"]; ?></th>
                    <th><?= $table["classe"]; ?></th>
                    <th><?= $table["serie"]; ?></th>
                    <th><?= $table["moyenne"]; ?></th>
                    <th><?= $table["contact"]; ?></th>
                    <th><?= $table["contact_p"]; ?></th>
                    <th><?= $table["concours"]; ?></th>
                    <th>
                        <a href="modifier.php?id=<?= $table["id"]?>">Modifier</a>  
                        <a href="supprimer.php?id=<?= $table["id"]?>">Supprimer</a>
                 
                        </th>
            </tr>
        <?php endforeach; ?>
        </tbody>
 </table>
    
            </section>
            <section class=" mt-[30px] ">

                <div class="pt-[20px] flex justify-around">

                    <p class="paragrapheLink font-bold">
                        <i class="fa-brands fa-google text-2xl text-[#D14836]"></i>
                        <a href="mailto:" class="">amcorporation@gmail.com</a>
                    </p>
                    <p class="paragrapheLink font-bold">


                        <a href="https:wa.me/655476087" class=""> <i class="fa-brands fa-whatsapp text-3xl text-green-600"></i></a>
                        AM Corporation
                    </p>
                    <p class="paragrapheLink font-bold">
                        <i class="fa-sharp fa-solid fa-location-dot text-2xl text-[#D14836]"></i>
                        <a href="#" class="">Bafousam entree de la ville</a>
                    </p>
                </div>
            </section>
            <footer class="">
                <p class="copy font-bold text-2xl text-center p-[20px]">propulsé par <a href="aubinborissimotsebo@gmail.com" class="text-blue-600">simodev infinity</a> 2025</p>
            </footer>

            <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/gsap.min.js" integrity="sha512-7eHRwcbYkK4d9g/6tD/mhkf++eoTHwpNM9woBxtPUBWm67zeAfFC+HrdoE2GanKeocly/VxeLvIqwvCdk7qScg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
            <script src="https://cdn.jsdelivr.net/npm/@barba/core"></script>
            <script src="https://unpkg.com/scrollreveal"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/TypewriterJS/2.21.0/core.min.js" integrity="sha512-fo6X5UXaTRf/mHuTYJBR3Q/rpPa+LB2KUyDMROluMkZnfEEF4DhQyI5AHRoAe/zzu1Ty58MMmZXG4SuVEpXsng==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
            <script src="/javascript/script.js"></script>
</body>

</html>