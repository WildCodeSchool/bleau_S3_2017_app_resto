<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>AppResto</title>
        <link rel="stylesheet" href="css/materialize.css">
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="css/client.css">
        <link rel="stylesheet" type="text/css" href="css/style_header.css">
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>

    </head>
    <body>

        <div class="container container_custom_client">

            <div class="parallax-container">
                <div class="parallax"><img src="img/para1.png"></div>
            </div>

            <div class="row row_custom">
                <div class="col s8 offset-s2 menu">

                    <ul id="tabs-swipe " class="tabs">
                        <li class="tab col s2 tab_custom"><a href="#lundi">LUNDI</a></li>
                        <li class="tab col s2 tab_custom"><a class="active" href="#mardi">MARDI</a></li>
                        <li class="tab col s2 tab_custom"><a href="#mercredi">MERCREDI</a></li>
                        <li class="tab col s2 tab_custom"><a href="#jeudi">JEUDI</a></li>
                        <li class="tab col s2 tab_custom"><a href="#vendredi">VENDREDI</a></li>
                        <li class="tab col s2 tab_custom"><a href="#semaine">SEMAINE</a></li>
                    </ul>

                    <div id="lundi" class="col s12 dayli">
                        <h3>LUNDI</h3>
                        <ul>
                            <li>ENTRÉES</li>
                            <li>PLAT 1</li>
                            <li>PLAT 2</li>
                            <li>ACCOMPAGNMENTS</li>
                            <li>DESSERTS</li>
                        </ul>

                        <form action="resa_action" method="post" id="form1" >
                            <p>
                              <input type="checkbox" id="resa_cant_mon" />
                              <label for="resa_cant_mon">Je mange au self !</label>
                            </p>
                            <p>
                              <input type="checkbox" id="resa_snack_mon" />
                              <label for="resa_snack_mon">Je mange au snack !</label>
                            </p>
                        </form>

                    </div>
                    <div id="mardi" class="col s12 dayli">
                        <h3>MARDI</h3>
                        <ul>
                            <li>ENTRÉES</li>
                            <li>PLAT 1</li>
                            <li>PLAT 2</li>
                            <li>ACCOMPAGNMENTS</li>
                            <li>DESSERTS</li>
                        </ul>
                        <form action="resa_action" method="post" id="form1" >
                            <p>
                              <input type="checkbox" id="resa_cant_mon" />
                              <label for="resa_cant_mon">Je mange au self !</label>
                            </p>
                            <p>
                              <input type="checkbox" id="resa_snack_mon" />
                              <label for="resa_snack_mon">Je mange au snack !</label>
                            </p>
                        </form>
                    </div>
                    <div id="mercredi" class="col s12 dayli">
                        <h3>MERCREDI</h3>
                        <ul>
                            <li>ENTRÉES</li>
                            <li>PLAT 1</li>
                            <li>PLAT 2</li>
                            <li>ACCOMPAGNMENTS</li>
                            <li>DESSERTS</li>
                        </ul>

                        <form action="resa_action" method="post" id="form1" >
                            <p>
                              <input type="checkbox" id="resa_cant_mon" />
                              <label for="resa_cant_mon">Je mange au self !</label>
                            </p>
                            <p>
                              <input type="checkbox" id="resa_snack_mon" />
                              <label for="resa_snack_mon">Je mange au snack !</label>
                            </p>
                        </form>
                    </div>
                    <div id="jeudi" class="col s12 dayli">
                        <h3>JEUDI</h3>
                        <ul>
                            <li>ENTRÉES</li>
                            <li>PLAT 1</li>
                            <li>PLAT 2</li>
                            <li>ACCOMPAGNMENTS</li>
                            <li>DESSERTS</li>
                        </ul>

                        <form action="resa_action" method="post" id="form1" >
                            <p>
                              <input type="checkbox" id="resa_cant_mon" />
                              <label for="resa_cant_mon">Je mange au self !</label>
                            </p>
                            <p>
                              <input type="checkbox" id="resa_snack_mon" />
                              <label for="resa_snack_mon">Je mange au snack !</label>
                            </p>
                        </form>
                    </div>
                    <div id="vendredi" class="col s12 dayli">
                        <h3>VENDREDI</h3>
                        <ul>
                            <li>ENTRÉES</li>
                            <li>PLAT 1</li>
                            <li>PLAT 2</li>
                            <li>ACCOMPAGNMENTS</li>
                            <li>DESSERTS</li>
                        </ul>

                        <form action="resa_action" method="post" id="form1" >
                            <p>
                              <input type="checkbox" id="resa_cant_mon" />
                              <label for="resa_cant_mon">Je mange au self !</label>
                            </p>
                            <p>
                              <input type="checkbox" id="resa_snack_mon" />
                              <label for="resa_snack_mon">Je mange au snack !</label>
                            </p>
                        </form>
                    </div>
                    <div id="semaine" class="col s12 dayli">
                        <h3>SEMAINE DU **/**/** AU **/**/**</h3>
                        <table>
                            <thead>
                                <tr>
                                    <th></th>
                                    <th>LUNDI</th>
                                    <th>MARDI</th>
                                    <th>MERCREDI</th>
                                    <th>JEUDI</th>
                                    <th>VENDREDI</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th>ENTRÉES</th>
                                    <td>entrées</td>
                                    <td>entrées</td>
                                    <td>entrées</td>
                                    <td>entrées</td>
                                    <td>entrées</td>
                                </tr>

                                <tr>
                                    <th>PLAT 1</th>
                                    <td>plat 1</td>
                                    <td>plat 1</td>
                                    <td>plat 1</td>
                                    <td>plat 1</td>
                                    <td>plat 1</td>
                                </tr>

                                <tr>
                                    <th>PLAT 2</th>
                                    <td>plat 2</td>
                                    <td>plat 2</td>
                                    <td>plat 2</td>
                                    <td>plat 2</td>
                                </tr>

                                <tr>
                                    <th>ACCOMPAGNEMENTS</th>
                                    <td>accompagnements</td>
                                    <td>accompagnements</td>
                                    <td>accompagnements</td>
                                    <td>accompagnements</td>
                                </tr>

                                <tr>
                                    <th>DESSERTS</th>
                                    <td>desserts</td>
                                    <td>desserts</td>
                                    <td>desserts</td>
                                    <td>desserts</td>
                                </tr>

                                <tr>
                                    <th></th>
                                    <td>
                                        <form action="resa_action" method="post" id="form1" >
                                            <p>
                                              <input type="checkbox" id="resa_cant_mon" />
                                              <label for="resa_cant_mon">Je mange au self !</label>
                                            </p>
                                            <p>
                                              <input type="checkbox" id="resa_snack_mon" />
                                              <label for="resa_snack_mon">Je mange au snack !</label>
                                            </p>
                                        </form>
                                    </td>
                                    <td>
                                        <form action="resa_action" method="post" id="form1" >
                                            <p>
                                              <input type="checkbox" id="resa_cant_mon" />
                                              <label for="resa_cant_mon">Je mange au self !</label>
                                            </p>
                                            <p>
                                              <input type="checkbox" id="resa_snack_mon" />
                                              <label for="resa_snack_mon">Je mange au snack !</label>
                                            </p>
                                        </form>
                                    </td>
                                    <td>
                                        <form action="resa_action" method="post" id="form1" >
                                            <p>
                                              <input type="checkbox" id="resa_cant_mon" />
                                              <label for="resa_cant_mon">Je mange au self !</label>
                                            </p>
                                            <p>
                                              <input type="checkbox" id="resa_snack_mon" />
                                              <label for="resa_snack_mon">Je mange au snack !</label>
                                            </p>
                                        </form>
                                    </td>
                                    <td>
                                        <form action="resa_action" method="post" id="form1" >
                                            <p>
                                              <input type="checkbox" id="resa_cant_mon" />
                                              <label for="resa_cant_mon">Je mange au self !</label>
                                            </p>
                                            <p>
                                              <input type="checkbox" id="resa_snack_mon" />
                                              <label for="resa_snack_mon">Je mange au snack !</label>
                                            </p>
                                        </form>
                                    </td>
                                    <td>
                                        <form action="resa_action" method="post" id="form1" >
                                            <p>
                                              <input type="checkbox" id="resa_cant_mon" />
                                              <label for="resa_cant_mon">Je mange au self !</label>
                                            </p>
                                            <p>
                                              <input type="checkbox" id="resa_snack_mon" />
                                              <label for="resa_snack_mon">Je mange au snack !</label>
                                            </p>
                                        </form>
                                    </td>
                                    <td>
                                        <form action="resa_action" method="post" id="form1" >
                                            <p>
                                              <input type="checkbox" id="resa_cant_mon" />
                                              <label for="resa_cant_mon">Je mange au self !</label>
                                            </p>
                                            <p>
                                              <input type="checkbox" id="resa_snack_mon" />
                                              <label for="resa_snack_mon">Je mange au snack !</label>
                                            </p>
                                        </form>
                                    </td>
                                </tr>

                            </tbody>
                        </table>
                    </div>
                    <button class="btn waves-effect waves-light" type="submit" name="form1">Envoyer!</button>
                </div>
            </div>

            <div class="parallax-container">
                <div class="parallax"><img src="img/1787-une_admissible.jpg"></div>
            </div>

        </div>
        <script type="text/javascript" src="js/jquery-3.1.1.min.js"></script>
        <script type="text/javascript" src="js/materialize.min.js"></script>
        <script type="text/javascript" src="js/appResto.js"></script>
    </body>
</html>
