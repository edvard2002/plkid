-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Июн 17 2019 г., 12:58
-- Версия сервера: 5.6.41
-- Версия PHP: 5.5.38

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `ucpls98`
--

-- --------------------------------------------------------

--
-- Структура таблицы `courses_tbl`
--

CREATE TABLE `courses_tbl` (
  `id` int(11) NOT NULL,
  `courses_name` varchar(300) NOT NULL,
  `somename` varchar(300) NOT NULL,
  `courses_keywords` varchar(150) NOT NULL,
  `courses_text` text NOT NULL,
  `courses_date` date NOT NULL,
  `courses_free` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `courses_tbl`
--

INSERT INTO `courses_tbl` (`id`, `courses_name`, `somename`, `courses_keywords`, `courses_text`, `courses_date`, `courses_free`) VALUES
(10, 'Web-дизайн', 'web-design.jpg', '', 'Наши курсы дают возможность получить качественные знания в Web-дизайне, помочь людям добиваться своей мечты и менять мир', '2019-04-12', 1),
(11, 'Web-дизайн', 'web-design.jpg', '', 'Наши курсы дают возможность получить качественные знания в Web-дизайне, помочь людям добиваться своей мечты и менять мир', '2019-04-12', 0);

-- --------------------------------------------------------

--
-- Структура таблицы `uc_count_people`
--

CREATE TABLE `uc_count_people` (
  `id` int(11) NOT NULL,
  `count_start` int(10) NOT NULL,
  `count_end` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `uc_count_people`
--

INSERT INTO `uc_count_people` (`id`, `count_start`, `count_end`) VALUES
(1, 368, 3152);

-- --------------------------------------------------------

--
-- Структура таблицы `uc_menu`
--

CREATE TABLE `uc_menu` (
  `id` int(11) NOT NULL,
  `menu_name` varchar(250) NOT NULL,
  `menu_name_en` varchar(250) NOT NULL,
  `menu_text` text NOT NULL,
  `menu_keywords` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `uc_menu`
--

INSERT INTO `uc_menu` (`id`, `menu_name`, `menu_name_en`, `menu_text`, `menu_keywords`) VALUES
(1, 'О нас', 'about', '<p>Деятельность Профессионального лицея №98 – это сочетание новейших образовательных, информационных технологий, богатого педагогического опыта, хорошей материально-технической базы и современного стиля управления.</p><p>Профлицей №98 в настоящее время ведет подготовку квалифицированных кадров по самым современным и востребованным на рынке труда профессиям: связисты обучаются монтажу кабельного и коммутационного оборудования, ремонту стационарных и сотовых телефонов, установке домофонов, охранно-пожарной сигнализации и систем видеонаблюдения; специалисты по информационным технологиям – учатся выполнять сборку компьютеров, прокладку компьютерной сети, администрировать операционные системы и программировать web-сайты, а сфера работы с клиентами включает в себя получение в лицее престижных профессий менеджера, оператора Call-центра и парикмахера-визажиста.</p><p>Занятия проводят высококвалифицированные специалисты, которые пришли из реального сектора экономики и имеют стаж работы на производстве, привлекаются преподаватели из высших учебных заведений (доценты, кандидаты наук). Многие мастера п/о и преподаватели имеют сертификаты международного образца CISCO, ICDL и др.</p><p>Для качественной подготовки кадров лицей имеет хорошо оснащенную материально-техническую базу: оборудовано 3 современных компьютерных лаборатории, где учащиеся имеют возможность разрабатывать дизайн печатной продукции, монтировать видеоролики, тестировать и выполнять диагностику компьютеров. Все группы имеют возможность свободного доступа в Интернет. Уроки в лицее проводятся с использованием мультимедийных средств обучения: проектор, ноутбуки, телевизор, DVD. Учебные мастерские по ремонту сотовых телефонов и установке систем видеонаблюдения оснащены необходимым тестирующим и ремонтным оборудованием. Мастерская для обучения связистов находится на станции БГТС и оснащена действующим оборудованием станции.</p>', 'о нас, курсы, учебный центр');

-- --------------------------------------------------------

--
-- Структура таблицы `uc_order_people`
--

CREATE TABLE `uc_order_people` (
  `id` int(11) NOT NULL,
  `order_name` varchar(300) CHARACTER SET utf32 NOT NULL,
  `order_phone` varchar(25) NOT NULL,
  `order_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `uc_order_people`
--

INSERT INTO `uc_order_people` (`id`, `order_name`, `order_phone`, `order_date`) VALUES
(15, 'Эркин', '+996(556) 31-12-97', '2019-04-08 19:14:53'),
(16, 'Эдуард', '+996(123) 45-67-89', '2019-04-08 22:38:21'),
(17, 'Эдуард', '+996(556) 33-83-99', '2019-04-12 07:15:02'),
(18, 'Эдуард', '+996(556) 33-83-99', '2019-04-12 07:15:03'),
(19, 'Эдуард', '+996(556) 33-83-99', '2019-04-12 07:46:20'),
(20, 'яывыфвафыва', '+996(556) 33-83-99', '2019-04-12 07:49:11'),
(21, 'Эдуард', '+996(556) 33-83-99', '2019-04-12 07:49:38'),
(22, 'Эдуард', '+996(556) 33-83-99', '2019-04-12 07:50:19'),
(23, 'Эдуард', '+996(556) 33-83-99', '2019-04-12 07:51:54'),
(24, 'Эдуард', '+996(556) 33-83-99', '2019-04-12 07:52:13'),
(25, 'Эдуард', '+996(556) 33-83-99', '2019-04-12 07:52:57'),
(26, 'Эдуард', '+996(556) 33-83-99', '2019-04-12 07:53:31'),
(27, 'Эдуард', '+996(556) 33-83-99', '2019-04-12 10:25:24');

-- --------------------------------------------------------

--
-- Структура таблицы `uc_table_post`
--

CREATE TABLE `uc_table_post` (
  `id` int(11) NOT NULL,
  `post_title` varchar(300) NOT NULL,
  `post_desc` varchar(600) NOT NULL,
  `post_img` varchar(600) NOT NULL,
  `post_text` text NOT NULL,
  `post_img1` varchar(600) NOT NULL,
  `post_img2` varchar(600) NOT NULL,
  `post_img3` varchar(600) NOT NULL,
  `post_img4` varchar(600) NOT NULL,
  `post_img5` varchar(600) NOT NULL,
  `post_category` varchar(30) NOT NULL,
  `post_keywords` varchar(150) NOT NULL,
  `post_date` date NOT NULL,
  `status` varchar(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `uc_table_post`
--

INSERT INTO `uc_table_post` (`id`, `post_title`, `post_desc`, `post_img`, `post_text`, `post_img1`, `post_img2`, `post_img3`, `post_img4`, `post_img5`, `post_category`, `post_keywords`, `post_date`, `status`) VALUES
(24, '14 НОЯБРЯ 2018 ГОДА ЗАВЕРШИЛИ ОБУЧЕНИЕ КУРСЫ ПО ПРОЕКТУ ФРН АЗИАТСКОГО БАНКА РАЗВИТИЯ.', 'Выпускники групп- “Веб-дизайнер” и “Оператор контакт-центра” показали отличные знания и\r\nнавыки. Все прошли экзамен как теоритическую часть, так и практическую часть.\r\n', 'IMG-20181115-WA0007.jpg', '<p>Выпускники групп- “Веб-дизайнер” и “Оператор контакт-центра” показали отличные знания и<br>навыки. Все прошли экзамен как теоритическую часть, так и практическую часть.<br>Председателями экзаменов были наши партнеры-работодатели, которые по завершению<br>пригласили на собеседование.</p>', 'IMG-20181115-WA0002.jpg', '', '', '', '', 'Новости', 'Веб-дизайнер, показали, экзамен', '2019-04-08', 'open');

-- --------------------------------------------------------

--
-- Структура таблицы `uc_tble_about`
--

CREATE TABLE `uc_tble_about` (
  `id` int(11) NOT NULL,
  `title` varchar(250) NOT NULL,
  `description` varchar(450) NOT NULL,
  `keywords` varchar(150) NOT NULL,
  `address` varchar(200) NOT NULL,
  `phone1` varchar(25) NOT NULL,
  `phone2` varchar(25) NOT NULL,
  `copyrights` varchar(200) NOT NULL,
  `instagram` varchar(200) NOT NULL,
  `facebook` varchar(200) NOT NULL,
  `google_plus` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `uc_tble_about`
--

INSERT INTO `uc_tble_about` (`id`, `title`, `description`, `keywords`, `address`, `phone1`, `phone2`, `copyrights`, `instagram`, `facebook`, `google_plus`) VALUES
(1, 'Учебный центр - ПЛКиИТ№98', 'Учебный центр Профессионального лицея коммуникаций и информационных технологий №98', 'Курсы, курсы по проекту, бесплатные курсы, курсы по Web-дизайну, мастер по ремонту сотовых телефонов, Компьютерная грамотность', 'г. Бишкек, проспект Чуй, 225', '0500 050-984', '0312 61-28-72', '\"ПЛКиИТ №98 - Учебный центр\"', 'http://instagram.com/licey98_kg', 'http://fb.com', '');

-- --------------------------------------------------------

--
-- Структура таблицы `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `regcode` varchar(22) NOT NULL,
  `name` varchar(100) NOT NULL,
  `pwd` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `user`
--

INSERT INTO `user` (`id`, `regcode`, `name`, `pwd`) VALUES
(1, '290892', 'Эркин', '1234566');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `courses_tbl`
--
ALTER TABLE `courses_tbl`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `uc_count_people`
--
ALTER TABLE `uc_count_people`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `uc_menu`
--
ALTER TABLE `uc_menu`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `uc_order_people`
--
ALTER TABLE `uc_order_people`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `uc_table_post`
--
ALTER TABLE `uc_table_post`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `uc_tble_about`
--
ALTER TABLE `uc_tble_about`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `courses_tbl`
--
ALTER TABLE `courses_tbl`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT для таблицы `uc_count_people`
--
ALTER TABLE `uc_count_people`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT для таблицы `uc_menu`
--
ALTER TABLE `uc_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT для таблицы `uc_order_people`
--
ALTER TABLE `uc_order_people`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT для таблицы `uc_table_post`
--
ALTER TABLE `uc_table_post`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT для таблицы `uc_tble_about`
--
ALTER TABLE `uc_tble_about`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT для таблицы `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
