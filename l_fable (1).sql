-- phpMyAdmin SQL Dump
-- version 4.5.0.2
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 05, 2015 at 02:35 AM
-- Server version: 10.0.17-MariaDB
-- PHP Version: 5.5.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `l_fable`
--

-- --------------------------------------------------------

--
-- Table structure for table `abouts`
--

CREATE TABLE `abouts` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `subtitle` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `description` text COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `abouts`
--

INSERT INTO `abouts` (`id`, `title`, `subtitle`, `description`, `created_at`, `updated_at`) VALUES
(1, 'THE TALES OF FABULOUS FABLES', 'SITUATED AT THE HEART OF ONE OF THEBUSIEST CITIES IN THE WORLD, LIES A SECRET PLACE TUCKED AWAY IN THE CONCRETE JUNGLE THAT IS THE SUDIRMAN CENTRAL BUSINESS DISTRICT OF JAKARTA', '<p>This 1000m2 venue set in a strategic location with glass walls, a glass roof, and a large outdor allows its patrons to relax and enjoy the cityscape while dining during the day, and party with the best local and international DJs at night. With its modern classic fairytale inspired interior, 3 bars, stunning view of SCBD, club capacity of 800 people and dining area of 48, Fable Lounge &amp; Dining aims to be Jakarta&#39;s leading venue for fine dining, lounge, parties, and launch events.</p>\r\n', '2015-11-17 16:45:30', '2015-11-18 00:47:06');

-- --------------------------------------------------------

--
-- Table structure for table `blogs`
--

CREATE TABLE `blogs` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `subtitle` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `description` text COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `blogs`
--

INSERT INTO `blogs` (`id`, `title`, `subtitle`, `description`, `created_at`, `updated_at`) VALUES
(1, 'THE TALES OF FABULOUS FABLES', 'SITUATED AT THE HEART OF ONE THE BUSIEST CITIES IN THE WORD, LIES A SERCET PLACE TUCKED AWAY IN THE CONCRETE JUNGLE', '<p>Idi doluptatur sit adignate ius et ut omni te namet lacepro venturit as dolectur, sa ne comniento te nobis dolorro videreh enimus.</p>\r\n\r\n<p>Cerumquas ex et quiaspe pre excepel entur? Totas conse nobit ex endandae veribero doluptas pos eumquassum earchit endandit destem num re solut ullenis reribus, testi coreped igentotas quo everrup taturem exerror iberibusam experore volorro quos volo beatur sed que lamus nime soluptatio.</p>\r\n\r\n<p>Sincimi liquia vent pro cuptae labor aut experum sinciam aut evendescia invendigent volorepro optatur? Delitatur auta duntincil ipsae que si beaquae lab ipis sed quae lanihici omnis most faccus sincte de essus a experum nest, quiatquassit et et eossusandis a dis doluptatur mint velesciae eaquatemolut a con consequ atemquatibus etur sim rerferrunt veliqui diossit optat.</p>\r\n', '2015-11-18 04:57:54', '2015-11-25 06:05:27'),
(2, 'THE TALES OF FABULOUS FABLES', 'SITUATED AT THE HEART OF ONE THE BUSIEST CITIES IN THE WORD, LIES A SERCET PLACE TUCKED AWAY IN THE CONCRETE JUNGLE', '<p>Idi doluptatur sit adignate ius et ut omni te namet lacepro venturit as dolectur, sa ne comniento te nobis dolorro videreh enimus.</p>\r\n\r\n<p>Cerumquas ex et quiaspe pre excepel entur? Totas conse nobit ex endandae veribero doluptas pos eumquassum earchit endandit destem num re solut ullenis reribus, testi coreped igentotas quo everrup taturem exerror iberibusam experore volorro quos volo beatur sed que lamus nime soluptatio.</p>\r\n\r\n<p>Sincimi liquia vent pro cuptae labor aut experum sinciam aut evendescia invendigent volorepro optatur? Delitatur auta duntincil ipsae que si beaquae lab ipis sed quae lanihici omnis most faccus sincte de essus a experum nest, quiatquassit et et eossusandis a dis doluptatur mint velesciae eaquatemolut a con consequ atemquatibus etur sim rerferrunt veliqui diossit optat.</p>\r\n', '2015-11-18 04:57:54', '2015-11-25 06:05:36');

