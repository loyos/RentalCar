<div class="content container">
	<div class="row">
		<div class="vehicle-img col-md-6">
			<?php
				// debug($car);
				echo $this->Html->image('cars/' . $car['Car']['url']);
			?>
		</div>
		<div class="reservation col-md-6">
		
		<?php echo $this->Form->create('Request'); ?>
			
			<div class="field size">
				<label for="pickuplocation">Pick-up location:</label>
				<?php echo $this->Form->input('pick_up_loc', array(
					'label' => false,
					'id' => 'pickuplocation',
					'options' => array(
						'Miami Beach' => 'Miami Beach',
						'Miami Airport' => 'Miami Airport',
						'Ft. Lauderdale Airport' => 'Ft. Lauderdale Airport',
					)
				)); ?>
			</div>
			<div class="field size">
				<label for="dropofflocation">Drop-off location:</label>
				<?php echo $this->Form->input('drop_off_loc', array(
					'label' => false,
					'id' => 'dropofflocation',
					'options' => array(
						'Miami Beach' => 'Miami Beach',
						'Miami Airport' => 'Miami Airport',
						'Ft. Lauderdale Airport' => 'Ft. Lauderdale Airport',
					)
				)); ?>
			</div>
			<div class="clear"></div>
			<div class="field size">
				<label>Pick-up date:</label>
				<?php echo $this->Form->input('pick_up_date', array(
					'id' => 'pick_up_date',
					'label' => false,
					'type' => 'text'
				));
				?>
			</div>
			<div class="field size">
				<label for="pickuptime">Pick-up time:</label>
				<?php echo $this->Form->input('pick_up_time', array(
					'label' => false,
					'options' => array(
						'07:30 AM' => '07:30 AM',
						'08:00 AM' => '08:00 AM',
						'09:00 AM' => '09:00 AM',
						'10:00 AM' => '10:00 AM',
						'11:00 AM' => '11:00 AM',
						'12:00 PM' => '12:00 PM',
						'1:00 PM' => '1:00 PM',
						'2:00 PM' => '2:00 PM',
						'3:00 PM' => '3:00 PM',
						'4:00 PM' => '4:00 PM',
						'5:00 PM' => '5:00 PM',
						'6:00 PM' => '6:00 PM',
						'7:00 PM' => '7:00 PM'
					)
				)); ?>
				
			</div>
			<div class="clear"></div>
			<!-- drop-off date -->
			<div class="field size">
				<label>Drop-off date:</label>
				<?php echo $this->Form->input('drop_off_date', array(
					'id' => 'drop_off_date',
					'label' => false,
					'type' => 'text'
				 ));
				?>
			</div>	
				<!-- drop-off time -->
			<div class="field size">	
				<label for="dropofftime">Drop-off time:</label>
				<?php echo $this->Form->input('drop_off_time', array(
					'label' => false,
					'options' => array(
						'07:30 AM' => '07:30 AM',
						'08:00 AM' => '08:00 AM',
						'09:00 AM' => '09:00 AM',
						'10:00 AM' => '10:00 AM',
						'11:00 AM' => '11:00 AM',
						'12:00 PM' => '12:00 PM',
						'1:00 PM' => '1:00 PM',
						'2:00 PM' => '2:00 PM',
						'3:00 PM' => '3:00 PM',
						'4:00 PM' => '4:00 PM',
						'5:00 PM' => '5:00 PM',
						'6:00 PM' => '6:00 PM',
						'7:00 PM' => '7:00 PM'
					)
				)); ?>
			</div>
			<div class="field size">
				<label for="driversage">Driver's age:</label>
				
				<?php echo $this->Form->input('driver_age', array(
					'label' => false,
					'id' => 'driversage',
					'options' => array(
						'25 and up' => '25 and up',
						'21-24' => '21-24',
					)
				)); ?>
			</div>
		</div>
	</div>
