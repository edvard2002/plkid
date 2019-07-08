<?php
    session_start();
    if ( isset( $_SESSION['id'] ) ) {
        // Grab user data from the database using the user_id
        // Let them access the "logged in only" pages
    include("header.php");
    ?>
<div class="container">
    <div class="row">
        <main id="main">
            <form method="POST" id="option_form" enctype="multipart/form-data" action="coursessend.php">
                <div class="post_form col-md-12 col-xs-12" >
                    <label form="post_name">Наименование курса</label><br/>
                    <input type="text" name="courses_name" class="col-md-12 col-xs-12" style="background: #dedede; border: 1px solid grey;border-radius: 5px;"><br/>
                    <div class="upload-btn-wrapper">
                        <button class="btn btn-info">Загрузка миниатюры</button>
                        <input type="file" name="somename" />
                    </div>
                    <br/>
                    <label form="post_text">Описание курса</label><br/>
                    <textarea id="editor2" name="courses_text" class=" col-md-12 col-xs-12"></textarea>
                    <br/>
                    <label form="post_name">Ключевые слова</label><br/>
                    <input type="text" name="courses_keywords" style="background: #dedede; border: 1px solid grey;border-radius: 5px;" class="col-md-12 col-xs-12"><br/>
                </div>
                <div class="post_option col-md-12 col-xs-12">
                    <p class="option_post_label col-md-12 col-xs-12">Дата публикации:</p>
                    <input type="date" class="post_date" name="courses_date" value ="<?php echo date('Y-m-d') ?>" ><br/><br/>
                    <p class="option_post_label col-md-12 col-xs-12">Настройка курса:</p>
                    <label class="conteiner">
                    бесплатно
                    <input type="checkbox" name="courses_free" value="1">
                    <span class="checkmark" style="top:auto;"></span>
                    </label>
                    <br/>
                    <input type="submit" name="courses_creat_btn" class="btn btn-info">
                </div>
            </form>
        </main>
    </div>
</div>
<?php
    include("footer.php");
    } else {
        // Redirect them to the login page
        header("Location: index.php");
    }
    ?>