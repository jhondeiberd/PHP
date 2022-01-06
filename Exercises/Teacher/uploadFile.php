<?php

//Assuming Folder Structure exists.

if (isset($_FILES['imageFile'])) {
    $picture = $_FILES['imageFile'];

    //Image Formats:
    //jpeg or jpg = Smallest image size. Cannot have invisibility
    //png = Bigger in size but they allow invisibility.

    //We could add a size limit with $picture['size']
    $allowedTypes = array(IMAGETYPE_GIF, IMAGETYPE_BMP, IMAGETYPE_JPEG, IMAGETYPE_PNG);
    $detectedType = exif_imagetype($picture['tmp_name']);
    $foundInAllowedTypes = in_array($detectedType, $allowedTypes);
    if ($foundInAllowedTypes) {
        //Replaces any files with same name. CAUTION.
        move_uploaded_file($picture['tmp_name'], './images/' . $picture['name']);
    } else {
        echo "Not allowed File Type! <br />";
        echo "Provided: {$picture['type']}";
    }
}
?>

<html lang="en">
<body>
<form action="uploadFile.php" method="post" enctype="multipart/form-data">
    <h3>Select an image to upload: </h3>
    <input type="file" name="imageFile"> <br/>
    <input type="submit">
</form>
<hr/>
<h3>Display all images in Folder /images:</h3>
<?php
$directory = 'images';
$imageFiles = scandir($directory);
// [0] => '.'  & [1] => '..'
// '.' is current folder and '..' is parent folder.
// we are going to skip these 2 positions as they are not files but folders.
for ($position = 2; $position < count($imageFiles); $position++){
    echo "<img src='$directory/$imageFiles[$position]' alt='$imageFiles[$position]' />";
}


?>
</body>
</html>