</div>
<div class="content container">	
	<div class="row info">
		<div class="s-extras col-md-4">
			<h3>Suggested Extras</h3>
			<table class="table">
				<tbody>
					<tr>
						<td>
							<?php
								echo $this->Form->checkbox('loss_damage', array(
									'value' => '23',
									'class' => 'check',
									'data-price' => '23'
								));
							?>
						<!--	<input name = "loss_damage_waiver" value = "23" type="checkbox" class = "check" data-price = "23"> -->
						</td>
						<td>
							<label>Loss damage waiver</label>
						</td>
						<td>
							<p>$23/day</p>
						</td>	
					</tr>
					<tr>
						<td>
							<?php
								echo $this->Form->checkbox('nav_sys', array(
									'value' => '9',
									'class' => 'check',
									'data-price' => '9'
								));
							?>
						
						<!-- 	<input name = "nav_system" value = "9" type="checkbox" class = "check" data-price = "9"> -->
						</td>
						<td>
							<label>Navigation system</label>
						</td>
						<td>
							<p>$9/day</p>
						</td>	
					</tr>
					<tr>
						<td>
						
							<?php
								echo $this->Form->checkbox('toll_service', array(
									'value' => '8',
									'class' => 'check',
									'data-price' => '8'
								));
							?>
						
							<!-- <input name = "toll_service" value = "8" type="checkbox" class = "check" data-price = "8"> -->
						</td>
						<td>
							<label>Toll service</label>
						</td>
						<td>
							<p>$8/day</p>
						</td>	
					</tr>
					<tr>
						<td>
						
							<?php
							echo $this->Form->checkbox('child_seat', array(
								'value' => '5',
								'class' => 'check',
								'data-price' => '5'
							));
							?>
							
						<!--	<input name = "child_seat" value = "5" type="checkbox" class = "check" data-price = "5"> -->
						</td>
						<td>
							<label>Child safety seat</label>
						</td>
						<td>
							<p>$5/day</p>
						</td>	
					</tr>
					<tr>
						<td>
							
							<?php
							echo $this->Form->checkbox('extra_driver', array(
								'value' => '20',
								'class' => 'check',
								'data-price' => '20'
							));
							?>
						
							<!-- <input name = "extra_driver" value = "20" type="checkbox" class = "check" data-price = "20"> -->
						</td>
						<td>
							<label>Additional driver</label>
						</td>
						<td>
							<p>$20/day</p>
						</td>	
					</tr>	
				</tbody>
			</table>
		</div>
		<div class="total-p col-md-4">
			<h3>Your total price</h3>
			<table class="table">
				<tbody>
					<tr>
						<td>
							Rental price
						</td>
						<td>
							<p><?php echo "$".$car['Car']["price"]."/day"; ?></p>
						</td>	
					</tr>
					<!-- If the driver is under age, charge the driver -->
					 <tr class = "underage_row" style = "display: none;">
						<td>
							<label>Underage driver</label>
						</td>
						<td>
							<p>$20/day</p>
						</td>	
					</tr>

					<!-- If drop off location is different from pick up location, charge the customer $20 -->

					 <tr class = "pickdrop_charge" style = "display: none;">
						<td>
							<label>Pick-up/Drop-off charge (if different)</label>
						</td>
						<td>
							<p>$20/day</p>
						</td>	
					</tr>

					<!-- sub-total -->

					 <tr>
						<td>
							<label>Sub-total</label>
						</td>
						<td>
							<p class = "total_price"><?php echo "$<span>".$car['Car']["price"]."</span>/day"; ?></p>
						</td>	
					</tr>

					<!-- Sale tax is 7% of the sub-total-->

					 <tr>
						<td>
							<label>Sale tax</label>
						</td>
						<td>
							<p>7% <span class = "tax" style = "color: white;">  </span></p>
						</td>	
					</tr>
					<tr>
						<td>
							<label>Total</label>
						</td>
						<td>
							<p class = "final_price"><span> </span></p>
						</td>	
					</tr>	
				</tbody>
			</table>
		</div>
		<div class="submit col-md-4">
			<h3>Send your request</h3>
				<table>
					<tbody>
					<tr>
						<td>
							<label>First Name:</label>
							<?php echo $this->Form->input('first_name', array(
								'label' => false,
								'placeholder' => 'Your Name',
								'style' => 'width:90%;'
							 ));
							?>
						</td>
						<td>
							<label>Last Name:</label>
							<?php echo $this->Form->input('last_name', array(
								'label' => false,
								'placeholder' => 'Your Last Name',
								'style' => 'width:90%;'
							 ));
							?>
						</td>
					</tr>
					<tr>
						<td>
							<label>Phone:</label>
							<?php echo $this->Form->input('phone', array(
								'label' => false,
								'placeholder' => 'Your Phone',
								'style' => 'width:90%;'
							 ));
							?>
						</td>
						<td>
							<label>Email:</label>
							<?php echo $this->Form->input('email', array(
								'label' => false,
								'placeholder' => 'Your Email',
								'style' => 'width:90%;'
							 ));
							?>
						</td>
					</tr>
					</tbody>
				</table>
				<table>
					<tbody>
						<tr>
							<td>
								<label>Comments:</label>
								<?php echo $this->Form->input('comment', array(
									'label' => false,
									'placeholder' => 'Your Name',
									'style' => 'width:100%;'
									));
								?>
							</td>
						</tr>
						<tr>
							<td>
								<?php echo $this->Form->button('Submit', array('type' => 'submit', 'class' => 'boton', 'style' => "margin-top:15px")); ?>
								<!-- <button class="boton" value="send" style="margin-top:15px">Submit</button> -->
							</td>
						</tr>
					</tbody>
				</table>
				
				<!-- hidden fields -->
				
				<?php echo $this->Form->input('car_id', array(
					'type' => 'hidden',
					'value' => $car_id 
					));
				?>
				
				<?php echo $this->Form->input('total_days', array(
					'type' => 'hidden',
					'id' => 'total_days'
					));
				?>
				
 				<?php echo $this->Form->input('sub_total', array(
					'type' => 'hidden',
					'id' => 'sub_total'
					));
				?>
				
				<?php echo $this->Form->input('total_tax', array(
					'type' => 'hidden',
					'id' => 'total_tax'
					));
				?>
				
				<?php echo $this->Form->input('total_price', array(
					'type' => 'hidden',
					'id' => 'total_price'
					));
				?>
				
				<!--  end hidden fields -->
			</div> 
		<?php echo $this->Form->end(); ?>
	</div>
