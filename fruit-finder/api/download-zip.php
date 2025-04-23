<?php
// Define the folder to zip
$folderPath = "./parent";

// Get the absolute path to the folder
$realFolderPath = realpath($folderPath);

// Create a new ZipArchive object
$zip = new ZipArchive();

// Define the name and path of the zip file
$zipFilePath = "myZipFile.zip";

// Create the zip file and open it for writing
if ($zip->open($zipFilePath, ZipArchive::CREATE | ZipArchive::OVERWRITE) !== true) {
    exit("Unable to create or open zip file.");
}

// Add the contents of the folder to the zip file
$files = new RecursiveIteratorIterator(new RecursiveDirectoryIterator($realFolderPath), RecursiveIteratorIterator::LEAVES_ONLY);
foreach ($files as $name => $file) {
    if (!$file->isDir()) {
        $filePath = $file->getRealPath();
        $relativePath = substr($filePath, strlen($realFolderPath) + 1);
        $zip->addFile($filePath, $relativePath);
    }
}

// Close the zip file
$zip->close();

// Force download the zip file
header("Content-Type: application/zip");
header("Content-Length: " . filesize($zipFilePath));
header("Content-Disposition: attachment; filename=\"$zipFilePath\"");
readfile($zipFilePath);

// Delete the zip file
unlink($zipFilePath);
?>

