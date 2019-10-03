-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time:  3 окт 2019 в 14:00
-- Версия на сървъра: 10.1.38-MariaDB
-- PHP Version: 7.3.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kanevcentar`
--

-- --------------------------------------------------------

--
-- Структура на таблица `predstavleniq`
--

CREATE TABLE `predstavleniq` (
  `id_predst` bigint(20) UNSIGNED NOT NULL,
  `ime_predst` varchar(255) NOT NULL,
  `organizaciq_predst` varchar(255) NOT NULL,
  `uchastnici_predst` varchar(255) NOT NULL,
  `time_predst` time NOT NULL,
  `date_predst` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Схема на данните от таблица `predstavleniq`
--

INSERT INTO `predstavleniq` (`id_predst`, `ime_predst`, `organizaciq_predst`, `uchastnici_predst`, `time_predst`, `date_predst`) VALUES
(1, 'Любими Евъргрийни с Йорданка Христова', 'Държавна Опера - Бургас', 'С участието на оркестъра на Държавна опера - Бургас и диригент - Левон Манукян', '19:00:00', '2019-06-21'),
(2, 'Четиримата италиански тенори', 'Лятно турне 2019', 'Врачанска филхармония', '19:00:00', '2019-06-24'),
(3, 'Пика Пока и вълшебното копче', 'Freedom Dance Studio & For Art Company', 'Freedom Dance Studio & For Art Company', '18:30:00', '2019-06-29'),
(4, 'Чакаме ви с любов', 'Дует Ритон', 'Дует Ритон със своя бенд', '19:00:00', '2019-09-25'),
(6, 'Предградие', 'Спектакъл на Ованес Торосян', 'С участието на : Александър Митев, Беатрис Благоева, Георги Атанасов, Ивайло Драганов, Ивелина Павлова, Костадин Жеков, Милен Вангелов, Недялка Раева, Петър Петров, Сава Драгнев', '19:00:00', '2019-10-21'),
(9, 'Ох, тези пари', 'Държавен драматичен театър - Търговище', 'Васил Драганов, Добрина Гецова, Марина и Божидар Попчев Моздухина', '19:00:00', '2019-10-11');

-- --------------------------------------------------------

--
-- Структура на таблица `predstavleniq_en`
--

CREATE TABLE `predstavleniq_en` (
  `id_predst` bigint(20) UNSIGNED NOT NULL,
  `ime_predst` varchar(255) NOT NULL,
  `organizaciq_predst` varchar(255) NOT NULL,
  `uchastnici_predst` varchar(255) NOT NULL,
  `time_predst` time NOT NULL,
  `date_predst` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Схема на данните от таблица `predstavleniq_en`
--

INSERT INTO `predstavleniq_en` (`id_predst`, `ime_predst`, `organizaciq_predst`, `uchastnici_predst`, `time_predst`, `date_predst`) VALUES
(1, 'Favorite Evergreens with Yordanka Hristova', 'State Opera - Burgas', 'With the participation of the State Opera Orchestra - Burgas and conductor - Levon Manukyan', '19:00:00', '2019-06-21'),
(2, 'The four Italian tenors', '2019 Summer Tour', 'Philharmonic Orchestra of Vratsa', '19:00:00', '2019-06-24'),
(3, 'Pika Poka and the Magic Button', 'Freedom Dance Studio & For Art Company', 'Freedom Dance Studio & For Art Company', '18:30:00', '2019-06-29'),
(4, 'We are waiting for you with love', 'Duet Riton', 'Duet Riton with their band', '19:00:00', '2019-09-25'),
(8, 'Oh, that money', 'State Drama Theater Targovishte', 'Vasil Draganov, Dobrina Getsova, Marina Moszhuhina, Bozhidar Popchev', '19:00:00', '2019-10-11'),
(9, 'Suburb', 'State Drama Theater Targovishte', 'Alexander Mitev, Beatris Blagoeva, Georgi Atanasov, Ivaylo Draganov, Ivelina Pavlova, Kostadin Zhekov, Milen Vangelov, Nedyalka Raeva, Petar Petrov, Sava Dragnev', '19:00:00', '2019-10-21');

-- --------------------------------------------------------

--
-- Структура на таблица `tblcontact`
--

CREATE TABLE `tblcontact` (
  `id_tblcontact` bigint(20) UNSIGNED NOT NULL,
  `user_name` varchar(255) NOT NULL,
  `user_email` varchar(255) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `content` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Схема на данните от таблица `tblcontact`
--

INSERT INTO `tblcontact` (`id_tblcontact`, `user_name`, `user_email`, `subject`, `content`) VALUES
(1, 'Красимир Петров', 'krasimirpetrov92@gmail.com', 'Работно време', 'Здравейте!\r\nБих желал да зная, в колко часа отваряте в неделя!\r\nБлагодаря!\r\n'),
(2, 'Ivan Georgiev', 'ivang94@abv.bg', 'hello', 'Hello!\r\n');

-- --------------------------------------------------------

--
-- Структура на таблица `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(100) CHARACTER SET latin1 NOT NULL,
  `email` varchar(100) CHARACTER SET latin1 NOT NULL,
  `password` varchar(100) CHARACTER SET latin1 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Схема на данните от таблица `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`) VALUES
(1, 'admin', 'admin@abv.bg', '21232f297a57a5a743894a0e4a801fc3'),
(2, 'guest', 'guest@abv.bg', '084e0343a0486ff05530df6c705c8bb4');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `predstavleniq`
--
ALTER TABLE `predstavleniq`
  ADD PRIMARY KEY (`id_predst`);

--
-- Indexes for table `predstavleniq_en`
--
ALTER TABLE `predstavleniq_en`
  ADD PRIMARY KEY (`id_predst`);

--
-- Indexes for table `tblcontact`
--
ALTER TABLE `tblcontact`
  ADD PRIMARY KEY (`id_tblcontact`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `predstavleniq`
--
ALTER TABLE `predstavleniq`
  MODIFY `id_predst` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `predstavleniq_en`
--
ALTER TABLE `predstavleniq_en`
  MODIFY `id_predst` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `tblcontact`
--
ALTER TABLE `tblcontact`
  MODIFY `id_tblcontact` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
