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
    <pre>
    <dl>
        <dt></dt>
        <dd><img src="<?php echo $randomMob->image_url; ?>"></dd>
        <dt>Title:</dt>
        <dd><?php echo $randomMob->title; ?></dd>
        <dt>Episodes:</dt>
        <dd><?php echo $randomMob->episodes; ?></dd>
        <dt>Status:</dt>
        <dd><?php echo $randomMob->status; ?></dd>
        <dt>Aired:</dt>
        <dd>
            <?php echo $randomMob->aired->from; ?>
            <?php echo $randomMob->aired->to; ?>
        </dd>
        <dt>Score:</dt>
        <dd><?php echo $randomMob->score; ?></dd>
        <dt>Synopsis:</dt>
        <dd><?php echo $randomMob->synopsis; ?></dd>
    </dl>
    </pre>
</body>
</html>