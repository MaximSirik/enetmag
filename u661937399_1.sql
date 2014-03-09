
-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Хост: localhost
-- Время создания: Мар 09 2014 г., 10:49
-- Версия сервера: 5.1.61
-- Версия PHP: 5.2.17

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- База данных: `u661937399_1`
--

-- --------------------------------------------------------

--
-- Структура таблицы `category`
--

CREATE TABLE IF NOT EXISTS `category` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `parent_id` int(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=20 ;

--
-- Дамп данных таблицы `category`
--

INSERT INTO `category` (`id`, `name`, `parent_id`) VALUES
(1, 'Ноутбуки', 0),
(2, 'Компьютеры', 0),
(3, 'Телевизоры', 0),
(4, 'Мониторы', 0),
(5, 'Планшеты', 0),
(6, 'Микроволновки', 0),
(7, 'Телефоны', 0),
(8, 'Активный отдых', 0),
(19, 'Персональные компьютеры', 2);

-- --------------------------------------------------------

--
-- Структура таблицы `goods`
--

CREATE TABLE IF NOT EXISTS `goods` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `category` int(10) NOT NULL,
  `cost` int(10) NOT NULL,
  `specification` text NOT NULL,
  `time` int(20) NOT NULL,
  `poster` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=11 ;

--
-- Дамп данных таблицы `goods`
--

INSERT INTO `goods` (`id`, `name`, `category`, `cost`, `specification`, `time`, `poster`) VALUES
(1, 'Ноутбук Lenovo IdeaPad Y510p (59-407121)', 1, 11190, 'Экран 15.6" (1920x1080) FullHD LED, матовый / Intel Core i7-4700MQ (2.4 ГГц) / RAM 8 ГБ / HDD 1 ТБ + SSHD 8 ГБ / NVIDIA GeForce GT 755M, 2 ГБ / DVD Super Multi / LAN / Wi-Fi / Bluetooth / веб-камера / DOS / 2.7 кг / черный', 356895475, 'http://i4.rozetka.ua/goods/12795/lenovo_ideapad_y510p_59-407121_12795050.jpg'),
(2, 'Lenovo IdeaPad Y510p (59-407121)', 1, 12309, 'Экран 15.6" (1920x1080) FullHD LED, матовый / Intel Core i7-4700MQ (2.4 ГГц) / RAM 8 ГБ / HDD 1 ТБ + SSHD 8 ГБ / NVIDIA GeForce GT 755M, 2 ГБ / DVD Super Multi / LAN / Wi-Fi / Bluetooth / веб-камера / DOS / 2.7 кг / черный', 1393411820, 'http://i4.rozetka.ua/goods/12795/lenovo_ideapad_y510p_59-407121_12795050.jpg'),
(3, 'Lenovo IdeaPad Y510p (59-407122)', 1, 15389, 'Экран 15.6" (1920x1080) FullHD LED, матовый / Intel Core i7-4700MQ (2.4 ГГц) / RAM 16 ГБ / HDD 1 ТБ + SSHD 8 ГБ / 2 х NVIDIA GeForce GT 755M (SLI), 2 ГБ / Без ОД / LAN / Wi-Fi / Bluetooth / веб-камера / DOS / 2.7 кг / черный', 1393411903, 'http://i1.rozetka.ua/goods/12795/lenovo_ideapad_y510p_59-407122_12795250.jpg'),
(4, 'Персональный компьютер Everest Home & Office 1006 (1006_4102)', 2, 2783, 'AMD Richland A4-4000 (3.0 ГГц) / RAM 4 ГБ / HDD 500 ГБ / AMD Radeon HD 7480D / DVD±RW / LAN / без ОС', 1393763157, ''),
(5, 'Dell Inspiron 5737 (I577810DDL-24) Silver', 1, 9449, 'Экран 17.3" (1600x900) HD+ WLED, глянцевый / Intel Core i7-4500U (1.8 ГГц) / RAM 8 ГБ (2х4 ГБ) / HDD 1 ТБ / AMD Radeon HD 8870M, 2 ГБ / DVD+/-RW / LAN / Wi-Fi / Bluetooth / веб-камера / Linux / 2.9 кг / серебристый', 1393763429, 'http://i5.rozetka.ua/goods/9773/copy_dell_inspiron_5737_i57545ddl_24_silver_524400604ba96_9773696.jpg'),
(6, 'Ноутбук Dell Inspiron 5737 (I57545DDL-24) Silver', 1, 7810, 'Экран 17.3" (1600x900) HD+ WLED, глянцевый / Intel Core i5-4200U (1.6 ГГц) / RAM 4 ГБ / HDD 500 ГБ / AMD Radeon HD 8870M, 2 ГБ / DVD+/-RW / LAN / Wi-Fi / Bluetooth / веб-камера / Linux / 2.9 кг / серебристый', 1393763472, 'http://i2.rozetka.ua/goods/9773/dell_inspiron_5737_i57545ddl_24_silver_9773332.jpg'),
(7, 'Ноутбук Dell Inspiron 5737 (I57545DDL-24BLUE) Indigo Blue', 1, 7810, 'Экран 17.3" (1600x900) HD+ WLED, глянцевый / Intel Core i5-4200U (1.6 ГГц) / RAM 4 ГБ / HDD 500 ГБ / AMD Radeon HD 8870M, 2 ГБ / DVD+/-RW / LAN / Wi-Fi / Bluetooth / веб-камера / Linux / 2.3 кг / синий', 1393763555, 'http://i2.rozetka.ua/goods/10210/dell_inspiron_7737_i77t5610ddw-24_10210596.jpg'),
(8, 'Dell Inspiron 5737 (I577810DDL-24PURPLE) Amethyst Purple', 1, 9449, 'Экран 17.3" (1600x900) HD+ WLED, глянцевый / Intel Core i7-4500U (1.8 ГГц) / RAM 8 ГБ / HDD 1 ТБ / AMD Radeon HD 8870M, 2 ГБ / DVD+/-RW / LAN / Wi-Fi / Bluetooth / веб-камера / Linux / 2.3 кг / пурпурный', 1393763593, 'http://i2.rozetka.ua/goods/10210/dell_inspiron_7737_i77t5610ddw-24_10210596.jpg'),
(9, 'Dell Inspiron 7537 (I75FT7810DDW-24) Aluminium ', 1, 14894, 'Экран 15.6" (1920x1080) Full HD Touch, сенсорный, глянцевый / Intel Core i7-4500U (1.8 ГГц) / RAM 8 ГБ (2x4 ГБ) / HDD 1 ТБ / NVIDIA GeForce GT 750M, 2 ГБ / без ОД / LAN / Wi-Fi / Bluetooth / веб-камера / Windows 8 / 2.6 кг / серебристый', 1393763635, 'http://i5.rozetka.ua/goods/9781/dell_inspiron_7537_i75ft7810ddw_24_9781489.jpg'),
(10, 'Dell Inspiron 7737 (i77T5610ddw-24) Aluminium ', 1, 13420, 'Экран 17.3" (1600x900) HD+ LED сенсорный, глянцевый / Intel Core i5-4200U (1.6 ГГц) / RAM 6 ГБ / HDD 1 ТБ / nVidia GeForce GT 750M, 2 ГБ / DVD Super Multi / LAN / Wi-Fi / Bluetooth / веб-камера / Windows 8 / 3.29 кг / серебристый', 1393763673, 'http://i2.rozetka.ua/goods/10210/dell_inspiron_7737_i77t5610ddw-24_10210596.jpg');

-- --------------------------------------------------------

--
-- Структура таблицы `orders`
--

CREATE TABLE IF NOT EXISTS `orders` (
  `id_orders` int(10) NOT NULL AUTO_INCREMENT,
  `id_users` int(10) NOT NULL,
  `time` varchar(255) NOT NULL,
  `link` varchar(255) NOT NULL,
  PRIMARY KEY (`id_orders`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Дамп данных таблицы `orders`
--

INSERT INTO `orders` (`id_orders`, `id_users`, `time`, `link`) VALUES
(1, 1, '1393752556', '0.609772001393752556'),
(2, 1, '1393753675', '0.923863001393753675'),
(3, 3, '1393761153', '0.779946001393761153');

-- --------------------------------------------------------

--
-- Структура таблицы `orders_items`
--

CREATE TABLE IF NOT EXISTS `orders_items` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `id_goods` varchar(255) NOT NULL,
  `id_order` varchar(255) NOT NULL,
  `cost_order` int(10) NOT NULL,
  `count` int(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

--
-- Дамп данных таблицы `orders_items`
--

INSERT INTO `orders_items` (`id`, `id_goods`, `id_order`, `cost_order`, `count`) VALUES
(1, '2', '0.609772001393752556', 12309, 2),
(2, '1', '0.923863001393753675', 11190, 1),
(3, '3', '0.923863001393753675', 15389, 1),
(4, '3', '0.779946001393761153', 15389, 5);

-- --------------------------------------------------------

--
-- Структура таблицы `permissions`
--

CREATE TABLE IF NOT EXISTS `permissions` (
  `id` int(1) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Структура таблицы `reviews`
--

CREATE TABLE IF NOT EXISTS `reviews` (
  `id_review` int(10) NOT NULL AUTO_INCREMENT,
  `id_goods` int(10) NOT NULL,
  `id_user` int(10) NOT NULL,
  `review` text COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id_review`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=6 ;

--
-- Дамп данных таблицы `reviews`
--

INSERT INTO `reviews` (`id_review`, `id_goods`, `id_user`, `review`) VALUES
(1, 2, 1, 'Maecenas sed diam eget risus varius blandit sit amet non magna.'),
(2, 2, 1, 'Maecenas sed diam eget risus varius blandit sit amet non magna. '),
(3, 2, 1, 'Maecenas sed diam eget risus varius blandit sit amet non magna. Maecenas sed diam eget risus varius blandit sit amet non magna. Maecenas sed diam eget risus varius blandit sit amet non magna. Maecenas sed diam eget risus varius blandit sit amet non magna. '),
(4, 2, 1, '1500'),
(5, 2, 4, 'Maecenas sed diam eget risus varius blandit sit amet non magna. Maecenas sed diam eget risus varius blandit sit amet non magna. Maecenas sed diam eget risus varius blandit sit amet non magna. Maecenas sed diam eget risus varius blandit sit amet non magna.');

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `first_name` varchar(255) DEFAULT NULL,
  `last_name` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `level` int(1) DEFAULT NULL,
  `telephone` varchar(15) DEFAULT NULL,
  `date` varchar(255) NOT NULL,
  `cookie` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `first_name`, `last_name`, `email`, `password`, `level`, `telephone`, `date`, `cookie`) VALUES
(1, 'Maxim', 'Sirik', 'maxim.sirik@gmail.com', '5f7a38fb9d8669813af7b47c5c2f7300', 1, '+380667277779', '1393075942', '815d19e148497c0cd536d48d56bd7fb0'),
(3, 'Максим', 'Сирик', 'maxim1.sirik@gmail.com', 'f872207f06df1730199133a9e4db47ba', 0, '+380667277778', '1393761127', 'b521a09f0bc3f7aaffce47c7418c74e9'),
(4, 'Оля', 'Голуб', 'mladi2010@yandex.ru', 'e10adc3949ba59abbe56e057f20f883e', 0, '+380958089742', '1394205324', 'bcc697014b9a75bcaae73ff668f4ad64');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
