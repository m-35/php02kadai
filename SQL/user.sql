-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- ホスト: 127.0.0.1
-- 生成日時: 2024-06-29 00:14:48
-- サーバのバージョン： 10.4.32-MariaDB
-- PHP のバージョン: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- データベース: `php02kadai`
--

-- --------------------------------------------------------

--
-- テーブルの構造 `user`
--

CREATE TABLE `user` (
  `id` int(12) NOT NULL,
  `name` varchar(64) NOT NULL,
  `capital` int(12) NOT NULL,
  `industry` varchar(64) NOT NULL,
  `email` varchar(128) NOT NULL,
  `password` varchar(4) NOT NULL,
  `date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- テーブルのデータのダンプ `user`
--

INSERT INTO `user` (`id`, `name`, `capital`, `industry`, `email`, `password`, `date`) VALUES
(4, 'A株式会社', 1000, '通信・サービス', 'example@aaa.co.jp', '1111', '2024-06-29 06:16:48'),
(5, '株式会社B', 500, '小売', 'example@bbb.co.jp', '2222', '2024-06-29 06:17:58'),
(6, '株式会社C', 1800, '通信・サービス', 'example@ccc.co.jp', '3333', '2024-06-29 06:19:10'),
(11, 'D株式会社', 1500, '通信・サービス', 'example@ddd.co.jp', '4444', '2024-06-29 06:40:11'),
(13, '株式会社E', 200, 'メーカー', 'example@eee.co.jp', '5555', '2024-06-29 06:48:23');

--
-- ダンプしたテーブルのインデックス
--

--
-- テーブルのインデックス `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- ダンプしたテーブルの AUTO_INCREMENT
--

--
-- テーブルの AUTO_INCREMENT `user`
--
ALTER TABLE `user`
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
