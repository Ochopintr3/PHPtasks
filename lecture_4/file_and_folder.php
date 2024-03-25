<?php
    $dir_err = "";
    $file_err = "";

    if( isset($_POST['dir_name'])){
        $url = "drive/".$_POST['dir_name'];

        if(!empty($_POST['dir_name']) && !is_dir($url)){
            mkdir($url);
        }else{
            $dir_err = "Directory Name is Empty or Exist!!!";
        }  
    }

    if( isset($_POST['file_name'])){
        $url = "drive/".$_POST['file_name'].".txt";

        if(!empty($_POST['file_name']) && !is_file($url)){
            fopen($url, 'w');
        }else{
            $file_err = "File Name is Empty or Exist!!!";
        }  
    }
?>