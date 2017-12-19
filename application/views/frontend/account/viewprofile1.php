<?php

if($this->session->flashdata('item')) {
	$message = $this->session->flashdata('item');
?>
<div class="<?php echo $message['class']; ?>">
	<?php echo $message['message']; ?>
</div>
<?php
}
 
	if(isset($view_profile)){
		foreach ($view_profile as $viewprofile) {
			$firstname = $viewprofile->firstname;
			$lastname = $viewprofile->lastname;
			$user_name = $viewprofile->user_name;
			$profile_picture = $viewprofile->profile_picture;
			$email = $viewprofile->email;
			$description = $viewprofile->description;
		}
	}
?>
<link href="<?php echo base_url(); ?>css/profile.css" rel="stylesheet">
<div class="container">
	<div id="view_profile">
		<ul class="padding-zero col-lg-4 col-md-4 col-sm-4 col-xs-12">
			<li><a id="edit_profile">Edit Profile</a></li>
			<li><a id="change_password" class="active">Change Password</a></li>
			<li><a id="report_support">Report and Support</a></li>
		</ul>
		<div class="padding-zero col-lg-8 col-md-8 col-sm-8 col-xs-12">
			<div id="profile_edit1" style="display: none;">
				<div class="profile_edit1_top">
					<div class="profile_pc">
						<img class="img-circle" id="profile_picture" src="<?php echo $profile_picture; ?>">
					</div>
					<div class="profile_nm">
						<h4><?php echo $user_name;?>
							<a id="edit_profile_photo">edit profile photo</a>
						</h4>
					</div>
				</div>
				<div class="profile_edit1_bottom">
					<form id="profile_edit_form" method="post" action="<?php echo base_url(); ?>frontend/profile/edit_profile">
						<div class="form">
							<div class="form-group">
								<label for="firstname">first name</label>
								<span>
								<input type="text" class="form-control" id="firstname" name="firstname" value="<?php echo $firstname;?>">
								</span>
							</div>
							<div class="form-group">
								<label for="lastname">last name</label>
								<span>
								<input type="text" class="form-control" id="lastname" name="lastname" value="<?php echo $lastname;?>">
								</span>
							</div>
							<div class="form-group">
								<label for="username">user name</label>
								<span>
								<input type="text" class="form-control" id="username" name="username" value="<?php echo $user_name;?>">
								</span>
							</div>
							<div class="form-group">
								<label for="email">email</label>
								<span>
								<input type="email" class="form-control" id="email" name="email" value="<?php echo $email?>" readonly>
								</span>
							</div>
							<div class="form-group">
								<label for="description">description</label>
								<span>
								<textarea class="form-control" id="description" name="description"><?php if(($description!="null")&&($description!="") ) { echo $description; } ?></textarea>
								</span>
							</div>
							<div class="form-group">
								<label></label>
								<input type="submit" value="submit">
							</div>
						</div>
					</form>
				</div>
			</div>
			<div id="profile_edit2" >
				<h4>update password</h4>
				<form id="update_password_form" method="post" action="<?php echo base_url();?>frontend/profile/change_password">
					<div class="form-group">
						<label>old password</label>
						<span>
						<input type="password" name="old_password" id="old_password">
						</span>
					</div>
					<div class="form-group">
						<label>new password</label>
						<span>
						<input type="password" name="new_password" id="new_password">
						<span>
					</div>
					<div class="form-group">
						<label>confirm new password</label>
						<span>
						<input type="password" name="confirm_password" id="confirm_password">
						<span>
					</div>
					<div class="form-group">
						<label></label>
						<input type="submit" value="submit">
					</div>
				</form>
			</div>
			<div id="profile_edit3" style="display: none;">
				<h4>Get Our Support or Submit Your Report</h4>
				<form id="support_report_form" method="post" action="<?php echo base_url(); ?>frontend/profile/report_support">
					<div class="form">							
						<div class="form-group">				
							<textarea class="form-control" id="message" name="support_msg" placeholder="Describe your issue or share your ideas..."></textarea>
						</div>
						<div class="form-group">
							<input type="submit" value="submit">
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
	<div class="profile_options" style="display: none;">
		<a class="close_window">
			<i class="fa fa-times" aria-hidden="true"></i>
		</a>
		<ul>
			<li>
				<a><b>change profile photo</b></a>
			</li>
			<li>
				<span id="remove_pic" onchange="uploadPic(this);"/><span>remove current photo</span>
			</li>
			<li>				
				<input type='file' id="upload_pic" onchange="uploadPic(this);" accept="image/*" hidden >
				<span id='val'>upload photo</span>
			</li>
			<li>
				<a href="javascript:void(0)" id="cancel">cancel</a>
			</li>
		</ul>
	</div>
