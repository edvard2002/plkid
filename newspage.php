<?php require_once"inc/header.php";?>

<script src="http://code.jquery.com/jquery.min.js"></script>
<script>
    $(window).load(function(){
     var sum=0;
     $('.banner-container li img').each(function(){ 
       sum += $(this).width();
     });
     $('.banner-container ul').width(sum);
    });
    
    $(function(){
     var winWidth = $(".banner-container").width();
     var ulWidthCount = 0;
     ulWidthCount = $('.banner-container li').size();
     $(".banner-container li").width(winWidth/ulWidthCount);
     $(".banner-container li").hover(function(){     
       ulWidthCount = $('.banner-container li').size();
       var imgWidth = $(this).find("img").width();
       var bannerLi = winWidth - imgWidth;
       var remWidth = ulWidthCount - 1;
       var appWidth = bannerLi/remWidth;
       $(".banner-container li").stop(true, false).animate({width: appWidth},700);
       $(this).stop(true, false).animate({width: imgWidth},700);
       $(this).find("span.overlay").stop(true, false).fadeOut();
     }, function(){
       $(this).animate({width: winWidth/ulWidthCount},700);
       $(".banner-container li").animate({width:winWidth/ulWidthCount},700);
       $(this).find("span.overlay").fadeIn();
     }); 
    });
</script>
<content class="main col-md-12" style="margin-top: 4%; ">
    <div class="news_all_block">
        <?php
            $id_news = $_GET["news_id"];
            $sql = "SELECT * FROM uc_table_post WHERE id =".$id_news;
            $result = mysql_query($sql);
            while($row = mysql_fetch_array($result)){
            	$news_title = $row["post_title" ];
            	$news_desc = $row["post_desc" ];
            	$news_img = $row["post_img" ];
            	$news_text = $row["post_text" ];
            	$news_img1 = $row["post_img1" ];
            	$news_img2 = $row["post_img2" ];
            	$news_img3 = $row["post_img3" ];
            	$news_img4 = $row["post_img4" ];
            	$news_img5 = $row["post_img5" ];
            	$news_category = $row["post_category" ];
            	$news_keywords = $row["post_keywords" ];
            	$news_date = $row["post_date" ];
            	$news_status = $row["status" ];
            }
            ?>
        <div class="row" style="margin:0 auto;">
            <div class="news_information" style="top: 50px;">
                <div class="col-md-6 col-xs-12">
                    <a href="#">
                    <img class="img-rounded mb-3 mb-md-0" style="max-width:100%;max-height: auto;" src="uploads/<?php echo $news_img ?>" alt="">
                    </a>
                </div>
                <div class="col-md-6">
                    <h3><?php echo $news_title;?></h3>
                    <hr style="height: 12px;width: ">
                    <p><?php echo $news_text;?></p>
                </div>
                <p class="col-md-12 text-center _string" style="font-size: 18px; font-style: italic; margin-top: 0; color: #868e96;">
                    <span class="col-md-6 col-xs-6">
                    <strong>Рубрика:</strong> 
                    <?php echo $news_category;?>
                    </span>
                    <span class="col-md-6 col-xs-6">
                    <strong>Дата публикации:</strong> 
                    <?php echo $news_date;?>
                    </span>
                </p>
                <?php 
                    if($news_status == "none"){
                    
                    ?>
                <div>
                </div>
                <?php
                    }elseif($news_status == "open"){
                    ?>
                <div><span class="col-md-8 col-md-offset-2 col-xs-12 btn btn-info">НАБОР ОТКРЫТ</span>
                </div>
                <?php 
                    }else{
                    ?>
                <div><span class="col-md-8 col-md-offset-2 col-xs-12 btn btn-info">НАБОР ЗАКРЫТ</span>
                </div>
                <?php
                    }
                    ?>
            </div>
        </div>
        <?php if ($news_img2 != NULL){
            ?>
        <div class="container">
            <div class="row">
                <div class="banner-container">
                    <ul class="ul-width" style="width: 100%;">
                        <?php if(!empty($news_img1)){
                            ?>
                        <li>
                            <a href="uploads/<?php echo $news_img1;?>" title="<?php echo $news_title;?>">
                            <img src="uploads/<?php echo $news_img1;?>" alt="<?php echo $news_title;?>"/>
                            </a>
                            <span class="overlay"></span>
                        </li>
                        <?php } ?>
                        <?php
                            if(!empty($news_img2)){
                            ?>
                        <li>
                            <a href="uploads/<?php echo $news_img2;?>" title="<?php echo $news_title;?>">
                            <img src="uploads/<?php echo $news_img2;?>" alt="<?php echo $news_title;?>"/>
                            </a>
                            <span class="overlay"></span>
                        </li>
                        <?php } ?>
                        <?php
                            if(!empty($news_img3)){
                            ?>
                        <li>
                            <a href="uploads/<?php echo $news_img3;?>" title="<?php echo $news_title;?>">
                            <img src="uploads/<?php echo $news_img3;?>" alt="<?php echo $news_title;?>"/>
                            </a>
                            <span class="overlay"></span>
                        </li>
                        <?php } ?>
                        <?php
                            if(!empty($news_img4)){
                            ?>
                        <li>
                            <a href="uploads/<?php echo $news_img4;?>" title="<?php echo $news_title;?>">
                            <img src="uploads/<?php echo $news_img4;?>" alt="<?php echo $news_title;?>"/>
                            </a>
                            <span class="overlay"></span>
                        </li>
                        <?php } ?>
                        <?php
                            if(!empty($news_img5)){
                            ?>
                        <li>
                            <a href="uploads/<?php echo $news_img5;?>" title="<?php echo $news_title;?>">
                            <img src="uploads/<?php echo $news_img5;?>" alt="<?php echo $news_title;?>"/>
                            </a>
                            <span class="overlay"></span>
                        </li>
                        <?php
                            }
                            ?>
                    </ul>
                    <div class="clear"></div>
                </div>
            </div>
        </div>
        <?php } ?>
    </div>
</content>
<?php
    require_once"inc/footer.php";
    ?>