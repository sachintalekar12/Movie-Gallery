-- phpMyAdmin SQL Dump
-- version 4.4.12
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Oct 25, 2017 at 07:25 PM
-- Server version: 5.6.25
-- PHP Version: 5.6.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `moviesdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE IF NOT EXISTS `category` (
  `id` int(11) NOT NULL,
  `type` varchar(32) NOT NULL DEFAULT '',
  `value` varchar(32) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `type`, `value`) VALUES
(1, 'language', 'english'),
(2, 'genre', 'Action'),
(3, 'language', 'hindi'),
(4, 'genre', 'comedy'),
(5, 'genre', 'drama'),
(6, 'genre', 'Fantasy'),
(7, 'genre', 'Romance'),
(8, 'genre', 'Sci-Fi'),
(9, 'genre', ' Mystery'),
(10, 'genre', 'Thriller'),
(11, 'genre', 'horror'),
(12, 'language', 'Telugu'),
(13, 'language', 'Tamil');

-- --------------------------------------------------------

--
-- Table structure for table `movies`
--

CREATE TABLE IF NOT EXISTS `movies` (
  `id` int(11) NOT NULL,
  `title` varchar(100) NOT NULL DEFAULT '',
  `description` text,
  `image` varchar(100) NOT NULL,
  `length` int(30) NOT NULL,
  `reldate` date NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=34 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `movies`
--

INSERT INTO `movies` (`id`, `title`, `description`, `image`, `length`, `reldate`) VALUES
(1, 'The Jungle Book', 'Mowgli is a boy brought up in the jungle by a pack of wolves. When Shere Khan the tiger threatens to kill him, a panther and a bear help him escape.', 'imgs/s.jpg', 110, '2016-04-08'),
(2, 'Kick', 'Devi Lal Singh, a typical youth with an anomalous standard of living, tries to find pleasure in whatever he does. He eventually becomes a thief and dons a new name, Devil.', 'imgs/kick.jpg', 146, '2014-07-25'),
(5, 'Dangal', 'After his failure at winning a gold medal for the country, Mahavir Phogat vows to realise his dreams by training his daughters for the Commonwealth Games despite societal pressures.', 'imgs/dangal.jpg', 169, '2016-08-10'),
(6, 'Life', 'Astronauts (Jake Gyllenhaal, Rebecca Ferguson, Ryan Reynolds) aboard the International Space Station are on the cutting edge of one of the most important discoveries in human history: the first evidence of extraterrestrial life on Mars.', 'imgs/life.jpg', 120, '2017-03-22'),
(7, 'Beauty and the Beast', 'Belle (Emma Watson), a bright, beautiful and independent young woman, is taken prisoner by a beast (Dan Stevens) in its castle. Despite her fears, she befriends the castle''s enchanted staff and learns to look beyond the beast''s hideous exterior', 'imgs/bab.jpg', 170, '2017-02-23'),
(8, 'Kong: Skull Island', 'Scientists, soldiers and adventurers unite to explore a mythical, uncharted island in the Pacific Ocean. Cut off from everything they know, they venture into the domain of the mighty Kong, igniting the ultimate battle between man and nature', 'imgs/kong.jpg', 120, '2017-02-28'),
(9, 'Dilwale', 'Raj falls hopelessly in love with Meera, but they have to part ways due to their families'' rivalry. Fifteen years later, destiny may bring them together when their respective siblings fall in love.', 'imgs/dilwa.jpg', 158, '2015-12-18'),
(10, 'Annabelle: Creation', 'Former toy maker Sam Mullins and his wife, Esther, are happy to welcome a nun and six orphaned girls into their California farmhouse. Years earlier, the couple''s 7-year-old daughter Annabelle died in a tragic car accident.', 'imgs/anab.jpg', 109, '2017-08-18'),
(11, 'It(2017)', 'Seven young outcasts in Derry, Maine, are about to face their worst nightmare -- an ancient, shape-shifting evil that emerges from the sewer every 27 years to prey on the town''s children. Banding together over the course of one horrifying summer.', 'imgs/it.jpg', 135, '2017-09-08'),
(12, 'War for the Planet of the Apes', 'Caesar (Andy Serkis) and his apes are forced into a deadly conflict with an army of humans led by a ruthless colonel (Woody Harrelson). After the apes suffer unimaginable losses, Caesar wrestles with his darker instincts and begins his own mythic quest to avenge his kind.', 'imgs/poa.jpg', 142, '2017-07-10'),
(13, 'American Assassin', 'When Cold War veteran Stan Hurley takes CIA black ops recruit Mitch Rapp under his wing, they receive an assignment to investigate a wave of random attacks on both military and civilian targets. After discovering a pattern of violence.', 'imgs/aa.jpg', 112, '2017-08-08'),
(14, 'Justice League', 'Fueled by his restored faith in humanity and inspired by Superman''s (Henry Cavill) selfless act, Bruce Wayne (Ben Affleck) enlists newfound ally Diana Prince to face an even greater threat. Together, Batman and Wonder Woman work quickly to recruit a team to stand against this newly awakened enemy.', 'imgs/just.jpg', 170, '2017-10-16'),
(15, 'Thor: Ragnarok', 'Imprisoned on the other side of the universe, the mighty Thor finds himself in a deadly gladiatorial contest that pits him against the Hulk, his former ally and fellow Avenger.', 'imgs/thor.jpg', 130, '2017-10-25'),
(16, 'Blade Runner 2049', 'Officer K (Ryan Gosling), a new blade runner for the Los Angeles Police Department, unearths a long-buried secret that has the potential to plunge what''s left of society into chaos. His discovery leads him on a quest to find Rick Deckard (Harrison Ford)', 'imgs/blade.jpg', 163, '2017-10-04'),
(17, 'Interstellar', ' A team of explorers travel through a wormhole in space in an attempt to ensure humanity''s survival. ', 'imgs/interstellar.jpg', 169, '2014-11-07'),
(18, 'The Equalizer', 'A man believes he has put his mysterious past behind him and has dedicated himself to beginning a new, quiet life. But when he meets a young girl under the control of ultra-violent Russian gangsters, he can''t stand idly by - he has to help her.', 'imgs/the_equalizer.jpg', 132, '2014-09-26'),
(19, 'Darna Mana Hai', 'Seven friends, after their car breaks down in the middle of the night, find shelter and tell one another stories to kill time till dawn.', 'imgs/darna_mana_hai.jpg', 121, '2003-07-25'),
(20, 'Titanic', 'A seventeen-year-old aristocrat falls in love with a kind but poor artist aboard the luxurious, ill-fated R.M.S. Titanic. ', 'images/titanic.jpg', 194, '1997-12-19'),
(21, 'Ra.One', 'A video game developer''s world spirals out of control when his shape-shifting indestructible virtual creation becomes all too real.', 'imgs/ra_one.jpg', 156, '2011-10-26'),
(22, 'Rowdy Rathore', 'A con man uncovers a deadly secret and must save his lady love, the small-town locals and the little girl who insists she''s his daughter, from the mob. ', 'imgs/rowdy_rathore.jpg', 140, '2012-06-01'),
(23, 'Paranormal Activity', 'After moving into a suburban home, a couple becomes increasingly disturbed by a nightly demonic presence. ', 'imgs/paranormal_activity.jpg', 86, '2009-10-16'),
(24, 'Raaz', 'Sanjana and Aditya decide to give their marriage one last chance. They plan a holiday in Ooty, but they don''t know that a strange figure is waiting for them to come. ', 'imgs/raaz.jpg', 151, '2002-03-12'),
(25, 'Dabangg', 'A corrupt police officer faces challenges from his family, gangsters and politicians.', 'imgs/dabangg.jpg', 126, '2010-09-10'),
(26, 'Singham', 'A truly honest police officer is transferred to a town controlled by a gangster he has humiliated. The gangster believes he can use good power to bring down this officer who made him look foolish and weak.', 'imgs/singham.jpg', 143, '2011-07-22'),
(27, 'Golmaal: Fun Unlimited', 'Four runaway crooks take shelter in a bungalow which is owned by a blind couple. ', 'imgs/golmaal_fun_unlimited.jpg', 150, '2006-07-14'),
(28, 'Jab We Met', 'A depressed wealthy businessman finds his life changing after he meets a spunky and care-free young woman.', 'imgs/jab_we_met.jpg', 138, '2007-10-26'),
(29, '3 Idiots', 'In college, Farhan and Raju form a great bond with Rancho due to his refreshing outlook. Years later, a bet gives them a chance to look for their long-lost friend whose existence seems rather elusive.', 'imgs/3_idiots.jpg', 171, '2009-12-25'),
(30, 'Secret Superstar', 'Insu, a young Muslim girl, aspires to become a singer but faces restrictions from her conservative father. She happens to cross paths with a musician, which unfolds into an exciting journey.', 'imgs/secret.jpg', 155, '2017-10-19'),
(31, 'Golmaal Again', 'Golmaal Again is yet another fun filled ride about two gangs who are unable to stand each other since their childhood and how they repulse each other even after they grow up. It is yet another hilarious adventure with its fair share of thrills that are sure to surprise the audience and fill their hearts with laughter and joy. It is a film that will surely make everyone laugh, cry and realize the importance of how beautiful life is.', 'imgs/golmal.jpg', 180, '2017-10-21'),
(32, 'Baadshaho', 'During the emergency era of 1975, Rani Gitangali''s palace in Jaipur is raided for gold; when the government decides to transfer the gold via road to Delhi, she asks her bodyguard to seize it back.', 'imgs/badsa.jpg', 162, '2017-09-01'),
(33, 'Baahubali 2: The Conclusion', 'Bhallaladeva conspires against his brother to become the king of Mahishmati. He soon gets him killed by Katappa and imprisons his wife. Years later, the son returns to avenge his father''s death.', 'imgs/bahubali.jpg', 197, '2017-05-28');

-- --------------------------------------------------------

--
-- Table structure for table `relation`
--

CREATE TABLE IF NOT EXISTS `relation` (
  `id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `movie_id` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=111 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `relation`
