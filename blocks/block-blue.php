<div class="blue-block box dark-bg text-center">
	<h3 title="<?php echo block_field('title');?>">
		<a href="<?php get_permalink(get_the_ID());?>">
			<?php echo block_field('title');?>
		</a>
	</h3>
	<p>
		<?php echo block_field('content');?>
	</p>
</div>
