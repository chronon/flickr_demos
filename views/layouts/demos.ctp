<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
  "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<?php echo $this->Html->charset(); ?>
	<title><?php echo $title_for_layout; ?></title>
	<?php echo $this->Html->meta('icon'); ?>
	<?php echo $this->Html->css('/flickr_demos/css/demos'); ?>
	<?php echo $scripts_for_layout; ?>
</head>

<body>
	<?php echo $content_for_layout; ?>

	<div id="footer">
		<a href="http://chronon.com">chronon</a> made this. <a href="http://technokracy.net">technokracy</a> might have something else.
	</div>

</body>
</html>
