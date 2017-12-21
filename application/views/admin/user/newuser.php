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
		    <div id="dropbox"> 
				<input type="file" id="fileElem" multiple accept="image/*" style="display:none" onchange="handleFiles(this.files)">  
				<a href="#" id="fileSelect">Select some files</a>
				<div class="progress-bar" id="progress-bar">
				    <div class="progress" id="progress"></div>
				</div>
			</div>	    
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
           	<div id="dropbox1"> 
				<input type="file" id="fileElem1" multiple accept="image/*" style="display:none" onchange="handleFiles1(this.files)">  
				<a href="#" id="fileSelect1">Select some files</a>
				<div class="progress-bar" id="progress-bar">
				    <div class="progress" id="progress"></div>
				</div>
			</div>           	
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
           	<div id="dropbox2"> 
				<input type="file" id="fileElem2" multiple accept="image/*" style="display:none" onchange="handleFiles2(this.files)">  
				<a href="#" id="fileSelect2">Select some files</a>
				<div class="progress-bar" id="progress-bar">
				    <div class="progress" id="progress"></div>
				</div>
			</div>
        </div>
        <div class="form-group">
            <label class="control-label" for="projectUrl">url</label>
           	<input class="form-control" name="projectUrl" type="text" id="projectUrl" />
        </div>
         <div class="form-group">
            <label> </label>
            <a id="addmore">addmore</a>
			<a id="continue">continue</a>
		</div>
	</form>

  <form id="newActivity4" style="display: none;">
    <div class="row">
      <div class="input-field col s12">
        <input name="facebook" id="facebook" type="text" class="validate">
        <label for="facebook">facebook</label>
      </div>
    </div>
    <div class="row">
        <div class="input-field col s12">
          <input name="twitter" id="twitter" type="text" class="validate">
          <label for="twitter">twitter</label>
        </div>
    </div>
    <div class="row">
      <div class="input-field col s12">
        <input name="linkedin" id="linkedin" type="text" class="validate">
        <label for="linkedin">linkedin</label>
      </div>
    </div>
    <div class="row">
        <div class="input-field col s12">
          <input name="whatsapp" id="whatsapp" type="text" class="validate">
          <label for="whatsapp">whatsapp</label>
        </div>
    </div>
     <div class="form-group">
            <label> </label>
      <a id="finish">finish</a>
    </div>
  </form>

	<div id="newActivity5" style="display: none;">
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
<!-- <script src="<?php echo base_url(); ?>js/jquery.city-autocomplete.js" type="text/javascript"></script>  -->

<!-- cloudinary plugins -->
<script src='<?php echo base_url(); ?>js/cloudinary/jquery.ui.widget.js' type='text/javascript'></script>
<script src='<?php echo base_url(); ?>js/cloudinary/jquery.iframe-transport.js' type='text/javascript'></script>
<script src='<?php echo base_url(); ?>js/cloudinary/jquery.fileupload.js' type='text/javascript'></script>
<script src='<?php echo base_url(); ?>js/cloudinary/jquery.cloudinary.js' type='text/javascript'></script>

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
const cloudName = 'dg1flfrcd';
const unsignedUploadPreset = 'gq24j9uc';

// profile pic
var fileSelect = document.getElementById("fileSelect"),
  fileElem = document.getElementById("fileElem");

fileSelect.addEventListener("click", function(e) {
  if (fileElem) {
    fileElem.click();
  }
  e.preventDefault(); // prevent navigation to "#"
}, false);

// banners
var fileSelect1 = document.getElementById("fileSelect1"),
  fileElem1 = document.getElementById("fileElem1");

fileSelect1.addEventListener("click", function(e) {
  if (fileElem1) {
    fileElem1.click();
  }
  e.preventDefault(); // prevent navigation to "#"
}, false);

// project
var fileSelect2 = document.getElementById("fileSelect2"),
  fileElem2 = document.getElementById("fileElem2");

