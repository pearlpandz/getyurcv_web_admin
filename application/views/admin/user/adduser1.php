<div id="adduser">
	<form id="newActivity" enctype="multipart/form-data" action="<?php echo base_url(); ?>admin/users/add_user1/<?php echo $user_session; ?>" method="post">
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
            <label class="control-label" for="fields1">banner images</label>
            <input class="form-control" name="fields1[]" type="file" placeholder="Type something" multiple />
        </div>
       
        <div class="form-group">
            <label> </label>
			<input type="submit" value="continue" id="submit">	
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