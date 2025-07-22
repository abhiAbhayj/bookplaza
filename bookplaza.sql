-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 07, 2023 at 04:09 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.0.28

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
(1, 'Admin', 'admin@gmail.com', '$2y$10$1X/sjR0MRF7H5b.OaBfnNuHDSwFMj5m4ri8O4PqBsrPLSJWrWsU6G', '2023-06-23');

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
  `book_qty` varchar(150) DEFAULT NULL CHECK (`book_qty` >= 0 and `book_qty` <> -1),
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
(14, 0, 1, 4, 'CRIME ON THE FENS ', 'upload/CRIME ON THE FENS.jpg', 'A NEW CRIME THRILLER WITH A COMPELLING DETECTIVE WHO WILL STOP AT NOTHING TO AVENGE HER DAUGHTER\r\nTHE DETECTIVE DI Nikki Galena: A police detective with nothing left to lose, she\'s seen a girl die in her arms, and her daughter will never leave the hospital again. She\'s got tough on the criminals she believes did this to her. Too tough. And now she\'s been given one final warning: make it work with her new sergeant, DS Joseph Easter, or she\'s out.\r\n\r\nHER PARTNER DS Joseph Easter is the squeaky-clean new member of the team. But his nickname \"Holy Joe\" belies his former life as a soldier. He has an estranged daughter who blames him for everything that went wrong with their family.\r\n\r\nTHEIR ADVERSARY is a ruthless man who holds DI Galena responsible for his terrible disfigurement.\r\n\r\nTHE TOWN is being terrorised by gangs of violent thugs, all wearing identical hideous masks. Then a talented young female student goes missing on the marsh and Nikki and Joseph find themselves joining forces wi', 'Ellis, Joy', '460', '1911021613', '6', 'available', '2023-06-12', 'Joffe Books Mystery, Crime Thriller, Suspense Fiction', '2016-11-01'),
(15, 0, 2, 4, 'CRIME ON THE FENS ', 'upload/CRIME ON THE FENS.jpg', 'A NEW CRIME THRILLER WITH A COMPELLING DETECTIVE WHO WILL STOP AT NOTHING TO AVENGE HER DAUGHTER\r\nTHE DETECTIVE DI Nikki Galena: A police detective with nothing left to lose, she\'s seen a girl die in her arms, and her daughter will never leave the hospital again. She\'s got tough on the criminals she believes did this to her. Too tough. And now she\'s been given one final warning: make it work with her new sergeant, DS Joseph Easter, or she\'s out.\r\n\r\nHER PARTNER DS Joseph Easter is the squeaky-clean new member of the team. But his nickname \"Holy Joe\" belies his former life as a soldier. He has an estranged daughter who blames him for everything that went wrong with their family.\r\n\r\nTHEIR ADVERSARY is a ruthless man who holds DI Galena responsible for his terrible disfigurement.\r\n\r\nTHE TOWN is being terrorised by gangs of violent thugs, all wearing identical hideous masks. Then a talented young female student goes missing on the marsh and Nikki and Joseph find themselves joining forces wi', 'Ellis, Joy', '410', '1911021613\r\n', '2', 'available', '2023-06-12', ' Joffe Books Mystery, Crime Thriller, Suspense Fiction', '2016-11-01'),
(16, 0, 1, 5, 'Sandblast', 'upload/Sandblast a Gripping New Military Thriller.jpg', 'Fans of Vince Flynn and Lee Child rejoice! It’s time for your next action hero….\r\n \r\nLieutenant Faraz Abdallah is willing to do anything for his country, but this time, his ultimate patriot mission will take him into the belly of the beast….and right into the heart of the Taliban….\r\n \r\nWritten with authentic detail, former foreign correspondent Al Pessin takes the reader on a pulse-pounding adventure, where Faraz learns that in order to defeat the enemy, you have to become your enemy.\r\n \r\nThe plane carrying the Secretary of Defense is blown out of the sky. The Defense Intelligence Agency greenlights an unprecedented response—Operation: Sandblast.\r\n \r\nPentagon Covert Ops runner Bridget Davenport, must find someone to infiltrate the Taliban, get to the terrorist mastermind, and at all costs stop his plan for an attack more destructive than 9/11. Bridget finds young California-raised Afghan-American Lieutenant Faraz Abdallah. His heritage and military training make him the perfect underco', 'Al Pessin', '709', '9780786046720', '2', 'available', '2023-06-12', 'Pinnacle Books', '2020-11-02'),
(17, 0, 3, 5, 'The Complete Bragg', 'upload/A Bragg Thriller Books 1-8.jpg', 'ALL EIGHT POWERHOUSE NOVELS IN JACK LYNCH’S EDGAR AWARD-NOMINATED AND TWO-TIME SHAMUS AWARD-NOMINATED BRAGG SERIES…NOW IN ONE VOLUME!\r\n\r\n“Bragg is authentic, gripping, gritty.” San Francisco Examiner', 'Jack Lynch', '449', '9781941298305', '19', '', '2023-06-14', 'Bragg Books', '2020-06-01'),
(18, 0, 3, 5, 'STANDPOINT ', 'upload/STANDPOINT a gripping thriller full of suspense.jpg', 'Thomas Bladen works in surveillance for a shadowy unit of the British government. During a routine operation, he sees a shooting which will expose a world of corruption and danger. When his on-again, off-again girlfriend Miranda is drawn into the conspiracy, Thomas must decide who he can trust to help him save her life.', 'Thompson, Derek', '1435', '1511628235', '7', '', '2023-06-14', 'Joffe Books Spy Thriller Books and Mystery', '2015-10-03'),
(19, 0, 3, 5, 'Singapore Girl', 'upload/Singapore Girl An edge of your seat thriller that will have you hooked.jpg', 'A headless body, found on a causeway between Singapore and Malaya, gets assigned to ex-military investigator Ash Carter. Now working for the government, he needs to find out if this is just another drug-war punishment or something more. His search for answers takes him through Malaya as far as Penang. But with children going missing, he starts to uncover connections to the establishment. He knows he\'s getting close to the truth. Too close... The investigation gets shut down. But he knows it\'s not over. And it\'s not in his nature to quit.\r\n', 'Bailey, Murray', '760', '9781999795436', '12', '', '2023-06-15', 'Heritage Books', '2018-11-02'),
(21, 0, 3, 1, 'Quest for the Crystal Crown', 'upload/The story pirates present Quest for the Crystal Crown Edition First edition.jpg', 'An enchanted arrow pierces the wall of Hillview--the city is under attack! Years ago, a powerful crystal crown was stolen from a group of magic wielders called Lysors. Lacking the crown\'s protection, the Lysors hid themselves behind the city walls, shut off from the rest of the world. But with danger upon them once more, can Laura, a spunky girl with a knack for adventure, journey outside Hillview . . . and reclaim the crystal crown?', 'Bondor-Stone, Annabeth ; White, Connor ', '1050', '2019005379', '11', '', '2023-06-15', 'Random House Books for Young Readers', '2020-10-01'),
(22, 0, 2, 5, 'The Russian Defector', 'upload/The Russian Defector A Justin Hall Spy Thriller.jpg', 'The Justin Hall Series\r\n\r\nThe Russian Defector is the fifteenth novel in this best-selling series with thousands of five-star reviews and hundreds of thousands of sales and downloads. Each book is a clean, self-contained international espionage mission without cliffhangers and can be enjoyed on its own. The Russian Defector also contains exclusive bonus content.\r\n\r\nIf you’re a fan of Silva, Baldacci, Child, Clancy, DeMille, le Carré, Ludlum, Thor or Flynn, you’ll love The Russian Defector. With never-ending suspense, action, intricate plots, and captivating characters.\r\n\r\n', 'Ethan Jones', '299', '9781393759232', '3', '', '2023-06-15', 'Knightsville Books', '2020-10-03'),
(23, 0, 2, 5, 'The Complete Bragg ', 'upload/A Bragg Thriller Books 1-8.jpg', 'ALL EIGHT POWERHOUSE NOVELS IN JACK LYNCH’S EDGAR AWARD-NOMINATED AND TWO-TIME SHAMUS AWARD-NOMINATED BRAGG SERIES…NOW IN ONE VOLUME!\r\n\r\n“Bragg is authentic, gripping, gritty.” San Francisco Examiner', 'Jack Lynch', '449', '9781941298305', '6', '', '2023-06-15', 'Bragg Books', '2020-06-01'),
(24, 0, 1, 5, 'STANDPOINT', 'upload/STANDPOINT a gripping thriller full of suspense.jpg', 'Thomas Bladen works in surveillance for a shadowy unit of the British government. During a routine operation, he sees a shooting which will expose a world of corruption and danger. When his on-again, off-again girlfriend Miranda is drawn into the conspiracy, Thomas must decide who he can trust to help him save her life.', 'Thompson, Derek', '1389', '1511628235', '8', '', '2023-06-15', 'Joffe Books Spy Thriller Books and Mystery', '2015-10-03'),
(26, 0, 1, 6, 'Restoration and Eighteenth', 'upload/192cd6f3a9ca20f45e9b5f545de13287-d.jpg', 'The plays are fully annotated for the modern reader and are accompanied by six illustrations. The close relationship between theater and society during the period continues to be the focus of “Contexts.” The editor offers contemporary discussions of the following topics: “On Wit, Humour, and Laughter: 1660–1775,” “The Collier Controversy: 1698,” “Steele and Dennis: On The Man of Mode and The Conscious Lovers,” and “Stages, Actors, and Audiences.” “Criticism” has been revised to reflect approaches in scholarly interpretations. Two seminal essays from the First Edition have been retained―Charles Lamb’s appreciation of the period’s comedy and L. C. Knights’s condemnation of it. New essays by Jocelyn Powell, Harriet Hawkins, Elin Diamond, Martin Price, and Laura Brown have been added.', 'Scott McMillin', '1700', '0393963349', '5', '', '2023-06-29', 'W. W. Norton & Company', '1997-02-12'),
(27, 0, 1, 6, 'Comedy and the Rise of Rome', 'upload/6917fb8ad1165d7c6de13b164ec3ac93-d.jpg', 'Comedy and the Rise of Rome invites the reader to consider Roman comedy in the light of history and Roman history in the light of comedy. Plautus and Terence base their dramas on the New Comedy of fourth- and third-century BC Greece. Yet many of the themes with which they engage are peculiarly alive in the Rome of the Hannibalic war, and the conquest of Macedon. This study takes issues as diverse as the legal status of the prisoner of war, the ethics of ambush, fatherhood and command, and the clash of maritime and agrarian economies, and examines responses to them both on the comic stage and in the world at large. This is a substantially new departure in ways of thinking about Roman comedy and one that opens it up to a far wider public than has previously been the case.', 'Matthew Leigh', '5000', '0199290288', '6', '', '2023-06-29', 'Oxford University Press, USA', '2005-10-27'),
(28, 0, 3, 6, 'The Maculate Muse', 'upload/5a0e9c283cbd22760473390701a1b3ff-d.jpg', 'The pervasive and unrestrained use of obscenity has long been acknowledged as a major feature of fifth-century Attic Comedy; no other Western art form relies so heavily on the sexual and scatological dimensions of language. This acclaimed book, now in a new edition, offers both a comprehensive discussion of the dynamics of Greek obscenity and a detailed commentary on the terminology itself.\r\n', 'Jeffrey Henderson', '573', '0195066855', '6', '', '2023-06-29', 'Oxford University Press', '1991-02-14'),
(29, 0, 3, 6, 'Fantasy and Colonialism', 'upload/ee1b60b6be00538afab3f913e1e2f675-d.jpg', 'This work assesses the role and character of comedy and fantasy in colonial societies from India to Ireland, Australia to Cuba, Africa to North America. It deals with both oral and written traditions, the history of comic and fantastic discourse, and visual, theatrical and literary representations.', 'Graeme Harper', '1015', '0826448666', '4', '', '2023-06-29', 'Continuum International Publishing Group Ltd.', '0000-00-00'),
(30, 0, 3, 7, 'A Giant at the Door', 'upload/a488f16415aa3eadf82b10370a89a6ff-d.jpg', '‘Here’s a knocking indeed!’ says the Porter in Shakespeare’s Scottish play (Act II, Scene 3) and immediately puts himself into role in order to deal with the demands of such an early call after a late night of drinking and carousal: ‘If a man were porter of hell-gate...’. But what roles does the porter of curriculum-gate take on in order to deal with drama’s persistent demands for entry? Ah, that depends upon the temperature of the times. We, who have been knocking for what seems to be a very long time, know well that when evaluation and measurement criteriaare demanded as evidence of drama’s ef cacy, an examiner stands as gatekeeper.', 'John O’Toole, Madonna Stinson', '5000', '1402093691', '5', '', '2023-06-29', 'Springer Netherlands', '2009-03-17'),
(32, 0, 3, 7, 'Stages of Evil', 'upload/b9a54c89628e43506d805f6211196bea-d.jpg', '\"The evil that men do\" has been chronicled for thousands of years on the European stage, and perhaps nowhere else is human fear of our own evil more detailed than in its personifications in theater. Early writers used theater to communicate human experiences and to display reverence for the gods governing daily life. Playwrights from Euripides onward sought inspiration from this interplay between the worldly and the occult, using human belief in the divine to govern characters\' actions within a dramatic arena. ', 'Robert Lima', '2100', '9780813123622', '8', '', '2023-06-29', 'The University Press of Kentucky', '2005-12-23'),
(33, 0, 3, 9, 'Java Thread Programming', 'upload/09783ca72afa201797c5a8c87bef161c-d.jpg', 'Java Thread Programming shows you how to take full advantage of Java\'s thread facilities: when to use threads to increase your program\'s efficiency, how to use them effectively, and how to avoid common mistakes. There is thorough coverage of the Thread API, ThreadGroup classes, the Runnable interface, and the synchronized operator. Extensive, complete, code examples show programmers the details of creating and managing threads in real-world applications.', 'Paul Hyde', '449', '9780672315855', '7', '', '2023-06-29', 'Sams City', '2023-05-24'),
(34, 0, 2, 9, 'Modern C++ design', 'upload/9d2428fd8e7f91bd6801da7e3da62db5-d.jpg', 'Modern C++ Design, Andrei Alexandrescu opens new vistas for C++ programmers. Displaying extraordinary creativity and programming virtuosity, Alexandrescu offers a cutting-edge approach to design that unites design patterns, generic programming, and C++, enabling programmers to achieve expressive, flexible, and highly reusable code.     This book introduces the concept of generic components–reusable design templates that produce boilerplate code for compiler consumption–all within C++. Generic components enable an easier and more seamless transition from design to application code, generate code that better expresses the original design intention, and support the reuse of design structures with minimal recoding.     The author describes the specific C++ techniques and features that are used in building generic components and goes on to implement industrial strength generic components for real-world applications. Recurring issues that C++ developers face in their day-to-day activity are ', 'Andrei Alexandrescu', '655', '0201704315', '6', '', '2023-06-29', 'Addison-Wesley Professional', '2001-02-13'),
(35, 0, 2, 9, 'Cross-Platform Web Services', 'upload/fced3250ce29d723e23270447babac1e-d.jpg', 'As the need for application-to-application communication and platform interoperability continues to grow, Web service developers need to be skilled in the technologies and languages that make this communication possible. Web services provide a language and platform independent standard for creating and connecting code that allows software applications (remote objects) to communicate with each other and users, via a network or the Web. Rather than focus on one specific technology or language, Cross-Platform Web Services Using C# and Java teaches how to integrate the various technologies of Web services using the two languages expected to dominate this growing area.', 'Brian Hochgurtel', '3300', '1584502622', '8', '', '2023-06-29', 'Charles River Media	', '2003-03-20'),
(36, 0, 2, 6, 'Comedy and the Rise of Rome', 'upload/6917fb8ad1165d7c6de13b164ec3ac93-d.jpg', 'Comedy and the Rise of Rome invites the reader to consider Roman comedy in the light of history and Roman history in the light of comedy. Plautus and Terence base their dramas on the New Comedy of fourth- and third-century BC Greece. Yet many of the themes with which they engage are peculiarly alive in the Rome of the Hannibalic war, and the conquest of Macedon. This study takes issues as diverse as the legal status of the prisoner of war, the ethics of ambush, fatherhood and command, and the clash of maritime and agrarian economies, and examines responses to them both on the comic stage and in the world at large. This is a substantially new departure in ways of thinking about Roman comedy and one that opens it up to a far wider public than has previously been the case.', 'Matthew Leigh', '5000', '9781423784715', '7', '', '2023-06-29', 'Oxford University Press, USA', '2005-05-27'),
(37, 0, 2, 6, 'The Maculate Muse', 'upload/5a0e9c283cbd22760473390701a1b3ff-d.jpg', 'The pervasive and unrestrained use of obscenity has long been acknowledged as a major feature of fifth-century Attic Comedy; no other Western art form relies so heavily on the sexual and scatological dimensions of language. This acclaimed book, now in a new edition, offers both a comprehensive discussion of the dynamics of Greek obscenity and a detailed commentary on the terminology itself.', 'Jeffrey Henderson', '573', '0195066855', '7', '', '2023-06-29', 'Oxford University Press', '1991-02-14'),
(38, 0, 2, 7, 'The Curse of Kali', 'upload/2f58605185bc830914ddcc439fdd9fa0-d.jpg', 'Set in exotic mid-19th-century India, this is a story of love, passion, intrigue and demonic possession.', 'Audrey Blankenhagen', '1537', '9781403380388', '6', '', '2023-06-29', 'AuthorHouse', '2003-01-09'),
(39, 0, 2, 7, 'Aliens and Englishness ', 'upload/bdf4f42604f6012086b70d2e7b54d3c4-d.jpg', 'Covering a wide variety of plays from 1550–1600, including Shakespeare\'s second tetralogy, this book explores moral, historical, and comic plays as contributions to Elizabethan debates on Anglo-foreign relations in England. The economic, social, religious, and political issues that arose from inter-British contact and Continental immigration into England are reinvented and rehearsed on the public stage. Kermode uncovers two broad \'alien stages\' in the drama: distinctive but overlapping processes by which the alien was used to posit ideas and ideals of Englishness. ', 'Lloyd Edward Kermode', '1164', '9780521899536', '7', '', '2023-06-29', 'Cambridge University Press', '2009-03-19'),
(40, 0, 2, 1, 'Brain Fiction ', 'upload/3698495bb07da10ef4c35381b0f6d38e-d.jpg', 'Some neurological patients exhibit a striking tendency to confabulate—to construct false answers to a question while genuinely believing that they are telling the truth. A stroke victim, for example, will describe in detail a conference he attended over the weekend when in fact he has not left the hospital. Normal people, too, sometimes have a tendency to confabulate; rather than admitting \"I don\'t know,\" some people will make up an answer or an explanation and express it with complete conviction. In Brain Fiction, William Hirstein examines confabulation and argues that its causes are not merely technical issues in neurology or cognitive science but deeply revealing about the structure of the human intellect.', 'William Hirstein', '1676', '9780262083386', '8', '', '2023-06-29', 'The MIT Press', '2006-08-11'),
(41, 0, 1, 1, 'Crime Fiction', 'upload/3c5fe227995377c8760e76fce730a8d8-d.jpg', 'Crime Fiction provides a lively introduction to what is both a wide-ranging and hugely popular literary genre. Using examples from a variety of novels, short stories, films and televisions series, John Scaggs: presents a concise history of crime fiction - from biblical narratives to James Ellroy - broadening the genre to include revenge tragedy and the gothic novel explores the key sub-genres of crime fiction, such as \'Rational Criminal Investigation\', The Hard-Boiled Mode\', \'The Police Procedural\' and \'Historical Crime Fiction\' locates texts and their recurring themes and motifs in a wider social and historical context outlines the various critical concepts that are central to the study of crime fiction, including gender, narrative theory and film theory considers contemporary television series like C.S.I.: Crime Scene Investigation alongside the \'classic\' whodunnits of Agatha Christie. ', 'John Scaggs', '216', '0415318246', '7', '', '2023-06-29', 'Routledge', '2005-01-27'),
(42, 0, 1, 2, 'Documenting World Politics', 'upload/e4ee1d842003cba5bb1fbdfb27a6b444-d.jpg', 'As a central component of contemporary culture, films mirror and shape political debate. Reflecting on this development, scholars in the field of International Relations (IR) increasingly explore the intersection of TV series, fiction film and global politics. So far, however, virtually no systematic scholarly attention has been given to documentary film within IR.  This book fills this void by offering a critical companion to the subject aimed at assisting students, teachers and scholars of IR in understanding and assessing the various ways in which documentary films matter in global politics.', 'Rens Van Munster', '4500', '9781138797789', '8', '', '2023-06-29', 'Routledge	', '2015-02-11'),
(43, 0, 1, 2, 'Untangling the Web', 'upload/491079c167616b83dd53772d1033b7b4-d.jpg', 'The World Wide Web is the most revolutionary innovation of our time. In the last decade, it has utterly transformed our lives. But what real effects is it having on our social world?  What does it mean to be a modern family when dinner table conversations take place over smartphones? What happens to privacy when we readily share our personal lives with friends and corporations? Are our Facebook updates and Twitterings inspiring revolution or are they just a symptom of our global narcissism? What counts as celebrity, when everyone can have a following or be a paparazzo? ', 'Aleks Krotoski', '366', '0571303668', '9', '', '2023-06-29', 'Faber & Faber Non-Fiction', '2013-05-20'),
(44, 0, 1, 3, '100 Must-Read Crime Novels', 'upload/b7bc8a0bb66da1800d36ab1bf188d557-d.jpg', 'Want to become a crime novel buff, or expand your reading in your favourite genre? With 100 of the best titles fully reviewed and a further 500 recommended, you\'ll quickly become an expert on the world of crime.', 'Paul Roseby', '300', '0713675845', '7', '', '2023-06-29', 'A&C Black', '2006-01-01'),
(45, 0, 1, 3, 'Justice', 'upload/4342bd28ef77b2a6ddce12e3ebdd1c0a-d.jpg', 'The eighth book in the hugely popular Peter Decker and Rina Lazarus series from New York Times bestselling author Faye Kellerman  The cruel and bizarre slaying of a beautiful teen leads Detective Decker into the dark heart of an exotic subculture: the seamy, sometimes violent world of Southern California\'s rootless, affluent youth. But even the confession of a disturbed kid with cold \"killer eyes\" cannot soothe Decker\'s inner torment. For he knows in his gut this crime goes much deeper and higher than anyone expects – and that true justice, brutal and complete, has yet to be done.', 'Faye Kellerman', '389', '0380724987', '10', '', '2023-06-29', 'Avon,HarperCollins	', '2014-03-27'),
(46, 0, 1, 9, 'Modern C++ design', 'upload/9d2428fd8e7f91bd6801da7e3da62db5-d.jpg', 'Modern C++ Design, Andrei Alexandrescu opens new vistas for C++ programmers. Displaying extraordinary creativity and programming virtuosity, Alexandrescu offers a cutting-edge approach to design that unites design patterns, generic programming, and C++, enabling programmers to achieve expressive, flexible, and highly reusable code.     This book introduces the concept of generic components–reusable design templates that produce boilerplate code for compiler consumption–all within C++. Generic components enable an easier and more seamless transition from design to application code, generate code that better expresses the original design intention, and support the reuse of design structures with minimal recoding.     The author describes the specific C++ techniques and features that are used in building generic components and goes on to implement industrial strength generic components for real-world applications. Recurring issues that C++ developers face in their day-to-day activity are ', 'Andrei Alexandrescu', '655', '9780201704310', '7', '', '2023-06-29', 'Addison-Wesley Professional', '2001-02-13'),
(47, 0, 2, 2, 'Murderous Maths', 'upload/5f949f58d59c63fe4ad890bf120c1e41-g.jpg', 'The Most Epic Book of Maths EVER (formerly The Murderous Maths of Everything) is one big book with (nearly) all the answers to everything in maths EVER. Readers can join the cast of crazy characters on a tour of the Murderous Maths building to discover the darkest and deadliest mathematical secrets, including: a sure-fire way how to make birthdays last twice as long, how the number 1 starts fights, how triangles lead to murder, and much more. Maths has never been so much fun!', 'Kjartan Poskitt & Rob Davis', '514', '9781407163635', '7', '', '2023-06-29', 'Scholastic Non-Fiction', '2015-10-01'),
(48, 0, 3, 2, 'Most Interesting', 'upload/61e41dde77bfc8786928b7cee2682052-d.jpg', 'VIVE LA REVOLUTION!Dolphins shed and replace their skin every two hoursPluto was named by an eleven-year-old schoolgirlA donkey\'s personality is called its donkeyshipFreud didn\'t lose his virginity until the age of 30The bastion that was QI has been stormed, elves have been put to the guillotine, the readers are in charge.After nine and a half years of cumulative reading time, readers of the QI App have selected the definitive QI collection.With a new introduction by John Lloyd and John Mitchinson, and packed full of handsome images, these ten chapters form the best-of to end all best-ofs.', 'John Lloyd, John Mitchinson', '366', 'B006L86YBO', '8', '', '2023-06-29', 'Faber & Faber Non Fiction	', '2011-12-14'),
(49, 0, 3, 3, 'Hunting Badger ', 'upload/d1e313823f5e243f1fedf55eb19f9968-d.jpg', 'The fourteenth novel featuring Leaphorn and Chee by New York Times bestselling author Tony Hillerman, now reissued in the Premium Plus format.  Three men raid the gambling casino run by the Ute nation and then disappear into the maze of canyons on the Utah-Arizona border. When the FBI, with its helicopters and high-tech equipment, focuses on a wounded deputy sheriff as a possible suspect, Navajo Tribal Police Sergeant Jim Chee and his longtime colleague, retired Lieutenant Joe Leaphorn, launch an investigation of their own. Chee sees a dangerous flaw in the federal theory; Leaphorn sees intriguing connections to the exploits of a legendary Ute bandit-hero. And together, they find themselves caught up in the most perplexing—and deadly—criminal manhunt of their lives.', 'Tony Hillerman', '717', '0060192895', '12', '', '2023-06-29', 'Harper', '1999-11-09');

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `cart_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `book_id` int(11) NOT NULL,
  `ubook_id` int(11) NOT NULL,
  `type` varchar(10) NOT NULL,
  `cart_qty` int(11) NOT NULL,
  `cart_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`cart_id`, `user_id`, `book_id`, `ubook_id`, `type`, `cart_qty`, `cart_date`) VALUES
