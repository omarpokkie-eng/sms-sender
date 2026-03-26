<?php $id = $_GET['id'] ?? die('No ID'); ?>
<!DOCTYPE html>
<html>
<head><title>Watching...</title><style>body{background:#000;color:#fff;margin:0;text-align:center;} iframe{width:100%;max-width:900px;height:500px;margin-top:20px; border:2px solid red;}</style></head>
<body>
    <br><a href="index.php" style="color:red;text-decoration:none;">⬅️ Back to Home</a><br>
    <iframe src="https://www.youtube.com/embed/<?php echo $id; ?>?autoplay=1" frameborder="0" allowfullscreen></iframe>
    <h2>Watching Special Anime Episode</h2>
</body>
</html>
