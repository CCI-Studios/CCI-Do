<?php 

function _symlink($source, $destination, $path, $prefix = '') {
	if ($prefix) $prefix .= '/';
	
	shell_exec("rm ".$destination.$path);
	shell_exec("ln -s ".$source.$prefix.$path.' '.$destination.$path);
	echo $source.$prefix.$path.' -> '.$destination.$path.'<br/>';
}

$root = "~/subdomains/dev/";
$site	= $root."public_html/";
$t1		= $root."template1/";
$t2		= $root."template2/";
$t3		= $root."template3/";

/* template shortcuts */
_symlink($t1, $site, 'templates/template1');
_symlink($t2, $site, 'templates/template2');