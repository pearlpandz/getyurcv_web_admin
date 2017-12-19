
 <style>
  .limitedNumbChosen{
  width: 400px;
}
</style>
<link href="<?php echo base_url(); ?>css/chosen.min.css" rel="stylesheet">
<?php 

	$result = $this->mongo_db->db->category->find(); 
?>

<header>
	<div class="container">
		<div class="logo col-lg-3 col-md-3 col-sm-3 col-xs-12">
			<a href="<?php echo base_url();?>">anan</a>
		</div>
		<div class="search col-lg-6 col-md-6 col-sm-6 col-xs-12">
		<form action="<?php echo base_url();?>frontend/posts/search" method="post" id="post_search">
			<select name="formData[]" class="limitedNumbChosen" multiple="true" id="formData">
				 <?php foreach($result as $result){
				  $data['name']=$result['name']; 
				  $data['category_id']=$result['_id']->{'$id'}; 
				 ?>
		         <option value="<?php echo $data['category_id'];?>"><?php echo $data['name'];?> </option>
		         <?php }?>       

        	</select>
       		<!-- <input type="submit" name="submit" value="submit" id="submit"> -->
       		<button type="submit"><i class="fa fa-search" aria-hidden="true"></i></button>
        </form>			
		</div>			
		<div class="account col-lg-3 col-md-3 col-sm-3 col-xs-12">
			<a href="<?php echo base_url()?>frontend/profile">
				<i class="fa fa-user-circle-o" aria-hidden="true"></i>
				<!-- <a href="<?php echo base_url();?>/frontend/users/signout">Logout</a> -->
			</a>
		</div>
	</div>
</header>
   
  <script src="//cdnjs.cloudflare.com/ajax/libs/chosen/1.4.2/chosen.jquery.min.js"></script>
<script type="text/javascript">
  $(document).ready(function(){    
  //Chosen 
 $(".limitedNumbChosen").chosen({
        // max_selected_options: 4,
    placeholder_text_multiple: "Search"
    })
    .bind("chosen:maxselected", function (){
        window.alert("You reached your limited number of selections which is 4 selections!");
    });

   // $("#submit").click(function(){     
	 	// var formData = $('#category').val();
	 	// var base = "<?php echo base_url();?>frontend/posts";
	 	
	  // 	$.ajax({
	  //       url: base+'/search',
	  //       type: 'POST',
	  //       data: {
	  //       	cat_id: formData	
	  //       },
	  //       success: function(e){
	  //       	$('#myList').html('');
	  //       	$('#myList').html(e);
	  //       	console.log(e.user_id);
	  //       	console.log(e.post_id);
	  //       	console.log(e.post_url);
	  //       	console.log(e.caption);
	  //       	console.log(e.user_name);
	  //       	console.log(e.profile_pic);
	  //       	console.log(e.user_id);
	  //       	console.log(e.user_id);
	  //       	console.log(e.user_id);
	  //       }
	  //   });
  	// });

});
</script>



<script type="text/javascript" src="<?php echo base_url();?>js/jquery.validate.js"></script>
<script type="text/javascript">
    $("#post_search").validate({
        rules: 
        {
             'formData':
             {
              required :true,
             }
        },
         messages: {
        	'formData':
        	{
		        required: "Please select atlease one category!"
		    }
		},
        errorClass:'error_msg',
        errorElement: 'div',
        errorPlacement: function(error, element)
        {
            error.appendTo(element.parent());
        }
    });
</script>