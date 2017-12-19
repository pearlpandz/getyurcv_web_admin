<link href="<?php echo base_url(); ?>css/profile.css" rel="stylesheet">

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
			$posts_count = $viewprofile->posts_count;
			$firstname = $viewprofile->firstname;
			$lastname = $viewprofile->lastname;
			$user_name = $viewprofile->user_name;
			$profile_picture = $viewprofile->profile_picture;
			$description = $viewprofile->description;
			$following_count = $viewprofile->following_count;
			$followers_count = $viewprofile->followers_count;		
		}
	}

?>

<div id="profile">
	<div class="container">
		<div id="about_user">
			<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 profiel_pic">
				<img class="img-circle" src="<?php echo $profile_picture; ?>">
			</div>
			<div class="col-lg-8 col-md-8 col-sm-8 col-xs-12 profile_details">
				<div class="row1">
					<h1><?php echo $user_name; ?></h1>
					<input type="hidden" name="" value="<?php echo $user_id; ?>" hidden>
					<?php			
					if($follower_status==0){
					?>
					<a id="follow_ing" class="follow">follow</a>	
					<?php 
					}					
					if($follower_status==1){
					?>
					<a id="follow_ing" class="following">following</a>
					<?php	
					}					
					?>
				</div>
				<div class="row2">
					<a><b><?php echo $posts_count; ?></b> posts</a>
					<a href=""><b><span id="follower_count"><?php echo $followers_count; ?></span></b> followers</a>
					<a href=""><b><?php echo $following_count; ?></b> following</a>
				</div>
				<div class="row3">
					<p><span><b><?php echo urldecode($firstname); ?> <?php echo urldecode($lastname); ?></b></span> <?php if(($description!="null")&&($description!="") ) echo $description; ?></p>
				</div>
			</div>
		</div>
		<div id="userposts">
			<?php 
				if(isset($all_post)){
				$i=0;
				foreach ($all_post as $allpost) {
					$url = $allpost->url;
					$cover_img = $allpost->cover_img;
					$caption = $allpost->caption;
					$category = $allpost->category;
					$post_id = $allpost->post_id;

					$info = pathinfo($url);
            		$extension = $info['extension'];
			?>

			<div class="list_posts" id="<?php echo $i++;?>">
				<?php 
                    if( ($extension!="mp4") && ($extension!="3gp") ){
                ?>

                <img src="<?php echo $url; ?>" alt="">


                <?php 
                    }
                    else{
                ?>
                <div class="wrapper">
                <video class="video" poster="<?php echo $cover_img; ?>" preload="none">
                    <source src="<?php echo $url; ?>" type="video/mp4">
                </video>
                <!-- <div class="playpause"><i class="fa fa-play-circle" aria-hidden="true"></i></div> -->
                </div>
                <?php  
                    }
                ?>
				<input type="text" name="" value="<?php echo $post_id; ?>" hidden>

				<?php 			
					require_once APPPATH.'libraries/firebase-php/firebase_config.php';
				    $get_comment = $firebase->get('/comments/'.$post_id);
					$get_comment_count = count($get_comment); 
					$get_like = $firebase->get('/post_like/singlepost/'.$post_id);
					$get_like_count = count($get_like);
				?>

				<ul class="like_comment_count">
					<li><a><i class="fa fa-heart" aria-hidden="true"></i> <?php echo $get_like_count; ?></a></li>
					<li><a><i class="fa fa-comment" aria-hidden="true"></i> <?php echo $get_comment_count; ?></a></li>
				</ul>
				<a class="link"></a>
			</div>
			<?php
				}
			}
			?>
		</div>
		<div id="post_slider">
			<?php 
				if(isset($all_post)){
					$i = 0;
				foreach ($all_post as $allpost) {
					$url = $allpost->url;
					$cover_img = $allpost->cover_img;
					$caption = $allpost->caption;
					$category = $allpost->category;
					$post_id = $allpost->post_id;

					$info = pathinfo($url);
            		$extension = $info['extension'];
						
					require_once APPPATH.'libraries/firebase-php/firebase_config.php';
				    $get_comment = $firebase->get('/comments/'.$post_id);
					$get_comment_count = count($get_comment); 
					$get_like = $firebase->get('/post_like/singlepost/'.$post_id);
					$get_like_count = count($get_like);
				
			?>
			<div class="item" id="<?php echo $i++; ?>" style="display: none;">
			<a class="close_window">
					<i class="fa fa-times" aria-hidden="true"></i>
				</a>
			<div class="item_all">				
				<div class="padding-zero item-img col-lg-7 col-md-7 col-sm-7 col-xs-12">
					<?php 
                    if( ($extension!="mp4") && ($extension!="3gp") ){
                ?>

                <img src="<?php echo $url; ?>" alt="">


                <?php 
                    }
                    else{
                ?>
                <div class="wrapper">
                <video controls controlsList="nodownload" class="video" poster="<?php echo $cover_img; ?>" preload="none">
                    <source src="<?php echo $url; ?>" type="video/mp4">
                </video>
                <div class="playpause"><i class="fa fa-play-circle" aria-hidden="true"></i></div>
                </div>
                <?php  
                    }
                ?>
				</div>
				<div class="padding-zero item-contents col-lg-5 col-md-5 col-sm-5 col-xs-12">
					<div class="profile_top">
						<img class="img-circle profile_pic" src="<?php echo $profile_picture;?>">
						<h4><?php echo $user_name;?></h4>
					</div>
					<div class="caption">
						<p><b>post category:</b> <?php echo $category; ?></p>
						<p><b>post description:</b> <?php echo $caption; ?></p>
					</div>
					<ul>
						<li>
							<a class="like_post"><?php echo $get_like_count; ?>
								<i class="fa fa-thumbs-up" aria-hidden="true"></i>
							</a>
						</li>
						<li>					
						 	<a class="comment_post"><?php echo $get_comment_count; ?>
						 		<i class="fa fa-comment" aria-hidden="true"></i>
						 	</a>
						 </li>
						 <li>
						 	<a class="report_post">
						 		<i class="fa fa-exclamation-circle" aria-hidden="true"></i>
						 	</a>
						 </li>
					 </ul> 	                
				</div>
				</div>
			</div>
			<?php 
			}
			}
			?>
		</div>
		<div class="profile_options" style="display: none;">
			<a class="close_window">
				<i class="fa fa-times" aria-hidden="true"></i>
			</a>
			<ul>
				<li>
					<a href="<?php echo base_url();?>frontend/profile/view_profile_edit">change password</a>
				</li>
				<li>
					<a href="<?php echo base_url();?>frontend/users/signout">log out</a>
				</li>
				<li>
					<a href="<?php echo base_url();?>frontend/profile/report_support">report and support</a>
				</li>
				<li>
					<a href="javascript:void(0)" id="cancel">cancel</a>
				</li>
			</ul>
		</div>
	</div>
