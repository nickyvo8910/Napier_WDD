-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Nov 27, 2019 at 05:24 AM
-- Server version: 5.7.26
-- PHP Version: 7.3.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `wine2door`
--
CREATE DATABASE IF NOT EXISTS `wine2door` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `wine2door`;

-- --------------------------------------------------------

--
-- Table structure for table `members`
--

CREATE TABLE `members` (
  `email` varchar(50) NOT NULL,
  `password` varchar(50) DEFAULT NULL,
  `first_name` varchar(50) DEFAULT 'User''s First Name',
  `last_name` varchar(50) DEFAULT 'User''s Last Name',
  `address` varchar(50) DEFAULT 'User''s Address'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `members`
--

INSERT INTO `members` (`email`, `password`, `first_name`, `last_name`, `address`) VALUES
('nicky@test.com', '123', 'test1', 'testlast', 'asd123'),
('achippindall1k@ovh.net', 'GqvSu4oKds', 'Abbies', 'Chippindalls', '02711 Beilfuss Junctions'),
('adod1q@un.org', 'JLLbNTi', 'Ailey', 'Dod', '4400 Magdeline Hill'),
('ahassekl19@surveymonkey.com', 'hn1Sk9VGJX', 'Ardelle', 'Hassekl', '2935 Dahle Way'),
('aoduggano@newyorker.com', 'UZPqNHU17', 'Adolph', 'O\'Duggan', '7 Fairfield Point'),
('apencott2@bloglines.com', 'S2m0aPAI1O4v', 'Amalea', 'Pencott', '7570 Butternut Junction'),
('asporrij1d@indiegogo.com', 'TEHtVC', 'Andriana', 'Sporrij', '938 Troy Terrace'),
('aswanny@hc360.com', 'W8xhlxF', 'Archaimbaud', 'Swann', '5 Eastwood Place'),
('atuffell1f@jalbum.net', 'UWiLSXruF', 'Amara', 'Tuffell', '50 Randy Junction'),
('awallace28@mail.ru', 'oD4cuMu8', 'Archibaldo', 'Wallace', '101 Stoughton Circle'),
('ayirrell27@sogou.com', 'HmB19Lk2C7yZ', 'Ariel', 'Yirrell', '2132 Elgar Hill'),
('baugie1b@elpais.com', 'k6tQKj', 'Brice', 'Augie', '512 Spohn Center'),
('bboston18@ustream.tv', 'RI8IzIMi4', 'Britt', 'Boston', '3 Heffernan Lane'),
('bbutlerbowdon2c@netvibes.com', 'XZiMwjgXZN1', 'Blair', 'Butler-Bowdon', '353 Loeprich Lane'),
('bdevon2f@ebay.co.uk', 'DO6fw9O', 'Brendin', 'Devon', '970 Jackson Avenue'),
('bfeldstern2m@ed.gov', 'ppsEsCU', 'Brandais', 'Feldstern', '40632 Mosinee Court'),
('bkighly2l@ezinearticles.com', 'WZaXtdO05xa7', 'Brice', 'Kighly', '645 Barnett Crossing'),
('bratley1o@mac.com', 'WadWJ2Roe', 'Boone', 'Ratley', '0034 Mitchell Junction'),
('bstuddd@bing.com', 'ceYXDrYOM', 'Babb', 'Studd', '5 Laurel Plaza'),
('bswatheridge7@hatena.ne.jp', '8gC3xICZUl', 'Bay', 'Swatheridge', '9255 Delaware Pass'),
('cdrain29@latimes.com', 'yqtUiV3JfhsK', 'Callean', 'Drain', '405 Morningstar Place'),
('cflood16@samsung.com', 'xedJh21Y2eLq', 'Christi', 'Flood', '5740 Killdeer Trail'),
('cgovini1e@jigsy.com', 'Jq7pvRGa', 'Conroy', 'Govini', '16 Transport Road'),
('chargerie1z@pinterest.com', 'tL1AYg6Q6x2B', 'Cecil', 'Hargerie', '99 Lerdahl Parkway'),
('cmoxted1v@pcworld.com', 'h5s79oFLKwX', 'Cello', 'Moxted', '1 Linden Pass'),
('cmurdy6@diigo.com', '3O6IEnBCbTe', 'Chadd', 'Murdy', '0933 Bayside Drive'),
('csunshineu@ucla.edu', 'dx67futZX', 'Colette', 'Sunshine', '70 Sommers Drive'),
('cterlindenz@edublogs.org', 'jdOLOiBTD', 'Cayla', 'Terlinden', '17 Acker Terrace'),
('ctrevaskus1@blog.com', 'H0FJHD', 'Colet', 'Trevaskus', '0802 Loomis Circle'),
('ctrulocker@forbes.com', 'EL5lasDySj', 'Cherrita', 'Trulocke', '40631 Sutteridge Hill'),
('dadeya@pbs.org', 'h27fOJk0HTx', 'Dionne', 'Adey', '6 Elgar Court'),
('dburbage17@patch.com', 'JMCL9b', 'Don', 'Burbage', '2020 4th Pass'),
('ddorrins2g@hc360.com', 'pddpssR', 'Duncan', 'Dorrins', '1 Sommers Trail'),
('dgoutcher1n@columbia.edu', 'uA53Vq', 'Donni', 'Goutcher', '472 Little Fleur Point'),
('dmcgivena2r@prweb.com', 'Ih5poVUF', 'Dilly', 'McGivena', '118 Pankratz Alley'),
('dpreston2n@illinois.edu', 'HPdnxC', 'Dulcinea', 'Preston', '25 Loftsgordon Center'),
('dstickler2d@netlog.com', 'pX4HJVLsluZY', 'Dionisio', 'Stickler', '3016 Stuart Park'),
('echamberlaine1j@blogspot.com', 'bE818NQuUi', 'Eva', 'Chamberlaine', '41 Warrior Place'),
('eclaasen1u@slate.com', '6qAnE3zOzzZq', 'Earle', 'Claasen', '26089 Kedzie Plaza'),
('edurie21@cdbaby.com', 'WRsOtsRtU', 'Eudora', 'Durie', '5 Bartillon Trail'),
('fgorse14@kickstarter.com', '4pM1Uns7R', 'Fred', 'Gorse', '82 Rockefeller Terrace'),
('franfield1i@irs.gov', 'ISXhARMiA', 'Fabe', 'Ranfield', '97291 Bultman Court'),
('fseary2e@hibu.com', 'h4vGP6', 'Finlay', 'Seary', '8 3rd Way'),
('ftownend2b@yellowpages.com', 'HXhXbCaZqAZ', 'Ferd', 'Townend', '8811 Vahlen Hill'),
('gnewtown1c@nymag.com', 'kBb4MSL2', 'Giffer', 'Newtown', '394 Farragut Lane'),
('hdedney2a@jimdo.com', 'TLM7ngxmiW', 'Hermy', 'Dedney', '2 New Castle Point'),
('hgrenshieldsp@statcounter.com', 'mNYAb6WLguCp', 'Honor', 'Grenshields', '102 Butternut Court'),
('igoftonx@comcast.net', 'UVBm92QVsv', 'Itch', 'Gofton', '443 Kensington Plaza'),
('ijowett1w@odnoklassniki.ru', 'r24FLNVWrb', 'Isahella', 'Jowett', '0739 Rusk Plaza'),
('itimbridge9@narod.ru', 'a61SvGs', 'Ingaborg', 'Timbridge', '7 Coolidge Court'),
('jdahlman4@dagondesign.com', 'JOtgnX', 'Justis', 'Dahlman', '08 Kinsman Alley'),
('jdalgarnowche@flickr.com', 'eeKiDnjix8G', 'Jobyna', 'Dalgarnowch', '639 Delaware Place'),
('jfolkardj@wired.com', 'QIs8XD1e', 'Jeremy', 'Folkard', '36222 Duke Way'),
('jhallut1x@booking.com', 'sJMgAC', 'Joelly', 'Hallut', '33310 Ridgeview Park'),
('jharsnipef@google.nl', 'UIjyRaX92F6', 'Jaymie', 'Harsnipe', '8240 Portage Road'),
('jjump1h@nydailynews.com', 'pQ1OyeA4No', 'Jenine', 'Jump', '4264 Erie Point'),
('jsparkwill11@liveinternet.ru', 'SpKIpyvwI1', 'Justen', 'Sparkwill', '0560 Hanson Way'),
('klaffling1p@imgur.com', 'fNGs4pbohpw', 'Katlin', 'Laffling', '63 Elka Alley'),
('koaten1l@webs.com', 'ffOEoR9', 'Karil', 'Oaten', '362 Prentice Crossing'),
('kocurrine8@mlb.com', '2Tc5SA', 'Kipp', 'O\'Currine', '19699 Sunbrook Trail'),
('kosmantc@comsenz.com', 'A0WVen', 'Katya', 'Osmant', '776 Jana Way'),
('ldymidowskil@cdc.gov', 'gSQRQru4F7P', 'Lanny', 'Dymidowski', '0386 Mccormick Terrace'),
('lfeacham25@mayoclinic.com', 'Gp01hP', 'Lacey', 'Feacham', '039 Lakewood Crossing'),
('long12@sogou.com', 'wD7W6JcVZpM', 'Liuka', 'Ong', '786 Grasskamp Street'),
('louldcott13@wordpress.com', 'SostRXFN', 'Lauren', 'Ouldcott', '218 Miller Court'),
('lpolak1y@salon.com', 'M7R6rhneM1', 'Lyndy', 'Polak', '728 Bluestem Place'),
('lspencleyb@list-manage.com', 'KRfRnLCL6l', 'Loraine', 'Spencley', '0 Vahlen Crossing'),
('lsubhan15@myspace.com', '3lwgWt2OlhI', 'Lanna', 'Subhan', '8 Elka Trail'),
('malltimes22@360.cn', 'SUxMgxMAad', 'Melisse', 'Alltimes', '13 Atwood Avenue'),
('mbisatt0@timesonline.co.uk', 'jhxOifocnhE', 'Marlo', 'Bisatt', '59539 Ridge Oak Place'),
('mbodicum26@lulu.com', 'itVaSc5ShL57', 'Menard', 'Bodicum', '01459 Waywood Terrace'),
('mduncang@pcworld.com', 'k6aCakG61f', 'Morganica', 'Duncan', '61994 North Avenue'),
('mgroucock1m@ed.gov', '5DT2UK5b0dJ', 'Minette', 'Groucock', '03332 Mayfield Way'),
('mmcshirrie24@usa.gov', 'OHY5VTpfn', 'Mickey', 'McShirrie', '06 Artisan Pass'),
('mscoltsn@ameblo.jp', 'mPVwIazvW1', 'Modesta', 'Scolts', '19415 Scoville Crossing'),
('mwasielewski2j@sogou.com', 'NbeBf8', 'Mara', 'Wasielewski', '64 Butternut Lane'),
('nbrameldv@macromedia.com', 'u2vvRb6V', 'Noam', 'Brameld', '72 Hayes Lane'),
('nmackain1a@php.net', 'jDQzbFcaTAZ', 'Natalya', 'MacKain', '77 Melvin Plaza'),
('nmaseres2o@t-online.de', '4K7sNVgAq8LV', 'Nicolina', 'Maseres', '556 Jay Terrace'),
('nnewvellw@oracle.com', 'q4Ekek', 'Nick', 'Newvell', '38 Lillian Drive'),
('oaikmank@360.cn', 'lO37UCQ', 'Ode', 'Aikman', '1 Grayhawk Plaza'),
('owaldock10@alibaba.com', '3skmWQ4AN', 'Osbourn', 'Waldock', '0 Gerald Plaza'),
('pdendle2k@timesonline.co.uk', '5iSKMeP53O', 'Paolo', 'Dendle', '89 Eagan Park'),
('pdunsire20@seesaa.net', 'taSH87mXX', 'Payton', 'Dunsire', '21043 Mariners Cove Lane'),
('qstandallm@cnet.com', 'njSFyvFR', 'Quincey', 'Standall', '194 Di Loreto Crossing'),
('rbresnenq@canalblog.com', 'YWnRhw', 'Romain', 'Bresnen', '172 Del Sol Lane'),
('rgerwood1s@whitehouse.gov', 'Xg4T1q0a0', 'Rosabella', 'Gerwood', '7 Pierstorff Lane'),
('rgillman2p@studiopress.com', 'eRBy19AND', 'Roch', 'Gillman', '663 Riverside Road'),
('roliffe5@360.cn', 'W4jmY0NG5q', 'Roddy', 'Oliffe', '4859 Karstens Court'),
('rquainton3@discovery.com', 'vIZWoJi4cGK', 'Ramon', 'Quainton', '26176 Dovetail Junction'),
('sblandeni@hubpages.com', 'FLHc3uK7F', 'Starlene', 'Blanden', '9432 Arrowood Pass'),
('scattermull23@istockphoto.com', 'AayoFM41dYO0', 'Stavros', 'Cattermull', '7049 Green Road'),
('ssafe2q@umn.edu', 'eGsKu1AJEiW', 'Sadie', 'Safe', '3 Gina Terrace'),
('tfullegar1t@biglobe.ne.jp', 'brC7IQ25mU3', 'Thom', 'Fullegar', '4123 Delladonna Pass'),
('tsaurint@alibaba.com', 'URaRQly5xJfs', 'Timi', 'Saurin', '92030 Pawling Circle'),
('vfilippuccis@pcworld.com', 'GYgiGYX', 'Vivyan', 'Filippucci', '1 Dennis Point'),
('vkensall2h@apache.org', 'NXUHtvpO', 'Velma', 'Kensall', '977 Ridgeview Center'),
('vpinor2i@hubpages.com', 'HqDGfhPO1fW', 'Veriee', 'Pinor', '48 Jenna Drive'),
('vstandageh@cbsnews.com', 'jz8X7ahCDUTj', 'Vassili', 'Standage', '6 Katie Pass'),
('whyams1g@xinhuanet.com', 'nmCMpzyK', 'Wade', 'Hyams', '6625 Jenifer Pass'),
('wpitrasso1r@census.gov', '5v5ToCNXTc7f', 'Wynn', 'Pitrasso', '14412 Valley Edge Drive');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `name` varchar(50) DEFAULT NULL,
  `price` varchar(50) DEFAULT NULL,
  `vol` int(11) DEFAULT NULL,
  `abv` int(11) DEFAULT NULL,
  `details` varchar(500) DEFAULT NULL,
  `img` varchar(256) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `price`, `vol`, `abv`, `details`, `img`) VALUES
