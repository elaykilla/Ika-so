<?php 
session_start();
$context = array();
if($_GET['action']=='offer/submit')
{	
	if(!isset($_SESSION['id']))
	{
			header("Location: /home/display");
	}
}
else if($_GET['action']=='users/logout')
{	
	session_destroy();
	header('Location: /home/display');
}

function render_action($route) {
	
	global $context; global $offer_id;
	$actionFile = __DIR__.'/app/module/'.$route.'.php';	
	if (file_exists($actionFile))
		include ($actionFile);
	
	$viewFile = __DIR__.'/app/view/'.$route.'.php';
	$out = null;
	if (file_exists($viewFile) && !isset($context['no_render']))
	{
  		ob_start();
  		include ($viewFile);
  		$out = ob_get_contents();
  		ob_end_clean();
	}
	if(!file_exists($actionFile) && !file_exists($viewFile)) {
		header("Status: 303 See Other", false, 303);
		header('Location : /website/404');
		exit();
	}
 	return $out;
}
if($_SERVER['REQUEST_URI']=='/') {
	//header("Status: 303 See Other", false, 303);
	//header('Location : /website/index');
	exit();
}

include __DIR__.'/dal/dal.php';

$out = render_action($_GET['action']);



?>	

<!-- header part -->
<!DOCTYPE html>
<html lang="fr-FR">
	<head>
		<meta charset="UTF-8"/>
		<title><?php echo $context["title"] ?></title>
		<meta name="keywords" content="IKA-SO" />
		<meta name="description" content="BE-NIKA-SO" />
		
		<link href="/assets/styles/default/style.css" rel="stylesheet" type="text/css" />
		<link href="/assets/styles/default/menu.css" rel="stylesheet" type="text/css" />
		<link href="/assets/styles/default/offer_content.css" rel="stylesheet" type="text/css" />
		<link href="/assets/styles/default/show_offer.css" rel="stylesheet" type="text/css" />
		<script src="/assets/js/jquery.js"></script> 
		<script>
			var offer_id;
		</script>
		<script src="/assets/js/menu.js"></script>
		<script src="/assets/js/parameters.js"></script>
		<link rel="icon" type="image/png" href="/assets/default/img/favicon.ico" /> 
		<!--[if IE]>
			<link rel="shortcut icon" type="image/x-icon" href="/assets/default/img/favicon.ico" />
		<![endif]-->
	</head>
	<body>
		<div id="container">
			<header>
					<a href="/home/display"><div id="logo"></div></a>
				<div id="menu">
					<ul>
						<li class="border" onmouseover="mopen('sub')" ><a class="normal" href="#"  >Louer</a></li>
						<li class="border" onmouseover="mopen('sub_1')"><a class="normal" href="#" >Acheter</a></li>
						<li class="border"><a class="normal" href="/offer/submit">Soumettre</a></li>
						<li class="border"><a class="normal" href="/help/contact">Contact</a></li>
						<li class="border" <?php if(isset($_SESSION['login'])){ ?>onmouseover="mopen('logged_in_form')" <?php }else{ ?> onmouseover="mopen('login_form')"<?php }?> ><a class="normal" href="#" ><div id="profile"></div></a></li>
						<li class="greeting">
							<?php 
								if(isset($_SESSION['login'])){  
								echo "Bonjour</br>".$_SESSION['login'];
								} else {echo"<- Pour vous connecter ! </br><font size=\"1\"> Pas de compte : <a href=\"/users/register\">s'enregister</a></font></font>";}
							?>
						</li>
					</ul>
				</div>	
			</header>
			
			<div id="search_banner">
				<form method="post" action="/search/result" >
					<input name="search" type="text" size="40" placeholder="Search..."  id="search_banner_box"/></br>
					<table width="400px" style="position:relative; left:calc(50% - 200px);">
						<tr>
							<td><input type="radio" name="offer_type" value="1"> 
							</td>
							<td><input type="radio" name="offer_type" value="2">
							</td>
							<td><input type="radio" name="offer_type" value="3">
							</td>
							<td><input type="radio" name="offer_type" value="4">
							</td>
						</tr>
						<tr>
							<td>Appartment 
							</td>
							<td>House 
							</td>
							<td>Business Unit 	
							</td>
							<td>Empty field 
							</td>
						</tr>
					</table>			 				
				</form>
			</div>
			<div id="main_block">
				<?php echo $out;?>
			</div>
		<footer><div id="footer">
			<ul >
				<li><p>&copy; Copyright 2013. All Rights Reserved - Site Created by ADMIRAL Voltan D. BLACK</p></li>
			</ul>	
		</div></footer>		
		</div>
		<div id="sub">
			<ul >
        		<li><a href="#" >Appartment</a></li>
       			<li><a href="#">House</a></li>
       			<li><a href="#">Business Unit</a></li>
       			<li><a href="#">Empty Field</a></li>
       		</ul>
       	</div>

       	<div id="sub_1">
			<ul>
        		<li><a href="#">Appartment</a></li>
       			<li><a href="#">House</a></li>
       			<li><a href="#">Business Unit</a></li>
       			<li><a href="#">Empty Field</a></li>
       		</ul>
       	</div>
       		<?php if(isset($_SESSION['login']))
       			{ 
       		?>	<div id="logged_in_form" >
					<div id="account_info">
						<ul>
							<li><a href="/offer/mine">My Offers</a></li>
        					<li><a href="#">Profile</a></li>
       						<li><a href="/users/logout">Deconnexion</a></li>
       					</ul>
       				</div>
       		<?
       			}
       			else
       			{ ?>
       			<div id="login_form" >
       				<form method="post" action="display">
       					<table width="100%">
       						<tr>
       							<td><input type="text" name="login" placeholder="identifiant"/>
       							</td>
       						</tr>
       						<tr>
       							<td>
       								<input type="password" name="pwd" placeholder="mdp"/>
       							</td>
       						</tr>
       						<tr>
       							<td>
       								<input type="submit" name="log_in" value="se connecter"/>
       							</td>
       						</tr>
       					</table>
       				</form>
       		<?php 
       			} 
       		?> 
       	</div>
	</body>
</html>








