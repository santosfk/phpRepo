<?php

//null

$cidade=null;
var_dump($cidade);

//resource
// são recursos especiais
// mostra: mysql link
$c = mysql_connect();
echo get_resource_type($c)."\n";

// mostra: stream
$fp = fopen("foo", "w");
echo get_resource_type($fp)."\n";

// mostra: domxml document
$doc = new xmldoc("1.0");
echo get_resource_type($doc->doc)."\n";
?>