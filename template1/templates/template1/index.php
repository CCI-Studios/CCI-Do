<!DOCTYPE html>
<html>
<head>
	<!--
	<jdoc:include type="head" />
	-->
	
	<link rel="stylesheet" href="/templates/template1/css/template.css" />
		
</head>

<body>
	
	<div id="wrapper">
		<div id="top">
			<jdoc:include type="modules" name="top" style="xhtml" />
			<div class="clear"></div>			
		</div>
		
		<div id="body">
			<jdoc:include type="component" />
			<div class="clear"></div>
		</div>
		
		<div id="siteby">
			<img src="/templates/template1/images/site-by.png" width="11" height="92" alt="Site By" />
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