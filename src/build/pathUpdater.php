<?php
//Update the path links on html documents to match the dist structure.
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
        //the space after href= " is important. Should I use both href= " and href=" through OR or regular expressions?
        $updatedContent = str_replace([
                $mainCSS_from_src,

                               
                // "href= \"$faviconUrl\"",
                // "href= \"$appleTouchIconUrl\"",
                $imgPath_src,
                // "href= \"$imgPath_src\"",
            ],
            [
                $mainCSS_in_dist,
                // "href= \"assets/img/$faviconIco\"",
                // "href= \"assets/img/$appleTouchImg\"",
                // "href= \"$imgPath_dist\"",
                $imgPath_dist_in_dist,
            ], 
            $content
        );
        //save the updated content back to the html file
        file_put_contents($htmlFile, $updatedContent);
    }
?>