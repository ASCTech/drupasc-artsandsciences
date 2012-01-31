<div id="node-<?php print $nid ?>" class="node<?php print ($sticky && $page == 0) ? " sticky" : ""; ?><?php print ($page == 0) ? " teaser" : " "; ?><?php print ' ' . ($node->type); ?><?php print ($submitted && !$page) ? " cal" : ""?>">
	<?php print $picture ?>

	<?php if ($page == 0) { ?>
		<h2 class="title"><a href="<?php print $node_url ?>"><?php print $title ?></a></h2>
	<?php } ?>

	<div><?php print $content ?></div>
</div>
