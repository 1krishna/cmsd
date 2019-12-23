<?php
session_start();
    include 'includes/connect.php';
    if(isset($_POST['add_pub'])){
        echo $_POST['pub_title'];
        $pub_title= urlencode(addslashes($_POST['pub_title']));     
        $pub_year= $_POST['pub_year'];
        $q= "INSERT INTO `cmsd_publications`( `pub_title`, `pub_year`) VALUES ('$pub_title','$pub_year')";
        $q = mysqli_query($conn,$q);	
        
        if($q){
            echo 'Publication Added Successfully';
        }		
        else{
            echo 'Publication Addition failed';
        }
    }
    if(isset($_POST['upd_pub'])){
        $pub_title= urlencode(addslashes($_POST['pub_title'])) ;
        $pub_year= $_POST['pub_year'];
        $pub_id = $_POST['pub_id'];

        $q= "UPDATE `cmsd_publications` SET `pub_title`='$pub_title',`pub_year`='$pub_year' WHERE `pub_id`=".$pub_id;
    //    echo $q;
        $q = mysqli_query($conn,$q);	
        
        if($q){
            echo 'Publication Updated Successfully';
        }		
        else{
            echo 'Publication Updated failed';
        }
    }
    if(isset($_POST['del_pub'])){
        $pub_id = addslashes($_POST['pub_id']);
        $del_pub = "DELETE FROM `cmsd_publications` WHERE pub_id=$pub_id";
       
        $del_pub = mysqli_query($conn,$del_pub);
      
        if($del_pub){
            echo "Publication Deleted Successfully";
        } else{
            echo "Publication Deletion Failed";
        }
    }

?>