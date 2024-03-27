<?php
// File path to your JavaScript file
$jsFilePath = 'new.js';

// Create operation: Write new JavaScript content to the file
function createFile($filePath, $content) {
    file_put_contents($filePath, $content);
}

// Read operation: Retrieve the content of the JavaScript file
function readFileContent($filePath) {
    return file_get_contents($filePath);
}

// Update operation: Modify the content of the JavaScript file
function updateFileContent($filePath, $newContent) {
    file_put_contents($filePath, $newContent);
}

// Delete operation: Remove the JavaScript file from the file system
function deleteFile($filePath) {
    unlink($filePath);
}

// Example usage
// Create
$newJSContent = 'console.log("Hello, world!");';
createFile($jsFilePath, $newJSContent);

// Read
$jsContent = readFileContent($jsFilePath);
echo "JavaScript file content: $jsContent <br>";

// Update
$updatedJSContent = 'console.log("Updated content!");';
updateFileContent($jsFilePath, $updatedJSContent);

// Read again after update
$jsContentAfterUpdate = readFileContent($jsFilePath);
echo "JavaScript file content after update: $jsContentAfterUpdate <br>";

// Delete
// deleteFile($jsFilePath);
echo "JavaScript file deleted!";
?>
