<?php
    include("conf.php");
    session_start();
    if ( isset( $_SESSION['id'] ) ) {
    	require_once"header.php";
    
    ?>
<div class="container" style="min-height: 80vh;">
    <div class="row">
        <main id="main">
            <h1>Список созданных записей</h1>
            <a href="posts.php" class="new_pages_btn">
                <div class="creat_new_page"></div>
            </a>
            <div class="col">
                <?php
                    // Выбираем из таблицы navigation поле materials
                    // в котором хранится количество материалов на странице
                    $rowult = mysql_query("SELECT id FROM uc_table_post");
                    $myrow = mysql_fetch_array($rowult);
                    $num = 10;
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
                    
                    ?>
                <table>
                    <tr>
                        <td class="page_td" ><strong>Id</strong></td>
                        <td class="page_td" ><strong>Наименование публикации</strong></td>
                        <td class="page_td" ><strong>Краткое описание публикации</strong></td>
                        <td class="page_td" ><strong>Дата публикации</strong></td>
                        <td class="page_td" ><strong>Управление</strong></td>
                    </tr>
                    <?php
                        $sql = mysql_query("select * from uc_table_post order by id desc limit $start, $num");
                        while ($row = mysql_fetch_array($sql)){
                        
                        
                        				?>
                    <tr>
                        <td class="page_td" ><?php echo $row["id"];?></td>
                        <td class="page_td" ><?php echo $row["post_title"];?></td>
                        <td class="page_td" ><?php echo $row["post_desc"];?></td>
                        <td class="page_td" ><?php echo $row["post_date"];?></td>
                        <td class="page_td" >
                            <a href="deletepost.php?pages_id=<?php echo $row["id"]; ?>" onclick="alert('Вы точно хотите удалить данную публикацию?')">
                                <div class="delete_pages"></div>
                            </a>
                            <a href="editpost.php?pages_id=<?php echo $row["id"]; ?>">
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
                    if ($page != 1) $pervpage = '<a href=postlist.php?&page=1><<</a> |
                    ';
                    
                    // Проверяем нужны ли стрелки вперед
                    if ($page != $total) $nextpage = '  | <a href=postlist.php?&page=' .$total. '>
                    >></a>';
                    
                    // Находим две ближайшие станицы с обоих краев, если они есть
                    if($page - 5 > 0) $page5left = ' <a href=postlist.php?&page='.
                    ($page - 5) .'>'. ($page - 5) .'</a> | ';
                    if($page - 4 > 0) $page4left = ' <a href=postlist.php?&page='.
                    ($page - 4) .'>'. ($page - 4) .'</a> | ';
                    if($page - 3 > 0) $page3left = ' <a href=postlist.php?&page='.
                    ($page - 3) .'>'. ($page - 3) .'</a> | ';
                    if($page - 2 > 0) $page2left = ' <a href=postlist.php?&page='.
                    ($page - 2) .'>'. ($page - 2) .'</a> | ';
                    if($page - 1 > 0) $page1left = ' <a href=postlist.php?&page='.
                    ($page - 1) .'>'. ($page - 1) .'</a> | ';
                    
                    if($page + 5 <= $total) $page5right = ' | <a href=postlist.php?&page='.
                    ($page + 5) .' >'. ($page + 5) .'</a>';
                    if($page + 4 <= $total) $page4right = ' | <a href=postlist.php?&page='.
                    ($page + 4) .'>'. ($page + 4) .'</a>';
                    if($page + 3 <= $total) $page3right = ' | <a href=postlist.php?&page='.
                    ($page + 3) .'>'. ($page + 3) .'</a>';
                    if($page + 2 <= $total) $page2right = ' | <a href=postlist.php?&page='.
                    ($page + 2) .'>'. ($page + 2) .'</a>';
                    if($page + 1 <= $total) $page1right = ' | <a href=postlist.php?&page='.
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
    }else{
    header("location: index.php");
}

    ?>