fileSelect2.addEventListener("click", function(e) {
  if (fileElem2) {
    fileElem2.click();
  }
  e.preventDefault(); // prevent navigation to "#"
}, false);

// ************************ Drag and drop ***************** //
function dragenter(e) {
  e.stopPropagation();
  e.preventDefault();
}

function dragover(e) {
  e.stopPropagation();
  e.preventDefault();
}

dropbox = document.getElementById("dropbox");
dropbox.addEventListener("dragenter", dragenter, false);
dropbox.addEventListener("dragover", dragover, false);
dropbox.addEventListener("drop", drop, false);

dropbox1 = document.getElementById("dropbox1");
dropbox1.addEventListener("dragenter", dragenter, false);
dropbox1.addEventListener("dragover", dragover, false);
dropbox1.addEventListener("drop", drop, false);

dropbox2 = document.getElementById("dropbox2");
dropbox2.addEventListener("dragenter", dragenter, false);
dropbox2.addEventListener("dragover", dragover, false);
dropbox2.addEventListener("drop", drop, false);

function drop(e) {
  e.stopPropagation();
  e.preventDefault();

  var dt = e.dataTransfer;
  var files = dt.files;

  handleFiles(files);
}

var profilepic_new;


var handleFiles = function(files) {
  for (var i = 0; i < files.length; i++) {
    uploadFile(files[i]); // call the function to upload the file
  }
};

// *********** Upload file to Cloudinary ******************** //
function uploadFile(file) {
  var url = `https://api.cloudinary.com/v1_1/${cloudName}/upload`;
  var xhr = new XMLHttpRequest();
  var fd = new FormData();
  xhr.open('POST', url, true);
  xhr.setRequestHeader('X-Requested-With', 'XMLHttpRequest');

  // Reset the upload progress bar
   document.getElementById('progress').style.width = 0;
  
  // Update progress (can be used to show progress indicator)
  xhr.upload.addEventListener("progress", function(e) {
    var progress = Math.round((e.loaded * 100.0) / e.total);
    document.getElementById('progress').style.width = progress + "%";

    // console.log(`fileuploadprogress data.loaded: ${e.loaded},
  // data.total: ${e.total}`);
  });

  xhr.onreadystatechange = function(e) {
    if (xhr.readyState == 4 && xhr.status == 200) {
      // File uploaded successfully
      var response = JSON.parse(xhr.responseText);
      profilepic_new = response.secure_url;
      console.log(profilepic_new);

      // https://res.cloudinary.com/cloudName/image/upload/v1483481128/public_id.jpg
      var url = response.secure_url;
      // Create a thumbnail of the uploaded image, with 150px width
      var tokens = url.split('/');
      tokens.splice(-2, 0, 'w_150,c_scale');
    }
  };

  fd.append('upload_preset', unsignedUploadPreset);
  fd.append('tags', 'browser_upload'); // Optional - add tag for image admin in Cloudinary
  fd.append('file', file);
  xhr.send(fd);

}

var banners_array = [];
var handleFiles1 = function(files) {
  for (var i = 0; i < files.length; i++) {
    uploadFile1(files[i]); // call the function to upload the file
  }
  console.log(banners_array);
};

// *********** Upload file to Cloudinary ******************** //
function uploadFile1(file) {
  var url = `https://api.cloudinary.com/v1_1/${cloudName}/upload`;
  var xhr = new XMLHttpRequest();
  var fd = new FormData();
  xhr.open('POST', url, true);
  xhr.setRequestHeader('X-Requested-With', 'XMLHttpRequest');

  // Reset the upload progress bar
   document.getElementById('progress').style.width = 0;
  
  // Update progress (can be used to show progress indicator)
  xhr.upload.addEventListener("progress", function(e) {
    var progress = Math.round((e.loaded * 100.0) / e.total);
    document.getElementById('progress').style.width = progress + "%";

    // console.log(`fileuploadprogress data.loaded: ${e.loaded},
  // data.total: ${e.total}`);
  });

  xhr.onreadystatechange = function(e) {
    if (xhr.readyState == 4 && xhr.status == 200) {
      // File uploaded successfully
      var response = JSON.parse(xhr.responseText);
      banners_array.push(response.secure_url);

      // https://res.cloudinary.com/cloudName/image/upload/v1483481128/public_id.jpg
      var url = response.secure_url;
      // Create a thumbnail of the uploaded image, with 150px width
      var tokens = url.split('/');
      tokens.splice(-2, 0, 'w_150,c_scale');
    }
  };

  fd.append('upload_preset', unsignedUploadPreset);
  fd.append('tags', 'browser_upload'); // Optional - add tag for image admin in Cloudinary
  fd.append('file', file);
  xhr.send(fd);

}

