<div class="box" style="margin-bottom: 3vh">
	<div class="thumb dark-overlay">
		<div class="photo">
			<a href="<?php echo block_value('link');?>" title="<?php echo block_value('title');?> london">



				<?php
				$attachment_id = block_value( 'background' );
				echo wp_get_attachment_image( $attachment_id, 'medium' );
				?>
				<div class="info">
					<h3 class="title" title="php development company">
						<?php echo block_value('title');?>
					</h3>
					<div class="excerpt">
						<?php echo block_value('content');?>
					</div>
					<em class="arrow-right"></em>
				</div>
			</a>
		</div>
	</div>
</div>
