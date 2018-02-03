<?php
//upload.php
if($_FILES["file"]["name"] != '')
{
 $test = explode('.', $_FILES["file"]["name"]);
 $ext = end($test);
 $name = rand(1, 123456789) . '.' . $ext;
 $location = 'upload/' . $name;  
 move_uploaded_file($_FILES["file"]["tmp_name"], $location);
 echo '<img src="'.$location.'" height="30%" width="50%" class="img-thumbnail" />';
 echo '<br><h2>'.$name.'<h2>';
}
?>
