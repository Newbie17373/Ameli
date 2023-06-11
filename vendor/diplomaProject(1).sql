-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Июн 12 2023 г., 01:51
-- Версия сервера: 10.8.4-MariaDB
-- Версия PHP: 8.0.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `diplomaProject`
--

-- --------------------------------------------------------

--
-- Структура таблицы `reviews`
--

CREATE TABLE `reviews` (
  `index` int(3) NOT NULL,
  `login` varchar(70) COLLATE utf8mb4_unicode_ci NOT NULL,
  `review` varchar(400) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'https://www.pravilamag.ru/upload/img_cache/e8a/e8a0c5d3cefffee703a2d9a58cde797e_ce_1080x673x0x23_cropped_666x444.jpg',
  `nickname` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `service` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `reviews`
--

INSERT INTO `reviews` (`index`, `login`, `review`, `image`, `nickname`, `service`) VALUES
(33, 'gigachedd', 'Достаточно продолжительное время искали хорошую, ответственную компанию по аудиту нашего сайта и привлечения потока клиентов. Такую, чтобы там были специалисты по всем профилям. Хотелось, чтобы люди знали своё дело, но в то же время могли нам, простым обывателям, далеким от мира IT, объяснить простыми словами что, как и почему. ', 'https://sun9-10.userapi.com/impg/anSpvCioEPxnPyGSNiGp8WF2o0UUbyI__t5CUg/-HX97gplAak.jpg?size=807x454&quality=96&sign=17fc241d7a1b40329295034eb6912fde&type=album', 'gigached', 'Комплексный аудит');

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `login` varchar(70) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `surname` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nickname` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_photo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_phone` varchar(11) COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_review_time` datetime DEFAULT NULL,
  `count` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`login`, `email`, `name`, `surname`, `password`, `nickname`, `user_photo`, `user_phone`, `last_review_time`, `count`) VALUES
('gigachedd', 'gigached@gmail.com', 'Гига', 'Гигачед', '$2y$10$mLbcBvx6bIziQed5qrZqU.IdbpwOUkU62WrCE47o7.WOX9NOcDVCq', 'gigached', 'https://sun9-10.userapi.com/impg/anSpvCioEPxnPyGSNiGp8WF2o0UUbyI__t5CUg/-HX97gplAak.jpg?size=807x454&quality=96&sign=17fc241d7a1b40329295034eb6912fde&type=album', '89136769675', '2023-06-12 01:41:29', 1),
('pavel12345', 'durov@gmail.com', 'Павел', 'Дуровв', '$2y$10$uAVgHboaP5peSjnNB8XDAuejjNhNrjj6nvKOTC6IbpC1BjytTMAoC', 'durovTelegram', 'https://s0.rbk.ru/v6_top_pics/media/img/6/06/756330076484066.jpg', '89135859475', '2023-06-11 08:02:41', 0),
('Tyler_Durden', 'Tyler@gmail.com', 'Тайлер', 'Дерден', '$2y$10$rU/NuHhnrvyxzR0MhEtbiu6QVhmJnxalynmXziWA3gtuNeI54Gs.W', 'durden2023', 'https://citaty.info/files/portraits/tyler_durden.jpeg', '89136768475', '2023-06-11 12:31:24', 0);

-- --------------------------------------------------------

--
-- Структура таблицы `works`
--

CREATE TABLE `works` (
  `index` int(11) NOT NULL,
  `title` varchar(70) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `img` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `link` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'https://www.youtube.com/watch?v=hTWKbfoikeg&list=RDGMEMJQXQAmqrnmK1SEjY_rKBGA&index=14'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `works`
--

INSERT INTO `works` (`index`, `title`, `type`, `img`, `link`) VALUES
(1, 'Интернет-магазин «Хлебодар»', 'Интернет-магазин', 'https://mahog.ru/cache/img/480x480_0_0_0/upload_image_2022_09_Oblozhka.jpg', 'https://www.youtube.com/watch?v=hTWKbfoikeg&list=RDGMEMJQXQAmqrnmK1SEjY_rKBGA&index=14'),
(2, 'Титан-Смазочные Материалы', 'Корпоративный сайт', 'https://mahog.ru/cache/img/480x480_0_0_0/upload_image_2022_09_oblozhka_2.png', 'https://www.youtube.com/watch?v=GWJ99EJVHX8&list=RDGMEMJQXQAmqrnmK1SEjY_rKBGA&index=1'),
(3, 'ЖК «Зеленый остров»', 'Корпоративный сайт', 'https://mahog.ru/cache/img/480x480_0_0_0/upload_image_2022_09_oblozhka_1.png', 'https://www.youtube.com/watch?v=sNJVFloPIVA&list=RDGMEMJQXQAmqrnmK1SEjY_rKBGA&index=3'),
(4, 'Caas', 'Интернет-магазин', 'https://mahog.ru/cache/img/480x480_0_0_0/upload_image_2022_09_oblozhka.png', 'https://www.youtube.com/watch?v=0J2QdDbelmY&list=RDGMEMJQXQAmqrnmK1SEjY_rKBGA&index=5'),
(5, '60 лет Омский каучук', 'Корпоративный сайт', 'https://mahog.ru/cache/img/480x480_0_0_0/upload_image_2022_09_Oblozhka-min.jpg', 'https://www.youtube.com/watch?v=O4irXQhgMqg&list=RDGMEMJQXQAmqrnmK1SEjY_rKBGA&index=19'),
(6, 'Металлургическая компания «ОМК» Премиальная трубная продукция', 'Корпоративный сайт', 'https://mahog.ru/cache/img/480x480_0_0_0/upload_image_2021_11_truby-promo_1.jpg', 'https://www.youtube.com/watch?v=mw1Yt4XL-5M'),
(7, 'Группа компаний «Титан»', 'Корпоративный сайт', 'https://mahog.ru/cache/img/480x480_0_0_0/upload_image_2019_11_titan-bg.jpg', 'https://www.youtube.com/watch?v=EqQuihD0hoI&list=RDGMEMJQXQAmqrnmK1SEjY_rKBGA&index=24'),
(8, 'Институт территориального планирования «Град»', 'Корпоративный сайт', 'https://mahog.ru/cache/img/480x480_0_0_0/upload_image_2021_11_grad-promo_1.jpg', ''),
(9, 'ООО «Петролеум Трейдинг»', 'Корпоративный сайт', 'https://mahog.ru/cache/img/480x480_0_0_0/upload_image_2019_09_Snimok_ekrana_2019-09-04_v_10_1.png', ''),
(10, 'Металлургическая компания «ОМК»', 'Корпоративный сайт', 'https://mahog.ru/cache/img/480x480_0_0_0/upload_image_2017_01_Kvadrat.png', ''),
(16, 'Титан-Агро', 'Корпоративный сайт', 'https://mahog.ru/cache/img/480x480_0_0_0/upload_image_2021_11_titan-agro-promo.jpg', ''),
(17, 'Хлебодар', 'Корпоративный сайт', 'https://mahog.ru/cache/img/480x480_0_0_0/upload_image_2020_11_hlebodar-promo.jpg', ''),
(18, 'Разбитое лицо', 'Шлепок по лицу', 'https://sun9-6.userapi.com/impg/gBTJMXnepjC3v4V2jkPs4NMaGxGA9gyeglBYLg/chyFMHQslvk.jpg?size=950x1280&quality=96&sign=5dadc2e847fbb44f769b926148cb4c4d&type=album', '');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `reviews`
--
ALTER TABLE `reviews`
  ADD PRIMARY KEY (`index`),
  ADD KEY `nickname` (`nickname`);

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`login`),
  ADD KEY `FOREIGN2` (`nickname`);

--
-- Индексы таблицы `works`
--
ALTER TABLE `works`
  ADD PRIMARY KEY (`index`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `reviews`
--
ALTER TABLE `reviews`
  MODIFY `index` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT для таблицы `works`
--
ALTER TABLE `works`
  MODIFY `index` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- Ограничения внешнего ключа сохраненных таблиц
--

--
-- Ограничения внешнего ключа таблицы `reviews`
--
ALTER TABLE `reviews`
  ADD CONSTRAINT `reviews_ibfk_1` FOREIGN KEY (`nickname`) REFERENCES `users` (`nickname`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
