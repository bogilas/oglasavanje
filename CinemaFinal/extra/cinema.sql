-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 11, 2017 at 10:49 AM
-- Server version: 10.1.24-MariaDB
-- PHP Version: 7.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cinema`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `admin_id` int(10) UNSIGNED NOT NULL,
  `first_name` varchar(25) NOT NULL,
  `last_name` varchar(25) NOT NULL,
  `email` varchar(30) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `first_name`, `last_name`, `email`, `phone`, `username`, `password`) VALUES
(1, 'Igor', 'Stricevic', 'igor.stric@gmail.com', '0623423116', 'admin', '123123');

-- --------------------------------------------------------

--
-- Table structure for table `genre`
--

CREATE TABLE `genre` (
  `genre_id` int(11) UNSIGNED NOT NULL,
  `name` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `genre`
--

INSERT INTO `genre` (`genre_id`, `name`) VALUES
(7, 'Akcija'),
(8, 'Avantura'),
(9, 'Dokumentarac'),
(10, 'Drama'),
(4, 'Horor'),
(1, 'Komedija'),
(5, 'Naucna fantastika'),
(6, 'Triler');

-- --------------------------------------------------------

--
-- Table structure for table `guest`
--

CREATE TABLE `guest` (
  `guest_id` int(11) UNSIGNED NOT NULL,
  `first_name` varchar(25) NOT NULL,
  `last_name` varchar(25) NOT NULL,
  `email` varchar(30) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `num_of_waiting_res` tinyint(3) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `guest`
--

INSERT INTO `guest` (`guest_id`, `first_name`, `last_name`, `email`, `phone`, `num_of_waiting_res`) VALUES
(2, 'Igor ', 'Stricevic', 'delije@gmail.com', '0629684119', 2),
(9, 'Perica', 'Peric', 'perica@gmail.com', '+1241234', 3),
(11, 'Lukads', 'Lukijano', 'lukito@gmail.com', '+21342', 3),
(13, 'Poslednja', 'Proba', 'proba@gmail.com', '+123423', 3),
(14, 'ozblijno', 'Poslendja', 'probaIpak2@gmai.com', '+12341234', 3),
(15, 'Lara', 'Croft', 'LaraCroft@temple.com', '+12345', 3),
(16, 'Obi', 'van', 'highGround@gmail.com', '+12343', 3),
(17, 'Jack', 'sparrow', 'thePearl@sea.com', '+123412', 3),
(18, 'Jedno', 'Sedist', 'broj5D@gmail.com', '+1243124', 1),
(19, 'ihor', 'igaga', 'igo.23@gmail.com', '+23313131', 2),
(20, 'igor', 'igor', 'igaa.dad@gmail.com', '+35654545', 1);

-- --------------------------------------------------------

--
-- Table structure for table `hall`
--

CREATE TABLE `hall` (
  `hall_id` int(11) UNSIGNED NOT NULL,
  `name` varchar(20) NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hall`
--

INSERT INTO `hall` (`hall_id`, `name`, `description`) VALUES
(1, 'Paklena Pomorandza', 'Hala na kraju hodnika, sa 3D prikazom'),
(2, 'Igor', 'asdasdasdasdasdasdas'),
(3, 'koga', 'kogakogakogakogakoga            \r\n        '),
(4, 'Four rooms', 'Hala posvecena remek delu Tarantina.'),
(5, 'Panic room', 'Hala sa specijalnim efektima i specijalnim ozvucenjem.');

-- --------------------------------------------------------

--
-- Table structure for table `movie`
--

