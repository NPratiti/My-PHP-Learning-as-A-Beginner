<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .body-1{background-color: red;}
        .body-2{background-color: aqua;}
        .body-3{background-color: white;}
        .body-4{background-color: green;}
        .body-5{background-color: grey;}
        .body-6{background-color: yellow;}
    </style>
</head>
<body class="body-<?php echo rand(1,6); ?>">
    <?php echo "<h1> Hello PHP </h1>"; ?>
</body>
</html>