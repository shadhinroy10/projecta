<?php
include_once 'dv.php';

//add new class/semester
if(isset($_POST['add'])){

    $name=$_POST['name'];

    if ($name==null){
        $error = "please insert class";
        header("Location:../class.php?name_error=". $error);
    }else{


        //check
        $check_sql="SELECT * FROM semester WHERE `name`='$name'";

        //add
        $sql =" INSERT INTO semester (`name`) VALUES ('$name')";

        $query = $conn->query($sql);

        if ($query==true){
            header("Location:../class.php?success=Data inserted correctly");
        }else{
            header("Location:../class.php?error=Data inserted failed");
        }


    }
}




//update class/semester by id

if (isset($_POST['update'])){
    $id= $_POST['id'];
    $name=$_POST['name'];

    if ($name==null){
        $error = "please insert class";
        header("Location:../class-edit.php?id=".$id."&&name_error=". $error);
    }else{
        $sql = "UPDATE semester SET `name`='$name' WHERE id=$id";
        $query =$conn->query($sql);
        if ($query==true){
            header("Location:../class.php?success=Data uodated correctly");
        }else{
            header("Location:../class-edit.php?id=".$id."&&error=Data inserted failed");
        }
    }
}






?>
