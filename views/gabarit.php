<!doctype html>
<html lang="fr">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" >   
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css">
        <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">  
        <link rel="stylesheet" href="Contenu/style.css" />
        <title><?= $titre ?></title>
    </head>
    <body data-spy="scroll" data-target=".navbar" data-offset="60">
        <nav class="navbar navbar-expand-md navbar-dark sticky-top">
            <a class="navbar-brand" href="#"></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#myNavbar">
                    <i class="fas fa-bars fa-lg"></i>
                </button>
        <!-- Navbar-->        
        <div class="collapse navbar-collapse justify-content-center" id="myNavbar">
            <ul class="nav nav-pills navbar-nav">
                <li class="nav-item"><a class="nav-link" href="?">Accueil</a></li>
                <li class="nav-item"><a class="nav-link" href="?action=oeuvres">Oeuvres</a></li>
                <li class="nav-item"><a class="nav-link" href="?action=exposition">Expositions</a></li>
            </ul>
        </div>
        </nav>
        <!--   </Navbar> -->

        <section id="about" class="container-fluid">
            <div id="content" class="heading">
            

                <?= $content ?>
                
            </div> <!-- #contenu -->
        </section>

        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
    <footer class="text-center">
            <a href="#about">
                <span class="fas fa-chevron-up"></span>
            </a>
            <h6>© Mickaël Labbé Formation DWWM Afpa 2020/2021</h6>    
            <h6>Site web réalisé avec PHP, HTML5 et CSS en MVC.</h6>
    </footer>
    </body>
</html>