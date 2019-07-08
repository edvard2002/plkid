<?php
include("conf.php");
    session_start();
    if ( isset( $_SESSION['id'] ) ) {
	require_once"header.php";

?>
<div class="container">
	<main id="main">
	<h1>Создать запись</h1>
		<div id="post_send" class="col-md-12">

				<form method="POST" id="option_form" enctype="multipart/form-data" action="newpost.php">
			<div class="post_form">
				<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
				<script type="text/javascript">
					function call(){
						var msg=$('#option_form').serialize();
						$.ajax({
							type:'POST',
							url:'newpost.php',
							data:msg,success:function(){
								$("#option_form")[0].reset();
							}
							,error:function(xhr,str){
								alert('Возникла ошибка: '+xhr.responseCode);
							}
						});
					}
				</script>
					<label form="post_name">Наименование темы</label><br/>
				<input type="text" name="post_name" class="col-md-12 col-xs-12" style="background: #dedede; border: 1px solid grey;border-radius: 5px;"><br/>
				<div class="upload-btn-wrapper">
				    <button class="btn btn-warning">Загрузка обложки файла</button>
					<input type="file" name="somename" />
				</div>
				<br/>
				<label form="post_text">Описание  публикации (<span id="counter"></span>символов)</label>
				<br/>
				<textarea id="editor2" class="col-md-12 col-xs-12 texttext" name="post_small_text"></textarea>
				<label form="post_text">Содержание публикации</label>
				<br/>
				<textarea id="editor" class="col-md-12 col-xs-12" name="post_text"></textarea>

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
				<br/>
				<div class="upload-btn-wrapper ">
				    <button class="btn btn-primary">Картинка первая
					<input type="file" name="somename1" /></button>
				</div>
				<div class="upload-btn-wrapper">
				    <button class="btn btn-info">Картинка вторая
					<input type="file" name="somename2" /></button>
				</div>
				<div class="upload-btn-wrapper">
				    <button class="btn btn-warning">Картинка третья
					<input type="file" name="somename3" /></button>
				</div>
				<div class="upload-btn-wrapper">
				    <button class="btn btn-success">Картинка четвертая
					<input type="file" name="somename4" /></button>
				</div>
				<div class="upload-btn-wrapper">
				    <button class="btn btn-danger">Картинка пятая
					<input type="file" name="somename5" /></button>
				</div>
				<br/>
				<label form="post_name">Ключевые слова</label><br/>
				<input type="text" name="post_keywords" class="col-md-12" style="background: #dedede; border: 1px solid grey;border-radius: 5px;"><br/>
			</div>
			<div class="post_option">
				<p class="option_post_label">Дата публикации:</p>
					<input type="date" class="post_date" name="post_date" value="<?php echo date('Y-m-d') ?>"><br/><br/>
				<p class="option_post_label">Категория:</p>
				<select name="post_category" class="post_date">
					<option></option>
					<option>Курсы</option>
					<option>Новости</option>
				</select><br/><br/>
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


			<input type="submit" name="btn" class="btn btn-success">
			<div id="results"></div>
			</div>
			</form>
		</div>
	</main>
	</div>
<?php
	require_once"footer.php";
}else{
	header("Location: index.php");
}
?>

