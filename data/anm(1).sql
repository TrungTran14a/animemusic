-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th12 21, 2020 lúc 06:12 PM
-- Phiên bản máy phục vụ: 10.4.11-MariaDB
-- Phiên bản PHP: 7.4.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `anm`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `dschool`
--

CREATE TABLE `dschool` (
  `IdSchool` int(100) NOT NULL,
  `IdF` int(200) NOT NULL,
  `IdGen` int(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `dschool`
--

INSERT INTO `dschool` (`IdSchool`, `IdF`, `IdGen`) VALUES
(1, 1, 1),
(2, 2, 1),
(3, 3, 36),
(4, 2, 2),
(5, 2, 4),
(6, 2, 12),
(7, 3, 36),
(8, 3, 8),
(9, 3, 2),
(10, 3, 3),
(11, 3, 4);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `film`
--

CREATE TABLE `film` (
  `IdF` int(200) NOT NULL,
  `Namee` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `Namej` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `Namer` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `Eps` int(200) NOT NULL,
  `LongF` varchar(200) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `YearF` date NOT NULL,
  `ViewF` int(200) NOT NULL,
  `RankF` int(200) NOT NULL,
  `AirF` date NOT NULL,
  `IdType` int(200) NOT NULL,
  `IdStt` int(200) NOT NULL,
  `IdSea` int(200) NOT NULL,
  `IdStu` int(200) NOT NULL,
  `IdRa` int(200) NOT NULL,
  `yearFF` int(200) NOT NULL,
  `IdGen` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `film`
--

INSERT INTO `film` (`IdF`, `Namee`, `Namej`, `Namer`, `Eps`, `LongF`, `YearF`, `ViewF`, `RankF`, `AirF`, `IdType`, `IdStt`, `IdSea`, `IdStu`, `IdRa`, `yearFF`, `IdGen`) VALUES
(1, 'Your Name', '君の名は', 'Kimi no nawa', 1, '1h 46 min', '2016-08-26', 3012, 1, '0000-00-00', 1, 3, 4, 1, 1, 2018, 0),
(2, 'Weathering With You ', '天気の子 ', 'Tenki No Ko', 1, ' 1 hr. 54 min.', '2019-07-19', 2513, 2, '2019-07-19', 2, 3, 1, 1, 1, 2019, 0),
(3, 'Clannad After Story', 'クラナド アフターストーリー', 'Clannad After Story', 24, '24 min. per ep.', '2008-10-03', 1000, 3, '2008-10-03', 2, 3, 3, 2, 1, 2008, 0);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `genres`
--

CREATE TABLE `genres` (
  `IdGen` int(200) NOT NULL,
  `NGen` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `genres`
--

INSERT INTO `genres` (`IdGen`, `NGen`) VALUES
(1, 'School'),
(2, 'Drama'),
(3, 'Supernatural'),
(4, 'Romance'),
(5, 'Action'),
(6, 'Adventure'),
(7, 'Cars'),
(8, 'Comedy'),
(9, 'Dementia'),
(10, 'Demon'),
(11, 'Ecchi'),
(12, 'Fantasy'),
(13, 'Game'),
(14, 'Harem'),
(15, 'Hentai'),
(16, 'Historical'),
(17, 'Horror'),
(18, 'Josei'),
(19, 'Kids'),
(20, 'Magic'),
(21, 'Martial Arts'),
(22, 'Mecha'),
(23, 'Military'),
(24, 'Music'),
(25, 'Mystery'),
(26, 'Parody'),
(27, 'Police'),
(28, 'Psychological'),
(29, 'Samurai'),
(30, 'Sci-Fi'),
(31, 'Seinen'),
(32, 'Shoujo'),
(33, 'Shoujo Ai'),
(34, 'Shounen'),
(35, 'Shounen Ai'),
(36, 'Slice of Life'),
(37, 'Space'),
(38, 'Sports'),
(39, 'Super Power'),
(40, 'Thriller'),
(41, 'Vampire'),
(42, 'Yaoi'),
(43, 'Yuri');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `photo`
--

CREATE TABLE `photo` (
  `IdP` int(200) NOT NULL,
  `NameP` varchar(200) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `IdF` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `photo`
--

INSERT INTO `photo` (`IdP`, `NameP`, `IdF`) VALUES
(1, 'image/mbody/ava/836073.png', 1),
(2, 'image/mbody/ava/837403.jpg', 2),
(3, 'image/mbody/ava/clannad.jpg', 3);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `rating`
--

CREATE TABLE `rating` (
  `IdRa` int(200) NOT NULL,
  `Nra` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `rating`
--

INSERT INTO `rating` (`IdRa`, `Nra`) VALUES
(1, 'PG-13 - Teens 13 or older ');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `season`
--

CREATE TABLE `season` (
  `IdSea` int(200) NOT NULL,
  `NSea` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `season`
--

INSERT INTO `season` (`IdSea`, `NSea`) VALUES
(1, 'Spring'),
(2, 'Summer'),
(3, 'Autumn'),
(4, 'Winter');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `singer`
--

CREATE TABLE `singer` (
  `IdSin` int(200) NOT NULL,
  `NameSin` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `singer`
--

INSERT INTO `singer` (`IdSin`, `NameSin`) VALUES
(1, 'RADWIMPS');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `song`
--

CREATE TABLE `song` (
  `IdSong` int(200) NOT NULL,
  `NameS` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `IdSin` int(200) NOT NULL,
  `IdF` int(200) NOT NULL,
  `LinkS` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `song`
--

INSERT INTO `song` (`IdSong`, `NameS`, `IdSin`, `IdF`, `LinkS`) VALUES
(1, 'Yume Tourou (夢灯籠)', 1, 1, 'Yumetourou.mp3'),
(2, 'some new song', 1, 1, ''),
(3, 'Ai ni dekiru koto wa mada aru kai (愛にできることはまだあるかい)', 1, 2, 'Is There Still Anything That Love Can Do 愛にできることはまだあるかい？.mp3'),
(4, 'Toki wo Kizamu Uta (時を刻む唄)', 1, 3, 'not');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `status`
--

CREATE TABLE `status` (
  `IdStt` int(200) NOT NULL,
  `NStt` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `status`
--

INSERT INTO `status` (`IdStt`, `NStt`) VALUES
(1, 'Waitting'),
(2, 'Airing '),
(3, 'Finished Airing ');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `studio`
--

CREATE TABLE `studio` (
  `IdStu` int(200) NOT NULL,
  `NameStu` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `studio`
--

INSERT INTO `studio` (`IdStu`, `NameStu`) VALUES
(1, 'CoMix Wave Films'),
(2, 'Kyoto Animation');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `thumb`
--

CREATE TABLE `thumb` (
  `IdThu` int(200) NOT NULL,
  `LinkTh` varchar(200) NOT NULL,
  `IdF` int(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `thumb`
--

INSERT INTO `thumb` (`IdThu`, `LinkTh`, `IdF`) VALUES
(1, 'image/mbody/wall/11.jpg', 1),
(2, 'image/mbody/wall/12.jpg', 2);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `type`
--

CREATE TABLE `type` (
  `IdType` int(200) NOT NULL,
  `NType` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `type`
--

INSERT INTO `type` (`IdType`, `NType`) VALUES
(1, 'Movie'),
(2, 'TV Show');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `wallpaper`
--

CREATE TABLE `wallpaper` (
  `IdW` int(200) NOT NULL,
  `NameW` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `IdF` int(200) NOT NULL,
  `LinkW` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `numW` int(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `wallpaper`
--

INSERT INTO `wallpaper` (`IdW`, `NameW`, `IdF`, `LinkW`, `numW`) VALUES
(1, '11.jpg', 1, 'image/mbody/wall/', 1),
(2, '12.jpg', 1, 'image/mbody/wall/', 2),
(4, '13.jpg', 1, 'image/mbody/wall/', 3),
(5, '14.jpg', 1, 'image/mbody/wall/', 4),
(6, '15.jpg', 1, 'image/mbody/wall/', 5),
(7, '16.jpg', 1, 'image/mbody/wall/', 6),
(8, '17.jpg', 1, 'image/mbody/wall/', 7),
(9, '18.jpg', 1, 'image/mbody/wall/', 8),
(10, '19.jpg', 1, 'image/mbody/wall/', 9),
(11, '110.jpg', 1, 'image/mbody/wall/', 10),
(12, '111.jpg', 1, 'image/mbody/wall/', 11),
(13, '112.jpg', 1, 'image/mbody/wall/', 12),
(14, '11.jpg', 2, 'image/mbody/wall/ 	', 1);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `dschool`
--
ALTER TABLE `dschool`
  ADD PRIMARY KEY (`IdSchool`);

--
-- Chỉ mục cho bảng `film`
--
ALTER TABLE `film`
  ADD PRIMARY KEY (`IdF`);

--
-- Chỉ mục cho bảng `genres`
--
ALTER TABLE `genres`
  ADD PRIMARY KEY (`IdGen`);

--
-- Chỉ mục cho bảng `photo`
--
ALTER TABLE `photo`
  ADD PRIMARY KEY (`IdP`);

--
-- Chỉ mục cho bảng `rating`
--
ALTER TABLE `rating`
  ADD PRIMARY KEY (`IdRa`);

--
-- Chỉ mục cho bảng `season`
--
ALTER TABLE `season`
  ADD PRIMARY KEY (`IdSea`);

--
-- Chỉ mục cho bảng `singer`
--
ALTER TABLE `singer`
  ADD PRIMARY KEY (`IdSin`);

--
-- Chỉ mục cho bảng `song`
--
ALTER TABLE `song`
  ADD PRIMARY KEY (`IdSong`);

--
-- Chỉ mục cho bảng `status`
--
ALTER TABLE `status`
  ADD PRIMARY KEY (`IdStt`);

--
-- Chỉ mục cho bảng `studio`
--
ALTER TABLE `studio`
  ADD PRIMARY KEY (`IdStu`);

--
-- Chỉ mục cho bảng `thumb`
--
ALTER TABLE `thumb`
  ADD PRIMARY KEY (`IdThu`);

--
-- Chỉ mục cho bảng `type`
--
ALTER TABLE `type`
  ADD PRIMARY KEY (`IdType`);

--
-- Chỉ mục cho bảng `wallpaper`
--
ALTER TABLE `wallpaper`
  ADD PRIMARY KEY (`IdW`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `dschool`
--
ALTER TABLE `dschool`
  MODIFY `IdSchool` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT cho bảng `film`
--
ALTER TABLE `film`
  MODIFY `IdF` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT cho bảng `genres`
--
ALTER TABLE `genres`
  MODIFY `IdGen` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- AUTO_INCREMENT cho bảng `photo`
--
ALTER TABLE `photo`
  MODIFY `IdP` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT cho bảng `rating`
--
ALTER TABLE `rating`
  MODIFY `IdRa` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT cho bảng `season`
--
ALTER TABLE `season`
  MODIFY `IdSea` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT cho bảng `singer`
--
ALTER TABLE `singer`
  MODIFY `IdSin` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT cho bảng `song`
--
ALTER TABLE `song`
  MODIFY `IdSong` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT cho bảng `status`
--
ALTER TABLE `status`
  MODIFY `IdStt` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT cho bảng `studio`
--
ALTER TABLE `studio`
  MODIFY `IdStu` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT cho bảng `thumb`
--
ALTER TABLE `thumb`
  MODIFY `IdThu` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT cho bảng `type`
--
ALTER TABLE `type`
  MODIFY `IdType` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT cho bảng `wallpaper`
--
ALTER TABLE `wallpaper`
  MODIFY `IdW` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
