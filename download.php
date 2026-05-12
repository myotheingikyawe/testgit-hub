<?php
  
?>
<?php
$url = "https://example.com/file.zip";
file_put_contents("file.zip", file_get_contents($url));
echo "Download complete!";
?>