CREATE TABLE `movie` (
  `movie_id` int(10) UNSIGNED NOT NULL,
  `genreFRN_id` int(11) UNSIGNED NOT NULL,
  `director` varchar(30) NOT NULL,
  `actors` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `duration` int(11) NOT NULL,
  `title` varchar(50) NOT NULL,
  `trailer` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `movie`
--

INSERT INTO `movie` (`movie_id`, `genreFRN_id`, `director`, `actors`, `description`, `duration`, `title`, `trailer`) VALUES
(1, 1, 'Tim Story', 'Ice Cube,Kevin Hearth', 'Security guard Ben must prove himself to his girlfriend\'s brother, top police officer James. He rides along James on a 24-hour patrol of Atlanta.', 99, 'Ride Along', 'https://www.youtube.com/embed/5klp6rkHIks'),
(2, 4, 'John R. Leonetti', 'Ward Horton, Annabelle Wallis', 'A couple begins to experience terrifying supernatural occurrences involving a vintage doll shortly after their home is invaded by satanic cultists.', 99, 'Annabelle', 'https://www.youtube.com/embed/paFgQNPGlsg'),
(3, 5, 'Denis Villeneuve', 'Amy Adams, Jeremy Renner', 'When twelve mysterious spacecraft appear around the world, linguistics professor Louise Banks is tasked with interpreting the language of the apparent alien visitors.', 126, 'Arrival', 'https://www.youtube.com/embed/AMgyWT075KY'),
(7, 8, ' James Cameron', ' Sam Worthington, Zoe Saldana, Sigourney Weaver', 'A paraplegic marine dispatched to the moon Pandora on a unique mission becomes torn between following his orders and protecting the world he feels is his home.', 162, 'Avatar', 'https://www.youtube.com/embed/5PSNL1qE6VY'),
(8, 4, 'James Wan', 'Patrick Wilson, Vera Farmiga, Ron Livingston', 'Paranormal investigators Ed and Lorraine Warren work to help a family terrorized by a dark presence in their farmhouse.', 112, 'The Conjuring', 'https://www.youtube.com/embed/ejMMn0t58Lc'),
(9, 10, 'Robert Zemeckis', ' Tom Hanks, Robin Wright, Gary Sinise', 'While not intelligent, Forrest Gump has accidentally been present at many historic moments, but his true love, Jenny Curran, eludes him.', 142, 'Forrest Gump', 'https://www.youtube.com/embed/bLvqoHBptjg'),
(10, 1, 'Damien Chazelle', ' Ryan Gosling, Emma Stone, Rosemarie DeWitt', 'Two proper L.A. dreamers, a suavely charming soft-spoken jazz pianist and a brilliant vivacious playwright, while waiting for their big break, attempt to reconcile aspirations and relationship in a magical old-school romance.', 128, 'La La Land', 'https://www.youtube.com/embed/0pdqf4P9MB8'),
(11, 9, 'Morten Tyldum', 'Benedict Cumberbatch, Keira Knightley, Matthew Goode', 'During World War II, mathematician Alan Turing tries to crack the enigma code with help from fellow mathematicians.', 104, 'The Imitation Game', 'https://www.youtube.com/embed/S5CjKEFb-sM'),
(12, 7, 'Lana Wachowski,Lilly Wachowski', 'Keanu Reeves, Laurence Fishburne, Carrie-Anne Moss', 'A computer hacker learns from mysterious rebels about the true nature of his reality and his role in the war against its controllers.', 136, 'The Matrix', 'https://www.youtube.com/embed/Q8g9zL-JL8E'),
(13, 6, 'Martin Scorsese', 'Leonardo DiCaprio, Emily Mortimer, Mark Ruffalo', 'In 1954, a U.S. marshal investigates the disappearance of a murderess who escaped from a hospital for the criminally insane.', 138, 'Shutter Island', 'https://www.youtube.com/embed/5iaYLCiq5RM');

-- --------------------------------------------------------

--
-- Table structure for table `projection`
--

CREATE TABLE `projection` (
  `projection_id` int(11) UNSIGNED NOT NULL,
  `hallFRN_id` int(11) UNSIGNED NOT NULL,
  `movieFRN_id` int(11) UNSIGNED NOT NULL,
  `price` float NOT NULL,
  `date_time` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `projection`
--

INSERT INTO `projection` (`projection_id`, `hallFRN_id`, `movieFRN_id`, `price`, `date_time`) VALUES
(17, 1, 10, 500, '2017-07-11 17:00:00'),
(18, 3, 10, 500, '2017-07-11 17:00:00'),
(19, 5, 7, 0, '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `reservation`
--

CREATE TABLE `reservation` (
  `reservation_id` int(10) UNSIGNED NOT NULL,
  `seat_num` int(10) UNSIGNED NOT NULL,
  `guestFRN_id` int(10) UNSIGNED NOT NULL,
  `projectionFRN_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `reservation`
--

INSERT INTO `reservation` (`reservation_id`, `seat_num`, `guestFRN_id`, `projectionFRN_id`) VALUES
(4, 11, 2, 17),
(5, 13, 2, 17),
(8, 1, 9, 17),
(9, 2, 9, 17),
(10, 3, 9, 17),
(11, 4, 11, 17),
(12, 5, 11, 17),
(13, 6, 11, 17),
(14, 14, 13, 17),
(15, 15, 13, 17),
(16, 24, 13, 17),
(17, 22, 14, 17),
(18, 23, 14, 17),
(19, 31, 14, 17),
(20, 32, 15, 17),
(21, 33, 15, 17),
(22, 41, 15, 17),
(23, 76, 16, 17),
(24, 77, 16, 17),
(25, 78, 16, 17),
(26, 42, 17, 17),
(27, 50, 17, 17),
(28, 51, 17, 17),
(29, 40, 18, 17),
(30, 29, 19, 17),
(31, 38, 19, 17),
(32, 25, 20, 17);

--
-- Triggers `reservation`
--
DELIMITER $$
CREATE TRIGGER `reservation_AFTER_DELETE` AFTER DELETE ON `reservation` FOR EACH ROW BEGIN
declare num tinyint(3);
set num=(select num_of_waiting_res from guest where guest_id=OLD.guestFRN_id);
if(num=1)then 
delete from guest where guest_id=OLD.guestFRN_id;
else
update guest 
set guest.num_of_waiting_res=guest.num_of_waiting_res-1 
where guest.guest_id=OLD.guestFRN_id;
end if;
END
$$
DELIMITER ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`),
  ADD UNIQUE KEY `username` (`username`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `genre`
--
ALTER TABLE `genre`
  ADD PRIMARY KEY (`genre_id`),
  ADD UNIQUE KEY `name` (`name`);

--
-- Indexes for table `guest`
--
ALTER TABLE `guest`
  ADD PRIMARY KEY (`guest_id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `hall`
--
ALTER TABLE `hall`
  ADD PRIMARY KEY (`hall_id`),
  ADD UNIQUE KEY `name` (`name`);

--
-- Indexes for table `movie`
--
ALTER TABLE `movie`
  ADD PRIMARY KEY (`movie_id`),
  ADD UNIQUE KEY `title` (`title`),
  ADD KEY `movie_genre` (`genreFRN_id`);

--
-- Indexes for table `projection`
--
ALTER TABLE `projection`
  ADD PRIMARY KEY (`projection_id`),
  ADD KEY `projection_hall` (`hallFRN_id`),
  ADD KEY `projection_movie` (`movieFRN_id`);

--
-- Indexes for table `reservation`
--
ALTER TABLE `reservation`
  ADD PRIMARY KEY (`reservation_id`),
  ADD KEY `reservation_guest` (`guestFRN_id`),
  ADD KEY `reservation_projection` (`projectionFRN_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `admin_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `genre`
--
ALTER TABLE `genre`
  MODIFY `genre_id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `guest`
--
ALTER TABLE `guest`
  MODIFY `guest_id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
--
-- AUTO_INCREMENT for table `hall`
--
ALTER TABLE `hall`
  MODIFY `hall_id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `movie`
--
ALTER TABLE `movie`
  MODIFY `movie_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `projection`
--
ALTER TABLE `projection`
  MODIFY `projection_id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
--
-- AUTO_INCREMENT for table `reservation`
--
ALTER TABLE `reservation`
  MODIFY `reservation_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `movie`
--
ALTER TABLE `movie`
  ADD CONSTRAINT `movie_genre` FOREIGN KEY (`genreFRN_id`) REFERENCES `genre` (`genre_id`) ON DELETE NO ACTION ON UPDATE CASCADE;

--
-- Constraints for table `projection`
--
ALTER TABLE `projection`
  ADD CONSTRAINT `projection_hall` FOREIGN KEY (`hallFRN_id`) REFERENCES `hall` (`hall_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `projection_movie` FOREIGN KEY (`movieFRN_id`) REFERENCES `movie` (`movie_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `reservation`
--
ALTER TABLE `reservation`
  ADD CONSTRAINT `reservation_guest` FOREIGN KEY (`guestFRN_id`) REFERENCES `guest` (`guest_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `reservation_projection` FOREIGN KEY (`projectionFRN_id`) REFERENCES `projection` (`projection_id`) ON DELETE CASCADE ON UPDATE CASCADE;

DELIMITER $$
--
-- Events
--
CREATE DEFINER=`root`@`localhost` EVENT `delete_old_projections` ON SCHEDULE EVERY 12 HOUR STARTS '2017-07-11 05:42:53' ON COMPLETION NOT PRESERVE ENABLE COMMENT 'Delets old projections, reservation will be deleted cascade' DO DELETE FROM projection where date_time<NOW()$$

DELIMITER ;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
