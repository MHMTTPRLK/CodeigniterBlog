-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Anamakine: 127.0.0.1
-- Üretim Zamanı: 03 Haz 2021, 10:54:17
-- Sunucu sürümü: 10.1.36-MariaDB
-- PHP Sürümü: 7.4.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `blogcodeigniter`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `duyurular`
--

CREATE TABLE `duyurular` (
  `duyuru_id` int(11) NOT NULL,
  `baslik` varchar(250) COLLATE utf8_turkish_ci NOT NULL,
  `aciklama` longtext COLLATE utf8_turkish_ci NOT NULL,
  `tarih` varchar(250) COLLATE utf8_turkish_ci NOT NULL,
  `link` varchar(250) COLLATE utf8_turkish_ci NOT NULL,
  `tiksayisi` int(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `duyurular`
--

INSERT INTO `duyurular` (`duyuru_id`, `baslik`, `aciklama`, `tarih`, `link`, `tiksayisi`) VALUES
(3, 'Genetik Bilgisi', 'Genetik ya da kalıtım bilimi[1], biyolojinin organizmalardaki kalıtım ve çeşitliliği inceleyen bir dalı.[2][3] Türkçeye Almancadan geçen[1] genetik sözcüğü 1831 yılında Yunanca γενετικός - genetikos (\"genitif\") sözcüğünden türetildi. Bu sözcüğün kökeni ise γένεσις - genesis (\"köken\") sözcüğüne dayanır.[4]\r\n\r\nCanlıların özelliklerinin kalıtsal olduğunun bilinci ile tarih öncesi çağlardan beri bitki ve hayvanlar ıslah edilmiştir. Bununla birlikte, kalıtımsal aktarım mekanizmalarını anlamaya çalışan modern genetik bilimi ancak 19. yüzyılın ortalarında, Gregor Mendel’in çalışmasıyla başlamıştır.[5] Mendel, kalıtımın fiziksel temelini bilemediyse de, bu özelliklerin ayrık (kesikli) bir tarzda aktarıldığını gözlemlemiştir; günümüzde bu kalıtım birimlerine \"gen\" adı verilmektedir.\r\n\r\nGenler DNA\'da belli bölgelere karşılık gelir. DNA dört tip nükleotitten oluşan bir zincir moleküldür. Bu zincir üzerinde nükleotitlerin dizisi, organizmaların kalıt aldığı genetik bilgidir (enformasyon). Doğada DNA, iki zincirli bir yapıya sahiptir. DNA\'daki her \"iplikçik\"teki nükleotitler birbirini tamamlar, yani her iplikçik, kendine eş yeni bir iplikçik oluşturmak için bir kalıp olabilme özelliğine sahiptir. Bu, genetik bilginin kopyalanması ve kalıtımı için işleyen fiziksel mekanizmadır.\r\n\r\nNükleotitlerin DNA’daki dizilişi, hücre tarafından aminoasit zincirleri üretmek için kullanılır. Bunlardan protein oluşur. Bir proteindeki amino asitlerin sırası, gendeki nükleotitlerin sırasına karşılık gelir. Aradaki bu ilişkiye genetik kod denir. Amino asitlerin bir proteindeki dizilişi, proteinin nasıl bir üç boyutlu şekil alacağını belirler. Bu yapının şekli de proteinin fonksiyonundan sorumludur. Hücrelerin yaşamaları ve üremeleri için gerekli hemen hemen tüm fonksiyonları proteinler icra ederler. DNA dizisindeki bir değişim, bir proteinin amino asit dizisini ve dolayısıyla onun şekli ve fonksiyonunu değiştirir: Bu, hücrede ve onun bağlı bulunduğu canlıda önemli sonuçlara yol açabilir.\r\n\r\nGenetik, organizmaların görünüşünün ve davranışının belirlenmesinde önemli bir rol oynuyorsa da, sonucun oluşmasında, organizmanın çevre ile etkileşimi ve genetik birlikte etki eder. Örneğin genler kişinin boyunun uzunluğunda bir rol oynuyorsa da, kişinin çocukluk çağındaki beslenmesinin ve sağlığının da büyük bir etkisi vardır.', '2021-05-29', 'genetik-bilgisi', 0),
(5, 'Deneme5', 'Deneme5 Açıklama', '2021-06-02', 'libdsfsdf', 0);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `iletisim`
--

CREATE TABLE `iletisim` (
  `id` int(11) NOT NULL,
  `adsoyad` varchar(250) COLLATE utf8_turkish_ci NOT NULL,
  `email` varchar(250) COLLATE utf8_turkish_ci NOT NULL,
  `telefon` varchar(250) COLLATE utf8_turkish_ci NOT NULL,
  `mesaj` text COLLATE utf8_turkish_ci NOT NULL,
  `tarih` date NOT NULL,
  `durum` int(2) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `iletisim`
--

INSERT INTO `iletisim` (`id`, `adsoyad`, `email`, `telefon`, `mesaj`, `tarih`, `durum`) VALUES
(2, 'Mehmet Parlak', 'mhmttparlak@gmail.com', '05555555555', 'test Mesajı', '2021-06-02', 0),
(3, 'dsad', 'asd@gmail.com', '32111111111', 'asdasdas', '2021-06-02', 1),
(4, 'asd', 'asdsaa@gmail.com', '54555554455', 'asdasdasd', '2021-06-02', 0);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `kategori`
--

CREATE TABLE `kategori` (
  `id` int(11) NOT NULL,
  `name` varchar(250) COLLATE utf8_turkish_ci NOT NULL,
  `kasef` varchar(250) COLLATE utf8_turkish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `kategori`
--

INSERT INTO `kategori` (`id`, `name`, `kasef`) VALUES
(2, 'Yaz Okulu 2', 'yaz-okulu-2'),
(3, 'Deneme 1', 'deneme-1');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `yonetici`
--

CREATE TABLE `yonetici` (
  `yid` int(250) NOT NULL,
  `yadisoyadi` varchar(250) COLLATE utf8_turkish_ci NOT NULL,
  `ykadi` varchar(250) COLLATE utf8_turkish_ci NOT NULL,
  `ysifre` varchar(250) COLLATE utf8_turkish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `yonetici`
--

INSERT INTO `yonetici` (`yid`, `yadisoyadi`, `ykadi`, `ysifre`) VALUES
(1, 'Mehmet Parlak', 'admin', '123456');

--
-- Dökümü yapılmış tablolar için indeksler
--

--
-- Tablo için indeksler `duyurular`
--
ALTER TABLE `duyurular`
  ADD PRIMARY KEY (`duyuru_id`);

--
-- Tablo için indeksler `iletisim`
--
ALTER TABLE `iletisim`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `yonetici`
--
ALTER TABLE `yonetici`
  ADD PRIMARY KEY (`yid`);

--
-- Dökümü yapılmış tablolar için AUTO_INCREMENT değeri
--

--
-- Tablo için AUTO_INCREMENT değeri `duyurular`
--
ALTER TABLE `duyurular`
  MODIFY `duyuru_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Tablo için AUTO_INCREMENT değeri `iletisim`
--
ALTER TABLE `iletisim`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Tablo için AUTO_INCREMENT değeri `kategori`
--
ALTER TABLE `kategori`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Tablo için AUTO_INCREMENT değeri `yonetici`
--
ALTER TABLE `yonetici`
  MODIFY `yid` int(250) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
