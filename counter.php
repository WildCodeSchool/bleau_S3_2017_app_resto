 <!DOCTYPE html>
  <html>
    <head>
	    <!--Import materialize.css-->
	    <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>
	    <!--Let browser know website is optimized for mobile-->
	    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
	    <!-- Import Icons Materialize -->
	    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	    <!-- Import CSS -->
    	<link rel="stylesheet" type="text/css" href="css/counter.css">
    </head>

    <body class="body">
    	<?php include 'includes/header_cantine.php'; ?>
		<!-- Add filter to manage opacity of background's image -->
		<div class="filter">
	    	<div class="container container_custom">
	    	<!-- Container of counter's reservation by day -->
	    		<div class="row row_custom">
					<div class="counter_box">
				<!-- block of title's counter -->
						<div class="counter_title">
							<h2 class="h2">Compteur de menus</h2>
						</div>
						<!-- Container of counter's reservation by day without title -->
						<div class="container_meal_snack col l12">
							<!-- container of number's meal this day -->
							<div class="meal_box col l5 offset-l1 m11 offset-m1  s12">
								<div class="meal_word">
										<h3 class="h3"><b>REPAS</b></h3>
								</div>
								<div class="container_number_meal">
										<p class="number_meal z-depth-3">666</p>
								</div>
							</div>

							<div class="snack_box col l5 m11 offset-m1 s12">
								<!-- container of number's snack this day -->
								<div class="snack_word">
									<h3 class="h3"><b>SNACK</b></h3>
								</div>
								<div class="container_number_snack">
											<p class="number_snack z-depth-3">666</p>
								</div>
							</div>
						</div>
					</div>
				</div>

		  <div class="row row_custom">
		  	  <div class="col s12">
				  <div class="week_reservation"><h3 class="h3">Réservations de la semaine</h3></div>
				  
				  <!-- Table of week's reservation (snack and meal) bye day of week -->
			      <table class="striped centered table_food flow-text col offset-l1 l10 col s12">
			        <thead>
			          <tr>
			              <th data-field="day">Jour</th>
			              <th data-field="meal">Repas</th>
			              <th data-field="snack">Snack</th>
			          </tr>
			        </thead>

			        <tbody>
			          <tr>
			          	<td>Lundi</td>
			          	<td>60</td>
			          	<td>40</td>
			          </tr>
			          <tr>
			          	<td>Mardi</td>
			          	<td>60</td>
			          	<td>40</td>
			          </tr>
			          <tr>
			          	<td>Mercredi</td>
			          	<td>60</td>
			          	<td>40</td>
			          </tr>
			          <tr>
			          	<td>Jeudi</td>
			          	<td>60</td>
			          	<td>40</td>
			          </tr>
			          <tr>
			          	<td>Vendredi</td>
			          	<td>60</td>
			          	<td>40</td>
			          </tr>
			        </tbody>
			      </table>
			  </div>
		  </div>
			<div class="row row_custom">
				<div class="container_commentary col s12">
					<div class="commentary_title">
						<h3 class="h3">Commentaires des utilisateurs</h3>
					</div>
					<!-- Container which contain all of commentaries than the cooker have to validate (to be visible par the user on user page) or delete -->
			    	<div class="commentary_box col s12">
			    		<!-- Author and date of commentary. Text-size flexible with the screen size -->
				      	<div class="author_and_date flow-text col offset-l4 l4 offset-s1 s10"><p><b>Anonymous</b> le <i>21/12/12</i></p></div>
				      	<!-- Commentary of user -->
				      	<div class="commentary flow-text col s12">
				      		<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sint nesciunt perspiciatis vero repellat earum, esse amet sapiente ipsam ea incidunt consectetur accusamus fugiat, placeat quam vitae libero repellendus. Aut, laudantium.</p>
				      	</div>
				      	<!-- container of flex-box which contain buttuns of validating and deleting -->
				      	<div class="container_btn_val_del col s12">
					      	<div class="validate col offset-l3 l3 offset-m1 m4 s12">
					      		<a class="waves-effect waves-light btn val_btn"><i class="material-icons right">thumb_up</i>valider</a>
					      	</div>
					      	<div class="delete col l3 offset-m2 m4 s12">
					      		<a class="waves-effect waves-light btn del_btn"><i class="material-icons right">thumb_down</i>supprimer</a>
					      	</div>
					    <!-- Same code -->
					    </div>
				      	
					    </div>
			    	</div>
			    </div>
		    </div>
	    </div> <!-- fermeture du container -->

	            



	      <!--Import jQuery before materialize.js-->
	    	<script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
	    	<script type="text/javascript" src="js/materialize.min.js"></script>
    	</div>
    </body>
  </html>