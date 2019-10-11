<?php
if(isset($_FILE['image']))
{
    $errors=array();
    $file_name=$_FILE['image']['name'];
    $file_size=$_FILE['image']['size'];
    $file_tmp=$_FILE['image']['tmp_name'];

    if($file_size>2097152)
    {
        $errors[]="file not allowed";
    }

    if(empty($errors)==true)
    {
        move_uploaded_file($file_tmp,"images1."$file_name);
        echo "success";
    }
    else
    {
        print_r($errors);
    }
    header("Location:d.php")
}

?>