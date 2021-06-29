<?php
    if($_SERVER["REQUEST_METHOD"]=="GET"){
        //Get correspond a un chargement de page
        if(isset($_GET["page"])){
            if($_GET["page"]=="inscription"){
                require_once PATH_ROOT."views/security/inscription.html.php";
            }elseif($_GET["page"]=="login"){
                require_once PATH_ROOT."views/security/login.html.php";
            }elseif($_GET["page"]=="deconnexion"){
                deconnexion();
                require_once PATH_ROOT."views/security/login.html.php";
            }elseif($_GET["page"]=="lister.utilisteur"){
                require_once PATH_ROOT."views/security/lister.utilisateur.html.php";
            }elseif($_GET["page"]=="accueil.lecteur"){
                require_once PATH_ROOT."views/security/accueil.lecteur.html.php";
            }elseif($_GET["page"]=="accueil.admin"){
                require_once PATH_ROOT."views/security/accueil.admin.html.php";
            }
        }
    }else{
        //Post correspond a un traitement de formulaire 
        //var_dump($_GET);
        if(isset($_POST["btn_submit"])){
            //Au clic d'un formulaire 
            if($_POST["btn_submit"]=="btn_login"){
                //Traitement de connexion
                 //Tableau d'erreurs
              $arr_error=[];  
               //Validation du champ login
               valide_email($_POST["login"],$arr_error,"login","Le champ login est obligatoire");
               valide_password($_POST["password"],$arr_error,"password","Le password est obligatoire");
               if (valide_form($arr_error)){
                   //Pas d'erreurs le formulaire est valide
               }else {
                   //Le formulaire n'est pas valide 
                   //Redirection 
                   header("location:".WEB_ROOT."?controller=security&page=login");
               }



    }
    }
    }

?>


