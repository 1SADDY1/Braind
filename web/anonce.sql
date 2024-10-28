-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1
-- Время создания: Окт 28 2024 г., 01:34
-- Версия сервера: 10.4.32-MariaDB
-- Версия PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `anonce`
--

-- --------------------------------------------------------

--
-- Структура таблицы `statii`
--

CREATE TABLE `statii` (
  `id_stat` int(10) NOT NULL COMMENT 'id статьи',
  `title` varchar(250) DEFAULT NULL,
  `text` text DEFAULT NULL,
  `author` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `statii`
--

INSERT INTO `statii` (`id_stat`, `title`, `text`, `author`) VALUES
(9, 'Джо Пеши', 'Джозеф Фрэнк (Джо) Пеши (англ. Joseph Frank (Joe) Pesci; род. 9 февраля 1943, Ньюарк, Нью-Джерси, США) — американский актёр, комик и певец. Наибольшую известность получил благодаря многолетнему сотрудничеству с Мартином Скорсезе в фильмах «Бешеный бык» (1980), «Славные парни» (1990), «Казино» (1995) и «Ирландец» (2019). Роль Томми Девито в «Славных парнях» принесла Пеши премию «Оскар» в категории «Лучший актёр второго плана»; за роль в «Бешеном быке» он был отмечен премией BAFTA как лучший новичок. Среди других ярких работ актёра — рождественские комедии «Один дома» и «Один дома 2: Потерявшийся в Нью-Йорке», криминальная драма «Однажды в Америке», оскароносная кинокомедия «Мой кузен Винни» и серия фильмов «Смертельное оружие». Пеши также является прообразом персонажа Поли из компьютерной игры Mafia: The City of Lost Heaven, получившей широкую популярность и «культовый» статус. Содержание 1 Биография 1.1 Личная жизнь 2 Фильмография 3 Дискография 4 Премии и награды 4.1 Номинации 4.2 Награды 5 Цитаты 6 Примечания Биография Джо Пеши родился 9 февраля 1943 года в Ньюарке, штат Нью-Джерси, в семье парикмахера Мэри и водителя Анджело, которые оба были выходцами из Италии[3]. В 5-летнем возрасте впервые сыграл в театре[3]. Первую значимую роль сыграл в 1976 году в низкобюджетном криминальном фильме «Коллекционер смертей», где также играл Фрэнк Винсент, в будущем неоднократно сотрудничавший с Пеши. Работа в «Коллекционере смертей» была замечена Мартином Скорсезе, который пригласил Джо на одну из главных ролей в своём новом фильме. После роли брата боксёра Джоуи Ламотты в фильме Мартина Скорсезе «Бешеный бык» (1980) Пеши получил премию BAFTA в категории «Лучший новичок». За эту роль актёр также был номинирован на премию «Оскар». В 1990 году Пеши прославился на весь мир, сыграв гангстера Томми Девито в фильме Мартина Скорсезе «Славные парни». За роль Девито актёр получил первый «Оскар». Впоследствии Пеши появлялся в таких известных фильмах, как «Один дома», «Один дома 2: Потерявшийся в Нью-Йорке», «Джон Ф. Кеннеди. Выстрелы в Далласе», «Смертельное оружие 2», «Смертельное оружие 3», «Смертельное оружие 4», «Мой кузен Винни», «Бронксская повесть» и «Казино».', 'Википедия'),
(10, 'Берсерк', '  Что вершит судьбу человечества в этом мире? Некое незримое существо или закон, подобно Длани Господней парящей над миром? По крайне мере истинно то, что человек не властен даже над своей волей. \r\n', 'Гатс'),
(13, 'Китай', 'Кита́й (кит. трад. 中國, упр. 中国, пиньинь Zhōngguó, палл. Чжунго), официальное название — Кита́йская Наро́дная Респу́блика, сокращённо — КНР (кит. трад. 中華人民共和國, упр. 中华人民共和国, пиньинь Zhōnghuá Rénmín Gònghéguó, палл. Чжунхуа Жэньминь Гунхэго) — государство в Восточной Азии.\r\n\r\nС востока страна омывается водами западных морей Тихого океана. На северо-востоке она граничит с КНДР и Россией, на севере — с Монголией, на северо-западе — с Россией и Казахстаном, на западе — с Кыргызстаном, Таджикистаном и Афганистаном, на юго-западе — с контролируемым Пакистаном Гилгит-Балтистаном, Индией, Непалом и Бутаном, на юге — с Мьянмой, Лаосом, Вьетнамом. Общая площадь территории составляет 9,6 млн км²[13]; занимает 4-е место в мире по территории среди государств мира по площади, уступая России, Канаде и США.\r\n\r\nПо численности населения[14] — 1 411 750 000 жителей (без Тайваня, Гонконга и Макао[7][15]) — занимает второе место в мире после Индии[16]. Уровень урбанизации равен 65 %[15]. Китай — многонациональное государство, но на сегодняшний день большинство его населения составляют этнические китайцы с самоназванием хань.\r\n\r\nСтолица — Пекин; другие крупные города — Чунцин, Шанхай, Гуанчжоу, Нанкин, Харбин и т. д.\r\n\r\nГосударственный язык — китайский (севернокитайский; в Китае носит название путунхуа) — один из тибето-бирманских языков со множеством диалектов. В Китае используется и другие языки этой семьи — например, тибетский (в Тибете) — а также языки других языковых семей, как например тюркский уйгурский язык (в Синьцзян-Уйгурском автономном районе).\r\n\r\nКитайская Народная Республика, согласно конституции, — социалистическое государство[17]. Фактически же является авторитарной диктатурой[18][19][20].\r\n\r\nЯвляется постоянным членом Совета безопасности ООН. Одна из ведущих космических держав мира, обладает ядерным оружием и крупнейшей в мире армией по численности военнослужащих.\r\n\r\nКитайская экономика является второй экономикой мира по номинальному ВВП[21] и первой экономикой мира по ВВП (ППС)[22]. КНР является мировым лидером по производству большинства видов промышленной продукции. Крупнейший мировой экспортёр («фабрика мира») и один из главных рынков сбыта. Располагает наибольшими в мире золотовалютными резервами. В 1990-х, 2000-х и 2010-х годах темпы экономического роста Китая были выше, чем в среднем в странах АТР.\r\n\r\nВ 2020 году на долю Китая пришлось 24,8 % глобальных расходов на НИОКР. В 2023 году он потратил на науку и технологии 2,65 % от ВВП — больше, чем на армию. В 2024 году возглавил рейтинг Nature Index и занял 11 место в рейтинге Глобального инновационного индекса. В Китае находятся 26 из 100 ведущих научно-технологических кластеров мира, четыре из которых вошли в первую десятку рейтинга: Шэньчжэнь — Гонконг — Гуанчжоу, Пекин, Шанхай — Сучжоу и Нанкин.\r\n\r\nКНР состоит в таких международных организациях, как ООН, ВТО[23], АТЭС, G20, БРИКС, ШОС. Китай инициировал создание «Одного пояса и одного пути».\r\n\r\nСо времени провозглашения Китайской Народной Республики в 1949 году правящей партией является Коммунистическая партия Китая (КПК). Председателем КНР является Си Цзиньпин (с 2013 года)', 'Википедия');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `statii`
--
ALTER TABLE `statii`
  ADD PRIMARY KEY (`id_stat`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `statii`
--
ALTER TABLE `statii`
  MODIFY `id_stat` int(10) NOT NULL AUTO_INCREMENT COMMENT 'id статьи', AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;