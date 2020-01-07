<?php
extract(parse_plugin_cfg('theme.engine',true));

if (isset($ThemeEngine['text'])) {
	echo "body{color:${ThemeEngine['text']};}";
}

?>


