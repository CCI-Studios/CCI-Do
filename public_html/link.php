<?php 
 
function _symlink($source, $destination, $path, $prefix = '') {
    if ($prefix) $prefix .= '/';
     
    shell_exec("rm ".$destination.$path);
    shell_exec("ln -s ".$source.$prefix.$path.' '.$destination.$path);
    echo $source.$prefix.$path."\t".$destination.$path."<br/>\n";
}
 
$root = dirname(getcwd()).'/';
$site   = $root."public_html/";
$t1     = $root."template1/";
$t2     = $root."template2/";
$t3     = $root."template3/";
$com    = $root."com_ido/";
$nooku= $root."nooku/";
 
/* template shortcuts */
_symlink($t1, $site, 'templates/template1');
_symlink($t2, $site, 'templates/template2');
 
/* component symlink */
_symlink($com, $site, 'administrator/components/com_ido');
 
 
/* nooku symlink */
//shell_exec('cd '.$root.' && svn checkout http://svn2.assembla.com/svn/nooku-framework/trunk/code/ nooku'); // checkout Nooku
// update Nooku
_symlink($nooku, $site, 'administrator/components/com_default');
_symlink($nooku, $site, 'administrator/modules/mod_default');
_symlink($nooku, $site, 'libraries/koowa');
_symlink($nooku, $site, 'media/com_default');
_symlink($nooku, $site, 'media/lib_koowa');
_symlink($nooku, $site, 'plugins/koowa');
_symlink($nooku, $site, 'plugins/system/koowa.php');
_symlink($nooku, $site, 'plugins/system/koowa.xml');
_symlink($nooku, $site, 'components/com_default', 'site');
_symlink($nooku, $site, 'modules/mod_default', 'site');