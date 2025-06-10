<?php
$urls = ['https://twitch.tv/', 'https://youtube.com/'];
$random_url = $urls[array_rand($urls)];
header("Location: $random_url");
exit;
