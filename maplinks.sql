-- phpMyAdmin SQL Dump
-- version 4.0.10.18
-- https://www.phpmyadmin.net
--
-- المزود: localhost:3306
-- أنشئ في: 08 أبريل 2018 الساعة 16:42
-- إصدارة المزود: 5.6.39-cll-lve
-- PHP إصدارة: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- قاعدة البيانات: `myshortcuts`
--

-- --------------------------------------------------------

--
-- بنية الجدول `categories`
--

CREATE TABLE IF NOT EXISTS `categories` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `Name` varchar(255) NOT NULL,
  `Ordering` int(11) NOT NULL,
  PRIMARY KEY (`ID`),
  UNIQUE KEY `Name` (`Name`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=1001 ;

--
-- إرجاع أو استيراد بيانات الجدول `categories`
--

INSERT INTO `categories` (`ID`, `Name`, `Ordering`) VALUES
(1, 'ألوان', 1),
(2, 'خطوط غرافك', 2),
(3, 'برامج غرافك', 3),
(4, 'دعم غرافيك', 4),
(5, 'مدارس غرافك', 5),
(6, 'المزيد غرافك', 6),
(7, 'خطوط ويب', 11),
(8, 'برامج ويب', 12),
(9, 'دعم ويب', 13),
(10, 'مدارس ويب', 14),
(11, 'المزيد ويب', 15),
(12, 'أختبار ويب', 21),
(13, 'كتيب اللغات', 22),
(14, 'أستضافة', 23),
(15, 'برامج برمجة ويب', 24),
(16, 'دعم برمجة الويب', 25),
(17, 'مدارس برمجة ويب', 26),
(18, 'المزيد برمجة ويب', 27),
(19, 'كتيب اللغات سطح المكتب', 31),
(20, 'برامج سطح المكتب', 32),
(21, 'دعم سطح المكتب', 33),
(22, 'مدارس سطح المكتب', 34),
(23, 'المزيد سطح المكتب', 35),
(24, 'كتيب اللغات موبايل', 41),
(25, 'برامج موبايل', 42),
(26, 'دعم موبايل', 43),
(27, 'مدارس موبايل', 44),
(28, 'المزيد موبايل', 45),
(29, 'المزيد من البرامج', 51),
(30, 'المزيد من الدعم', 52),
(31, 'المزيد من المدارس', 53),
(32, 'صور', 7),
(1000, 'More', 1000);

-- --------------------------------------------------------

--
-- بنية الجدول `comments`
--

CREATE TABLE IF NOT EXISTS `comments` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `Name` varchar(255) NOT NULL,
  `Comment` text NOT NULL,
  `Status` tinyint(4) NOT NULL DEFAULT '0',
  `Comment_date` date NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- إرجاع أو استيراد بيانات الجدول `comments`
--

INSERT INTO `comments` (`ID`, `Name`, `Comment`, `Status`, `Comment_date`) VALUES
(1, 'مزود الخدمة', 'نرجو أن تحصلو على كل الدعم الازم لأتمام مشاريعكم', 1, '2017-09-28');

-- --------------------------------------------------------

--
-- بنية الجدول `email`
--

CREATE TABLE IF NOT EXISTS `email` (
  `ID` smallint(6) NOT NULL AUTO_INCREMENT,
  `Email` varchar(255) NOT NULL,
  `Email_date` date NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- إرجاع أو استيراد بيانات الجدول `email`
--

INSERT INTO `email` (`ID`, `Email`, `Email_date`) VALUES
(1, 'evel.man2012.ls@gmail.com', '2017-09-28'),
(2, '', '2017-09-28'),
(3, 'moh.mgd@gmail.com', '2017-10-22');

-- --------------------------------------------------------

--
-- بنية الجدول `message`
--

CREATE TABLE IF NOT EXISTS `message` (
  `ID` smallint(128) NOT NULL AUTO_INCREMENT,
  `Email` varchar(255) NOT NULL,
  `address` text NOT NULL,
  `Message` text NOT NULL,
  `dateMessage` date NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- بنية الجدول `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `ID` tinyint(1) NOT NULL,
  `Admin` varchar(255) NOT NULL,
  `Password` varchar(255) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- إرجاع أو استيراد بيانات الجدول `user`
--

INSERT INTO `user` (`ID`, `Admin`, `Password`) VALUES
(0, 'kamal', 'fbbe762d09a0ff938155d0f154b85410383f681b');

-- --------------------------------------------------------

--
-- بنية الجدول `websites`
--

CREATE TABLE IF NOT EXISTS `websites` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `Name` varchar(255) NOT NULL,
  `Domain` varchar(255) NOT NULL,
  `Description` text NOT NULL,
  `Images` varchar(255) NOT NULL,
  `Add_Date` date NOT NULL,
  `Approve` tinyint(4) DEFAULT '0',
  `Stars` smallint(6) NOT NULL DEFAULT '0',
  `cat_ID` int(11) NOT NULL,
  PRIMARY KEY (`ID`),
  UNIQUE KEY `Http` (`Domain`),
  KEY `cat_1` (`cat_ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=35 ;

--
-- إرجاع أو استيراد بيانات الجدول `websites`
--

INSERT INTO `websites` (`ID`, `Name`, `Domain`, `Description`, `Images`, `Add_Date`, `Approve`, `Stars`, `cat_ID`) VALUES
(2, 'color.adobe', 'https://color.adobe.com', 'موقع أدوبي للألوان ', '705959_color-adobe.png', '2017-09-24', 1, 5, 1),
(3, 'colorzilla', 'http://www.colorzilla.com', 'يساعد على أخذ الألوان من المتصفح وأدوات أخرى لتدريجها', '632591_colorzilla.png', '2017-09-24', 1, 4, 1),
(4, 'flatui colors', 'https://flatuicolors.com', ' يوفر ألوان ديجتال وعدة أنماط أخرى', '193628_flatuicolors.png', '2017-09-24', 1, 5, 1),
(5, 'brand colors', 'https://brandcolors.net', 'تدرجات ألوان لجميع الشركات العالمة', '18355_brandcolors.png', '2017-09-24', 1, 4, 1),
(6, 'scheme color', 'http://www.schemecolor.com', 'تنسيقيات للألوان جميلة جدا', '407281_schemecolor.png', '2017-09-24', 1, 3, 1),
(7, 'colours name', 'http://colours.neilorangepeel.com', 'يعطي أسماء الألوان ', '314262_colours-neiloran.png', '2017-09-24', 1, 3, 1),
(8, 'ps-learn', 'https://www.ps-learn.com/%D9%85%D8%AC%D9%85%D9%88%D8%B9%D8%A9-%D8%AE%D8%B7%D9%88%D8%B7-%D8%AC%D8%B1%D8%A7%D9%81-%D8%A7%D9%8A%D8%B3%D8%AA-FONT-ge-ss-%D9%83%D8%A7%D9%85%D9%84%D8%A9/', 'مجموعة خطوط جراف ايست العربية كاملة للفوتوشوب ', '877812_gssFont.png', '2017-09-24', 1, 4, 2),
(9, 'خط بستان', 'https://www.ps-learn.com/%D8%AE%D8%B7-%D8%A8%D8%B3%D8%AA%D8%A7%D9%86-bustan-font/', 'خط بستان العربي الفارسي العريض', '513962_fontbstan.jpg', '2017-09-24', 1, 4, 2),
(10, 'ps blogspot', 'http://extensions-ps.blogspot.com/search/label/Fonts?max-results=15', 'مجموعة خطوط كبيرة ومتنوعة', '668921_ps.blogspot.jpg', '2017-09-24', 1, 4, 2),
(14, 'pinterest', 'https://tr.pinterest.com/', 'الإلهام نمط، وأفكار أخرى', 'pinterest.png', '2017-09-28', 1, 4, 32),
(16, 'richstyle', 'http://richstyle.org/', 'ويحتوي على أيقونات HTML & CSS و مرجع لل framework CSS ', 'empty.jpg', '2017-09-28', 1, 3, 16),
(17, 'library', 'https://fontlibrary.org/en/search?lang=arabic&order', 'اجمل الخطوط العربية للاستخدام البرمجيات', 'font.png', '2017-09-28', 1, 3, 7),
(19, 'google fonts', 'https://fonts.google.com/', 'خطوط جوجل الغنيه عن التعريف', '111362_font-icon.png', '2017-10-28', 1, 5, 7),
(20, 'woorank', 'https://www.woorank.com', ' يقوم بفحص تفصيلي لموقعك و يعطي الموقع تقيم من 150 ', 'woorank.png', '2017-10-28', 1, 3, 12),
(21, 'gtmetrix', 'https://gtmetrix.com/', 'يختبر الموقع و يرجح حلول جيدة', 'gtmetrix.png', '2017-10-28', 1, 3, 12),
(22, 'pexels', 'https://www.pexels.com/', 'موقع رائع لتحميل الصور بجوده عالية', 'pexels.jpg', '2017-10-28', 1, 3, 32),
(23, 'placeholder', 'https://placeholder.com/', 'لاضافه صور تجريبيه لمساعدتك في التطوير', 'placeholder.png', '2017-10-28', 1, 4, 32),
(24, 'clip path marker', 'https://bennettfeely.com/', 'الإلهام نمط، وأفكار أخرى', 'empty.jpg', '2017-10-28', 1, 4, 9),
(25, 'Bluehost', 'https://www.bluehost.com', 'من أفضل وأعرق الشركات الأجنبية فى مجال استضافة', 'bluehost_lg.png', '2017-10-28', 1, 4, 14),
(26, 'a2hosting', 'https://www.a2hosting.com/', 'من اقوي شركات الاستضافة وتتميز بالسرعة العالية جداً', 'a2hosting.jpg', '2017-10-28', 1, 4, 14),
(30, 'siteground', 'https://www.siteground.com', 'ثبات الإستضافة والسرعة العالية ومستوى حمايه مُرتفع', 'siteground.jpg', '2017-10-28', 1, 3, 14),
(31, 'PHP manual', 'http://php.net/manual/en/index.php', 'PHP كتيب لغة ال', 'php.jpg', '2017-10-28', 1, 5, 13),
(33, 'JavaScript manual', 'https://developer.mozilla.org/en-US/docs/Web/JavaScript/Guide', ' JavaScript كتيب لغة ال', 'JavaScript.png', '2017-10-28', 1, 5, 13),
(34, 'Sublime text 3', 'https://www.sublimetext.com/3', ' واجهة بسيطة لكنها أنيقة، بالاضافة لمميزات كثيرة جدا ', 'sublime-text.png', '2017-10-28', 1, 3, 15);

--
-- قيود الجداول المحفوظة
--

--
-- القيود للجدول `websites`
--
ALTER TABLE `websites`
  ADD CONSTRAINT `cat_1` FOREIGN KEY (`cat_ID`) REFERENCES `categories` (`ID`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