-- --------------------------------------------------------

--
-- Table structure for table `category_menus`
--

CREATE TABLE `category_menus` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `category_menus`
--

INSERT INTO `category_menus` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'FOOD AND BEVERAGES', '2015-11-18 04:58:28', '2015-11-18 04:58:28'),
(2, 'DESSERTS', '2015-11-18 04:58:43', '2015-11-18 04:58:43');

-- --------------------------------------------------------

--
-- Table structure for table `covers`
--

CREATE TABLE `covers` (
  `id` int(10) UNSIGNED NOT NULL,
  `firstquote` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `lastquote` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `video` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `music` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `title` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `band` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `album` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `date` date NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `covers`
--

INSERT INTO `covers` (`id`, `firstquote`, `lastquote`, `video`, `music`, `title`, `band`, `album`, `date`, `created_at`, `updated_at`) VALUES
(1, 'THE ILLUMINATION', 'OF LIGHT', 'videoe3.mp4', 'Hello.mp3', 'Flashlight', 'Jessie J', 'NEW ALBUM', '2015-11-10', '2015-11-19 12:22:41', '2015-12-04 05:07:24');

-- --------------------------------------------------------

--
-- Table structure for table `djs`
--

CREATE TABLE `djs` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `type` varchar(1) COLLATE utf8_unicode_ci NOT NULL,
  `title` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `description` text COLLATE utf8_unicode_ci NOT NULL,
  `facebook` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `twitter` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `instagram` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `image` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `background` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `djs`
--

INSERT INTO `djs` (`id`, `name`, `type`, `title`, `description`, `facebook`, `twitter`, `instagram`, `image`, `background`, `created_at`, `updated_at`) VALUES
(1, 'DJ TIESTO', '1', 'I COULD NOT HAVE ASKED FOR MORE', '<p>DJ TIESTOV, que caut nihil ut L. Vidincul utelatrit. Uribustopimed porum sensus no. Urnum acarorum estumunum in out erfitra equemun iliricade plibus An dent? Nam iam inte, viro, que intenatam, caut veridemne consta, crivivit, sena omnicae consultortas porempe rebatus patis ciora? Nam destem escerinat firturnum pliciis et de priorum</p>\r\n', 'tiesto', 'tiesto', 'tiesto', 'dj1.jpg', 'backdj1.jpg', '2015-11-22 13:50:33', '2015-12-04 01:59:51'),
(2, 'DJ SRILLEX', '1', 'JUDUL SI SRILLEX DI TAMPILKAN DISINI', 'DJ SRILLEX, Vidincul utelatrit. Que caut nihil ut L. Urnum acarorum estumunum in out erfitra equemun iliricade plibus An dent? Nam iam inte, viro, que intenatam, Uribustopimed porum sensus no. Caut veridemne consta, crivivit. Nam destem escerinat firturnum pliciis et de priorum sena omnicae consultortas porempe rebatus patis ciora?', 'srillex', 'srillex', 'srillex', 'dj2.jpg', 'backdj2.jpg', '2015-11-22 13:50:33', '0000-00-00 00:00:00'),
(3, 'DJ CHUCKIE', '2', 'I COULD NOT HAVE ASKED FOR MORE', '<p>DJ TIESTOV, que caut nihil ut L. Vidincul utelatrit. Uribustopimed porum sensus no. Urnum acarorum estumunum in out erfitra equemun iliricade plibus An dent? Nam iam inte, viro, que intenatam, caut veridemne consta, crivivit, sena omnicae consultortas porempe rebatus patis ciora? Nam destem escerinat firturnum pliciis et de priorum</p>\r\n', 'Chuckie', 'Chuckie', 'Chuckie', 'dj3.jpg', 'backdj3.jpg', '2015-11-22 13:50:33', '2015-11-25 17:12:18'),
(4, 'DJ UNA', '2', 'I COULD NOT HAVE ASKED FOR MORE', '<p>DJ TIESTOV, que caut nihil ut L. Vidincul utelatrit. Uribustopimed porum sensus no. Urnum acarorum estumunum in out erfitra equemun iliricade plibus An dent? Nam iam inte, viro, que intenatam, caut veridemne consta, crivivit, sena omnicae consultortas porempe rebatus patis ciora? Nam destem escerinat firturnum pliciis et de priorum</p>\r\n', 'una', 'una', 'una', 'dj4.jpg', 'backdj4.jpg', '2015-11-22 13:50:33', '2015-11-25 17:12:18'),
(5, 'DJ YASMIN', '1', 'Best DJ Of The Year Paranoia Awards', '<p>Seorang DJ cantik yang kerap disebut-sebut namanya ini mempunyai nama lengkap Yasmin Zarine Shamir, namun sering di panggil dengan sebutan DJ Yasmin. Ia terjun kedunia musik memang sudah lama, makanya yasmin sudah faham betul tentang musi. Yahh kira-kira sekitar tujuh belas tahunan lah dirinya berkecimpung dan nenekuni bakatnya tersebut.</p>\r\n', 'yasmin', 'yasmin', 'yasmin', 'dj5.jpg', 'yasmin.jpg', '0000-00-00 00:00:00', '2015-11-30 03:16:29');

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE `events` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `date` date NOT NULL,
  `type` varchar(1) COLLATE utf8_unicode_ci NOT NULL,
  `cover` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `video` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `youtube` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `description` text COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`id`, `title`, `date`, `type`, `cover`, `video`, `youtube`, `description`, `created_at`, `updated_at`) VALUES
