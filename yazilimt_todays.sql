-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Anamakine: localhost:3306
-- Üretim Zamanı: 24 May 2018, 19:06:00
-- Sunucu sürümü: 10.1.33-MariaDB
-- PHP Sürümü: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `yazilimt_todays`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `abone`
--

CREATE TABLE `abone` (
  `abone_id` int(11) NOT NULL,
  `abone_ad` varchar(20) NOT NULL,
  `abone_mail` varchar(45) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Tablo döküm verisi `abone`
--

INSERT INTO `abone` (`abone_id`, `abone_ad`, `abone_mail`) VALUES
(1, 'Tahir TekizbaÅŸ', 'otekizbas@hotmail.com'),
(2, 'Tahir Tekizba?', 'tahir.tekizbas@isik.edu.tr');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `Admin`
--

CREATE TABLE `Admin` (
  `idAdmin` int(11) NOT NULL,
  `firstname` varchar(45) NOT NULL,
  `lastname` varchar(45) NOT NULL,
  `mail` varchar(45) NOT NULL,
  `password` varchar(45) NOT NULL,
  `role` varchar(45) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Tablo döküm verisi `Admin`
--

INSERT INTO `Admin` (`idAdmin`, `firstname`, `lastname`, `mail`, `password`, `role`) VALUES
(1, 'Tahir Onural', 'Tekizbas', 'otekizbas@hotmail.com', 'o1234567', 'admin'),
(2, 'Tahir Onural TekizbaÅŸ', 'TekizbaÅŸ', 'tahir.tekizbas@isik.edu.tr', 'o1234567', 'admin'),
(4, 'didar', 'turanli', 'didartrnl@gmail.com', '142530', 'admin'),
(5, 'dilara', 'turanli', 'dilara.turanli@isik.edu.tr', '142530', 'admin'),
(6, 'aysenur', 'bayram', 'aysenurbayram@isik.edu.tr', '123456', 'admin'),
(7, 'robert', 'oppenheimer', 'robert-oppenheimer@hotmail.com', '123456789+', 'admin');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `Blog`
--

CREATE TABLE `Blog` (
  `idBlog` int(11) NOT NULL,
  `title` varchar(300) COLLATE utf8_turkish_ci NOT NULL,
  `short_text` varchar(500) COLLATE utf8_turkish_ci NOT NULL,
  `text` varchar(3000) COLLATE utf8_turkish_ci NOT NULL,
  `date` datetime DEFAULT NULL,
  `Member_idMember` int(11) NOT NULL,
  `picture` varchar(200) COLLATE utf8_turkish_ci NOT NULL,
  `category` varchar(30) COLLATE utf8_turkish_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `Blog`
--

INSERT INTO `Blog` (`idBlog`, `title`, `short_text`, `text`, `date`, `Member_idMember`, `picture`, `category`) VALUES
(31, '5 Adımla Ramazanda Kas Kaybının Önüne Geçin\r\n', 'Yeterli kalsiyum alın\r\nKalsiyum minerali; kemik yapım, onarımı ve kasların düzenli bir şekilde kasılıp gevşemesi açısından son derece önemlidir. Süt ve süt ürünleri kalsiyum mineralinin en zengin kaynaklarıdır. Günde 2 su bardağı süt veya yoğurt artı 2-3 dilim peynir tüketmek, günlük kalsiyum ihtiyacının karşılanmasını sağlar. Bu sayede yorgunluk halsizlik,...', 'Yeterli kalsiyum alın\r\nKalsiyum minerali; kemik yapım, onarımı ve kasların düzenli bir şekilde kasılıp gevşemesi açısından son derece önemlidir. Süt ve süt ürünleri kalsiyum mineralinin en zengin kaynaklarıdır. Günde 2 su bardağı süt veya yoğurt artı 2-3 dilim peynir tüketmek, günlük kalsiyum ihtiyacının karşılanmasını sağlar. Bu sayede yorgunluk halsizlik, eklem ve kas ağrıları gibi süreçlerin önüne geçilebilir. Kuru meyveler ve pekmez de kalsiyum içerir. Fakat şekeri yükseltme ve ardından hızlıca düşürebilme eğilimi yüksek olduğundan oruç tutulan zaman diliminde açlığı tetikleyebilir. Bu nedenle ramazan süresince çok sık tercih edilmemeli, eğer tüketiliyorsa; 1 tatlı kaşığı pekmez veya 4 adet kuru kayısı veya 2 adet kuru hurma veya 1 adet kuru incir porsiyon kabul edilmelidir.\r\n\r\nFolik asit kaynaklarını ihmal etmeyin\r\nFolik asit hücre yenilenmesinde görevli bir vitamindir. Kas yapısının yenilenmesinde ve korunmasında işlevi vardır. Folik asitin bu önemli işlevinden yeterince yararlanmak için haftada 2–3 kez kuru baklagil ve her gün koyu yeşil yapraklı maydanoz, roka, tere, ıspanak, semiz otu, lahana gibi sebzeler tüketilmelidir.\r\n\r\nKarbonhidratı kesmeyin\r\nGünlük alınan enerjinin ana bileşenidir ve günlük kalorinin % 50-60 ını oluşturmalıdır. Karbonhidrat; ekmek ve tahıllar, kurubaklagiller, meyvelerden belirli porsiyoınlarda sağlandığı sürece enerji ihtiyacını karşılamak için kullanılır. Yetersiz olduğu durumlarda proteinler enerji eldesi için kullanılır ve kas kayıpları olmaya başlar. Bu grup besinler aynı zamanda B grubu vitaminlerinden , posadan da zengindir. Açlığa bağlı sinirlilik, gerginlik gibi semptomların önlenmesine yardımcı olurken, posa ile sağlıklı bir sindirim sistemini de destekler.\r\n\r\nHayvansal ve bitkisel protein kaynaklarını dengeleyin\r\nKas kaybının önüne geçmenin en etkili yollarından biri de et, tavuk, balık gibi hayvansal ve kuru fasülye, nohut, mercimek gibi bitkisel protein kaynaklarını birarada kullanmak ve tek yönlü bir tercihin önüne geçmektir. Haftada 2 kez kırmızı et veya köfte, haftada 2 kez balık veya tavuk ve haftada 2-3 kez; kurubaklagilleri tüketiyor olmak bahsedilen dengeyi yakalamak adına önemli bir adımdır.\r\n\r\nİftardan sonra yürüyüş yapmayı ihmal etmeyin\r\nİftardan 1-1,5 saat sonra yapacağınız 30-40 dakikalık yürüyüş kas aktivasyonu sağlayarak kan dolaşımı ve metabolizmanın hızlanmasına destek olur. Ortalama 45 dakikalık bir yürüyüş 48 saat boyunca kasların daha dinamik olmasına destek verir.', '2018-05-24 00:00:00', 1, 'http://iblog.milliyet.com.tr/imgroot/blogv7/Blog333/2018/05/17/09/588075-3-4-b0491.jpg', 'saglikli_yasam'),
(33, 'Yaşlanma Karşıtı Gıdalar\r\n', 'Her geçen yıl hayatımızın bir bölümünü alıp gidiyor ve biz arkasından seyretmekle yetiniyoruz. Geçen yıllara inat biraz daha genç kalabilmek için milyonlarca liramızı besin desteklerine ve kremlere yatırıyoruz oysaki gençliğin sırrı mutfağımızdan geçiyor. Tercihlerinizde yapacağınız ufak değişimler sizi yıllarca geriye götürecek. İşte beslenmenizde yer vermeniz gereken 10 yaşlanma karşıtı besin', 'Her geçen yıl hayatımızın bir bölümünü alıp gidiyor ve biz arkasından seyretmekle yetiniyoruz. Geçen yıllara inat biraz daha genç kalabilmek için milyonlarca liramızı besin desteklerine ve kremlere yatırıyoruz oysaki gençliğin sırrı mutfağımızdan geçiyor. Tercihlerinizde yapacağınız ufak değişimler sizi yıllarca geriye götürecek. İşte beslenmenizde yer vermeniz gereken 10 yaşlanma karşıtı besin!\r\n\r\nIspanak\r\nAraştırmalar lutein içeren gıdaları sıkça tüketen kadınların ömürlerinin 6 yıl kadar uzadığını ortaya koyuyor. Lutein adlı bileşeneni en çok barındıran gıdalardan biri de ıspanak. Mümkün olduğunca ısıl işleme ve bıçakla ince ince doğrama işlemine maruz kalmadığında vücut luteinden daha fazla yararlanıyor. Bu nedenle salatalarda çiğ olarak tercih edilmesi en çok önerilen formu. Güneş lekelerini önlemesi ve cildi gençleştirmesi ile de ıspanağı haftalık olarak düzenli tercih edilmesi gereken gıdalardan biri yapıyor.\r\n\r\nAvokado\r\nOleik asit adlı tekli doymamış yağ asitlerinden oldukça zengin bir meyvedir. Bu sayede yağ yakımını artırır ve vücuttan kötü yağları kovar. İçeriğinde barındırdığı keratinoid, lutein gibi antioksidanlar ile strese karşı hücre bütünlüğünü korur. Bununla birlikte iyonize potasyum ve folat içeği de vücudun alkaliye geçişini hızlandırır ve vücudu tazeler. Bu sayede kırışıklık ve cildin erken yaşlanmasını engeller.\r\n\r\nCeviz, fındık ve badem\r\nOmega 3 ve omega 6 yağ asitleri, ko-enzim Q10, çinko, selenyum gibi bileşenleri içeriğinde barındırması nedeniyle kalp damar rahatsızlıkları, karaciğer fonksiyon bozuklukları, şeker hastalığı, kanser, saç dökülmesi, parkinson, alzheimer gibi birçok hastalığa karşı koruyucudur.\r\n\r\nZeytin\r\nOleik asit adlı tekli doymamış yağ asidi hücreleri kötü yağlardan korur ve canlılık sağlar. İçeriğinde bulunan E ve C vitaminleri ve polifenoller ile güneş ışınlarının cildi yaşlandırmasını engelliyor. Cildi yatıştırıcı ve nemlendirici etkilere sahip.\r\n\r\nSarımsak\r\nKokusu nedeniyle hakettiği değere göremese de içeriğinde bulunan allisin ve sülfür adlı bileşenler kan dolaşımını harekete geçiriyor ve cildin daha parlak ve canlı görünmesini sağlıyor. Sülfür aynı zamanda vücudun kollojen üretmesine yardımcı olurken bu sayede kırışıklık karşıtı etki gösteriyor.\r\n\r\nKabukları ile yenebilen meyveler\r\nElma, armut, ayva gibi kabukları ile yenebilen meyveler; posa alımının artmasına yardımcı olarak hem daha az kalori alımı sağlar hem de kolesterolü dengeleyerek damarların yıpranmasını engeller. Yapılan çalışmalar yüksek enerji alımı ile yaşlanmanın paralel olduğunu ispatlamıştır. Daha düşük bir enerji alımı adına meyvelerin kabukları ile tüketilmesi tavsiye edilir.\r\n\r\nElma\r\nPektin içeriği ile kolesterolü düşürür. Serbest radikallerin vücuttan atılmasını sağlar ve yaşlanmayı geciktirir. Yapılan çalışmalar; içeriğinde bulunan A vitamini ile cilt kanserine yakalanma riskini azalttığına işaret ediyor.\r\n\r\nAnanas\r\nBromelin içeriği ile kan sulandırıcı ve eklem problemlerini azaltıcı etkiye sahiptir. İçerdiği B vitaminleri say', '2018-05-24 00:00:00', 1, 'http://iblog.milliyet.com.tr/imgroot/blogv7/Blog333/2018/04/10/39/585734-3-4-7e81c.jpg', 'saglikli_yasam'),
(34, 'Kara Buğday Kanserden Koruyor', 'Kara buğday, her ne kadar isminde buğday kelimesini barındırsa da aslında buğday ailesinde yer almıyor. Besinsel içeriğin kaliteli olması nedeniyle pirincin yerini kısa sürede alırken; gluten içermeyen yapısından dolayı çölyak hastaları ve yüksek protein içeriğinden dolayı ise vejetaryen beslenen kişilerin dikkatini kısa zamanda çekmeyi başarmıştır.', 'Kara buğday, her ne kadar isminde buğday kelimesini barındırsa da aslında buğday ailesinde yer almıyor. Besinsel içeriğin kaliteli olması nedeniyle pirincin yerini kısa sürede alırken; gluten içermeyen yapısından dolayı çölyak hastaları ve yüksek protein içeriğinden dolayı ise vejetaryen beslenen kişilerin dikkatini kısa zamanda çekmeyi başarmıştır. Kansere karşı koruyor Tanenlerden zengin oluşu nedeniyle bakteriyel ve viral enfeksiyon riskini azaltırken bağışıklık sistemini güçlendiriyor. Bununla birlikte çözünmez posadan zengin oluşu sebebiyle bağırsak faaliyetlerini düzenleyerek kolon kanserine karşı koruyucu etki gösteriyor. Karabuğday aynı zamanda glutatyon ve süperoksit dismutaz gibi bağlı antioksidanlardan zengindir ve bu tür antioksidanlar sadece bağırsak tarafından aktive edilir. Bu sayede kansere karşı koruyucu özelliği de pekişmektedir. Kolesterol seviyelerini düzenliyor Günde 100 gr karabuğday tüketen 805 Çinli üzerinde yapılan bir araştırmada kan yağları düzeyleri incelenmiştir. Düzenli olarak her gün 100 gr kara buğday tüketen Çinlilerin kapl damar sağlığı açısından kolesterol ve LDL seviyelerinde düşüş gözlemlenirken HDL seviyelerinin ise yükseldiği tespit edilmiştir. İçeriğindeki yüksek magnezyum sayesinde ise kan basıncının düzenlenmesine yardımcıdır. Şeker hastalığı riskini düşürüyor 3600 kadın üzerinde yapılan bir araştırmaya göre; haftada 3 kez tam tahıl ürünü tüketen kadınlarda haftada 1 kez tam tahıl ürünü tüketen kadınlara göre şeker hastalığına yakalanma riski 21 kat daha fazla bulunmuştur. Damar yapısını güçlendirir İçeriğinde bulunan quarsetin ve diğer bioflavonoidler sayesinde kılcal damarları güçlendirerek morarma, varis ve hemoroide karşı koruyucu etkiyi arttırır. Rutin kan pıhtılaşmasını önlemeye yardımcı olur. Aynı zamanda LDL ve histamin üretimini azaltır. Histamin üretiminin azaltılması alerji ve yiyecek intoleransında iyileşme sağlar. Safra taşı oluşumunu engelliyor American Journal of Gastroenterology dergisinde yayınlanan bir çalışmaya göre kara buğday gibi çözünmez posa kaynaklarının sıklıkla tercih edilmesi ve çözünmez posa tüketiminde 5 gr lık artışın safra taşı oluşumunu %10 azalttığı gözlemlenmiştir.', '2018-05-23 00:00:00', 1, 'http://iblog.milliyet.com.tr/imgroot/blogv7/Blog333/2017/10/12/10/571642-3-4-2f79d.jpg', 'doga'),
(35, 'Selam Dünya!', 'Biz dostuz :)', 'Blog içeriği büyük olmalıydı...', '2018-05-24 17:32:05', 1, 'HTTP://www.oguzulusoy.com/foto/1.jpg', 'saglikli_yasam');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `Comment`
--

CREATE TABLE `Comment` (
  `idComment` int(11) NOT NULL,
  `commentor` varchar(90) CHARACTER SET latin1 NOT NULL,
  `comment` varchar(500) CHARACTER SET latin1 NOT NULL,
  `Blog_idBlog` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `Comment_localmarket`
--

CREATE TABLE `Comment_localmarket` (
  `idComment_localmarket` int(11) NOT NULL,
  `commentor` varchar(20) COLLATE utf8_turkish_ci NOT NULL,
  `comment` varchar(200) COLLATE utf8_turkish_ci NOT NULL,
  `idLocalMarket` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `Comment_localmarket`
--

INSERT INTO `Comment_localmarket` (`idComment_localmarket`, `commentor`, `comment`, `idLocalMarket`) VALUES
(6, 'Tahir TekizbaÅŸ', 'koz market', 4),
(5, 'Tahir Tekizbas', 'Yorum denemesi', 2),
(7, 'Tahir Tekizbas', 'yorum', 2);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `contact`
--

CREATE TABLE `contact` (
  `contact_id` int(11) NOT NULL,
  `contact_name` varchar(20) COLLATE utf8_turkish_ci NOT NULL,
  `contact_email` varchar(45) COLLATE utf8_turkish_ci NOT NULL,
  `contact_subject` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `contact_description` varchar(200) COLLATE utf8_turkish_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `contact`
--

INSERT INTO `contact` (`contact_id`, `contact_name`, `contact_email`, `contact_subject`, `contact_description`) VALUES
(1, 'TAHÄ°R', 'tahir.tekizbas@isik.edu.tr', 'konu', 'Ä°Ã§erik'),
(2, 'Tahir O. TekizbaÅŸ', 'otekizbas@msn.com', 'Deneme', 'deneme');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `faq`
--

CREATE TABLE `faq` (
  `faq_id` int(11) NOT NULL,
  `faq_title` varchar(50) NOT NULL,
  `faq_desription` varchar(200) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `Item`
--

CREATE TABLE `Item` (
  `idItem` int(11) NOT NULL,
  `name` varchar(45) CHARACTER SET latin1 NOT NULL,
  `protein` varchar(45) CHARACTER SET latin1 NOT NULL,
  `vitamin` varchar(45) CHARACTER SET latin1 NOT NULL,
  `fat` varchar(45) CHARACTER SET latin1 NOT NULL,
  `carbonhydrate` varchar(45) CHARACTER SET latin1 NOT NULL,
  `mineral` varchar(45) CHARACTER SET latin1 NOT NULL,
  `sugar` varchar(45) COLLATE utf8_turkish_ci NOT NULL,
  `LocalMarket_idLocalMarket` int(11) NOT NULL,
  `time` varchar(45) CHARACTER SET latin1 NOT NULL,
  `picture` varchar(200) CHARACTER SET latin1 NOT NULL,
  `description` varchar(200) CHARACTER SET latin1 NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `Item`
--

INSERT INTO `Item` (`idItem`, `name`, `protein`, `vitamin`, `fat`, `carbonhydrate`, `mineral`, `sugar`, `LocalMarket_idLocalMarket`, `time`, `picture`, `description`) VALUES
(1, 'Brokoli', '12', '7', '6', '35', '3', '1', 2, 'kis', 'http://yazilimtek.com/Web6/assets/images/img-grid-product-1.jpg', 'Brokoli hakkinda her sey.'),
(2, 'Fasulye', '12', '7', '6', '35', '3', '4', 2, 'yaz', 'http://yazilimtek.com/Web6/assets/images/img-grid-product-2.jpg', 'Fasulye hakkinda her sey.'),
(9, 'Greyfurt', '1', '3', '3', '5', '1', '7', 2, 'kis', 'https://png.pngtree.com/element_origin_min_pic/16/12/17/4d61490cf68974ea9dec10c2f5557dad.jpg', 'greyfurt'),
(4, 'Domates', '7', '12', '9', '35', '3', '5', 2, 'yaz', 'http://yazilimtek.com/Web6/assets/images/img-grid-product-4.jpg', 'Domates hakkinda her sey'),
(5, 'Salatalik', '3', '10', '8', '18', '3', '0', 2, 'Yaz', 'http://yazilimtek.com/Web6/assets/images/img-grid-product-5.jpg', 'Salatalik hakkinda her sey'),
(7, 'Üzum', '5', '10', '7', '8', '3', '10', 2, 'Yaz', 'http://yazilimtek.com/Web6/assets/images/img-grid-product-7.jpg', 'Uzum hakkinda her sey'),
(8, 'Armut', '5', '6', '7', '8', '3', '3', 2, 'sonbahar', 'http://yazilimtek.com/Web6/assets/images/img-grid-product-8.jpg', 'Armut hakkinda her sey'),
(12, 'Üzüm', '5', '1', '5', '4', '1', '10', 0, 'ilkbahar', 'http://st1.myideasoft.com/shop/hr/14/myassets/products/866/blackmagic-uzum-fidani.jpg', 'Açiklama'),
(27, 'mandalina', '2', '4', '0', '0', '0', '', 2, 'kiz', 'HTTP://www.oguzulusoy.com/foto/1.jpg', 'Mandalina hakk?nda her ?ey.');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `LocalMarket`
--

CREATE TABLE `LocalMarket` (
  `idLocalMarket` int(11) NOT NULL,
  `name` varchar(45) COLLATE utf8_turkish_ci NOT NULL,
  `phone` varchar(45) COLLATE utf8_turkish_ci NOT NULL,
  `mail` varchar(45) COLLATE utf8_turkish_ci NOT NULL,
  `address` varchar(80) COLLATE utf8_turkish_ci NOT NULL,
  `picture` varchar(200) COLLATE utf8_turkish_ci NOT NULL,
  `description` varchar(45) COLLATE utf8_turkish_ci NOT NULL,
  `Location_idLocation` int(11) NOT NULL,
  `Admin_idAdmin` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `LocalMarket`
--

INSERT INTO `LocalMarket` (`idLocalMarket`, `name`, `phone`, `mail`, `address`, `picture`, `description`, `Location_idLocation`, `Admin_idAdmin`) VALUES
(1, 'Istanbul Market', '2162164553', 'istanbulmarket@gmail.com', 'Kozyatagi / Istanbul', 'http://www.yesilovamarket.com/img/merkez.jpg', 'İstanbul\'un en organik marketi!', 34, 1),
(2, 'Addot Market', '5436017610', 'otekizbas@hotmail.com', 'Kozyatagi', 'http://www.yesilovamarket.com/img/Caremal-Market.jpg', 'ADDOT ekibinin kendi marketi!', 34, 1);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `LocalMarket_Puan`
--

CREATE TABLE `LocalMarket_Puan` (
  `idLocalMarket` int(11) NOT NULL,
  `mail` varchar(45) NOT NULL,
  `Local_Market_Puan` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Tablo döküm verisi `LocalMarket_Puan`
--

INSERT INTO `LocalMarket_Puan` (`idLocalMarket`, `mail`, `Local_Market_Puan`) VALUES
(34, 'otekizbas@hotmail.com', 7),
(5, 'otekizbas@hotmail.com', 10),
(5, 'tahir.tekizbas@isik.edu.tr', 1),
(1, 'didar.turanli@isik.edu.tr', 8),
(6, 'tahir.tekizbas@isik.edu.tr', 10),
(1, 'aysnrbyrm@gmail.com', 9),
(3, 'tahir.tekizbas@isik.edu.tr', 3),
(1, 'tahir.tekizbas@isik.edu.tr', 10),
(1, 'otekizbas@hotmail.com', 8),
(2, 'tahir.tekizbas@isik.edu.tr', 10),
(4, 'otekizbas@hotmail.com', 8);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `Location`
--

CREATE TABLE `Location` (
  `idLocation` int(11) NOT NULL,
  `name` varchar(45) COLLATE utf8_turkish_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `Location`
--

INSERT INTO `Location` (`idLocation`, `name`) VALUES
(34, 'İstanbul'),
(26, 'EskiŞehir');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `Member`
--

CREATE TABLE `Member` (
  `idMember` int(11) NOT NULL,
  `firstname` varchar(45) COLLATE utf8_turkish_ci NOT NULL,
  `lastname` varchar(45) COLLATE utf8_turkish_ci NOT NULL,
  `phone` varchar(45) COLLATE utf8_turkish_ci NOT NULL,
  `mail` varchar(45) COLLATE utf8_turkish_ci NOT NULL,
  `password` varchar(45) COLLATE utf8_turkish_ci NOT NULL,
  `picture` varchar(200) COLLATE utf8_turkish_ci DEFAULT NULL,
  `role` varchar(45) COLLATE utf8_turkish_ci DEFAULT NULL,
  `Admin_idAdmin` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `Member`
--

INSERT INTO `Member` (`idMember`, `firstname`, `lastname`, `phone`, `mail`, `password`, `picture`, `role`, `Admin_idAdmin`) VALUES
(1, 'Tahir', 'Tekizbas', '556454545', 'tahir.tekizbas@isik.edu.tr', 'o12345678', 'http://yazilimtek.com/images/dsa.png', 'Onayli_Uye', 1),
(4, 'didar', 'Turanli', '05373119592', 'didar.turanli@isik.edu.tr', '283467OO+', '283467OO+', 'Normal_Uye', 1),
(5, 'Robert', 'Oppenheimer', '05385207279', 'robert-oppenheimer@hotmail.com', '283467Oo', 'https://www.google.com.tr/images/branding/googlelogo/1x/googlelogo_color_272x92dp.png', 'Normal_Uye', 1),
(6, 'Tahir', 'Tekizbas', '05436017610', 'otekizbas@hotmail.com', 'o10021990', 'http://yazilimtek.com/Web/assets/images/logo.png', 'Onayli_Uye', 1),
(7, 'ayse', 'bayram', '5678900909', 'aysnrbyrm@gmail.com', 'a123456', 'http://yazilimtek.com/Web2/upload/upload/G%C3%BCnde-en-az-bir-elma-t%C3%BCketimi-y%C3%BCzde-28-oran%C4%B1nda-diyabete-yakalanma-riskini-azalt%C4%B1r.jpg', 'Normal_Uye', 1),
(8, 'Tahir', 'deneme', '0543601761', 'tekizbas@isik.edu.tr', 'o12345678', 'http://yazilimtek.com/images/dsa.png', 'Normal_Uye', 1),
(10, 'didar', 'turanli', '2544545645', 'didartrnl@gmail.com', '12345', '', 'Reddedilen_Uye', 1),
(19, 'Tahir o', 'Tekizbas', '5436017610', 'otekizbas@yahoo.com', 'o10021990', 'http://yazilimtek.com/Web6/assets/images/logo.png', 'Onay_Bekliyor', 0);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `suggest_item`
--

CREATE TABLE `suggest_item` (
  `suggest_item_id` int(11) NOT NULL,
  `name` varchar(45) COLLATE utf8_turkish_ci NOT NULL,
  `protein` varchar(45) COLLATE utf8_turkish_ci NOT NULL,
  `vitamin` varchar(45) COLLATE utf8_turkish_ci NOT NULL,
  `fat` varchar(45) COLLATE utf8_turkish_ci NOT NULL,
  `carbonhydrate` varchar(45) COLLATE utf8_turkish_ci NOT NULL,
  `mineral` varchar(45) COLLATE utf8_turkish_ci NOT NULL,
  `sugar` varchar(45) COLLATE utf8_turkish_ci NOT NULL,
  `time` varchar(45) COLLATE utf8_turkish_ci NOT NULL,
  `picture` varchar(200) COLLATE utf8_turkish_ci NOT NULL,
  `description` varchar(200) COLLATE utf8_turkish_ci NOT NULL,
  `referance` varchar(200) COLLATE utf8_turkish_ci NOT NULL,
  `Location_idLocation` int(11) NOT NULL,
  `idLocalMarket` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `suggest_item`
--

INSERT INTO `suggest_item` (`suggest_item_id`, `name`, `protein`, `vitamin`, `fat`, `carbonhydrate`, `mineral`, `sugar`, `time`, `picture`, `description`, `referance`, `Location_idLocation`, `idLocalMarket`) VALUES
(10, 'Üzüm', 'protein1', 'v', '1', 'elma', '1', '10', 'ilkbahar', 'https://yookartik.com/wp-content/uploads/2017/10/1509710_880293211991590_4320205349797929809_n1.jpg', 'Aç?klama', 'Vikipedia', 2, 2),
(14, 'l', 'l', '9', '9', '9', '9', '9', 'yaz', '?', '?', 'k', 34, 3);

--
-- Dökümü yapılmış tablolar için indeksler
--

--
-- Tablo için indeksler `abone`
--
ALTER TABLE `abone`
  ADD PRIMARY KEY (`abone_id`),
  ADD UNIQUE KEY `abone_mail` (`abone_mail`) USING BTREE,
  ADD UNIQUE KEY `abone_ad` (`abone_ad`);

--
-- Tablo için indeksler `Admin`
--
ALTER TABLE `Admin`
  ADD PRIMARY KEY (`idAdmin`),
  ADD UNIQUE KEY `idAdmin_UNIQUE` (`idAdmin`),
  ADD UNIQUE KEY `mail_UNIQUE` (`mail`);

--
-- Tablo için indeksler `Blog`
--
ALTER TABLE `Blog`
  ADD PRIMARY KEY (`idBlog`,`Member_idMember`),
  ADD UNIQUE KEY `idBlog_UNIQUE` (`idBlog`),
  ADD KEY `fk_Blog_Member1_idx` (`Member_idMember`);

--
-- Tablo için indeksler `Comment`
--
ALTER TABLE `Comment`
  ADD PRIMARY KEY (`idComment`,`Blog_idBlog`),
  ADD UNIQUE KEY `idComment_UNIQUE` (`idComment`),
  ADD UNIQUE KEY `comment` (`comment`),
  ADD KEY `fk_Comment_Blog1_idx` (`Blog_idBlog`);

--
-- Tablo için indeksler `Comment_localmarket`
--
ALTER TABLE `Comment_localmarket`
  ADD PRIMARY KEY (`idComment_localmarket`),
  ADD UNIQUE KEY `comment` (`comment`);

--
-- Tablo için indeksler `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`contact_id`);

--
-- Tablo için indeksler `faq`
--
ALTER TABLE `faq`
  ADD PRIMARY KEY (`faq_id`);

--
-- Tablo için indeksler `Item`
--
ALTER TABLE `Item`
  ADD PRIMARY KEY (`idItem`),
  ADD UNIQUE KEY `idItems_UNIQUE` (`idItem`),
  ADD KEY `fk_Items_LocalMarket1_idx` (`LocalMarket_idLocalMarket`);

--
-- Tablo için indeksler `LocalMarket`
--
ALTER TABLE `LocalMarket`
  ADD PRIMARY KEY (`idLocalMarket`,`Location_idLocation`),
  ADD UNIQUE KEY `idLocalMarket_UNIQUE` (`idLocalMarket`),
  ADD KEY `fk_LocalMarket_Location1_idx` (`Location_idLocation`);

--
-- Tablo için indeksler `LocalMarket_Puan`
--
ALTER TABLE `LocalMarket_Puan`
  ADD PRIMARY KEY (`idLocalMarket`,`mail`) USING BTREE;

--
-- Tablo için indeksler `Location`
--
ALTER TABLE `Location`
  ADD PRIMARY KEY (`idLocation`),
  ADD UNIQUE KEY `idLocation_UNIQUE` (`idLocation`);

--
-- Tablo için indeksler `Member`
--
ALTER TABLE `Member`
  ADD PRIMARY KEY (`idMember`) USING BTREE,
  ADD UNIQUE KEY `idMembers_UNIQUE` (`idMember`),
  ADD UNIQUE KEY `phone_UNIQUE` (`phone`),
  ADD UNIQUE KEY `mail_UNIQUE` (`mail`);

--
-- Tablo için indeksler `suggest_item`
--
ALTER TABLE `suggest_item`
  ADD PRIMARY KEY (`suggest_item_id`),
  ADD UNIQUE KEY `name` (`name`);

--
-- Dökümü yapılmış tablolar için AUTO_INCREMENT değeri
--

--
-- Tablo için AUTO_INCREMENT değeri `abone`
--
ALTER TABLE `abone`
  MODIFY `abone_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Tablo için AUTO_INCREMENT değeri `Admin`
--
ALTER TABLE `Admin`
  MODIFY `idAdmin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Tablo için AUTO_INCREMENT değeri `Blog`
--
ALTER TABLE `Blog`
  MODIFY `idBlog` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- Tablo için AUTO_INCREMENT değeri `Comment`
--
ALTER TABLE `Comment`
  MODIFY `idComment` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Tablo için AUTO_INCREMENT değeri `Comment_localmarket`
--
ALTER TABLE `Comment_localmarket`
  MODIFY `idComment_localmarket` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Tablo için AUTO_INCREMENT değeri `contact`
--
ALTER TABLE `contact`
  MODIFY `contact_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Tablo için AUTO_INCREMENT değeri `faq`
--
ALTER TABLE `faq`
  MODIFY `faq_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Tablo için AUTO_INCREMENT değeri `Item`
--
ALTER TABLE `Item`
  MODIFY `idItem` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- Tablo için AUTO_INCREMENT değeri `LocalMarket`
--
ALTER TABLE `LocalMarket`
  MODIFY `idLocalMarket` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Tablo için AUTO_INCREMENT değeri `Location`
--
ALTER TABLE `Location`
  MODIFY `idLocation` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- Tablo için AUTO_INCREMENT değeri `Member`
--
ALTER TABLE `Member`
  MODIFY `idMember` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- Tablo için AUTO_INCREMENT değeri `suggest_item`
--
ALTER TABLE `suggest_item`
  MODIFY `suggest_item_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
