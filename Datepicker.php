<section class="order-form" style="background: white;">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
 <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<style type="text/css">
	.form-container{
		max-width: 1113px;
    	margin: 0 auto;
	}
	.farm-head{
		font-size: 36px;
	    text-align: center;
	    color: #554466;
	    font-weight: bold;
	}
	.sub-head{
		color: #554466;
	    font-size: 15px;
	    text-align: center;
	}
	.section-title{
		font-size: 20px;
	    color: #554466;
	    font-weight: bold;
	    padding: 10px 0;
	}
	.title-label{
		font-size: 15px;
    	color: #554466;
	}
	.content-section{
		padding-bottom: 14px;
	}
	.select .title-label{
		display: inline-block;
    	margin-right: 35px;
	}
	input{
		font-size: 15px;
    	font-family: inherit;
	}

</style>
<div class="form-container">
	<div class="farm-head">TREF, INC</div>
	<div class="sub-head">Farmcation/WWoofing Application email to: telderers.rainbowsendfarm@gmail.com</div>
	<div class="table row">
	<div class="section-title" style="padding: 10px 15px;">Personal and Billing Information</div>
	<div class="col-md-6">
		<div class="row content-section">
			<div class="title-label">Guest First Name, Middle Name, Last Name</div>
			<input class="form-control" type="text" name="name">
		</div>
		<div class="row content-section">
			<div class="title-label">E-mail</div>
			<input class="form-control" type="email" name="email">
		</div>
		<div class="row content-section">
			<div class="title-label">Day Phone/Evening Phone</div>
			 <input class="form-control"  type="phone" name="phone">
		</div>
		<div class="row content-section">
			<div class="title-label">Day Phone/Evening Phone</div>
			<input class="form-control"  type="phone" name="phone">
		</div>
		<div class="row content-section">
			<div class="title-label">Billing Address</div>
			<textarea class="form-control" type="text" name="billing_address"></textarea>
		</div>
		<div class="row content-section">
			<div class="title-label">Acceptance Packet Delivery Address</div>
			<textarea class="form-control" type="text" name="delivery_address"></textarea>
		</div>
		<div class="row content-section">
			<div class="title-label">Credit card name</div>
			<input class="form-control" type="text" name="credit_card_name">
		</div>
		<div class="row content-section">
			<div class="title-label">Credit card number</div>
			<input class="form-control" type="text" name="credit_card_number">
		</div>
		<div class="row content-section">
			<div class="title-label">Credit card expiration date</div>
			<input class="form-control" type="date" name="credit_card_expiration_date">
		</div>	
		<div class="section-title">Guest Travel Information</div>
		<div class="row content-section">
			<div class="title-label">Arriving City</div>
			<input class="form-control" type="text" name="arriving_city">
		</div>
		<div class="row content-section">
			<div class="title-label">Arriving Date</div>
			<input class="form-control" id="arriving_date" type="text" name="arriving_date">
		</div>
		<div class="row content-section select">
			<div class="title-label">Arrival Shuttle Service Required?</div>
			<span><input type="radio" name="arrival_service_required" value="yes"><span>Yes</span></span>
			<span><input type="radio" name="arrival_service_required" value="no"><span>No</span></span>
		</div>	
	</div>
	<div class="col-md-6">
	
		<div class="row content-section ">
			<div class="title-label">Departure City?</div>
			<input class="form-control" type="text" name="departure_city">
		</div>
		<div class="row content-section select">
			<div class="title-label">Departure Date?</div>
			<input class="form-control" type="date" name="departure_date">
		</div>
		<div class="row content-section select">
			<div class="title-label">Departure Shuttle Service Required? </div>
			<span><input type="radio" name="departure_service_required" value="yes"><span>Yes</span></span>
			<span><input type="radio" name="departure_service_required" value="no"><span>No</span></span>
		</div>
		<div class="section-title">Lodging Information</div>
		<div class="row content-section select">
			<div class="title-label ">Rooms Requested?</div>
			<select name="rooms_requested">
						<option value="0">0</option>
						<option value="1">1</option>
						<option value="2">2</option>
					</select>
		</div>
		<div class="row content-section select">
			<div class="title-label">Number of Adult Guests This Visit? </div>
					<select name="adult_guest">
						<option value="0">0</option>
						<option value="1">1</option>
						<option value="2">2</option>
						<option value="3">3</option>
						<option value="4">4</option>
					</select>
		</div> 
		<div class="row content-section select">
			<div class="title-label">Number of Child Guests This Visit? </div>
					<select name="child_guest">
						<option value="0">0</option>
						<option value="1">1</option>
						<option value="2">2</option>
						<option value="3">3</option>
						<option value="4">4</option>
					</select>
		</div>
		<div class="row content-section select">
			<div class="title-label">Length of Stay?</div>
					<select name="lenght_of_stay">
						<option value="0">0</option>
						<option value="1">1</option>
						<option value="2">2</option>
						<option value="3">3</option>
						<option value="4">4</option>
					</select>
		</div>
		<div class="row content-section select">
			<div class="title-label">Total Nights?</div>
					<select name="total_nights">
						<option value="0">0</option>
						<option value="1">1</option>
						<option value="2">2</option>
						<option value="3">3</option>
						<option value="4">4</option>
					</select>
		</div>
		<div class="row content-section select">
			<div class="title-label">Special Meal Considerations?</div>
			<span><input type="radio" name="special_meal_consideration" value="yes"><span>Yes</span></span>
			<span><input type="radio" name="special_meal_consideration" value="no"><span>No</span></span>
		</div>
		<div class="row content-section select">
			<div class="title-label">Type of Stay?</div>
			<select name="type_of_stay">
				<option value="Farmcation">Farmcation</option>
				<option value="WWoofing">WWoofing</option>
			</select>
		</div>
		<div class="row content-section select">
			<div class="title-label">Participate in Meal Preparation?</div>
			<span><input type="radio" name="particaipate_in_meal_preparation" value="yes"><span>Yes</span></span>
			<span><input type="radio" name="particaipate_in_meal_preparation" value="no"><span>No</span></span>
		</div>
		<div class="row content-section select">
			<div class="title-label">Special Accommodations Required?</div>
			<select name="special_accommodations_required">
				<option value="Wheel Chair Accessible">Wheel Chair Accessible</option>
				<option value="Disability Bathroom">Disability Bathroom</option>
				<option value="etc">etc</option>
			</select>
		</div>
		<div class="row content-section select">
			<div class="title-label">Guest Allergies We Need to be Informed of? </div>
			<span><input type="radio" name="guest_allergies" value="yes"><span>Yes</span></span>
			<span><input type="radio" name="guest_allergies" value="no"><span>No</span></span>
		</div>
		<div class="row content-section">
			<div class="title-label">Questions or Comments?</div>
			<textarea name="comments" rows="5" type="text"></textarea>
		</div>
	</div>
	
		<script>
		var $myBadDates = new Array("28 February 2017","21 November 2010","12 December 2010","13 January 2011","14 February 2011","15 March 2011");

		function checkBadDates(mydate){
		var $return=true;
		var $returnclass ="available";
		$checkdate = $.datepicker.formatDate('dd MM yy', mydate);
		for(var i = 0; i < $myBadDates.length; i++)
		    {    
		       if($myBadDates[i] == $checkdate)
		          {
		        $return = false;
		        $returnclass= "unavailable";
		        }
		    }
		return [$return,$returnclass];
		}
	  $( function() {
	    $( "#arriving_date" ).datepicker({
	        inline: true,
	        firstDay: 1,
	        showOtherMonths: true,
	        dayNamesMin: ['Sun', 'Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat'],
	        dateFormat: 'dd MM yy',
            beforeShowDay: checkBadDates
    		});
	    });
    </script>

	</div>
</div>
</section>	