(1, 'EXAMPLE EVENT', '2015-11-30', '1', 'imge1.jpg', '', '', '<p>Pa quae num nis ellis repuda sum hitatum acia volorro omni conse verchil iundelis maiorporem aut adit, omnis iusdae. Alic temqui conectur aliciae nisquid que venist aut aperem ellab id moluptatius aut excepudita nectur, optasi officie ndusam aut poritis excepel in eossin rendiciet odis nam rerio doluptaecae omnimet quiaece ptasitiasi que vendenitibus as eum voluptia quibea doluptat.</p>\r\n', '2015-11-22 13:47:26', '2015-11-30 02:34:05'),
(2, 'HIBURAN MALAM', '2015-12-18', '2', '2.jpg', 'video6.mp4', 'HZjueA7xjy4', 'Pa quae num nis ellis repuda sum hitatum acia volorro omni conse verchil iundelis maiorporem aut adit, omnis iusdae. Alic temqui conectur aliciae nisquid que venist aut aperem ellab id moluptatius aut excepudita nectur, optasi officie ndusam aut poritis excepel in eossin rendiciet odis nam rerio doluptaecae omnimet quiaece ptasitiasi que vendenitibus as eum voluptia quibea doluptat.', '2015-11-22 13:47:26', '0000-00-00 00:00:00'),
(3, 'BULAN PURNAMA', '2015-12-16', '1', '2.jpg', '', '', 'Pa quae num nis ellis repuda sum hitatum acia volorro omni conse verchil iundelis maiorporem aut adit, omnis iusdae. Alic temqui conectur aliciae nisquid que venist aut aperem ellab id moluptatius aut excepudita nectur, optasi officie ndusam aut poritis excepel in eossin rendiciet odis nam rerio doluptaecae omnimet quiaece ptasitiasi que vendenitibus as eum voluptia quibea doluptat.', '2015-11-22 13:47:26', '0000-00-00 00:00:00'),
(4, 'KLIWONAN', '2015-12-18', '2', '3.jpg', 'video4.mp4', 'HZjueA7xjy4', 'Pa quae num nis ellis repuda sum hitatum acia volorro omni conse verchil iundelis maiorporem aut adit, omnis iusdae. Alic temqui conectur aliciae nisquid que venist aut aperem ellab id moluptatius aut excepudita nectur, optasi officie ndusam aut poritis excepel in eossin rendiciet odis nam rerio doluptaecae omnimet quiaece ptasitiasi que vendenitibus as eum voluptia quibea doluptat.', '2015-11-22 13:47:26', '0000-00-00 00:00:00'),
(5, 'MANDI DUNIA', '2015-12-31', '1', '3.jpg', '', '', 'Pa quae num nis ellis repuda sum hitatum acia volorro omni conse verchil iundelis maiorporem aut adit, omnis iusdae. Alic temqui conectur aliciae nisquid que venist aut aperem ellab id moluptatius aut excepudita nectur, optasi officie ndusam aut poritis excepel in eossin rendiciet odis nam rerio doluptaecae omnimet quiaece ptasitiasi que vendenitibus as eum voluptia quibea doluptat.', '2015-11-22 13:47:26', '0000-00-00 00:00:00'),
(6, 'NOAH', '2015-12-18', '2', '2.jpg', 'video5.mp4', 'HZjueA7xjy4', 'Pa quae num nis ellis repuda sum hitatum acia volorro omni conse verchil iundelis maiorporem aut adit, omnis iusdae. Alic temqui conectur aliciae nisquid que venist aut aperem ellab id moluptatius aut excepudita nectur, optasi officie ndusam aut poritis excepel in eossin rendiciet odis nam rerio doluptaecae omnimet quiaece ptasitiasi que vendenitibus as eum voluptia quibea doluptat.', '2015-11-22 13:47:26', '0000-00-00 00:00:00'),
(7, 'RESPECT', '2015-12-16', '1', 'imge1.jpg', '', '', 'Pa quae num nis ellis repuda sum hitatum acia volorro omni conse verchil iundelis maiorporem aut adit, omnis iusdae. Alic temqui conectur aliciae nisquid que venist aut aperem ellab id moluptatius aut excepudita nectur, optasi officie ndusam aut poritis excepel in eossin rendiciet odis nam rerio doluptaecae omnimet quiaece ptasitiasi que vendenitibus as eum voluptia quibea doluptat.', '2015-11-22 13:47:26', '0000-00-00 00:00:00'),
(8, 'FABLE BEGINS', '2015-12-18', '2', '3.jpg', 'videoe3.mp4', 'HZjueA7xjy4', 'Pa quae num nis ellis repuda sum hitatum acia volorro omni conse verchil iundelis maiorporem aut adit, omnis iusdae. Alic temqui conectur aliciae nisquid que venist aut aperem ellab id moluptatius aut excepudita nectur, optasi officie ndusam aut poritis excepel in eossin rendiciet odis nam rerio doluptaecae omnimet quiaece ptasitiasi que vendenitibus as eum voluptia quibea doluptat.', '2015-11-22 13:47:26', '0000-00-00 00:00:00'),
(9, 'XMAS VIBE', '2015-12-16', '1', 'imge1.jpg', '', '', 'Pa quae num nis ellis repuda sum hitatum acia volorro omni conse verchil iundelis maiorporem aut adit, omnis iusdae. Alic temqui conectur aliciae nisquid que venist aut aperem ellab id moluptatius aut excepudita nectur, optasi officie ndusam aut poritis excepel in eossin rendiciet odis nam rerio doluptaecae omnimet quiaece ptasitiasi que vendenitibus as eum voluptia quibea doluptat.', '2015-11-22 13:47:26', '0000-00-00 00:00:00'),
(10, 'XTRAVAGANZA', '2015-12-18', '2', '2.jpg', 'videoe4.mp4', 'HZjueA7xjy4', 'Pa quae num nis ellis repuda sum hitatum acia volorro omni conse verchil iundelis maiorporem aut adit, omnis iusdae. Alic temqui conectur aliciae nisquid que venist aut aperem ellab id moluptatius aut excepudita nectur, optasi officie ndusam aut poritis excepel in eossin rendiciet odis nam rerio doluptaecae omnimet quiaece ptasitiasi que vendenitibus as eum voluptia quibea doluptat.', '2015-11-22 13:47:26', '0000-00-00 00:00:00'),
(11, 'NEW RESOLUTION', '2015-12-31', '1', 'imge3.jpg', '', '', 'Pa quae num nis ellis repuda sum hitatum acia volorro omni conse verchil iundelis maiorporem aut adit, omnis iusdae. Alic temqui conectur aliciae nisquid que venist aut aperem ellab id moluptatius aut excepudita nectur, optasi officie ndusam aut poritis excepel in eossin rendiciet odis nam rerio doluptaecae omnimet quiaece ptasitiasi que vendenitibus as eum voluptia quibea doluptat.', '2015-11-22 13:47:26', '0000-00-00 00:00:00'),
(12, 'XTRAVAGANZA', '2015-12-18', '2', '3.jpg', 'videoe6.mp4', 'HZjueA7xjy4', 'Pa quae num nis ellis repuda sum hitatum acia volorro omni conse verchil iundelis maiorporem aut adit, omnis iusdae. Alic temqui conectur aliciae nisquid que venist aut aperem ellab id moluptatius aut excepudita nectur, optasi officie ndusam aut poritis excepel in eossin rendiciet odis nam rerio doluptaecae omnimet quiaece ptasitiasi que vendenitibus as eum voluptia quibea doluptat.', '2015-11-22 13:47:26', '0000-00-00 00:00:00'),
(13, 'FABLE REOPENING', '2015-12-16', '1', 'imge5.jpg', '', '', 'Pa quae num nis ellis repuda sum hitatum acia volorro omni conse verchil iundelis maiorporem aut adit, omnis iusdae. Alic temqui conectur aliciae nisquid que venist aut aperem ellab id moluptatius aut excepudita nectur, optasi officie ndusam aut poritis excepel in eossin rendiciet odis nam rerio doluptaecae omnimet quiaece ptasitiasi que vendenitibus as eum voluptia quibea doluptat.', '2015-11-22 13:47:26', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `galleries`
--

CREATE TABLE `galleries` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `date` date NOT NULL,
  `video` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `cover` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `youtube` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `galleries`
--

INSERT INTO `galleries` (`id`, `title`, `date`, `video`, `cover`, `youtube`, `created_at`, `updated_at`) VALUES
(1, 'Konser Indah', '2015-08-17', 'video1.mp4', '1.jpg', 'HZjueA7xjy4', '2015-11-22 01:57:54', '2015-11-30 03:00:39'),
(2, 'Berjuang Bersama', '2014-09-09', 'video2.mp4', '2.jpg', 'HZjueA7xjy4', '2015-11-22 01:57:54', '2015-11-30 03:00:29'),
(3, 'Cinta Ilahi', '2015-01-21', 'video3.mp4', '3.jpg', 'HZjueA7xjy4', '2015-11-22 01:57:54', '2015-11-30 02:59:34'),
(4, 'Hujan Kita', '2015-06-25', 'video4.mp4', '5.jpg', 'HZjueA7xjy4', '2015-11-22 01:57:54', '2015-11-30 03:01:02'),
(5, 'Bulan Membiru', '2015-11-06', 'video5.mp4', '6.jpg', 'HZjueA7xjy4', '2015-11-22 01:57:54', '2015-11-30 02:59:55'),
(6, 'Dunia Tanpa Nama', '2013-01-01', 'video6.mp4', '7.jpg', 'HZjueA7xjy4', '2015-11-22 01:57:54', '2015-11-30 02:57:43');

-- --------------------------------------------------------

--
-- Table structure for table `guests`
--

CREATE TABLE `guests` (
  `id` int(10) UNSIGNED NOT NULL,
  `event_id` int(10) UNSIGNED NOT NULL,
  `name` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `age` int(10) UNSIGNED NOT NULL,
  `phone` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `genre` varchar(1) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `guests`
--

INSERT INTO `guests` (`id`, `event_id`, `name`, `age`, `phone`, `email`, `genre`, `created_at`, `updated_at`) VALUES
(3, 1, 'Nina Sari', 26, '089111234651', 'nina@sari.com', '', '2015-11-30 02:27:12', '2015-11-30 02:27:12');

-- --------------------------------------------------------

--
-- Table structure for table `houses`
--

CREATE TABLE `houses` (
  `id` int(10) UNSIGNED NOT NULL,
  `description` text COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `houses`
--

INSERT INTO `houses` (`id`, `description`, `created_at`, `updated_at`) VALUES
(1, '<p>- Age Limit 21+</p>\r\n\r\n<p>- No Caps/Hats</p>\r\n\r\n<p>- No Backpack</p>\r\n\r\n<p>- No Drugs</p>\r\n\r\n<p>- No Weapons</p>\r\n\r\n<p>- No Outside Food &amp; Beferage</p>\r\n\r\n<p>- No SLR?Profesional Camera</p>\r\n', '2015-11-25 23:25:22', '2015-12-04 00:44:54');

-- --------------------------------------------------------

--
-- Table structure for table `menus`
--

CREATE TABLE `menus` (
  `id` int(10) UNSIGNED NOT NULL,
  `category_menu_id` int(10) UNSIGNED NOT NULL,
  `title` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `description` text COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `menus`
--

INSERT INTO `menus` (`id`, `category_menu_id`, `title`, `description`, `created_at`, `updated_at`) VALUES
(1, 1, 'STARTERS', '<p>Cream Of Mushroom Soup</p>\r\n\r\n<p>Salmon and Dory Fish Cakes with Parsley Buerra Blanc Saoce</p>\r\n\r\n<p>Nicoise Salad</p>\r\n', '2015-11-18 05:00:22', '2015-11-18 05:00:22'),
(2, 1, 'UTAMA', '<p>Sate Ayam</p>\r\n\r\n<p>Mie Ayam Plus Baso Sapi</p>\r\n\r\n<p>Cream Of Mushroom Soup</p>\r\n\r\n<p>Salmon and Dory Fish Cakes with Parsley Buerra Blanc Saoce</p>\r\n\r\n<p>Nicoise Salad</p>\r\n', '2015-11-18 05:00:22', '2015-11-29 21:02:18'),
(3, 2, 'ONE', '<p>Kelapa Muda</p>\r\n\r\n<p>Cream Of Mushroom Soup</p>\r\n\r\n<p>Salmon and Dory Fish Cakes with Parsley Buerra Blanc Saoce</p>\r\n\r\n<p>Nicoise Salad</p>\r\n', '2015-11-18 05:00:22', '2015-11-29 21:02:45'),
(4, 2, 'TWO MENUS', '<p>Nasi Goreng</p>\r\n', '2015-11-18 05:00:22', '2015-11-29 21:02:58');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`migration`, `batch`) VALUES
('2014_10_12_000000_create_users_table', 1),
('2014_10_12_100000_create_password_resets_table', 1),
('2015_11_16_044559_create_covers_table', 1),
('2015_11_16_044632_create_events_table', 1),
('2015_11_16_044646_create_djs_table', 1),
('2015_11_16_044708_create_abouts_table', 1),
('2015_11_16_044728_create_blogs_table', 1),
('2015_11_16_050932_create_category_menus_table', 1),
('2015_11_16_050943_create_menus_table', 1),
('2015_11_16_050953_create_reserves_table', 1),
('2015_11_16_051000_create_guests_table', 1),
('2015_11_22_072421_create_galleries_table', 1),
('2015_11_22_072507_create_promos_table', 1),
('2015_11_26_053038_create_reserve_promos_table', 1),
('2015_11_26_053101_create_houses_table', 1),
('2015_12_04_014552_create_subscribes_table', 2);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `promos`
--

CREATE TABLE `promos` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `date` date NOT NULL,
  `description` text COLLATE utf8_unicode_ci NOT NULL,
  `image` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `promos`
--

INSERT INTO `promos` (`id`, `title`, `date`, `description`, `image`, `created_at`, `updated_at`) VALUES
(1, 'FABLE CONTEST', '2013-01-01', '<p>Hi</p>\r\n', '1.jpg', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(2, 'NEW YEAR 2016', '2013-01-01', '<p>Hi</p>\r\n', '2.jpg', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(3, 'HAPPY B''DAY FABLE', '2013-01-01', '<p>Hi</p>\r\n', '3.jpg', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(4, 'FABLE TOUR INDONESIA', '2013-01-01', '<p>Hi</p>\r\n', '7.jpg', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(5, 'I LOVE YOU', '2013-01-01', '<p>Hi</p>\r\n', '5.jpg', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(6, 'RAMADHAN', '2013-01-01', '<p>Hi</p>\r\n', '6.jpg', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(7, 'DIA', '2013-01-01', '<p>Hi</p>\r\n', '3.jpg', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(8, 'DENGAR', '2013-01-01', '<p>Hi</p>\r\n', '2.jpg', '0000-00-00 00:00:00', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `reserves`
--

CREATE TABLE `reserves` (
  `id` int(10) UNSIGNED NOT NULL,
  `event_id` int(10) UNSIGNED NOT NULL,
  `name` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `age` int(10) UNSIGNED NOT NULL,
  `phone` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `reserves`
--

INSERT INTO `reserves` (`id`, `event_id`, `name`, `age`, `phone`, `email`, `created_at`, `updated_at`) VALUES
(1, 7, 'Gugun Dwi Permana', 22, '089123123111', 'gugundwipermana@gmail.com', '2015-11-30 01:03:19', '2015-11-30 01:03:19'),
(2, 3, 'Coba', 30, '089112278741', 'coba@hgmail.com', '2015-11-30 01:31:36', '2015-11-30 01:31:36'),
(3, 5, 'Hilda Meilawati', 22, '089111111111', 'hilda@meila.wati', '2015-11-30 02:40:04', '2015-11-30 02:40:04');

-- --------------------------------------------------------

--
-- Table structure for table `reserve_promos`
--

CREATE TABLE `reserve_promos` (
  `id` int(10) UNSIGNED NOT NULL,
  `promo_id` int(10) UNSIGNED NOT NULL,
  `name` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `age` int(10) UNSIGNED NOT NULL,
  `phone` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `reserve_promos`
--

INSERT INTO `reserve_promos` (`id`, `promo_id`, `name`, `age`, `phone`, `email`, `created_at`, `updated_at`) VALUES
(1, 2, 'User', 20, '081111111111', 'user@fable.com', '2015-11-30 01:25:40', '2015-11-30 01:25:40'),
(2, 1, 'Gilang', 23, '089123111222', 'gilang@gmail.com', '2015-11-30 01:26:52', '2015-11-30 01:26:52'),
(3, 6, 'Mikal', 30, '081122121122', 'mikal_g@gmail.com', '2015-11-30 01:27:54', '2015-11-30 01:27:54'),
(4, 4, 'Ilham', 32, '089111111433', 'ilhamdila@gmail.com', '2015-11-30 01:28:51', '2015-11-30 01:28:51'),
(5, 5, 'Lovo You To', 40, '089123476228', 'lave_you@gmail.com', '2015-11-30 01:30:26', '2015-11-30 01:30:26');

-- --------------------------------------------------------

--
-- Table structure for table `subscribes`
--

CREATE TABLE `subscribes` (
  `id` int(10) UNSIGNED NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `subscribes`
--

INSERT INTO `subscribes` (`id`, `email`, `created_at`, `updated_at`) VALUES
(1, 'gugundwipermana@gmail.com', '2015-12-03 19:03:41', '2015-12-03 19:03:41');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Administrator', 'admin@fable.com', '$2y$10$wv7W52O3d3QzcTiVOxzVAu8FPZQGt0QxubXQCQ4vk3u3lrcPi6OLC', 'tw7PnxWbm9fyChrKSdoJ5ZJmTNcr8ohoeAAAZ60cNpX4zBuWBqgpGQqncCui', '2015-11-17 20:30:02', '2015-11-30 20:51:54');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `abouts`
--
ALTER TABLE `abouts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blogs`
--
ALTER TABLE `blogs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `category_menus`
--
ALTER TABLE `category_menus`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `covers`
--
ALTER TABLE `covers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `djs`
--
ALTER TABLE `djs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `galleries`
--
ALTER TABLE `galleries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `guests`
--
ALTER TABLE `guests`
  ADD PRIMARY KEY (`id`),
  ADD KEY `guests_event_id_foreign` (`event_id`);

--
-- Indexes for table `houses`
--
ALTER TABLE `houses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `menus`
--
ALTER TABLE `menus`
  ADD PRIMARY KEY (`id`),
  ADD KEY `menus_category_menu_id_foreign` (`category_menu_id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`),
  ADD KEY `password_resets_token_index` (`token`);

--
-- Indexes for table `promos`
--
ALTER TABLE `promos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `reserves`
--
ALTER TABLE `reserves`
  ADD PRIMARY KEY (`id`),
  ADD KEY `reserves_event_id_foreign` (`event_id`);

--
-- Indexes for table `reserve_promos`
--
ALTER TABLE `reserve_promos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `reserve_promos_promo_id_foreign` (`promo_id`);

--
-- Indexes for table `subscribes`
--
ALTER TABLE `subscribes`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `subscribes_email_unique` (`email`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `abouts`
--
ALTER TABLE `abouts`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `blogs`
--
ALTER TABLE `blogs`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `category_menus`
--
ALTER TABLE `category_menus`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `covers`
--
ALTER TABLE `covers`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `djs`
--
ALTER TABLE `djs`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `events`
--
ALTER TABLE `events`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `galleries`
--
ALTER TABLE `galleries`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `guests`
--
ALTER TABLE `guests`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `houses`
--
ALTER TABLE `houses`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `menus`
--
ALTER TABLE `menus`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `promos`
--
ALTER TABLE `promos`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `reserves`
--
ALTER TABLE `reserves`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `reserve_promos`
--
ALTER TABLE `reserve_promos`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `subscribes`
--
ALTER TABLE `subscribes`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `guests`
--
ALTER TABLE `guests`
  ADD CONSTRAINT `guests_event_id_foreign` FOREIGN KEY (`event_id`) REFERENCES `events` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `menus`
--
ALTER TABLE `menus`
  ADD CONSTRAINT `menus_category_menu_id_foreign` FOREIGN KEY (`category_menu_id`) REFERENCES `category_menus` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `reserves`
--
ALTER TABLE `reserves`
  ADD CONSTRAINT `reserves_event_id_foreign` FOREIGN KEY (`event_id`) REFERENCES `events` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `reserve_promos`
--
ALTER TABLE `reserve_promos`
  ADD CONSTRAINT `reserve_promos_promo_id_foreign` FOREIGN KEY (`promo_id`) REFERENCES `promos` (`id`) ON DELETE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
