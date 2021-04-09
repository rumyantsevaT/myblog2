-- phpMyAdmin SQL Dump
-- version 4.4.10
-- http://www.phpmyadmin.net
--
-- Хост: localhost:3306
-- Время создания: Янв 21 2019 г., 18:28
-- Версия сервера: 5.5.42
-- Версия PHP: 5.6.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `myblog.loc`
--

-- --------------------------------------------------------

--
-- Структура таблицы `breeds`
--

CREATE TABLE `breeds` (
  `id` int(11) NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `short_content` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `category_id` int(11) NOT NULL,
  `author_id` int(11) NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `status` int(1) NOT NULL DEFAULT '1'
) ENGINE=InnoDB AUTO_INCREMENT=49 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `breeds`
--

REPLACE INTO `breeds` (`id`, `title`, `short_content`, `content`, `category_id`, `author_id`, `image`, `date`, `status`) VALUES
(43, 'Стаффордширский терер дурачок', '', 'Стаффордширский терер дурачок с cvv c', 0, 0, 'screen-7.jpg', '2019-01-15 21:54:49', 1),
(45, 'Бультерьер', '', 'Описание этого розовоносого песика', 0, 0, 'bullterrier.jpg', '2019-01-15 21:58:18', 1),
(48, 'Порода заглушка по умолчанию', '', 'Порода заглушка по умолчанию когда будет валидация то она будет установлена если другая картинка не загружена\r\n 777', 0, 0, 'deactiv_hid_400.gif', '2019-01-15 22:05:06', 1);

-- --------------------------------------------------------

--
-- Структура таблицы `breeds_category`
--

CREATE TABLE `breeds_category` (
  `id` int(255) NOT NULL,
  `name` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `sort_order` int(255) NOT NULL,
  `status` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `posts`
--

CREATE TABLE `posts` (
  `id` int(11) NOT NULL,
  `title` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `text` text COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `posts`
--

REPLACE INTO `posts` (`id`, `title`, `text`) VALUES
(1, 'gggg', ''';'';'';'';'';'';opopopp'),
(2, 'gfgfgf', 'gfgfgfgfgfg'),
(3, 'fdfdf', 'fdfdfdf'),
(4, 'Ð²Ñ‹Ð²Ñ‹Ð²', 'Ð²Ñ‹Ð²Ñ‹Ð²Ñ‹Ð²'),
(5, 'ÑÐ¼ÑÐ¼ÑÐ¼', 'Ð¼ÑÐ¼ÑÐ¼Ñ'),
(6, 'gfgfg', 'fdfdfdfd'),
(7, '32323', '2323232323'),
(8, 'Ð‘Ð¸Ð³Ð»ÑŒ ', 'ÐžÑ‡ÐµÐ½ÑŒ Ð¼Ð¸Ð»Ð°Ñ Ð¿Ð¾Ñ€Ð¾Ð´Ð° Ð¾Ñ…Ð¾Ñ‚Ð½Ð¸Ñ‡ÑŒÐ¸Ñ… ÑÐ¾Ð±Ð°Ðº'),
(9, 'Ð‘Ð¸Ð³Ð»ÑŒ', 'Ð¢Ð›ÐÐ¢Ð”Ð¢Ð”Ð¢ÐÐ´ÑŒÐ°Ð´Ð»Ð²Ñ‹ÑŒÐ´Ð°Ð¾Ð²Ñ‹Ð´Ñ„Ð¾Ð°Ð´Ð²Ñ‹Ð¾Ñ„Ð°Ð¾Ð²Ñ‹Ñ„Ð´Ð»Ð°Ð¾Ð²Ñ‹Ð´Ð¾Ñ„Ð°Ð´Ð¶Ð²Ñ‹Ñ„Ð°'),
(10, 'ÑÐ¼ÑÐ¼Ñ', 'Ð¼ÑÐ¼ÑÐ¼ÑÐ¼');

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(25) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(8) COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_visit` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `breeds`
--
ALTER TABLE `breeds`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `breeds_category`
--
ALTER TABLE `breeds_category`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `posts`
--
ALTER TABLE `posts`
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
-- AUTO_INCREMENT для таблицы `breeds`
--
ALTER TABLE `breeds`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=49;
--
-- AUTO_INCREMENT для таблицы `breeds_category`
--
ALTER TABLE `breeds_category`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT для таблицы `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
