<?php if (validation_errors()) {
	echo validation_errors('<p class="error">','</p>');
} ?>
      
<?php if ($this->session->flashdata('message')) {
	echo '<p class="success">'.$this->session->flashdata('message').'</p>';
} ?>

<?php echo form_open('post/save');?>
<p>
	<strong>Title</strong>:<br /> <input type="text" name="title" size="60" style="width: 600px" />
</p>
<br clear="all" />

<p>
	<strong>Body</strong>: (HTML mode)
</p>
<textarea rows="6" cols="80%" name="body" style="resize: none;"></textarea>
<br clear="all" />

<p>
	<input type="submit" value="Submit" />
</p>
<?php echo form_close(); ?>
