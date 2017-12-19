<div id="adduser">
	<form id="newActivity">
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
		    <progress id="uploader" value="0" max="100">0%</progress>
		    <input type="file" name="image" id="image">
		    <input type="hidden" name="profilepic" id="profilepic">
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
			<a id="submit">continue</a>
		</div>
	</form>

	<!-- newActivity1 -->
	<form id="newActivity1" style="display: none;">
	  	<div class="form-group">
            <label class="control-label" for="fields">skills</label>
            <div class="controls">
                <div class="entry input-group col-xs-3">
                    <input class="form-control" name="fields[]" type="text" placeholder="Type something" />
                	<span class="input-group-btn">
                        <button class="btn btn-success btn-add" type="button">
                            add
                        </button>
                    </span>
                </div>
            </div>
        </div>
        <div class="form-group">
            <label> </label>
			<a id="submit">continue</a>
		</div>
	</form>

	<!-- newActivity2 -->
	<form id="newActivity2" style="display: none;">
	 	<div class="form-group">
            <label class="control-label" for="fields1">banner images</label>
           	<input class="form-control" name="fields1[]" type="file" id="bannerImage" multiple />
        </div>
         <div class="form-group">
            <label> </label>
			<a id="submit">continue</a>
		</div>
	</form>

	<!-- newActivity2 -->
	<form id="newActivity3" style="display: none;">
		<div class="form-group">
            <label class="control-label" for="projectTitle">title</label>
           	<input class="form-control" name="projectTitle" type="text" id="projectTitle" />
        </div>
	 	<div class="form-group">
            <label class="control-label" for="projectImage">cover image</label>
           	<input class="form-control" name="projectImage" type="file" id="projectImage" />
           	<input type="hidden" name="projectcoverimg" id="projectcoverimg">
        </div>
        <div class="form-group">
            <label class="control-label" for="projectUrl">url</label>
           	<input class="form-control" name="projectUrl" type="text" id="projectUrl" />
        </div>
         <div class="form-group">
            <label> </label>
			<a id="continue">continue</a>
			<a id="finish">finish</a>	
		</div>
	</form>

	<div id="newActivity4" style="display: none;">
		<p>You successfully create your profile</p>
		<a href="<?php echo base_url(); ?>admin/users/userlist">go to userlist</a>
	</div>
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
// auto suggesstion
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
});

// dynamic input added for skills
$(document).on('click', '.btn-add', function(e) {
    e.preventDefault();

    var controlForm = $('.controls'),
        currentEntry = $(this).parents('.entry:first'),
        newEntry = $(currentEntry.clone()).appendTo(controlForm);

    newEntry.find('input').val('');
    controlForm.find('.entry:not(:last) .btn-add')
        .removeClass('btn-add').addClass('btn-remove')
        .removeClass('btn-success').addClass('btn-danger')
        .html('remove');
}).on('click', '.btn-remove', function(e) {
	$(this).parents('.entry:first').remove();
	e.preventDefault();
	return false;
});

// dynamic input added for banner images
$(document).on('click', '.btn-add', function(e) {
    e.preventDefault();

    var controlForm = $('.controls1'),
        currentEntry = $(this).parents('.entry1:first'),
        newEntry = $(currentEntry.clone()).appendTo(controlForm);

    newEntry.find('input').val('');
    controlForm.find('.entry1:not(:last) .btn-add')
        .removeClass('btn-add').addClass('btn-remove')
        .removeClass('btn-success').addClass('btn-danger')
        .html('remove');
}).on('click', '.btn-remove', function(e) {
	$(this).parents('.entry1:first').remove();
	e.preventDefault();
	return false;
});

var config = {
  apiKey: "fcafcbc7f2a2ace18ce6721a5bee2a24dc1dad8b",
  authDomain: "https://createcv-1e398.firebaseio.com/",
  databaseURL: "https://createcv-1e398.firebaseio.com/",
  projectId: "createcv-1e398; ?>",
  storageBucket: "gs://createcv-1e398.appspot.com",
};


firebase.initializeApp(config);
var dbRef = firebase.database();



// profile pic image upload in firebse
var uploader = document.getElementById('uploader');
var fileButton = document.getElementById('image');
fileButton.addEventListener('change', function(e){
	var file = e.target.files[0];
	alert(file.name);
	var storageRef = firebase.storage().ref('images/'+file.name);
	var task = storageRef.put(file);
	task.on('state_changed', function progress(snapshot) {
		var percentage = (snapshot.bytesTransferred/snapshot.totalBytes)*100;
		uploader.value = percentage;
	}, function error(err) {

	},function complete() {

	});
	task.then((snapshot) => {
	    $("#profilepic").val(snapshot.downloadURL);
	});
});  

