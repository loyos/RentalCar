<table>
	<tr>
		<td> Car Info:</td>
		<td> <?php echo $car_info['Car']['name']. "  /  ". $car_info['Car']['year']. "  /  $".  $car_info['Car']['price']; ?> </td>
	</tr>
	<tr>
		<td> First Name:</td>
		<td> <?php echo $info['Request']['first_name']; ?> </td>
	</tr>
	<tr>
		<td> Last Name:</td>
		<td> <?php echo $info['Request']['last_name']; ?> </td>
	</tr>
	<tr>
		<td> Phone:</td>
		<td> <?php echo $info['Request']['phone']; ?> </td>
	</tr>
	<tr>
		<td> Email:</td>
		<td> <?php echo $info['Request']['email']; ?> </td>
	</tr>
	<tr>
		<td> Comments:</td>
		<td> <?php echo $info['Request']['comment']; ?> </td>
	</tr>
	<tr>
		<td> Pick-up location:</td>
		<td> <?php echo $info['Request']['pick_up_loc']; ?> </td>
	</tr>
	<tr>
		<td> Drop-off location:</td>
		<td> <?php echo $info['Request']['drop_off_loc']; ?> </td>
	</tr>
	<tr>
		<td> Pick-up Date:</td>
		<td> <?php echo $info['Request']['pick_up_date']; ?> </td>
	</tr>
	<tr>
		<td> Pick-up Time:</td>
		<td> <?php echo $info['Request']['pick_up_time']; ?> </td>
	</tr>
	<tr>
		<td> Drop-off date:</td>
		<td> <?php echo $info['Request']['drop_off_date']; ?> </td>
	</tr>
	<tr>
		<td>  Drop-off Time:</td>
		<td> <?php echo $info['Request']['drop_off_time']; ?> </td>
	</tr>
	<tr>
		<td> Driver age:</td>
		<td> <?php echo $info['Request']['driver_age']; ?> </td>
	</tr>
	<tr>
		<td> Loss damage waiver:</td>
		<td> <?php echo "$". $info['Request']['loss_damage']; ?> </td>
	</tr>
	<tr>
		<td> Navigation system:</td>
		<td> <?php echo "$". $info['Request']['nav_sys']; ?> </td>
	</tr>
	<tr>
		<td> Toll service:</td>
		<td> <?php echo  "$". $info['Request']['toll_service']; ?> </td>
	</tr>
	<tr>
		<td> Child safety seat:</td>
		<td> <?php echo "$". $info['Request']['child_seat']; ?> </td>
	</tr>
	<tr>
		<td> Additional driver:</td>
		<td> <?php echo "$". $info['Request']['extra_driver']; ?> </td>
	</tr>
	<tr>
		<td> Total days:</td>
		<td> <?php echo "$". $info['Request']['total_days']; ?> </td>
	</tr>
	<tr>
		<td> Sub Total:</td>
		<td> <?php echo "$". $info['Request']['sub_total']; ?> </td>
	</tr>
	<tr>
		<td> Total tax:</td>
		<td> <?php echo "$". $info['Request']['total_tax']; ?> </td>
	</tr>
	<tr>
		<td> Total Price:</td>
		<td> <?php echo "$". $info['Request']['total_price']; ?> </td>
	</tr>
</table>