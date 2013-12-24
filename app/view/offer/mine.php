

<div id="sidebar_2">
	<h4>Pub 1</h4>
	<p>Phasellus ultrices nulla quis nibh. Quisque a lectus. Donec consectetuer ligula vulputate sem tristique cursus. Nam nulla quam, gravida non, commodo a, sodales sit amet, nisi.</p>
	<p>Pellentesque fermentum dolor. Aliquam quam lectus, facilisis auctor, ultrices ut, elementum vulputate, nunc.</p>
</div>
<div id="sidebar_3">
	<h4>Pub Bank</h4>
	<ul>
		<li><a href="#">Aliquam tincidunt mauris eu risus.</a></li>
		<li><a href="#">Vestibulum auctor dapibus neque.</a></li>
		<li><a href="#">Nunc dignissim risus id metus.</a></li>
		<li><a href="#">Cras ornare tristique elit.</a></li>
		<li><a href="#">Vivamus vestibulum nulla nec ante.</a></li>
	</ul>
</div>
<div id="content_2">

<?php 		
if($row != NULL)
					{	
						$search_query = mysql_query("SELECT * FROM offer WHERE c_id='".$_SESSION['id']."'");
						while($info = mysql_fetch_array($search_query))
						{
							echo "

								<div id=\"offer_mine\">
									<a href=\"/offer/view\"><div id=\"offer_pic\">
										<img src=\"#\">
									</div></a>
									<div id=\"offer_content\">
										<div id=\"offer_label\">
											".$info['label']."
										</div>
										<div id=\"offer_description\">
											".$info['description']."
										</div>
										<div id=\"offer_contact\">
											<table width=\"100%\">
												<tr>
													<td width=\"33%\">
													Call
													</td>
													<td width=\"34%\" align=\"center\">
													Available
													</td>
													<td width=\"33%\" align=\"right\">
													".exact($info['date'])."
													</td>
												</tr>
											</table>  
										</div>						
									</div> 
								</div>
								<table id=\"modif_table\" width=\"500px\" height=\"50px\">
									<tr>
										<td>
											<div id=\"div_modif_offer\" >
												<form method=\"post\" action=\"modify\">
													<input type=\"text\" name=\"selected_id\" style=\"display:none;\" value=\"".$info['id']."\">
													<input type=\"submit\" name=\"modif_offer\" value=\"Modify Info\">
												</form>
											</div>
										</td>
										<td>
											<div id=\"div_modif_picture\" >
												<form method=\"post\" action=\"img_submit\">
													<input type=\"text\" name=\"selected_id\" style=\"display:none;\" value=\"".$info['id']."\">
													<input type=\"submit\" name=\"modif_picture\" value=\"Modify Pictures\">
												</form>
											</div>
										</td>
									<tr>
								</table>
								</br>

								";
						}
					}
					else
					{
					echo"No offer matches your query";
					}
?>	
	
</div>	