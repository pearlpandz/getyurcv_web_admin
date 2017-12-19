<link href="<?php echo base_url(); ?>css/signup.css" rel="stylesheet">

<?php

if($this->session->flashdata('item')) {
$message = $this->session->flashdata('item');
?>
<div class="<?php echo $message['class'] ?>" id="centered"><?php echo $message['message']; ?>

</div>
<?php
}

?>  
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
                  

                    <form action="frontend/users/signin" method="post" enctype="multipart/form-data">
                        <input type="email" name="email" placeholder="Email" required>                       
                        <input type="password" name="password" placeholder="Password" required>

                        <input type="submit" value="submit">                        
                    </form>
                    <p><a href="">Forgot Password?</a></p>
                </div>
                <div class="signin_form_link">
                    <p>Don't have an account? <a href="<?php echo base_url(); ?>frontend/users/signup">Sign Up</a></p>
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
    $(".inputtype-file input[type='file']").change(function () {
        $('.inputtype-file #val').text(this.value.replace(/C:\\fakepath\\/i, ''))
    })

    $(".alert-danger").delay(2000).fadeOut();
    $(".alert-success").delay(2000).fadeOut();
</script>