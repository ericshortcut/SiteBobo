<?php

// Check if image file is a actual image or fake image
if( (isset($_POST["submit"]) != 0) && (isset($_POST["nome"]) != 0) && ( isset($_POST["rm"]) != 0) && ( isset($_FILES["tp"]) != 0) ) {
    
    $new_file_name = $_POST["rm"]  ;
    
    
    $path = $_FILES['tp']['name'];
    $ext = pathinfo($path, PATHINFO_EXTENSION);
    
    $ok = move_uploaded_file($_FILES['tp']['tmp_name'], 'uploads/'.$new_file_name . "-lista-1-2." . $ext);
    
    if($ok){
         echo "foi";
    }else{
        session_start();
        $_SESSION["msg"] = array( 'msg' =>"Falha, no arquivo", 'code' => 1);
    }
  
    session_start();
    $_SESSION["msg"] = array( 'msg' =>"Enviado com sucesso", 'code' => 0);
    header("Location: /index.php"); 
}else{
    
    session_start();
    $_SESSION["msg"] = array( 'msg' =>"Falha, verifique os campos", 'code' => 1);
    header("Location: /index.php"); 
}
?>
