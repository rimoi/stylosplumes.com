<?php
    if (isset($_POST['_submit'])) {
        if (!empty($_POST['name']) AND !empty($_POST['mail']) AND !empty($_POST['message'])){
            $header="MIME-Version: 1.0\r\n";
            $header.='From:"Stylo-Plume"<fperdrieau@gmail.com>'."\n";
            $header.='Content-Type:text/html; charset="uft-8"'."\n";
            $header.='Content-Transfer-Encoding: 8bit';

            $send =  mail('fperdrieau@gmail.com', 'email contact: '.htmlspecialchars($_POST['mail']), htmlspecialchars($_POST['message']), $header);
           
            if ($msg) {
               $msg='<p class="bg-info">Votre message a bien été envoyé !</p>';  
            } else {
                $msg='<p class="bg-danger">Votre message n\'a pas été envoyé.<br />Veuillez me le renvoyer à : <b>fperdrieau@gmail.com</b></p>'; 
            }

        } elseif (empty($_POST['name'])) {
            $msg = '<p class="bg-danger">Veuillez remplir le champ Nom</p>';
        } elseif (empty($_POST['mail'])) {
            $msg = '<p class="bg-danger">Veuillez remplir le champ mail</p>';
        } elseif (empty($_POST['message'])) {
            $msg = '<p class="bg-danger">veuillez remplir le contenu</p>';
        } else {
            $msg='<p class="bg-danger">Tous les champs doivent être complétés !</p>';
        }
    } 
?>

<!DOCTYPE html>
<html lang="fr">
    <head>
        <?php $description = '' ?>
        <?php include('_header.php'); ?>
    </head>
    <body class="contact">
        <?php $contact = 1 ?>
        <?php include('_body_header.php'); ?>

        <div class="wrapper">
            <section class="layout1 ">
                <div class="container">
                    <div class="row">
                        <div class="col-md-10 col-md-offset-1 center">
                            <h1 class="blanc  wow fadeInUp classic" data-wow-delay="0.2s" data-wow-offset="75">CONTACTEZ-MOI</h1>
                            <p class="big  wow fadeInUp  " data-wow-delay="0.4s" data-wow-offset="75">
                            </p>
                        </div>
                    </div>
                </div>
            </section>
            
            <section class="layout2">
                <div class="container">
                    <div class="row contact-form">
                        <div class="col-md-8 col-md-offset-2 wow fadeIn">
                            <div class="contact-form-bloc center " style="overflow:hidden"> 
                               <form action="contact.php" method="post" class="wpcf7-form" id="contact">
                                    <p class="titre">Merci de remplir le formulaire pour me contacter</p>

                                    <div class="group classic " > 
                                        <span class=" ico-user icon"></span>
                                        <input required type="text" name="name">
                                        <label>Votre nom</label>
                                    </div>

                                    <div class="group classic " > 
                                        <span class=" ico-envelope icon"></span>
                                        <input  required type="email" name="mail">
                                        <label>Votre email</label>
                                    </div>

                                    <div class="group classic "  > 
                                        <span class="ico-bubble icon"></span>
                                        <textarea required="required" name="message"></textarea>
                                        <label>Votre message</label>
                                    </div>
                                    
                                    <div class="group  classic center"> 
                                        <?php
                                            if(isset($msg)) {
                                                echo $msg;
                                            } 
                                        ?>
                                        <button class=" classic btn btn-lg" id="_submit" name="_submit" style="color: darkred">
                                           <span class="ico-arrow-right hidden-xs"></span> ENVOYER LE MESSAGE
                                        </button>
                                    </div>    
                                </form>
                               
                            </div>
                        </div>
                       
                       
                    </div>
                </div>
            </section>
        </div>
      
      <?php include('_body_footer.html'); ?>
    </body>
</html>

