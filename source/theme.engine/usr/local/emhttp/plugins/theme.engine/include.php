<?php
extract(parse_plugin_cfg('theme.engine',true));
if ($ThemeEngine['enabled'] == "1") { 

$textcolor = $ThemeEngine['text'];
$linkcolor = $ThemeEngine['link'];
?>

<?if ($textcolor):?>
body{color:<?=$textcolor?>;}
<?endif;?>

<?if ($linkcolor):?>
fail
<?endif;?>

<? } ?>
