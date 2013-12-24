<div id="slider">		
	<table width="100%" height="100%" border="1px">		
		<tr width="100%">				
			<td width="400px" height="300px">
				<marquee BEHAVIOR="alternate" direction="up" align="center" height="300px" width="400px" scrolldelay="5" scrollamount="3" onmouseout="this.start()" onmouseover="this.stop()">
					<p>
  						<img border="0" src="/assets/img/slider/slider_img_1.jpg" alt="" hspace="0">
  						<img border="0" src="/assets/img/slider/slider_img_2.jpg" alt="" hspace="1">
  						<img border="0" src="/assets/img/slider/slider_img_3.jpg" alt="" hspace="2">
					</p>
				</marquee>			
			</td>			
			<td width="300">
				<p>
					</br>
					<h2>3 Condos :</h2>
					</br>
					We offer some of the best condos you can find on the market.</br></br>
					<?php
					if(!isset($_SESSION['login'])){  ?>
					Join IKA-SO and see what other great things you can do. </br></br>

					Pouvez vous <a class="register_link" href="/users/register">ENREGISTER ICI</a>. </br>
					<?php
					} 
					?>
				</p>		
			</td>	
		</tr>		
	</table>	
</div>
<div id="items"> 
	<table  width="950px" border="0px"> 	
		<tr width="950px">		
			<td width="300px">			
				<div id="box_1">					
					<img id="box_1_img" src="/assets/img/front_page/banner_home.jpg"> </img>					
							
				</div>			
			</td>		
			<td width="300px">			
				<div id="box_2">					
					<img id="box_2_img" src="/assets/img/front_page/banner_money.jpg"> </img>				
							
				</div>		
			</td>		
			<td width="300px">		
				<div id="box_3">					
					<img id="box_3_img" src="/assets/img/front_page/banner_bank.jpg"> </img>				
						
				</div>		
			</td>	
		</tr>
	</table>
</div>