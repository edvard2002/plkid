<?php
    include("conf.php");
    session_start();
    	require_once"header.php";
    	$post_id = $_GET["pages_id"];
      $sql = "Select * from uc_menu where id =".$post_id;
      $result = mysql_query($sql);
      while($res = mysql_fetch_array($result)){
    		$mwnu_name = $res["menu_name"];
    		$mwnu_name_en = $res["menu_name_en"];
    		$mwnu_text = $res["menu_text"];
    		$mwnu_keywords = $res["menu_keywords"];
      }
    ?>
<div class="container">
    <div class="row">
        <main id="main">
            <h1>Создать страницу</h1>
            <div class="creat_pages_block">
                <form action="updatepages.php?post_id=<?php echo $post_id?>" id="creat_page" method="post">
                    <label for="page_name_ru">Наименование страницы на русском</label></br>
                    <input type="text" class="col-md-12 col-xs-12" style="background: #dedede; border: 1px solid grey;border-radius: 5px; margin-bottom: 10px;" name="page_name_ru" id="page_name_ru" value="<?php echo $mwnu_name; ?>"></br>
                    <label for="page_name_en">Наименование страницы на английском(через дефис)</label></br>
                    <input type="text" class="col-md-12 col-xs-12" style="background: #dedede; border: 1px solid grey;border-radius: 5px; margin-bottom: 10px;" name="page_name_en" id="page_name_en" value="<?php echo $mwnu_name_en; ?>"></br>
                    <label for="page_text">Содержимое страницы</label></br>
                    <textarea name="page_text" id="editor2" class="col-md-12 col-xs-12"><?php echo $mwnu_text; ?></textarea>
                    <script src="https://cdn.ckeditor.com/ckeditor5/11.2.0/classic/ckeditor.js"></script>
                    <script src="./ckfinder/ckfinder.js"></script>
                    <script type="text/javascript">
                        ClassicEditor
                         .create( document.querySelector( '#editor2' ), {
                        	 ckfinder: {
                        		 uploadUrl: '/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files&responseType=json'
                        	 },
                        	 toolbar: [  'heading', '|', 'bold', 'italic', '|', 'undo', 'redo' ]
                         } )
                         .catch( function( error ) {
                        	 console.error( error );
                         } );                        
                    </script>
                    </br>
                    <label for="page_keywords" style="margin-top: 10px;">Ключевые слова страницы</label></br>
                    <input type="text" class="col-md-12 col-xs-12" style="background: #dedede; border: 1px solid grey;border-radius: 5px; margin-bottom: 10px;" name="page_keywords" id="page_keywords" value="<?php echo $mwnu_keywords; ?>"></br>
                    <input type="submit" class="btn btn-danger" name="page_create_btn" id="page_create_btn"></br>
                </form>
            </div>
        </main>
    </div>
</div>
<?php
    require_once"footer.php";
    ?>