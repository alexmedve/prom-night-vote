-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 01, 2018 at 10:34 PM
-- Server version: 10.1.34-MariaDB
-- PHP Version: 7.2.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `poll`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `code` varchar(16) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `code`) VALUES
(1, '7f23'),
(2, '8f38'),
(3, 'cf02'),
(4, 'cbf2'),
(5, '99ed'),
(6, '536c'),
(7, '3f1f'),
(8, 'd24a'),
(9, '1f69'),
(10, '31de'),
(11, 'c804'),
(12, '0cc8'),
(13, '92cc'),
(14, '72b1'),
(15, '43da'),
(16, '90a3'),
(17, '7a46'),
(18, 'dcfa'),
(19, '3f68'),
(20, 'd372'),
(21, '4d97'),
(22, '8f37'),
(23, '6756'),
(24, 'd979'),
(25, '99e1'),
(26, '3920'),
(27, 'e1e7'),
(28, 'c845'),
(29, 'add8'),
(30, '994e'),
(31, '191d'),
(32, '325f'),
(33, '1516'),
(34, '1e54'),
(35, '084f'),
(36, 'aa96'),
(37, '3f95'),
(38, '96a4'),
(39, '33c8'),
(40, 'adae'),
(41, 'b81f'),
(42, '0bc5'),
(43, '8c99'),
(44, '3b4c'),
(45, '2bcd'),
(46, '42aa'),
(47, '27c6'),
(48, '6eb0'),
(49, 'd964'),
(50, '2628'),
(51, '90ba'),
(52, 'a3ed'),
(53, '434b'),
(54, '8070'),
(55, 'c0d2'),
(56, 'a14c'),
(57, '5f9f'),
(58, 'ac5f'),
(59, 'd0aa'),
(60, '914b'),
(61, '52de'),
(62, '952c'),
(63, '2aa9'),
(64, '060e'),
(65, 'b006'),
(66, 'b820'),
(67, '444c'),
(68, '51fc'),
(69, '9443'),
(70, '4eba'),
(71, '1c7e'),
(72, '0872'),
(73, '1f04'),
(74, '8b9d'),
(75, 'a063'),
(76, 'cf3f'),
(77, '6e8a'),
(78, '02e7'),
(79, '1b04'),
(80, '6e7f'),
(81, 'b56a'),
(82, '367b'),
(83, '496e'),
(84, '58ea'),
(85, '39ec'),
(86, '45ed'),
(87, 'eb25'),
(88, 'bf56'),
(89, '957f'),
(90, '2307'),
(91, '73dc'),
(92, '9da5'),
(93, '723d'),
(94, 'c696'),
(95, '206c'),
(96, '375c'),
(97, 'a24b'),
(98, '9c71'),
(99, '5677'),
(100, '15bf'),
(101, 'e85f'),
(102, 'cfa2'),
(103, '424b'),
(104, '5ca4'),
(105, 'b06c'),
(106, 'a517'),
(107, 'c051'),
(108, 'da13'),
(109, '779d'),
(110, 'e8eb'),
(111, '6236'),
(112, 'd596'),
(113, '294a'),
(114, '123d'),
(115, '5842'),
(116, '8f1a'),
(117, 'cdd9'),
(118, '38e6'),
(119, 'd4bb'),
(120, '88f6'),
(121, 'a971'),
(122, '0de1'),
(123, 'e3ff'),
(124, 'fb83'),
(125, 'a6f9'),
(126, '83f1'),
(127, '4cb4'),
(128, 'fcbf'),
(129, '2d7c'),
(130, '67a5'),
(131, 'f554'),
(132, '7f47'),
(133, '37cc'),
(134, '5402'),
(135, '2155'),
(136, '733d'),
(137, 'a1ae'),
(138, '4284'),
(139, '90d7'),
(140, '3efc'),
(141, '92bf'),
(142, 'f5e0'),
(143, '3bd2'),
(144, '9859'),
(145, 'ea8d'),
(146, 'dd37'),
(147, 'f9a5'),
(148, 'c2b4'),
(149, 'b9c0'),
(150, 'cc60'),
(151, '2927'),
(152, '89d8'),
(153, 'e418'),
(154, '3c8f'),
(155, '5950'),
(156, 'c977'),
(157, 'a0ba'),
(158, 'b9e8'),
(159, '4528'),
(160, '1464'),
(161, '5f4f'),
(162, 'ebcf'),
(163, 'a822'),
(164, 'ce89'),
(165, '8fee'),
(166, 'e8b7'),
(167, '05f0'),
(168, 'ce37'),
(169, 'e03e'),
(170, '6b16'),
(171, 'fcf9'),
(172, '7cb9'),
(173, 'fe37'),
(174, '1de7'),
(175, '4f89'),
(176, '5022'),
(177, '4aad'),
(178, '373f'),
(179, 'aeea'),
(180, 'b348'),
(181, 'b60f'),
(182, '393b'),
(183, '3ead'),
(184, '0622'),
(185, '7c5e'),
(186, '3ffe'),
(187, 'd12c'),
(188, '3f1d'),
(189, '4509'),
(190, 'f8a1'),
(191, '0ffc'),
(192, 'a46c'),
(193, '5799'),
(194, '02db'),
(195, '8252'),
(196, '971a'),
(197, 'fc9b'),
(198, '4287'),
(199, 'f255'),
(200, '0957'),
(201, '964d'),
(202, '7046'),
(203, 'b5c6'),
(204, 'acda'),
(205, 'a1ca'),
(206, 'f1e4'),
(207, '9263'),
(208, 'aaed'),
(209, 'bfee'),
(210, '16a6'),
(211, 'cd25'),
(212, '5298'),
(213, '8a71'),
(214, '8a69'),
(215, '0af8'),
(216, '1786'),
(217, 'e6ac'),
(218, '133e'),
(219, '0419'),
(220, '322a'),
(221, 'ce47'),
(222, '54ec'),
(223, '567f'),
(224, '8a2c'),
(225, '30e0'),
(226, '731c'),
(227, 'ae9c'),
(228, '9f60'),
(229, 'f30a'),
(230, '0dc3'),
(231, '3b5b'),
(232, '92df'),
(233, '6c09'),
(234, '38ed'),
(235, '8b4b'),
(236, 'f8ce'),
(237, '2d65'),
(238, '54d1'),
(239, '8380'),
(240, 'fccc'),
(241, 'ed4b'),
(242, '15d9'),
(243, '907f'),
(244, '5a77'),
(245, '7835'),
(246, '0afd'),
(247, 'b93f'),
(248, 'ed7c'),
(249, '0a9c'),
(250, '73b0'),
(251, 'c938'),
(252, 'c1cb'),
(253, 'b5c8'),
(254, '4398'),
(255, '27e5'),
(256, '32e5'),
(257, '3701'),
(258, '36fb'),
(259, 'c3b9'),
(260, 'd5b5'),
(261, '80ac'),
(262, '8dc8'),
(263, '5199'),
(264, '15fb'),
(265, '3629'),
(266, '7ecd'),
(267, 'd063'),
(268, 'a17d'),
(269, '7b7c'),
(270, '3383'),
(271, '025e'),
(272, '480d'),
(273, 'fdf3'),
(274, '69fc'),
(275, '2fcd'),
(276, 'ec73'),
(277, '7c08'),
(278, '5e10'),
(279, 'd185'),
(280, 'dd52'),
(281, '53a6'),
(282, '43e4'),
(283, '30ec'),
(284, 'c2e3'),
(285, '6169'),
(286, '422d'),
(287, 'c9e3'),
(288, '3163'),
(289, 'b1b8'),
(290, '9036'),
(291, '4330'),
(292, '1516'),
(293, '9439'),
(294, 'e25b'),
(295, '7455'),
(296, 'f32e'),
(297, 'f2fd'),
(298, '3ae1'),
(299, '6321'),
(300, '3338'),
(301, 'df76'),
(302, '65cf'),
(303, '3c0e'),
(304, '3acb'),
(305, '9fbb'),
(306, '1da6'),
(307, '45e7'),
(308, '229a'),
(309, 'b7e5'),
(310, 'be27'),
(311, '8d65'),
(312, '2b76'),
(313, '8950'),
(314, '3ab3'),
(315, '05f2'),
(316, 'daff'),
(317, 'b8ad'),
(318, 'a49d'),
(319, '144a'),
(320, '53d4'),
(321, '5549'),
(322, '737b'),
(323, '0f2e'),
(324, 'cd39'),
(325, '03f9'),
(326, '32a5'),
(327, '64ba'),
(328, '9827'),
(329, 'dcb5'),
(330, '1bb5'),
(331, 'af8f'),
(332, 'cbc9'),
(333, 'f97e'),
(334, '3b74'),
(335, '5ff5'),
(336, '85ef'),
(337, '832a'),
(338, '0c67'),
(339, '5911'),
(340, '01ff'),
(341, 'adec'),
(342, '2bc9'),
(343, '8dda'),
(344, '69d8'),
(345, 'a86c'),
(346, '0dfd'),
(347, '099c'),
(348, '8efa'),
(349, '4295'),
(350, '94ad'),
(351, '50dd'),
(352, '3658'),
(353, '65f3'),
(354, '4d17'),
(355, 'b775'),
(356, '76c3'),
(357, '0f45'),
(358, 'e584'),
(359, '0ea9'),
(360, '5a18'),
(361, '4f5c'),
(362, 'a6c9'),
(363, 'd3a8'),
(364, 'ae17'),
(365, '4bfc'),
(366, 'ffb8'),
(367, '799c'),
(368, '47ad'),
(369, '30f6'),
(370, '92de'),
(371, 'af6b'),
(372, 'efce'),
(373, '2b7d'),
(374, 'ef25'),
(375, '5deb'),
(376, 'd182'),
(377, '9fff'),
(378, '189d'),
(379, 'eaa4'),
(380, '2094'),
(381, 'c6f5'),
(382, '9fc0'),
(383, '1e29'),
(384, '7eba'),
(385, '516a'),
(386, 'da4f'),
(387, 'bbb6'),
(388, 'f6c6'),
(389, '2ee3'),
(390, 'e681'),
(391, 'd308'),
(392, '84ff'),
(393, '21db'),
(394, 'd99b'),
(395, '90ba'),
(396, 'd2c7'),
(397, 'd57b'),
(398, 'b177'),
(399, '86c1'),
(400, '9900'),
(401, 'fe22'),
(402, 'bfe4'),
(403, '43b9'),
(404, 'd12c'),
(405, '545a'),
(406, 'eaf6'),
(407, '5bc5'),
(408, 'cb37'),
(409, 'e5fd'),
(410, '4996'),
(411, 'e9c9'),
(412, '03b9'),
(413, '95ed'),
(414, '895e'),
(415, '56b7'),
(416, '53f6'),
(417, '3537'),
(418, 'e0fe'),
(419, 'bdf1'),
(420, '28ee'),
(421, 'b0cb'),
(422, '22c8'),
(423, 'd134'),
(424, '0b5e'),
(425, '1e85'),
(426, '1fc6'),
(427, 'ba88'),
(428, 'fe04'),
(429, '916e'),
(430, '4ee1'),
(431, '6edc'),
(432, '659c'),
(433, 'fa6b'),
(434, '9207'),
(435, '177f'),
(436, '0b68'),
(437, '8bee'),
(438, '99a8'),
(439, 'e203'),
(440, '02ee'),
(441, 'dfb2'),
(442, '8f51'),
(443, 'c8e7'),
(444, '2359'),
(445, 'dfd5'),
(446, 'cb45'),
(447, 'eadf'),
(448, '7d69'),
(449, 'a811'),
(450, 'e91f'),
(451, '39a0'),
(452, '53d1'),
(453, '88b8'),
(454, 'c048'),
(455, 'a04a'),
(456, '3e7e'),
(457, '2526'),
(458, 'f15f'),
(459, '11c4'),
(460, '6b25'),
(461, '82e2'),
(462, 'f870'),
(463, 'bcb1'),
(464, '2dbc'),
(465, '8a64'),
(466, 'e74d'),
(467, 'deb0'),
(468, 'd438'),
(469, '1c9f'),
(470, 'ac87'),
(471, '684e'),
(472, '6666'),
(473, '94aa'),
(474, 'e135'),
(475, 'f42c'),
(476, '8bdb'),
(477, '3fcc'),
(478, '67aa'),
(479, '200c'),
(480, '5b81'),
(481, '33f6'),
(482, '99e3'),
(483, 'e6e5'),
(484, '5f79'),
(485, '05fc'),
(486, '69e6'),
(487, '798d'),
(488, '2fa5'),
(489, '1cf2'),
(490, '8b6c'),
(491, 'd59c'),
(492, '8a57'),
(493, '535a'),
(494, '740c'),
(495, '7a9d'),
(496, '345b'),
(497, '475b'),
(498, '3fd9'),
(499, 'c8d0'),
(500, '7440');

-- --------------------------------------------------------

--
-- Table structure for table `votes`
--

CREATE TABLE `votes` (
  `georgiana` int(11) NOT NULL,
  `rose` int(11) NOT NULL,
  `ioana` int(11) NOT NULL,
  `augusta` int(11) NOT NULL,
  `rebeca` int(11) NOT NULL,
  `stefan` int(11) NOT NULL,
  `iustin` int(11) NOT NULL,
  `bogdan` int(11) NOT NULL,
  `andrei` int(11) NOT NULL,
  `matei` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `votes`
--

INSERT INTO `votes` (`georgiana`, `rose`, `ioana`, `augusta`, `rebeca`, `stefan`, `iustin`, `bogdan`, `andrei`, `matei`) VALUES
(0, 0, 0, 0, 0, 0, 0, 0, 0, 0);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;