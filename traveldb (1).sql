-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Anamakine: 127.0.0.1
-- Üretim Zamanı: 09 May 2025, 18:11:06
-- Sunucu sürümü: 10.4.32-MariaDB
-- PHP Sürümü: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `traveldb`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `admin`
--

CREATE TABLE `admin` (
  `AdminId` int(11) NOT NULL,
  `Kul` varchar(30) NOT NULL,
  `Sifre` varchar(30) NOT NULL,
  `Yetki` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_turkish_ci;

--
-- Tablo döküm verisi `admin`
--

INSERT INTO `admin` (`AdminId`, `Kul`, `Sifre`, `Yetki`) VALUES
(8, 'sselin', '123', 'Admin'),
(9, 'Can', '1234', 'Admin');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `kategori`
--

CREATE TABLE `kategori` (
  `KategoriId` int(11) NOT NULL,
  `KategoriAdi` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_turkish_ci;

--
-- Tablo döküm verisi `kategori`
--

INSERT INTO `kategori` (`KategoriId`, `KategoriAdi`) VALUES
(1, 'Otel'),
(2, 'Motel'),
(3, 'Apart'),
(4, 'Bungalov'),
(5, 'Kiralık Daire'),
(6, 'Kiralık Oda'),
(7, 'Pansiyon'),
(8, 'Gecelik Oda');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `oda`
--

CREATE TABLE `oda` (
  `OdaId` int(11) NOT NULL,
  `OdaNo` int(11) NOT NULL,
  `OdaAdi` varchar(30) NOT NULL,
  `OdaFiyat` double NOT NULL,
  `OdaDurum` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_turkish_ci;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `ozellikler`
--

CREATE TABLE `ozellikler` (
  `OzelId` int(11) NOT NULL,
  `OzelAd` varchar(30) NOT NULL,
  `OzelSimge` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_turkish_ci;

--
-- Tablo döküm verisi `ozellikler`
--

INSERT INTO `ozellikler` (`OzelId`, `OzelAd`, `OzelSimge`) VALUES
(1, 'Selim', 'asdf');

--
-- Dökümü yapılmış tablolar için indeksler
--

--
-- Tablo için indeksler `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`AdminId`);

--
-- Tablo için indeksler `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`KategoriId`);

--
-- Tablo için indeksler `oda`
--
ALTER TABLE `oda`
  ADD PRIMARY KEY (`OdaId`);

--
-- Tablo için indeksler `ozellikler`
--
ALTER TABLE `ozellikler`
  ADD PRIMARY KEY (`OzelId`);

--
-- Dökümü yapılmış tablolar için AUTO_INCREMENT değeri
--

--
-- Tablo için AUTO_INCREMENT değeri `admin`
--
ALTER TABLE `admin`
  MODIFY `AdminId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- Tablo için AUTO_INCREMENT değeri `kategori`
--
ALTER TABLE `kategori`
  MODIFY `KategoriId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Tablo için AUTO_INCREMENT değeri `oda`
--
ALTER TABLE `oda`
  MODIFY `OdaId` int(11) NOT NULL AUTO_INCREMENT;

--
-- Tablo için AUTO_INCREMENT değeri `ozellikler`
--
ALTER TABLE `ozellikler`
  MODIFY `OzelId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
