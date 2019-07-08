<?php
    include("conf.php");
    session_start();
    	require_once"header.php";
    
      $post_id = $_GET["pages_id"];
      $sql = "Select * from uc_table_post where id =".$post_id;
      $result = mysql_query($sql);
      while($res = mysql_fetch_array($result)){
          $post_title = $res["post_title"];
          $post_desc = $res["post_desc"];
          $post_img = $res["post_img"];
          $post_text = $res["post_text"];
          $post_img1 = $res["post_img1"];
          $post_img2 = $res["post_img2"];
          $post_img3 = $res["post_img3"];
          $post_img4 = $res["post_img4"];
          $post_img5 = $res["post_img5"];
          $post_category = $res["post_category"];
          $post_keywords = $res["post_keywords"];
          $post_date = $res["post_date"];
      }
    
    
    ?>
<div class="container">
    <div class="row">
        <main id="main">
            <h1>Редактировать запись</h1>
            <div id="post_send">
                <form method="POST" id="option_form" enctype="multipart/form-data" action="updatepost.php?post_id=<?php echo $post_id; ?>">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
                        <script type="text/javascript">function call(){var msg=$('#option_form').serialize();$.ajax({type:'POST',url:'newpost.php',data:msg,success:function(){},error:function(xhr,str){alert('Возникла ошибка: '+xhr.responseCode);}});}</script>
                        <label form="post_name">Наименование темы</label><br/>
                        <input type="text" name="post_name" class="col-md-12 col-sm-12 col-xs-12" style="background: #dedede; border: 1px solid grey;border-radius: 5px; margin-bottom: 10px;" value="<?php echo $post_title; ?>"><br/>
                        <img src="uploads/<?php echo $post_img;?>" style="width: 100px;">
                        <div class="upload-btn-wrapper">
                            <button class="btn btn-danger">Загрузка обложки файла обязательно</button>
                            <input type="file" name="somename">
                        </div>
                        <br/>
                        <div form="post_text">Описание  публикации <span id="counter"></span></div><br/>
                        <textarea id="editor2" class="col-md-12 col-sm-12 col-xs-12" name="post_small_text"><?php echo $post_desc;?></textarea>

                        <label form="post_text">Содержание публикации</label><br/>
                        <textarea id="editor" class="col-md-12 col-sm-12 col-xs-12" name="post_text"><?php echo $post_text;?></textarea>
                        <script src="https://cdn.ckeditor.com/ckeditor5/11.2.0/classic/ckeditor.js"></script>
                        <script src="./ckfinder/ckfinder.js"></script>
                        <script type="text/javascript">
                            ClassicEditor
                             .create( document.querySelector( '#editor' ), {
                            	 ckfinder: {
                            		 uploadUrl: '/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files&responseType=json'
                            	 },
                            	 toolbar: [  'heading', '|', 'bold', 'italic', '|', 'undo', 'redo' ]
                             } )
                             .catch( function( error ) {
                            	 console.error( error );
                             } );                        
                        </script>
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
                        <br/>
                        <div class="upload-btn-wrapper" style="border: 1px solid #292929; border-radius: 8px;">
                            <img src="../uploads/<?php echo $post_img1?>" style="width: 100px; margin-left:25%;"><br/>
                            <button class="btn btn-warning">Картинка первая</button>
                            <input type="file" name="somename1" />
                        </div>
                        <div class="upload-btn-wrapper" style="border: 1px solid #292929; border-radius: 4px;">
                            <img src="../uploads/<?php echo $post_img2; ?>" style="width: 100px; margin-left:25%;"><br/>
                            <button class="btn btn-success">Картинка вторая</button>
                            <input type="file" name="somename2" />
                        </div>
                        <div class="upload-btn-wrapper" style="border: 1px solid #292929; border-radius: 4px;">
                            <img src="../uploads/<?php echo $post_img3; ?>" style="width: 100px; margin-left:25%;"><br/>
                            <button class="btn btn-info">Картинка третья</button>
                            <input type="file" name="somename3" />
                        </div>
                        <div class="upload-btn-wrapper" style="border: 1px solid #292929; border-radius: 4px;">
                            <img src="../uploads/<?php echo $post_img4; ?>" style="width: 100px; margin-left:25%;"><br/>
                            <button class="btn btn-danger">Картинка четвертая</button>
                            <input type="file" name="somename4" />
                        </div>
                        <div class="upload-btn-wrapper" style="border: 1px solid #292929; border-radius: 4px;">
                            <img src="../uploads/<?php echo $post_img5; ?>" style="width: 100px; margin-left:25%;"><br/>
                            <button class="btn btn-primary">Картинка пятая</button>
                            <input type="file" name="somename5" />
                        </div>
                        <br/>
                        <label form="post_name">Ключевые слова</label><br/>
                        <input type="text" name="post_keywords" style="background: #dedede; border: 1px solid grey;border-radius: 5px; margin-bottom: 10px;" class="col-xs-12 col-sm-12 col-md-12" value="<?php echo $post_keywords; ?>"><br/>
                    </div>
                    <div class="post_option col-md-12 col-xs-12">
                        <p class="option_post_label">Дата публикации:</p>
                        <input type="date" class="post_date" name="post_date" value="<?php echo $post_date; ?>"><br/><br/>
                        <p class="option_post_label">Категория:</p>
                        <select name="post_category" class="post_date" value="<?php echo $post_category; ?>">
                            <option>Курсы</option>
                            <option>Новости</option>
                        </select>
                        <br/><br/>
                        <p class="option_post_label">Параментры публикации:</p>
                        <label class="conteiner">Набор открыт
                        <input type="checkbox" name="post_slider" value="open">
                        <span class="checkmark"></span>
                        </label>
                        <label class="conteiner">Набор закрыт
                        <input type="checkbox" name="post_slider" value="close">
                        <span class="checkmark"></span>
                        </label>
                        <label class="conteiner">Новость
                        <input type="checkbox" name="post_slider" value="none">
                        <span class="checkmark"></span>
                        </label>
                        <br/>
                        <div id="results"></div>
                        <input type="submit" name="btn" class="btn btn-success">
                    </div>
                </form>
            </div>
        </main>
    </div>
</div>
<?php
    require_once"footer.php";
    ?>