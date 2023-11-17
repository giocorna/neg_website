<?php
   
     require "config.php";

     function dbConnect(){
        $mysqli = new mysqli(SERVER, USERNAME, PASSWORD, DATABASE);

        if($mysqli ->connect_errno != 0){
             
            return FALSE;
        }else{
            return $mysqli;
        }
            
     }

     function getProduct($id){

        $mysqli = dbConnect();

        $stmt = $mysqli ->prepare("SELECT * FROM product WHERE id = ?");

        $stmt->bind_param("s",id);

        $stmt -> execute();

        $result = $result->fetch_all(MYSQLI_ASSOC);

        return $data;
     }


?>