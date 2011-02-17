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
	<div id="main">
		<div id="leftsidebar">
			<img src="/templates/template3/images/left-sidebar-name.png" alt="page" />
			<div id="rightsidebar"></div>
		</div>
	</div>

	<div id="inner"></div>

	<div id="menu">
		<div id="menutitle">
			<jdoc:include type="modules" name="menu" style="xhtml" />
		</div>
	</div>
</body>
</html>