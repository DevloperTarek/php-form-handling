<?php
        if(isset($_FILES['file'])){
            $file = $_FILES['file'];
            //File Related Data
            $filename = $file['name'];
            $temp_path = $file['tmp_name'];
            $size = $file['size'];
            $error = $file['error'];

            $upload_folder = "upload/";
            $destination = $upload_folder . basename($filename);

            //File move to Server
            if($error === 0){
                if(move_uploaded_file($temp_path,$destination)){
                    echo "File Uploaded successfully";
                }else{
                    echo "File Uploading Have a Serious Issue for not Uploading";
                }
            }else{
                echo "File Uploading Have an Error Throw";
            }
        }else{
            echo "Not selected any type of file";
        }
?>