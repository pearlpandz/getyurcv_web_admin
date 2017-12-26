<div class="row">
<div id="adduser" class="col s12">
	<form id="newActivity">
      <div class="col s12">
        <h4>add your details</h4>
      </div>
      <div class="row">
          <div class="input-field col s12">
            <input name="name" id="name" type="text" class="validate">
            <label for="name">username</label>
          </div>
      </div>
      <div class="row">
          <div class="col s12">
            <label for="dob">Birthday</label>
            <input id="dob" type="date" name="dob" class="datepicker">
          </div>
      </div>
      <div class="row">
        <div class="col s12">
    	  	<div id="dropbox" class="file-field input-field">
            <div class="btn">
              <span id="fileSelect">pick your profile picture</span>
              <input type="file" id="fileElem" accept="image/*" style="display:none" onchange="handleFiles(this.files)">  
              <input type="hidden" name="profilepic" id="profilepic">
            </div>
            <div class="file-path-wrapper">
              <input class="file-path validate"  type="text">
            </div>
          </div>
          <div class="progress-bar" id="progress-bar">
            <div class="progress" id="progress"></div>
          </div>
        </div>
      </div>
	  	<div class="row">
        <div class="input-field col s12">
          <input id="email" type="email" class="validate">
          <label for="email">Email</label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s12">
          <input id="mobile" type="number" class="validate">
          <label for="mobile">mobile</label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s12">
          <input type="text" name="location" id="location" class="validate">
          <input type="hidden" name="lat" id="lat">
          <input type="hidden" name="lang" id="lang">
          <label for="location">location</label>
        </div>
      </div>
	  	<div class="row">
        <div class="input-field col s12">
          <input id="Professional" type="text" name="Professional" class="validate">
          <label for="Professional">Professional</label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s12">
          <input id="qualification" type="text" name="qualification" class="validate">
          <label for="qualification">qualification</label>
        </div>
      </div>
	  	<div class="row">
        <div class="input-field col s12">
          <textarea id="description" name="description" class="materialize-textarea" data-length="120"></textarea>
          <label for="description">description</label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s12 right-align">
          <label> </label>
          <a id="submit" class="waves-effect waves-light btn">continue<i class="material-icons right">send</i></a>
		    </div>
      </div>
	</form>

	<!-- newActivity1 -->
	<form id="newActivity1"  style="display: none;">
      <div class="col s12">
        <h4>add your skills</h4>
      </div>
      <div class="row">
        <div class="controls">
          <div class="input-field col s12 entry">
            <input name="fields[]" id="fields" type="text" class="validate">
            <span class="input-group-btn">
              <button class="btn-floating btn-large waves-effect waves-light black btn-add" type="button">
                <i class="material-icons">add</i>
              </button>
            </span>
            <label for="fields">enter your skills</label>
          </div>
        </div>
      </div>
            
      <div class="row">
        <div class="input-field col s12 right-align">
          <label> </label>
          <a id="submit" class="waves-effect waves-light btn">continue<i class="material-icons right">send</i></a>
        </div>
      </div>
	</form>

	<!-- newActivity2 -->
	<form id="newActivity2"  style="display: none;">
    <div class="col s12">
      <h4>add homescreen banners</h4>
    </div>
    <div class="row">
      <div class="col s12">
          <div id="dropbox1" class="file-field input-field">
          <div class="btn">
            <span id="fileSelect1">upload BG's</span>
            <input type="file" id="fileElem1" multiple accept="image/*" style="display:none" onchange="handleFiles1(this.files)">  
            <input type="hidden" name="profilepic" id="profilepic">
          </div>
          <div class="file-path-wrapper">
            <input class="file-path validate"  type="text">
          </div>
        </div>
        <div class="progress-bar" id="progress-bar1">
          <div class="progress" id="progress1"></div>
        </div>
      </div>
    </div> 
    <div class="row">
      <div class="input-field col s12 right-align">
        <label> </label>
        <a id="submit" class="waves-effect waves-light btn">continue<i class="material-icons right">send</i></a>
      </div>
    </div>
	</form>

	<!-- newActivity3 -->
	<form id="newActivity3"  style="display: none;">
    <div class="col s12">
      <h4>add your projects</h4>
    </div>
		<div class="row">
      <div class="input-field col s12">
          <input class="form-control" name="projectTitle" type="text" id="projectTitle" />
          <label class="control-label" for="projectTitle">project title</label>
      </div>
    </div>
    <div class="row">
      <div class="col s12">
          <div id="dropbox2" class="file-field input-field">
          <div class="btn">
            <span id="fileSelect2">project cover image</span>
            <input type="file" id="fileElem2" accept="image/*" style="display:none" onchange="handleFiles2(this.files)">  
            <input type="hidden" name="profilepic" id="profilepic"> 
          </div>
          <div class="file-path-wrapper">
            <input class="file-path validate" id="filepath"  type="text">
          </div>
        </div>
        <div class="progress-bar" id="progress-bar2">
          <div class="progress" id="progress2"></div>
        </div>
      </div>
    </div>   
    <div class="row">
      <div class="input-field col s12">
          <input class="form-control" name="projectUrl" type="text" id="projectUrl" />
          <label class="control-label" for="projectUrl">project url</label>
      </div>
    </div>
      <div class="row">
        <div class="input-field col s12 right-align">
          <label> </label>
          <a id="addmore" class="waves-effect waves-light btn">addmore<i class="material-icons right">add</i></a>
          <a id="continue" class="waves-effect waves-light btn">continue<i class="material-icons right">send</i></a>
        </div>
      </div>
	</form>

  <form id="newActivity4"  style="display: none;">
    <div class="col s12">
      <h4>add your social links</h4>
    </div>
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
    <div class="row">
      <div class="input-field col s12 right-align">
        <label> </label>
        <a id="finish" class="waves-effect waves-light btn">finish<i class="material-icons right">send</i></a>
      </div>
    </div>
  </form>

	<div id="newActivity5" class="center-align"  style="display: none;">
		<h4>You successfully create your profile</h4>
		<a class="waves-effect waves-light btn" href="<?php echo base_url(); ?>admin/users/userlist"><i class="material-icons left">wc</i> go to userlist</a>
	</div>
