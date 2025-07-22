-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 27, 2023 at 08:47 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bookplaza`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `ad_id` int(11) NOT NULL,
  `ad_name` varchar(50) NOT NULL,
  `ad_email` varchar(100) NOT NULL,
  `ad_pass` varchar(250) NOT NULL,
  `ad_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`ad_id`, `ad_name`, `ad_email`, `ad_pass`, `ad_date`) VALUES
(6, '', 'admin1@gmail.com', '123456', '2023-06-23');

-- --------------------------------------------------------

--
-- Table structure for table `book`
--

CREATE TABLE `book` (
  `book_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `seller_id` int(11) NOT NULL,
  `cat_id` int(11) NOT NULL,
  `book_title` varchar(550) NOT NULL,
  `book_img` varchar(300) NOT NULL,
  `book_description` varchar(1000) NOT NULL,
  `book_author` varchar(500) NOT NULL,
  `book_price` varchar(500) NOT NULL,
  `book_isbn` varchar(150) NOT NULL,
  `book_qty` varchar(150) NOT NULL,
  `book_status` varchar(250) NOT NULL,
  `book_date` date NOT NULL,
  `publication` varchar(100) NOT NULL,
  `yearofpub` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `book`
--

INSERT INTO `book` (`book_id`, `user_id`, `seller_id`, `cat_id`, `book_title`, `book_img`, `book_description`, `book_author`, `book_price`, `book_isbn`, `book_qty`, `book_status`, `book_date`, `publication`, `yearofpub`) VALUES
(11, 0, 1, 1, 'UNWELCOME GUESTS', 'upload/UNWELCOME GUESTS.jpg', 'Saffron vowed to love Miles no matter what life threw at them both. But when her mother-in-law moves into their happy family home, Saffron’s shiny life begins to tarnish.\r\n \r\nEven as Caprice’s barbed comments turn to something more sinister, Saffron hopes the new nanny’s arrival will shield her from the worst of it. She’s starting to feel paranoid in her own home.\r\n \r\nLittle does she realise that Caprice longs for a new daughter-in-law – and she’ll do anything to make that happen…', 'Willett, Anna', '337', '1983653667', '13', '', '2023-05-29', 'The Book Folks crime fiction, thriller and horror books publisher\r\n', '0000-00-00'),
(12, 0, 2, 1, 'It\'s Kind of a Funny Story', 'upload/It\'s Kind of a Funny Story.jpg', 'A humorous account of a New York City teenager\'s battle with depression and his time spent in a psychiatric hospital.\r\n', 'Vizzini, Ned', '1068', '9781423141082', '11', '', '2023-06-12', 'Disney Book Group', '2010-03-06'),
(13, 0, 3, 5, 'The True Story of Stellina', 'upload/The True Story of Stellina.jpg', 'Stellina was a bird: \"CHEEP.\" A very little bird: \"Cheep! cheep!\"So begins critically acclaimed author Matteo Pericoli\'s all-true story of how he and his wife, Holly, came to rescue and raise a little finch, Stellina, in the middle of New York City. When no zoo would take the abandoned bird, fallen from her nest onto a busy street, Holly took her home and gave her the best life she could. And there, in a Manhattan apartment, Stellina leaned how to eat, fly, and sing.\r\n', 'Pericoli, Matteo', '800', '9780375832734', '4', '', '2023-06-12', 'Random House Children\'s Books', '2022-10-01'),
(14, 0, 1, 4, 'CRIME ON THE FENS ', 'upload/CRIME ON THE FENS.jpg', 'A NEW CRIME THRILLER WITH A COMPELLING DETECTIVE WHO WILL STOP AT NOTHING TO AVENGE HER DAUGHTER\r\nTHE DETECTIVE DI Nikki Galena: A police detective with nothing left to lose, she\'s seen a girl die in her arms, and her daughter will never leave the hospital again. She\'s got tough on the criminals she believes did this to her. Too tough. And now she\'s been given one final warning: make it work with her new sergeant, DS Joseph Easter, or she\'s out.\r\n\r\nHER PARTNER DS Joseph Easter is the squeaky-clean new member of the team. But his nickname \"Holy Joe\" belies his former life as a soldier. He has an estranged daughter who blames him for everything that went wrong with their family.\r\n\r\nTHEIR ADVERSARY is a ruthless man who holds DI Galena responsible for his terrible disfigurement.\r\n\r\nTHE TOWN is being terrorised by gangs of violent thugs, all wearing identical hideous masks. Then a talented young female student goes missing on the marsh and Nikki and Joseph find themselves joining forces wi', 'Ellis, Joy', '460', '1911021613', '9', 'available', '2023-06-12', 'Joffe Books Mystery, Crime Thriller, Suspense Fiction', '2016-11-01'),
(15, 0, 2, 4, 'CRIME ON THE FENS ', 'upload/CRIME ON THE FENS.jpg', 'A NEW CRIME THRILLER WITH A COMPELLING DETECTIVE WHO WILL STOP AT NOTHING TO AVENGE HER DAUGHTER\r\nTHE DETECTIVE DI Nikki Galena: A police detective with nothing left to lose, she\'s seen a girl die in her arms, and her daughter will never leave the hospital again. She\'s got tough on the criminals she believes did this to her. Too tough. And now she\'s been given one final warning: make it work with her new sergeant, DS Joseph Easter, or she\'s out.\r\n\r\nHER PARTNER DS Joseph Easter is the squeaky-clean new member of the team. But his nickname \"Holy Joe\" belies his former life as a soldier. He has an estranged daughter who blames him for everything that went wrong with their family.\r\n\r\nTHEIR ADVERSARY is a ruthless man who holds DI Galena responsible for his terrible disfigurement.\r\n\r\nTHE TOWN is being terrorised by gangs of violent thugs, all wearing identical hideous masks. Then a talented young female student goes missing on the marsh and Nikki and Joseph find themselves joining forces wi', 'Ellis, Joy', '410', '1911021613\r\n', '2', 'available', '2023-06-12', ' Joffe Books Mystery, Crime Thriller, Suspense Fiction', '2016-11-01'),
(16, 0, 1, 5, 'Sandblast', 'upload/Sandblast a Gripping New Military Thriller.jpg', 'Fans of Vince Flynn and Lee Child rejoice! It’s time for your next action hero….\r\n \r\nLieutenant Faraz Abdallah is willing to do anything for his country, but this time, his ultimate patriot mission will take him into the belly of the beast….and right into the heart of the Taliban….\r\n \r\nWritten with authentic detail, former foreign correspondent Al Pessin takes the reader on a pulse-pounding adventure, where Faraz learns that in order to defeat the enemy, you have to become your enemy.\r\n \r\nThe plane carrying the Secretary of Defense is blown out of the sky. The Defense Intelligence Agency greenlights an unprecedented response—Operation: Sandblast.\r\n \r\nPentagon Covert Ops runner Bridget Davenport, must find someone to infiltrate the Taliban, get to the terrorist mastermind, and at all costs stop his plan for an attack more destructive than 9/11. Bridget finds young California-raised Afghan-American Lieutenant Faraz Abdallah. His heritage and military training make him the perfect underco', 'Al Pessin', '709', '9780786046720', '3', 'available', '2023-06-12', 'Pinnacle Books', '2020-11-02'),
(17, 0, 3, 5, 'The Complete Bragg', 'upload/A Bragg Thriller Books 1-8.jpg', 'ALL EIGHT POWERHOUSE NOVELS IN JACK LYNCH’S EDGAR AWARD-NOMINATED AND TWO-TIME SHAMUS AWARD-NOMINATED BRAGG SERIES…NOW IN ONE VOLUME!\r\n\r\n“Bragg is authentic, gripping, gritty.” San Francisco Examiner', 'Jack Lynch', '449', '9781941298305', '19', '', '2023-06-14', 'Bragg Books', '2020-06-01'),
(18, 0, 3, 5, 'STANDPOINT ', 'upload/STANDPOINT a gripping thriller full of suspense.jpg', 'Thomas Bladen works in surveillance for a shadowy unit of the British government. During a routine operation, he sees a shooting which will expose a world of corruption and danger. When his on-again, off-again girlfriend Miranda is drawn into the conspiracy, Thomas must decide who he can trust to help him save her life.', 'Thompson, Derek', '1435', '1511628235', '7', '', '2023-06-14', 'Joffe Books Spy Thriller Books and Mystery', '2015-10-03'),
(19, 0, 3, 5, 'Singapore Girl', 'upload/Singapore Girl An edge of your seat thriller that will have you hooked.jpg', 'A headless body, found on a causeway between Singapore and Malaya, gets assigned to ex-military investigator Ash Carter. Now working for the government, he needs to find out if this is just another drug-war punishment or something more. His search for answers takes him through Malaya as far as Penang. But with children going missing, he starts to uncover connections to the establishment. He knows he\'s getting close to the truth. Too close... The investigation gets shut down. But he knows it\'s not over. And it\'s not in his nature to quit.\r\n', 'Bailey, Murray', '760', '9781999795436', '12', '', '2023-06-15', 'Heritage Books', '2018-11-02'),
(20, 0, 3, 5, 'Sandblast', 'upload/Sandblast a Gripping New Military Thriller.jpg', 'Fans of Vince Flynn and Lee Child rejoice! It’s time for your next action hero….\r\n \r\nLieutenant Faraz Abdallah is willing to do anything for his country, but this time, his ultimate patriot mission will take him into the belly of the beast….and right into the heart of the Taliban….\r\n \r\nWritten with authentic detail, former foreign correspondent Al Pessin takes the reader on a pulse-pounding adventure, where Faraz learns that in order to defeat the enemy, you have to become your enemy.\r\n \r\nThe plane carrying the Secretary of Defense is blown out of the sky. The Defense Intelligence Agency greenlights an unprecedented response—Operation: Sandblast.\r\n \r\nPentagon Covert Ops runner Bridget Davenport, must find someone to infiltrate the Taliban, get to the terrorist mastermind, and at all costs stop his plan for an attack more destructive than 9/11. Bridget finds young California-raised Afghan-American Lieutenant Faraz Abdallah. His heritage and military training make him the perfect underco', 'Al Pessin', '650', '9780786046720', '5', '', '2023-06-15', 'Pinnacle Books', '2015-09-15'),
(21, 0, 3, 1, 'Quest for the Crystal Crown', 'upload/The story pirates present Quest for the Crystal Crown Edition First edition.jpg', 'An enchanted arrow pierces the wall of Hillview--the city is under attack! Years ago, a powerful crystal crown was stolen from a group of magic wielders called Lysors. Lacking the crown\'s protection, the Lysors hid themselves behind the city walls, shut off from the rest of the world. But with danger upon them once more, can Laura, a spunky girl with a knack for adventure, journey outside Hillview . . . and reclaim the crystal crown?', 'Bondor-Stone, Annabeth ; White, Connor ', '1050', '2019005379', '11', '', '2023-06-15', 'Random House Books for Young Readers', '2020-10-01'),
(22, 0, 2, 5, 'The Russian Defector', 'upload/The Russian Defector A Justin Hall Spy Thriller.jpg', 'The Justin Hall Series\r\n\r\nThe Russian Defector is the fifteenth novel in this best-selling series with thousands of five-star reviews and hundreds of thousands of sales and downloads. Each book is a clean, self-contained international espionage mission without cliffhangers and can be enjoyed on its own. The Russian Defector also contains exclusive bonus content.\r\n\r\nIf you’re a fan of Silva, Baldacci, Child, Clancy, DeMille, le Carré, Ludlum, Thor or Flynn, you’ll love The Russian Defector. With never-ending suspense, action, intricate plots, and captivating characters.\r\n\r\n', 'Ethan Jones', '299', '9781393759232', '1', '', '2023-06-15', 'Knightsville Books', '2020-10-03'),
(23, 0, 2, 5, 'The Complete Bragg ', 'upload/A Bragg Thriller Books 1-8.jpg', 'ALL EIGHT POWERHOUSE NOVELS IN JACK LYNCH’S EDGAR AWARD-NOMINATED AND TWO-TIME SHAMUS AWARD-NOMINATED BRAGG SERIES…NOW IN ONE VOLUME!\r\n\r\n“Bragg is authentic, gripping, gritty.” San Francisco Examiner', 'Jack Lynch', '449', '9781941298305', '7', '', '2023-06-15', 'Bragg Books', '2020-06-01'),
(24, 0, 1, 5, 'STANDPOINT', 'upload/STANDPOINT a gripping thriller full of suspense.jpg', 'Thomas Bladen works in surveillance for a shadowy unit of the British government. During a routine operation, he sees a shooting which will expose a world of corruption and danger. When his on-again, off-again girlfriend Miranda is drawn into the conspiracy, Thomas must decide who he can trust to help him save her life.', 'Thompson, Derek', '1389', '1511628235', '8', '', '2023-06-15', 'Joffe Books Spy Thriller Books and Mystery', '2015-10-03');

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `cart_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `book_id` int(11) NOT NULL,
  `ubook_id` int(11) NOT NULL,
  `cart_qty` int(11) NOT NULL,
  `cart_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`cart_id`, `user_id`, `book_id`, `ubook_id`, `cart_qty`, `cart_date`) VALUES
(2, 2, 14, 0, 1, '0000-00-00'),
(20, 1, 13, 0, 2, '0000-00-00'),
(43, 6, 15, 0, 2, '0000-00-00'),
(45, 5, 16, 0, 1, '0000-00-00'),
(53, 3, 1, 0, 3, '0000-00-00'),
(54, 3, 14, 0, 1, '2023-06-27');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `cat_id` int(11) NOT NULL,
  `cat_name` varchar(350) NOT NULL,
  `cat_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`cat_id`, `cat_name`, `cat_date`) VALUES
