<?php
$themecss = $_POST["themecss"];
$filename = $_POST["filename"];
$save = $_POST["save"];

if (!empty($themecss)) {
	$myfile = fopen("/boot/config/plugins/theme.engine/themes/${filename}.css", "w") or die("Unable to open file!");
	fwrite($myfile, $themecss);
	fclose($myfile);
}

if ((empty($themecss)) && (file_exists("/boot/config/plugins/theme.engine/themes/${filename}.css"))) {
	exec("rm /boot/config/plugins/theme.engine/themes/${filename}.css >>/dev/null 2>&1");
}

if ($save) {
	do {
		if (file_exists("/boot/config/plugins/theme.engine/theme.engine.cfg")) {
		exec("cp /boot/config/plugins/theme.engine/theme.engine.cfg /boot/config/plugins/theme.engine/themes/${filename}.cfg >>/dev/null 2>&1");
		break;
		}
	} while(!file_exists("/boot/config/plugins/theme.engine/theme.engine.cfg"));
	exec("cp /boot/config/plugins/theme.engine/theme.engine.cfg /boot/config/plugins/theme.engine/themes/${filename}.cfg >>/dev/null 2>&1");
}
?>
