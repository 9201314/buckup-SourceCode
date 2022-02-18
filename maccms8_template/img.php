<?php
header('Content-type: image/jpeg/png/gif/bmp/jpg/m4a/mp3/mp4');
echo file_get_contents(isset($_GET["url"])?$_GET["url"]:'');
?>