<?php
require_once('db.php');
if(isset($_POST['contactBtn'])){

    $fullname = isset($_POST['name'])? $_POST['name']:'' ;
    $email = isset($_POST['email'])? $_POST['email']:"";
    $phone = isset($_POST['phone'])? $_POST['phone']:'';
    $message = isset($_POST['message'])?$_POST['message']:'';
    $status=1;

    if(getimagesize($_FILES['docs']['tmp_name']) == FALSE){
        $sql = "INSERT INTO `contactus`( `username`,`phone`, `email`, `message`,`status`,`created_by`) VALUES ('$fullname','$phone','$email','$message','$status','$fullname')";
        $result = mysqli_query($conn, $sql);
        if ($result) {
            echo ("<SCRIPT LANGUAGE='JavaScript'>
            window.alert('Thank you for contacting us.. We will get back to you soon..')
            window.location.href='../contactus.php';
            </SCRIPT>");
        } else {
            echo ("<SCRIPT LANGUAGE='JavaScript'>
            window.alert('Server error from not upload file..')
            window.location.href='../contactus.php';
            </SCRIPT>");
        }
    }
    else{
        $doc_images =  $_FILES['docs'];
        $doc_image_name = $doc_images['name'];
        $doc_image_error = $doc_images['error'];
        $doc_image_temp = $doc_images['tmp_name'];
        $doc_image_extension = explode('.',$doc_image_name); //sepatare name and extension
        $doc_image_chk = strtolower(end($doc_image_extension)); // store the extension
        $extensionStored = array('png','jpg','jpeg','doc','docx','pdf');
        if(in_array($doc_image_chk,$extensionStored)){
            $doc_destination_folder = "../assets/ContactMessage/".$doc_image_name;
            move_uploaded_file($doc_image_temp,$doc_destination_folder);
            $sql = "INSERT INTO `contactus`(`username`,`phone`, `email`, `message`,`files`,`status`,`created_by`) VALUES ('$fullname','$phone','$email','$message','$doc_image_name','$status','$fullname')";
            $result = mysqli_query($conn, $sql);
            if ($result) {
                echo ("<SCRIPT LANGUAGE='JavaScript'>
                window.alert('Thank you for contacting us.. We will get back to you soon..')
                window.location.href='../contactus.php';
                </SCRIPT>");
            } else {
                echo ("<SCRIPT LANGUAGE='JavaScript'>
                window.alert('Server error else part..')
                window.location.href='../contactus.php';
                </SCRIPT>");
            }
        }
    }
}

?>