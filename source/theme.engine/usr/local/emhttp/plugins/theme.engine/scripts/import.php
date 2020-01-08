<?php
exec("cp /boot/config/plugins/theme.engine/themes/${_GET["name"]}.cfg /boot/config/plugins/theme.engine/theme.engine.cfg");
echo "\nTheme imported from file:\n\n/boot/config/plugins/theme.engine/themes/${_GET["name"]}.cfg\n\nBase theme set to ${_GET["base"]}.";
?>
