<?php

if($this->session->flashdata('item')) {
$message = $this->session->flashdata('item');
?>
<div class="<?php echo $message['class'] ?>" id="centered"><?php echo $message['message']; ?>

</div>
<?php
}

?>


<link href="<?php echo base_url(); ?>css/signup.css" rel="stylesheet">
<div id="signuppage">
    <div class="container">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="left-slider col-lg-6 col-md-6 col-sm-6 col-xs-12">
                <img src="<?php echo base_url(); ?>img/signup.png">
                <div class="slider">
                <div id="slideshow">
                   <div>
                     <img src="http://farm6.static.flickr.com/5224/5658667829_2bb7d42a9c_m.jpg">
                   </div>
                   <div>
                     <img src="http://farm6.static.flickr.com/5230/5638093881_a791e4f819_m.jpg">
                   </div>                 
                </div>
                </div>
            </div>
            <div class="right-side col-lg-6 col-md-6 col-sm-6 col-xs-12">
                <div class="signup_form">
                    <h1>Anan</h1>
                    <h4>Sign up to see photos and videos<span>from your friends.</span></h4>
                    
                    <form action="signup" method="post" enctype="multipart/form-data" id="signup_form_new">                        
                        <span><input type="text" name="first_name" placeholder="First Name"></span>
                        <span><input type="text" name="last_name" placeholder="Last Name"></span>
                        <span><input type="text" name="user_name" placeholder="Username"></span>
                        <span><input type="email" name="email" placeholder="Email"></span>
                        <span><input type="password" name="password" placeholder="Password"></span>

                        <div class="inputtype-file">
                            <input type="file" name="image" id="show_images" hidden>
                            <span id='val'>Pick Your Profile Pic</span>
                        </div>
                        <input type="submit" value="submit">                        
                    </form>
                    <p>By signing up, you agree to our <a href="">Terms & Privacy Policy.</a></p>
                </div>
                <div class="signin_form_link">
                    <p>Have an account? <a href="<?php echo base_url(); ?>">Log in</a></p>
                </div>
                <div class="app_downloadlink">
                    <p>Get the app.</p>
                    <div class="app_downloadlink_all">
                        <img src="<?php echo base_url(); ?>img/appstore.png">
                        <img src="<?php echo base_url(); ?>img/playstore.png">
                    </div>
                </div>
            </div>
        </div>        
    </div>
</div>

<script type="text/javascript" src="<?php echo base_url();?>js/jquery.validate.js"></script>

<!-- common for signin and signup pages -->
<script type="text/javascript">
    jQuery('#owl').owlCarousel({
        items: 2,
        loop: true,
        dots: true,
        autoplay: false,
        nav: false,
        responsiveClass: true,
        responsive:{
        0:{
            items:1,
            nav:true
        },
        360:{
            items:1,
            nav:false
        },
        1000:{
            items:2,
            nav:true,
            loop:false
        }
}       
    });
</script>
<!-- slider -->
<script type="text/javascript">
    $("#slideshow > div:gt(0)").hide();
    setInterval(function() {
      $('#slideshow > div:first')
        .fadeOut(1000)
        .next()
        .fadeIn(1000)
        .end()
        .appendTo('#slideshow');
    }, 3000);
</script>

<script type="text/javascript">
$(".alert-danger").delay(2000).fadeOut();
$(".alert-success").delay(2000).fadeOut();

$("#signup_form_new").validate({
  rules: {
    'first_name':
    {
      required :true,
      minlength : 3
    },
    'last_name':
    {
      required :true,
      minlength : 3
    },
    'user_name':
    {
      required :true,
      minlength : 3
    },
    'email':
    {
      required: true,
      email: true
    },
    'password':
    {
      required :true,
      minlength : 8
    }

  },
  messages: {
    'first_name':
    {
      required: "Please enter your first name.",
      minlength: "Your first name is not long enough."
    },
    'last_name':
    {
      required: "Please enter your last name.",
      minlength: "Your last name is not long enough."
    },
    'user_name':
    {
      required: "Please enter your user name.",
      minlength: "Your user name is not long enough."
    },
    'email':
    {
      required: "Please enter your email.",
      email: "Please enter a valid email address."
    },
    'password':
    {
      required: "Please enter your new password.",
      minlength: "Your new password is not long enough."
    }
  },
  errorClass:'error_msg',
  errorElement: 'div',
  errorPlacement: function(error, element) {
    error.appendTo(element.parent());
  }
});
</script>