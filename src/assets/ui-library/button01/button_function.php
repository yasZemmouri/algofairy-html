<?php
   //use url syntax for the href attribute value: % for space
   function createButton01($buttonLink = "#", $buttonText="Button 01",  $buttonClass="button01"){
    return "<a href=\"$buttonLink\" class=\"$buttonClass\">$buttonText</a>";
}
?>