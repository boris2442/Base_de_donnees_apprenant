<?php

require_once"connexion.php";

if(isset($_GET['id'])){

    $id = $_GET['id'];

$req="SELECT * FROM apprenant WHERE id=?";

$stmt = $cnx->prepare($req);

$stmt->execute([$id]);

$resultat = $stmt->fetchAll();

}
?>

<!doctype html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="./output.css" rel="stylesheet">
</head>

<body class="overflow-x-hidden" data-barba="wrapper">
    <header
        class="h-15vh w-[100vw] flex justify-around bg-blue-400 items-center text-white font-bold sticky top-[0] z-[10]">

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
        <!-- <div class="accueil3"></div> -->
    </main>
    <section class="" id="">
        <h2 class="title-table text-center text-2xl font-bold py-[30px]">Modifier les donnees de l'apprenant!</h2>
        <form action="" class="pt-[10px] w-[100vw]" method="POST">

        <?php foreach($resultat as $resultate): ?>
            
            <div class=" flex flex-col gap-[20px] w-[100%]">

                <div class="flex flex-col mx-auto text-left justify-star w-[100%]">


                    <input type="text" id="studentName"
                        class=" outline-none bg-[#333] w-[80%] p-[10px] rounded mx-[auto] text-white" name="nom" value="<?=$resultate["nom"]; ?>"
                        placeholder="Entrez le nom complet">
                </div>
                <div class="w-[100%] flex flex-col mx-auto text-left
                justify-start">

                    <input type="text" class="outline-none bg-[#333] w-[80%] p-[10px] rounded mx-[auto] text-white"
                        id="studentName" name="etablissement"value="<?=$resultate['etablissement'] ;?>" placeholder="Entrez l'etablissement" >
                </div>
                <div class="w-[100%] flex flex-col mx-auto text-left
                justify-start">

                    <input type="text" id="studentName"
                        class="outline-none bg-[#333] w-[80%] p-[10px] rounded mx-[auto] text-white" name="classe"  value="<?=$resultate['classe']; ?>"
                        placeholder="Entrez la classe">
                </div>
                <div class="w-[100%] flex flex-col mx-auto text-left
                justify-start">

                    <input type="text" id="studentName"
                        class="outline-none bg-[#333] w-[80%] p-[10px] rounded mx-[auto] text-white" name="serie"  value="<?=$resultate['serie']; ?>"
                        placeholder="Entrez votre serie">
                </div>
                <div class="w-[100%] flex flex-col mx-auto text-left
                justify-start">

                    <input type="text" id="studentName"  placeholder="Entrez la moyenne reçu au probatoire"
                        class="outline-none bg-[#333] w-[80%] p-[10px] rounded mx-[auto] text-white" name="moyenne"  value="<?=$resultat['moyenne']; ?>">
                </div>
                <div class="w-[100%] flex flex-col mx-auto text-left
                justify-start">

                    <input type="text" id="studentName"
                        class="outline-none bg-[#333] w-[80%] p-[10px] rounded mx-[auto] text-white" name="contact" value="<?=$resultate['contact']; ?>"
                        placeholder="Contact de l'apprenant" >
                </div>
                <div class="w-[100%] flex flex-col mx-auto text-left
                justify-start">

                    <input type="tel" id="studentEmail"
                        class="outline-none bg-[#333] w-[80%] p-[10px] rounded mx-[auto] text-white" name="contact_p" value="<?=$resultate['contact_p']?>"
                        placeholder="Entrez le contact des parents" > 
                </div>
                <div class="w-[100%] flex flex-col mx-auto text-left
                justify-start">

                    <input type="text" id="studentEmail"
                        class="outline-none bg-[#333] w-[80%] p-[10px] rounded mx-[auto] text-white" name="concours" value="<?=$resultate['concours'];?>"
                        placeholder="Entrez concours" >
                </div>
                <div class="w-[100%] flex flex-col mx-auto text-left
                justify-start">

                    <input type="submit"
                        class="cursor-pointer outline-none bg-[#333] w-[80%] p-[10px] rounded mx-[auto] text-white hover:bg-blue-950"
                        value=" Modifier l'apprenant" name="ok">
                       
                </div>
            </div>
            <?php endforeach; ?>
        </form>


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
                <a href="#" class="" target="_blank">Bafousam entree de la ville</a>
            </p>
        </div>
    </section>
    <footer class="">
        <p class="copy font-bold text-2xl text-center p-[20px]">propulsé par <a href="aubinborissimotsebo@gmail.com" class="text-blue-600">simodev infinity</a>  2025</p>
    </footer>


    


    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/gsap.min.js" integrity="sha512-7eHRwcbYkK4d9g/6tD/mhkf++eoTHwpNM9woBxtPUBWm67zeAfFC+HrdoE2GanKeocly/VxeLvIqwvCdk7qScg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdn.jsdelivr.net/npm/@barba/core"></script>
    <script src="https://unpkg.com/scrollreveal"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/TypewriterJS/2.21.0/core.min.js"
        integrity="sha512-fo6X5UXaTRf/mHuTYJBR3Q/rpPa+LB2KUyDMROluMkZnfEEF4DhQyI5AHRoAe/zzu1Ty58MMmZXG4SuVEpXsng=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="/javascript/script.js"></script>

</body>

</html>