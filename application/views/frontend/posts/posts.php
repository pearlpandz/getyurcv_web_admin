<link href="<?php echo base_url(); ?>css/imageviewer.css"  rel="stylesheet" type="text/css" />
<link href="<?php echo base_url(); ?>css/posts.css" rel="stylesheet">
<div id="posts">
<div class="container">
    <ul id="myList" class="viewallposts">
       <?php
            if($this->session->flashdata('item')) {
            $message = $this->session->flashdata('item');
        ?>
        <div class="<?php echo $message['class']; ?>">
            <?php echo $message['message']; ?>
        </div>
        <?php
            }
            // print_r($viewallposts);exit;
            $i = 0;
        foreach ($viewallposts as $view_all_posts) {
            $post_pic = $view_all_posts['post_url'];
            $user_pic = $view_all_posts['profile_pic'];
            $username = $view_all_posts['user_name'];
            $post_des = $view_all_posts['caption'];
            $user_id = $view_all_posts['user_id'];
            $post_id = $view_all_posts['post_id'];
            $likecount = $view_all_posts['likecount'];
            $commentcount = $view_all_posts['commentcount'];
            $likeis = $view_all_posts['likeis'];
            $extension = $view_all_posts['extension'];
            $cover_img = $view_all_posts['cover_img'];
            $i++;
       ?>
        <li class="post <?php echo 'post'.$i;?>">
            <a href="<?php echo base_url(); ?>frontend/profile/user/<?php echo $username; ?>" class="profile_details">   
                <div class="profile_pic">
                    <img class="img-circle" src="<?php echo $user_pic; ?>">
                </div>                
                <div class="user_details">
                    <h4><?php echo $username; ?></h4>                  
                </div>
            </a>
            <div class="postpic">
                <?php 
                    if( ($extension!="mp4") && ($extension!="3gp") ){
                ?>

                <img class="gallery-items" src="<?php echo $post_pic; ?>" data-high-res-src="<?php echo $post_pic; ?>" alt="">


                <?php 
                    }
                    else{
                ?>
                <div class="wrapper">
                <video controls controlsList="nodownload" class="video" poster="<?php echo $cover_img; ?>" preload="none">
                    <source src="<?php echo $post_pic; ?>" type="video/mp4">
                    Your browser does not support the video tag.
                </video>
                <!-- <div class="playpause"><i class="fa fa-play-circle" aria-hidden="true"></i></div> -->
                </div>
                <?php  
                    }
                ?>
            </div>
            <div class="like_comment_report">
                <span class="like 
                <?php
                    if(isset($likeis)){
                        foreach ($likeis as $key1 => $value1) {
                            if($key1==$_SESSION['userid']){
                                foreach ($value1 as $key => $value) { 
                                    if(($key=='like')&&($value=='1')){
                                        echo "liked";echo " ";
                                    } 
                                }
                            }
                        }
                    }   
                ?>
                ">
                <a id="<?php echo $i; ?>" class="like_post">
                    <i class="fa fa-thumbs-up" aria-hidden="true"></i>
<input id="like_count" value='<?php 
if(($likecount!=" ")||($likecount!=0)) { 
    echo $likecount; 
} 
else{ 
    echo "0"; 
} ?>' readonly>
                </a>

<p id="user_id" style="display: none;"><?php echo $user_id;?></p>
<p id="post_id" style="display: none;"><?php echo $post_id;?></p>


                </span>
                <span class="comment">
                <a class="comment_post">
                    <i class="fa fa-comment" aria-hidden="true"></i>

<input id="comment_count" value='<?php if(($commentcount!=" ")||($commentcount!=0)) { echo $commentcount; } else{ echo " "; } ?>
'readonly>
                </a>
<p id="user_id" style="display: none;"><?php echo $user_id;?></p>
<p id="post_id" style="display: none;"><?php echo $post_id;?></p>

                
                </span>
                <span class="report">
                <a class="report_post">
                    <i class="fa fa-exclamation-circle" aria-hidden="true"></i>
                </a>  
                </span>              
            </div>  
            <div class="report_dialog" style="display: none;">
                <form class="report-post" id="report-post">
                    <div class="title_dialog">
                        <h4><i class="fa fa-exclamation-triangle" aria-hidden="true"></i> Report the Post</h4>
                        <a class="close_report_dialog">
                            <i class="fa fa-times" aria-hidden="true"></i>
                        </a>
                    </div>
                    <span class="report_msg_span">
                    <textarea id="report_msg" name="report_msg" placeholder="Write your report comments?"></textarea>
                    <p class="error_report" style="display: none;">Please type your comment</p>
                    </span>
                    <input name="post_id" id="post_id" value="<?php echo $post_id;?>" hidden>
                    <input class="report_post_submit" type="submit" value="submit">
                </form>
            </div>
            <div class="post_des">
                <h4><?php echo $username; ?></h4>
                <p><?php echo $post_des; ?></p>
            </div>  
            
            <?php if(($commentcount!=" ")||($commentcount!=0)) { ?>
            <a id="show_more" class="show_more">view more comments</a>
            <?php } ?>

            <p id="user_id1" style="display: none;"><?php echo $user_id;?></p>
            <p id="post_id1" style="display: none;"><?php echo $post_id;?></p>

            <div class="usercomments" style="display: none;">
                
            </div>
            <div class="post_comment">        
                <textarea class="col-lg-11 col-md-11 col-sm-11 col-xs-11" placeholder="Type comment..." id="comment_post"></textarea>
                <a class="add_comment col-lg-1 col-md-1 col-sm-1 col-xs-1">
                    <i class="fa fa-paper-plane" aria-hidden="true"></i>
                    <p id="user_id" style="display: none;"><?php echo $user_id;?></p>
                    <p id="post_id" style="display: none;"><?php echo $post_id;?></p>
                </a>
            </div>

            
        </li>
        <?php 
            
            }
        ?> 
    </ul>
    <input type="hidden" id="result_no" value="4" hidden>

