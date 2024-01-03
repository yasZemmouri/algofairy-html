<?php
    include '../includes/config.php';

    echo "<p> Copying images in progress...</p>";

    $srcDir= $imgPath_src;
    $distDir= $imgPath_dist_from_src;
    // Create the destination directory if it doesn't exist
    // file_exists() can check both the existance of files and directories.
    if (!file_exists($distDir)) {
        mkdir($distDir, 0777, true);
    }
    // Get a list of all files in the source directory.
    //Is it more secure to put image files extensions?
                            //should I remove the /? probably
    $imageFiles = glob($srcDir . '/*');
    // Copy each file to the destination directory
foreach ($imageFiles as $image) {
    if (is_file($image)) { // Check if it's a file (not a directory)
        //basename() take the entire file path return the name of the file with its extension and without the path.
        $imageName = basename($image);
        //create a list of the images in their new dist path. This is only a string.
        $distImage = $distDir . '/' . $imageName;

        // Copy the file
        if (!file_exists($distImage)) {
            if (!copy($image, $distImage)) {
                echo "<p>Failed to copy $image...</p>";
            }
        } else {
            echo "<p>File $imageName already exists in the dist folder...</p>";
        }
    }
}
echo "<p>File copy process Completed</p>";
?>