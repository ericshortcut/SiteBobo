<?php
    session_start();
    $msg = "";
    if(isset($_SESSION['msg']))
    {
        $s = $_SESSION['msg'];
        if( $s['code'] == 0){
            $msg = "<p class='msg ok'>".$s['msg']."</p>";    
        }else{
            $msg = "<p class='msg erro'>".$s['msg']."</p>";    
        }
        
    }
    
    session_destroy();
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Envio de arquivos</title>
        <meta charset="UTF-8">
        <link rel="stylesheet" type="text/css" href="theme/theme.css">
        <script type="text/javascript" src="/js/main.js"></script>
    </head>
<body>
    <div class="container">
        <?php 
            include_once "nav.php";
        ?>
        <form action="upload.php" method="post" enctype="multipart/form-data">
            <h1>Envie do exercício - PCI</h1>
            <p>
                <label for="nome">RM (Somente o número):</label>
                <input placeholder="Ex: 00123 ou 123" type="text" name="rm" id="rm"/>
            </p>
            <p>
                <label for="nome">Nome:</label>
                <input placeholder="João da Silva" type="text" name="nome" id="nome"/>
            </p>
            <p>    
                <span>Selecionar Arquivo</span>
                <input type="file" class="upload" name="tp"  />
            </p>
            <input type="submit" value="Enviar" name="submit" class="btn btn-push"/>
        </form>
        <?php
            echo $msg;
        ?>
        <p>
            Coloquem os dois projetos em uma pasta, zipem e mantem através do
            formulário acima <b>个</b>
        </p>
    </div>
</body>
</html>