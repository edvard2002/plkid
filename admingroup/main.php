<?php
    require_once'config.php';
    session_start();
    if ( isset( $_SESSION['id'] ) ) {
    // Grab user data from the database using the user_id
    // Let them access the "logged in only" pages
    require_once'header.php';
    
        $sql = "SELECT count(*) as status FROM `uc_table_post` WHERE `status` = 'open'";
        $result = mysql_query($sql);
        while($rows = mysql_fetch_array($result)){
            $num_rows = $rows["countorder"];
        }
        
        $sql = "SELECT count(*) as status FROM `uc_table_post` WHERE `status` = 'close'";
        $result = mysql_query($sql);
        while($rows = mysql_fetch_array($result)){
            $num_rows_post = $rows["countorder"];
        }
        $sql = "SELECT count(*) as ctotalsum FROM uc_order_people";
        $result = mysql_query($sql);
        while($rows = mysql_fetch_array($result)){
            $num_rows_sum = $rows["ctotalsum"];
        }
?>
<div class="container" style="min-height: 80vh;">
    <div class="row">
        <main id="main" class="col-md-12 col-xs-12">
            <div class="col-md-4 col-sm-6">
                <div class="serviceBox">
                    <div class="service-icon">
                        <i class="fa fa-user-plus"></i>
                    </div>
                    <h3 class="title">Набирается групп</h3>
                    <h3 class="description">
                        <?php 
                            if($num_rows > 0){
                                echo "<br>" . $num_rows . "<br>";
                            }else{
                                echo "<br>0<br>";
                            }
                             
                             ?>
                    </h3>
                </div>
            </div>
            <div class="col-md-4 col-sm-6">
                <div class="serviceBox">
                    <div class="service-icon">
                        <i class="fa fa-users"></i>
                    </div>
                    <h3 class="title">Набранные группы</h3>
                    <h3 class="description">
                        <?php 
                            if($num_rows_post > 0){
                             echo "<br>" . $num_rows_post . "<br>";
                            }else{
                                echo "<br>0<br>";   
                            }
                            ?>
                    </h3>
                </div>
            </div>
            <div class="col-md-4 col-sm-6">
                <div class="serviceBox">
                    <div class="service-icon">
                        <i class="fa fa-list-ol"></i>
                    </div>
                    <h3 class="title">На консультацию</h3>
                    <h3 class="description">
                        <?php 
                            if($num_rows_sum > 0){
                             echo "<br>" . $num_rows_sum . " чел.<br>";
                            }else{
                                echo "<br>0<br>";
                            }?>
                    </h3>
                </div>
            </div>
            <div class="div_2_buy_form col-md-12 col-">
                <div class="col-md-12 col-xs-12">
                    <?php
                        // Выбираем из таблицы navigation поле materials
                        // в котором хранится количество материалов на странице
                        $rowult = mysql_query("SELECT id FROM uc_order_people");
                        $myrow = mysql_fetch_array($rowult);
                        $num = 10;
                        // Извлекаем из URL текущую страницу
                        @$page = $_GET['page'];
                        // Определяем общее число сообщений в базе данных
                        $rowult_nav = mysql_query("SELECT COUNT(*) FROM uc_order_people");
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
                    <table class="table table-inverse">
                        <thead>
                            <tr class="text-center" style="background:white;">
                                <th>Имя</th>
                                <th>Контактные данные</th>
                                <th>Дата записи</th>
                            </tr>
                        </thead>
                        <?php
                            $sql = mysql_query("select * from uc_order_people order by id desc limit $start, $num");
                            while ($row = mysql_fetch_array($sql)){
                            
                            
                                            ?>
                        <tr>
                            <td class="td"><?php echo $row["order_name"];?></td>
                            <td class="td"><?php echo $row["order_phone"];?></td>
                            <td class="td"><?php echo $row["order_date"];?></td>
                        </tr>
                        <?php   
                            }
                            ?>
                    </table>
                </div>
            </div>
            <div class="main_post_pages">
                <?php   
                    // Проверяем нужны ли стрелки назад
                    if ($page != 1) $pervpage = '<a href=main.php?&page=1><<</a> |
                    ';
                    
                    // Проверяем нужны ли стрелки вперед
                    if ($page != $total) $nextpage = '  | <a href=main.php?&page=' .$total. '>
                    >></a>';
                    
                    // Находим две ближайшие станицы с обоих краев, если они есть
                    if($page - 5 > 0) $page5left = ' <a href=main.php?&page='.
                    ($page - 5) .'>'. ($page - 5) .'</a> | ';
                    if($page - 4 > 0) $page4left = ' <a href=main.php?&page='.
                    ($page - 4) .'>'. ($page - 4) .'</a> | ';
                    if($page - 3 > 0) $page3left = ' <a href=main.php?&page='.
                    ($page - 3) .'>'. ($page - 3) .'</a> | ';
                    if($page - 2 > 0) $page2left = ' <a href=main.php?&page='.
                    ($page - 2) .'>'. ($page - 2) .'</a> | ';
                    if($page - 1 > 0) $page1left = ' <a href=main.php?&page='.
                    ($page - 1) .'>'. ($page - 1) .'</a> | ';
                    
                    if($page + 5 <= $total) $page5right = ' | <a href=main.php?&page='.
                    ($page + 5) .' >'. ($page + 5) .'</a>';
                    if($page + 4 <= $total) $page4right = ' | <a href=main.php?&page='.
                    ($page + 4) .'>'. ($page + 4) .'</a>';
                    if($page + 3 <= $total) $page3right = ' | <a href=main.php?&page='.
                    ($page + 3) .'>'. ($page + 3) .'</a>';
                    if($page + 2 <= $total) $page2right = ' | <a href=main.php?&page='.
                    ($page + 2) .'>'. ($page + 2) .'</a>';
                    if($page + 1 <= $total) $page1right = ' | <a href=main.php?&page='.
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
    require_once'footer.php';
    } else {
    header("Location: index.php");
}

    ?>