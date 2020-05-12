<?php
$statusMsg = '';

//file upload path
$targetDir = "uploads/";
$fileName = basename($_FILES["file"]["name"]);
$targetFilePath = $targetDir . $fileName;
$fileType = pathinfo($targetFilePath,PATHINFO_EXTENSION);

if(isset($_POST["submit"]) && !empty($_FILES["file"]["name"])) {
    //allow certain file formats
    $allowTypes = array('jpg','png','jpeg','gif','pdf');
    if(in_array($fileType, $allowTypes)){
        //upload file to server
        if(move_uploaded_file($_FILES["file"]["tmp_name"], $targetFilePath)){
            $statusMsg = "The file ".$fileName. " has been uploaded.";
            if ($handle = opendir('uploads/')) {

                while (false !== ($entry = readdir($handle))) {
            
                    if ($entry != "." && $entry != "..") {
            
                        echo "$entry\n";
                    }
                }
            
                closedir($handle);
            }
             header("Location: file-upload.php?uploadsuccess");
        }else{
            $statusMsg = "Sorry, there was an error uploading your file.";
        }
    }else{
        $statusMsg = 'Sorry, only JPG, JPEG, PNG, GIF, & PDF files are allowed to upload.';
    }
}else{
    $statusMsg = 'Please select a file to upload.';
}

//display status message
echo $statusMsg;
?>








<!-- 
// if (isset($_POST['submit'])){
//     $file = $_FILES['file'];
//     print_r($file);


//     $fileName = $_FILES['file']['name'];
//     $fileTmpName = $_FILES['file']['tmp_name']; 
//     $fileSize = $_FILES['file']['size']; 
//     $fileError = $_FILES['file']['error']; 
//     $fileName = $_FILES['file']['type'];


//     $fileExt = explode('.', $fileName);
//     $fileActualExt = strtolower(end($fileExt));
    

//     $allowed = array('application/pdf');


//     if (in_array($fileActualExt, $allowed)){
//         if ($fileError == 0){
//             if ($fileSize < 50000000){
//                 $fileNameNew = uniqid('', true) . "." . $fileActualExt;
//                 $fileDestination = 'uploads/'. $fileNameNew;
//                 echo $fileDestination;

//                 move_uploaded_file($fileTmpName, $fileDestination);
//                 // header("Location: file-upload.php?uploadsuccess");
//             }else{
//                 echo "Your file is too big !!! ";
//             }

//         }else{
//             echo "There was an error uploading your file! ";

//         }

//     }else{
//         echo "You Cannot upload files of this type! ";
//     }


// } -->



<!-- ?> -->