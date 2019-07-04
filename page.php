<?php 
    require_once"inc/header.php";
    ?>
<div class="container">
    <div class="row">
        <main>
            <?php
                $menu_id2 = $_GET["menu_id"];
                
                $sql2 = "SELECT * FROM uc_menu WHERE id =". $menu_id2;
                $result2 = mysql_query($sql2);
                while($res2 = mysql_fetch_array($result2)){
                	$name_page = $res2["menu_name"];
                	$page_text = $res2["menu_text"];
                }
                ?>
            <div class="col-md-12">
                <h1 class="text-left" style="font-size: 40px"><?php echo $name_page; ?></h1>
                <hr style="height: 5px;">
                <div class="page_text">
                    <?php echo $page_text; ?>
                </div>
            </div>
        </main>
    </div>
</div>
<?php
    require_once"inc/footer.php";
    ?>