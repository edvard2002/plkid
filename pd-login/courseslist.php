<?php
    include("conf.php");
    session_start();

    if ( isset( $_SESSION['id'] ) ) {
    	require_once"header.php";
    
    ?>
<div class="container">
    <div class="row">
        <main id="main" style="min-height: 80vh">
            <h1>Список созданных курсов</h1>
            <a href="addcourses.php" class="new_pages_btn">
                <div class="creat_new_page"></div>
            </a>
            <div class="col">
                <?php
                    // Выбираем из таблицы navigation поле materials
                    // в котором хранится количество материалов на странице
                    $rowult = mysql_query("SELECT `id` FROM `courses_tbl`");
                    $myrow = mysql_fetch_array($rowult);
                    $num = 20;
                    // Извлекаем из URL текущую страницу
                    @$page = $_GET['page'];
                    // Определяем общее число сообщений в базе данных
                    $rowult_nav = mysql_query("SELECT COUNT(*) FROM `courses_tbl`");
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
                    
                    ?>
                <table>
                    <tr>
                        <td class="page_td" ><strong>Id</strong></td>
                        <td class="page_td" ><strong>Наименование курса</strong></td>
                        <td class="page_td" ><strong>Описание курса</strong></td>
                        <td class="page_td" ><strong>Ключевые слова</strong></td>
                        <td class="page_td" ><strong>Дата публикации</strong></td>
                        <td class="page_td" ><strong>Статус</strong></td>
                        <td class="page_td" ><strong>Усправление</strong></td>
                    </tr>
                    <?php
                        $sql = mysql_query("select * from `courses_tbl` order by `id` desc limit $start, $num");
                        while ($row = mysql_fetch_array($sql)){
                        
                        
                        				?>
                    <tr>
                        <td class="page_td" ><?php echo $row["id"];?></td>
                        <td class="page_td" ><?php echo $row["courses_name"];?></td>
                        <td class="page_td" ><?php echo $row["courses_text"];?></td>
                        <td class="page_td" ><?php echo $row["courses_keywords"];?></td>
                        <td class="page_td" ><?php echo $row["courses_date"];?></td>
                        <td class="page_td" ><?php if($row["courses_free"] == 1){echo "Бесплатно";}else{echo "Платно";}?></td>
                        <td class="page_td" >
                            <a href="deletecourses.php?pages_id=<?php echo $row["id"]; ?>" onclick="alert('Вы точно хотите удалить данный курс?')">
                                <div class="delete_pages"></div>
                            </a>
                            <a href="editcourses.php?post_id=<?php echo $row["id"]; ?>">
                                <div class="edit_pages"></div>
                            </a>
                        </td>
                    </tr>
                    <?php
                        }
                        ?>
                </table>
            </div>
            <div class="main_post_pages">
                <?php
                    // Проверяем нужны ли стрелки назад
                    if ($page != 1) $pervpage = '<a href=pageslist.php?&page=1><<</a> |
                    ';
                    
                    // Проверяем нужны ли стрелки вперед
                    if ($page != $total) $nextpage = '  | <a href=pageslist.php?&page=' .$total. '>
                    >></a>';
                    
                    // Находим две ближайшие станицы с обоих краев, если они есть
                    if($page - 5 > 0) $page5left = ' <a href=pageslist.php?&page='.
                    ($page - 5) .'>'. ($page - 5) .'</a> | ';
                    if($page - 4 > 0) $page4left = ' <a href=pageslist.php?&page='.
                    ($page - 4) .'>'. ($page - 4) .'</a> | ';
                    if($page - 3 > 0) $page3left = ' <a href=pageslist.php?&page='.
                    ($page - 3) .'>'. ($page - 3) .'</a> | ';
                    if($page - 2 > 0) $page2left = ' <a href=pageslist.php?&page='.
                    ($page - 2) .'>'. ($page - 2) .'</a> | ';
                    if($page - 1 > 0) $page1left = ' <a href=pageslist.php?&page='.
                    ($page - 1) .'>'. ($page - 1) .'</a> | ';
                    
                    if($page + 5 <= $total) $page5right = ' | <a href=pageslist.php?&page='.
                    ($page + 5) .' >'. ($page + 5) .'</a>';
                    if($page + 4 <= $total) $page4right = ' | <a href=pageslist.php?&page='.
                    ($page + 4) .'>'. ($page + 4) .'</a>';
                    if($page + 3 <= $total) $page3right = ' | <a href=pageslist.php?&page='.
                    ($page + 3) .'>'. ($page + 3) .'</a>';
                    if($page + 2 <= $total) $page2right = ' | <a href=pageslist.php?&page='.
                    ($page + 2) .'>'. ($page + 2) .'</a>';
                    if($page + 1 <= $total) $page1right = ' | <a href=pageslist.php?&page='.
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
        </main>
    </div>
</div>
<?php
    require_once"footer.php";
    } else {
    // Redirect them to the login page
    header("Location: index.php");
}

    ?>