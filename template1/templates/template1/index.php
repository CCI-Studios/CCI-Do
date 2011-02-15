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
	
	<link rel="stylesheet" href="/templates/template1/css/template.css" />
	
</head>

<body class="<?php echo $menu?>">
	
	<div id="wrapper">
		<div id="top">
			<jdoc:include type="modules" name="top" style="xhtml" />
			<div class="clear"></div>
		</div>
		
		<div id="body">	
			<div id="inner">
				<div id="sidebar">
					<div class="content">
						<jdoc:include type="component" />
					</div>
				</div>
			</div>
			<div class="clear"></div>
		</div>
		
		<div id="siteby">
			<a href="http://www.ccistudios.com" target="_blank">
			<img src="/templates/template1/images/site-by.png" width="11" height="92" alt="Site By" />
			</a>
		</div>
		
		<div id="menu">
			<jdoc:include type="modules" name="menu" style="xhtml" />
			<div class="clear"></div>
		</div>
	</div>
	
	<div class="hidden">
		<jdoc:include type="modules" name="hidden" style="raw" />
	</div>
	
</body>
</html>