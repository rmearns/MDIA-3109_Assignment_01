<?php
//$items = simplexml_load_file("http://elkartel.com/feed");

$context = stream_context_create(array('http' => array('header' => 'Accept: application/xml')));
$url = "http://elkartel.com/feed";

$xml = file_get_contents($url, false, $context);
$xml = simplexml_load_string($xml);

foreach($xml as $item){
	foreach($item as $var3){

		echo "<p>";
		var_dump($item["title"]);
		/*if($id == "title"){
			$title = array("title"=>$var3[0]);
			echo json_encode($title);
		}*/
	}
}
?>