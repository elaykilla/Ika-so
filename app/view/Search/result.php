				<div id="sidebar_1">
					<h4>Criteres Recherche</h4>
					<p>Phasellus ultrices nulla quis nibh. Quisque a lectus. Donec consectetuer ligula vulputate sem tristique cursus. Nam nulla quam, gravida non, commodo a, sodales sit amet, nisi.</p>
					<p>Pellentesque fermentum dolor. Aliquam quam lectus, facilisis auctor, ultrices ut, elementum vulputate, nunc.</p>
				
					<h4>Filtre</h4>
					<ul>
						<li><a href="#">Aliquam tincidunt mauris eu risus.</a></li>
						<li><a href="#">Vestibulum auctor dapibus neque.</a></li>
						<li><a href="#">Nunc dignissim risus id metus.</a></li>
						<li><a href="#">Cras ornare tristique elit.</a></li>
						<li><a href="#">Vivamus vestibulum nulla nec ante.</a></li>
					</ul>		
				</div>
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
				<div id="content">	
				<?php 
				if(isset($_POST['search']))
				{	
					
					
					if($row != NULL)
					{	
						$search_query = mysql_query("SELECT * FROM offer WHERE label LIKE '%".$_POST['search']."%'");
						while($info = mysql_fetch_array($search_query))
						{
							echo "
								<div id=\"offer\">
									<a href=\"/offer/view\" onclick=\"set(".$info['id'].")\"><div id=\"offer_pic\">
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
								";
						}
					}
					else
					{
					echo"No offer matches your query";
					}
				}
				else{
					echo"Make a query";
				}		
				?>
				</div>	

