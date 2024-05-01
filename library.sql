-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 01, 2024 at 07:19 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `library`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `emp_id` int(10) NOT NULL,
  `name` varchar(50) NOT NULL,
  `adr` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `p_num` int(11) UNSIGNED ZEROFILL NOT NULL,
  `pass` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`emp_id`, `name`, `adr`, `email`, `p_num`, `pass`) VALUES
(15, 'Johan Kabir', 'Mohammadpur', 'johanhkabirjovi@gmail.com', 01777685640, '1506');

-- --------------------------------------------------------

--
-- Table structure for table `book`
--

CREATE TABLE `book` (
  `idx` int(10) NOT NULL,
  `ISBN` int(10) NOT NULL,
  `title` varchar(100) NOT NULL,
  `price` int(11) NOT NULL,
  `authors` varchar(100) NOT NULL,
  `genre` varchar(100) NOT NULL,
  `link` varchar(100) NOT NULL,
  `R_Availabilty` int(11) DEFAULT NULL,
  `S_Availabilty` int(11) DEFAULT NULL,
  `linkg` varchar(255) DEFAULT NULL,
  `img_l` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `book`
--

INSERT INTO `book` (`idx`, `ISBN`, `title`, `price`, `authors`, `genre`, `link`, `R_Availabilty`, `S_Availabilty`, `linkg`, `img_l`) VALUES
(1, 1234567810, 'Becoming', 980, 'Michelle Obama', 'Memoir', 'http://localhost/trial470/LMS/user/books/detail1.php', 50, 500, 'http://localhost/trial470/LMS/detailg1.php', 'cp/front/1.jpg'),
(2, 1234567811, 'The Seven Husbands Of Evelyn Hugo', 1159, 'Taylor Jenkins Reid', 'historical fiction, psychological fiction, romance novel', 'http://localhost/trial470/LMS/user/books/detail2.php', NULL, NULL, 'http://localhost/trial470/LMS/detailg2.php', 'cp/front/2.jpg'),
(3, 1234567812, 'The Talisman', 1199, 'Stephen king and Peter Straub', 'fantasy thriller', 'http://localhost/trial470/LMS/user/books/detail3.php', NULL, NULL, 'http://localhost/trial470/LMS/detailg3.php', 'cp/front/3.jpg'),
(4, 1234567813, 'The Alchemist', 1259, 'Paulo Coelho', 'Quest, adventure, fantasy', 'http://localhost/trial470/LMS/user/books/detail4.php', NULL, NULL, 'http://localhost/trial470/LMS/detailg4.php', 'cp/front/4.jpg'),
(5, 1234567814, 'Confess', 900, 'Colleen Hoover', 'romance, drama, fiction', 'http://localhost/trial470/LMS/user/books/detail5.php', NULL, NULL, 'http://localhost/trial470/LMS/detailg5.php', 'cp/front/5.jpg'),
(6, 1234567815, 'The Risk', 760, 'S.T.Abby', 'fiction, thriller, mystery, crime, romance', 'http://localhost/trial470/LMS/user/books/detail6.php', NULL, NULL, 'http://localhost/trial470/LMS/detailg6.php', 'cp/front/6.jpg'),
(7, 1234567816, 'The Best Laid Plans', 700, 'Sidney Sheldon', 'mystery, romance, thriller, crime', 'http://localhost/trial470/LMS/user/books/detail7.php', NULL, NULL, 'http://localhost/trial470/LMS/detailg7.php', 'cp/front/7.jpg'),
(8, 1234567817, 'Layla', 870, 'Colleen Hoover', 'mystery, thriller, romance, fiction', 'http://localhost/trial470/LMS/user/books/detail8.php', NULL, NULL, 'http://localhost/trial470/LMS/detailg8.php', 'cp/front/8.jpg'),
(9, 1234567818, 'In Cold Blood', 1129, 'Truman Capote', 'Nonfiction/literature', 'http://localhost/trial470/LMS/user/books/detail9.php', NULL, NULL, 'http://localhost/trial470/LMS/detailg9.php', 'cp/front/9.jpg'),
(10, 1234567819, 'Perfect Addiction', 500, 'Claudia Tan', 'contemporary romance, fiction', 'http://localhost/trial470/LMS/user/books/detail10.php', NULL, NULL, 'http://localhost/trial470/LMS/detailg10.php', 'cp/front/10.jpg'),
(11, 1234567890, 'November 9', 450, 'Colleen Hoover', 'Romance, Drama', 'http://localhost/trial470/LMS/user/books/detail11.php', NULL, NULL, 'http://localhost/trial470/LMS/detailg11.php', 'cp/front/11.jpg'),
(12, 1234567891, 'Heads You Lose', 540, 'David Hayward and Lisa Lutz', 'Mystery, Humor, fiction', 'http://localhost/trial470/LMS/user/books/detail12.php', NULL, NULL, 'http://localhost/trial470/LMS/detailg12.php', 'cp/front/12.jpg'),
(13, 1234567892, 'Angel of the Dark', 500, 'Sidney Sheldon', 'fiction, thriller, mystery, suspense', 'http://localhost/trial470/LMS/user/books/detail13.php', NULL, NULL, 'http://localhost/trial470/LMS/detailg13.php', 'cp/front/13.jpg'),
(14, 1234567893, 'Inferno', 960, 'Dan Brown', 'Mystery, conspiracy fiction, thriller', 'http://localhost/trial470/LMS/user/books/detail14.php', NULL, NULL, 'http://localhost/trial470/LMS/detailg14.php', 'cp/front/14.jpg'),
(15, 1234567894, 'She\'s With Me', 400, 'Jessica Cunsolo', 'ficiton, romance, drama, comedy', 'http://localhost/trial470/LMS/user/books/detail15.php', NULL, NULL, 'http://localhost/trial470/LMS/detailg15.php', 'cp/front/15.jpg'),
(16, 1234567895, 'The DaVinci Code', 1050, 'Dan Brown', 'mystery, thriller', 'http://localhost/trial470/LMS/user/books/detail16.php', NULL, NULL, 'http://localhost/trial470/LMS/detailg16.php', 'cp/front/16.jpg'),
(17, 1234567896, 'Corrupt', 650, 'Penelope Douglas', 'mystery, thriller, fiction, romance', 'http://localhost/trial470/LMS/user/books/detail17.php', NULL, NULL, 'http://localhost/trial470/LMS/detailg17.php', 'cp/front/17.jpg'),
(18, 1234567897, 'bound by honour', 500, 'Cora Reily', 'thriller, crime, romance, drama', 'http://localhost/trial470/LMS/user/books/detail18.php', NULL, NULL, 'http://localhost/trial470/LMS/detailg18.php', 'cp/front/18.jpg'),
(19, 1234567898, 'Reminders of Him', 780, 'Colleen Hoover', 'domestic fiction, romance', 'http://localhost/trial470/LMS/user/books/detail19.php', NULL, NULL, 'http://localhost/trial470/LMS/detailg19.php', 'cp/front/19.jpg'),
(20, 1234567899, 'Hide and Seek', 890, 'Jakayla Toney', 'horror, thriller, mystery, fiction', 'http://localhost/trial470/LMS/user/books/detail20.php', NULL, NULL, 'http://localhost/trial470/LMS/detailg20.php', 'cp/front/20.jpg'),
(21, 1234567820, 'Playing It My Way', 999, 'Boria Majumdar and Sachin Tendulkar', 'Autobiography', 'http://localhost/trial470/LMS/user/books/detail21.php', NULL, NULL, 'http://localhost/trial470/LMS/detailg21.php', 'cp/front/21.jpg'),
(22, 1234567821, 'The Subtle Art of Not Giving A F*ck', 2500, 'Mark Manson', 'Non-fiction, self help', 'http://localhost/trial470/LMS/user/books/detail22.php', NULL, NULL, 'http://localhost/trial470/LMS/detailg22.php', 'cp/front/22.jpg'),
(23, 1234567822, 'Himu Shamagra', 1500, 'Humayun Ahmed', 'fiction novel', 'http://localhost/trial470/LMS/user/books/detail23.php', NULL, NULL, 'http://localhost/trial470/LMS/detailg23.php', 'cp/front/23.jpg'),
(24, 1234567823, 'Serina', 300, 'Md. Zafor Iqbal', 'Science fiction', 'http://localhost/trial470/LMS/user/books/detail24.php', NULL, NULL, 'http://localhost/trial470/LMS/detailg24.php', 'cp/front/24.jpg'),
(25, 1234567824, 'Songsoptok', 500, 'Shahidullah Kaiser', 'Novel', 'http://localhost/trial470/LMS/user/books/detail25.php', NULL, NULL, 'http://localhost/trial470/LMS/detailg25.php', 'cp/front/25.jpg'),
(26, 1234567825, 'Prem O Opremer Golpo', 400, 'Md. Anisul Haque', 'romance', 'http://localhost/trial470/LMS/user/books/detail26.php', NULL, NULL, 'http://localhost/trial470/LMS/detailg26.php', 'cp/front/26.jpg'),
(27, 1234567826, 'Basic Ali', 300, 'Shahriar Parvez', 'Comic', 'http://localhost/trial470/LMS/user/books/detail27.php', NULL, NULL, 'http://localhost/trial470/LMS/detailg27.php', 'cp/front/27.jpg'),
(28, 1234567827, 'It', 1800, 'Stephen King', 'Horror, thriller', 'http://localhost/trial470/LMS/user/books/detail28.php', NULL, NULL, 'http://localhost/trial470/LMS/detailg28.php', 'cp/front/28.jpg'),
(29, 1234567828, 'Dune', 1200, 'Frank Herbert', 'Science fiction', 'http://localhost/trial470/LMS/user/books/detail29.php', NULL, NULL, 'http://localhost/trial470/LMS/detailg29.php', 'cp/front/29.jpg'),
(30, 1234567829, 'Jon Bon Jovi', 3000, 'Laura Jackson', 'Biography', 'http://localhost/trial470/LMS/user/books/detail30.php', NULL, NULL, 'http://localhost/trial470/LMS/detailg30.php', 'cp/front/30.jpg'),
(31, 1234567830, 'Mein Kampf', 1200, 'Adolf Hitler', 'Autobiography', 'http://localhost/trial470/LMS/user/books/detail31.php', NULL, NULL, 'http://localhost/trial470/LMS/detailg31.php', 'cp/front/31.jpg'),
(32, 1234567831, 'The Exorcist', 1500, 'William Peter Blatty', 'horror novel', 'http://localhost/trial470/LMS/user/books/detail32.php', NULL, NULL, 'http://localhost/trial470/LMS/detailg32.php', 'cp/front/32.jpg'),
(33, 1234567832, 'Maa', 400, 'Anisul Haque', 'novel', 'http://localhost/trial470/LMS/user/books/detail33.php', NULL, NULL, 'http://localhost/trial470/LMS/detailg33.php', 'cp/front/33.jpg'),
(34, 1234567833, 'The Power Of Now', 2000, 'Eckhart Tolle', 'Psychology', 'http://localhost/trial470/LMS/user/books/detail34.php', NULL, NULL, 'http://localhost/trial470/LMS/detailg34.php', 'cp/front/34.jpg'),
(35, 1234567834, 'Sapiens: A Brief History of HumanKind', 3200, 'Yuval Noah Harari', 'History, Social philosophy', 'http://localhost/trial470/LMS/user/books/detail35.php', NULL, NULL, 'http://localhost/trial470/LMS/detailg35.php', 'cp/front/35.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `rent_history`
--

CREATE TABLE `rent_history` (
  `inv_no` int(10) UNSIGNED ZEROFILL NOT NULL,
  `cus_id` int(10) NOT NULL,
  `cus_f_name` varchar(50) NOT NULL,
  `cus_l_name` varchar(50) NOT NULL,
  `ISBN` int(10) NOT NULL,
  `prod_name` varchar(100) NOT NULL,
  `rent_date` date NOT NULL,
  `return_due` date NOT NULL,
  `return_date` date NOT NULL,
  `penalty` int(3) NOT NULL,
  `idx` int(11) DEFAULT NULL,
  `authors` varchar(255) DEFAULT NULL,
  `genre` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `rent_history`
--

INSERT INTO `rent_history` (`inv_no`, `cus_id`, `cus_f_name`, `cus_l_name`, `ISBN`, `prod_name`, `rent_date`, `return_due`, `return_date`, `penalty`, `idx`, `authors`, `genre`) VALUES
(0000000008, 1506, 'Johan', 'Kabir', 1234567811, 'The Seven Husbands Of Evelyn Hugo', '2024-04-07', '2024-04-14', '2024-04-07', 0, 2, NULL, NULL),
(0000000010, 13, 'Edward', 'Horniman', 1234567811, 'The Seven Husbands Of Evelyn Hugo', '2024-04-09', '2024-04-16', '2024-04-20', 40, 2, NULL, NULL),
(0000000011, 1506, 'Johan', 'Kabir', 1234567891, 'Heads You Lose', '2024-04-10', '2024-04-17', '2024-05-01', 140, 12, 'David Hayward and Lisa Lutz', 'Mystery, Humor, fiction');

-- --------------------------------------------------------

--
-- Table structure for table `sales_history`
--

CREATE TABLE `sales_history` (
  `inv_no` int(10) UNSIGNED ZEROFILL NOT NULL,
  `cus_id` int(10) NOT NULL,
  `cus_f_name` varchar(50) NOT NULL,
  `cus_l_name` varchar(50) NOT NULL,
  `ISBN` int(10) NOT NULL,
  `prod_name` varchar(50) NOT NULL,
  `price` int(11) NOT NULL,
  `p_date` date NOT NULL,
  `idx` int(11) DEFAULT NULL,
  `authors` varchar(255) DEFAULT NULL,
  `genre` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `sales_history`
--

INSERT INTO `sales_history` (`inv_no`, `cus_id`, `cus_f_name`, `cus_l_name`, `ISBN`, `prod_name`, `price`, `p_date`, `idx`, `authors`, `genre`) VALUES
(0000000005, 1506, 'Johan', 'Kabir', 1234567810, 'Becoming', 980, '2024-04-06', 1, NULL, NULL),
(0000000008, 13, 'Edward', 'Horniman', 1234567893, 'Inferno', 960, '2024-04-17', 14, 'Dan Brown', 'Mystery, conspiracy fiction, thriller'),
(0000000009, 1506, 'Johan', 'Kabir', 1234567893, 'Inferno', 960, '2024-04-17', 14, 'Dan Brown', 'Mystery, conspiracy fiction, thriller'),
(0000000010, 1506, 'Johan', 'Kabir', 1234567816, 'The Best Laid Plans', 700, '2024-05-01', 7, 'Sidney Sheldon', 'mystery, romance, thriller, crime');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `ID` int(10) NOT NULL,
  `f_name` varchar(50) NOT NULL,
  `l_name` varchar(50) NOT NULL,
  `phone` int(11) UNSIGNED ZEROFILL NOT NULL,
  `email` varchar(50) NOT NULL,
  `adr` varchar(50) NOT NULL,
  `pass` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`ID`, `f_name`, `l_name`, `phone`, `email`, `adr`, `pass`) VALUES
(13, 'Edward', 'Horniman', 04294967295, 'theduke@gmail.com', 'Gloucestershire, UK', 'theduke'),
(1506, 'Johan', 'Kabir', 01777685640, 'johanhkabirjovi@gmail.com', '1/1, Shah Jahan Road, Mohammadpur', '1506'),
(45629, 'Kazi', 'Shashwata', 00044651658, 'ks@gmail.com', 'Dhaka', '75');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`emp_id`);

--
-- Indexes for table `book`
--
ALTER TABLE `book`
  ADD PRIMARY KEY (`idx`);

--
-- Indexes for table `rent_history`
--
ALTER TABLE `rent_history`
  ADD PRIMARY KEY (`inv_no`);

--
-- Indexes for table `sales_history`
--
ALTER TABLE `sales_history`
  ADD PRIMARY KEY (`inv_no`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `emp_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1507;

--
-- AUTO_INCREMENT for table `book`
--
ALTER TABLE `book`
  MODIFY `idx` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `rent_history`
--
ALTER TABLE `rent_history`
  MODIFY `inv_no` int(10) UNSIGNED ZEROFILL NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `sales_history`
--
ALTER TABLE `sales_history`
  MODIFY `inv_no` int(10) UNSIGNED ZEROFILL NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45630;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
