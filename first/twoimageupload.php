"<html>

<head>

<body>

<form action="<?php print $PHP_SELF?>" enctype="multipart/form-data" method="post">

Upload the following files:<br />

<input name="userfile[]" type="file" /><br />

<input name="userfile[]" type="file" /><br />

<input type="submit" value="Submit Files" />

</form>"

<?php

$numberOfFiles = $_POST['numberOfFiles'];

for($i = 0; $i < $numberOfFiles; $i++){

$file_name = "images/".$_FILES['uploadedFiles'. $i]['name'];

$file_name = "images/".stripslashes($file_name);

$file_name = str_replace("'","",$file_name);

$copy = copy($_FILES['uploadFile'. $i]['tmp_name'],"images/".$file_name);

// prompt if successfully copied

if($copy){

echo "$file_name | uploaded sucessfully!";

}else{

echo "$file_name | could not be uploaded!";

}

}

?>

</body>

</head>

</html>"
<?php
echo"image uploaded successfully";
?>

