<p>
	Dark Block
</p>
<?php
echo block_value('title') ? "title is ok <br />" : "title missing";
echo block_value('content') ? "content is ok <br />" : "content missing";
echo block_value('background') ? "background is ok <br />" : "background missing";
?>
