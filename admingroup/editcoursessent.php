<?php
  include("conf.php");
  session_start();
  $post_up = $_GET["coursessend"];
  $uploadfile = "../uploads/".$_FILES['somename']['name'];
  move_uploaded_file($_FILES['somename']['tmp_name'], $uploadfile);

  $courses_name = $_POST["courses_name"];
  $somename = $_FILES['somename']['name'];
  $courses_text = $_POST["courses_text"];
  $courses_keywords = $_POST["courses_keywords"];
  $courses_date = $_POST["courses_date"];
  $courses_free = $_POST["courses_free"];

  if(!empty($_FILES['somename']['tmp_name'])){
    
      $sql = "UPDATE `courses_tbl` 
              SET 
              `courses_name`='".$courses_name."',
              `somename`='".$somename."',
              `courses_keywords`= '".$courses_keywords."',
              `courses_text`='".$courses_text."',
              `courses_date`='".$courses_date."',
              `courses_free`='".$courses_free."' 
              WHERE `id` =".$post_up;
      $result = mysql_query($sql);

  }elseif(empty($_FILES['somename']['tmp_name'])){

      $sql = "UPDATE `courses_tbl` 
              SET 
              `courses_name`='".$courses_name."',
              `courses_keywords`= '".$courses_keywords."',
              `courses_text`='".$courses_text."',
              `courses_date`='".$courses_date."',
              `courses_free`='".$courses_free."' 
              WHERE `id` =".$post_up;
      $result = mysql_query($sql);   
  }
?>
<script>
window.location.href = 'courseslist.php';
</script>
