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
	
	<link rel="stylesheet" href="/templates/template3/css/template.css" />
</head>

<body class="<?php echo $menu?>">
	
	<div id="main">
		<div id="inner"><div>
			<joc:include type="component" />
		</div></div>
	</div>
	
	<div id="left-sidebar">
		<div>
		<img src="/templates/template3/images/left-sidebar-name.png" alt="page" />
		</div>
	</div>
	
	<div id="right-sidebar"><div>
		<jdoc:include type="modules" name="menu" style="xhtml" />
		
		<div id="siteby">
			Site By <a href="http://www.ccistudios.com" target="_blank"> CCI Studios </a>
		</div>			
	</div></div>
	
	<div class="hidden">
		<jdoc:include type="modules" name="hidden" style="raw" />
	</div>
</body>
</html>