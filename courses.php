<?php
    require_once"inc/header.php";
    	include("inc/conf.php");
    ?>
<content class="main">
    <div class="container">
        <div class="row">
            <h1 class="title col-md-12 col-xs-12 text-center" data-aos="zoom-in-down">Курсы</h1>
            <?php
                $sql2 = "SELECT * FROM `courses_tbl`";
                $result2 = mysql_query($sql2);
                while($res2 = mysql_fetch_array($result2)){
                	$courses_name = $res2["courses_name"];
                	$courses_free = $res2["courses_free"];
                	$courses_text = $res2["courses_text"];
                	$somename = $res2["somename"];
                	?>
            <div class="col-md-6 col-sm-12 col-xs-12" data-aos="zoom-in-up">
                <div class="grid">
                    <figure class="effect-romeo">
                        <img src="uploads/<?php echo $somename;?>" alt="<?php echo $courses_name; ?>"/>
                        <figcaption>
                            <div>
                                <?php
                                    if($courses_free == 1){
                                    	?>
                                <h2 style='line-height: 100px; color:rgba(255, 237, 0);'>Курс бесплатный</h2>
                                <?php
                                    }else{
                                    
                                    }
                                    ?>
                                <h2><?php echo $courses_name?></h2>
                                <p><?php echo $courses_text;?></p>
                            </div>
                        </figcaption>
                    </figure>
                </div>
            </div>
            <?php } ?>
        </div>
    </div>
</content>
<?php
    require_once"inc/footer.php";
    ?>