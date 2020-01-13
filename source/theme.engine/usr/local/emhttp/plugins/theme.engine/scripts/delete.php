<?php
echo "\n";
if ($_GET["type"] == "theme") {
	if (is_file("/boot/config/plugins/theme.engine/themes/${_GET["name"]}.cfg")){
		exec("rm /boot/config/plugins/theme.engine/themes/${_GET["name"]}.cfg");
		echo "File deleted:\n/boot/config/plugins/theme.engine/themes/${_GET["name"]}.cfg\n";
	}
	if (is_file("/boot/config/plugins/theme.engine/themes/${_GET["name"]}.css")){
		exec("rm /boot/config/plugins/theme.engine/themes/${_GET["name"]}.css");
		echo "File deleted:\n/boot/config/plugins/theme.engine/themes/${_GET["name"]}.css";
	}
}
if ($_GET["type"] == "zip") {
	if (is_file("/boot/config/plugins/theme.engine/themes/${_GET["name"]}")){
		exec("rm /boot/config/plugins/theme.engine/themes/${_GET["name"]}");
		echo "File deleted:\n/boot/config/plugins/theme.engine/themes/${_GET["name"]}\n";
	}
}
?>
