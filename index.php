<?php

$randomMobJSONString = file_get_contents('https://api.jikan.moe/v3/anime/32182/');
$randomMobObject = json_decode($randomMobJSONString);
$randomMob = $randomMobObject;

?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mob Psycho 100 - API</title>
</head>
<body>
    <h1>Information</h1>
    <dl>
        <dt>Title:</dt>
        <dd><?php echo $randomMob->title; ?></dd>
    </dl>
</body>
</html>