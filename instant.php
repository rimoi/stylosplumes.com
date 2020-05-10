<!DOCTYPE html>
<html lang="fr">
    <head>
        <?php $description ="Petite poésie de chaque instant que l’on partage à travers le temps – entre Prévert et Saez" ?>
        <?php include('_header.php'); ?>
    </head>
    <body class="verbatims instant">
        <?php $instant = 1 ?>
         <?php include('_body_header.php'); ?>
        <div class="wrapper">
            <section class="layout1 cs-height-600">
                <div class="container">
                    <div class="row">
                        <div class="col-md-7 col-md-offset-5 center">
                            <h1 class="blanc  wow fadeInUp  " data-wow-delay="0.2s" data-wow-offset="75"></h1>
                            <p class="big wow fadeInUp  cs-text" data-wow-delay="0.4s" data-wow-offset="75">
                                “ Parce que la plume ne pourrait vivre sans les mots ”
                                    <br>
                                    <br />
                                    <small class="pull-right">Florent Perdrieau</small>
                            </p>
                        </div>
                    </div>
                    
                </div>
            </section>
            
            <!--<section class="layout2">
                <div class="container">
                    <div class="row">
                        <div class="row citation"  style="margin-bottom: 171px">
                            <div class="col-md-12">
                                <div class="quote middle wow fadeIn" style="font-size: 23px">
                                    Parce que la plume ne pourrait vivre sans les mots
                                    <br>
                                    <br />
                                    <small class="pull-right">Florent Perdrieau</small>
                                </div>
                            </div>
                        </div>
                    </div>
               </div>   
            </section>-->
            <?php include('_poemes.php'); ?>
        </div>
        <?php include('_body_footer.html'); ?>
    </body>
</html>

