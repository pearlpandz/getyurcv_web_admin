
<style>
#centered {
 text-align: center;
}
    
</style>
<script type="application/javascript">
/** After windod Load */
$(window).bind("load", function() {
    alert("test");
  window.setTimeout(function() {
    $(".alert").fadeTo(100, 0).slideUp(100, function(){
        $(this).remove(); 
    });
}, 1000);
});
</script>
<?php

if($this->session->flashdata('item')) {
$message = $this->session->flashdata('item');
?>
<div class="<?php echo $message['class'] ?>" id="centered"><?php echo $message['message']; ?>

</div>
<?php
}

?>