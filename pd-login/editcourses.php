<?php
    include("conf.php");
    session_start();
    include("header.php");
    $post_id = $_GET["post_id"];
    $sql = "Select * from courses_tbl where id =".$post_id;
    $result = mysql_query($sql);
    while($res = mysql_fetch_array($result)){
        $post_name = $res["courses_name"];
        $somename = $res["somename"];
        $courses_keywords = $res["courses_keywords"];
        $courses_text = $res["courses_text"];
        $courses_date = $res["courses_date"];
    }
?>
<div class="container">
    <div class="row">
        <main id="main">
            <form method="POST" id="option_form" enctype="multipart/form-data" action="editcoursessent.php?coursessend=<?php echo $post_id;?>">
                <div class="col-md-12">
                    <label form="post_name">Наименование курса</label><br/>
                    <input type="text" name="courses_name" class="col-md-12 col-xs-12" style="background: #dedede; border: 1px solid grey;border-radius: 5px;" value="<?php echo $post_name; ?>"><br/>
                    <label form="post_text">Описание курса</label><br/>
                    <textarea id="editor2" name="courses_text" class="col-md-12 col-xs-12"><?php echo $courses_text;?></textarea>
                    <br/>
                    <label form="post_name">Ключевые слова</label><br/>
                    <input type="text" name="courses_keywords" class="col-md-12 col-xs-12" style="background: #dedede; border: 1px solid grey;border-radius: 5px;" value="<?php echo $courses_keywords;?>"><br/>
                </div>
                <div class="post_option col-md-12 col-xs-12">
                    <p class="option_post_label">Дата публикации:</p>
                    <input type="date" class="post_date" name="courses_date" value="<?php echo $courses_date; ?>"><br/><br/>
                    <p class="option_post_label">Настройка курса: обязательно</p>
                    <label class="conteiner">бесплатно
                    <input type="checkbox" name="courses_free" value="1">
                    <span class="checkmark"></span>
                    </label>
                    <label class="conteiner">платно
                    <input type="checkbox" name="courses_free" value="0">
                    <span class="checkmark"></span>
                    </label>
                    <br/>
                    <img src="../uploads/<?php echo $somename;?>" style="width:180px;"><br/><br/>
                    <div class="upload-btn-wrapper">
                        <button class="btn btn-info">Загрузка миниатюры обязательно</button>
                        <input type="file" name="somename"/>
                    </div>
                    <br/><br/><br/>
                    <input type="submit" name="courses_creat_btn" class="btn btn-warning">
                </div>
            </form>
        </main>
    </div>
</div>
<?php
    include("footer.php");
    ?>