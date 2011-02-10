<!DOCTYPE html>
<?php
$menu = JSite::getMenu();
if ($menu)
    $menu = $menu->getActive();
if ($menu)
    $menu = $menu->alias;
$testing = "true";
?>
<html>
<head>
	<jdoc:include type="head" />
	
	<!-- styles -->
	<link href="/templates/template2/css/template.css" rel="stylesheet" /> 
	<!-- scripts -->
	<!-- misc -->
	
	<?php if ($testing): ?>
		<meta name="robots" content="nofollow, noindex" />
	<?php endif; ?>
</head>

<body class="<?php echo $menu?>"><div>
	<?php if (!$testing): ?>
		google analytics
	<?php endif; ?>
	
	<div id="wrapper">
		<div id="body"><div><div><div>
			<jdoc:include type="component" />
		</div></div></div></div>
		
		<div id="siteby">
			<a href="http://www.ccistudios.com" target="_blank">
				<img src="/templates/template2/images/cci.png" />
			</a>
		</div>
		
		<div id="footer">
			<jdoc:include type="modules" name="footer" style="xhtml" />
		</div>
	</div>	
	
	<div class="hidden">
		<jdoc:include type="modules" name="hidden" style="raw" />
	</div>

</div></body>
</html>