-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Июн 14 2023 г., 04:03
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
  `service` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mark` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `reviews`
--

INSERT INTO `reviews` (`index`, `login`, `review`, `image`, `nickname`, `service`, `mark`) VALUES
(35, 'pavel12345', 'Продвигают сайт Telegram Web уже не первый год. Много работы уже было сделано. Претензии с нашей стороны тоже возникали, но всегда удавалось их решить мирно и быстро.Продвигают сайт Telegram Web уже не первый год. Много работы уже было сделано. Претензии с нашей стороны тоже возникали, но всегда удавалось их решить мирно и быстро.Продвигают сайт Telegram Web уже ', 'https://s0.rbk.ru/v6_top_pics/media/img/6/06/756330076484066.jpg', 'durovTelegram', 'Создание сайтов', 3),
(37, 'IRINA1234', 'Продвигают сайт Telegram Web уже не первый год. Много работы уже было сделано. Претензии с нашей стороны тоже возникали, но всегда удавалось их решить мирно и быстро.Продвигают сайт Telegram Web уже не первый год. Много работы уже было сделано. Претензии с нашей стороны тоже возникали, но всегда удавалось их решить мирно и быстро.Продвигают сайт Telegram Web уже ', 'https://www.pravilamag.ru/upload/img_cache/e8a/e8a0c5d3cefffee703a2d9a58cde797e_ce_1080x673x0x23_cropped_666x444.jpg', 'konfeto4ka', 'Создание сайтов', 4),
(39, 'Tyler_Durden', 'Продвигают сайт Бойцовского клуба уже не первый год. Много работы уже было сделано. Претензии с нашей стороны тоже возникали, но всегда удавалось их решить мирно и быстро.', 'https://citaty.info/files/portraits/tyler_durden.jpeg', 'durden2023', 'Продвижение сайта', 2),
(40, 'pavel12345', 'Компания отличная, а сотрудники просто сокровище. Это та сама компания, которых осталось совсем мало, где идеально реализовано сочетание человечности и профессионализма. Ребята работают быстро, чётко. Адаптируются под проект заказчика. Работаю с ребятами не первый раз.', 'https://s0.rbk.ru/v6_top_pics/media/img/6/06/756330076484066.jpg', 'durovTelegram', 'Создание сайтов', 5),
(41, 'socility1over', 'Достаточно продолжительное время искали хорошую, ответственную компанию по аудиту нашего сайта и привлечения потока клиентов. Такую, чтобы там были специалисты по всем профилям. Хотелось, чтобы люди знали своё дело, но в то же время могли нам, простым обывателям, далеким от мира IT, объяснить простыми словами что, как и почему. ', 'https://sun9-29.userapi.com/impg/jw0eZw1KzCz0-rozRvmQOWO5xtpcCZ6c2kDdsw/Xh7_OmZKwzQ.jpg?size=1000x1000&quality=95&sign=e65bfa52f31f0950fddd391455f043a0&type=album', 'socility1over', 'Комплексный аудит', 5),
(42, 'cherenkoV12345', 'Компания отличная, а сотрудники просто сокровище. Это та сама компания, которых осталось совсем мало, где идеально реализовано сочетание человечности и профессионализма. Ребята работают быстро, чётко. Адаптируются под проект заказчика. Работаю с ребятами не первый раз.', 'https://static16.tgcnt.ru/posts/_0/6e/6e8ac49a9cf5a6194ae27059f5872635.jpg', 'cherenkoV', 'Создание сайтов', 5),
(43, 'Vershin123', 'Продвигают сайт автозапчастей уже не первый год. Много работы уже было сделано. Претензии с нашей стороны тоже возникали, но всегда удавалось их решить враждебно и относительно быстро, приходилось конфликтовать с косультантом по телефону. ', 'https://sun9-34.userapi.com/impg/IKjhsPK_cYnUnUK01efAyo2XpzVTkK8jyYitYQ/_2cWMlXMc8Y.jpg?size=917x1049&quality=95&sign=9b290702c3c33cc18611ee57e4398e22&type=album', 'ZduckhubZ', 'Продвижение сайта', 3),
(44, 'pavel12345', 'Достаточно продолжительное время искали хорошую, ответственную компанию по аудиту нашего сайта и привлечения потока клиентов. Такую, чтобы там были специалисты по всем профилям. Хотелось, чтобы люди знали своё дело, но в то же время могли нам, простым обывателям, далеким от мира IT, объяснить простыми словами что, как и почему.', 'https://s0.rbk.ru/v6_top_pics/media/img/6/06/756330076484066.jpg', 'durovTelegram', 'Создание сайтов', 3),
(46, 'danil4ich', 'Добрый день, будьте аккуратны сотрудничая с этой компанией заказал разработку сайта с дальнейшим продвижением в поиске, заключили договор ( с кучей лазеек для них что бы не выполнять работу в полном объеме) сроки все были нарушены и даже сроки обговоренные после утверждения дизайна сайта была просрочка с его версткой ( на 34 дня).', './assets/img/users_photos/6489100ef3633_1608329366183195383.jpg', 'Big_Flopa', 'Контекстная реклама', 2);

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `login` varchar(70) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nickname` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_photo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_phone` varchar(11) COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_review_time` datetime DEFAULT NULL,
  `status` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `verification_code` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `original_verification_code` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `count` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`login`, `email`, `name`, `password`, `nickname`, `user_photo`, `user_phone`, `last_review_time`, `status`, `verification_code`, `original_verification_code`, `count`) VALUES
