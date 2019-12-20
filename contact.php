<?php
	// Appel au fichier "d'Entête" "header.php"
	include("header.php");
?>
		<!-- Page Contact pour envoyer un message au(x) Responsable(s) du site -->
		<h1 style="text-align: center;">Contact</h1>

			<!-- Source consultée pour faire les Formulaire en JAVA: http://www.lehtml.com/js/forms.htm
			-->
			<FORM NAME="form2"> 
				Votre NOM* : <INPUT TYPE="text" NAME="name" VALUE=""><BR><br>
				Contact* :
					<select name="input1">
						<option  value=""> ------------- Contact(*) ------------- </option>
						<option name='sauvageot'>matthieu.sauvageot@outlook.fr</option>
						<option name='caze'>andromede97@gmail.com</option>
					</select>
					<br> 
					<br>
      			<label for="message">Message*</label><br>
       			<textarea name="input2" id="message" rows="10" cols="45"></textarea>
       			<br>
       			<p style="font-weight: bolder;">(*): Important</p>

       			<!-- Bouton "de Validation" qui envoie les informations données à la fonction "contact(form2)"
       				(voir fichier "header.php")
       			-->
				<INPUT TYPE="button" NAME="bouton" VALUE="Envoyer" onClick="contact(form2)"><BR>
				
				<!-- Affichage des "informations" données dans le formulaire en JAVA -->
				<!--
				Nom donné: <INPUT TYPE="text" NAME="name1" VALUE=""> <BR>
				Mail choisi: <INPUT TYPE="text" NAME="output1" VALUE=""> <BR>
				Message envoyé: <INPUT TYPE="textarea" NAME="output2" id="message" rows="10" cols="45" VALUE=""> <BR>
				-->
			</FORM>
			<?php
			// Appel au fichier "de Pied de Page" "footer.php"
			include("footer.php");
			?>
