<?php require_once "inc/header.php";?>

<content class="main">
	<div class="container">
		<div class="row">
			<div class="news2">
				<h2 class="title col-md-12" style="text-align:center;">НОВОСТИ</h2>
				<div class="news_block_post col-md-12 col-xs-12 col-sm-12">
					<?php
					// Выбираем из таблицы navigation поле materials
					// в котором хранится количество материалов на странице
					$rowult = mysql_query("SELECT id FROM uc_table_post");
					$myrow = mysql_fetch_array($rowult);
					$num = 12;
					// Извлекаем из URL текущую страницу
					@$page = $_GET['page'];
					// Определяем общее число сообщений в базе данных
					$rowult_nav = mysql_query("SELECT COUNT(*) FROM uc_table_post");
					$temp = mysql_fetch_array($rowult_nav);
					$posts = $temp[0];
					// Находим общее число страниц
					$total = (($posts - 1) / $num) + 1;
					$total =  intval($total);
					// Определяем начало сообщений для текущей страницы
					$page = intval($page);
					// Если переменная $page меньше единицы или отрицательно
					// переходим на первую страницу
					// А если слишком большое, то переходим на последнюю
					if(empty($page) or $page < 0) $page = 1;
					if($page > $total) $page = $total;
					// Вычисляем начиная с какого номера
					// следует выводить сообщения
					$start = $page * $num - $num;
					// Выбираем $num сообщений начиная с номера $start


					// Выбираем все поля из таблицы materials с лимитом навигации
					// по количеству материалов на странице
					$sql = mysql_query("SELECT * FROM uc_table_post order by id desc limit $start, $num");
					while ($row = mysql_fetch_array($sql)){

						if($row["status"] == "none"){?>
                            <div class="blog-card" data-aos="fade-up" data-aos-anchor-placement="center-bottom">
                            <div class="meta">
                              <div class="photo" style="background-image: url(uploads/<?php echo $row["post_img"]?>)"></div>
                              <ul class="details">
                                <li class="date"><?php echo $row["post_date"];?></li>
                                <li class="tags">
                                  <ul>
                                    <li><a href="#">Рубрика:</a></li>
                                    <li><a href="#"><?php echo $row["post_category"];?></a></li>
                                  </ul>
                                </li>
                              </ul>
                            </div>
                            <div class="description">
                              <h1></h1>
                              <h2><?php echo $row["post_title"];?></h2>
                              <p><?php echo $row["post_desc"];?></p>
                              <p class="read-more">
                                <a href="newspage.php?news_id=<?php echo $row['id'];?>">Подробнее</a>
                              </p>
                            </div>
                          </div>							
                        <?php
						}elseif($row["status"] == "open"){
							?>
                          <div class="blog-card" data-aos="fade-up" data-aos-anchor-placement="center-bottom">
                            <div class="meta">
                              <div class="photo" style="background-image: url(uploads/<?php echo $row["post_img"]?>)"></div>
                              <ul class="details">
                                <li class="date"><?php echo $row["post_date"];?></li>
                                <li class="tags">
                                  <ul>
                                    <li><a href="#">Рубрика:</a></li>
                                    <li><a href="#"><?php echo $row["post_category"];?></a></li>
                                  </ul>
                                </li>
                              </ul>
                            </div>
                            <div class="description">
                              <h1>НАБОР ОТКРЫТ</h1>
                              <h2><?php echo $row["post_title"];?></h2>
                              <p><?php echo $row["post_desc"];?></p>
                              <p class="read-more">
                                <a href="newspage.php?news_id=<?php echo $row['id'];?>">Подробнее</a>
                              </p>
                            </div>
                          </div>
							<?php
						}else{
							?>
                          <div class="blog-card" data-aos="fade-up" data-aos-anchor-placement="center-bottom">
                            <div class="meta">
                              <div class="photo" style="background-image: url(uploads/<?php echo $row["post_img"]?>)"></div>
                              <ul class="details">
                                <li class="date"><?php echo $row["post_date"];?></li>
                                <li class="tags">
                                  <ul>
                                    <li><a href="#">Рубрика:</a></li>
                                    <li><a href="#"><?php echo $row["post_category"];?></a></li>
                                  </ul>
                                </li>
                              </ul>
                            </div>
                            <div class="description">
                              <h1>НАБОР ЗАКРЫТ</h1>
                              <h2><?php echo $row["post_title"];?></h2>
                              <p><?php echo $row["post_desc"];?></p>
                              <p class="read-more">
                                <a href="newspage.php?news_id=<?php echo $row['id'];?>">Подробнее</a>
                              </p>
                            </div>
                          </div>
							<?php
						}
					}
					?>
				</div>
				<div class="news_post_pages">
					<?php
					// Проверяем нужны ли стрелки назад
					if ($page != 1) $pervpage = '<a href=news.php?&page=1>Первая</a> |
					';

					// Проверяем нужны ли стрелки вперед
					if ($page != $total) $nextpage = '  | <a href=news.php?&page=' .$total. '>
						Последняя</a>';

						// Находим две ближайшие станицы с обоих краев, если они есть
						if($page - 5 > 0) $page5left = ' <a href=news.php?&page='.
						($page - 5) .'>'. ($page - 5) .'</a> | ';
						if($page - 4 > 0) $page4left = ' <a href=news.php?&page='.
						($page - 4) .'>'. ($page - 4) .'</a> | ';
						if($page - 3 > 0) $page3left = ' <a href=news.php?&page='.
						($page - 3) .'>'. ($page - 3) .'</a> | ';
						if($page - 2 > 0) $page2left = ' <a href=news.php?&page='.
						($page - 2) .'>'. ($page - 2) .'</a> | ';
						if($page - 1 > 0) $page1left = ' <a href=news.php?&page='.
						($page - 1) .'>'. ($page - 1) .'</a> | ';

						if($page + 5 <= $total) $page5right = ' | <a href=news.php?&page='.
						($page + 5) .' >'. ($page + 5) .'</a>';
						if($page + 4 <= $total) $page4right = ' | <a href=news.php?&page='.
						($page + 4) .'>'. ($page + 4) .'</a>';
						if($page + 3 <= $total) $page3right = ' | <a href=news.php?&page='.
						($page + 3) .'>'. ($page + 3) .'</a>';
						if($page + 2 <= $total) $page2right = ' | <a href=news.php?&page='.
						($page + 2) .'>'. ($page + 2) .'</a>';
						if($page + 1 <= $total) $page1right = ' | <a href=news.php?&page='.
						($page + 1) .'>'. ($page + 1) .'</a>';

						// Выводим страницу на которой мы находимся
						if ($total > 1)
						{
							echo $pervpage.$page5left.$page4left.$page3left.$page2left.$page1left.'
							<span class="navigation_a_hover">'.$page.'</span>
							'.$page1right.$page2right.$page3right.$page4right.$page5right.$nextpage;
						}
						?>
					</div>
				</div>

		</div>
	</div>
			</content>
<?php
	require_once "inc/footer.php";
?>
