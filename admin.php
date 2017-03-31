
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">

    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.0/css/materialize.min.css">

    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro" rel="stylesheet">

    <link rel="stylesheet" type="text/css" href="css/admin.css"/>
<link rel="stylesheet" href="css/style.css">
    <title>Page_Admin</title>
</head>
<body id="admin">
    <div class="container container_custom">
            <table class="bordered centered">
        <thead>
            <tr class="semaine">
                <?php
                //Déclaration de nos tableaux que nous allons utiliser pour boucler notre formulaire
                $days = ['','Lundi', 'Mardi', 'Mercredi', 'Jeudi', 'Vendredi'];
                $types = ['Plat', 'Garniture', 'Entrée', 'Dessert'];

                //Boucle pour créer la ligne des jours
                for ($i=0; $i < count($days); $i++) {
                    if ($i == 0)
                    {
                        echo '<th></th>';
                    }
                    else
                    {
                        echo '<th class="center-align" data-field="name">' . $days[$i] .'</th>';
                    }
                }
                ?>
            </tr>
        </thead>

        <form class="form_menu" action="admin.php" method="post">
            <tbody>
                <?php
                //boucle pour créer les lignes des différents plats
                for ($i=0; $i < count($types); $i++) { ?>
                    <tr class="option">
                        <td class="col m2 td_custom"><?php echo $types[$i]; ?>
                        </td>
                        <?php
                        //autre boucle pour créer les champs par jours corréspondant aux plats
                        for ($j=1; $j < count($days) + 1; $j++) {
                            if($j < count($days))
                            {?>
                                <td>
                                    <div class="input-field col m2 choise">
                                        <select multiple>
                                            <option name="<?php echo $types[$i] . '_' . $days[$j]; ?>" value="" disabled selected>Faites votre choix</option>
                                            <option name="<?php echo $types[$i] . '_' . $days[$j]; ?>" value="1">Option 1</option>
                                            <option name="<?php echo $types[$i] . '_' . $days[$j]; ?>" value="2">Option 2</option>
                                            <option name="<?php echo $types[$i] . '_' . $days[$j]; ?>" value="3">Option 3</option>
                                        </select>
                                    </div>
                                </td>
                            <?php }
                            else
                            { ?>
                                <td class="element">
                                    <form class="col m1">
                                        <div class="input-field ">
                                            <input id="<?php echo $types[$j]; ?>" type="text" class="validate">
                                            <label class="active" for="<?php echo $types[$j]; ?>">Ajouter</label>
                                        </div>
                                    </form>
                                </td>
                            </tr>
                            <?php } ?>
                        <?php } ?>
                    <?php } ?>

            </tbody>
        </form>
    </table>

                    <!-- Validate button -->

    <div class="row row_admin">
        <div class="col m12 admin">
            <div class="validate">
                <a class="waves-effect waves-light btn #ff8a80 red accent-1"><i class="material-icons left">Valider les menus</i></a></div>
            </div>
        </div>
    </div>
        <script type="text/javascript" src="js/jquery-3.1.1.min.js"></script>
        <!-- Compiled and minified JavaScript -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.0/js/materialize.min.js"></script>
        <script type="text/javascript" src="js/appResto.js"></script>
    </div>
</body>
</html>
