<div id="adduser">
	<form id="newActivity" enctype="multipart/form-data" action="<?php echo base_url(); ?>admin/users/add_user" method="post">
		<div class="form-group">
		    <label for="name">name</label>
		    <input type="text" name="name" id="name">
	  	</div>
	  	<div class="form-group">
		    <label for="dob">d.o.b</label>
		    <input type="text" name="dob" id="dob">
	  	</div>
	  	<div class="form-group">
		    <label for="image">profile pic</label>
		    <input type="file" name="image" id="image">
	  	</div>
	  	<div class="form-group">
		    <label for="email">email</label>
		    <input type="email" name="email" id="email">
	  	</div>
	  	<div class="form-group">
		    <label for="mobile">mobile</label>
		    <input type="number" name="mobile" id="mobile">
	  	</div>
	  	<div class="form-group">
		    <label for="location">location</label>
		    <input type="text" name="location" id="location">
		    <input type="hidden" name="lat" id="lat">
		    <input type="hidden" name="lang" id="lang">
	  	</div>
	  	<div class="form-group">
		    <label for="Professional">Professional</label>
		    <input type="text" name="Professional" id="Professional">
	  	</div>
	  	<div class="form-group">
		    <label for="qualification">qualification</label>
		    <input type="text" name="qualification" id="qualification">
	  	</div>
	  	<div class="form-group">
		    <label for="description">description</label>
		    <textarea name="description" id="description"></textarea>
	  	</div>
        <div class="form-group">
            <label> </label>
			<input type="submit" value="continue" id="submit">	
		</div>

	</form>
</div>

<style type="text/css">
	#newActivity {
	    width: 550px;
	    display: inline-block;
	}
	#newActivity .form-group {
		display: inline-block;
		width: 100%;
		margin-bottom: 15px;
	}
	#newActivity h4 {
		display: inline-block;
		width: 100%;
	}
	#newActivity input {
	    float: right;
	    width: 300px;
	    display: inline-block;
	}
	#newActivity textarea {
		width: 300px;
		display: inline-block;
		float: right;
	}
	#newActivity label {
	    display: inline-block;
	    float: left;
	    width: 200px;
	}
	#newActivity input#submit {
	    width: 305px;
	}
</style>

<script src="https://maps.googleapis.com/maps/api/js?v=3.exp&key=AIzaSyAom1PVwNn8gAvSl18fSKRI1Jlu-JOH5fQ&libraries=places"></script>
<script src="<?php echo base_url(); ?>js/jquery.city-autocomplete.js" type="text/javascript"></script> 
<script type="text/javascript">
$('#location').keypress(function() {
    var input = document.getElementById('location');
    var autocomplete = new google.maps.places.Autocomplete(input);    
    google.maps.event.addListener(autocomplete, 'place_changed', function() {
	   	var place = autocomplete.getPlace();  
      	var r = place.formatted_address; 
        if(r!= undefined) {
        	var lat = place.geometry.location.lat();
        	$("#lat").val(lat);
        	var lng = place.geometry.location.lng();
        	$("#lang").val(lng);

    	}
    }); 
})
</script>