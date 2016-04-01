<?php
    $url = $_SERVER['REQUEST_URI'];    
    $pages = array( "/"              => array("","Principal"),
                    "/pesquisar.php" => array("","Pesquisar"));
    $pages[$url][0] = "active";
?>
<nav class="nav">
    <ul class="nav-list">
        <?php
            foreach ( $pages as $k => $page) {
               echo "<li><a href='$k' class='nav-item $page[0]' > $page[1] </a></li>";
            }
        ?>
    </ul>
</nav>