<?php
session_start();
$pass = "ahad123"; 
if(isset($_POST['login'])){ if($_POST['p'] == $pass) $_SESSION['a']=1; }
if(!isset($_SESSION['a'])) die('<form method="post" style="text-align:center;padding:50px;"><h2>Admin</h2><input type="password" name="p"><button name="login">Login</button></form>');

$file = 'movies.json';
$movies = json_decode(file_get_contents($file), true) ?? [];

if(isset($_POST['add'])){
    $movies[] = ["title"=>$_POST['t'], "id"=>$_POST['i'], "poster"=>$_POST['p']];
    file_put_contents($file, json_encode($movies));
    header("Location: admin.php");
}
if(isset($_GET['del'])){
    unset($movies[$_GET['del']]);
    file_put_contents($file, json_encode(array_values($movies)));
    header("Location: admin.php");
}
?>
<!DOCTYPE html>
<html>
<head><title>Admin</title><style>body{background:#111;color:white;padding:20px;font-family:sans-serif;}input{width:100%;padding:10px;margin:10px 0;}</style></head>
<body>
    <h2>Add New Movie</h2>
    <form method="post">
        <input type="text" name="t" placeholder="Title" required>
        <input type="text" name="i" placeholder="YouTube Video ID" required>
        <input type="text" name="p" placeholder="Poster Image URL" required>
        <button name="add" style="padding:10px 20px; background:red; color:white; border:none;">Upload</button>
    </form>
    <h3>Current Movies:</h3>
    <?php foreach($movies as $k=>$m) echo "<div>".$m['title']." <a href='?del=$k' style='color:red;'>Delete</a></div><hr>"; ?>
</body>
</html>
