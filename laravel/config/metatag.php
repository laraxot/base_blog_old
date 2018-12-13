<?php

$default = [];

require_once(base_path('packages/XRA/XRA/src/Helpers/Helper.php'));
$site=getConfig(['file'=>basename(__FILE__)]);
$out=array_merge($default, $site);
//echo '<pre>';print_r($out);echo '</pre>';
return $out;