--

INSERT INTO `relation` (`id`, `category_id`, `movie_id`) VALUES
(1, 1, 1),
(2, 2, 1),
(3, 4, 1),
(4, 3, 2),
(5, 4, 2),
(6, 3, 5),
(7, 2, 5),
(8, 5, 5),
(9, 2, 6),
(10, 1, 6),
(11, 4, 6),
(12, 5, 6),
(13, 1, 7),
(15, 5, 7),
(16, 6, 7),
(17, 7, 7),
(18, 8, 8),
(19, 6, 8),
(20, 5, 9),
(21, 2, 9),
(22, 10, 10),
(23, 9, 10),
(24, 5, 11),
(25, 10, 11),
(26, 5, 12),
(27, 8, 12),
(28, 2, 13),
(29, 10, 13),
(30, 6, 14),
(31, 8, 14),
(32, 6, 15),
(33, 8, 15),
(34, 6, 16),
(35, 8, 16),
(36, 1, 6),
(37, 1, 8),
(38, 1, 10),
(39, 1, 11),
(40, 1, 12),
(41, 1, 13),
(42, 1, 14),
(43, 1, 15),
(44, 1, 16),
(45, 3, 9),
(46, 1, 17),
(47, 8, 17),
(48, 1, 18),
(49, 2, 18),
(50, 3, 19),
(51, 11, 19),
(52, 1, 20),
(53, 5, 20),
(54, 7, 20),
(55, 2, 21),
(56, 3, 21),
(57, 7, 21),
(58, 8, 21),
(59, 2, 22),
(60, 3, 22),
(61, 10, 22),
(62, 1, 23),
(63, 10, 23),
(64, 11, 23),
(65, 3, 24),
(66, 6, 24),
(67, 7, 24),
(68, 10, 24),
(69, 2, 25),
(70, 3, 25),
(71, 10, 25),
(72, 2, 26),
(73, 3, 26),
(74, 4, 26),
(75, 3, 27),
(76, 4, 27),
(77, 5, 27),
(78, 3, 28),
(79, 4, 28),
(80, 5, 28),
(93, 3, 29),
(94, 4, 29),
(95, 5, 29),
(96, 2, 30),
(97, 3, 30),
(98, 5, 30),
(99, 3, 31),
(100, 4, 31),
(101, 6, 31),
(102, 3, 32),
(103, 5, 32),
(104, 10, 32),
(105, 2, 33),
(106, 3, 33),
(107, 5, 33),
(108, 6, 33),
(109, 12, 33),
(110, 13, 33);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `movies`
--
ALTER TABLE `movies`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `relation`
--
ALTER TABLE `relation`
  ADD PRIMARY KEY (`id`),
  ADD KEY `movie_id` (`movie_id`),
  ADD KEY `genre_id` (`category_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `movies`
--
ALTER TABLE `movies`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=34;
--
-- AUTO_INCREMENT for table `relation`
--
ALTER TABLE `relation`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=111;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `relation`
--
ALTER TABLE `relation`
  ADD CONSTRAINT `relation_ibfk_1` FOREIGN KEY (`movie_id`) REFERENCES `movies` (`id`),
  ADD CONSTRAINT `relation_ibfk_2` FOREIGN KEY (`category_id`) REFERENCES `category` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
