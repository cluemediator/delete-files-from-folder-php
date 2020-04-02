<?php

// folder path to delete all files
$path = "./uploads";

// list of filenames located inside the folder
$files = glob($path.'/*');

// delete all the files from the list
foreach($files as $file){
	if(is_file($file)){
		unlink($file);
	}
}

echo "Files deleted successfully.";
exit;
?>