<?php
  include("conf.php");
  session_start();
    if ( isset( $_SESSION['id'] ) ) {

  $uploadfile = "../uploads/".$_FILES['somename']['name'];
  move_uploaded_file($_FILES['somename']['tmp_name'], $uploadfile);

  echo $courses_name = $_POST["courses_name"];
  echo $somename = $_FILES['somename']['name'];
  echo $courses_text = $_POST["courses_text"];
  echo $courses_keywords = $_POST["courses_keywords"];
  echo $courses_date = $_POST["courses_date"];
  echo $courses_free = $_POST["courses_free"];

  $sql = "INSERT INTO
  `courses_tbl`(
      `courses_name`,
      `somename`,
      `courses_keywords`,
      `courses_text`,
      `courses_date`,
      `courses_free`
  ) 
  VALUES (
      '".$courses_name."', 
      '".$somename."', 
      '".$courses_keywords."', 
      '".$courses_text."', 
      '".$courses_date."', 
      '".$courses_free."'
  )";
  $result = mysql_query($sql);
?>
<script>
  window.location.href = 'courseslist.php';
</script>
<?php }else{
  header("Location: index.php");
}
?>