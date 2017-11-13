-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1
-- Время создания: Окт 31 2017 г., 10:45
-- Версия сервера: 10.1.26-MariaDB
-- Версия PHP: 7.1.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `it_elit`
--

-- --------------------------------------------------------

--
-- Структура таблицы `firma`
--

DROP TABLE IF EXISTS `firma`;
CREATE TABLE `firma` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(40) NOT NULL,
  `lastname` varchar(40) NOT NULL,
  `post` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `firma`
--

INSERT INTO `firma` (`id`, `name`, `lastname`, `post`) VALUES
(1, 'Володимир', 'Пастернак', 'Директор'),
(2, 'Діма', 'Доронін', 'Програміст'),
(3, 'Андрій	', 'Семчук', 'методист'),
(4, 'Роман', 'Павлюс', 'менеджер'),
(5, 'Богдан', 'Зозуляк', 'учень'),
(7, 'Ігор', 'Німий', 'учень'),
(8, 'Стас', 'Сорба', 'учень'),
(9, 'Ігор', 'Кудінов', 'учень'),
(10, 'Соломія', 'Прокопів', 'учень'),
(11, 'Альона', 'Іващук', 'вчитель'),
(12, 'Богдан', 'Охрімчук', 'учень'),
(13, 'Тарас', 'Постернак', 'вчитель'),
(14, 'Вероніка', 'Романко', 'учень'),
(15, 'Володя', 'Костецький	', 'учень'),
(16, 'Олег', 'Марчук', 'учень'),
(17, 'Олег', 'Козич', 'методист'),
(18, 'Галина', 'Шевченко', 'вчитель'),
(19, 'Андрій', 'Закопець', 'учень'),
(20, 'Андрій', 'Бинда', 'учень'),
(21, 'Микола', 'Мудрий', 'учень'),
(22, 'Андрій', 'Щегель', 'учень'),
(23, 'Володимир', 'Шевчук', 'вчитель'),
(24, 'Helga', 'Morovitz', 'teacher');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `firma`
--
ALTER TABLE `firma`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `firma`
--
ALTER TABLE `firma`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