</div>
</div>

<script src="https://maps.googleapis.com/maps/api/js?v=3.exp&key=AIzaSyAom1PVwNn8gAvSl18fSKRI1Jlu-JOH5fQ&libraries=places"></script>
<!-- <script src="<?php echo base_url(); ?>js/jquery.city-autocomplete.js" type="text/javascript"></script>  -->

<!-- cloudinary plugins -->
<script src='<?php echo base_url(); ?>js/cloudinary/jquery.ui.widget.js' type='text/javascript'></script>
<script src='<?php echo base_url(); ?>js/cloudinary/jquery.iframe-transport.js' type='text/javascript'></script>
<script src='<?php echo base_url(); ?>js/cloudinary/jquery.fileupload.js' type='text/javascript'></script>
<script src='<?php echo base_url(); ?>js/cloudinary/jquery.cloudinary.js' type='text/javascript'></script>

<script type="text/javascript">
// materialize datepicker
var d = new Date();
d.setFullYear( d.getFullYear() - 100 );
$('.datepicker').pickadate(
{
   selectMonths: true,
    selectYears: true,
   min: d,
    max: new Date()
});



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
        .html('-');
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
        .html('-');
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
    document.getElementById('progress').style.background= "green";
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

  // Reset the upload progress1 bar
   document.getElementById('progress1').style.width = 0;
  
  // Update progress1 (can be used to show progress1 indicator)
  xhr.upload.addEventListener("progress", function(e) {
    var progress1 = Math.round((e.loaded * 100.0) / e.total);
    document.getElementById('progress1').style.width = progress1 + "%";
    document.getElementById('progress1').style.background= "green";
    // console.log(`fileuploadprogress1 data.loaded: ${e.loaded},
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

  // Reset the upload progress2 bar
   document.getElementById('progress2').style.width = 0;
  
  // Update progress2 (can be used to show progress indicator)
  xhr.upload.addEventListener("progress", function(e) {
    var progress2 = Math.round((e.loaded * 100.0) / e.total);
    document.getElementById('progress2').style.width = progress2 + "%";
    document.getElementById('progress2').style.background= "green";
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
    $("#newActivity2").hide();
    $("#newActivity3").hide();
    $("#newActivity4").hide();
    $("#newActivity5").hide();
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
	  $("#newActivity").hide();
    $("#newActivity1").hide();
    $("#newActivity2").show();
    $("#newActivity3").hide();
    $("#newActivity4").hide();
    $("#newActivity5").hide();
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
	  $("#newActivity").hide();
    $("#newActivity1").hide();
    $("#newActivity2").hide();
    $("#newActivity3").show();
    $("#newActivity4").hide();
    $("#newActivity5").hide();
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
    $("#filepath").val('');
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
      
    $("#newActivity").hide();
    $("#newActivity1").hide();
    $("#newActivity2").hide();
    $("#newActivity3").hide();
    $("#newActivity4").show();
    $("#newActivity5").hide();

  });
  
});

// newActivity4
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
    $("#newActivity").hide();
    $("#newActivity1").hide();
    $("#newActivity2").hide();
    $("#newActivity3").hide();
    $("#newActivity4").hide();
    $("#newActivity5").show();
  });
});
</script>


<style type="text/css">
  #fields {
    width: 80%;
  }
  #adduser h4 {
    text-transform: uppercase;
    font-weight: bold;
    text-align: center;
    padding: 10px 0 0 0;
  }
  .btn, .btn-large {
    background: #5a5a5a;
  }
  .progress {
    background: transparent;
  }
</style>