<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html lang="<?php print $language->language ?>" xml:lang="<?php print $language->language ?>" xmlns="http://www.w3.org/1999/xhtml">

<head profile="http://gmpg.org/xfn/11">
	<title><?php print $head_title ?></title>
	<?php require_once("sites/all/files/navbar/osu-navbar-h.html"); ?>
	<?php print $head ?>
	<?php print $styles ?>
	<?php print $scripts ?>
</head>

<body class="<?php print $body_classes ?> grey">
<?php require_once("sites/all/files/navbar/osu-navbar-b.html"); ?>

<div id="mainContainer">
	<?php if($logo){ ?>
		<div id="titleBar">
			<a href="<?php global $base_url; print $base_url; ?>"><img alt="Deparment Logo" src="<?php print $logo ?>" /></a>
		</div>
	<?php } ?>

    	

	<br style="clear:both;" />	

	<?php if ($mainnav) { ?>
		<div id="mainNav">
			<?php print $mainnav; ?>
		</div>
	<?php } ?>

	<?php if($header) { ?>
		<div id="header">
			<?php print $header; ?>
		</div>
	<?php } ?>

	<a name="page-content"></a>
	<?php if($is_front){ ?>
			<?php include("front.tpl.php"); ?>
	<?php }else{ ?>
			<?php include("inner.tpl.php"); ?>
	<?php } ?>

	<br style="clear:both;" />

	<div id="footerContainer">
		<div id="footer_content">
			<div id="footer_address">
				<?php if(user_access('administer site configuration')) { ?>
					<ul class="tabs primary">
				 		<li class="active">
							<a class="active" href="<?=url();?>admin/settings/site-information">Edit Text</a>
						</li>
					</ul>
				<?php } ?>
				<?php print $footer_message; ?>
				<?php include("sites/all/files/icons/uicons.php"); ?>
			</div>
		</div>
		<?php print $footer; ?>	
	</div>
</div>

<?php print $closure;?>
</body>
</html>