(43, 4, 14, 0, 'new', 3, '2023-07-03'),
(44, 4, 16, 0, 'new', 2, '2023-07-03'),
(52, 5, 35, 0, 'new', 1, '2023-07-04'),
(53, 5, 0, 8, 'used', 1, '2023-07-05');

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
(15, 1, 14, 4, 'Super', '2023-06-25'),
(16, 1, 16, 5, 'I like this book', '2023-06-26'),
(19, 3, 19, 3, 'super', '2023-06-27');

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
(2, 'Shreyas', 7, 'shreyas@gmail.com', 'nice website', '2023-06-15'),
(6, 'Abhay', 4, 'abhay@gmail.com', 'good website', '2023-06-15'),
(7, 'Sagar', 5, 'sagar@gmail.com', 'Superb', '2023-06-16'),
(9, 'Shreyas', 7, 'shreyas@gmail.com', 'hello', '2023-06-20');

-- --------------------------------------------------------

--
-- Table structure for table `order`
--

CREATE TABLE `order` (
  `od_id` int(11) NOT NULL,
  `seller_id` int(11) NOT NULL,
  `publicseller_id` int(11) NOT NULL,
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

INSERT INTO `order` (`od_id`, `seller_id`, `publicseller_id`, `user_id`, `book_id`, `qty`, `amt`, `od_status`, `unid`, `od_date`) VALUES
(1, 1, 0, 5, 14, 1, 460, 'ordered', '64a12149788b9', '2023-07-02'),
(2, 1, 0, 5, 14, 1, 460, 'ordered', '64a121b4b1968', '2023-07-02'),
(3, 1, 0, 5, 14, 1, 460, 'ordered', '64a1277c3201d', '2023-07-02'),
(4, 1, 0, 5, 16, 1, 709, 'ordered', '64a1277c3201d', '2023-07-02'),
(5, 0, 5, 5, 2, 1, 100, 'ordered', '64a12fe7bd870', '2023-07-02'),
(6, 0, 5, 5, 3, 1, 300, 'ordered', '64a14b29b2c0d', '2023-07-02'),
(7, 0, 5, 5, 6, 1, 5454, 'ordered', '64a14b29b2c0d', '2023-07-02'),
(8, 2, 0, 5, 24, 8, 11112, 'ordered', '64a16609a2935', '2023-07-02'),
(9, 2, 0, 5, 12, 1, 1068, 'ordered', '64a16609a2935', '2023-07-02'),
(10, 2, 0, 5, 23, 1, 449, 'ordered', '64a16609a2935', '2023-07-02'),
(11, 3, 0, 5, 23, 1, 449, 'ordered', '64a18bed0b5aa', '2023-07-02'),
(12, 3, 0, 5, 12, 1, 1068, 'ordered', '64a18bed0b5aa', '2023-07-02'),
(13, 3, 0, 5, 17, 1, 449, 'ordered', '64a18bed0b5aa', '2023-07-02'),
(14, 1, 0, 5, 14, 2, 920, 'ordered', '64a3bd0b1ca3b', '2023-07-04'),
(15, 1, 0, 5, 16, 1, 709, 'ordered', '64a3bd55f24fd', '2023-07-04'),
(16, 2, 0, 5, 22, 1, 299, 'ordered', '64a3be126ba5f', '2023-07-04'),
(17, 2, 0, 5, 22, 2, 598, 'ordered', '64a3c40366e81', '2023-07-04'),
(18, 2, 0, 5, 22, 1, 299, 'ordered', '64a3c47fb8601', '2023-07-04'),
(19, 2, 0, 5, 22, 3, 897, 'ordered', '64a3c8be22af2', '2023-07-04'),
(20, 2, 0, 5, 23, 1, 449, 'ordered', '64a3c9389e921', '2023-07-04'),
(21, 1, 0, 9, 14, 2, 920, 'ordered', '64a51cca6b9aa', '2023-07-05'),
(22, 1, 0, 9, 14, 1, 460, 'ordered', '64a51ce01e6bf', '2023-07-05');

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
(27, 27, 'card', '', '1068', 'dcdsf', '12333333', 0, '0000-00-00', 'paid', '2023-06-27'),
(28, 28, 'cash', '', '709', '', '', 0, '0000-00-00', 'pending', '2023-07-02'),
(29, 29, 'cash', '', '337', '', '', 0, '0000-00-00', 'pending', '2023-07-02'),
(30, 1, 'cash', '', '920', '', '', 0, '0000-00-00', 'pending', '2023-07-02'),
(31, 2, 'cash', '', '410', '', '', 0, '0000-00-00', 'pending', '2023-07-02'),
(32, 3, 'cash', '', '337', '', '', 0, '0000-00-00', 'pending', '2023-07-02'),
(33, 4, 'cash', '', '300', '', '', 0, '0000-00-00', 'pending', '2023-07-02'),
(34, 5, 'cash', '', '460', '', '', 0, '0000-00-00', 'pending', '2023-07-02'),
(35, 6, 'cash', '', '460', '', '', 0, '0000-00-00', 'pending', '2023-07-02'),
(36, 7, 'cash', '', '460', '', '', 0, '0000-00-00', 'pending', '2023-07-02'),
(37, 1, 'cash', '', '460', '', '', 0, '0000-00-00', 'pending', '2023-07-02'),
(38, 2, 'cash', '', '300', '', '', 0, '0000-00-00', 'pending', '2023-07-02'),
(39, 3, 'cash', '', '299', '', '', 0, '0000-00-00', 'pending', '2023-07-02'),
(40, 4, 'cash', '', '460', '', '', 0, '0000-00-00', 'pending', '2023-07-02'),
(41, 5, 'cash', '', '460', '', '', 0, '0000-00-00', 'pending', '2023-07-02'),
(42, 1, 'cash', '', '460', '', '', 0, '0000-00-00', 'pending', '2023-07-02'),
(43, 2, 'cash', '', '460', '', '', 0, '0000-00-00', 'pending', '2023-07-02'),
(44, 3, 'cash', '', '460', '', '', 0, '0000-00-00', 'pending', '2023-07-02'),
(45, 4, 'cash', '', '709', '', '', 0, '0000-00-00', 'pending', '2023-07-02'),
(46, 5, 'cash', '', '100', '', '', 0, '0000-00-00', 'pending', '2023-07-02'),
(47, 6, 'cash', '', '300', '', '', 0, '0000-00-00', 'pending', '2023-07-02'),
(48, 7, 'cash', '', '5454', '', '', 0, '0000-00-00', 'pending', '2023-07-02'),
(49, 8, 'cash', '', '11112', '', '', 0, '0000-00-00', 'pending', '2023-07-02'),
(50, 9, 'cash', '', '1068', '', '', 0, '0000-00-00', 'pending', '2023-07-02'),
(51, 10, 'cash', '', '449', '', '', 0, '0000-00-00', 'pending', '2023-07-02'),
(52, 11, 'cash', '', '449', '', '', 0, '0000-00-00', 'paid', '2023-07-02'),
(53, 12, 'cash', '', '1068', '', '', 0, '0000-00-00', 'pending', '2023-07-02'),
(54, 13, 'cash', '', '449', '', '', 0, '0000-00-00', 'pending', '2023-07-02'),
(55, 14, 'cash', '', '920', '', '', 0, '0000-00-00', 'pending', '2023-07-04'),
(56, 15, 'cash', '', '709', '', '', 0, '0000-00-00', 'pending', '2023-07-04'),
(57, 16, 'cash', '', '299', '', '', 0, '0000-00-00', 'pending', '2023-07-04'),
(58, 17, 'cash', '', '598', '', '', 0, '0000-00-00', 'pending', '2023-07-04'),
(59, 18, 'cash', '', '299', '', '', 0, '0000-00-00', 'pending', '2023-07-04'),
(60, 19, 'cash', '', '897', '', '', 0, '0000-00-00', 'pending', '2023-07-04'),
(61, 20, 'cash', '', '449', '', '', 0, '0000-00-00', 'pending', '2023-07-04'),
(62, 21, 'cash', '', '920', '', '', 0, '0000-00-00', 'pending', '2023-07-05'),
(63, 22, 'cash', '', '460', '', '', 0, '0000-00-00', 'pending', '2023-07-05');

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
(1, 'Ram Book Depot', 'upload/ram23.jpg', 'We sell only best books!', 'upload/cert.jpg', 'upload/aadhar.webp', '9765789067', 'kunigal-magadi Rd,Sondalagere', 'karnataka', 572126, 'mangaluru', 'ram@gmail.com', '$2y$10$vIdnV5DiqHsHFeX3WnLZgOZnEc7BeA/aQcsUDu5QhOFf1U4vDcUMq', '2023-07-03'),
(2, 'The BookStore', 'upload/BOOKSTORE.jpg', 'Books of all variety are sold here.', 'upload/cert.jpg', 'upload/aadhar.webp', '9876250540', 'The BookStore, Near New Fountain Road, Mangaluru', 'Karnataka', 575814, 'mangaluru', 'bookstore@gmail.com', '$2y$10$uLv1bb9RPc3XRmwyDZapzuNIoGfLgpruMjD0wDBX3lMDE1.RrqRVe', '2023-06-12'),
(3, 'Amar Book Depot', 'upload/amar.jpg', 'We sell books!', 'upload/cert.jpg', 'upload/aadhar.webp', '7625052022', 'Near AB Street 4th cross, Navi road', 'Karnataka', 575089, 'Mangaluru', 'amar@gmail.com', '$2y$10$3WAP6Uf/zomu2Nzr3Z2QquzbEghKJ48LR7D7NEkOH/KtELgNn6GSq', '2023-06-14');

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
(4, 14, 'hb', 'knl', 'djfjc', '29881', 7777777777, 'shreyas@gmail.com', 44444, '', '649878aa6deba', '2023-06-25'),
(5, 15, 'Shreyas', 'knl', 'asdfghj', '29881', 3333333333, 'shreyas@gmail.com', 88888, '', '64987982abc49', '2023-06-25'),
(6, 16, 'Shreyas', 'knl', 'asdfghj', '29881', 4444444444, 'shreyas@gmail.com', 444444, '', '64987a6721e43', '2023-06-25'),
(7, 17, 'Shreyas', 'A', 'asdfghj', '29881', 7625052048, 'shreyas@gmail.com', 575014, '', '6498fd5fd452e', '2023-06-26'),
(8, 18, 'dsfsdf', 'dsfdsf', 'xvxdf', '29881', 1111111111, 'shreyas@gmail.com', 33333, '', '64990c65289b4', '2023-06-26'),
(10, 20, 'sagar', 'rao', 'nitk', '29881', 8867698886, 'sagar@gmail.com', 575025, '', '64990f5f9c257', '2023-06-26'),
(11, 21, 'sagar', 'rao', 'nitk', '', 1111111111, 'shreyas@gmail.com', 2147483647, '', '6499185a56e76', '2023-06-26'),
(12, 22, 'babitha', 'gguygyg', 'nitk', 'Delhi', 9584154141, 'babitha@yahoo.com', 58744848, '', '6499329b64bb1', '2023-06-26'),
(14, 24, 'sagar', 'rao', 'nitk', 'Karnataka', 6666666666, 'sagar@gmail.com', 575014, '', '649949afaab57', '2023-06-26'),
(15, 25, 'sagar', 'rao', 'w', 'Karnataka', 1111111111, 'amar@gmail.com', 11111, '', '649a802583767', '2023-06-27'),
(16, 26, 'sagar', 'rao', 'w', 'Karnataka', 1111111111, 'amar@gmail.com', 11111, '', '649a802583767', '2023-06-27'),
(17, 27, 'sagar', 'rao', 'w', 'Karnataka', 1111111111, 'amar@gmail.com', 11111, '', '649a802583767', '2023-06-27'),
(18, 28, 'admin', 'mehrooz', 'chffj', 'Kerala', 1234567890, 'admin@gmail.com', 567690, '', '64a0f1438d1fc', '2023-07-02'),
(19, 29, 'admin', 'mehrooz', 'chffj', 'Kerala', 1234567890, 'admin@gmail.com', 567690, '', '64a0f1438d1fc', '2023-07-02'),
(20, 1, 'mohammed', 'mehrooz', 'kerala', 'Kerala', 9072202229, 'mrz@gmail.com', 323223, '', '64a113bddc2f3', '2023-07-02'),
(21, 2, 'mohammed', 'nihad', 'anfjkakdjadn', 'Kerala', 1212121212, 'nihad@gmail.com', 567690, '', '64a1140eb1e24', '2023-07-02'),
(22, 3, 'admin', 'mehrooz', 'chffj', 'Kerala', 123456777, 'admin@gmail.com', 567690, '', '64a1149bf17cc', '2023-07-02'),
(23, 4, 'mohammed', 'mehrooz', 'kerala', 'Kerala', 9072202229, 'mrz@gmail.com', 323223, '', '64a1193200831', '2023-07-02'),
(24, 5, 'admin', 'mehrooz', 'chffj', 'Kerala', 123456777, 'admin@gmail.com', 567690, '', '64a1197f9b168', '2023-07-02'),
(25, 6, 'mohammed', 'mehrooz', 'kerala', 'Kerala', 9072202229, 'mrz@gmail.com', 323223, '', '64a119d0285df', '2023-07-02'),
(26, 7, 'mohammed', 'mehrooz', 'kerala', 'Kerala', 9072202229, 'mrz@gmail.com', 323223, '', '64a11d7224db1', '2023-07-02'),
(27, 1, 'mohammed', 'mehrooz', 'kerala', 'Kerala', 9072202229, 'mrz@gmail.com', 323223, '', '64a11d95b6e4d', '2023-07-02'),
(28, 2, 'mohammed', 'mehrooz', 'kerala', 'Kerala', 9072202229, 'mrz@gmail.com', 323223, '', '64a11dabce423', '2023-07-02'),
(29, 3, 'mohammed', 'mehrooz', 'kerala', 'Kerala', 9072202229, 'mrz@gmail.com', 323223, '', '64a11dd1d779b', '2023-07-02'),
(30, 4, 'mohammed', 'mehrooz', 'kerala', 'Kerala', 9072202229, 'mrz@gmail.com', 323223, '', '64a11ef8be2dd', '2023-07-02'),
(31, 5, 'mohammed', 'mehrooz', 'kerala', 'Kerala', 9072202229, 'mrz@gmail.com', 323223, '', '64a11f985a0c5', '2023-07-02'),
(32, 1, 'mohammed', 'mehrooz', 'kerala', 'Kerala', 9072202229, 'mrz@gmail.com', 323223, '', '64a12149788b9', '2023-07-02'),
(33, 2, 'mohammed', 'mehrooz', 'kerala', 'Kerala', 9072202229, 'mrz@gmail.com', 323223, '', '64a121b4b1968', '2023-07-02'),
(34, 3, 'mohammed', 'mehrooz', 'kerala', 'Kerala', 9072202229, 'mrz@gmail.com', 323223, '', '64a1277c3201d', '2023-07-02'),
(35, 4, 'mohammed', 'mehrooz', 'kerala', 'Kerala', 9072202229, 'mrz@gmail.com', 323223, '', '64a1277c3201d', '2023-07-02'),
(36, 5, 'mohammed', 'mehrooz', 'kerala', 'Kerala', 9072202229, 'mrz@gmail.com', 323223, '', '64a12fe7bd870', '2023-07-02'),
(37, 6, 'mohammed', 'mehrooz', 'kerala', 'Kerala', 9072202229, 'mrz@gmail.com', 323223, '', '64a14b29b2c0d', '2023-07-02'),
(38, 7, 'mohammed', 'mehrooz', 'kerala', 'Kerala', 9072202229, 'mrz@gmail.com', 323223, '', '64a14b29b2c0d', '2023-07-02'),
(39, 8, 'mohammed', 'mehrooz', 'kerala', 'Kerala', 9072202229, 'mrz@gmail.com', 323223, '', '64a16609a2935', '2023-07-02'),
(40, 9, 'mohammed', 'mehrooz', 'kerala', 'Kerala', 9072202229, 'mrz@gmail.com', 323223, '', '64a16609a2935', '2023-07-02'),
(41, 10, 'mohammed', 'mehrooz', 'kerala', 'Kerala', 9072202229, 'mrz@gmail.com', 323223, '', '64a16609a2935', '2023-07-02'),
(42, 11, 'mohammed mehrooz', 'asdasd', 'bandiyod', 'Haryana', 1111111111, 'mrz@gmail.com', 2232, '', '64a18bed0b5aa', '2023-07-02'),
(43, 12, 'mohammed mehrooz', 'asdasd', 'bandiyod', 'Haryana', 1111111111, 'mrz@gmail.com', 2232, '', '64a18bed0b5aa', '2023-07-02'),
(44, 13, 'mohammed mehrooz', 'asdasd', 'bandiyod', 'Haryana', 1111111111, 'mrz@gmail.com', 2232, '', '64a18bed0b5aa', '2023-07-02'),
(45, 14, 'sagar', 'mdfn', 'kldfnl skfnklsdn fkldsfkl', 'Haryana', 1212121212, 'shreyas@gmail.com', 121212, '', '64a3bd0b1ca3b', '2023-07-04'),
(46, 15, 'dsfsdf', 'mnb', 'dfkgkl dsfmdslkfsmlkd', 'Goa', 1111111111, 'shreyas@gmail.com', 111111, '', '64a3bd55f24fd', '2023-07-04'),
(47, 16, 'dsfsdf', 'dfdsf', 'df,gnkldfsjf sd', 'Arunachal Pradesh', 1111111111, 'admin1@gmail.com', 111111, '', '64a3be126ba5f', '2023-07-04'),
(48, 17, 'dsfsdf', 'dfv', 'dzfdsffsfs', 'Karnataka', 1111111111, 'amar@gmail.com', 111111, '', '64a3c40366e81', '2023-07-04'),
(49, 18, 'fsf', 'dsfdsf', 'xvxdf', 'Jammu and Kashmir', 1111111111, 'shreyas@gmail.com', 11111, '', '64a3c47fb8601', '2023-07-04'),
(50, 19, 'sagar', 'rao', 'dfssdds', 'Himachal Pradesh', 1111111111, 'shreyas@gmail.com', 222222, '', '64a3c8be22af2', '2023-07-04'),
(51, 20, 'sagar', 'rao', 'aaa', 'Andhra Pradesh', 1111111111, 'shreyas@gmail.com', 111111, '', '64a3c9389e921', '2023-07-04'),
(52, 21, 'Abhay', 'padmashali', '\"Indragiri\" kolnadu k.s.rao nagar post mulki', 'Karnataka', 9353784057, 'abhay2003.jp@gmail.com', 574154, '', '64a51cca6b9aa', '2023-07-05'),
(53, 22, 'Abhay', 'padmashali', '\"Indragiri\" kolnadu k.s.rao nagar post mulki', 'Karnataka', 9353784057, 'abhay2003.jp@gmail.com', 574154, '', '64a51ce01e6bf', '2023-07-05');

-- --------------------------------------------------------

--
-- Table structure for table `usedbook`
--

CREATE TABLE `usedbook` (
  `ubook_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `cat_id` int(11) NOT NULL,
  `ubook_title` varchar(550) NOT NULL,
  `ubook_img` varchar(300) NOT NULL,
  `ubook_description` varchar(1000) NOT NULL,
  `ubook_author` varchar(500) NOT NULL,
  `ubook_price` varchar(500) NOT NULL,
  `ubook_isbn` varchar(150) NOT NULL,
  `ubook_qty` varchar(150) NOT NULL,
  `ubook_status` varchar(250) NOT NULL,
  `ubook_date` date NOT NULL,
  `upublication` varchar(100) NOT NULL,
  `uyearofpub` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `usedbook`
--

INSERT INTO `usedbook` (`ubook_id`, `user_id`, `cat_id`, `ubook_title`, `ubook_img`, `ubook_description`, `ubook_author`, `ubook_price`, `ubook_isbn`, `ubook_qty`, `ubook_status`, `ubook_date`, `upublication`, `uyearofpub`) VALUES
(7, 5, 2, 'Programming with java', 'upload/java.jpg', 'aassssswqaqwss', 'qqqq', '345', '111111111111111', '111', '', '2023-07-04', 'Joffe Books Spy Thriller Books and Mystery', '2019-02-12'),
(8, 5, 9, 'Core Python', 'upload/python.jpg', 'lorem', 'aaaaa', '234', '111111111111111111', '2', '', '2023-07-04', 'Joffe Books Spy Thriller Books and Mystery', '2022-03-02'),
(9, 9, 2, 'sasaaas', 'upload/Screenshot 2023-06-30 121804.png', 'aaaaaaaaaaaaaaaa', 'fafdfgsggas', '213133', '111111111111111', '22', '', '2023-07-05', 'sssssssssssssss', '2023-07-04');

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
(4, 'Abhay', '7835192867', 'abhay2003.jp@gmail.com', 'upload/1918799c0523bfbf1a1867c084d0fd9f.jpg', '$2y$10$MdloV/haeTQeytBpX//fSOBjty30s0Vq/YCsNHa6quC.gR7yMPZHS', '2023-06-15'),
(5, 'Sagar', '9864351987', 'sagar.rao2002@gmail.com', 'upload/marvels-spider-man-pc-4k-jf.jpg', '$2y$10$Xl48gBX1qKDJVrK4D0QhxuRwVwxb5.weZ4VgesEM9dpX0gz6/URjm', '2023-06-16'),
(9, 'Shreyas', '7625052048', 'shreyas2002alv@gmail.com', 'upload/pexels-pixabay-414144.jpg', '$2y$10$im8ATMKiReU1aRT48EAF/ujwdyv2OFIwq5ZR36Rla1/WxDQHPVS42', '2023-07-05');

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
  ADD PRIMARY KEY (`shp_id`);

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
  MODIFY `book_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `cart_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=56;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `cat_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `fb_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `genfeed`
--
ALTER TABLE `genfeed`
  MODIFY `genfeed_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `order`
--
ALTER TABLE `order`
  MODIFY `od_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `payment`
--
ALTER TABLE `payment`
  MODIFY `pay_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=64;

--
-- AUTO_INCREMENT for table `seller`
--
ALTER TABLE `seller`
  MODIFY `seller_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `shipping`
--
ALTER TABLE `shipping`
  MODIFY `shp_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54;

--
-- AUTO_INCREMENT for table `usedbook`
--
ALTER TABLE `usedbook`
  MODIFY `ubook_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
