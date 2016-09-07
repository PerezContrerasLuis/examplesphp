





<?php
echo "<a href='http://web.tursos.com/como-leer-un-archivo-xml-con-php/'>URL del ejemplo </a></br></br>";
$mispost = simplexml_load_file('tres.xml');
echo "<ul>";
foreach ($mispost->channel->item as $post) {
	
	$title=$post->title;
	$link = $post->link;
	$des= $post->description;

	echo "<li><a href='".$link."''>".$title."</a><div>".$des."</div></li>";
}
echo "</ul>";
  ?>