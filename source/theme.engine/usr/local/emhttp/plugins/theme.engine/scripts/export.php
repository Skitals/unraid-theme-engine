<?php
exec("cp /boot/config/plugins/theme.engine/theme.engine.cfg /boot/config/plugins/theme.engine/themes/${_GET["name"]}-${_GET["base"]}.cfg");
echo "\nTheme saved to:\n\n/boot/config/plugins/theme.engine/themes/${_GET["name"]}-${_GET["base"]}.cfg";
?>
