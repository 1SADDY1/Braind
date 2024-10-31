-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1
-- Время создания: Окт 31 2024 г., 03:04
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
-- База данных: `comment`
--

-- --------------------------------------------------------

--
-- Структура таблицы `comments`
--

CREATE TABLE `comments` (
  `id_user` int(10) NOT NULL COMMENT 'id юзера',
  `user` varchar(30) NOT NULL COMMENT 'никнейм или имя',
  `comm` text NOT NULL COMMENT 'сам комментарий ',
  `like_1` varchar(20) NOT NULL COMMENT 'лайк',
  `dislike` varchar(20) NOT NULL COMMENT 'дизлайк',
  `id_stat` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Дамп данных таблицы `comments`
--

INSERT INTO `comments` (`id_user`, `user`, `comm`, `like_1`, `dislike`, `id_stat`) VALUES
(25, 'Саша', 'Берсерк  круто, аниме для настоящих мужчин честной судьбы!', '', '', 10),
(28, 'Гатс', 'Спасибо Саша, были рады стараться!', '', '', 10);

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `comments`
--
ALTER TABLE `comments`
  MODIFY `id_user` int(10) NOT NULL AUTO_INCREMENT COMMENT 'id юзера', AUTO_INCREMENT=29;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
