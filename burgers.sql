-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Фев 28 2020 г., 12:39
-- Версия сервера: 5.6.43
-- Версия PHP: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `burgers`
--

-- --------------------------------------------------------

--
-- Структура таблицы `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `userId` int(11) NOT NULL,
  `street` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `home` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `part` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL,
  `appt` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL,
  `floor` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL,
  `comment` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `needTheChange` tinyint(1) NOT NULL,
  `paymentCard` tinyint(1) NOT NULL,
  `noCallback` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `orders`
--

INSERT INTO `orders` (`id`, `userId`, `street`, `home`, `part`, `appt`, `floor`, `comment`, `needTheChange`, `paymentCard`, `noCallback`) VALUES
(1, 1, 'cvxcvxcvcv', 'b', '1', '1', '1', '1', 1, 1, 1),
(2, 1, 'cvxcvxcvcv', 'b', '1', '1', '1', '1', 1, 1, 1),
(3, 1, 'cvxcvxcvcv', 'b', 'no', '1', '1', '1', 1, 1, 1),
(4, 1, 'cvxcvxcvcv', 'b', '-', '-', '-', '-', 1, 1, 1),
(5, 1, 'cvxcvxcvcv', 'b', '-', '-', '-', '-', 1, 1, 1),
(6, 1, 'cvxcvxcvcv', 'b', '-', '-', '-', '-', 1, 1, 1),
(7, 1, 'cvxcvxcvcv', 'b', '-', '-', '-', '-', 1, 1, 1),
(8, 1, 'cvxcvxcvcv', 'b', '-', '-', '-', '-', 1, 1, 1),
(9, 1, 'cvxcvxcvcv', 'b', '-', '-', '-', '-', 1, 1, 1),
(10, 1, 'cvxcvxcvcv', 'b', '-', '-', '-', '-', 0, 1, 1),
(11, 1, 'cvxcvxcvcv', 'b', '-', '-', '-', '-', 1, 1, 0);

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `email`, `name`, `phone`) VALUES
(1, 'test@test.ru', 'vcvbv', '+7 (444) 444 44 44');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
