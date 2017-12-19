<?php 
	$this->load->view('admin/includes/header');
	echo '<div class="content">';
	$this->load->view($message_element);
	echo '</div>';
	$this->load->view('admin/includes/footer.php');
?>
