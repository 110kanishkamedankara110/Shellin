<?php
$txt=$_GET["txt"];
$database=new mysqli("localhost","id18980458_root","A#123isuru123","id18980458_about","3306");
$q='UPDATE `about` SET `about`="'.$txt.'" WHERE `id`=1;';
$database->query($q);


?>

<script>
    window.location="add_about.php"
</script>