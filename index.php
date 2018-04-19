<?php

use Classes\Client;

//include ("vendor/autoload.php");
include ("includeme.php");

//
//$client = new Client();
//$crawler = $client->request('GET', 'http://www.gutenberg.org/ebooks/56990');
//


$html = file_get_html('http://www.gutenberg.org/ebooks/56990');


// Find all images
foreach($html->find('.bibrec tbody tr') as $element)
    echo $element->src . '<br>';


print_r($html);
exit;

//
//
//$crawler->filter('.bibrec')->each(function ($node) {
//    print_r($node);
//exit;
//    print $node->text()."\n";
//});
//
////print_r($crawler);
//exit;
