-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Июн 21 2020 г., 15:37
-- Версия сервера: 10.3.22-MariaDB
-- Версия PHP: 7.1.33
SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `wpi`
--



-- --------------------------------------------------------

--
-- Структура таблицы `entries`
--

CREATE TABLE `entries` (
  `id` int(11) NOT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `genre` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `type` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `admin` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `info` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `votes` int(11) NOT NULL DEFAULT 0,
  `link` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Дамп данных таблицы `entries`
--

INSERT INTO `entries` (`id`, `title`, `genre`, `type`, `admin`, `info`, `votes`, `link`) VALUES
(0, 'Эсенвальд La Conquista', 'Гримдарк/Темное фентези', '', '', '', 77, ''),
(1, 'IMPERIAL PHOENIX', 'Мифологическое средневековье с элементами фэнтези', '', '', '', 2, ''),
(2, 'Сквозь Горизонт: Зов Новой Эры 3357', 'Космоопера', '', '', '', 3, ''),
(3, 'ALTERNATIVE WORLD', 'Альтернативная история, фантастика, недалекое будущее', '', '', '', 2, ''),
(4, 'Легенда Торана', 'Первобытное фэнтези с сюжетом и переходом в другие эпохи', '', '', '', 12, ''),
(5, 'NeWorld', 'Реалистичная ролевая ВПИ по историческому концу 19 века', '', '', '', 2, ''),
(6, 'Star Wars: The Intricacies of Politics', 'Космоопера', '', '', '', 2, ''),
(7, 'Palatenn', 'Фэнтези', '', '', '', 2, ''),
(8, 'Wild Politics', 'Карта современного мира, поделённая на регионы', '', '', '', 5, ''),
(9, 'Krieg und Frieden ', 'Ренессанс', '', '', '', 2, ''),
(10, 'Marxs Legacy', 'Виртуальное государство', '', '', '', 2, ''),
(11, 'CLASSIC IMPERIAL', 'Альтернативная античность/Новое время', '', '', '', 2, ''),
(12, 'Historical Conquest', 'Япония XVI-XVII веков эпохи Сэнгоку Дзидай', '', '', '', 2, ''),
(13, 'Реальный Мир', 'Современность', '', '', '', 32, ''),
(14, 'Suuri Sirpale', 'Альтернативная реальность', '', '', '', 2, ''),
(15, 'Новые Горизонты', 'Warhammer 30k', '', '', '', 2, ''),
(16, 'Старая Эра: 3357', 'Космоопера', '', '', '', 9, ''),
(17, 'ВПИ Game of Thrones', 'Игра Престолов, средневековье', '', '', '', 2, ''),
(18, 'РВПИ  \"Ad Astra\"', 'Космоопера 2220 год', '', '', '', 2, ''),
(19, '♔ Royal GAME ♔', 'Новое время,реальность,17 век', '', '', '', 2, ''),
(20, ' ВПИ - РСО КИПР', 'Альтернативная история 19-20 век', '', '', '', 3, ''),
(21, '2022 год - Последствия/New Era Aftermath 2022', 'Постапокалипсис', '', '', '', 2, ''),
(22, 'Полихлоридный Альянс 2.0', 'Виртуальное государство', '', '', '', 2, ''),
(23, 'ВПИ \"Век мировых войн\"', 'Средневековье', '', '', '', 3, ''),
(24, 'Dishonorable War | Season: 1', 'Период после Первой Мировой', '', '', '', 2, ''),
(25, 'ВПИ METRO \"The choice is yours\"', 'Постапокалипсис', '', '', '', 2, '');

-- --------------------------------------------------------

--
-- Структура таблицы `vote_ip`
--

CREATE TABLE `vote_ip` (
  `id` int(11) NOT NULL,
  `id_resp` int(11) NOT NULL,
  `ip` varchar(15) CHARACTER SET utf8 NOT NULL,
  `date_resp` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `entries`
--
ALTER TABLE `entries`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `vote_ip`
--
ALTER TABLE `vote_ip`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `entries`
--
ALTER TABLE `entries`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT для таблицы `vote_ip`
--
ALTER TABLE `vote_ip`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=230;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
