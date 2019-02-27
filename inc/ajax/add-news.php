<?php
require('../config.php');
global $mysqli;
$news_title = $_POST['news_title'];
$news_content = $_POST['news_content'];
$add_news_req = "INSERT INTO news_feed (
    news_title,
    news_content
    ) VALUES (
    '$news_title',
    '$news_content'
    )";
if($mysqli->query($add_news_req) === TRUE ){
    echo 'Ajout OK';
}
?>