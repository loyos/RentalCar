<div class="container">
	<div class="row">
		<?php
		 foreach($cars as $c){
		?>
			<div class="col-md-3 col-sm-4 col-xs-6">
				<div class="car-box">
					<?php
						echo $this->Html->image('cars/'.$c['Car']['url'], array('width' => '262px', 'height' => '136px'));
						echo '<h3>'. $c['Car']['name']. '<br>'. $c['Car']['year']  .'</h3>';
					
						echo $this->Html->link('Book Now',array('controller' => 'index', 'action' => 'view', $c['Car']['id']), array('class' => 'boton'));
					?>
					
					<!-- <a href="vehicle.php?id=101"><input class="boton" type="submit" value="BOOK NOW"></input></a> -->
					<div class="bottom-line">
						<table class="car-table">
							<tr>
								<td>
									PRICE:
								</td>
								<td></td>
							</tr>
							<tr>
								<td>
									<?php echo $c['Car']['price']. ' /Day'; ?>
								</td>
								<td>
									<?php echo ((intval($c['Car']['price']))*7) . '/Week'; ?>
								</td>
							</tr>
						</table>
					</div>	
				</div>
			</div>
		<?php } ?>
	</div>
</div>
<!-- Yacht block -->
<div class="content container">
	<div class="yacht row">
		<div class="yacht-text col-md-6">
			The Numarine 78' Flybridge is a spirited, family orientated yacht which handsomely blends cutting-edge design with state-of-the-art technology. Sleek lines combined with sharp, modern angles create a commanding presence on the water that will get you noticed wherever you cruise. In keeping with the Numarine design ethos, the entire yacht enjoys uninterrupted natural light throughout, further enhancing the luxurious ambiance, always connected to your surroundings. The split level saloon is furnished to the highest standard with ample lounge seating family time and a separate dining area adjacent to the fully equipped galley.<p></p>
		</div>
		<div class="yacht-video col-md-6">
			<iframe src="https://www.youtube.com/embed/Y-p7R14Fnbk?controls=0&amp;showinfo=0" frameborder="1" allowfullscreen></iframe>
		</div>
	</div>
</div>