<?php

$url = 'json1.json';	//path to your json file.

$data = file_get_contents($url);
//put the content of the file into variable.

$character = json_decode($data); //Decode the json feed.

echo $character[0]->name."and age is =".$character[0]->age;

///////////////////////////////////////////////////////////////////

foreach($character as $i){///////////all data in array json
	echo $i->name.'<br>';}
/////////////////////////////////////////////////////////

?>