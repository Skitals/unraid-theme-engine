<?php
exec("rm /boot/config/plugins/theme.engine/themes/${_GET["name"]}.cfg");
echo "\nFile deleted:\n\n/boot/config/plugins/theme.engine/themes/${_GET["name"]}.cfg";
?>
