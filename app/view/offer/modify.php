

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
	<strong><p> Bienvenu Sur la Page de Modification d'offre </p></strong>
	<?php 
		if(isset($modified))
		{
			echo"<font color=\"green\">The Offer Has Been Modified</font>";
		} 

	?>
			<form method="post" action="#">
			<div id="offer_type_form">
			<?php 

				if($row != NULL )
				{	
					$search_query = mysql_query("SELECT * FROM offer WHERE id=".$temp_id."");

					while($info = mysql_fetch_array($search_query))
					{
					?>
						Choose Your Time of Annoucement :</br>
								 Appartment 	<input type="radio" name="offer_type" value="1" 		<?php if($info['type'] == 1){echo"checked";} ?> > 
								 House 			<input type="radio" name="offer_type" value="2" 	<?php if($info['type'] == 2){echo"checked";} ?> >
								 Business Unit 	<input type="radio" name="offer_type" value="3" 		<?php if($info['type'] == 3){echo"checked";} ?> >
								 Empty field 	<input type="radio" name="offer_type" value="4" <?php if($info['type'] == 4){echo"checked";} ?> >
							</div>
							
								<table id="offer_form" border="1px" width="100%" >
									<tr style="display:none;">
										<td> </td>
										</td>
										<td> <input type="text" name="offer_id" id="ixnay" placeholder="Label" value="<?php echo$temp_id;?>" /></td>
										</td>
										<td> </td>
										</td>
									</tr>
									<tr>
										<td>Label : </td>
										<td><input type="text" name="label" id="form_label" placeholder="Label" value="<?php echo$info['label'];?>" onfocus="validating_label('offer_form_label', 'offer_form_label_2')" 
											onblur="validate_label('form_label', 'offer_form_label', 'offer_form_label_2')"></td>
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
										<td><input type="text" name="price" placeholder="Price" value="<?php echo$info['price']; ?>">  F CFA </td>
										<td><img src="/assets/styles/default/img/validate.png" width="15px" height="15px"></td>
									</tr>
									<tr>
										<td>City : </td>
										<td><input type="text" name="city" placeholder="Region" value="<?php echo$info['city']; ?>"></td>
										<td><img src="/assets/styles/default/img/validate.png" width="15px" height="15px"></td>
									</tr>
									<tr >
										<td>Commune : </td>
										<td><input type="text" name="commune" placeholder="Commune" value="<?php echo$info['com']; ?>"></td>
										<td><img src="/assets/styles/default/img/validate.png" width="15px" height="15px"></td>
									</tr>
									<tr>
										<td>District : </td>
										<td><input type="text" name="district" placeholder="District" value="<?php echo$info['com']; ?>"></td>
										<td><img src="/assets/styles/default/img/validate.png" width="15px" height="15px">
											</td>
									</tr>
									
									<tr>
										<td> How many rooms ? </td>
										<td><input type="text" name="room_num" placeholder="Number Of Rooms" value="<?php echo$info['room_num']; ?>"></td>
										<td></td>
									</tr>
									<tr>
										<td> Are there any bathrooms? </td>
										<td>
											Yes <input type="radio" name="bath" value="yes"  onfocus="show('bath_num_tr')" >
											No <input type="radio" name="bath" value="no" onfocus="hide('bath_num_tr')">
										</td>
										<td></td>
									</tr>
									<tr id="bath_num_tr">
										<td></td>
										<td>
											How Many ? <input type="text" id="bath_num" name="bath_num" value="<?php echo$info['bath_num']; ?>">
										</td>
										<td></td>
									</tr>
									<tr>
										<td>Are there any kitchens? </td>
										<td>
											Yes <input type="radio" name="kitchen" value="yes" onfocus="show('kitchen_num_tr')">
											No <input type="radio" name="kitchen" value="no" onfocus="hide('kitchen_num_tr')">
										</td>
										<td></td>
									</tr>
									<tr id="kitchen_num_tr">
										<td></td>
										<td>
											How Many ? <input type="text" name="kitchen_num" value="<?php echo$info['kitchen_num']; ?>">
										</td>
										<td></td>
									</tr>
									<tr>
										<td>Ready Date : </td>
										<td><input type="text" name="r_date" placeholder="Ready date" value="<?php echo$info['r_date']; ?>"></td>
										<td></td>
									</tr>
									<tr>
										<td>Construction Date : </td>
										<td><input type="text" name="c_date" placeholder="Construction date"value="<?php echo$info['c_date']; ?>"></td>
										
									</tr>
									<tr>
										<td>Description : </td>
										<td><textarea cols="40" rows="5" name="description" placeholder="Quick Descritpion"><?php echo$info['description']; ?></textarea></td>
										<td></td>
									</tr>
									<tr>
										<td> </td>
										<td><input type="submit" name="offer_modif" value="Modify"></td>
										<td></td>
									</tr>
								</table>
				<?php }	
						}?>
							</form>

	
</div>	