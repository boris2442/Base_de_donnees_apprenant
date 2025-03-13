
<?php

require_once"connexion.php";
$message="";

if(isset($_POST['ok'])){

    $nom=htmlspecialchars($_POST['nom']);
    $etablissement=htmlspecialchars($_POST['etablissement']);
    $classe=htmlspecialchars($_POST['classe']);
    $serie=htmlspecialchars($_POST['serie']);
    $moyenne=floatval($_POST['moyenne']);
    $contact=htmlspecialchars($_POST['contact']);
    $contact_p=htmlspecialchars($_POST['contact_p']);
    $concours=htmlspecialchars($_POST['concours']);

    if(empty($nom) || empty($etablissement) || empty($classe) || empty($serie) || empty($moyenne) || empty($contact) || empty($contact_p) || empty($concours)){

        $message="Veuillez remplir tout les champs";
    }else{

    $req = $cnx->prepare("INSERT INTO  apprenant (nom, etablissement, classe, serie, moyenne, contact, contact_p, concours) VALUES (?,?,?,?,?,?,?,?)");
    $req->execute([$nom, $etablissement, $classe, $serie, $moyenne, $contact, $contact_p, $concours]);
 
    $message="Apprenant inserer avec succes!";

}
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
     <main data-barba="container" data-barba-namespace="enregistrement">
        <!-- <div class="accueil3"></div> -->
    </main>
    <section class="" id="">
        <h2 class="title-table text-center text-2xl font-bold py-[30px]">Veuillez remplir ce formulaire pour ajouter un
            nouvel etudiant</h2>
        <form action="" class="pt-[10px] w-[100vw]" method="POST">
            <?=$message?>
            <div class=" flex flex-col gap-[20px] w-[100%]">

                <div class="flex flex-col mx-auto text-left justify-star w-[100%]">


                    <input type="text" id="studentName"
                        class=" outline-none bg-[#333] w-[80%] p-[10px] rounded mx-[auto] text-white" name="nom"
                        placeholder="Entrez le nom complet">
                </div>
                <div class="w-[100%] flex flex-col mx-auto text-left
                justify-start">

                    <input type="text" class="outline-none bg-[#333] w-[80%] p-[10px] rounded mx-[auto] text-white"
                        id="studentName" name="etablissement" placeholder="Entrez l'etablissement">
                </div>
                <div class="w-[100%] flex flex-col mx-auto text-left
                justify-start">

                    <input type="text" id="studentName"
                        class="outline-none bg-[#333] w-[80%] p-[10px] rounded mx-[auto] text-white" name="classe"
                        placeholder="Entrez la classe">
                </div>
                <div class="w-[100%] flex flex-col mx-auto text-left
                justify-start">

                    <input type="text" id="studentName"
                        class="outline-none bg-[#333] w-[80%] p-[10px] rounded mx-[auto] text-white" name="serie"
                        placeholder="Entrez votre serie">
                </div>
                <div class="w-[100%] flex flex-col mx-auto text-left
                justify-start">

                    <input type="text" id="studentName"
                        class="outline-none bg-[#333] w-[80%] p-[10px] rounded mx-[auto] text-white" name="moyenne"
                        placeholder="Entrez la moyenne reçu au probatoire">
                </div>
                <div class="w-[100%] flex flex-col mx-auto text-left
                justify-start">

                    <input type="text" id="studentName"
                        class="outline-none bg-[#333] w-[80%] p-[10px] rounded mx-[auto] text-white" name="contact"
                        placeholder="Contact de l'apprenant">
                </div>
                <div class="w-[100%] flex flex-col mx-auto text-left
                justify-start">

                    <input type="tel" id="studentEmail"
                        class="outline-none bg-[#333] w-[80%] p-[10px] rounded mx-[auto] text-white" name="contact_p"
                        placeholder="Entrez le contact des parents">
                </div>
                <div class="w-[100%] flex flex-col mx-auto text-left
                justify-start">

                    <input type="text" id="studentEmail"
                        class="outline-none bg-[#333] w-[80%] p-[10px] rounded mx-[auto] text-white" name="concours"
                        placeholder="Entrez concours">
                </div>
                <div class="w-[100%] flex flex-col mx-auto text-left
                justify-start">

                    <input type="submit"
                        class="cursor-pointer outline-none bg-[#333] w-[80%] p-[10px] rounded mx-[auto] text-white hover:bg-blue-400"
                        value="Ajouter l'apprenant" name="ok">
                </div>
            </div>
        </form>


    </section>
    <section class=" mt-[30px] ">
     
        <div class="pt-[20px] flex justify-around">
    
            <p class="font-bold">
                <i class="fa-brands fa-google text-2xl text-[#D14836]"></i>
                <a href="mailto:aubinborissimotsebo@gmail.com" class="" target="_blank">amcorporation@gmail.com</a>
            </p>
            <p class="font-bold">
               
               
                <a href="https:wa.me/655476087" class="" target="_blank"> <i class="fa-brands fa-whatsapp text-3xl text-green-600"></i>  AM Corporation</a>
              
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
    <script src="../javascript/script.js"></script>

</body>

</html>