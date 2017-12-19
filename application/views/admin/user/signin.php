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
<!-- stylesheet included -->
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/admim_login.css">

<div class="admin_login">
    <div class="container">
        <form action="<?php echo base_url(); ?>admin/users/signin" method="post">
            <div id="head_logo">
                <img src="<?php echo base_url();?>/images/myStartUp_Logo.png">
            </div>
            <div class="row">
                <div class="input-field col s12">
                  <input name="user" id="user" type="text" class="validate">
                  <label for="user">username</label>
                </div>
            </div>
            <div class="row">
                <div class="input-field col s12">
                  <input name="password" id="password" type="password" class="validate">
                  <label for="password">Password</label>
                </div>
            </div>
            <input name="firebase_user" id="firebase_user" type="hidden">
            <input name="firebase_password" id="firebase_password" type="hidden">
            <button class="btn waves-effect waves-light login" type="submit">Submit
            </button>
        </form>
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