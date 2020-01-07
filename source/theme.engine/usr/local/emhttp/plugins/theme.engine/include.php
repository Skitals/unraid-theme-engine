<?php
extract(parse_plugin_cfg('theme.engine',true));
if ($ThemeEngine['enabled'] == "1") { 

$textcolor = $ThemeEngine['text'];
$linkcolor = $ThemeEngine['link'];
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

<? } ?>

.switcher {
margin: 0 20px 0 0;
vertical-align: top;
}

input[type="color"] {
	-webkit-appearance: none;
	border: none;
	width: 166px;
	padding: 0;
	margin: 0 20px 0 0;
    font-family: clear-sans;
    font-size: 1.3rem;
    background-color: transparent;
    border: none;
    text-indent: 0;
    min-height: 2rem;
    line-height: 2rem;
    outline: none;
    margin: 0 20px 0 0;
    box-shadow: none;
    border-radius: 0;
    color: #f2f2f2;
}

input[type="color"]::-webkit-color-swatch-wrapper {
	padding: 0;
}

input[type="color" i] {
	height: 21px;
}
