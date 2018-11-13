<?php
session_start();
?>
<?php include("../db.php");?>


<?php 
$count=$_SESSION["count"];
$email=$_SESSION["email"];
echo $pimages=basename($_FILES["pimage"]["name"]);

?>

 <?php
$imgcnt =1;
$imgcount = "select * from users";

$resultimgcount = $conn->query($imgcount);
if ($resultimgcount->num_rows > 0) {
    
    while($row = $resultimgcount->fetch_assoc()) {
   $imgcnt=$imgcnt+1;     
                                                   }
} else {
    echo "Not result";
}
 
?>


<?php

$plaintext = $pimages;
$aespassword = $email;
$method = 'aes-256-cbc';

// Must be exact 32 chars (256 bit)
$aespassword = substr(hash('sha256', $aespassword, true), 0, 32);
 
// IV must be exact 16 chars (128 bit)
$iv = chr(0x0) . chr(0x0) . chr(0x0) . chr(0x0) . chr(0x0) . chr(0x0) . chr(0x0) . chr(0x0) . chr(0x0) . chr(0x0) . chr(0x0) . chr(0x0) . chr(0x0) . chr(0x0) . chr(0x0) . chr(0x0);

// av3DYGLkwBsErphcyYp+imUW4QKs19hUnFyyYcXwURU=
$encrypteds = base64_encode(openssl_encrypt($plaintext, $method, $aespassword, OPENSSL_RAW_DATA, $iv));

// My secret message 1234
$decrypted = openssl_decrypt(base64_decode($encrypteds), $method, $aespassword, OPENSSL_RAW_DATA, $iv);

 

?>

<?php 
  $encrypted = str_replace('/', '', $encrypteds);
?>

 

<?php
$target_dir = "../uploads/";
$target_file = $target_dir . basename($_FILES["pimage"]["name"]);

$snehi_img_dir=$target_dir . $encrypted.$imgcnt.".jpg";
$snehi_file_img_name="uploads/".$encrypted.$imgcnt.".jpg";


$uploadOk = 1;

echo basename($_FILES["pimage"]["name"]);
echo basename($_FILES["pimage"]["size"]);
 


$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
    $check = getimagesize($_FILES["pimage"]["tmp_name"]);
    if($check !== false) {
        echo "File is an image - " . $check["mime"] . ".";
        $uploadOk = 1;
    } else {
        echo "File is not an image.";
        $uploadOk = 0;
    }
}
// Check if file already exists
if (file_exists($snehi_img_dir)) {
    echo "Sorry, file already exists.";
    $uploadOk = 0;
}
// Check file size
if ($_FILES["pimage"]["size"] > 500000) {
    echo "Sorry, your file is too large.";
    $uploadOk = 0;
}
// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
    echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
    $uploadOk = 0;
}
// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
    echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
} else {
    if (move_uploaded_file($_FILES["pimage"]["tmp_name"], $snehi_img_dir)) {
        echo "The file ". basename( $_FILES["pimage"]["name"]). " has been uploaded.";
    } else {
        echo "Sorry, there was an error uploading your file.";
    }
}
?>



  



 

<?php 
 
$account = "select * from users WHERE account_count = '$count'";


$resultsqlaccount = $conn->query($account);

if ($resultsqlaccount->num_rows > 0) {
    while($row = $resultsqlaccount->fetch_assoc()) {
        
  ?>
  <?php echo $row["account_image"];?>
  <img src="../upload/<?php echo $row["account_image"];?>">
  
  <?php       
        
 
    }
} else {
    echo "0 results";
}
?>



<img src="upload/<?php echo $snehi_file_img_name;?>">
















<?php 
$picupdate = "UPDATE `account` SET `account_image`='$snehi_file_img_name' WHERE account_count= '$count'";

if ($conn->query($picupdate) === TRUE) {
    header('Location: ../index.php');
} else {
    echo "Error: <br>" . $conn->error;
}
  
$_SESSION["pimage"]=$snehi_file_img_name;
?> 

 