<!-- stylesheet included -->
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/admim_userlist.css">

<div class="userlist_table">
	<h4>user list</h4>
	<ul id="userlist"></ul>
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
var contactsRef = dbRef.ref('users/'); //declared firebase refernce node
// get values from firebase
contactsRef.on('value', function(snap) {
	var i=0;
	$("#userlist").html('');
    snap.forEach(function(element) {
    	var url = '<?php echo base_url() ?>profile/'+element.key;
    	$("#userlist").append('<li><a href='+url+'><span>'+ parseInt(i=i+1) + '</span><span>' + element.key + '</span></a></li>');
    });   
});
</script>