-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Oct 05, 2017 at 08:07 PM
-- Server version: 10.1.19-MariaDB
-- PHP Version: 7.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `classforum`
--

-- --------------------------------------------------------

--
-- Table structure for table `answers`
--

CREATE TABLE `answers` (
  `id` int(10) UNSIGNED NOT NULL,
  `answer` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `thread_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `answers`
--

INSERT INTO `answers` (`id`, `answer`, `user_id`, `thread_id`) VALUES
(1, 'Magni vitae quod animi maxime accusantium.', 8, 10),
(2, 'Aliquid nam ex et aliquid quas enim aut.', 4, 6),
(3, 'Doloribus odit ad velit sit labore commodi.', 1, 21),
(4, 'Alias repellendus laborum facere esse.', 5, 15),
(5, 'Voluptates harum qui eum aliquid asperiores.', 3, 21),
(6, 'Beatae libero eos ducimus debitis itaque quia.', 5, 38),
(7, 'Atque veritatis assumenda a accusamus perferendis.', 7, 43),
(8, 'Eaque porro assumenda delectus consequatur eum.', 8, 30),
(9, 'Sequi quos quas commodi eaque minima et doloribus.', 6, 2),
(10, 'Labore quaerat et odit sed quod.', 2, 20),
(11, 'Fugit sit amet voluptas atque voluptatem quasi rerum.', 5, 2),
(12, 'Ad magnam id nisi minus nobis.', 10, 49),
(13, 'Et sed ipsum ipsum.', 3, 29),
(14, 'Dolores reiciendis earum autem nihil est corrupti autem.', 3, 47),
(15, 'Reiciendis temporibus soluta sint voluptatibus.', 7, 4),
(16, 'Quibusdam esse nihil cumque dicta repellendus accusamus.', 10, 25),
(17, 'Veritatis at ipsum voluptatem fugit ut dolorum.', 4, 31),
(18, 'Maxime explicabo quia eos natus corporis a odio.', 6, 12),
(19, 'Minus sint minus eum et voluptates nobis.', 4, 7),
(20, 'Odio qui ipsum quam aliquid cum id dicta.', 6, 17),
(21, 'Occaecati voluptatum voluptatem consequatur maiores consequatur a repudiandae.', 8, 44),
(22, 'Velit voluptas quisquam incidunt.', 7, 18),
(23, 'Enim laudantium saepe blanditiis.', 8, 7),
(24, 'Praesentium tempore atque vel repudiandae.', 6, 31),
(25, 'Est voluptas sit voluptas laboriosam veniam.', 4, 36),
(26, 'Est officia non eveniet.', 4, 38),
(27, 'Molestiae sed suscipit voluptatibus in explicabo eum distinctio.', 10, 47),
(28, 'Error qui dolores sint et quos animi quo magni.', 6, 16),
(29, 'Cumque cupiditate dolorem ipsa fugit aut eos.', 10, 1),
(30, 'Accusantium voluptas quo voluptatibus.', 1, 25),
(31, 'Ducimus temporibus eos ut ut voluptatem.', 8, 17),
(32, 'Similique molestias est veniam et deleniti.', 4, 32),
(33, 'Tempore sed illum debitis aut.', 8, 16),
(34, 'Quas excepturi magni sint cupiditate ut quidem.', 5, 30),
(35, 'Minus et id minima tempora beatae.', 3, 44),
(36, 'Minima eos distinctio rerum ab.', 8, 24),
(37, 'Eaque quo velit similique exercitationem eveniet incidunt asperiores.', 5, 41),
(38, 'Voluptates tenetur amet quidem nihil illo sint enim.', 3, 1),
(39, 'Dolore a non et blanditiis cumque quos.', 8, 48),
(40, 'Sunt itaque iusto ut minus est.', 2, 23),
(41, 'Aliquid est eum sunt architecto.', 10, 12),
(42, 'Tenetur impedit qui maiores repellat mollitia repellendus ipsam.', 4, 4),
(43, 'Eum debitis pariatur qui ex odit.', 1, 2),
(44, 'Minima recusandae et reiciendis in non nostrum ipsa.', 1, 21),
(45, 'Reiciendis vero quia quae sed error nam.', 9, 2),
(46, 'Quo inventore error distinctio sit repudiandae aliquid sint.', 3, 39),
(47, 'Omnis ad qui tempore.', 9, 27),
(48, 'Quam mollitia facilis aperiam tempora omnis qui nam.', 4, 15),
(49, 'Non libero beatae deleniti sunt sint.', 9, 1),
(50, 'Dolorum accusantium optio velit magni occaecati.', 7, 44),
(51, 'Vel ratione non nihil reprehenderit enim.', 10, 14),
(52, 'Distinctio atque reiciendis pariatur quod unde adipisci quis.', 5, 42),
(53, 'Minima distinctio unde inventore vitae.', 8, 49),
(54, 'Iste enim enim ex ad suscipit qui.', 8, 50),
(55, 'Minus inventore ea temporibus molestiae.', 3, 10),
(56, 'Exercitationem accusantium eveniet repellendus praesentium.', 9, 36),
(57, 'Totam impedit quaerat animi maiores corporis quasi similique.', 1, 20),
(58, 'Voluptatem reiciendis autem rerum molestiae veniam.', 4, 24),
(59, 'Consequuntur eos modi voluptatem.', 9, 25),
(60, 'Sapiente qui iure quo dolorem.', 3, 38),
(61, 'Molestias eveniet iste est et id dolorum.', 1, 9),
(62, 'Enim voluptas ut omnis.', 3, 32),
(63, 'Et ducimus et in voluptatem quia necessitatibus doloremque.', 4, 36),
(64, 'Quibusdam debitis tempore doloribus ea.', 2, 36),
(65, 'Commodi repudiandae sed ducimus a quis consequuntur dignissimos.', 4, 22),
(66, 'In quo sunt dolorem culpa.', 1, 44),
(67, 'Eius esse nam consequuntur libero quis.', 7, 45),
(68, 'Eaque praesentium accusamus rerum dolores fuga distinctio ducimus.', 3, 4),
(69, 'Quisquam quam dignissimos hic sed et modi quisquam rem.', 2, 47),
(70, 'Dolores voluptas omnis vel alias velit.', 4, 17),
(71, 'Hic dolores inventore est et necessitatibus quam sunt expedita.', 3, 11),
(72, 'Soluta aspernatur cupiditate illo.', 4, 41),
(73, 'Porro et dolores voluptas eos fuga.', 2, 20),
(74, 'In voluptates quo aut molestiae adipisci quis non.', 8, 17),
(75, 'Laborum non animi excepturi et.', 4, 10),
(76, 'Ducimus voluptatem dolorem libero id eveniet.', 6, 36),
(77, 'Possimus explicabo tenetur animi tenetur quia accusantium beatae.', 4, 8),
(78, 'Ex est molestiae molestias ea aut.', 6, 14),
(79, 'Occaecati rem non quis odit quis.', 9, 18),
(80, 'Qui ut et aut asperiores laudantium autem facilis.', 8, 2),
(81, 'Perferendis eum commodi sed tempore rerum.', 5, 5),
(82, 'Reprehenderit tenetur aut aliquam ipsum ipsum soluta voluptate aperiam.', 3, 29),
(83, 'Libero et beatae deleniti aut quos consequatur voluptatem.', 3, 48),
(84, 'Corporis deserunt enim omnis aliquid eos.', 2, 17),
(85, 'Veniam quo quia animi iure at nobis.', 6, 12),
(86, 'Non voluptatum molestiae dolor aut officia dicta nulla.', 4, 25),
(87, 'Sunt et occaecati illum ducimus facilis.', 5, 41),
(88, 'Dolor vitae ex iure labore rerum aut saepe.', 2, 48),
(89, 'Est et est laboriosam est odio provident qui.', 4, 34),
(90, 'Aliquid facere assumenda atque praesentium quaerat.', 8, 44),
(91, 'Quibusdam dolores sapiente quaerat similique recusandae dolor saepe ut.', 6, 24),
(92, 'Sit sit cumque et sed.', 2, 17),
(93, 'Et iusto ea omnis.', 9, 25),
(94, 'Non atque quasi aliquam debitis mollitia ipsam eos.', 2, 14),
(95, 'Iste in in minima.', 3, 34),
(96, 'Aperiam corporis distinctio optio est occaecati.', 8, 44),
(97, 'Temporibus ducimus perspiciatis ut non eos voluptas.', 5, 4),
(98, 'Ut ut earum rerum in quaerat dolor est.', 3, 18),
(99, 'Voluptatem ipsa ducimus totam ea.', 7, 29),
(100, 'Error incidunt aut ipsum odio.', 5, 39),
(101, 'ss', 9, 51),
(102, 'ss', 9, 51),
(103, 'ss', 9, 51),
(104, 'ss', 9, 51),
(105, 'fff', 9, 48),
(106, 'fff', 9, 48);

-- --------------------------------------------------------

--
-- Table structure for table `replies`
--

CREATE TABLE `replies` (
  `id` int(10) UNSIGNED NOT NULL,
  `reply` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `answer_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `replies`
--

INSERT INTO `replies` (`id`, `reply`, `user_id`, `answer_id`) VALUES
(1, 'Fuga harum beatae est distinctio.', 9, 37),
(2, 'Laboriosam sed rerum asperiores placeat reprehenderit.', 5, 9),
(3, 'Eveniet sit tempora aut iure ut.', 1, 1),
(4, 'Natus in ut at.', 2, 21),
(5, 'In sit earum numquam aperiam perspiciatis.', 2, 24),
(6, 'Porro ut aut dolores sed temporibus.', 8, 15),
(7, 'Qui quod id error maiores ducimus dolores expedita.', 1, 42),
(8, 'Repellendus iure voluptatum non architecto rem.', 7, 22),
(9, 'Architecto sunt soluta necessitatibus omnis.', 9, 34),
(10, 'Voluptatem et quae molestiae ad itaque dignissimos sunt.', 1, 17),
(11, 'Ratione eveniet sunt facilis ut.', 6, 3),
(12, 'Exercitationem quas sint id nam dolor sapiente voluptatem et.', 1, 8),
(13, 'Et eaque non ut rerum illum enim.', 6, 46),
(14, 'Non in nostrum iste et perferendis ipsum ab.', 4, 19),
(15, 'Accusantium omnis est sequi et libero voluptatem.', 1, 3),
(16, 'Autem qui quis blanditiis ut iure.', 7, 13),
(17, 'Dicta omnis enim totam.', 9, 3),
(18, 'Ea quia sed harum natus ipsam.', 8, 44),
(19, 'In voluptate et accusantium ipsum et.', 6, 49),
(20, 'Cumque nulla voluptas quidem dolor vitae nam reprehenderit.', 1, 29),
(21, 'Esse reprehenderit ea sunt et.', 9, 8),
(22, 'Sint iusto natus accusamus natus qui.', 2, 37),
(23, 'Qui qui aut et porro voluptas modi.', 1, 7),
(24, 'Et sit est numquam eveniet.', 8, 2),
(25, 'Quia et corrupti beatae quasi accusamus.', 3, 28),
(26, 'Minima perferendis quod ab id quam.', 7, 41),
(27, 'Illum et quam consequatur explicabo iure vel voluptatem voluptas.', 8, 19),
(28, 'Sit at et sunt repudiandae rem sit.', 10, 19),
(29, 'Voluptatem esse similique veniam eaque culpa voluptatum perferendis.', 1, 25),
(30, 'Sint reiciendis nam quisquam amet inventore inventore consequuntur.', 3, 18),
(31, 'Suscipit sunt odio ipsam ipsa corrupti itaque.', 5, 25),
(32, 'Aliquid modi ipsa ut odit consequatur beatae tenetur.', 10, 24),
(33, 'Facere et nostrum vero sed saepe exercitationem nesciunt.', 10, 40),
(34, 'Vel eaque sint nesciunt vel quo culpa explicabo.', 7, 38),
(35, 'Deleniti consequatur cum officia tenetur.', 6, 13),
(36, 'Deserunt qui ea cum assumenda veniam fugit.', 1, 33),
(37, 'Quod dignissimos mollitia enim corporis sed.', 6, 4),
(38, 'Eum amet eaque vero porro.', 1, 30),
(39, 'Autem id aspernatur quia non perferendis a ut et.', 3, 40),
(40, 'Iusto voluptatum voluptatem culpa sit adipisci aut.', 6, 18),
(41, 'Totam totam consequatur ex delectus debitis in.', 3, 39),
(42, 'Consequuntur aut cupiditate ipsam enim ut repellat.', 1, 41),
(43, 'Ipsa harum quia omnis porro labore aliquid rem.', 2, 12),
(44, 'Reprehenderit voluptatibus fugit sit eum consequuntur.', 8, 34),
(45, 'Labore dolorum magni sit rem possimus.', 10, 36),
(46, 'Ipsa repellendus fugiat reprehenderit non tenetur vel.', 1, 50),
(47, 'Quod velit nam molestiae est.', 5, 48),
(48, 'A alias voluptatem et pariatur alias nulla corrupti sit.', 1, 19),
(49, 'Repellat repellat error facilis fugiat rerum voluptatem.', 6, 31),
(50, 'Numquam nostrum ut facilis ut.', 2, 37),
(51, 'Voluptas vel et ut autem.', 10, 17),
(52, 'Nemo fuga aliquid aut iste dolor magnam.', 4, 41),
(53, 'Ut voluptate quam voluptatem.', 2, 37),
(54, 'Distinctio corporis quos ea et numquam.', 9, 45),
(55, 'Voluptas delectus modi vero commodi.', 9, 3),
(56, 'Sit aut animi nihil non iure aut.', 5, 44),
(57, 'Animi tempore maiores libero voluptatem assumenda necessitatibus.', 9, 41),
(58, 'Numquam dolorum nemo modi exercitationem nostrum voluptatum voluptatibus.', 5, 17),
(59, 'Consequatur similique sunt nihil velit consequuntur adipisci.', 7, 37),
(60, 'Similique impedit aliquam nisi maxime consequatur possimus qui.', 7, 44),
(61, 'Animi ut quidem incidunt ut similique.', 9, 6),
(62, 'Dolorum vel sit enim commodi.', 1, 40),
(63, 'Consequatur modi porro qui alias.', 6, 29),
(64, 'Quod sunt voluptatem ullam voluptatum neque ut doloribus.', 5, 34),
(65, 'Sint velit est ad.', 3, 7),
(66, 'Et recusandae libero id velit delectus est corporis.', 7, 38),
(67, 'Ut magni ducimus et repellat eaque neque voluptatem sint.', 8, 17),
(68, 'Cupiditate explicabo omnis rerum error et deleniti natus.', 5, 28),
(69, 'Accusantium voluptas explicabo corporis sit aut.', 9, 29),
(70, 'Accusamus officiis mollitia nemo itaque et doloremque sint.', 9, 1),
(71, 'Doloremque dolores beatae quis labore officiis voluptatem minus.', 2, 11),
(72, 'Placeat ea et et assumenda maxime repellat.', 9, 29),
(73, 'Velit placeat asperiores enim eaque veniam ut quaerat voluptatum.', 5, 34),
(74, 'Voluptas doloribus deleniti reiciendis aut ut ea consequatur.', 6, 29),
(75, 'Corrupti velit quis omnis repellat dolorum et ipsum.', 8, 41),
(76, 'Ea qui veniam non est.', 7, 28),
(77, 'Mollitia et inventore voluptatibus.', 4, 6),
(78, 'Deserunt aperiam minus tenetur sit corporis adipisci.', 6, 3),
(79, 'Est et aut id quidem sed.', 2, 32),
(80, 'Eaque id dolores dolorem ea.', 10, 32),
(81, 'Et fugit vel sunt at saepe id enim.', 7, 9),
(82, 'Repellat repudiandae voluptatum aut architecto non.', 4, 30),
(83, 'Pariatur enim non aut est pariatur quae.', 10, 28),
(84, 'Laboriosam esse doloremque illum.', 6, 22),
(85, 'Molestiae enim eveniet atque corporis velit est provident ullam.', 2, 24),
(86, 'Deleniti saepe praesentium officia recusandae.', 8, 34),
(87, 'Voluptas aperiam vel et qui molestiae cumque esse.', 2, 11),
(88, 'Et similique voluptas pariatur natus recusandae amet temporibus.', 8, 13),
(89, 'Laborum quia veniam quia quaerat sed quis quia.', 7, 18),
(90, 'Tenetur ipsum nisi est.', 8, 49),
(91, 'Nostrum iure aut neque voluptate amet.', 7, 9),
(92, 'Et amet fuga placeat odio rerum deserunt.', 4, 46),
(93, 'Animi a voluptatum alias sequi.', 9, 45),
(94, 'Incidunt dicta sunt quae odit nesciunt quo.', 2, 3),
(95, 'Et dolor enim iure assumenda eveniet in.', 5, 5),
(96, 'Reprehenderit temporibus aut suscipit fuga.', 8, 43),
(97, 'Dolores molestias eveniet aliquam sed repellat non molestiae.', 3, 50),
(98, 'Cupiditate fugit eveniet tenetur recusandae est voluptatem sit.', 8, 2),
(99, 'Maxime accusamus minus rerum et voluptates.', 9, 26),
(100, 'Voluptatem a eum ex occaecati minus est et quaerat.', 3, 47),
(101, 'Doloribus dolores et possimus id.', 5, 13),
(102, 'Nesciunt voluptatum odit perspiciatis alias et dignissimos.', 10, 41),
(103, 'Rerum illum modi ad aliquam.', 6, 6),
(104, 'Odio placeat suscipit eligendi minus.', 4, 31),
(105, 'Dolorem iusto qui quis aut aut laborum recusandae fugiat.', 9, 26),
(106, 'Sed autem voluptatem nihil ratione est.', 3, 47),
(107, 'Eum ut tempore voluptatum nulla sapiente esse.', 5, 44),
(108, 'Debitis similique minima est dolore cum quam nostrum quidem.', 1, 50),
(109, 'Dolorem aut quaerat rerum non.', 6, 16),
(110, 'Eius sequi hic consequatur aspernatur neque suscipit fugiat.', 9, 43),
(111, 'Officia quaerat fugit modi qui placeat dolor harum.', 1, 36),
(112, 'Reiciendis dolorum alias fugiat laudantium quis ullam occaecati.', 8, 34),
(113, 'Maxime iste corporis et harum ducimus.', 5, 38),
(114, 'Sint a sint necessitatibus a.', 10, 17),
(115, 'Minus excepturi ut delectus totam accusantium.', 1, 46),
(116, 'Modi earum distinctio reprehenderit qui asperiores exercitationem voluptatem.', 4, 1),
(117, 'Eos dolorem inventore eveniet nemo.', 2, 28),
(118, 'Praesentium quidem atque delectus dolores debitis suscipit eos id.', 4, 35),
(119, 'Recusandae perferendis ad explicabo.', 9, 46),
(120, 'Placeat minima aut consequuntur aut.', 4, 44),
(121, 'Occaecati delectus doloremque enim ut quisquam ut.', 9, 38),
(122, 'Omnis quo aut architecto dolorem et possimus dolores.', 5, 41),
(123, 'Excepturi magnam commodi molestias qui id.', 3, 30),
(124, 'Ab eos ut eum ea porro omnis voluptatum.', 8, 41),
(125, 'Consequatur ut dolor pariatur dolores id.', 8, 41),
(126, 'Quo debitis illo aut.', 9, 42),
(127, 'Quia est nulla et mollitia dolor omnis suscipit.', 6, 45),
(128, 'Minima porro molestiae ipsum maiores aut amet.', 1, 43),
(129, 'Possimus ullam quod ut nihil.', 4, 48),
(130, 'Nostrum praesentium veritatis inventore explicabo deserunt omnis odit repudiandae.', 3, 11),
(131, 'Voluptatem et rerum facilis nemo est.', 6, 46),
(132, 'Rerum dolor sit voluptates nostrum.', 8, 26),
(133, 'Provident temporibus culpa nemo officia maxime.', 1, 39),
(134, 'Et provident adipisci dolores architecto.', 3, 49),
(135, 'Ut mollitia ullam ullam quia adipisci excepturi qui.', 7, 21),
(136, 'Et voluptatem recusandae est soluta repellat adipisci.', 6, 16),
(137, 'Laudantium ipsum sunt nisi.', 7, 35),
(138, 'Omnis iste illo et excepturi blanditiis facilis sunt ut.', 6, 19),
(139, 'Quam eius repellendus tempora ullam porro a delectus.', 10, 6),
(140, 'Facere esse repudiandae eos cum aut nostrum architecto.', 6, 7),
(141, 'Omnis odit iure deleniti.', 10, 49),
(142, 'Non nam doloribus eius sunt et quisquam et.', 5, 46),
(143, 'A veritatis odio et autem.', 4, 26),
(144, 'Eaque sunt iusto cumque est quas rerum voluptatibus.', 1, 33),
(145, 'Perspiciatis perspiciatis voluptatem sed quasi in quo aspernatur.', 6, 5),
(146, 'Illum labore unde dolorum.', 10, 6),
(147, 'Tempore esse enim sed animi eum quae est.', 1, 13),
(148, 'Ut perferendis voluptatem soluta voluptatem nobis reiciendis.', 4, 26),
(149, 'Dolor quam aliquam minus dolores pariatur autem.', 2, 3),
(150, 'Possimus reiciendis velit consequuntur dolorum error.', 4, 39),
(151, 'Ut voluptas rem dolorem non odio et.', 7, 28),
(152, 'Quibusdam quae et error.', 5, 13),
(153, 'Et aut non qui sapiente.', 5, 40),
(154, 'Cupiditate temporibus nihil aut beatae.', 3, 8),
(155, 'Architecto recusandae eligendi laboriosam placeat ipsa a aperiam.', 2, 24),
(156, 'Libero quae cupiditate aut est aliquid dolorem officia.', 1, 6),
(157, 'Id et aspernatur modi accusantium voluptas.', 6, 26),
(158, 'Beatae recusandae quos ea illum ipsum et aspernatur.', 2, 27),
(159, 'Vitae nostrum sequi inventore harum consequatur mollitia sed.', 7, 23),
(160, 'Rerum eum placeat qui optio rerum sed.', 10, 25),
(161, 'Voluptatibus ut qui itaque sit.', 4, 35),
(162, 'Facilis ut quo id amet alias.', 8, 31),
(163, 'Aut aliquid dolore culpa laudantium distinctio rem nostrum eum.', 4, 46),
(164, 'Veritatis ab fugiat vel.', 3, 41),
(165, 'Hic corrupti hic suscipit qui commodi.', 7, 34),
(166, 'Recusandae perspiciatis amet commodi atque aperiam sed.', 5, 40),
(167, 'Nemo voluptas quasi repellendus rem sapiente.', 10, 33),
(168, 'In odio vitae aliquid quia omnis.', 3, 5),
(169, 'Culpa nihil et sequi sit minus.', 7, 39),
(170, 'Explicabo dicta aut possimus voluptate neque at.', 10, 26),
(171, 'Laboriosam fugiat distinctio a natus animi eveniet.', 1, 5),
(172, 'Optio non est culpa fuga inventore omnis provident.', 10, 14),
(173, 'Autem saepe sint quo dolores minima.', 10, 39),
(174, 'Molestiae earum est et officia voluptas accusantium.', 4, 48),
(175, 'Nam doloremque quod quia aut deleniti voluptatibus sunt dolorum.', 2, 40),
(176, 'Eum optio et rerum dolorum nihil minus nihil eligendi.', 2, 6),
(177, 'Et aut dolorem qui consequatur doloremque dicta sit in.', 2, 39),
(178, 'Veritatis natus quidem sequi harum optio.', 4, 9),
(179, 'Nisi non velit molestiae porro dolor non eum.', 2, 28),
(180, 'Nam consectetur fugit voluptates.', 5, 43),
(181, 'Delectus et quos ut autem.', 8, 50),
(182, 'Ut facere hic amet rerum omnis praesentium.', 5, 35),
(183, 'Rerum qui tenetur dignissimos molestias id.', 5, 34),
(184, 'Quae culpa aut laborum esse eum dignissimos quia.', 3, 1),
(185, 'Consequatur qui sapiente nisi.', 7, 15),
(186, 'Accusamus aut et autem quam.', 4, 4),
(187, 'Eveniet qui ut impedit omnis enim et adipisci.', 3, 13),
(188, 'Beatae nulla optio quae vel doloribus.', 9, 10),
(189, 'Molestiae est quae quis praesentium et nulla et.', 4, 44),
(190, 'Atque voluptatem commodi voluptas illum voluptatum.', 5, 2),
(191, 'Omnis nihil molestiae sunt.', 8, 11),
(192, 'Esse nesciunt magnam laudantium velit.', 2, 20),
(193, 'Exercitationem incidunt architecto ipsa odit sapiente nisi tempora nemo.', 7, 42),
(194, 'Qui sint nulla nemo est aperiam.', 1, 49),
(195, 'Officiis nostrum aliquid doloribus quibusdam.', 9, 30),
(196, 'Omnis et voluptates consequuntur modi officia.', 2, 9),
(197, 'Provident animi architecto est et nihil eos.', 1, 33),
(198, 'Omnis quis qui totam provident modi.', 4, 34),
(199, 'Nesciunt omnis ratione consequatur ipsam tempora.', 6, 27),
(200, 'Sint labore aut doloremque explicabo cupiditate similique tenetur.', 6, 34),
(201, 'Non quisquam possimus ut pariatur dolore aut.', 9, 40),
(202, 'Sapiente fugit adipisci qui doloribus.', 4, 26),
(203, 'Dolor omnis asperiores blanditiis ipsa impedit ut.', 2, 20),
(204, 'Modi sapiente possimus nihil voluptates aut dolore.', 1, 45),
(205, 'Hic enim libero et quam aut sapiente nemo.', 1, 40),
(206, 'Placeat praesentium est sint dolor inventore.', 8, 17),
(207, 'Suscipit aut aliquam iure praesentium delectus.', 6, 14),
(208, 'Maxime delectus sunt aliquid vero.', 8, 17),
(209, 'Aliquam blanditiis aut aliquam cupiditate perferendis qui.', 5, 13),
(210, 'Sint repellendus odio pariatur minus explicabo tenetur.', 10, 37),
(211, 'Ut dolores et officia voluptas enim est.', 10, 47),
(212, 'Mollitia nihil incidunt et voluptate cupiditate sint.', 8, 10),
(213, 'Aliquam ut mollitia eos cumque.', 6, 9),
(214, 'Assumenda repudiandae enim rerum eum saepe debitis.', 9, 31),
(215, 'Quasi porro veritatis perferendis veritatis consequatur.', 8, 12),
(216, 'Recusandae itaque aliquam iusto ipsa nobis consequatur tempore.', 10, 34),
(217, 'Et dicta dolores vero voluptates.', 8, 50),
(218, 'Voluptas dignissimos eius eaque necessitatibus qui beatae eum.', 9, 16),
(219, 'Necessitatibus voluptas deserunt reiciendis quidem ullam in.', 4, 47),
(220, 'Sed facere repellendus at ut quisquam.', 6, 44),
(221, 'Sed quasi similique modi.', 7, 42),
(222, 'Voluptas necessitatibus non porro eius cumque qui dolorem.', 4, 12),
(223, 'Ratione sint praesentium aut quo ab.', 3, 20),
(224, 'Minus explicabo quis sunt voluptatem at autem.', 3, 15),
(225, 'Vel sed et eveniet autem.', 3, 47),
(226, 'Qui non et quia doloremque.', 8, 24),
(227, 'Facere nam quae quis sit.', 5, 50),
(228, 'Error ullam et tempora id dolores repudiandae sequi.', 6, 29),
(229, 'Non qui laboriosam eos et.', 3, 47),
(230, 'Eos rerum ullam optio rerum dolor atque.', 4, 50),
(231, 'Itaque expedita consequuntur eligendi unde quo.', 3, 36),
(232, 'Minus nobis id labore quisquam et recusandae et.', 6, 14),
(233, 'Quod facere sit ut fuga et reprehenderit ex odit.', 4, 19),
(234, 'Et nemo dolor voluptatibus est.', 7, 30),
(235, 'Sit voluptatem velit animi dignissimos aut maxime tenetur.', 1, 37),
(236, 'Atque quia impedit est nostrum voluptas ut alias voluptatem.', 2, 2),
(237, 'Natus est aut ducimus recusandae.', 2, 15),
(238, 'Mollitia omnis aut natus nobis aut quisquam quia.', 4, 19),
(239, 'Sunt incidunt error inventore dicta et odit ratione eius.', 5, 27),
(240, 'Id ipsum id necessitatibus qui distinctio unde aut.', 1, 6),
(241, 'Nostrum ea perferendis aut alias rem rerum hic.', 1, 13),
(242, 'Error omnis earum non.', 7, 18),
(243, 'Rem eius vero quia voluptatum.', 7, 28),
(244, 'Provident et quas et provident nam.', 6, 8),
(245, 'Voluptatem tempora culpa quisquam quidem mollitia.', 6, 14),
(246, 'In facilis molestiae et.', 1, 48),
(247, 'Autem ab ut ipsam asperiores amet.', 6, 30),
(248, 'Ipsum voluptatem quibusdam et ipsa repellat.', 10, 36),
(249, 'Et natus mollitia accusamus.', 5, 45),
(250, 'Quas est quae dolores aut hic eos placeat nesciunt.', 5, 32),
(251, 'In quis rerum dolores qui.', 8, 7),
(252, 'Aspernatur nihil at facilis.', 7, 31),
(253, 'Perferendis assumenda ut nisi odit qui.', 2, 31),
(254, 'Aliquam natus sunt et accusamus.', 4, 45),
(255, 'Aspernatur qui quae est.', 2, 19),
(256, 'Vitae ea est ducimus.', 2, 43),
(257, 'Aut et eligendi dolorem sunt quod placeat.', 7, 23),
(258, 'Incidunt blanditiis aliquid ea qui ab sed sint.', 5, 49),
(259, 'Ducimus at adipisci adipisci recusandae.', 6, 34),
(260, 'Facere soluta molestiae similique quisquam quia nemo saepe.', 3, 41),
(261, 'Minus dignissimos quos fuga dolore.', 8, 46),
(262, 'Consequatur laborum consequatur est temporibus consequatur et.', 7, 10),
(263, 'Quia consequatur laboriosam est eum placeat error voluptatem.', 4, 30),
(264, 'Eaque excepturi nam sit.', 10, 22),
(265, 'Mollitia et totam nemo rerum qui molestias est.', 9, 31),
(266, 'Impedit similique doloribus qui ipsa quisquam cum.', 2, 23),
(267, 'In sunt aut natus voluptatem.', 1, 27),
(268, 'Et consequatur molestias repellat non fugit pariatur.', 1, 16),
(269, 'Enim quis ut eos omnis quisquam.', 3, 39),
(270, 'Qui nihil est repellat adipisci vero.', 3, 11),
(271, 'Voluptatum suscipit accusantium voluptatem ratione nihil quo.', 10, 40),
(272, 'Quaerat numquam autem veritatis laborum ducimus.', 3, 8),
(273, 'Dolorem hic accusantium vitae quia earum.', 5, 8),
(274, 'Quia quidem sed animi beatae autem eius.', 8, 42),
(275, 'Consequatur enim sint magnam accusamus fugit.', 7, 39),
(276, 'Laboriosam et delectus cum rerum est vitae eius.', 10, 12),
(277, 'Dolorum ut corrupti laudantium exercitationem consequatur et hic.', 4, 3),
(278, 'Officiis et velit delectus vitae.', 3, 9),
(279, 'Est ipsa rerum nostrum asperiores reprehenderit similique.', 3, 14),
(280, 'Alias sunt ut sed temporibus odit.', 1, 1),
(281, 'Optio ut dignissimos sint omnis maxime rem qui non.', 4, 48),
(282, 'Quia nobis dicta qui voluptas saepe ut dolores.', 10, 15),
(283, 'Sunt est ut nisi atque reprehenderit aut.', 2, 26),
(284, 'Laboriosam praesentium tempora rerum porro dolores et.', 10, 15),
(285, 'Sequi in excepturi voluptas qui vel enim.', 1, 11),
(286, 'Distinctio rem earum asperiores non.', 2, 40),
(287, 'Autem quia quasi est qui a voluptatibus.', 1, 39),
(288, 'Qui similique at ad ducimus in.', 3, 44),
(289, 'Sequi accusantium delectus est ipsum ratione nostrum.', 7, 5),
(290, 'Est velit beatae ut ipsam laudantium.', 4, 44),
(291, 'Quos vero nobis ut id.', 3, 15),
(292, 'Voluptas veniam sed doloremque aut accusamus.', 8, 41),
(293, 'Et debitis non et et et quisquam culpa.', 9, 16),
(294, 'Est ut ratione incidunt et minus.', 1, 33),
(295, 'Porro et quod voluptatum sint.', 10, 10),
(296, 'Odio voluptate quis aut unde omnis sunt rerum.', 9, 45),
(297, 'Dolorem ea voluptatem exercitationem reprehenderit aut corrupti qui.', 1, 10),
(298, 'Dolore nihil quae autem eum.', 5, 22),
(299, 'Recusandae cum dolores qui est dignissimos.', 9, 27),
(300, 'Eveniet voluptates consectetur sed et quod quis est.', 4, 1),
(301, 'some', 8, 81),
(302, 'fhh', 9, 88),
(303, 'kkk', 9, 88);

-- --------------------------------------------------------

--
-- Table structure for table `sexes`
--

CREATE TABLE `sexes` (
  `sex` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `sexes`
--

INSERT INTO `sexes` (`sex`) VALUES
('Female'),
('Male'),
('Other');

-- --------------------------------------------------------

--
-- Table structure for table `threads`
--

CREATE TABLE `threads` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `description` text COLLATE utf8_unicode_ci NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `topicName` varchar(128) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `threads`
--

INSERT INTO `threads` (`id`, `title`, `description`, `user_id`, `topicName`, `created_at`) VALUES
(1, 'Debitis officiis distinctio iure odio sit eligendi architecto.', 'Duchess, ''and that''s why. Pig!'' She said it to her lips. ''I know SOMETHING interesting is sure to kill it in less than a rat-hole: she knelt down and saying to herself how she was exactly the right.', 2, '', '0000-00-00'),
(2, 'Perferendis et ut corrupti deleniti consectetur minima reiciendis.', 'Alice to herself. (Alice had been to the conclusion that it was only too glad to get us dry would be of very little use without my shoulders. Oh, how I wish you would have called him Tortoise.', 1, '', '0000-00-00'),
(3, 'Dolor numquam et et dolorem quia dolor veritatis.', 'Five! Always lay the blame on others!'' ''YOU''D better not do that again!'' which produced another dead silence. ''It''s a friend of mine--a Cheshire Cat,'' said Alice: ''allow me to sell you a couple?''.', 1, '', '0000-00-00'),
(4, 'Molestiae perspiciatis enim maiores mollitia aut laborum.', 'I shall only look up in a very hopeful tone though), ''I won''t indeed!'' said the Cat, and vanished again. Alice waited patiently until it chose to speak with. Alice waited a little, ''From the Queen..', 9, '', '0000-00-00'),
(5, 'Necessitatibus corporis est voluptas sed ut.', 'Mock Turtle to the end: then stop.'' These were the two sides of the house, and the Queen in a sulky tone; ''Seven jogged my elbow.'' On which Seven looked up and down, and the Queen added to one of.', 8, '', '0000-00-00'),
(6, 'Beatae ab distinctio quia veritatis nisi vero voluptatem.', 'Alice''s shoulder as she remembered that she had somehow fallen into a doze; but, on being pinched by the soldiers, who of course was, how to begin.'' He looked at Two. Two began in a great many more.', 4, '', '0000-00-00'),
(7, 'Fugiat sit modi et dolor magnam debitis.', 'Alice very meekly: ''I''m growing.'' ''You''ve no right to grow up again! Let me see: four times seven is--oh dear! I wish you would have appeared to them to be true): If she should push the matter on,.', 1, '', '0000-00-00'),
(8, 'Nobis aspernatur et est.', 'Alice. ''Nothing,'' said Alice. ''You are,'' said the one who got any advantage from the Gryphon, and all would change to dull reality--the grass would be grand, certainly,'' said Alice, in a deep voice,.', 5, '', '0000-00-00'),
(9, 'Laboriosam aut ipsum optio qui nam dignissimos.', 'While she was quite tired and out of the e--e--evening, Beautiful, beautiful Soup! ''Beautiful Soup! Who cares for you?'' said the Dormouse; ''--well in.'' This answer so confused poor Alice, and she.', 10, '', '0000-00-00'),
(10, 'Perspiciatis ut qui minus asperiores aperiam quam nostrum.', 'Mystery,'' the Mock Turtle replied; ''and then the Rabbit''s voice along--''Catch him, you by the Queen to play croquet with the other: the only difficulty was, that anything that had fallen into a.', 4, '', '0000-00-00'),
(11, 'Exercitationem at nobis quia qui dolor minima.', 'However, it was YOUR table,'' said Alice; not that she looked up, but it had made. ''He took me for asking! No, it''ll never do to ask: perhaps I shall never get to twenty at that rate! However, the.', 1, '', '0000-00-00'),
(12, 'Inventore eaque omnis velit est corporis sed dolorem.', 'Alice crouched down among the leaves, which she found a little shaking among the party. Some of the ground.'' So she sat down with her head! Off--'' ''Nonsense!'' said Alice, whose thoughts were still.', 1, '', '0000-00-00'),
(13, 'Aspernatur id nihil qui voluptatem sed aliquid sed.', 'I see"!'' ''You might just as I get it home?'' when it had VERY long claws and a large caterpillar, that was sitting on a three-legged stool in the sea. The master was an immense length of neck, which.', 1, '', '0000-00-00'),
(14, 'Maiores quia est molestias voluptatum et provident.', 'So she began: ''O Mouse, do you like the look of things at all, as the Caterpillar called after it; and as the March Hare went on. ''We had the dish as its share of the court," and I could show you.', 9, '', '0000-00-00'),
(15, 'Sapiente corrupti ipsa placeat vel similique quis consectetur.', 'White Rabbit blew three blasts on the other side of the sort,'' said the cook. The King turned pale, and shut his note-book hastily. ''Consider your verdict,'' the King said, with a bound into the.', 8, '', '0000-00-00'),
(16, 'Aliquid nulla porro aut officia.', 'The Queen turned crimson with fury, and, after folding his arms and frowning at the picture.) ''Up, lazy thing!'' said Alice, quite forgetting in the window, I only knew the name again!'' ''I won''t.', 3, '', '0000-00-00'),
(17, 'Esse totam et aut sapiente illo.', 'The Hatter shook his head off outside,'' the Queen to-day?'' ''I should have liked teaching it tricks very much, if--if I''d only been the whiting,'' said the King. ''Nothing whatever,'' said Alice. ''Well,.', 4, '', '0000-00-00'),
(18, 'Quisquam rerum facilis quia ipsa nesciunt.', 'Alice could bear: she got up, and there she saw in another minute the whole place around her became alive with the Queen,'' and she did not dare to disobey, though she felt a very little! Besides,.', 9, '', '0000-00-00'),
(19, 'Officiis quisquam ea ex earum.', 'Alice began telling them her adventures from the roof. There were doors all round her, calling out in a languid, sleepy voice. ''Who are YOU?'' said the Mock Turtle yet?'' ''No,'' said the King said,.', 1, '', '0000-00-00'),
(20, 'Enim eos culpa ratione unde quos vitae ut.', 'In a minute or two, they began running when they liked, so that it would be like, ''--for they haven''t got much evidence YET,'' she said this, she was beginning to grow here,'' said the Duchess; ''and.', 5, '', '0000-00-00'),
(21, 'Facere nobis iure omnis rerum sed praesentium amet.', 'Mock Turtle replied; ''and then the puppy made another rush at the thought that she looked down at once, she found herself safe in a hurry. ''No, I''ll look first,'' she said, ''than waste it in less.', 8, '', '0000-00-00'),
(22, 'Repellat voluptatem perferendis illum rerum et illum.', 'Fury: "I''ll try the effect: the next moment a shower of little cartwheels, and the Queen shrieked out. ''Behead that Dormouse! Turn that Dormouse out of breath, and said anxiously to herself, ''the.', 8, '', '0000-00-00'),
(23, 'Beatae modi accusamus accusantium architecto fugit vero exercitationem dicta.', 'Cat went on, ''"--found it advisable to go with the other side of the jurymen. ''No, they''re not,'' said the Caterpillar. ''Not QUITE right, I''m afraid,'' said Alice, very loudly and decidedly, and he.', 4, '', '0000-00-00'),
(24, 'Qui rerum quas accusantium minima aut cumque.', 'Hatter. ''Stolen!'' the King and Queen of Hearts, she made out that part.'' ''Well, at any rate I''ll never go THERE again!'' said Alice doubtfully: ''it means--to--make--anything--prettier.'' ''Well, then,''.', 10, '', '0000-00-00'),
(25, 'Perferendis optio vitae vel tempora est non accusamus.', 'Dinah my dear! Let this be a book of rules for shutting people up like a writing-desk?'' ''Come, we shall get on better.'' ''I''d rather finish my tea,'' said the King, the Queen, who was passing at the.', 5, '', '0000-00-00'),
(26, 'Voluptatum deserunt ut omnis eligendi veniam.', 'I to get hold of it; and as it left no mark on the other birds tittered audibly. ''What I was thinking I should think!'' (Dinah was the first figure!'' said the Hatter: ''it''s very interesting. I never.', 1, '', '0000-00-00'),
(27, 'Porro et eos nobis est impedit officiis est ad.', 'White Rabbit blew three blasts on the stairs. Alice knew it was too slippery; and when she got used to say.'' ''So he did, so he with his head!"'' ''How dreadfully savage!'' exclaimed Alice. ''That''s the.', 5, '', '0000-00-00'),
(28, 'Reprehenderit velit consequuntur ullam ducimus.', 'Pigeon went on, ''you throw the--'' ''The lobsters!'' shouted the Queen furiously, throwing an inkstand at the bottom of a globe of goldfish she had wept when she looked down at her feet in the same.', 7, '', '0000-00-00'),
(29, 'Ut voluptates facilis ipsa occaecati ea accusantium.', 'Gryphon as if it please your Majesty?'' he asked. ''Begin at the cook, to see that the Mouse was bristling all over, and she told her sister, as well as she was now more than nine feet high, and was.', 10, '', '0000-00-00'),
(30, 'Maiores modi non et cumque.', 'I then? Tell me that first, and then, ''we went to him,'' said Alice very humbly: ''you had got its head to feel a little sharp bark just over her head in the other: the Duchess said in a melancholy.', 1, '', '0000-00-00'),
(31, 'Quia distinctio ut eius nulla omnis ea sed voluptatem.', 'For, you see, Miss, we''re doing our best, afore she comes, to--'' At this the whole thing very absurd, but they were lying round the thistle again; then the Mock Turtle, ''they--you''ve seen them, of.', 10, '', '0000-00-00'),
(32, 'Ab nemo perspiciatis voluptatum voluptatum aut porro.', 'MINE.'' The Queen turned crimson with fury, and, after glaring at her hands, and was going off into a doze; but, on being pinched by the officers of the court. All this time with one eye; ''I seem to.', 5, '', '0000-00-00'),
(33, 'Assumenda expedita asperiores quidem iste sed soluta.', 'Dormouse''s place, and Alice thought over all she could remember them, all these changes are! I''m never sure what I''m going to begin at HIS time of life. The King''s argument was, that if you like,''.', 6, '', '0000-00-00'),
(34, 'Tenetur voluptatem hic at rerum expedita voluptas voluptatem.', 'Mystery,'' the Mock Turtle. So she was near enough to get us dry would be only rustling in the pictures of him), while the Dodo managed it.) First it marked out a race-course, in a hurry: a large.', 6, '', '0000-00-00'),
(35, 'Aut nam in dolorem nihil.', 'Alice: ''allow me to him: She gave me a good many little girls of her sister, as well say,'' added the Gryphon; and then another confusion of voices--''Hold up his head--Brandy now--Don''t choke.', 1, '', '0000-00-00'),
(36, 'At facilis illum et quos.', 'Who ever saw one that size? Why, it fills the whole place around her became alive with the lobsters to the Gryphon. ''How the creatures order one about, and called out as loud as she could remember.', 6, '', '0000-00-00'),
(37, 'Atque quasi eos sit dolorum quibusdam blanditiis consequatur.', 'All on a three-legged stool in the schoolroom, and though this was her turn or not. So she stood still where she was quite pale (with passion, Alice thought), and it set to work at once and put back.', 5, '', '0000-00-00'),
(38, 'Sunt tempora eos maiores hic rerum accusantium voluptatem.', 'Gryphon. ''Well, I never heard of one,'' said Alice. ''Well, then,'' the Cat remarked. ''Don''t be impertinent,'' said the Duchess. An invitation from the Gryphon, before Alice could bear: she got up in.', 1, '', '0000-00-00'),
(39, 'Commodi enim corporis culpa facilis illum ullam qui.', 'Lizard''s slate-pencil, and the other arm curled round her once more, while the rest of the Gryphon, and the baby--the fire-irons came first; then followed a shower of saucepans, plates, and dishes...', 8, '', '0000-00-00'),
(40, 'Rem saepe voluptatum aut saepe.', 'I must be off, and found that it was the BEST butter,'' the March Hare went on. ''I do,'' Alice said to Alice, they all spoke at once, and ran the faster, while more and more puzzled, but she felt...', 8, '', '0000-00-00'),
(41, 'Sapiente unde rerum soluta odit voluptatem voluptatum.', 'Alice, she went on saying to herself, ''I don''t believe it,'' said Alice in a melancholy tone. ''Nobody seems to like her, down here, that I should like to be treated with respect. ''Cheshire Puss,'' she.', 6, '', '0000-00-00'),
(42, 'Qui autem iure qui ea iusto deleniti.', 'I must, I must,'' the King eagerly, and he says it''s so useful, it''s worth a hundred pounds! He says it kills all the rest were quite silent, and looked at the stick, and tumbled head over heels in.', 6, '', '0000-00-00'),
(43, 'Harum dolores enim officiis consectetur voluptas ex ut incidunt.', 'There were doors all round the neck of the court. All this time with great emphasis, looking hard at Alice the moment she quite forgot how to spell ''stupid,'' and that in some alarm. This time Alice.', 7, '', '0000-00-00'),
(44, 'Aspernatur est culpa voluptates quod.', 'First, because I''m on the twelfth?'' Alice went on again:-- ''You may not have lived much under the sea,'' the Gryphon only answered ''Come on!'' cried the Gryphon. ''Then, you know,'' the Mock Turtle a.', 2, '', '0000-00-00'),
(45, 'Voluptatum doloribus placeat perferendis aspernatur.', 'Caterpillar; and it put more simply--"Never imagine yourself not to her, still it was empty: she did not appear, and after a few minutes, and she heard her sentence three of her or of anything to.', 2, '', '0000-00-00'),
(46, 'Quo voluptates saepe optio laudantium.', 'But they HAVE their tails fast in their mouths. So they got their tails fast in their paws. ''And how do you know about it, you may SIT down,'' the King said to herself, as she could not remember the.', 6, '', '0000-00-00'),
(47, 'Sequi quasi consequatur commodi ut ut laboriosam consequuntur.', 'King. ''It began with the birds and animals that had slipped in like herself. ''Would it be of any use, now,'' thought Alice, ''as all the same, the next witness. It quite makes my forehead ache!'' Alice.', 4, '', '0000-00-00'),
(48, 'Dolorem quibusdam ut est quis ab.', 'Then came a little girl,'' said Alice, always ready to sink into the wood. ''It''s the first really clever thing the King said gravely, ''and go on with the words did not seem to have finished,'' said.', 2, '', '0000-00-00'),
(49, 'Quis dolores autem deserunt non qui soluta.', 'Mock Turtle, ''but if you''ve seen them so often, you know.'' ''Who is it twelve? I--'' ''Oh, don''t bother ME,'' said the Queen, ''and take this child away with me,'' thought Alice, ''or perhaps they won''t.', 5, '', '0000-00-00'),
(50, 'Eius cupiditate eligendi qui.', 'Gryphon only answered ''Come on!'' cried the Gryphon, sighing in his turn; and both creatures hid their faces in their mouths; and the three gardeners instantly threw themselves flat upon their faces..', 4, '', '0000-00-00'),
(51, 'test', 'test', 9, '', '0000-00-00'),
(52, 'test', 'notify', 9, '', '0000-00-00'),
(53, 'new', 'new test', 14, '', '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `bio` mediumtext COLLATE utf8_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `sex` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `is_approved` tinyint(1) DEFAULT NULL,
  `is_admin` tinyint(1) DEFAULT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `bio`, `image`, `email`, `sex`, `is_approved`, `is_admin`, `password`) VALUES
(1, 'Rory Abshire', 'Doloremque ipsum et saepe fuga dolores pariatur ut. Sed ab optio eos et modi quam cum facere. Ipsum et totam suscipit hic earum repudiandae.', 'http://lorempixel.com/640/480/?10572', 'rboehm@example.org', 'Female', 1, NULL, '$2y$10$vTiLkD9Ft8xtSq3hbWXfjunVW6vr0hlGjELg2yuRSivTwGOa5ztWq'),
(2, 'Prof. Wilma Conn IV', 'Aliquam nesciunt aut autem vero voluptas sint. Et sed et ut quia et. Quod cumque recusandae adipisci. Velit tempora fugiat aut. Id doloribus vero autem.', 'http://lorempixel.com/640/480/?45477', 'paucek.eloisa@example.org', 'Female', 1, NULL, '$2y$10$vTiLkD9Ft8xtSq3hbWXfjunVW6vr0hlGjELg2yuRSivTwGOa5ztWq'),
(3, 'Gonzalo Lesch', 'Repudiandae rerum esse dignissimos totam expedita modi necessitatibus. Non quis nostrum odit sed et aut. Molestiae provident autem unde voluptas suscipit. Voluptatem debitis distinctio fugiat quaerat quasi deleniti ab.', 'http://lorempixel.com/640/480/?14286', 'kkiehn@example.org', 'Other', 1, 1, '$2y$10$vTiLkD9Ft8xtSq3hbWXfjunVW6vr0hlGjELg2yuRSivTwGOa5ztWq'),
(4, 'Mary Adams', 'Dolor nostrum minima et. Beatae omnis laboriosam quo perferendis rerum quam. Tempore eum aut est sapiente ut dolorem iste. Et sit eligendi sed magni consectetur ducimus quisquam. Quis laboriosam non qui.', 'http://lorempixel.com/640/480/?12558', 'eino44@example.org', 'Other', 1, 1, '$2y$10$vTiLkD9Ft8xtSq3hbWXfjunVW6vr0hlGjELg2yuRSivTwGOa5ztWq'),
(5, 'Hailie Trantow', 'Dolorum numquam placeat soluta nostrum nobis voluptatem repudiandae. Qui dignissimos ut dignissimos velit esse. Qui in doloribus officia rerum id.', 'http://lorempixel.com/640/480/?91837', 'rod51@example.org', 'Other', NULL, NULL, '$2y$10$vTiLkD9Ft8xtSq3hbWXfjunVW6vr0hlGjELg2yuRSivTwGOa5ztWq'),
(6, 'Jamie Runolfsdottir', 'Harum distinctio ad sed totam. Commodi dicta iure voluptate fuga maiores illum. Ipsa beatae quas sunt a consequatur rerum.', 'http://lorempixel.com/640/480/?60991', 'ehane@example.com', 'Other', NULL, NULL, '$2y$10$vTiLkD9Ft8xtSq3hbWXfjunVW6vr0hlGjELg2yuRSivTwGOa5ztWq'),
(7, 'Taylor Bruen', 'Distinctio aut deleniti ducimus et maiores eligendi doloribus et. Minus dicta optio perspiciatis officia tempore voluptas repellendus. Et placeat quaerat laboriosam asperiores quo et dolorem. Ullam ullam nihil quibusdam repudiandae animi laudantium quas mollitia.', 'http://lorempixel.com/640/480/?29890', 'bgoldner@example.org', 'Female', NULL, NULL, '$2y$10$vTiLkD9Ft8xtSq3hbWXfjunVW6vr0hlGjELg2yuRSivTwGOa5ztWq'),
(8, 'Amina McLaughlin', 'Est ducimus blanditiis qui similique repudiandae libero. Quia asperiores nemo expedita. Nesciunt est doloremque animi fugit laudantium dolorum. Assumenda repellat cupiditate molestias vel doloribus.', 'http://lorempixel.com/640/480/?46782', 'gerald04@example.net', 'Male', 1, 1, '$2y$10$vTiLkD9Ft8xtSq3hbWXfjunVW6vr0hlGjELg2yuRSivTwGOa5ztWq'),
(9, 'Marie Denesik', 'Laboriosam blanditiis repellendus quas eius numquam perferendis. Sunt impedit vel consequatur ullam. Corrupti culpa sunt vitae.', '1503251475.jpg', 'eeichmann@example.org', 'Female', 1, 1, '$2y$10$vTiLkD9Ft8xtSq3hbWXfjunVW6vr0hlGjELg2yuRSivTwGOa5ztWq'),
(10, 'Darrell Brakus', 'Iste et et quis quia totam nobis. Quod aliquid animi pariatur. Sed ut tenetur esse aliquam perferendis. Mollitia pariatur corporis dolores perspiciatis qui ut repudiandae nesciunt.', 'http://lorempixel.com/640/480/?69291', 'sven32@example.org', 'Female', 1, 1, '$2y$10$vTiLkD9Ft8xtSq3hbWXfjunVW6vr0hlGjELg2yuRSivTwGOa5ztWq'),
(14, 'Alamin', 'i', '1503331447.jpg', 'alaminkucse@gmail.com', 'Male', 1, 1, '$2y$10$5CQOkT3ANYBCumfLeE0fQ.Pj4vTzl3jBcguVdbS0CRFqZOVihzTSy'),
(30, 'test', 'test', NULL, 'test@gmail.com', 'Male', 1, 1, '$2y$10$4N0wgAGmYxviJXQQTp/FmOupSt4obYq3kUQmlk84gMgYYSuKikcLi'),
(31, 'Sudipto Das', 'Student', '1507096546.jpg', 's@gmail.com', 'Male', 1, 1, '$2y$10$.YML5Yy9YO3LQ.QF0jFJ5O.RsXCsDnPdbvEcTZe6J/U9fQlqBUp6m');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `answers`
--
ALTER TABLE `answers`
  ADD PRIMARY KEY (`id`),
  ADD KEY `answers_thread_id_foreign` (`thread_id`),
  ADD KEY `answers_user_id_foreign` (`user_id`);

--
-- Indexes for table `replies`
--
ALTER TABLE `replies`
  ADD PRIMARY KEY (`id`),
  ADD KEY `replies_user_id_foreign` (`user_id`),
  ADD KEY `replies_answer_id_foreign` (`answer_id`);

--
-- Indexes for table `sexes`
--
ALTER TABLE `sexes`
  ADD PRIMARY KEY (`sex`);

--
-- Indexes for table `threads`
--
ALTER TABLE `threads`
  ADD PRIMARY KEY (`id`),
  ADD KEY `threads_user_id_foreign` (`user_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD KEY `users_sex_foreign` (`sex`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `answers`
--
ALTER TABLE `answers`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=107;
--
-- AUTO_INCREMENT for table `replies`
--
ALTER TABLE `replies`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=304;
--
-- AUTO_INCREMENT for table `threads`
--
ALTER TABLE `threads`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `answers`
--
ALTER TABLE `answers`
  ADD CONSTRAINT `answers_thread_id_foreign` FOREIGN KEY (`thread_id`) REFERENCES `threads` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `answers_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `replies`
--
ALTER TABLE `replies`
  ADD CONSTRAINT `replies_answer_id_foreign` FOREIGN KEY (`answer_id`) REFERENCES `answers` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `replies_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `threads`
--
ALTER TABLE `threads`
  ADD CONSTRAINT `threads_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_sex_foreign` FOREIGN KEY (`sex`) REFERENCES `sexes` (`sex`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
