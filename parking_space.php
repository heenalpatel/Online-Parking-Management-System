<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Car Park Management System</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
	<?php
			include('inc/head.php');
	?>
	<link href="Source/datepicker_bootstrap/datepicker_bootstrap.css" rel="stylesheet">
	
</head>
<body>
	<section id="container">
	<?php
			include('inc/header.php');
						
	?>
	
	<section id="content">
	
	<form class="box login" action="process-book-2.php" method="post">
	<fieldset class="boxBody">
	<label><strong>Parking Details</strong></label>
	<hr />
	   <label>PLEASE ENTER DETAILS</label>
	   <select name="street" class="cjComboBox" >
			<option value="CITY HALL">CITY HALL</option>
			<option value="KIJABE STREET">STATION ROAD</option>
			
		</select>
		
		<select name="plot" id="select_id" class="cjComboBox" >
			<option value="PL 001">PL 001</option>
			<option value="PL 002">PL 002</option>
			<option value="PL 003">PL 003</option>
			<option value="PL 004">PL 004</option>
			<option value="PL 005">PL 005</option>
			<option value="PL 006">PL 006</option>
			<option value="PL 007">PL 007</option>
			<option value="PL 008">PL 008</option>
			<option value="PL 009">PL 009</option>
			<option value="PL 010">PL 010</option>
			<option value="PL 011">PL 011</option>
			<option value="PL 012">PL 012</option>
			<option value="PL 013">PL 013</option>
			<option value="PL 014">PL 014</option>
			<option value="PL 015">PL 015</option>
			<option value="PL 016">PL 016</option>
			<option value="PL 017">PL 017</option>
			<option value="PL 018">PL 018</option>
		</select>
		
	<label>Plate Number</label>
	  <input type="text" tabindex="3" name="plateno" placeholder="eg. MH47AB4049" required>
	  
	<label><strong>Payment Information</strong></label>
	<hr />
	<label>Pay at parking location</label>
	<!--<input type="text" name="account" placeholder="Card Number" required title="Credit card number" maxlength="14"/> 
	 -->
	   <label>Note: Parking Fees: ₹.120/-</label>
	</fieldset>
	<footer>
	  <input type="submit" class="btnLogin" value="Proceed to Date & Time" tabindex="4">
	</footer>
</form>
	
	</section>
	<?php
			include('inc/footer.php');
	?>
	</section>
	<script>

	window.addEvent('domready', function(){
		new Picker.Date($$('----'), {
			timePicker: true,
			positionOffset: {x: 5, y: 0},
			pickerClass: 'datepicker_bootstrap',
			useFadeInOut: !Browser.ie
		});
	});
	const params = new Proxy(new URLSearchParams(window.location.search), {
  get: (searchParams, prop) => searchParams.get(prop),
});
alert("data: ", params)
console.log("data", params.data)
document.getElementById("select_id").value = params.data
	</script>
</body>
</html>