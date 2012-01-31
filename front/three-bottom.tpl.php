<div id="columnsContainer">

	<div class="main-content">
		<?php if ($messages != ""){ ?>
			<div id="message"><?php print $messages ?></div>
		<?php } ?>
		<?php if ($mission != ""){ ?>
			<div id="mission"><span><?php print $mission ?></span></div>
		<?php } ?>
		<?php if ($title != ""){ ?>
			<h1><?php print $title ?></h1>
		<?php } ?>
		<?php if ($help != ""){ ?>
			<p id="help"><?php print $help ?></p>
		<?php } ?>
		<?php if ($tabs != ""){ ?>
			<?php print $tabs ?>
		<?php } ?>
		<?php print $before_content ?>
		<?php print $content; ?>
       </div>

	<br style="clear: both;" />

	<div class="twoWide">
		<?php if($front_bottom_right){ ?>
			<?php print $front_bottom_right; ?>
		<?php } else { ?>
			<?php /* only display edit link for blocks that have a module of 'block' and not'menu' */
				if(user_access('administer blocks')) :
			?>
	   			<div id = "tabblock-edit"> 
					<div class="block-tabs-wrapper">
						<ul class="tabs primary">
	     				 		<li class="active">
								<a class="active" href="<?=url();?>admin/build/block/add">Add Block</a>
							</li>
	      					</ul>
					</div>
				</div>
			<?php endif;?>
		<?php } ?>
	</div>

	<div class="twoWide">
		<?php if($front_bottom_left){ ?>
			<?php print $front_bottom_left; ?>
		<?php } else { ?>
			<?php /* only display edit link for blocks that have a module of 'block' and not'menu' */
				if(user_access('administer blocks')) :
			?>
	   			<div id = "tabblock-edit"> 
					<div class="block-tabs-wrapper">
						<ul class="tabs primary">
	     				 		<li class="active">
								<a class="active" href="<?=url();?>admin/build/block/add">Add Block</a>
							</li>
						</ul>
					</div>
				</div>
			<?php endif;?>
		<?php } ?>
	</div>

	<div class="twoWide">
		<div id="menuimage">
			<?php if($front_left_picture){ ?>
				<?php print $front_left_picture ?>
			<?php } else { ?>
				<?php /* only display edit link for blocks that have a module of 'block' and not'menu' */ ?>
				<?php if (user_access('administer blocks')) :?>
	   				<div id = "tabblock-edit"> 
						<div class="block-tabs-wrapper">
							<ul class="tabs primary">
	     					 		<li class="active">
									<a class="active" href='<?=url();?>admin/build/block/add'>Add Block</a>
								</li>
	      						</ul>
						</div>
					</div>
				<?php endif;?>
			<?php } ?>
		</div>
	</div>

</div>
