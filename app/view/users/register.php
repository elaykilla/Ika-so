<div id="basic_body">
	<strong><p> Bienvenu Sur la Page d'enregistrement </p></strong>
	<form method="post" action="#">
		<table id="registration_form" border="1px" width="600px" >
			<tr height="40px">
				<td width="200px" align="left">Nom : </td>
				<td><input type="text" name="lastname" placeholder="Nom"></td>
				<td width="250px"> </td></tr>
			<tr height="40px">
				<td width="200px" align="left">Prenom : </td>
				<td><input type="text" name="firstname" placeholder="Prenom"></td>
				<td width="250px"> </td></tr>
			<tr height="40px">
				<td width="200px" align="left">Login : </td>
				<td><input type="text" name="login" placeholder="Identifiant"></td>
				<td width="250px"><?php if(isset($login_error)) {echo "<font color=\"red\">Identifiant exsite deja</font>";} ?></td></tr>
			<tr height="40px">
				<td width="200px" align="left">Mot de Passe : </td>
				<td><input type="password" name="pwd" placeholder="Mot de passe"></td>
				<td width="250px"> </td></tr>
			<tr height="40px">
				<td width="200px" align="left">Confirmer le mot de passe : </td>
				<td><input type="password" name="pwd_ok" placeholder=""></td>
				<td width="250px"><?php if(isset($pwd_check)){if($pwd_check == false) { echo "<font color=\"red\">Le mots de passe ne sont pas identique</font>";}} ?></td></tr>
			<tr height="40px">
				<td width="200px" align="left">Adresse mail : </td>
				<td><input type="text" name="mail" placeholder="Mail"></td>
				<td width="250px"><font color="red">L'adresse est incorrect</font> </td></tr>
			<tr height="40px">
				<td width="200px" align="left"> </td>
				<td><input type="submit" name="register"></td></tr>
		</table>
	</form>
	<?php if(isset($test)){echo "Really..? ".$test;} ?>
</div>