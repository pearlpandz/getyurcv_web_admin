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

hiiii