('amoguser555', 'jekam20762@pyadu.com', 'Амог', '$2y$10$X5lNPCRkIGwdpvW7/PFRHuUTRUYsBRkQTgk06EkhziI0sytY8LDiu', 'amogus228', 'https://sun9-10.userapi.com/impg/anSpvCioEPxnPyGSNiGp8WF2o0UUbyI__t5CUg/-HX97gplAak.jpg?size=807x454&quality=96&sign=17fc241d7a1b40329295034eb6912fde&type=album', '81936768695', NULL, 'verified', '$2y$10$xM1H2qrBaGB4mnlKl0bNE..67sWBCJV4fA1UgEjEUVfAFceVe5Kaa', '648816f686de4', 0),
('bombaster', 'meketo7811@onlcool.com', 'Гига', '$2y$10$v01UatrUaT7dfCwDX9r0AehXpuJDDdMVK.w/kWcOaSjAhg7TMjf8a', 'sigma', 'https://s0.rbk.ru/v6_top_pics/media/img/6/06/756330076484066.jpg', '81935845459', NULL, 'unverified', '$2y$10$waYSHpecDSJvN/ZJts85k.u11F.Qbl1FptCK1j6UGRAEpkpk7ynLO', '64883124e4a94', 0),
('cherenkoV12345', 'cherenkoV@gmail.com', 'Влад', '$2y$10$ir/wSw0KWFuL.hyiRJbMtuCXImzYgah4r3WmNgEsfcVasLk73XLaG', 'cherenkoV', 'https://static16.tgcnt.ru/posts/_0/6e/6e8ac49a9cf5a6194ae27059f5872635.jpg', '89834938493', '2023-06-13 02:49:00', 'verified', '', '', 1),
('danil4ich', 'figore2031@aaorsi.com', 'Гига', '$2y$10$yaI791Rbt0JcLafVKDSw0e.CRJuNr332l2yJhcZAF5wnFUISsq./.', 'Big_Flopa', './assets/img/users_photos/6489100ef3633_1608329366183195383.jpg', '89834938493', '2023-06-14 04:01:51', 'verified', '', '', 1),
('gigachaddd', 'pihova7916@anwarb.com', 'Тайлер', '$2y$10$LpO/j7H0WFiaXSmzXFznoOESMBAGnJRZ/O2RvFuY7V3.AuUUhioh6', 'Groiper', 'https://citaty.info/files/portraits/tyler_durden.jpeg', '81935845459', NULL, 'unverified', '$2y$10$0HnSGZTKqhw5uLXCdHNigO5LJ5H9Wmk2IlQ.mo32xs4cwQZGuIHZm', '6488ac8d84d38', 0),
('gigachedd', 'gigachad@gmail.com', 'Гига', '$2y$10$mLbcBvx6bIziQed5qrZqU.IdbpwOUkU62WrCE47o7.WOX9NOcDVCq', 'gigached', 'https://sun9-10.userapi.com/impg/anSpvCioEPxnPyGSNiGp8WF2o0UUbyI__t5CUg/-HX97gplAak.jpg?size=807x454&quality=96&sign=17fc241d7a1b40329295034eb6912fde&type=album', '89136769675', '2023-06-12 01:41:29', 'verified', '', '', 0),
('IRINA1234', 'IRINA@GMAI.COM', 'Ирина', '$2y$10$9bqZtdEQxqGqzIP/QcyRWOlcZeeC6nEUBQejqT8Kt33KvlGbjwTxK', 'konfeto4ka', 'https://www.pravilamag.ru/upload/img_cache/e8a/e8a0c5d3cefffee703a2d9a58cde797e_ce_1080x673x0x23_cropped_666x444.jpg', '83239299389', '2023-06-12 15:56:24', 'verified', '', '', 1),
('konstant12', 'jipim74728@pyadu.com', 'Кост', '$2y$10$4G4nd6rh1xexMPBcEG8EuuxN2vGNiG34zpPI20OuSNIh9Lijq2J1S', '4ereno4ek', 'https://www.pravilamag.ru/upload/img_cache/e8a/e8a0c5d3cefffee703a2d9a58cde797e_ce_1080x673x0x23_cropped_666x444.jpg', '89135585858', NULL, 'unverified', '$2y$10$6Hufhz4OXCmSdL61YFEvAO4WKOj.WM3m9ymhnO8UaozWUlIAb36ii', '', 0),
('pavel12345', 'durov@gmail.com', 'Павел', '$2y$10$uAVgHboaP5peSjnNB8XDAuejjNhNrjj6nvKOTC6IbpC1BjytTMAoC', 'durovTelegram', 'https://s0.rbk.ru/v6_top_pics/media/img/6/06/756330076484066.jpg', '89135859475', '2023-06-13 07:27:17', 'verified', '', '', 3),
('socility1over', 'socility1lover@gmail.com', 'Александр', '$2y$10$TB31t2h7mQB4PWdoRh4nBedmzHijtkQsg6/SK2h30On3xt2zMzuOq', 'socility1over', 'https://sun9-29.userapi.com/impg/jw0eZw1KzCz0-rozRvmQOWO5xtpcCZ6c2kDdsw/Xh7_OmZKwzQ.jpg?size=1000x1000&quality=95&sign=e65bfa52f31f0950fddd391455f043a0&type=album', '89158349594', '2023-06-13 02:45:51', 'verified', '', '', 1),
('Tyler_Durden', 'Tyler@gmail.com', 'Тайлер', '$2y$10$rU/NuHhnrvyxzR0MhEtbiu6QVhmJnxalynmXziWA3gtuNeI54Gs.W', 'durden2023', 'https://citaty.info/files/portraits/tyler_durden.jpeg', '89136768475', '2023-06-12 19:56:36', 'verified', '', '', 1),
('Vershin123', 'Vershin@gmail.com', 'Иван', '$2y$10$8/oNRL.NHkAJlREk5z46QedWGlZUykqXRSkBJIsGPZ.Va3wIpcA/i', 'ZduckhubZ', 'https://sun9-34.userapi.com/impg/IKjhsPK_cYnUnUK01efAyo2XpzVTkK8jyYitYQ/_2cWMlXMc8Y.jpg?size=917x1049&quality=95&sign=9b290702c3c33cc18611ee57e4398e22&type=album', '89135845945', '2023-06-13 02:53:10', 'verified', '', '', 1);

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
(17, 'Хлебодар', 'Корпоративный сайт', 'https://mahog.ru/cache/img/480x480_0_0_0/upload_image_2020_11_hlebodar-promo.jpg', '');

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
  MODIFY `index` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;

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
