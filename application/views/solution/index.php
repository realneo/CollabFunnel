<?php if ($this->session->flashdata('message')) {
	echo '<p class="success">'.$this->session->flashdata('message').'</p>';
} ?>

<?php if ($solutions): foreach($solutions as $solution):?>
<div class="solution">
	<div class="solution meta">
		<div class="title">
			<h2 style="margin-left: 0px">
			  <?php echo anchor('solution/view/' . $solution->id, $solution->title); ?>				
			</h2>
		</div>
		<div class="date">
			<?php date_default_timezone_set('Etc/UTC');
			      $phpdate = $solution->created_on;
			      date_default_timezone_set('America/Los_Angeles');
            echo date('m/d/Y H:i:s', $phpdate); ?>
		</div>
	</div>
	<br clear="all" />
	<p>
		<?php echo $solution->statement; ?>
	</p>
	<hr />
</div><!-- Close solution -->
<?php endforeach; else: ?>
  <h1>No solutions yet</h1>
<?php endif; ?>