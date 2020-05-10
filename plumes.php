<!DOCTYPE html>
<html lang="fr">
    <head>
        <?php $description ="Collection de stylos anciens à plumes en or, Fountain pen – Antic pen – Old pen – première guerre mondiale" ?>
        <?php include('_header.php'); ?>
    </head>
    <body class="verbatims">
        <?php $plumes = 1 ?>
        <?php include('_body_header.php'); ?>
        <div class="wrapper">
            <section class="layout1 cs-height-600">
                <div class="container">
                    <div class="row">
                        <div class="col-md-7 col-md-offset-5 center">
                            <h1 class="blanc  wow fadeInUp  " data-wow-delay="0.2s" data-wow-offset="75"></h1>
                            <p class="big wow fadeInUp  cs-text" data-wow-delay="0.4s" data-wow-offset="75">
                                “ Souvent je regrette qu'on ne puisse pas effacer les mots dans l'air, comme sur un papier, qu'il n'existe pas un stylo spécial qu'on agiterait au dessus de soi pour retrancher les paroles maladroites avant qu'elles puissent être entendues ”
                                    <br>
                                    <br />
                                    <small class="pull-right">No et moi -
                                    Delphine de Vigan</small>
                            </p>
                        </div>
                    </div>
                    
                </div>
            </section>
            
           <!-- <section class="layout2">
                <div class="container">
                    <div class="row">
                        <div class="row citation"  style="margin-bottom: 171px">
                            <div class="col-md-12">
                                <div class="quote middle wow fadeIn" style="font-size: 23px">
                                    Souvent je regrette qu'on ne puisse pas effacer les mots dans l'air, comme sur un papier, qu'il n'existe pas un stylo spécial qu'on agiterait au dessus de soi pour retrancher les paroles maladroites avant qu'elles puissent être entendues.
                                    <br>
                                    <br />
                                    <small class="pull-right">No et moi -
                                    Delphine de Vigan</small>
                                </div>
                            </div>
                        </div>
                    </div>
               </div>   
            </section>-->
            <section class="layout4 bg-blanc" style="margin-bottom: 400px">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 ref-client center">
                            <div class="row">
                                <?php
                                    $iterator = new DirectoryIterator('./img/image_florent');
                                    $files = [];
                                    $valeur = [];
                                    foreach ($iterator as $value) {
                                        if ($value->getFilename() !== '..' && $value->getFilename() !== '.') {
                                            $name = explode('.', $value->getFilename());
                                            end($name);
                                            unset($name[key($name)]);
                                            $files[] = [
                                                'name' => implode(' ', $name),
                                                'value' => $value->getFilename(),
                                            ];
                                        }
                                    }
                                    $count = (int) (count($files) / 4);
                                    $k = 0;

                                    for ($i=0; $i <= $count; $i++) { 
                                        echo '<div class="col-md-12">';
                                        foreach(array_slice($files, 4*$i, 4) as $document) {
                                            
                                            echo '<div class="col-md-3">
                                                        <img data-wow-offset="75" data-wow-delay="0.2s" style="height: 119px;width: 200px" class="pic_small alignnone wp-image-395 wow bounceInUp" src="img/image_florent/'.$document['value'].'" />
                                                      <img class="pic_big transform-element-'. $k .'" src="img/image_florent/'.$document['value'].'" />
                                                      <figcaption style="font-size: 12px;font-family: sans-serif;">'.$document['name'].'</figcaption>
                                                </div>';
                                            $k++;
                                        }
                                        echo '</div>';
                                        $k = 0;
                                    }
                                ?>
                            </div>
                        </div>
                    </div>
                    <!--<div class="row citation">
                        <div class="col-md-12">
                            <div class="quote middle wow fadeIn">
                                Les experts de Big Datext ont paramétré les robots linguistes de Big Datext, ce qui leur a permis d’analyser plus de 15 000 réponses d’enquête de perception pour une grande enseigne. Ils rendent ainsi possible l’utilisation des questions ouvertes dans les enquêtes à grande échelle, avec le précieux avantage de la spontanéité des réponses, par opposition à l’habituelle liste ‘assistée’ des réponses possibles.
                            </div>
                            <div class="qui middle wow fadeIn">
                                <p><b>Denis Bonan,</b><br />
                                Associé fondateur chez Denelen,<br />Conseil par la marque</p>
                                <img class="alignnone size-full wp-image-60 aligncenter" src="http://big-datext.com/wp-content/uploads/2016/04/logo-denelen.png" alt="logo-denelen" width="175" >
                            </div>
                        </div>
                    </div>-->
                </div>
            </section>  
        </div>
        <?php include('_body_footer.html'); ?>
    </body>
</html>

