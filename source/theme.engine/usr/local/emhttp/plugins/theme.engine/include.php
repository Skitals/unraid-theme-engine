<?php
extract(parse_plugin_cfg('theme.engine',true));
if ($ThemeEngine['enabled'] == "1") {

$textcolor = $ThemeEngine['text'];
$linkcolor = $ThemeEngine['link'];
$mainbackground = $ThemeEngine['mainbackground'];
$tablebackground = $ThemeEngine['tablebackground'];
$tablehead = $ThemeEngine['tablehead'];
$tablecontrast = $ThemeEngine['tablecontrast'];
$headertext = $ThemeEngine['headertext'];
$headerbackground = $ThemeEngine['headerbackground'];
$menutext = $ThemeEngine['menutext'];
$menubackground = $ThemeEngine['menubackground'];
$buttontext = $ThemeEngine['buttontext'];
$buttonbackground = $ThemeEngine['buttonbackground'];
$buttonhtext = $ThemeEngine['buttonhtext'];
$buttonhbackground = $ThemeEngine['buttonhbackground'];
$grayscale = $ThemeEngine['grayscale'];
$bluetext = $ThemeEngine['bluetext'];
$greentext = $ThemeEngine['greentext'];
$orangetext = $ThemeEngine['orangetext'];
$redtext = $ThemeEngine['redtext'];
$greenorb = $ThemeEngine['greenorb'];
$blueorb = $ThemeEngine['blueorb'];

?>

<?if ($headertext):?>
#header,#header .logo,#header .text-right a{color:<?=$headertext?>}
#header .block{background-color:transparent}
#header .text-left {border-right:solid medium <?=$headertext?>}
<?endif;?>

<?if ($headerbackground):?>
#header{background-color:<?=$headerbackground?>}
<?endif;?>

<?if ($menutext):?>
#nav-block #nav-item a{color:<?=$menutext?>}
<?endif;?>

<?if ($menubackground):?>
#menu{background-color:<?=$menubackground?>}
<?endif;?>

<?if ($mainbackground):?>
body{background-color:<?=$mainbackground?>}
<?endif;?>

<?if ($tablehead):?>
#title{background-color:<?=$tablehead?>;border-bottom:1px solid <?=$tablebackground?>;}
table.disk_status thead tr:first-child td{background-color:<?=$tablebackground?>}
table.disk_status thead tr:last-child{border-bottom:1px solid <?=$tablebackground?>}
table tbody tr.tr_last{background-color:<?=$tablebackground?>;border-top:1px solid <?=$tablebackground?>}
table.share_status thead tr:first-child td{background-color:<?=$tablebackground?>}
<?endif;?>

<?if ($tablebackground):?>
table{background-color:<?=$tablebackground?>}
span.outer.solid{background-color:<?=$tablebackground?>}
div.user-list{background-color:<?=$tablebackground?>}
.ca_holder {background-color:<?=$tablebackground?> !important}
<?endif;?>

<?if ($tablecontrast):?>
table.share_status tbody tr:nth-child(even){background-color:<?=$tablecontrast?>}
table.tablesorter tbody tr:nth-child(even){background-color:<?=$tablecontrast?>}
table.disk_status tbody tr:nth-child(even){background-color:<?=$tablecontrast?>}
table.tablesorter thead tr th{background-color:<?=$tablecontrast?>}
table.tablesorter thead tr .tablesorter-headerAsc, table.tablesorter thead tr .tablesorter-headerDesc{background-color:<?=$tablecontrast?>}
div.user-list{border:1px solid <?=$tablecontrast?>}
<?endif;?>

<?if ($textcolor):?>
body{color:<?=$textcolor?>}
a.none{color:<?=$textcolor?>}
div.Panel i.PanelIcon {color:<?=$textcolor?>}
table.share_status.dashboard td i.chevron {color:<?=$textcolor?>}
<?endif;?>

<?if ($linkcolor):?>
a{color:<?=$linkcolor?>}
<?endif;?>

<?if ($buttontext):?>
input[type=button], input[type=reset], input[type=submit], button, button[type=button], a.button {color:<?=$buttontext?>}
<?endif;?>

<?if ($buttonbackground):?>
input[type=button], input[type=reset], input[type=submit], button, button[type=button], a.button {background:<?=$buttonbackground?>}
<?endif;?>

<?if ($buttonhtext):?>
input:hover[type=button],input:hover[type=reset],input:hover[type=submit],button:hover,button:hover[type=button],a.button:hover{color:<?=$buttonhtext?>}
<?endif;?>

<?if ($buttonhbackground):?>
input:hover[type=button],input:hover[type=reset],input:hover[type=submit],button:hover,button:hover[type=button],a.button:hover{background:<?=$buttonhbackground?>}
<?endif;?>

<?if ($grayscale):?>
img{-webkit-filter:grayscale(<?=$grayscale?>%);filter:grayscale(<?=$grayscale?>%);}
#header .logo svg{-webkit-filter:grayscale(<?=$grayscale?>%);filter:grayscale(<?=$grayscale?>%)}
<?endif;?>

<?if ($bluetext):?>
.blue-text{color:<?=$bluetext?>}
<?endif;?>

<?if ($greentext):?>
.green-text,.passed{color:<?=$greentext?> !important}
.green{color:<?=$greentext?>}
.switch-button-label.on {color:<?=$greentext?> !important}
.switch-button-background.checked {background-color:<?=$greentext?> !important}
<?endif;?>

<?if ($orangetext):?>
.orange-text,.warning{color:<?=$orangetext?>}
<?endif;?>

<?if ($redtext):?>
.red-text, .failed {color:<?=$redtext?> !important}
<?endif;?>

<?if ($greenorb):?>
.green-orb{color:<?=$greenorb?>}
<?endif;?>

<?if ($blueorb):?>
.blue-orb{color:<?=$blueorb?>}
<?endif;?>

<? 
} 


if ($ThemeEngine['customstyle'] == "1") {
	if ( is_file("/boot/config/plugins/theme.engine/themes/${ThemeEngine['themename']}-${display['theme']}.css") ) {
		include "/boot/config/plugins/theme.engine/themes/${ThemeEngine['themename']}-${display['theme']}.css";
	}

}



if ($ThemeEngine['customcss'] == "1") {
	if ( is_file("/boot/config/plugins/theme.engine/custom.css") ) {
		include '/boot/config/plugins/theme.engine/custom.css';
	}
	if ( is_file("/boot/config/plugins/theme.engine/custom-black.css") && $display['theme'] == "black") {
		include '/boot/config/plugins/theme.engine/custom-black.css';
	}
	if ( is_file("/boot/config/plugins/theme.engine/custom-white.css") && $display['theme'] == "white") {
		include '/boot/config/plugins/theme.engine/custom-white.css';
	}
	if ( is_file("/boot/config/plugins/theme.engine/custom-gray.css") && $display['theme'] == "gray") {
		include '/boot/config/plugins/theme.engine/custom-gray.css';
	}
	if ( is_file("/boot/config/plugins/theme.engine/custom-azure.css") && $display['theme'] == "azure") {
		include '/boot/config/plugins/theme.engine/custom-azure.css';
	}
}

?>
