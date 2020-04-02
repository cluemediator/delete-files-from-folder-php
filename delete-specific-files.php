<?php

// folder path to delete files
$path = "./uploads";

// list of file names located inside the folder that start with 'spec-' name
$files = glob($path.'/spec-*');

// delete specific files from the list 
foreach($files as $file){
	if(is_file($file)){
		unlink($file);
	}
}

echo "Files deleted successfully.";
exit;
?> 