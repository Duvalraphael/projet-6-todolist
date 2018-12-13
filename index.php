<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

if(isset($_POST['tache'])) {
    $input = trim(filter_input(INPUT_POST, 'tache', FILTER_SANITIZE_STRING));// Recupére la tache inputé

    $document = file_get_contents("assets/json/todo.json", true);// Chemin pour acceder aux Json

    $table = json_decode($document, true);

    $html = html_entity_decode(json_encode($table));

    $table[] = ["tache" => $input,"statut" => false];
    
    $codejson = json_encode($table,JSON_UNESCAPED_UNICODE);
    $input = fopen("assets/json/todo.json", "w");   
    

    fwrite($input, $codejson);
    fclose($input);
    }
?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!--Import materialize.css-->
    <link type="text/css" rel="stylesheet" href="assets/materialize/css/materialize.min.css" media="screen,projection" />
    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="assets/css/style.css">
    <title>To Do List</title>
</head>

<body>
    <main>
        <div class="container-fluid">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-sm-12 col-md-12 col-lg-12 ml-3 p-0">
                        <form class="col s12" method="post" action="#">
                            <h4>A FAIRE</h4>
                            <?php require("assets/php/contenu.php");
                            echo $html1 ?>
                            <input type="submit" name="submit" value="Enregistrer">
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-sm-12 col-md-12 col-lg-12 ml-3 p-0">
                        <h4>ARCHIVE</h4>
                        <?php require("assets/php/contenu.php");
                            echo $html2 ?>
                    </div>
                </div>
            </div>
        </div>
        <form class="col s12" method="post" action="#">
            <div class="container">
                <div class="row">
                    <div class="row">
                        <h3>Ajouter une tâche </h3>
                        <div class="input-field col s6">
                            <input id="tache_input" type="text" class="validate" name="tache">
                            <label for="tache_input">la tâche à effectuer : </label>
                        </div>
                        <input type="checkbox" name="contact_me_by_fax_only" value="1" style="display:none !important"
                            tabindex="-1" autocomplete="off">
                    </div>
                    <button class="btn waves-effect waves-light" type="submit" name="Ajouter">Ajouter
                        <i class="material-icons right">add_circle</i>
                    </button>
                </div>
            </div>
        </form>
    </main>
    <!--JavaScript at end of body for optimized loading-->
    <script type="text/javascript" src="assets/materialize/js/materialize.min.js"></script>
    <script type="text/javascript" src="assets/js/script.js"></script>
</body>

</html>