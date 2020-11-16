
<div class="card col-lg-4">
    <div class="card-body">
        <h4 class="card-title">
	        <?php echo block_value('project-title');?>
        </h4>
        <p class="card-text">
	        <?php echo block_value('project-description');?>
        </p>

        <a target="_blank" href="<?php echo block_value('project-url');?>" class="btn btn-primary">
	        <?php echo block_value('project-title');?>
        </a>
    </div>
</div>
