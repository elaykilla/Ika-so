

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
	if($row != NULL )
	{	
		
		
		$search_query = mysql_query("SELECT * FROM photo WHERE offer_id='".$folder."'");

		while($info = mysql_fetch_array($search_query))
		{
?>
			
				<div id="offer_ins">
					<div id="offer_ins_1">
						<img src="<?php echo"/assets/user/one/1/".$info['photo_1']; ?>"/>
						<div id="offer_ins_1_form">
						<form action="#" method="post" enctype="multipart/form-data">
							<font color="black"><label for="file">Filename:</label>
							<input type="text" name="reselect_id" style="display:none;" value="<?php if(isset($_POST['reselect_id'])) {echo$_POST['reselect_id'];} else{echo$_POST['selected_id']; } ?>" /> 
							<input type="file" name="file" id="file" /> 
							<input type="submit" name="submit_1" value="Send" /></font>
						</form>
					</div>
				</div>
		
			<div id="offer_ins_2">
				<img src="<?php echo"/assets/user/one/1/".$info['photo_2']; ?>"/>
					<div id="offer_ins_2_form">
						<form action="" method="post" enctype="multipart/form-data">
							<font color="black"><label for="file">Filename:</label>
							<input type="file" name="file_2" id="file" /> 
							<input type="submit" name="submit_2" value="Send" /></font>
						</form>
					</div>
			</div>
		
			<div id="offer_ins_3">
				<img src="<?php echo"/assets/user/one/1/".$info['photo_3']; ?>"/>
				<div id="offer_ins_3_form">
					<form action="#" method="post" enctype="multipart/form-data">
						<font color="black"><label for="file">Filename:</label>
						<input type="file" name="file_3" id="file" /> 
						<input type="submit" name="submit_3" value="Send" /></font>
					</form>
				</div>
			</div>
		
			<div id="offer_ins_4">
				<img src="<?php echo"/assets/user/one/1/".$info['photo_4']; ?>"/>
				<div id="offer_ins_4_form">
					<form action="#" method="post" enctype="multipart/form-data">
						<font color="black"><label for="file">Filename:</label>
						<input type="file" name="file_4" id="file" /> 
						<input type="submit" name="submit_4" value="Send" /></font>
					</form>
				</div>
			</div>
		
			<div id="offer_ins_5">
				<img src="<?php echo"/assets/user/one/1/".$info['photo_5']; ?>"/>
				<div id="offer_ins_5_form">
					<form action="#" method="post" enctype="multipart/form-data">
						<font color="black"><label for="file">Filename:</label>
						<input type="file" name="file_5" id="file" /> 
						<input type="submit" name="submit_5" value="Send" /></font>
					</form>
				</div>
			</div>
		
	</div>		
	
	<?php }

	} ?>
</div>	