(1, 'McGuigan Black Label Red - Case of 6', '39', 75, 13, 'Delightful aromas of cherry and blackberry fruitsmatched with a hint of spice.', 'red-1.jpg'),
(2, 'Campo Viejo Rioja Gran Reserva', '13', 75, 13, 'Premium Spanish red wine located in the region of La Rioja, Spain', 'red-2.jpg'),
(3, 'Jacob\'s Creek Double Barrel Shiraz Red Wine', '10.5', 75, 15, 'Pronounced aromas of black fruit, toasted oak, crushed mint and eucalyptus', 'red-3.jpg'),
(4, 'Jacobs Creek Chardonnay - Case of 6', '35.94', 75, 13, 'Fresh melon and citrus aromas with toasty oak nuances', 'white-1.jpg'),
(5, 'Whispering Angel AOC Cotes De Provence Rose 2018', '17.49', 75, 13, 'Caves d\'Esclans is the brightest new star of the Cotes de Provence. Established in 2006 when Bordeaux-born Sacha Lichine bought the Chateau d\'Esclans, this dynamic producer harnesses both the chateaugrown grapes and fruit from local growers to create a stunning range of highly sought-after wines. Patrick Leon, the former winemaker at MoutonRothschild, oversees production.', 'rose-1.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `members`
--
ALTER TABLE `members`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD KEY `name` (`name`);
--
-- Database: `wine2door2`
--
CREATE DATABASE IF NOT EXISTS `wine2door2` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `wine2door2`;

-- --------------------------------------------------------

--
-- Table structure for table `members`
--

CREATE TABLE `members` (
  `userID` int(10) UNSIGNED NOT NULL,
  `username` char(50) NOT NULL,
  `password` char(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `members`
--
ALTER TABLE `members`
  ADD PRIMARY KEY (`userID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `members`
--
ALTER TABLE `members`
  MODIFY `userID` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
