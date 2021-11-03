<?php
// header('Content-Type: text/html; charset=utf-8');
 
// $website = './main.php';
// $tags = get_meta_tags($website);
 
// print '<h1>Сайт:'. $website. '</h1>';
 
// $title = ( isset($tags['title']) ) ? $tags['title']: "Отсутствует";
// $keywords = ( isset($tags['keywords']) ) ? $tags['keywords']: "Отсутствует";
// $description = ( isset($tags['description']) ) ? $tags['description']: "Отсутствует";
 
// print '<h2>Генератор:</h2>'. $generator;
// print '<h2>Ключевые слова:</h2>'. $keywords;
// print '<h2>Краткое описание:</h2>'. $description;

// header('Content-Type: text/html; charset=utf-8');
// $arr = [];
// $website = './main.php';
// $arr = $website;

// foreach ( $arr as $value ) {
//     echo $value. PHP_EOL;
// }


// $file = $DOCUMENT_ROOT. "./main.html";
// $doc = new DOMDocument();
// $doc->loadHTMLFile($file);


$doc = new DOMDocument();
$doc->loadHTMLFile("main.html");

$elements = $doc->getElementsByTagName('meta');

if (!is_null($elements)) {
    foreach ($elements as $element) {
      //echo "<br/>". $element->nodeName. ": ";
      //echo $element->getAttribute('name');
        if($element->getAttribute('name') == 'keywords'){
            echo $element->getAttribute('name').'             ';
            echo $element->getAttribute('content');
            echo "<br>";
            echo "<br>";
        } ;
        if($element->getAttribute('name') == 'description'){
            echo $element->getAttribute('name').'             ';
            echo $element->getAttribute('content');
            echo "<br>";
            echo "<br>";
        } ;
        if($element->getAttribute('name') == 'title'){
            echo $element->getAttribute('name').'             ';
            echo $element->getAttribute('content');
            echo "<br>";
            echo "<br>";
        } ;
  
    }
  }


?>