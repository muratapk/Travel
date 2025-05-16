-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Anamakine: 127.0.0.1
-- Üretim Zamanı: 16 May 2025, 18:05:11
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
-- Veritabanı: `trevaldb`
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
(2, 'Furkan', '123', 'Admin'),
(3, 'Furkan', '123', 'Admin'),
(4, 'Furkan', '123', 'Admin'),
(5, 'Furkan', '123', 'Admin'),
(6, 'Furkan', '123', 'Admin'),
(7, 'Furkan', '123', 'Editör'),
(8, 'Şükrü', '123', 'Admin');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `kategori`
--

CREATE TABLE `kategori` (
  `KategoriId` int(11) NOT NULL,
  `KategoriAdi` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_turkish_ci;

--
-- Tablo döküm verisi `kategori`
--

INSERT INTO `kategori` (`KategoriId`, `KategoriAdi`) VALUES
(1, 'apart'),
(2, 'bungalov'),
(3, 'otel'),
(4, 'kiralık ev');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `oda`
--

CREATE TABLE `oda` (
  `OdaId` int(11) NOT NULL,
  `OdaNo` int(11) NOT NULL,
  `OdaAdi` varchar(30) NOT NULL,
  `OdaFiyat` double NOT NULL,
  `OdaDurum` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_turkish_ci;

--
-- Tablo döküm verisi `oda`
--

INSERT INTO `oda` (`OdaId`, `OdaNo`, `OdaAdi`, `OdaFiyat`, `OdaDurum`) VALUES
(1, 1, 'Üç Kişilik Oda', 300, '0'),
(2, 1, 'Üç Kişilik Oda', 410, '0'),
(3, 1, 'Üç Kişilik Oda', 6000, '0'),
(4, 1, 'Üç Kişilik Oda', 6000, '0'),
(5, 2, 'Üç Kişilik Oda', 6000, '0'),
(6, 1, 'Üç Kişilik Oda', 6000, '0'),
(8, 1, 'suit', 410, 'Boş');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `otel`
--

CREATE TABLE `otel` (
  `OtelId` int(11) NOT NULL,
  `OtelAdi` varchar(150) NOT NULL,
  `Lokasyon` varchar(100) NOT NULL,
  `GenelBakis` text NOT NULL,
  `OtelOzellik` varchar(255) NOT NULL,
  `Konum` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_turkish_ci;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `otell`
--

CREATE TABLE `otell` (
  `OtelId` int(11) NOT NULL,
  `OtelAd` varchar(30) NOT NULL,
  `OtelAciklama` varchar(30) NOT NULL,
  `OzelOzellik` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_turkish_ci;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `oteloda`
--

CREATE TABLE `oteloda` (
  `OtelOdaId` int(11) NOT NULL,
  `OtelId` varchar(30) NOT NULL,
  `OdaId` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_turkish_ci;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `otelozellik`
--

CREATE TABLE `otelozellik` (
  `OzelId` int(11) NOT NULL,
  `OzelAd` varchar(30) NOT NULL,
  `OzelSimge` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_turkish_ci;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `otelresimler`
--

CREATE TABLE `otelresimler` (
  `ResimId` int(11) NOT NULL,
  `OtelId` varchar(30) NOT NULL,
  `Resimadi` varchar(30) NOT NULL,
  `ResimYolu` varchar(30) NOT NULL
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

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `rezervasyon`
--

CREATE TABLE `rezervasyon` (
  `RezervasyonId` int(11) NOT NULL,
  `GirisTarih` varchar(11) NOT NULL,
  `CıkısTarih` varchar(11) NOT NULL,
  `Yetiskin` varchar(30) NOT NULL,
  `Cocuk` varchar(30) NOT NULL,
  `UyeId` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_turkish_ci;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `rezerveoda`
--

CREATE TABLE `rezerveoda` (
  `RezerveOdaId` int(11) NOT NULL,
  `OtelId` varchar(11) NOT NULL,
  `OdaId` varchar(30) NOT NULL,
  `GirisTarihi` varchar(30) NOT NULL,
  `CikisTarihi` varchar(30) NOT NULL,
  `OdaDurumu` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_turkish_ci;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `uyelik`
--

CREATE TABLE `uyelik` (
  `UyeId` int(11) NOT NULL,
  `UyeAd` varchar(100) NOT NULL,
  `Cep` varchar(30) NOT NULL,
  `Mail` varchar(70) NOT NULL,
  `Kul` varchar(30) NOT NULL,
  `Sifre` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_turkish_ci;

--
-- Tablo döküm verisi `uyelik`
--

INSERT INTO `uyelik` (`UyeId`, `UyeAd`, `Cep`, `Mail`, `Kul`, `Sifre`) VALUES
(1, '', '', '', '', ''),
(2, '', '', '', '', ''),
(3, '', '55565', 'ktjkgj', 'hsj', '1234'),
(4, 'Alev', '55565', 'ktjkgj', 'hsj', '1234'),
(5, 'Alev', '55565', 'ktjkgj', 'Furkan', '123'),
(6, 'Alev', '55565', 'ktjkgj', 'Furkan', '123'),
(7, 'Alev', '55565', 'ktjkgj', 'Furkan', '123'),
(44, 'Barkın', '', '55', 'Barkın', '123');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `yorumlar`
--

CREATE TABLE `yorumlar` (
  `YorumId` int(11) NOT NULL,
  `OtelId` int(11) NOT NULL,
  `YorumAd` varchar(100) NOT NULL,
  `Yorum` text NOT NULL,
  `Gizle` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_turkish_ci;

--
-- Tablo döküm verisi `yorumlar`
--

INSERT INTO `yorumlar` (`YorumId`, `OtelId`, `YorumAd`, `Yorum`, `Gizle`) VALUES
(1, 0, 'allll', 'sssss', 0),
(2, 0, 'allll', 'sssss', 0),
(3, 0, 'allll', 'sssss', 0);

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
-- Tablo için indeksler `otel`
--
ALTER TABLE `otel`
  ADD PRIMARY KEY (`OtelId`);

--
-- Tablo için indeksler `otell`
--
ALTER TABLE `otell`
  ADD PRIMARY KEY (`OtelId`);

--
-- Tablo için indeksler `oteloda`
--
ALTER TABLE `oteloda`
  ADD PRIMARY KEY (`OtelOdaId`);

--
-- Tablo için indeksler `otelozellik`
--
ALTER TABLE `otelozellik`
  ADD PRIMARY KEY (`OzelId`);

--
-- Tablo için indeksler `otelresimler`
--
ALTER TABLE `otelresimler`
  ADD PRIMARY KEY (`ResimId`);

--
-- Tablo için indeksler `ozellikler`
--
ALTER TABLE `ozellikler`
  ADD PRIMARY KEY (`OzelId`);

--
-- Tablo için indeksler `rezervasyon`
--
ALTER TABLE `rezervasyon`
  ADD PRIMARY KEY (`RezervasyonId`);

--
-- Tablo için indeksler `rezerveoda`
--
ALTER TABLE `rezerveoda`
  ADD PRIMARY KEY (`RezerveOdaId`);

--
-- Tablo için indeksler `uyelik`
--
ALTER TABLE `uyelik`
  ADD PRIMARY KEY (`UyeId`);

--
-- Tablo için indeksler `yorumlar`
--
ALTER TABLE `yorumlar`
  ADD PRIMARY KEY (`YorumId`);

--
-- Dökümü yapılmış tablolar için AUTO_INCREMENT değeri
--

--
-- Tablo için AUTO_INCREMENT değeri `admin`
--
ALTER TABLE `admin`
  MODIFY `AdminId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- Tablo için AUTO_INCREMENT değeri `kategori`
--
ALTER TABLE `kategori`
  MODIFY `KategoriId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Tablo için AUTO_INCREMENT değeri `oda`
--
ALTER TABLE `oda`
  MODIFY `OdaId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Tablo için AUTO_INCREMENT değeri `otel`
--
ALTER TABLE `otel`
  MODIFY `OtelId` int(11) NOT NULL AUTO_INCREMENT;

--
-- Tablo için AUTO_INCREMENT değeri `otell`
--
ALTER TABLE `otell`
  MODIFY `OtelId` int(11) NOT NULL AUTO_INCREMENT;

--
-- Tablo için AUTO_INCREMENT değeri `oteloda`
--
ALTER TABLE `oteloda`
  MODIFY `OtelOdaId` int(11) NOT NULL AUTO_INCREMENT;

--
-- Tablo için AUTO_INCREMENT değeri `otelozellik`
--
ALTER TABLE `otelozellik`
  MODIFY `OzelId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Tablo için AUTO_INCREMENT değeri `otelresimler`
--
ALTER TABLE `otelresimler`
  MODIFY `ResimId` int(11) NOT NULL AUTO_INCREMENT;

--
-- Tablo için AUTO_INCREMENT değeri `ozellikler`
--
ALTER TABLE `ozellikler`
  MODIFY `OzelId` int(11) NOT NULL AUTO_INCREMENT;

--
-- Tablo için AUTO_INCREMENT değeri `rezervasyon`
--
ALTER TABLE `rezervasyon`
  MODIFY `RezervasyonId` int(11) NOT NULL AUTO_INCREMENT;

--
-- Tablo için AUTO_INCREMENT değeri `rezerveoda`
--
ALTER TABLE `rezerveoda`
  MODIFY `RezerveOdaId` int(11) NOT NULL AUTO_INCREMENT;

--
-- Tablo için AUTO_INCREMENT değeri `uyelik`
--
ALTER TABLE `uyelik`
  MODIFY `UyeId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- Tablo için AUTO_INCREMENT değeri `yorumlar`
--
ALTER TABLE `yorumlar`
  MODIFY `YorumId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