</div>

<script>
	
	$('.check').change(function(){  // update price when check any checkbox
		
		if($(this).is(':checked')){
			var total = parseInt($('.total_price span').text());
			var a = parseInt($(this).data("price"));
			$('.total_price span').html(total + a);
		}else{
			var total = parseInt($('.total_price span').text());
			var a = parseInt($(this).data("price"));
			$('.total_price span').html(total - a);
		}
		update_total();
	});
	
	var applied = false;
		$('#driversage').change(function(){  // underage driver fee 		
		
		if($(this).val() == "21-24"){
			$('.underage_row').fadeIn();
			var total = parseInt($('.total_price span').text());
			$('.total_price span').html(total + 20);
			applied = true;
		}else{
			$('.underage_row').fadeOut();
			var total = parseInt($('.total_price span').text());
			if(applied){
				$('.total_price span').html(total-20);
				applied = false;
			}else{
				$('.total_price span').html(total);
			}
		}
		update_total();
	});
	
	var pickdrop_applied = false;
	
	$('#pickuplocation, #dropofflocation').change(function(){
		var pick_up = $('#pickuplocation').val();
		var drop_off = $('#dropofflocation').val();
		
		if((pick_up != drop_off)){
			$('.pickdrop_charge').fadeIn();
			var total = parseInt($('.total_price span').text());
			
			if(!pickdrop_applied){
				$('.total_price span').html(total + 20);
			}
			pickdrop_applied = true;
		}else{
			$('.pickdrop_charge').fadeOut();
			var total = parseInt($('.total_price span').text());
			if(pickdrop_applied){
				$('.total_price span').html(total-20);
				pickdrop_applied = false;
			}else{
				$('.total_price span').html(total);
			}
		}
		update_total();
	});
	
	$(function(){
		$('.final_price').html('$'+ $('.total_price span').text());
	});
	
	
	$(function(){
		$("#pick_up_date, #drop_off_date ").datepicker({
			minDate: new Date()
		});
	});
	
	function update_total(){
	
		// console.debug(total_days);
		if( typeof total_days != 'undefined'){
			// console.debug('pass');
			var sub_total = parseInt($('.total_price span').text()* total_days);
		}else{
			var sub_total = parseInt($('.total_price span').text());
		}
		var final_price = sub_total * 0.07 + sub_total;
		var tax =   Math.floor(sub_total * 0.07);
		
		$('.tax').html(' ($'+ tax +')');
		$('.final_price').html('$'+ Math.floor(final_price));
		
		// variables to be saved into database
		$('#total_tax').val(tax);
		$('#total_days').val(total_days);
		$('#total_price').val(final_price);
		$('#sub_total').val(sub_total);
	}
	
	$(function(){
		update_total();
	});
	
	var total_days;
	
	$('#drop_off_date, #pick_up_date').change(function(){
		var drop_date = $('#drop_off_date').val();
		var pick_date = $('#pick_up_date').val();
		
		if((drop_date != '') && (pick_date != '')){
		
			pick_date = new Date(pick_date);
			drop_date = new Date(drop_date);
			
			total_days = 1 + (drop_date.getTime() - pick_date.getTime())/ (24 * 60 * 60 * 1000);
			update_total();
		}
		
	});
	
</script>