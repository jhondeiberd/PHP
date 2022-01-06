<?php

if (isset($_FILES['fileToUpload']))
{
    $imageFile = $_FILES['fileToUpload'];

    if ($imageFile['size'] <= 300000) {   //Under 300kb acceptable.

        //https://stackoverflow.com/a/6755263/205110
        $allowedTypes = array(IMAGETYPE_JPEG, IMAGETYPE_PNG, IMAGETYPE_GIF);
        $detectedType = exif_imagetype($imageFile['tmp_name']);
        $error = !in_array($detectedType, $allowedTypes);
        if (!$error) {
            //Normally: Rename file to something that will not conflict.
            move_uploaded_file($imageFile['tmp_name'], "./pictures/$imageFile[name]");
            echo " <img src='pictures/$imageFile[name]'  > ";
        }
        else {
            echo "Invalid file type: please upload PNG, JPEG, GIF <br />";
        }
    } else {
        echo "FILE SIZE TOO BIG: Max size of 300kb";
    }
}

?>


<!DOCTYPE html>
<html>
<body>

<form action="<?php $_SERVER['PHP_SELF']?>" method="post" enctype="multipart/form-data">
    Select image to upload:
    <input type="file" name="fileToUpload" id="fileID">
    <input type="submit" value="Upload Image" name="submit">
</form>

</body>
</html>