</div>


<script type="text/javascript">
	var base_url = '<?php echo base_url();?>';

	$('.link').click(function(){
		var parent_id = $(this).parent().attr("id");		
		$('#post_slider').find("#"+parent_id).show();
	});
	$('.close_window').click(function(){	
		$(this).parent().hide();
	});
	$('#account_options').click(function(){
		$('.profile_options').show();
	});
	$('#cancel').click(function(){
		$('.profile_options').hide();
	});
	$('#follow_ing').click(function(){
		if($(this).hasClass('follow')){
			$(this).removeClass('follow').text("");
			$(this).addClass('following').text("following");
			var login_user_id = '<?php echo $_SESSION['userid']; ?>';
			var current_showing_user_id = '<?php echo $user_id; ?>';

var current_follower_count = $('#follower_count').text();
var new_follower_count = parseInt(current_follower_count) + 1;
var ne_follower_count = parseInt(new_follower_count);


			jQuery.ajax({
		        url: base_url+'frontend/profile/follow_user',
		        type: 'POST',
		        data: {
		        	login_user_id: login_user_id,
		        	current_showing_user_id: current_showing_user_id
		         },
		        success: function(e){
		        	$('#follower_count').text(ne_follower_count);
		        }
		    });
		}
		else{
			$(this).removeClass('following').text("");
			$(this).addClass('follow').text("follow");	
			var login_user_id = '<?php echo $_SESSION['userid']; ?>';
			var current_showing_user_id = '<?php echo $user_id; ?>';

var current_follower_count = $('#follower_count').text();
var new_follower_count = parseInt(current_follower_count) - 1;
var ne_follower_count = parseInt(new_follower_count);



			jQuery.ajax({
		        url: base_url+'frontend/profile/unfollow_user',
		        type: 'POST',
		        data: {
		        	login_user_id: login_user_id,
		        	current_showing_user_id: current_showing_user_id
		         },
		        success: function(e){
		        	$('#follower_count').text(ne_follower_count);
		         }
		    });
		}
	})
	$(".alert-danger").delay(2000).fadeOut();
	$(".alert-success").delay(2000).fadeOut();

	// for video
	$('.video').parent().click(function () {
	    if($(this).children(".video").get(0).paused){
	        $(this).children(".video").get(0).play();
	        $(this).children(".playpause").fadeOut();
	    }else{
	       $(this).children(".video").get(0).pause();
	        $(this).children(".playpause").fadeIn();
	    }
	});

	var video = document.getElementsByTagName('video')[0];

	video.onended = function(e) {
	    $('.playpause').show();
	};

	// $(video).hover(function toggleControls() {
	//     if (this.hasAttribute("controls")) {
	//         this.removeAttribute("controls")
	//     }
	//     else {
	//         this.setAttribute("controls", "controls")
	//     }
	// });
</script>