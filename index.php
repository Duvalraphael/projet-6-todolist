<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <!--Import Google Icon Font-->
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <!--Import materialize.css-->
        <link type="text/css" rel="stylesheet" href="assets/materialize/css/materialize.min.css"  media="screen,projection"/>
        <!--Let browser know website is optimized for mobile-->
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        <title>To Do List</title>
    </head>
    <body>
        <div class="container">
            <div class="row">
                <form class="col s12">
                    <div class="row">
                        <h3>Ajouter une tâche </h3>
                        <div class="input-field col s6">
                            <input id="tache_input" type="text" class="validate">
                            <label for="tache_input">la tâche à effectuer : </label>
                        </div>
                    </div>
                    <button class="btn waves-effect waves-light" type="submit" name="Ajouter">Ajouter
                        <i class="material-icons right">add_circle</i>
                    </button>
                </form>
            </div>
        </div>
        <!--JavaScript at end of body for optimized loading-->
        <script type="text/javascript" src="assets/materialize/js/materialize.min.js"></script>
    </body>
</html>