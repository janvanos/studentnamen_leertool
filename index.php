<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <script>
        function showName(e){
            e.style.opacity = "100";
        }

        </script>
        <a href="index.php">Reload</a>
<?php
$dir    = './fotos/';
$files1 = scandir($dir);
$images = glob($dir . '*.{jpg,jpeg,png,gif}', GLOB_BRACE);

$j = rand(0,count($images)-1);
for ($i=0; $i < count($images); $i++) { 
    if($i == $j){
        echo "<div><img src='"  . $images[$i] . "' style='width:100px;' /><br>";
        echo "<span onclick=\"showName(this)\" style='cursor:pointer;opacity:0;'>".str_replace(".jpeg","",(str_replace("./fotos/","",$images[$i]))) . "</span></div>";
    }
}

?>
</body>
</html>