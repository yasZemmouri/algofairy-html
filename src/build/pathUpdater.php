<?php
    include '../includes/config.php'; 
    //define the directory path
    $htmlFilesDirctory = $distPath;
    // get all html files in the directory in form of array 
    $htmlFiles = glob($htmlFilesDirctory . '/*.html');
    // loop through each html file 
    foreach($htmlFiles as $htmlFile){
        //Read the HTML file content
        $content=file_get_contents($htmlFile);
        //update the css file path in $content and save the result in $updatedContent
        // To use a variable inside a string you should use "" double quotes they don't work in '' single quotes 
        $updatedContent = str_replace("href=\"$mainCSS\"", 'href="assets/css/main.css"', $content);
        //save the updated content back to the html file
        file_put_contents($htmlFile, $updatedContent);
    }
?>