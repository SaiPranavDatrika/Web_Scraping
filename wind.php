<?php
     
   include('simple_html_dom.php');

    $html = file_get_html('file:///C:/Users/Sowjanya/Desktop/FLAssign/Byron.html');
    // Extract Name, Title, Research interests, Education, and Office using the DOM parser.
    $name = $html->find('h1.heading-title', 0)->plaintext;
   $element = $html->find('div[class="details col-md-9 col-sm-8 col-xs-6"] h2.has-divider', 0);

// Check if the element was found before trying to access its plaintext
if ($element) {
    // Retrieve the plaintext content of the element
    $title = $element->plaintext;
   
}

  $element = $html->find('div[class="col-md-12 col-sm-11 col-xs-12"] div[class="panel-body"] p', 0);

// Check if the element was found before trying to access its plaintext
if ($element) {
    // Retrieve the plaintext content of the element
    $researchInterests = $element->plaintext;
   
}

   $ele = $html->find('div[class="col-md-12 col-sm-11 col-xs-12"] div[class="panel panel-default"] div[class="panel-body"].p ',0);
   $education =  $ele->plaintext;
   $elem=$html->find('div[class="col-md-4 col-sm-12 col-xs-12"] div[class="panel-body"] p',0);
   $office=$elem->plaintext;
  //  $education = preg_replace('/\s+/', ' ', trim($html->find('div:contains("Education:")', 0)->plaintext));
  //  $education= $html->find('div[class="col-md-12 col-sm-11 col-xs-12"].div["class=panel-body"].p',0)->plaintext;

    // Create a formatted output string.
    $outputData = "Name: $name\nTitle: $title\nResearchInterests: $researchInterests\nEducation: $education\nOffice: $office";
echo $outputData;
   
?>