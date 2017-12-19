<div id="adduser">
	<form id="newActivity" enctype="multipart/form-data" action="<?php echo base_url(); ?>admin/users/add_user/<?php echo $user_session; ?>" method="post">
        <h4>project details</h4>
        <div class="form-group">
            <label>project title</label>
			<input type="text" name="project_title" id="project_title">	
		</div>
		<div class="form-group">
            <label>project cover image</label>
			<input type="file" name="project_cover_image" id="project_cover_image">	
		</div>
		<div class="form-group">
            <label>project link</label>
			<input type="text" name="project_link" id="project_link">	
		</div>

		<h4>social links</h4>
        <div class="form-group">
            <label>facebook</label>
			<input type="text" name="facebook" id="facebook">	
		</div>
		<div class="form-group">
            <label>twitter</label>
			<input type="text" name="twitter" id="twitter">	
		</div>
		<div class="form-group">
            <label>linkedin</label>
			<input type="text" name="linkedin" id="linkedin">	
		</div>
		<div class="form-group">
            <label>whatsapp</label>
			<input type="text" name="whatsapp" id="whatsapp">	
		</div>
        <div class="form-group">
            <label> </label>
			<input type="submit" value="submit" id="submit">	
		</div>

	</form>
</div>


<script type="text/javascript">
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
</script>


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