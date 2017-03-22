<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>AppResto</title>
    <link rel="stylesheet" href="css/materialize.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/style_header.css">
    <link rel="stylesheet" href="css/client.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>

</head>
<body>
    <?php include 'includes/header_index.php'; ?>
    <div class="container container_custom_client">

        <div class="parallax-container parallax-main">
            <div class="parallax"><img src="http://www.newrest.eu/wp-content/uploads/2015/11/Newrest-Catering-Chef.jpg"></div>
        </div>

        <div class="row row_custom menu_semaine">
            <div class="col s12">
                <h2>Semaine du **/** au  **/**</h2>
            </div>
        </div>

        <div class="row row_custom">
            <div class="col s10 offset-s1">
                <div class="row row_custom" id="menu">
                    <div class="col s2 offset-s1 dayli">
                        <a href="#lundi">
                            <h3>Lundi</h3>
                            <ul>
                                <li>Entrées</li>
                                <li>Plat 1</li>
                                <li>Plat 2</li>
                                <li>Desserts</li>
                            </ul>
                        </a>
                        <form class="form_resa" action="index.php">
                            <p>
                                <input name="group1" type="radio" id="normal_lundi" />
                                <label for="normal_lundi">Menu normal</label>
                            </p>
                            <p>
                                <input name="group1" type="radio" id="snack_lundi" />
                                <label for="snack_lundi">Menu snack</label>
                            </p>
                        </form>
                    </div>

                    <div class="col s2 dayli">
                        <a href="#mardi">
                            <h3>Mardi</h3>
                            <ul>
                                <li>Entrées</li>
                                <li>Plat 1</li>
                                <li>Plat 2</li>
                                <li>Desserts</li>
                            </ul>
                        </a>
                        <form class="form_resa" action="index.php">
                            <p>
                                <input name="group1" type="radio" id="normal_mardi" />
                                <label for="normal_mardi">Menu normal</label>
                            </p>
                            <p>
                                <input name="group1" type="radio" id="snack_mardi" />
                                <label for="snack_mardi">Menu snack</label>
                            </p>
                        </form>
                    </div>

                    <div class="col s2 dayli">
                        <a href="#mercredi">
                            <h3>Mercredi</h3>
                            <ul>
                                <li>Entrées</li>
                                <li>Plat 1</li>
                                <li>Plat 2</li>
                                <li>Desserts</li>
                            </ul>
                        </a>
                        <form class="form_resa" action="index.php">
                            <p>
                                <input name="group1" type="radio" id="normal_mercredi" />
                                <label for="normal_mercredi">Menu normal</label>
                            </p>
                            <p>
                                <input name="group1" type="radio" id="snack_mercredi" />
                                <label for="snack_mercredi">Menu snack</label>
                            </p>
                        </form>
                    </div>

                    <div class="col s2 dayli">
                        <a href="#jeudi">
                            <h3>Jeudi</h3>
                            <ul>
                                <li>Entrées</li>
                                <li>Plat 1</li>
                                <li>Plat 2</li>
                                <li>Desserts</li>
                            </ul>
                        </a>
                        <form class="form_resa" action="index.php">
                            <p>
                                <input name="group1" type="radio" id="normal_jeudi" />
                                <label for="normal_jeudi">Menu normal</label>
                            </p>
                            <p>
                                <input name="group1" type="radio" id="snack_jeudi" />
                                <label for="snack_jeudi">Menu snack</label>
                            </p>
                        </form>
                    </div>

                    <div class="col s2 dayli">
                        <a href="#vendredi">
                            <h3>Vendredi</h3>
                            <ul>
                                <li>Entrées</li>
                                <li>Plat 1</li>
                                <li>Plat 2</li>
                                <li>Desserts</li>
                            </ul>
                        </a>
                        <form class="form_resa_vendredi" action="index.php">
                            <p>
                                <input name="vendredi" type="radio" id="normal_vendredi" />
                                <label for="normal_vendredi">Menu normal</label>
                            </p>
                            <p>
                                <input name="vendredi" type="radio" id="snack_vendredi" />
                                <label for="snack_vendredi">Menu snack</label>
                            </p>
                        </form>
                    </div>
                </div>
                <div class="row row_custom">
                    <button class="btn waves-effect waves-orange btn_custom col s2 offset-s5 align-center" type="submit" name="action">Envoyez
                        <i class="material-icons right"></i>
                    </button>
                </div>
            </div>
        </div>

        <!-- Modal Structure -->
        <div id="lundi" class="modal">
            <div class="modal-content">
                <h4>Au menu le lundi</h4>
                <ul>
                    <li>Entrées</li>
                    <li>Plat 1</li>
                    <li>Plat 2</li>
                    <li>Desserts</li>
                </ul>
            </div>
            <div class="modal-footer">
                <a href="#!" class=" modal-action modal-close waves-effect waves-green btn-flat">Agree</a>
            </div>
        </div>

        <div id="mardi" class="modal">
            <div class="modal-content">
                <h4>Au menu le mardi</h4>
                <ul>
                    <li>Entrées</li>
                    <li>Plat 1</li>
                    <li>Plat 2</li>
                    <li>Desserts</li>
                </ul>
            </div>
            <div class="modal-footer">
                <a href="#!" class=" modal-action modal-close waves-effect waves-green btn-flat">Agree</a>
            </div>
        </div>

        <div id="mercredi" class="modal">
            <div class="modal-content">
                <h4>Au menu le mercredi</h4>
                <ul>
                    <li>Entrées</li>
                    <li>Plat 1</li>
                    <li>Plat 2</li>
                    <li>Desserts</li>
                </ul>
            </div>
            <div class="modal-footer">
                <a href="#!" class=" modal-action modal-close waves-effect waves-green btn-flat">Agree</a>
            </div>
        </div>

        <div id="jeudi" class="modal">
            <div class="modal-content">
                <h4>Au menu le jeudi</h4>
                <ul>
                    <li>Entrées</li>
                    <li>Plat 1</li>
                    <li>Plat 2</li>
                    <li>Desserts</li>
                </ul>
            </div>
            <div class="modal-footer">
                <a href="#!" class=" modal-action modal-close waves-effect waves-green btn-flat">Agree</a>
            </div>
        </div>

        <div id="vendredi" class="modal">
            <div class="modal-content">
                <h4>Au menu le vendredi</h4>
                <ul>
                    <li>Entrées</li>
                    <li>Plat 1</li>
                    <li>Plat 2</li>
                    <li>Desserts</li>
                </ul>
            </div>
            <div class="modal-footer">
                <a href="#!" class=" modal-action modal-close waves-effect waves-green btn-flat">Agree</a>
            </div>
        </div>

        <div class="row row_custom">
            <div class="col s8 offset-s2 snack">
                <h2>Menu snack</h2>
                <p>Tout les jours le chef mets à la disposition des plus pressés un menu de restauration rapide au prix de 5.50e.<br>Cette nouvelle formule comprends :</p>
                <ul>
                    <li>pizza, croque-monsieur, quiche, hot-dog, croissant au jambon(au choix)</li>
                    <li>des frites</li>
                    <li>une boisson</li>
                </ul>
            </div>
        </div>

        <div class="parallax-container">
            <div class="parallax">
                <img src="http://www.newrest.eu/wp-content/uploads/2015/12/Newrest-Catering-BI.jpg" alt="photo des élèves de l'école des mines atablés">
            </div>
        </div>

        <div class="row row_custom">
            <div class="col s4 offset-s4 show-form_com1 center-align">
                <a class="waves-effect waves-orange btn btn_custom">Donnez-nous votre avis!</a>
            </div>
            <form class="col s6 offset-s3 form_com1" action="index.html" method="post">
                <div class="row">
                    <div class="input-field col s4">
                        <input placeholder="Votre pseudo" id="name" type="text" class="validate">
                        <label for="name">Pseudo (facultatif)</label>
                    </div>
                </div>
                <div class="row">
                    <div class="row">
                        <div class="input-field col s12">
                            <textarea id="textarea1" class="materialize-textarea"></textarea>
                            <label for="textarea1">Donnez nous votre avis!</label>
                        </div>
                    </div>
                </div>
                <button class="btn waves-effect waves-orange btn_custom col s2 offset-s5 align-center" type="submit" name="action">Envoyez
                    <i class="material-icons right"></i>
                </button>
            </form>
        </div>

        <div class="row row_custom">
            <div class="col s8 offset-s2 coms">
                <div class="row">
                    <div class="col s8 offset-s2">
                        <span class="pseudo">Pseudo</span>
                        <span class="date">date</span><br>
                        <p>Rogatus ad ultimum admissusque in consistorium ambage nulla praegressa inconsiderate et leviter proficiscere inquit ut praeceptum est, Caesar sciens quod si cessaveris, et tuas et palatii tui auferri iubebo prope diem annonas. hocque solo contumaciter dicto subiratus abscessit nec in conspectum eius postea venit saepius arcessitus.
                        </p>
                    </div>

                    <div class="col s8 offset-s2">
                        <span class="pseudo">Pseudo</span>
                        <span class="date">date</span><br>
                        <p>Rogatus ad ultimum admissusque in consistorium ambage nulla praegressa inconsiderate et leviter proficiscere inquit ut praeceptum est, Caesar sciens quod si cessaveris, et tuas et palatii tui auferri iubebo prope diem annonas. hocque solo contumaciter dicto subiratus abscessit nec in conspectum eius postea venit saepius arcessitus.
                        </p>
                    </div>

                    <div class="col s8 offset-s2">
                        <span class="pseudo">Pseudo</span>
                        <span class="date">date</span><br>
                        <p>Rogatus ad ultimum admissusque in consistorium ambage nulla praegressa inconsiderate et leviter proficiscere inquit ut praeceptum est, Caesar sciens quod si cessaveris, et tuas et palatii tui auferri iubebo prope diem annonas. hocque solo contumaciter dicto subiratus abscessit nec in conspectum eius postea venit saepius arcessitus.
                        </p>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <footer class="page-footer" id="footer_custom">
        <div class="container">
            <div class="row">
                <div class="col l6 s12">
                    <h5>Footer Content</h5>
                    <p class="text-lighten-4">You can use rows and columns here to organize your footer content.</p>
                </div>
                <div class="col l4 offset-l2 s12">
                    <h5>Contacts</h5>
                    <ul>
                        <li><a class="text-lighten-3" href="#!">Facebook</a></li>
                        <li><a class="text-lighten-3" href="#!">Twitter</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="footer-copyright ">
            <div class="container">
                © 2017 Copyright Text
                <a class="text-lighten-4 right" href="#!">Contactez-nous</a>
            </div>
        </div>
    </footer>
    <script type="text/javascript" src="js/jquery-3.1.1.min.js"></script>
    <script type="text/javascript" src="js/materialize.min.js"></script>
    <script type="text/javascript" src="js/appResto.js"></script>

</body>
</html>
