<?php
    if($this->session->flashdata('item')) {
        $message = $this->session->flashdata('item');
    }
?>
<?php 
if( isset($message['message']) ) {
?>
<div class="<?php echo $message['class']; ?>">
    <?php echo $message['message']; ?>
</div>
<?php 
}
?>
<!-- included by me stylesheets-->
<link href="<?php echo base_url(); ?>css/admin_login.css" rel="stylesheet">

<div class="admin_login">
    <div class="container">
        <div class="login-container">
            <div id="output"></div>
            <div class="avatar"></div>
            <div class="form-box">
                <form action="<?php echo base_url(); ?>admin/users/signin" method="post">
                    <input name="user" type="text" placeholder="username">
                    <input name="password" type="password" placeholder="password">
                    <input name="firebase_user" type="hidden" id="firebase_user">
                    <input name="firebase_password" type="hidden" id="firebase_password">
                    <button class="btn btn-info btn-block login" type="submit">Login</button>
                </form>
            </div>
        </div>  
    </div>
</div>

<script type="text/javascript">
var config = {
    apiKey: "fcafcbc7f2a2ace18ce6721a5bee2a24dc1dad8b",
    authDomain: "https://createcv-1e398.firebaseio.com/",
    databaseURL: "https://createcv-1e398.firebaseio.com/",
    projectId: "createcv-1e398; ?>",
    storageBucket: "gs://createcv-1e398.appspot.com",
};
firebase.initializeApp(config);
var dbRef = firebase.database();
var contactsRef = dbRef.ref('admin/');
contactsRef.once("value", function(snapshot) {
  snapshot.forEach(function(child) {
    if(child.key=='user'){
       $("#firebase_user").val(child.val());    
    }
    else {
        $("#firebase_password").val(child.val());    
    }
  });
});

</script>