(1, 'Fiction', '2023-05-24'),
(2, 'Non Fiction', '2023-05-24'),
(3, 'Novel', '2023-05-25'),
(4, 'Fantasy', '2023-05-25'),
(5, 'Thriller', '2023-05-25'),
(6, 'Comedy', '2023-05-25'),
(7, 'Drama', '2023-05-25'),
(9, 'Education', '2023-06-15');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `fb_id` int(11) NOT NULL,
  `seller_id` int(11) NOT NULL,
  `book_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `feed` text NOT NULL,
  `fb_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`fb_id`, `seller_id`, `book_id`, `user_id`, `feed`, `fb_date`) VALUES
(14, 2, 12, 3, 'nice story', '2023-06-25'),
(15, 1, 14, 4, 'wow!', '2023-06-25'),
(16, 1, 16, 5, 'jiggaaaa', '2023-06-26'),
(19, 3, 19, 3, 'sss', '2023-06-27');

-- --------------------------------------------------------

--
-- Table structure for table `genfeed`
--

CREATE TABLE `genfeed` (
  `genfeed_id` int(11) NOT NULL,
  `user_name` varchar(50) NOT NULL,
  `user_id` int(11) NOT NULL,
  `user_email` varchar(70) NOT NULL,
  `genfeed` varchar(1000) NOT NULL,
  `genfeed_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `genfeed`
--

INSERT INTO `genfeed` (`genfeed_id`, `user_name`, `user_id`, `user_email`, `genfeed`, `genfeed_date`) VALUES
(2, 'Shreyas', 0, 'shreyas@gmail.com', 'nice website', '2023-06-15'),
(6, 'Abhay', 0, 'abhay@gmail.com', 'good website', '2023-06-15'),
(7, 'Sagar', 0, 'sagar@gmail.com', 'Superb', '2023-06-16'),
(9, 'Shreyas', 0, 'shreyas@gmail.com', 'hello', '2023-06-20');

-- --------------------------------------------------------

--
-- Table structure for table `order`
--

CREATE TABLE `order` (
  `od_id` int(11) NOT NULL,
  `seller_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `book_id` int(11) NOT NULL,
  `qty` int(11) NOT NULL,
  `amt` float NOT NULL,
  `od_status` varchar(150) NOT NULL,
  `unid` varchar(200) NOT NULL,
  `od_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `order`
--

INSERT INTO `order` (`od_id`, `seller_id`, `user_id`, `book_id`, `qty`, `amt`, `od_status`, `unid`, `od_date`) VALUES
(11, 1, 3, 11, 1, 337, 'ordered', '6496d198acb3f', '2023-06-24'),
(12, 3, 3, 18, 2, 2870, 'ordered', '6498452990a47', '2023-06-25'),
(13, 1, 3, 16, 1, 709, 'ordered', '649848af7836d', '2023-06-25'),
(14, 1, 4, 14, 1, 460, 'ordered', '649878aa6deba', '2023-06-25'),
(15, 1, 4, 14, 1, 460, 'ordered', '64987982abc49', '2023-06-25'),
(16, 1, 4, 14, 1, 460, 'ordered', '64987a6721e43', '2023-06-25'),
(17, 3, 3, 17, 1, 449, 'ordered', '6498fd5fd452e', '2023-06-26'),
(18, 2, 3, 15, 1, 410, 'ordered', '64990c65289b4', '2023-06-26'),
(19, 2, 3, 15, 1, 410, 'ordered', '64990d2297e4d', '2023-06-26'),
(20, 1, 5, 16, 1, 709, 'ordered', '64990f5f9c257', '2023-06-26'),
(21, 2, 5, 22, 1, 299, 'ordered', '6499185a56e76', '2023-06-26'),
(22, 2, 6, 15, 2, 820, 'ordered', '6499329b64bb1', '2023-06-26'),
(23, 4, 3, 25, 1, 300, 'ordered', '64993868cfdd7', '2023-06-26'),
(24, 2, 3, 12, 4, 4272, 'ordered', '649949afaab57', '2023-06-26'),
(25, 2, 3, 13, 1, 800, 'ordered', '649a802583767', '2023-06-27'),
(26, 2, 3, 22, 1, 299, 'ordered', '649a802583767', '2023-06-27'),
(27, 2, 3, 12, 1, 1068, 'ordered', '649a802583767', '2023-06-27');

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `pay_id` int(11) NOT NULL,
  `od_id` int(11) NOT NULL,
  `pay_method` varchar(350) NOT NULL,
  `trans_id` varchar(200) NOT NULL,
  `pay_amt` varchar(350) NOT NULL,
  `card_name` varchar(350) NOT NULL,
  `card_num` varchar(16) NOT NULL,
  `card_cvv` int(3) NOT NULL,
  `exp_date` date NOT NULL,
  `pay_status` varchar(250) NOT NULL,
  `pay_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `payment`
--

INSERT INTO `payment` (`pay_id`, `od_id`, `pay_method`, `trans_id`, `pay_amt`, `card_name`, `card_num`, `card_cvv`, `exp_date`, `pay_status`, `pay_date`) VALUES
(8, 8, 'upi', '22222222222222', '337', '', '', 0, '0000-00-00', 'paid', '2023-06-24'),
(9, 9, 'upi', '22222222222222', '337', '', '', 0, '0000-00-00', 'paid', '2023-06-24'),
(10, 10, 'upi', '22222222222222', '337', '', '', 0, '0000-00-00', 'paid', '2023-06-24'),
(11, 11, 'upi', '22222222222222', '337', '', '', 0, '0000-00-00', 'paid', '2023-06-24'),
(14, 14, 'upi', '7777777777777777', '460', '', '', 0, '0000-00-00', 'paid', '2023-06-25'),
(17, 17, 'upi', '7777777777777777', '449', '', '', 0, '0000-00-00', 'paid', '2023-06-26'),
(20, 20, 'upi', '7894521385466555', '709', '', '', 0, '0000-00-00', 'paid', '2023-06-26'),
(21, 21, 'cash', '', '299', '', '', 0, '0000-00-00', 'pending', '2023-06-26'),
(22, 22, 'upi', '222222222222', '820', '', '', 0, '0000-00-00', 'paid', '2023-06-26'),
(23, 23, 'cash', '', '300', '', '', 0, '0000-00-00', 'pending', '2023-06-26'),
(24, 24, 'cash', '', '4272', '', '', 0, '0000-00-00', 'pending', '2023-06-26'),
(25, 25, 'card', '', '800', 'dcdsf', '12333333', 0, '0000-00-00', 'paid', '2023-06-27'),
(26, 26, 'card', '', '299', 'dcdsf', '12333333', 0, '0000-00-00', 'paid', '2023-06-27'),
(27, 27, 'card', '', '1068', 'dcdsf', '12333333', 0, '0000-00-00', 'paid', '2023-06-27');

-- --------------------------------------------------------

--
-- Table structure for table `seller`
--

CREATE TABLE `seller` (
  `seller_id` int(11) NOT NULL,
  `seller_name` varchar(50) NOT NULL,
  `seller_image` varchar(350) NOT NULL,
  `seller_about` longtext NOT NULL,
  `cert_img` varchar(350) NOT NULL,
  `seller_doc` varchar(350) NOT NULL,
  `seller_pno` varchar(12) NOT NULL,
  `seller_add` varchar(350) NOT NULL,
  `seller_state` varchar(50) NOT NULL,
  `pincode` int(11) NOT NULL,
  `seller_city` varchar(40) NOT NULL,
  `seller_email` varchar(70) NOT NULL,
  `seller_pass` varchar(250) NOT NULL,
  `seller_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `seller`
--

INSERT INTO `seller` (`seller_id`, `seller_name`, `seller_image`, `seller_about`, `cert_img`, `seller_doc`, `seller_pno`, `seller_add`, `seller_state`, `pincode`, `seller_city`, `seller_email`, `seller_pass`, `seller_date`) VALUES
(1, 'Ram Book House', 'upload/ram.jpg', 'We Sell Books', 'upload/cert.jpg', 'upload/aadhar.jpg', '9984351967', 'Opp Vivekananda Complex, 4th block, Bellairu ', 'Karnataka', 574154, 'mangaluru', 'ram@gmail.com', '$2y$10$GsHm34rYK5rB36OdgECaX.D0c4EE8sM8ZhV5WRFXhAPamddO5XoZC', '2023-06-09'),
(2, 'The BookStore', 'upload/bookstore.jpg', 'Books of all variety are sold here.', 'upload/cert.jpg', 'upload/aadhar.jpg', '9876250540', 'The BookStore, Near New Fountain Road, Mangaluru', 'Karnataka', 575814, 'mangaluru', 'bookstore@gmail.com', '$2y$10$pB1f5DQVDP7J4RjppdyzZO.pr27FoUzxWWe1ki1DzS/j5aVmW9vMO', '2023-06-12'),
(3, 'Amar Book Depot', 'upload/amar.jpg', 'We sell books!', 'upload/cert.jpg', 'upload/aadhar.jpg', '7625052022', 'Near AB Street 4th cross, Navi road', 'Karnataka', 575089, 'Mangaluru', 'amar@gmail.com', '$2y$10$8DRSFqtFzGgSCWto.T5TP.0dLgKjhsRW8gUQFgZAL.da4EDKDQrPi', '2023-06-14');

-- --------------------------------------------------------

--
-- Table structure for table `shipping`
--

CREATE TABLE `shipping` (
  `shp_id` int(11) NOT NULL,
  `od_id` int(11) NOT NULL,
  `shp_fname` varchar(50) NOT NULL,
  `shp_lname` varchar(50) NOT NULL,
  `shp_add` varchar(350) NOT NULL,
  `shp_state` text NOT NULL,
  `shp_phone` bigint(12) NOT NULL,
  `shp_email` varchar(100) NOT NULL,
  `shp_zipcode` int(6) NOT NULL,
  `shp_status` varchar(100) NOT NULL,
  `unid` varchar(200) NOT NULL,
  `shp_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `shipping`
--

INSERT INTO `shipping` (`shp_id`, `od_id`, `shp_fname`, `shp_lname`, `shp_add`, `shp_state`, `shp_phone`, `shp_email`, `shp_zipcode`, `shp_status`, `unid`, `shp_date`) VALUES
(1, 11, 'dsfsdf', 'dfdsf', 'dzfdsffsfs', '30137', 4344434, 'qas@gmail.com', 323233, '', '6496d198acb3f', '2023-06-24'),
(2, 12, 'Shreyas', 'A', 'asdfghj', '29881', 7625052048, 'shreyas@gmail.com', 575014, '', '6498452990a47', '2023-06-25'),
(3, 13, '', '', '', '', 0, '', 0, '', '649848af7836d', '2023-06-25'),
(4, 14, 'hb', 'knl', 'djfjc', '29881', 7777777777, 'shreyas@gmail.com', 44444, '', '649878aa6deba', '2023-06-25'),
(5, 15, 'Shreyas', 'knl', 'asdfghj', '29881', 3333333333, 'shreyas@gmail.com', 88888, '', '64987982abc49', '2023-06-25'),
(6, 16, 'Shreyas', 'knl', 'asdfghj', '29881', 4444444444, 'shreyas@gmail.com', 444444, '', '64987a6721e43', '2023-06-25'),
(7, 17, 'Shreyas', 'A', 'asdfghj', '29881', 7625052048, 'shreyas@gmail.com', 575014, '', '6498fd5fd452e', '2023-06-26'),
(8, 18, 'dsfsdf', 'dsfdsf', 'xvxdf', '29881', 1111111111, 'shreyas@gmail.com', 33333, '', '64990c65289b4', '2023-06-26'),
(9, 19, '', '', '', '', 0, '', 0, '', '64990d2297e4d', '2023-06-26'),
(10, 20, 'sagar', 'rao', 'nitk', '29881', 8867698886, 'sagar@gmail.com', 575025, '', '64990f5f9c257', '2023-06-26'),
(11, 21, 'sagar', 'rao', 'nitk', '', 1111111111, 'shreyas@gmail.com', 2147483647, '', '6499185a56e76', '2023-06-26'),
(12, 22, 'babitha', 'gguygyg', 'nitk', 'Delhi', 9584154141, 'babitha@yahoo.com', 58744848, '', '6499329b64bb1', '2023-06-26'),
(13, 23, 'sagar', '', '', '', 0, '', 0, '', '64993868cfdd7', '2023-06-26'),
(14, 24, 'sagar', 'rao', 'nitk', 'Karnataka', 6666666666, 'sagar@gmail.com', 575014, '', '649949afaab57', '2023-06-26'),
(15, 25, 'sagar', 'rao', 'w', 'Karnataka', 1111111111, 'amar@gmail.com', 11111, '', '649a802583767', '2023-06-27'),
(16, 26, 'sagar', 'rao', 'w', 'Karnataka', 1111111111, 'amar@gmail.com', 11111, '', '649a802583767', '2023-06-27'),
(17, 27, 'sagar', 'rao', 'w', 'Karnataka', 1111111111, 'amar@gmail.com', 11111, '', '649a802583767', '2023-06-27');

-- --------------------------------------------------------

--
-- Table structure for table `usedbook`
--

CREATE TABLE `usedbook` (
  `ubook_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `cat_id` int(11) NOT NULL,
  `book_title` varchar(550) NOT NULL,
  `book_img` varchar(300) NOT NULL,
  `book_description` varchar(1000) NOT NULL,
  `book_author` varchar(500) NOT NULL,
  `book_price` varchar(500) NOT NULL,
  `book_isbn` varchar(150) NOT NULL,
  `book_qty` varchar(150) NOT NULL,
  `book_status` varchar(250) NOT NULL,
  `book_date` date NOT NULL,
  `publication` varchar(100) NOT NULL,
  `yearofpub` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `usedbook`
--

INSERT INTO `usedbook` (`ubook_id`, `user_id`, `cat_id`, `book_title`, `book_img`, `book_description`, `book_author`, `book_price`, `book_isbn`, `book_qty`, `book_status`, `book_date`, `publication`, `yearofpub`) VALUES
(1, 3, 1, 'dfsd', 'upload/marvels-spider-man-pc-4k-jf.jpg', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Illum dolores voluptatem harum nulla quas! Quia quidem dolorem eaque culpa. Similique esse aliquid facilis aperiam itaque necessitatibus assumenda repellat quam voluptatum.', 'sd', '222', '111111111', '111', '', '2023-06-27', 'xgxfdx', '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int(11) NOT NULL,
  `user_name` varchar(50) NOT NULL,
  `user_pno` varchar(12) NOT NULL,
  `user_email` varchar(70) NOT NULL,
  `user_img` varchar(350) NOT NULL,
  `user_pass` varchar(250) NOT NULL,
  `user_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `user_name`, `user_pno`, `user_email`, `user_img`, `user_pass`, `user_date`) VALUES
(3, 'Shreyas', '7625052048', 'shreyas@gmail.com', 'upload/marvels-spider-man-pc-4k-jf.jpg', '$2y$10$MJuw.3gWYb.dahRtklzsIeOS8mxxCBrV1QAItkS2KLdhDmrpVqr0y', '2023-06-15'),
(4, 'Abhay', '2147483647', 'abhay@gmail.com', 'upload/1918799c0523bfbf1a1867c084d0fd9f.jpg', '$2y$10$14QjvK8f4/w1WUlS23nOn.QUBxM4m/yCGPuSA1ccD7/wcxx2Xow0O', '2023-06-15'),
(5, 'Sagar', '2147483647', 'sagar@gmail.com', 'upload/marvels-spider-man-pc-4k-jf.jpg', '$2y$10$Xl48gBX1qKDJVrK4D0QhxuRwVwxb5.weZ4VgesEM9dpX0gz6/URjm', '2023-06-16');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`ad_id`);

--
-- Indexes for table `book`
--
ALTER TABLE `book`
  ADD PRIMARY KEY (`book_id`);

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`cart_id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`cat_id`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`fb_id`);

--
-- Indexes for table `genfeed`
--
ALTER TABLE `genfeed`
  ADD PRIMARY KEY (`genfeed_id`);

--
-- Indexes for table `order`
--
ALTER TABLE `order`
  ADD PRIMARY KEY (`od_id`);

--
-- Indexes for table `payment`
--
ALTER TABLE `payment`
  ADD PRIMARY KEY (`pay_id`);

--
-- Indexes for table `seller`
--
ALTER TABLE `seller`
  ADD PRIMARY KEY (`seller_id`);

--
-- Indexes for table `shipping`
--
ALTER TABLE `shipping`
  ADD PRIMARY KEY (`shp_id`),
  ADD KEY `shipping_ibfk_1` (`od_id`);

--
-- Indexes for table `usedbook`
--
ALTER TABLE `usedbook`
  ADD PRIMARY KEY (`ubook_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `ad_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `book`
--
ALTER TABLE `book`
  MODIFY `book_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `cart_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=55;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `cat_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `fb_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `genfeed`
--
ALTER TABLE `genfeed`
  MODIFY `genfeed_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `order`
--
ALTER TABLE `order`
  MODIFY `od_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `payment`
--
ALTER TABLE `payment`
  MODIFY `pay_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `seller`
--
ALTER TABLE `seller`
  MODIFY `seller_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `shipping`
--
ALTER TABLE `shipping`
  MODIFY `shp_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `usedbook`
--
ALTER TABLE `usedbook`
  MODIFY `ubook_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `shipping`
--
ALTER TABLE `shipping`
  ADD CONSTRAINT `shipping_ibfk_1` FOREIGN KEY (`od_id`) REFERENCES `order` (`od_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
