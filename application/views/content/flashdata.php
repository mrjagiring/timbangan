<?php if($flash_msg = $this->session->flashdata('msg')): ?>
<div id="flashdata">
	<span class="message_content"><?php echo $flash_msg?></span>
</div>
<?php endif ?>