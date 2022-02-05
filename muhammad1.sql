-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Aug 26, 2021 at 09:22 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `muhammad1`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `name`, `password`) VALUES
(1, 'ishu', 'ishu');

-- --------------------------------------------------------

--
-- Table structure for table `post`
--

CREATE TABLE `post` (
  `sno` int(4) NOT NULL,
  `rno` int(4) NOT NULL,
  `heading` varchar(255) NOT NULL,
  `image` text DEFAULT NULL,
  `content` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `post`
--

INSERT INTO `post` (`sno`, `rno`, `heading`, `image`, `content`) VALUES
(24, 13, 'Darbhnga Fort', 'darbhanga fort.jpg', '<u>DARBHNGA Fort </u>is also known as<b> Red Fort of Darbhanga</b> (Design is similar to Red Fort of Dehli) as well as <b>Rambagh Fort</b> (situated in Rambagh). This fort build by <b>Maharaja kameshwar singh</b> Fort onstraction started in  1934.<br/><br/> The walls of the fort are constructed of red bricks,its one and half kilometer(1500M) long. It is heart of <b>Darbhnga</b><br/>\r\n<h3><b><u>Address:</u></b></h3><br/>    Rambagh,<br/>    Near Railway station, Darbhnga'),
(25, 13, 'Ahilya Asthan ', 'images.jpeg', '<u><b>Ahilya Asthan</b></u>It is famous historical temple  stands in a village called <b>Ahiya Gram</b> which along with the temple is said to date back to the time of <b>Ramayana</b>. It is dedicated to <b>Ahilya, wife of Gautam Rishi.</b> According to mythology, he had cursed(which given by her husband) her to turn into a stone. But when <b>Lord Rama’s</b> feet touched the stone on his way to <b>Mithila (janakpur birth place of Sita)</b>, she regained her human form.<br/> This famous temple is located at a distance of 3 km from the Railway Station of Kamtaul in the Jale block. Festival of Ramnavmi is celebrated here with high enthusiasm every year in late March-early April. Besides this temple, the village hosts many other temples and mosques.'),
(26, 13, 'Raj Nagar palace', 'raj-palace-rajnagar-rajnagar-madhubani-qjslk1h7fk.jpg', 'Built by <b>Maharaja Shri Rameshwar Singh</b>, the Nagar fort is popularly known as the <b>Naulakha Palace</b>. The fort had to suffer tremendous destruction owing to the severe earthquake in the year 1934, since then, this once magnificent structure which used to be the residence of the royal family now just stands there like a Khandahar.'),
(27, 13, 'Ashoka Piller', 'ashoka piler.jpg', '<b>Emperor Ashoka</b> built The Lion Pillar at <b>Kolhua, Vaishali, Bihar</b>. It is made of a highly polished single piece of red sandstone, surmounted by a bell shaped capital, 18.3 m high. A life-size figure of a lion is placed on top of the pillar. There is a small tank here known as Ramkund. This pillar beside a brick stupa at Kolhua commemorates Buddha’s last sermon'),
(28, 13, 'Glass Bridge', 'glass.jpg', '<b>RAJGIR</b> in <b>Bihar</b> now has a 200-ft glass bridge. In a bid to boost tourism in the state, Bihar has built an interesting 200 ft glass bridge which is the first bridge in <b>India</b>. <br/>It is situated in <b>Rajgir, Nalanda</b> district. ... This 85 ft long and 6 ft wide bridge  able to accommodate 40 visitors at a time.'),
(29, 13, 'SHANTI STUPA', 'shantistupa.jpg', 'The <b>Vishwa Shanti Stupa</b> Is Located On A 400 Metre High Hill. The Stupa Is Built In Marble And On The Four Corners Of The Stupa Are Four Glimmering Statues Of Buddha.<br/> To Reach The Top Of This Hill One Has To Come Through The “Ropeways”. This Place Is Also Called The <b>Gridhakuta.</b>'),
(30, 13, 'BODH GYA', 'BUDHA.jpg', '<b>Bodh gya</b> is one of the holiest palace in the world. It is a place where <b>Shidharth</b> got knowledge and converted into <b>BUDHA</b> (lord).<br/>Bodh Gaya is a village in the northeast Indian state of Bihar.<br/>Considered one of the most important <b>Buddhist pilgrimage</b> sites, it is dominated by the ancient brick <b>Mahabodhi Temple</b> Complex, built to mark the site where the Buddha attained enlightenment beneath a sacred <b>Bodhi Tree</b>.'),
(31, 13, 'Golghar patna', 'golghar-from-outside.jpg', 'The Golghar or Gol Ghar, is a large granary located to the west of the Gandhi Maidan in Patna, capital of Bihar state, India<br/><b>Golghar</b>, an enormous granary, was built by <b>Captain John Garstin</b> for British army in 1786, after the terrible impact of 1770 famine. The winding stairway around this monument offers a brilliant view of the city and the Ganga flowing nearby.');

-- --------------------------------------------------------

--
-- Table structure for table `religion`
--

CREATE TABLE `religion` (
  `rno` int(4) NOT NULL,
  `rname` text NOT NULL,
  `intro` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `religion`
--

INSERT INTO `religion` (`rno`, `rname`, `intro`) VALUES
(13, 'Bihar', 'Bihar is North-East state of india country,  patna is capital of bihar There are 38 districts.tatal area of bihar is 94,163 square kilometer.It has common border with <a href=\"https://en.wikipedia.org/wiki/Nepal\">NEPAL</a> <b>GANGAS</b> river dividing Bihar into two aprrox equal part<br/><br>\r\nBihar introduce the democrecy in world ,LICHHWI is place where first of all democrecy apply\r\nIn this land so many great spirtual leader like <a href=\" \">BUDHA</a>, <a href=\" \">MAHAVIRA</a>, <a href=\" \">GURU GOVIND SING</a>  AND mathematicians like <a href=\" \">ARYA BHATT</a>,<a href=\"https://en.wikipedia.org/wiki/Vashishtha_Narayan_Singh\">  VISHISHTH NARAYAN SINGH</a>,<a href=\"https://en.wikipedia.org/wiki/Gangesha_Upadhyaya\">  GANGESH UPADHYAY</a> are born and serve the humanity. <br/><br/>\r\nIn Bihar dozens of languages are speaking by local man but popular  are <i>MAITHALI</i> (in Darbhnga, Madhubani, Sahras, Madhepura,Sitamarh etc), Bhojpuri(Ara,chhapra,Siwan,Motihari,), Magdhi(in Patna,hajipur, Chhapra,Vaishali etc ) ');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `post`
--
ALTER TABLE `post`
  ADD PRIMARY KEY (`sno`);

--
-- Indexes for table `religion`
--
ALTER TABLE `religion`
  ADD PRIMARY KEY (`rno`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `post`
--
ALTER TABLE `post`
  MODIFY `sno` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `religion`
--
ALTER TABLE `religion`
  MODIFY `rno` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