var coverimg_new;
var handleFiles2 = function(files) {
  for (var i = 0; i < files.length; i++) {
    uploadFile2(files[i]); // call the function to upload the file
  }

};
// *********** Upload file to Cloudinary ******************** //
function uploadFile2(file) {
  var url = `https://api.cloudinary.com/v1_1/${cloudName}/upload`;
  var xhr = new XMLHttpRequest();
  var fd = new FormData();
  xhr.open('POST', url, true);
  xhr.setRequestHeader('X-Requested-With', 'XMLHttpRequest');

  // Reset the upload progress bar
   document.getElementById('progress').style.width = 0;
  
  // Update progress (can be used to show progress indicator)
  xhr.upload.addEventListener("progress", function(e) {
    var progress = Math.round((e.loaded * 100.0) / e.total);
    document.getElementById('progress').style.width = progress + "%";

    // console.log(`fileuploadprogress data.loaded: ${e.loaded},
  // data.total: ${e.total}`);
  });

  xhr.onreadystatechange = function(e) {
    if (xhr.readyState == 4 && xhr.status == 200) {
      // File uploaded successfully
      var response = JSON.parse(xhr.responseText);
      coverimg_new = response.secure_url;
    	console.log(coverimg_new);

      // https://res.cloudinary.com/cloudName/image/upload/v1483481128/public_id.jpg
      var url = response.secure_url;
      // Create a thumbnail of the uploaded image, with 150px width
      var tokens = url.split('/');
      tokens.splice(-2, 0, 'w_150,c_scale');
    }
  };

  fd.append('upload_preset', unsignedUploadPreset);
  fd.append('tags', 'browser_upload'); // Optional - add tag for image admin in Cloudinary
  fd.append('file', file);
  xhr.send(fd);

}


$('#newActivity #submit').click(function(e) {
	// get values
	var username = $("#name").val();
	var dob = $("#dob").val();
	var profilepic = profilepic_new;
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
		'banners': banners_array
	});

	// return fuction of update function
	contactsRef.on('value', function(snap) {
	    $("#newActivity2").hide();
		$("#newActivity3").show();
	});
});


// newActivity3
$('#newActivity3 #addmore').click(function(e) {
	// get values
	var username = $("#name").val();
	var title = $("#projectTitle").val();
	var coverimg = coverimg_new;
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
	});
});

$('#newActivity3 #continue').click(function(e) {
  // get values
  var username = $("#name").val();
  var title = $("#projectTitle").val();
  var coverimg = coverimg_new;
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

// newActivity3
$('#newActivity4 #finish').click(function(e) {
  // get values
  var username = $("#name").val();
  var facebook = $("#facebook").val();
  var twitter = $("#twitter").val();
  var linkedin = $("#linkedin").val();
  var whatsapp = $("#whatsapp").val();

  // declared firebase data inserting place
  var contactsRef = dbRef.ref('users/'+username+'/social');

  // firebase update function
  contactsRef.update({ 
    'facebook': facebook,
    'twitter': twitter,
    'linkedin': linkedin,
    'whatsapp': whatsapp,
  });
  // return fuction of update function
  contactsRef.on('value', function(snap) {
    $("#newActivity4").hide();
    $("#newActivity5").show();
  });
});
</script>