<?php 
$query =  $this->mongo_db->db->posts->find();
$i = 0;
foreach ($query as $query1) {
    $i++;
}
?>



    <input type="hidden" id="overall_result" value="<?php echo $i; ?>" hidden>
    <!-- <input type="button" id="load" value="Load More Results"> -->
</div>

<div class="report_done success alert-success" style="display: none;">
    <p>Your report successfully sent to Admin</p>
</div>

<?php 
$credentials = $this->mongo_db->db->settings->findOne(
    array('_id' => new MongoId("54e61252230d76726453488d"))
    );
?>



<script src="<?php echo base_url(); ?>js/imageviewer.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>js/jquery.validate.js"></script>
<script type="text/javascript">

var val = document.getElementById("result_no").value;
var overall_result = document.getElementById("overall_result").value;

$("#load").click(function(){
    loadmore();
});

var baseurl = '<?php echo base_url(); ?>';

function loadmore(){
    var filepath = '';
    $.ajax({
        type: 'post',
        url: filepath,
        data: {
            getresult:val
        },
        success: function (response) {
            if( (parseInt(val))<=(parseInt(overall_result)) ){
                val = parseInt(val)+2;
                $('#myList').append(response);
                $('#result_no').val(val);  
            }
            if( (parseInt(val))>=(parseInt(overall_result)) ){
                $("#load").hide();
            }
        }
    });            
}

$('.like_post').click(function(){
   

    post_id = $(this).parent().find('#post_id').text();
    if($(this).parent('span.like').hasClass("liked")){
        $(this).parent('span.like').removeClass('liked');
        var current_count = $(this).parent('span.like').find("#like_count").attr('value');
        var new_count = parseInt(current_count) - 1;
        var ne_count = parseInt(new_count);
        // alert(current_count);
        // alert(ne_count);
        $(this).find("#like_count").attr('value', ne_count);



       var filepath = baseurl+'frontend/posts/unlike_post';
        $.ajax({
            type: 'post',
            url: filepath,
            data: {
               post_id: post_id
            },
            success: function (response) {  


            }
        });
    }
    else{
        $(this).parent('span.like').addClass('liked');
        var current_count = $(this).parent('span.like').find("#like_count").attr('value');

        var new_count = parseInt(current_count) + 1;
        var ne_count = parseInt(new_count);
        // alert(current_count);
        // alert(ne_count);
        $(this).find("#like_count").attr('value', ne_count);

        var filepath = baseurl+'frontend/posts/like_post';
        $.ajax({
            type: 'post',
            url: filepath,
            data: {
               post_id: post_id
            },
            success: function (response) {

              
            }
        }); 
    }   
});

var config = {
  apiKey: "<?php echo $credentials['WebAPI_Key']; ?>",
  authDomain: "<?php echo $credentials['Project_ID'].".firebaseio.com"; ?>",
  databaseURL: "<?php echo $credentials['DB_URL']; ?>",
  projectId: "<?php echo $credentials['Project_ID']; ?>"
};

firebase.initializeApp(config);
var dbRef = firebase.database();


