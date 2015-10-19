<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Site Test</title>

    <!-- Bootstrap -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/custom.css" rel="stylesheet">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
</head>
<body>
<div class="navbar navbar-inverse navbar-static-top">
    <div class="container">

        <a href="#" class="navbar-brand">TEST</a>
        <button class="navbar-toggle" data-toggle="collapse" data-target=".navHeaderCollapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
        <div class="collapse navbar-collapse navHeaderCollapse">

            <ul class="nav navbar-nav navbar-right">
                <li class="active"><a href="#">Home</a></li>
                <li><a href="#">Présentation</a></li>
                <li><a href="#">Contact</a></li>
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" role="button">Social-Network <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li><a href="https://www.facebook.com/">Facebook</a></li>
                        <li><a href="https://twitter.com/?lang=fr">Twitter</a></li>
                        <li><a href="https://instagram.com/">Instagram</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</div>
<div class="container-fluid">
    <div class="col-md-12">
        <div class="embed-responsive embed-responsive-16by9">
            <canvas id="canvas"></canvas>
            <!-- <div id="masque">
              <img src="images/Masque_à_gaz.png">
            </div>-->
            <video id="video" class="text-center" autoplay>
            </video>
        </div>
    </div>

    <div class="container">
        <div class="rom">

            <div class="col-md-4">
                <h3><a href="#">Colonne1</a></h3>

                <p>In his tractibus navigerum nusquam visitur flumen sed in locis plurimis aquae suapte natura calentes
                    emergunt ad usus aptae multiplicium medelarum. verum has quoque regiones pari sorte Pompeius Iudaeis
                    domitis et Hierosolymis captis in provinciae speciem delata iuris dictione formavit.</p>
            </div>

            <div class="col-md-4">
                <h3><a href="#">Colonne2</a></h3>

                <p>In his tractibus navigerum nusquam visitur flumen sed in locis plurimis aquae suapte natura calentes
                    emergunt ad usus aptae multiplicium medelarum. verum has quoque regiones pari sorte Pompeius Iudaeis
                    domitis et Hierosolymis captis in provinciae speciem delata iuris dictione formavit.</p>
                <a href="#" class="btn btn-default">En savoir plus</a>
            </div>

            <div class="col-md-4">
                <h3><a href="#">Colonne3</a></h3>

                <p>In his tractibus navigerum nusquam visitur flumen sed in locis plurimis aquae suapte natura calentes
                    emergunt ad usus aptae multiplicium medelarum. verum has quoque regiones pari sorte Pompeius Iudaeis
                    domitis et Hierosolymis captis in provinciae speciem delata iuris dictione formavit.</p>
            </div>


        </div>

    </div>
</div>



<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="js/bootstrap.min.js"></script>
<script src="js/testvid.js"></script>
</body>
</html>