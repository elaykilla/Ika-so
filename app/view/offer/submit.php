

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
						<strong><p> Bienvenu Sur la Page d'enregistrement </p></strong>
							<form method="post" action="#">
								<div id="offer_type_form">
									Choose Your Time of Annoucement :</br>
								 Appartment 	<input type="radio" name="offer_type" value="apt" 		<?php if(isset($choice)){if($choice == "apt"){echo"checked";}} ?> > 
								 House 			<input type="radio" name="offer_type" value="house" 	<?php if(isset($choice)){if($choice == "house"){echo"checked";}} ?> >
								 Business Unit 	<input type="radio" name="offer_type" value="bi" 		<?php if(isset($choice)){if($choice == "bi"){echo"checked";}} ?> >
								 Empty field 	<input type="radio" name="offer_type" value="emp_field" <?php if(isset($choice)){if($choice == "emp_field"){echo"checked";}} ?> >
								 			
								</div>
								<table id="offer_form" border="1px" width="100%" >
									<tr>
										<td>Label : </td>
										<td><input type="text" name="label" id="form_label" placeholder="Label" onfocus="validating_label('offer_form_label', 'offer_form_label_2')" onblur="validate_label('form_label', 'offer_form_label', 'offer_form_label_2')"></td>
										<td><img id="offer_form_label" src="/assets/styles/default/img/validate.png" width="15px" height="15px">
											<img id="offer_form_label_2" src="/assets/styles/default/img/cross.png" width="15px" height="15px">
												<div id="circularG">
													<div id="circularG_1" class="circularG">
													</div>
													<div id="circularG_2" class="circularG">
													</div>
													<div id="circularG_3" class="circularG">
													</div>
													<div id="circularG_4" class="circularG">
													</div>
													<div id="circularG_5" class="circularG">
													</div>
													<div id="circularG_6" class="circularG">
													</div>
													<div id="circularG_7" class="circularG">
													</div>
													<div id="circularG_8" class="circularG">
													</div>
												</div>
										</td>
									</tr>
									<tr>
										<td>Price : </td>
										<td><input type="text" name="price" placeholder="Price"> F CFA</td>
										<td><img src="/assets/styles/default/img/validate.png" width="15px" height="15px"></td>
									</tr>
									<tr>
										<td>City : </td>
										<td><input type="text" name="city" placeholder="Region"></td>
										<td><img src="/assets/styles/default/img/validate.png" width="15px" height="15px"></td>
									</tr>
									<tr >
										<td>Commune : </td>
										<td><input type="text" name="commune" placeholder="Commune"></td>
										<td><img src="/assets/styles/default/img/validate.png" width="15px" height="15px"></td>
									</tr>
									<tr>
										<td>District : </td>
										<td><input type="text" name="district" placeholder="District"></td>
										<td><img src="/assets/styles/default/img/validate.png" width="15px" height="15px">
											</td>
									</tr>
									
									<tr>
										<td> How many rooms ? </td>
										<td><input type="text" name="room_num" placeholder="Number Of Rooms"></td>
										<td></td>
									</tr>
									<tr>
										<td> Are there any bathrooms? </td>
										<td>
											Yes <input type="radio" name="bath" value="yes">
											No <input type="radio" name="bath" value="no">
										</td>
										<td></td>
									</tr>
									<tr>
										<td></td>
										<td>
											How Many ? <input type="text" name="bath_num">
										</td>
										<td></td>
									</tr>
									<tr>
										<td>Are there any kitchens? </td>
										<td>
											Yes <input type="radio" name="kitchen" value="yes">
											No <input type="radio" name="kitchen" value="no">
										</td>
										<td></td>
									</tr>
									<tr>
										<td></td>
										<td>
											How Many ? <input type="text" name="kitchen_num">
										</td>
										<td></td>
									</tr>
									<tr>
										<td>Ready Date : </td>
										<td><input type="text" name="r_date" placeholder="Identifiant"></td>
										<td></td>
									</tr>
									<tr>
										<td>Construction Date : </td>
										<td><input type="text" name="c_date" placeholder="Identifiant"></td>
										
									</tr>
									<tr>
										<td>Description : </td>
										<td><input type="textarea" rownumber="5" name="desc" placeholder="Identifiant"></td>
										<td></td>
									</tr>
									<tr>
										<td> </td>
										<td><input type="submit" name="send_offer"></td>
										<td></td>
									</tr>
								</table>
							</form>
				</div>	