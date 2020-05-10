<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-5R4933N"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
<nav class="navbar navbar-default navbar-static-top classic">
    <div class="container">
        <div class="row">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
               <a class="navbar-brand" href="index.php"><img width="85" src="img/logo1.png" alt="logo stylos de Flo"></a>
            </div>
            <div id="navbar" class="navbar-collapse collapse">
                <ul class="nav navbar-nav navbar-right">
                    <li>
                        <?php echo isset($plumes) ? "<a href='plumes.php' class='active analytics-plumes'>" : "<a class='analytics-plumes' href='plumes.php'>"; ?>
                            <span class="fas fa-pen-nib"></span>
                             Mes plumes
                        </a>
                    </li>
                    <li>
                        <?php echo isset($instant) ? "<a href='instant.php' class='active analytics-instant'>" : "<a class='analytics-instant' href='instant.php'>"; ?>
                            <span class="fas fa-book-open" style="color: darkcyan"></span>
                             Dans l'instant
                        </a>
                    </li>
                    <li class="cs-expert analytics-expert">
                        <?php echo isset($expert) ? "<a href='auteur.php' class='active analytics-expert'>" : "<a class='analytics-expert' href='auteur.php'>"; ?>
                            <span class="ico-expert" style="color: #715f57"></span> Auteur
                        </a>
                    </li>
                      <!-- <li>
                        <a href="https://medium.com/blog-bigdatext" target="_blank">
                            <span class="ico-blog jaune"></span> Blog
                        </a>
                    </li>-->
                    <li class="cs-contact">
                        <?php echo isset($contact) ? "<a href='contact.php' class='active analytics-contact'>" : "<a class='analytics-contact' href='contact.php'>"; ?>
                            <span class="ico-contact" style="color: darkred"></span> Contact
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</nav>