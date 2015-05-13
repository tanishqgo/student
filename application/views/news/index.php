<?php 
	echo $title.'<br />';

	foreach($news_item as $item)
	{
		echo $item['title'].'<br />';
		echo $item['text'].'<br />';
	}
?>