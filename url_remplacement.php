<?php
$url = array("http://www.google.com","www.google.com","https://google.com" ); 
$search = array('http://', 'www.', 'https://');

var_dump($search); 
foreach( $url as $element) {
    echo $element ." => ".str_replace($search,'', $element). '<br />'; }