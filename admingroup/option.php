<?php
    include("conf.php");
    session_start();
    	require_once"header.php";
    
    	$sql = "SELECT * FROM `uc_tble_about`, `uc_count_people`";
    	$result = mysql_query($sql);
    	while($row = mysql_fetch_array($result)){
    		$site_name1 = $row["title"];
    		$site_desc1 = $row["description"];
    		$site_keywords1 = $row["keywords"];
    		$site_contacts1 = $row["phone1"];
    		$site_email1 = $row["phone2"];
    		$site_instalink1 = $row["instagram"];
    		$site_fblink1 = $row["facebook"];
    		$site_address1 = $row["address"];
    		$count_start = $row["count_start"];
    		$count_end = $row["count_end"];
    	}
    ?>
<main id="main">
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
    <script type="text/javascript">function call(){var msg=$('#formx').serialize();$.ajax({type:'POST',url:'action_ajax_form.php',data:msg,success:function(data){$('#results').html(data);},error:function(xhr,str){alert('Возникла ошибка: '+xhr.responseCode);}});}</script>
    <form  method="POST" id="formx" class="col-md-12 col-sm-12 col-xs-12 col-lg-12 option_form" action="javascript:void(0);" onsubmit="call()">
        <label for="site_name">Наименование сайта</label><br/>
        <input type="text" name="site_name" class="col-md-12 col-sm-12 col-xs-12 col-lg-12" value="<?php echo $site_name1; ?>"><br/>
        <label for="site_desc">Краткое описание сайта</label><br/>
        <textarea name="site_desc" class="col-md-12 col-sm-12 col-xs-12 col-lg-12" style="resize: none;" ><?php echo $site_desc1; ?></textarea><br/>
        <label for="site_keywords">Ключевые слова</label><br/>
        <input type="text" name="site_keywords" class="col-md-12 col-sm-12 col-xs-12 col-lg-12" value="<?php echo $site_keywords1; ?>"><br/>
        <label for="site_contacts">Контакты(телефон 1)</label><br/>
        <input type="text" name="site_contacts" class="col-md-12 col-sm-12 col-xs-12 col-lg-12" value="<?php echo $site_contacts1; ?>"><br/>
        <label for="site_email">Контакты(телефон 2)</label><br/>
        <input type="text" name="site_email" class="col-md-12 col-sm-12 col-xs-12 col-lg-12" value="<?php echo $site_email1; ?>"><br/>
        <label for="site_instalink">Ссылка в Instagram</label><br/>
        <input type="text" name="site_instalink" class="col-md-12 col-sm-12 col-xs-12 col-lg-12" value="<?php echo $site_instalink1; ?>"><br/>
        <label for="site_fblink">Ссылка в Facebook</label><br/>
        <input type="text" name="site_fblink" class="col-md-12 col-sm-12 col-xs-12 col-lg-12" value="<?php echo $site_fblink1; ?>"><br/>
        <label for="site_address">Адрес</label><br/>
        <input type="text" name="site_address" class="col-md-12 col-sm-12 col-xs-12 col-lg-12" value="<?php echo $site_address1; ?>"><br/>
        <label for="count_end">Количество обучились</label><br/>
        <input type="text" name="count_end" class="col-md-12 col-sm-12 col-xs-12 col-lg-12" value="<?php echo $count_end; ?>"><br/>
        <label for="count_start">Количество учащихся</label><br/>
        <input type="text" name="count_start" class="col-md-12 col-sm-12 col-xs-12 col-lg-12" value="<?php echo $count_start; ?>"><br><br/>
        <input type="submit" name="option_btn" class="btn btn-info">
    </form>
</main>
<?php
    require_once"footer.php";
    ?>