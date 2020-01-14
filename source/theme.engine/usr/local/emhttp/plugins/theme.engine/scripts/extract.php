<?php
$method = $_GET["method"];
$zip = $_GET["zip"];
$zipurl = $_GET["zipurl"];
$filename = $_GET["filename"];
$overwrite = $_GET["overwrite"];

if ($_GET["method"] == "zip") {
	if ($overwrite) {
		exec("unzip -o /boot/config/plugins/theme.engine/themes/$zip \"*.cfg\" \"*.css\" -d /boot/config/plugins/theme.engine/themes/");
	} else {
		exec("unzip /boot/config/plugins/theme.engine/themes/$zip \"*.cfg\" \"*.css\" -d /boot/config/plugins/theme.engine/themes/");
	}
}

if ($_GET["method"] == "url") {
	$output = array();
	$return_var = -1;
	exec("wget $zipurl", $output, $return_var);
	if ($return_var === 0) {
  		echo "Download successful.";
		if (is_file("$filename")) {
			exec("mv $filename /boot/config/plugins/theme.engine/themes/$filename");			
			$output2 = array();
			$return_var2 = -1;
			if ($overwrite) {
				exec("unzip -o /boot/config/plugins/theme.engine/themes/$filename \"*.cfg\" \"*.css\" -d /boot/config/plugins/theme.engine/themes/", $output2, $return_var2);
			} else {
				exec("unzip /boot/config/plugins/theme.engine/themes/$filename \"*.cfg\" \"*.css\" -d /boot/config/plugins/theme.engine/themes/", $output2, $return_var2);
			}
			if ($return_var === 0) {
				echo "\nUnzipped succesfully.\n\nLoad theme from Saved Themes.";
			} else { 
			exec("rm /boot/config/plugins/theme.engine/themes/$filename");
			echo "\nUnzip failed.\nRemoving files."; 
			}
		} else { echo "Error, filename not expected."; }

	} else { echo "Download failed."; }
}

?>