-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Φιλοξενητής: 127.0.0.1
-- Χρόνος δημιουργίας: 18 Νοε 2016 στις 15:52:07
-- Έκδοση διακομιστή: 10.1.16-MariaDB
-- Έκδοση PHP: 5.6.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Βάση δεδομένων: `micropro`
--

-- --------------------------------------------------------

--
-- Δομή πίνακα για τον πίνακα `corporation`
--

CREATE TABLE `corporation` (
  `username` varchar(16) COLLATE utf8_bin NOT NULL,
  `numberCorporation` int(6) NOT NULL,
  `name` varchar(15) COLLATE utf8_bin NOT NULL,
  `AFM` varchar(15) COLLATE utf8_bin NOT NULL,
  `Address` varchar(50) COLLATE utf8_bin NOT NULL,
  `email` varchar(50) COLLATE utf8_bin NOT NULL,
  `password` varchar(32) COLLATE utf8_bin NOT NULL,
  `telNumber` int(8) NOT NULL,
  `category` bit(1) NOT NULL DEFAULT b'1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Άδειασμα δεδομένων του πίνακα `corporation`
--

INSERT INTO `corporation` (`username`, `numberCorporation`, `name`, `AFM`, `Address`, `email`, `password`, `telNumber`, `category`) VALUES
('adminCorp', 5, 'Corpor', '123456', 'kapou 1', 'admin@admin.cy', 'ae2b1fca515949e5d54fb22b8ed95575', 99123456, b'1'),
('agro01', 3, 'AGROTHS', '371256', 'Kangelari 10', 'agroths@yahoo.com', '3486cc5d84e900cf66ee19b0f72e3838', 99672344, b'1'),
('metr01', 1, 'METRO', '653128', 'Agiou Mama 17', 'metro@gmail.com', '2dbf2a1f727df00d7fe467467230706e', 99435674, b'1'),
('mont01', 2, 'Montanios Ltd', '572391', 'Kolokotroni 34', 'montanios@cytanet.com.cy', '6f7c637b6e1d6c25870070cb822be065', 99872585, b'1'),
('ucy01', 4, 'UCY', '285593', 'Arxagelou 55', 'ucy@ucy.ac.cy', 'cb5751c0be7adc2d6f3dfb15af4a29d2', 99667213, b'1');

-- --------------------------------------------------------

--
-- Δομή πίνακα για τον πίνακα `receipt`
--

CREATE TABLE `receipt` (
  `serialNo` varchar(20) COLLATE utf8_bin NOT NULL,
  `modelNo` varchar(20) COLLATE utf8_bin NOT NULL,
  `barcode` int(15) NOT NULL,
  `username` varchar(16) COLLATE utf8_bin NOT NULL,
  `email` varchar(50) COLLATE utf8_bin NOT NULL,
  `buyDay` datetime NOT NULL,
  `expiryDate` datetime NOT NULL,
  `description` varchar(50) COLLATE utf8_bin NOT NULL,
  `price` decimal(6,2) NOT NULL,
  `receiptNo` varchar(20) COLLATE utf8_bin NOT NULL,
  `factoryQuarantee` varchar(20) COLLATE utf8_bin NOT NULL,
  `invoiceNo` varchar(20) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Άδειασμα δεδομένων του πίνακα `receipt`
--

INSERT INTO `receipt` (`serialNo`, `modelNo`, `barcode`, `username`, `email`, `buyDay`, `expiryDate`, `description`, `price`, `receiptNo`, `factoryQuarantee`, `invoiceNo`) VALUES
('34535', '253', 2147483647, 'geokap01', 'gkapitsaki@cytanet.com.cy', '2016-04-09 00:00:00', '2016-04-09 00:00:00', 'Kaspersky Antivirus', '60.00', '32412', '0', '21247'),
('35523', '543', 2147483647, 'marnik01', 'mnikolaou@yahoo.com', '2015-07-29 00:00:00', '2017-07-29 00:00:00', 'PANASONIC TV', '200.00', '44188', '2', '32534'),
('36763', '573', 2147483647, 'agro01', 'agroths@yahoo.com', '2015-07-21 00:00:00', '2015-07-21 00:00:00', 'HP Toner', '30.00', '74852', '0', '87819'),
('45234', '456', 2147483647, 'hamham01', 'hhampis@gmail.com', '2016-04-19 00:00:00', '2016-04-19 00:00:00', 'Overwatch Limited Edition(PS4)', '75.00', '54232', '0', '12452'),
('45341', '234', 2147483647, 'mont01', 'montanios@cytanet.com.cy', '2016-05-26 00:00:00', '2018-04-09 00:00:00', 'Epson Printer', '400.00', '25234', '2', '86754'),
('45453', '236', 2147483647, 'ucy01', 'ucy@ucy.ac.cy', '2015-12-17 00:00:00', '2015-12-17 00:00:00', 'PaperCut Box', '10.00', '8865', '0', '96675'),
('47484', '411', 2147483647, 'swagmastah69', 'catdestroyer55@yahoo.com', '2015-01-21 00:00:00', '2015-01-21 00:00:00', 'Apple Airpods', '179.00', '9949417', '0', '78787'),
('74781', '746', 2147483647, 'geokap01', 'gkapitsaki@cytanet.com.cy', '2015-10-20 00:00:00', '2017-10-20 00:00:00', 'Apple MagSafe3', '100.00', '48415', '2', '78891'),
('77477', '215', 2147483647, 'agro01', 'agroths@yahoo.com', '2015-06-18 00:00:00', '2015-06-18 00:00:00', 'HP Toner', '30.00', '61711', '0', '87894'),
('78657', '783', 2147483647, 'agro01', 'agroths@yahoo.com', '2015-06-11 00:00:00', '2015-06-11 00:00:00', 'HP Toner', '30.00', '37325', '0', '57237'),
('7978', '457', 2147483647, 'mont01', 'montanios@cytanet.com.cy', '2016-05-26 00:00:00', '2016-05-26 00:00:00', 'Epson Drum', '30.00', '35423', '0', '12312'),
('84842', '141', 2147483647, 'geokap01', 'gkapitsaki@cytanet.com.cy', '2015-10-20 00:00:00', '2017-10-20 00:00:00', 'Apple Macbook Pro 15', '1800.00', '85158', '2', '18715'),
('89743', '434', 2147483647, 'metr01', 'metro@gmail.com', '2015-09-02 00:00:00', '2017-09-02 00:00:00', 'DELL Laptop', '730.00', '48745', '2', '88542'),
('93428', '123', 2147483647, 'giakri01', 'jackopthelink@gmail.com', '2001-02-28 00:00:00', '2016-02-28 00:00:00', 'NOKIA3310', '150.00', '87485', '15', '54461');

-- --------------------------------------------------------

--
-- Δομή πίνακα για τον πίνακα `user`
--

CREATE TABLE `user` (
  `username` varchar(16) COLLATE utf8_bin NOT NULL,
  `incCustomerNumber` int(6) NOT NULL,
  `name` varchar(15) COLLATE utf8_bin NOT NULL,
  `surname` varchar(15) COLLATE utf8_bin NOT NULL,
  `dob` date NOT NULL,
  `address` varchar(50) COLLATE utf8_bin NOT NULL,
  `email` varchar(50) COLLATE utf8_bin NOT NULL,
  `telNumber` int(8) NOT NULL,
  `password` varchar(32) COLLATE utf8_bin NOT NULL,
  `category` bit(1) NOT NULL DEFAULT b'0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Άδειασμα δεδομένων του πίνακα `user`
--

INSERT INTO `user` (`username`, `incCustomerNumber`, `name`, `surname`, `dob`, `address`, `email`, `telNumber`, `password`, `category`) VALUES
('andevr01', 2, 'Andria', 'Evripidou', '1978-08-12', 'Akanthous 18 Geri', 'aevrip@gmail.com', 99154467, 'a35a48b8921d69260f19a6056324ab38', b'0'),
('avgion01', 3, 'Avgoustinos', 'Papaioannou', '1992-02-07', 'Kefalograviera 55 Dali', 'pavgoust@yahoo.com', 99548891, '2b2cc29be825f334dedbd703a1401f3b', b'0'),
('efteft01', 6, 'Eftimis', 'Efthimiou', '1969-05-26', 'Epixirisis 2 Xorko', 'eeftimis@gmail.com', 99351841, '796fb4f091f4dfedd143331fdae84dab', b'0'),
('geokap01', 4, 'Georgia', 'Kapitsaki', '1989-11-28', 'powerade 72 Katokopia', 'gkapitsaki@cytanet.com.cy', 99181821, 'c4f6afd88f13c20947b92c3c152417fd', b'0'),
('giagia01', 8, 'Giannakis', 'Giannou', '1969-05-28', 'Epixirisis 4 Xorko', 'ggiannakis@gmail.com', 99498010, 'ec878f984e1b22fb98eb2585f6b7c931', b'0'),
('giakri01', 5, 'Giakoumis', 'Krikkos', '1969-05-25', 'Epixirisis 1 Xorko', 'jackopthelink@gmail.com', 99777532, 'a236210022be614ff79d33a8268093ac', b'0'),
('hamham01', 7, 'Hampis', 'Hampou', '1969-05-27', 'Epixirisis 3 Xorko', 'hhampis@gmail.com', 99542117, '55454285504974010d5777b9eaa3a755', b'0'),
('marnik01', 1, 'Marios', 'Nikolaou', '1984-03-25', 'Apostolos Andreas 5 Latsia', 'mnikolaou@yahoo.com', 99133385, '8241634cacb3acc554371f89ae583f66', b'0'),
('swagmastah69', 9, 'Mpananios', 'Kiriakidiss', '1994-12-16', 'Panathema 25', 'catdestroyer55@yahoo.com', 99696955, '45dd23ce287ed1266ba6c5413fd44e97', b'0');

--
-- Ευρετήρια για άχρηστους πίνακες
--

--
-- Ευρετήρια για πίνακα `corporation`
--
ALTER TABLE `corporation`
  ADD PRIMARY KEY (`username`);

--
-- Ευρετήρια για πίνακα `receipt`
--
ALTER TABLE `receipt`
  ADD PRIMARY KEY (`serialNo`);

--
-- Ευρετήρια για πίνακα `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`username`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
