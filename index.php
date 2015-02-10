<?php
include('GoogleNews.php');

$news = new GoogleNews();
$news->setSearchQuery('Bangladesh');
$news->setNumberOfNews('10');
echo $news->getNews();
?>

