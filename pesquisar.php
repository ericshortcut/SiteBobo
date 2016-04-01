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
        <form method="POST" action="/pesquisar.php">
            <h1>Pesquise seu RA através do formulário abaixo <span class="smile">;)</span></h1>
            <p>
                <label for="ra">RA:</label>
                <input placeholder="Ex: 00123 ou 123" type="text" name="ra" id="ra"/>
            </p>
            <input type="submit" value="Pesquisar" class="btn btn-push"/>
        </form>
    <?php
        
    
        $xs = scandir("uploads");
        $xss = array();
        foreach( $xs as $fileName){
            $fileName = preg_replace("/0+/","",$fileName);
            $xss[ explode( "-", $fileName)[0] ] = $fileName;
        }

        if(isset($_POST['ra'])){
            $key = preg_replace("/0+/","",$_POST['ra']);
            if( isset( $xss[ $key ] ) ){
                echo "<p class='msg ok'>recebido</p>";
            }else{
                echo "<p class='msg erro'>Não recebido</p>";
            }
        }else{
            echo "<p class='msg warning'>Favor, preencher o campo!</p>";
        }
    
    ?>
    </div>
</body>
</html>