</div>


<script type="text/javascript" src="<?php echo base_url();?>js/jquery.validate.js"></script>
<script type="text/javascript">
$( document ).ready(function() {
	$.fn.gparent = function( recursion ){
       if( recursion > 1 ) return $(this).parent().gparent( recursion - 1 );
       return $(this).parent();
    };

    $("#profile_edit_form").validate({
        rules: 
        {
	         'firstname':
	         {
	          required :true,
	         },
	         'lastname':
	         {
	          required :true,
	         },
	         'username':
	         {
	          required :true,
	         },
	         'email':
	         {
	          required :true,
	          email: true
	         },
	         'description':
	         {
	          required :true,
	         }
        },
        errorClass:'error_msg',
    	errorElement: 'div',
	    errorPlacement: function(error, element)
	    {
	        error.appendTo(element.parent());
	    }
    });

    $.validator.addMethod("old_password_not_same", function(value, element) {
	   return $('#old_password').val() != $('#new_password').val()
	}, "Please enter new password!");

    $("#update_password_form").validate({
        rules: 
        {
         	'old_password':
			{
			   required :true,
			   minlength : 8
			},
         	'new_password':
			{
			   required :true,
			   minlength : 8,
			   old_password_not_same: true
			},
		 	'confirm_password':
			 {
			  required :true,
			  minlength : 8,
			  equalTo: "#new_password"
			 }
        },
        messages: {
        	'old_password':
        	{
		        required: "Please enter your old password.",
		        minlength: "Your old password is not long enough."
		    },
		    'new_password':
		    {
		        required: "Please enter your new password.",
		        minlength: "Your new password is not long enough."
		    },
		    'confirm_password':
		    {
		        required: "Please enter your confirm password.",
		        minlength: "Your confirm password is not long enough."
		    }
		},
        errorClass:'error_msg',
    	errorElement: 'div',
	    errorPlacement: function(error, element)
	    {
	        error.appendTo(element.parent());
	    }
    });
    
    $("#support_report_form").validate({
        rules: 
        {
         	'support_msg':
			{
			   required :true,
			   maxlength:250
			}
        },
        messages: {
        	'support_msg':
        	{
		        required: "Please enter your report message.",
		        maxlength: "Your message is too long than 250."
		    }
		},
        errorClass:'error_msg',
    	errorElement: 'div',
	    errorPlacement: function(error, element)
	    {
	        error.appendTo(element.parent());
	    }
    });
  });   


$('.close_window').click(function(){	
	$(this).parent().hide();
});
$('#edit_profile_photo').click(function(){
	$('.profile_options').show();
});
$('#cancel').click(function(){
	$('.profile_options').hide();
});
$('#upload_pic').click(function(){
	$('.profile_options').hide();
});
$('#remove_pic').click(function(){
	deletePic();
});

function uploadPic(input) {
	var base_url = '<?php echo base_url();?>'; 

    if (input.files && input.files[0]) {
        var reader = new FileReader();
        reader.onload = function (e) {
            $('#profile_picture').attr('src', e.target.result).width(50).height(50);
            jQuery.ajax({
		        url: base_url+'frontend/profile/uploadpic',
		        type: 'POST',
		        data: {
		            url: e.target.result
		        },
		        success: function(e){ }
		    });
        };
        reader.readAsDataURL(input.files[0]);
    }
}

function deletePic() {
	var base_url = '<?php echo base_url();?>'; 
	var newimg = base_url+'images/users/no_avatar.jpg';
    $('#profile_picture').attr('src', newimg).width(50).height(50);
    $('.profile_options').hide();  
    jQuery.ajax({
        url: base_url+'frontend/profile/removepic',
        type: 'POST',
        data: {
        	url: newimg
         },
        success: function(e){ }
    });
}

$("#upload_pic").change(function () {
$('#upload_pic #val').text(this.value.replace(/C:\\fakepath\\/i, ''));
});

$('#edit_profile').click(function(){
	$(this).gparent(2).find('.active').removeClass('active');
	$(this).addClass('active');
	$('#profile_edit1').show();
	$('#profile_edit2').hide();
	$('#profile_edit3').hide();
});
$('#change_password').click(function(){
	$(this).gparent(2).find('.active').removeClass('active');
	$(this).addClass('active');
	$('#profile_edit2').show();
	$('#profile_edit1').hide();
	$('#profile_edit3').hide();
});
$('#report_support').click(function(){
	$(this).gparent(2).find('.active').removeClass('active');
	$(this).addClass('active');
	$('#profile_edit3').show();
	$('#profile_edit1').hide();
	$('#profile_edit2').hide();
});

 
$(".alert-danger").delay(2000).fadeOut();
$(".alert-success").delay(2000).fadeOut();
</script>