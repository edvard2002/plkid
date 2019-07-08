<?php	
include("conf.php");
session_start();
	require_once"header.php";
		
?>
<div class="container">
	<div class="row">	
		<main id="main">
			<h1>Создать страницу</h1>
			<div class="creat_pages_block col-md-12">
				<form action="createpages.php" id="creat_page" method="post">
					<label for="page_name_ru">Наименование страницы на русском</label></br>
					<input type="text" class="col-md-12" name="page_name_ru" style="background: #dedede; border: 1px solid grey;border-radius: 5px;" id="page_name_ru"></br>
					<label for="page_name_en">Наименование страницы на английском(через дефис)</label></br>
					<input type="text" class="col-md-12" name="page_name_en" style="background: #dedede; border: 1px solid grey;border-radius: 5px;" id="page_name_en"></br>
					<label for="page_text">Содержимое страницы</label></br>
					<textarea name="page_text" id="editor2" class="col-md-12"></textarea></br>
					<label for="page_keywords">Ключевые слова страницы</label></br>
					<input type="text" class="col-md-12" name="page_keywords" style="background: #dedede; border: 1px solid grey;border-radius: 5px;" id="page_keywords"></br>
					<input type="submit" class="btn btn-info" style="margin-top: 15px; " name="page_create_btn" id="page_create_btn"></br>
				</form>
			</div>
		</main>
	</div>
</div>
<?php
	require_once"footer.php";
?>