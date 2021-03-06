<div id="columnsContainer">

	<?php if($sidenav || $secondary_content || user_access('administer blocks')){ ?>
		<div id="sidenav" class="twoWide">
		   	<div class="content">
				<?php print $sidenav; ?>
			</div>
			<div id="miscContent">
				<div id="menuimage">
					<?php if($secondary_content){ ?>
						<?php print $secondary_content; ?>
					<?php }elseif(user_access('administer blocks')){ ?>
						<div id = "tabblock-edit"> 
							<div class="block-tabs-wrapper">
								<ul class="tabs primary">
	     						 		<li class="active">
										<a class="active" href="<?=url();?>admin/build/block/add">Add Block</a>
									</li>
	      							</ul>
							</div>
						</div>
					<?php	}?>
				</div>
			</div>
		</div>
	<?php } ?>

	<div class="main-content <?php if($sidenav || $secondary_content || user_access('administer blocks')){ ?> fourWide<?php } ?>">
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
		<?php print $after_content; ?>
	</div>
</div>