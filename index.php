<?php include_once 'inc/header.php';?>

<main class="col-md-12">
    <div class="container">
        <div class="row">
            <div class="info_block">
                <h2 style="text-align: center;line-height: 60px;">ХОЧЕШЬ ДОПОЛНИТЕЛЬНУЮ ПРОФЕССИЮ?<br>ТОГДА...</h2>
                <div class="container">
                    <div class="row">
                        <div class="col-md-3 col-sm-6" data-aos="fade-up">
                            <div class="serviceBox">
                                <div class="service-icon">
                                    <i class="fa fa-edit"></i>
                                </div>
                                <div class="service-content">
                                    <h3 class="title" data-aos="fade-zoom-in" data-aos-easing="ease-in-back" data-aos-delay="300" data-aos-offset="0">КОНСУЛЬТАЦИЯ</h3>
                                    <p class="description" data-aos="zoom-in-up">
                                        Не знаешь что выбрать или не можешь решиться? В таком случае, обратись в учебный центр.<br> Тебя проконсультируют и помогут в твоем выборе.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6" data-aos="fade-up">
                            <div class="serviceBox">
                                <div class="service-icon">
                                    <i class="fa fa-check-circle"></i>
                                </div>
                                <div class="service-content">
                                    <h3 class="title" data-aos="fade-zoom-in" data-aos-easing="ease-in-back" data-aos-delay="300" data-aos-offset="0">РЕГИСТРАЦИЯ</h3>
                                    <p class="description" data-aos="zoom-in-up">
                                        Зарегистрируйся, получи все указания, выслушай все условия обучения. Заполни все документы и жди начала обучения. Тебя предупредят за пару дней до начала занятий.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6" data-aos="fade-up">
                            <div class="serviceBox">
                                <div class="service-icon">
                                    <i class="fa fa-briefcase"></i>
                                </div>
                                <div class="service-content">
                                    <h3 class="title" data-aos="fade-zoom-in" data-aos-easing="ease-in-back" data-aos-delay="300" data-aos-offset="0">ОБУЧЕНИЕ</h3>
                                    <p class="description" data-aos="zoom-in-up">
                                        Посещение занятий является одним из основных критериев, входящих в состав требований.Каждый урок это взаимосвязь с последующими темами. <br>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6" data-aos="fade-up">
                            <div class="serviceBox">
                                <div class="service-icon">
                                    <i class="fa fa-angellist"></i>
                                </div>
                                <div class="service-content">
                                    <h3 class="title" data-aos="fade-zoom-in" data-aos-easing="ease-in-back" data-aos-delay="300" data-aos-offset="0">ВЫПУСК</h3>
                                    <p class="description" data-aos="zoom-in-up">
                                        Для того чтобы Вам присвоили квалификацию, требуется после окончания курса пройти выпускной экзамен, демонстрируя свой навык полученный в процессе обучения
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- ./row -->
                </div>
                <!-- ./container -->
            </div>
        </div>
    </div>
    <div class="row">
        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
        <script type="text/javascript">function call(){var msg=$('#formx').serialize();$.ajax({type:'POST',url:'inc/action_ajax_form.php',
            data:msg,success:function(data){$("#formx")[0].reset(); alert("Вы записаны на консультацию!");},error:function(xhr,str){
              alert('Возникла ошибка: '+xhr.responseCode);}});}
        </script>
        <h2 class="col-md-12 col-xs-12" style="text-align: center;margin-top: 50px;">ЗАПИСЬ НА КОНСУЛЬТАЦИЮ</h2>
        <form method="POST" id="formx" class="col-sm-12 col-md-6 col-md-offset-3 col-lg-6 form-group" action="javascript:void(null);" onsubmit="call()">
            <div class="col-md-12 form-group">
                <input id="name" name="name" class="form-control" placeholder="Ваше имя..." type="text" required>
            </div>
            <div class="col-md-12 form-group">
                <input name="phone" class="form-control" id="telephone" placeholder="" type="tel" required>
            </div>
            <div class="col-md-12">
                <input value="ЗАПИСАТЬСЯ" name="order_call_button" class="btn btn-warning" type="submit">
            </div>
        </form>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-md-12"style="text-align: center;">
                <h2 style="text-align: center; margin-top:50px;padding-top: 20px;border-top:2px solid black;">КОЛИЧЕСТВО УЧАЩИХСЯ</h2>
                <div class="col-md-4 col-sm-6 col-md-offset-2" data-aos="fade-up" data-aos-anchor-placement="center-bottom">
                    <?php
                        $sql = "SELECT * FROM uc_count_people";
                        $result = mysql_query($sql);
                        while($res = mysql_fetch_array($result)){
                            $count_start = $res["count_start"];
                            $count_end = $res["count_end"];
                        }
                        ?>

                    <div class="total">
                        <div class="service-icon">
                            <i class="fa fa-graduation-cap"></i>
                        </div>
                        <div class="service-content">
                            <h3><a href="#">Уже обучились</a></h3>
                        
                            <p><?php echo $count_end; ?> человек</p>
                        </div>
                    </div>
                </div>

                 <div class="col-md-4 col-sm-6" data-aos="fade-up" data-aos-anchor-placement="center-bottom" style="margin: 0 auto;">
                     <div class="total">
                         <div class="service-icon">
                            <i class="fa fa-university"></i>
                         </div>
                         <div class="service-content">
                             <h3><a href="#">Сейчас учатся</a></h3>
                             <p><?php echo $count_start; ?> человек</p>
                         </div>
                     </div>
                 </div>
            </div>
            <div class="col-md-12 _news" style="text-align:center;">
                <h2 class="title col-md-12">НОВОСТИ</h2>
                <div class="col-md-12 col sm-12 col-xs-12 col-lg-12">
                    <?php
                        $sql = "SELECT * FROM uc_table_post ORDER BY id DESC LIMIT 8";
                        $result = mysql_query($sql);
                        while($res = mysql_fetch_array($result)){
                          if($res["status"] == "none"){
                        ?>
                            <div class="blog-card" data-aos="fade-up" data-aos-anchor-placement="center-bottom">
                            <div class="meta">
                              <div class="photo" style="background-image: url(uploads/<?php echo $res["post_img"]?>)"></div>
                              <ul class="details">
                                <li class="date"><?php echo $res["post_date"];?></li>
                                <li class="tags">
                                  <ul>
                                    <li><a href="#">Рубрика:</a></li>
                                    <li><a href="#"><?php echo $res["post_category"];?></a></li>
                                  </ul>
                                </li>
                              </ul>
                            </div>
                            <div class="description">
                              <h1></h1>
                              <h2><?php echo $res["post_title"];?></h2>
                              <p><?php echo $res["post_desc"];?></p>
                              <p class="read-more">
                                <a href="newspage.php?news_id=<?php echo $res['id'];?>">Подробнее</a>
                              </p>
                            </div>
                          </div>
                    <?php
                        }elseif($res["status"] == "open"){
                        ?>
                          <div class="blog-card" data-aos="fade-up" data-aos-anchor-placement="center-bottom">
                            <div class="meta">
                              <div class="photo" style="background-image: url(uploads/<?php echo $res["post_img"]?>)"></div>
                              <ul class="details">
                                <li class="date"><?php echo $res["post_date"];?></li>
                                <li class="tags">
                                  <ul>
                                    <li><a href="#">Рубрика:</a></li>
                                    <li><a href="#"><?php echo $res["post_category"];?></a></li>
                                  </ul>
                                </li>
                              </ul>
                            </div>
                            <div class="description">
                              <h1>НАБОР ОТКРЫТ</h1>
                              <h2><?php echo $res["post_title"];?></h2>
                              <p><?php echo $res["post_desc"];?></p>
                              <p class="read-more">
                                <a href="newspage.php?news_id=<?php echo $res['id'];?>">Подробнее</a>
                              </p>
                            </div>
                          </div>
                    <?php
                        }else{
                          ?>
                          <div class="blog-card" data-aos="fade-up" data-aos-anchor-placement="center-bottom">
                            <div class="meta">
                              <div class="photo" style="background-image: url(uploads/<?php echo $res["post_img"]?>)"></div>
                              <ul class="details">
                                <li class="date"><?php echo $res["post_date"];?></li>
                                <li class="tags">
                                  <ul>
                                    <li><a href="#">Рубрика:</a></li>
                                    <li><a href="#"><?php echo $res["post_category"];?></a></li>
                                  </ul>
                                </li>
                              </ul>
                            </div>
                            <div class="description">
                              <h1>НАБОР ЗАКРЫТ</h1>
                              <h2><?php echo $res["post_title"];?></h2>
                              <p><?php echo $res["post_desc"];?></p>
                              <p class="read-more">
                                <a href="newspage.php?news_id=<?php echo $res['id'];?>">Подробнее</a>
                              </p>
                            </div>
                          </div>
                    <?php
                        }
                        }
                        ?>
                </div>
                <div class="col-md-12">
                    <a href="news.php" class="btn btn-outline btn-primary">ВСЕ НОВОСТИ</a>
                </div>
            </div>
        </div>
    </div>
</main>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="build/js/intlTelInput.js"></script>
    <script>
      var input = $("#telephone"),
        output = $("#telephone");

      input.intlTelInput({
        nationalMode: false,
        utilsScript: "/lib/libphonenumber/build/utils.js" // just for formatting/placeholders etc
      });

      // listen to "keyup", but also "change" to update when the user selects a country
      input.on("keyup change", function() {
        var intlNumber = input.intlTelInput("getNumber");
        if (intlNumber) {
          output.text("International: " + intlNumber);
        } else {
          output.text("Please enter a number below");
        }
      });    
    </script>

</body>
<?php
    require_once"inc/footer.php";
    ?>