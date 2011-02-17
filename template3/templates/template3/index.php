<!DOCTYPE html>
<?php
$menu = JSite::getMenu();
if ($menu)
    $menu = $menu->getActive();
if ($menu)
    $menu = $menu->alias;
$testing = "true";
?> 
<head>
	<link rel="stylesheet" href="/templates/template3/css/template.css" />
</head>
<html>
<body>
	<div id="main">
		<div id="inner"><div>
			component
			<b>component</br>
			<b>component</br>
			<b>component</br>
			<b>component</br>
			<b>component</br>
			<b>component</br>
			<b>component</br>
			<b>component</br>
			<b>component</br>
			<b>component</br>
			<b>component</br>
			<b>component</br>
			<b>component</br>
			<b>component</br>
			<b>component</br>
			<b>component</br>
			<b>component</br>
			<b>component</br>
			<b>component</br>
			<b>component</br>
			<b>component</br>
			</div></div>
	</div>
	
	<div id="left-sidebar">
		<div>
		<img src="/templates/template3/images/left-sidebar-name.png" alt="page" />
		</div>
	</div>
	
	<div id="right-sidebar">
		<img src="/templates/template3/images/names.png" alt="names" />
		<div>
			October 15, 2011
			<jdoc:include type="modules" name="menu" style="xhtml" />
		</div>
	</div>
</body>
</html>