//multiple banner image upload in firebse
//Listen for file selection
var fileURLs = []; // array to hold all file urls 

var fileButton1 = document.getElementById('bannerImage');
fileButton1.addEventListener('change', function(e){ 
    //Get files
    for (var i = 0; i < e.target.files.length; i++) {
        var imageFile = e.target.files[i];
        uploadImageAsPromise(imageFile);
    }
    alert("uploaded");
});

//Handle waiting to upload each file using promise
function uploadImageAsPromise (imageFile) {
    return new Promise(function (resolve, reject) {
        var storageRef = firebase.storage().ref('banners/'+imageFile.name);

        //Upload file
        var task = storageRef.put(imageFile);

        //Update progress bar
        task.on('state_changed',
            function progress(snapshot){
                var percentage = snapshot.bytesTransferred / snapshot.totalBytes * 100;
                uploader.value = percentage;
            },
            function error(err){

            },
            function complete(){
                var downloadURL = task.snapshot.downloadURL;
            }
        );
        task.then((snapshot) => {
	    	fileURLs.push(snapshot.downloadURL);
		});
    });
}

$('#newActivity #submit').click(function(e) {
	// get values
	var username = $("#name").val();
	var dob = $("#dob").val();
	var profilepic = $("#profilepic").val();
	var email = $("#email").val();
	var mobile = $("#mobile").val();
	var location = $("#location").val();
	var lat = $("#lat").val();
	var lang = $("#lang").val();
	var Professional = $("#Professional").val();
	var qualification = $("#qualification").val();
	var description = $("#description").val();
	
	// declared firebase data inserting place
	var contactsRef = dbRef.ref('users/'+username+'/profile');

	// firebase update function
	contactsRef.update({ 
	    'username': username,
	    'dob': dob,
	    'profilepic': profilepic,
	    'email' : email,    
	    'mobile': mobile,
	    'location': location,
	    'lat': lat,
	    'lang': lang,
	    'Professional': Professional,
	    'qualification': qualification,
	    'description': description,
	});

	// return fuction of update function
	contactsRef.on('value', function(snap) {
	    $("#newActivity").hide();
		$("#newActivity1").show();
	});
});

$('#newActivity1 #submit').click(function(e) {
	// get values
	var username = $("#name").val();
	var skills = $("input[name='fields[]']").map(function(){return $(this).val();}).get();
	
	// declared firebase data inserting place
	var contactsRef = dbRef.ref('users/'+username);

	// firebase update function
	contactsRef.update({ 
	    'skills': skills,
	});

	// return fuction of update function
	contactsRef.on('value', function(snap) {
	    $("#newActivity1").hide();
		$("#newActivity2").show();
	});
});

$('#newActivity2 #submit').click(function(e) {
	// get values
	var username = $("#name").val();
	
	// declared firebase data inserting place
	var contactsRef = dbRef.ref('users/'+username);

	// firebase update function
	contactsRef.update({ 
		'banners': fileURLs
	});

	// return fuction of update function
	contactsRef.on('value', function(snap) {
	    $("#newActivity2").hide();
		$("#newActivity3").show();
	});
});


//project cover image upload in firebse
var fileButton3 = document.getElementById('projectImage');
fileButton3.addEventListener('change', function(e){
	var file = e.target.files[0];
	alert(file.name);
	var storageRef = firebase.storage().ref('project/'+file.name);
	var task = storageRef.put(file);
	task.on('state_changed', function progress(snapshot) {
		var percentage = (snapshot.bytesTransferred/snapshot.totalBytes)*100;
		uploader.value = percentage;
	}, function error(err) {

	},function complete() {

	});
	task.then((snapshot) => {
	    $("#projectcoverimg").val(snapshot.downloadURL);
	});
});

// newActivity3
$('#newActivity3 #continue').click(function(e) {
	// get values
	var username = $("#name").val();
	var title = $("#projectTitle").val();
	var coverimg = $("#projectcoverimg").val();
	var url = $("#projectUrl").val();

	// declared firebase data inserting place
	var contactsRef = dbRef.ref('users/'+username+'/projects');

	// firebase update function
	contactsRef.push({ 
		'title': title,
		'coverimg': coverimg,
		'url': url,
	});
	// return fuction of update function
	contactsRef.on('value', function(snap) {
		$("#projectTitle").val('');
		$("#projectcoverimg").val('');
		$("#projectUrl").val('');
		$("#projectImage").val('');
		$("#newActivity3").hide();
		$("#newActivity4").show();
	});
});

$('#newActivity3 #finish').click(function(e) {
	$("#newActivity4").show();
});
</script>