<?php if ($challenges): foreach($challenges as $challenge):?>
<div class="challenge">
	<div class="challenge meta">
		<div class="title">
			<h2 style="margin-left: 0px">
			  <?php echo anchor('challenge/view/' . $challenge->id, $challenge->title); ?>				
			</h2>
		</div>		
	</div>
	<br clear="all" />
	<hr />
</div><!-- Close challenge -->
<?php endforeach; else: ?>
  <h1>No challenges yet</h1>
<?php endif; ?>