$(".add_comment").click(function(){

    $.fn.gparent = function( recursion ){
       if( recursion > 1 ) return $(this).parent().gparent( recursion - 1 );
       return $(this).parent();
    };

if ($(this).gparent(2).find('#comment_post').val() != ''){
    // var current_comment = $(this).gparent( 2 );
    current_comment = $(this).gparent(2).find('#comment_count').attr('value')
    if(current_comment==" "){
        current_comment = 0;
    }

    var new_comment = parseInt(current_comment) + 1;
    var ne_comment = parseInt(new_comment);
$(this).gparent(2).find('#comment_count').attr('value', ne_comment);
    var current_gparent = $(this).gparent(2).find('.usercomments');
    post_id = $(this).find('#post_id').text();
    comment_text = $(this).parent('.post_comment').find('#comment_post').val();
    var contactsRef = dbRef.ref('comments/'+post_id);
    var d = new Date();
    var n = d.getTime();
    contactsRef.push({ 
        'comment': comment_text,
        'timeCreated': n,
        'user': "<?php echo $_SESSION['userid'];?>",
        'userName': "<?php echo $_SESSION['user_name'];?>" 
    });
    contactsRef.on('value', function(snap) {

        $(this).gparent(2).find('.show_more').show();


        $('textarea').filter('[id*=comment_post]').val('');
        // console.log(snap.numChildren());
        $(current_gparent).html('');
        snap.forEach(function(element) {
        $(current_gparent).append('<div><h4>'+element._e._.B.right.value.T+'</h4><p>'+element._e._.B.left.left.value.T+'</p></div>'); 
        });
        // $('.usercomments').html(snap);
    });
}
else{
}
});

$(".show_more").click(function(){   
var current_gparent1 = $(this).parent().find('.usercomments');
post_id = $(this).parent().find('#post_id1').text();
// alert(post_id);
var contactsRef1 = dbRef.ref('comments/'+post_id);
contactsRef1.on('value', function(snap1) {
    // console.log(snap.numChildren());
    $(current_gparent1).html('');
    snap1.forEach(function(element1) {
    $(current_gparent1).append('<div><h4>'+element1._e._.B.right.value.T+'</h4><p>'+element1._e._.B.left.left.value.T+'</p></div>');
    });
});
    $(this).parent().find(".usercomments").toggle();
});

$(".report_post").click(function(){
    $.fn.gparent = function( recursion ){
       if( recursion > 1 ) return $(this).parent().gparent( recursion - 1 );
       return $(this).parent();
    };

    $(this).gparent(3).find(".report_dialog").show();
});

$(".close_report_dialog").click(function(){
     $.fn.gparent = function( recursion ){
       if( recursion > 1 ) return $(this).parent().gparent( recursion - 1 );
       return $(this).parent();
    };
    $(this).gparent(3).hide();
});

$(".alert-danger").delay(2000).fadeOut();
$(".alert-success").delay(2000).fadeOut();


$(function () {
    var viewer = ImageViewer();
    $('.gallery-items').click(function () {
        var imgSrc = this.src,
            highResolutionImage = $(this).data('high-res-img');
 
        viewer.show(imgSrc, highResolutionImage);
    });
});



// for post video
// $('.video').parent().click(function () {
//     if($(this).children(".video").get(0).paused){
//         $(this).children(".video").get(0).play();
//         $(this).children(".playpause").fadeOut();
//     }else{
//        $(this).children(".video").get(0).pause();
//         $(this).children(".playpause").fadeIn();
//     }
// });

// var video = document.getElementsByClassName('video')[0];

// video.onended = function(e) {
//     $('.playpause').show();
// };

// $('.video').hover(function toggleControls() {
//     if (this.hasAttribute("controls")) {
//         this.removeAttribute("controls")
//     }
//     else {
//         this.setAttribute("controls", "controls")
//     }
// });

jQuery(window).scroll(function(){
    if (jQuery(window).scrollTop() >= 1) {
       jQuery('header').addClass('fixed-header');
    }
    else {
       jQuery('header').removeClass('fixed-header');
    }
});
</script>



<script type="text/javascript">
               

$(".report_post_submit").click(function(){

    $.fn.gparent = function( recursion ){
       if( recursion > 1 ) return $(this).parent().gparent( recursion - 1 );
       return $(this).parent();
    };
    var base_url = '<?php echo base_url(); ?>';
    var report_msg  = $(this).gparent(1).find("#report_msg").val();
    // alert(report_msg.trim().length);

    var post_id =  $(this).gparent(1).find("#post_id").val();
    // alert(post_id);


    $(".report_done").hide();
    
    if(  report_msg.trim().length > 0 ) {
        jQuery.ajax({
            url: base_url+'frontend/posts/report_post',
            type: "POST",
            data: {
                report_msg: report_msg,
                post_id : post_id 
            },
            success: function(e){
                $(".error_report").hide();
                $(".report_dialog").hide();
                $(".report_done").show();
                $('.report_done').fadeIn('slow', function () {
                    $(this).delay(3000).fadeOut('slow');
                });   
            }
        })
        event.preventDefault();
    }
    else {
        $(".error_report").show();
        $(".error_report").css('color', 'red');
        event.preventDefault();
    }
})
</script>