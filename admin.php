
<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">

  <!-- Compiled and minified CSS -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.0/css/materialize.min.css">

  <link rel="stylesheet" type="text/css" href="css/admin.css"/>

  <title>Page_Admin</title>
</head>
<body>
  <table class="bordered centered">

    <thead>
      <tr class="semaine">
        <th data-field=""></th>
        <th class="center-align" data-field="name">Lundi</th>
        <th class="center-align" data-field="name">Mardi</th>
        <th class="center-align" data-field="name">Mercredi</th>
        <th class="center-align" data-field="name">Jeudi</th>
        <th class="center-align" data-field="name">Vendredi</th>
      </tr>
    </thead>

    <tbody>
      <div class="container">
        <tr>
          <td class="col m2 plat">Plat</td>
          <?php 
          $i =1;
          while( $i <6)
            { ?>
              <td> 
                <div class="input-field col m2 choise">
                  <select multiple>
                    <option value="" disabled selected>Faites votre choix
                    </option>
                    <option value="1">Option 1</option>
                    <option value="2">Option 2</option>
                    <option value="3">Option 3</option>
                  </select>
                </div>
              </td>
              <?php 
              $i++; } ?>
              <td class="element">
                <form class="col m1">
                  <div class="row">
                    <div class="input-field col s6">
                      <input id="plat" type="text" class="validate">
                      <label class="active" for="plat">Ajouter</label>
                    </div>
                  </div>
                </form>
              </td>
            </tr>
            <tr>
              <td class="accompagnement">Accompagnement</td>
              <?php
              $i = 1;
              while($i <6)
                { ?>
                <td> 
                  <div class="input-field col m2 choise">
                    <select multiple>
                      <option value="" disabled selected>Faites votre choix</option>
                      <option value="1">Option 1</option>
                      <option value="2">Option 2</option>
                      <option value="3">Option 3</option>
                    </select>
                  </div>
                </td>
                <?php $i++; } ?>
                <td class="element">
                  <form class="col m1">
                    <div class="row">
                      <div class="input-field col s6">
                        <input id="accompagnement" type="text" class="validate">
                        <label class="active" for="accompagnement">Ajouter</label>
                      </div>
                    </div>
                  </form>
                </td>
              </tr>
              <tr>
                <td class="entree">Entrée</td>
                <?php
                $i = 1;
                while($i<6)
                  { ?> 
                <td> 
                  <div class="input-field col m2 choise">
                    <select multiple>
                      <option value="" disabled selected>Faites votre choix</option>
                      <option value="1">Option 1</option>
                      <option value="2">Option 2</option>
                      <option value="3">Option 3</option>
                    </select>
                  </div>
                </td>
                <?php 
                $i++; } ?>
                <td class="element">
                  <form class="col m1">
                    <div class="row">
                      <div class="input-field col s6">
                        <input id="entree" type="text" class="validate">
                        <label class="active" for="entree">Ajouter</label>
                      </div>
                    </div>
                  </form>
                </td>
              </tr>
              <tr>
                <td class="dessert">Dessert</td>
                <?php $i= 1;
                while($i <6 )
                  { ?>
                <td> 
                  <div class="input-field col m2 choise">
                    <select multiple>
                      <option value="" disabled selected>Faites votre choix
                      </option>
                      <option value="1">Option 1</option>
                      <option value="2">Option 2</option>
                      <option value="3">Option 3</option>
                    </select>
                    <?php $i++; } ?>
                <td class="element">
                  <form class="col m1">
                    <div class="row">
                      <div class="input-field col s6">
                        <input id="dessert" type="text" class="validate">
                        <label class="active" for="dessert">Ajouter</label>
                      </div>
                    </div>
                  </form>
                </td>
              </div>
            </td>
          </div>
        </tr>
      </div>
    </tbody>
  </table>

                <script type="text/javascript" src="js/jquery-3.1.1.min.js"></script>
                <!-- Compiled and minified JavaScript -->
                <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.0/js/materialize.min.js"></script>	
                <script type="text/javascript" src="js/appResto.js"></script>
              </body>
              </html>