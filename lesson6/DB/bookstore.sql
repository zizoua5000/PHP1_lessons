-- phpMyAdmin SQL Dump
-- version 4.8.0
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1
-- Время создания: Май 07 2018 г., 06:51
-- Версия сервера: 5.7.21-log
-- Версия PHP: 5.6.35

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `bookstore`
--

-- --------------------------------------------------------

--
-- Структура таблицы `items`
--

CREATE TABLE `items` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `details_s` text NOT NULL,
  `details` text NOT NULL,
  `available` int(11) NOT NULL,
  `pic_path` varchar(255) DEFAULT NULL,
  `pic_path_s` varchar(255) DEFAULT NULL,
  `price` int(11) NOT NULL,
  `views` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `items`
--

INSERT INTO `items` (`id`, `name`, `details_s`, `details`, `available`, `pic_path`, `pic_path_s`, `price`, `views`) VALUES
(1, 'sd', 'asd', 'asd', 2323, NULL, NULL, 23, 0),
(2, 'jygjg', 'kuhk', 'mhgm', 54, NULL, NULL, 62, 0),
(3, 'jygjg', 'kuhk', 'mhgm', 54, NULL, NULL, 62, 0),
(4, 'jygjg', 'kuhk', 'mhgm', 54, NULL, NULL, 62, 0),
(5, 'jygjg', 'kuhk', 'mhgm', 54, NULL, NULL, 62, 0),
(6, 'jygjg', 'kuhk', 'mhgm', 54, NULL, NULL, 62, 0),
(7, 'sdf', 'asd', 'asdd d', 22, NULL, NULL, 32, 0),
(8, 'sdf', 'asd', 'asdd d', 22, NULL, NULL, 32, 0),
(9, 'sd', 'asd', 'asd', 23, NULL, NULL, 2333, 0),
(10, 'sd', 'asd', 'asd', 23, NULL, NULL, 2333, 0),
(11, 'df', 'sdf', 'sdf', 34, NULL, NULL, 52, 0),
(12, 'df', 'sdf', 'sdf', 34, NULL, NULL, 52, 0),
(13, 'df', 'sdf', 'sdf', 34, NULL, NULL, 52, 0),
(14, 'fsdf', 'sdf', 'sdf', 344, NULL, NULL, 3443, 0),
(15, 'fsdf', 'sdf', 'sdf', 344, NULL, NULL, 3443, 0),
(16, 'sdf', 'asd', 'asd', 23, NULL, NULL, 42, 0),
(17, 'sdf', 'asd', 'asd', 23, NULL, NULL, 42, 0),
(18, 'asd', 'asd', 'sad', 233, NULL, NULL, 2331, 0),
(19, 'sad', 'asd', 'asd', 233, NULL, NULL, 3, 0),
(20, 'sad', 'asd', 'asd', 233, NULL, NULL, 3, 0),
(21, 'sda', 'asd', 'asd', 22222, NULL, NULL, 222, 0),
(22, 'sfsd', 'sdf', 'sdf', 4334, NULL, NULL, 3434, 0),
(23, 'asd', 'asd', 'asdasd', 2323, NULL, NULL, 2323, 0),
(24, 'dsf', 'sdfsf', 'sdfsf', 333, NULL, NULL, 315, 0),
(25, 'dsf', 'sdfsf', 'sdfsf', 333, NULL, NULL, 315, 0),
(26, 'dsf', 'sdfsf', 'sdfsf', 333, NULL, NULL, 315, 0),
(27, 'dsf', 'sdfsf', 'sdfsf', 333, NULL, NULL, 315, 0),
(28, 'dsf', 'sdfsf', 'sdfsf', 333, NULL, NULL, 315, 0),
(29, 'dsf', 'sdfsf', 'sdfsf', 333, NULL, NULL, 315, 0),
(30, 'dsf', 'sdfsf', 'sdfsf', 333, NULL, NULL, 315, 0);

-- --------------------------------------------------------

--
-- Структура таблицы `menu`
--

CREATE TABLE `menu` (
  `id` int(11) NOT NULL,
  `name` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `menu`
--

INSERT INTO `menu` (`id`, `name`) VALUES
(1, 'Items');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `items`
--
ALTER TABLE `items`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `items`
--
ALTER TABLE `items`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT для таблицы `menu`
--
ALTER TABLE `menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
