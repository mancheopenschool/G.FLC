<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Le Huffington Post</title>

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/bootstrap-theme.min.css">

    <link rel="stylesheet" href="css/custom.css">
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>
<div class="container">
    <header>
        <div class="container-fluid">
            <div class="row" id="date">
                <div class="col-md-12">
                    <h4 id="date">
                        <p>

                            <?php
                            setlocale(LC_TIME, 'fr_FR.utf8', 'fra');
                            echo(strftime("%d %B %Y"));
                            ?>
                        </p>
                    </h4>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <h1>LE HUFFIGTON POST</h1>
                </div>
            </div>
            <div class="row" id="titre">
                <div class="col-md-12">
                    <p>

                    <h3 id="h-top">EN ASSOCIATION AVEC LE GROUPE
                        <img id="logolm" class="img-responsive" src="images/le%20monde.jpg">
                    </h3>
                    </p>
                </div>
            </div>
            <div class="row" id="toprech">
                <div class="col-md-4"><p>Edition: <span style="line-height: 25px;font-weight: bold;">FR <i
                                class="glyphicon glyphicon-menu-down"></i></span></p></div>
                <div class="col-md-4">
                    <p>
                        <input id="recherche" type="text" class="form-control" placeholder="Chercher sur le HuffPost">
                    </p>
                </div>
                <div class="col-md-4">

                </div>
            </div>
        </div>
    </header>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
</body>
</html>