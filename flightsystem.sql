-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 15, 2017 at 01:30 PM
-- Server version: 10.1.26-MariaDB
-- PHP Version: 7.0.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `flightsystem`
--

-- --------------------------------------------------------

--
-- Table structure for table `active_guests`
--

CREATE TABLE `active_guests` (
  `ip` varchar(15) NOT NULL,
  `timestamp` int(11) UNSIGNED NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `active_users`
--

CREATE TABLE `active_users` (
  `username` varchar(30) NOT NULL,
  `timestamp` int(11) UNSIGNED NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `active_users`
--

INSERT INTO `active_users` (`username`, `timestamp`) VALUES
('gaurav', 1513340766);

-- --------------------------------------------------------

--
-- Table structure for table `banlist`
--

CREATE TABLE `banlist` (
  `ban_id` mediumint(8) UNSIGNED NOT NULL,
  `ban_username` varchar(255) NOT NULL,
  `ban_userid` mediumint(8) UNSIGNED NOT NULL,
  `ban_ip` varchar(40) NOT NULL,
  `timestamp` int(11) UNSIGNED NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `configuration`
--

CREATE TABLE `configuration` (
  `config_name` varchar(20) NOT NULL,
  `config_value` varchar(64) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `configuration`
--

INSERT INTO `configuration` (`config_name`, `config_value`) VALUES
('ACCOUNT_ACTIVATION', '3'),
('ALL_LOWERCASE', '0'),
('COOKIE_EXPIRE', '100'),
('COOKIE_PATH', '/'),
('DATE_FORMAT', 'M j, Y, g:i a'),
('EMAIL_FROM_NAME', 'hicinko llc'),
('EMAIL_FROM_ADDR', 'testgauravhicinko@gmail.com'),
('EMAIL_WELCOME', '1'),
('ENABLE_CAPTCHA', '1'),
('GUEST_TIMEOUT', '5'),
('HASH', 'sha256'),
('home_page', 'index.php'),
('login_page', '../agent/index.php'),
('max_user_chars', '36'),
('min_user_chars', '5'),
('max_pass_chars', '120'),
('min_pass_chars', '8'),
('NO_ADMIN_REDIRECT', '1'),
('record_online_date', '1513333588'),
('record_online_users', '1'),
('SITE_DESC', 'search flights as per user request'),
('SITE_NAME', 'flight search system'),
('TRACK_VISITORS', '1'),
('TURN_ON_INDIVIDUAL', '0'),
('USER_HOME_PATH', '/'),
('HOME_SETBYADMIN', '1'),
('USERNAME_REGEX', 'letter_num_spaces'),
('USER_TIMEOUT', '10'),
('Version', '2.4'),
('WEB_ROOT', 'http://localhost/flightsystem/admin/');

-- --------------------------------------------------------

--
-- Table structure for table `groups`
--

CREATE TABLE `groups` (
  `group_id` smallint(5) UNSIGNED NOT NULL,
  `group_name` varchar(50) NOT NULL,
  `group_level` tinyint(3) UNSIGNED NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `groups`
--

INSERT INTO `groups` (`group_id`, `group_name`, `group_level`) VALUES
(1, 'Administrators', 1);

-- --------------------------------------------------------

--
-- Table structure for table `log_table`
--

CREATE TABLE `log_table` (
  `id` int(10) UNSIGNED NOT NULL,
  `userid` int(11) UNSIGNED NOT NULL,
  `timestamp` int(11) UNSIGNED NOT NULL,
  `ip` varchar(15) NOT NULL,
  `log_operation` text CHARACTER SET utf8 COLLATE utf8_bin NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `log_table`
--

INSERT INTO `log_table` (`id`, `userid`, `timestamp`, `ip`, `log_operation`) VALUES
(1, 1, 1513333595, '::1', 'LOGIN'),
(2, 1, 1513333782, '::1', 'REGISTERED : gaurav'),
(3, 1, 1513335018, '::1', 'LOGOFF'),
(4, 1, 1513336814, '::1', 'LOGIN'),
(5, 1, 1513336859, '::1', 'ACTIVATED USER : gaurav'),
(6, 1, 1513336863, '::1', 'LOGOFF'),
(7, 2, 1513336875, '::1', 'LOGIN'),
(8, 2, 1513337098, '::1', 'LOGOFF'),
(9, 2, 1513337114, '::1', 'LOGIN'),
(10, 2, 1513339250, '::1', 'LOGOFF'),
(11, 2, 1513339255, '::1', 'LOGIN'),
(12, 2, 1513339259, '::1', 'LOGIN');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) UNSIGNED NOT NULL,
  `username` varchar(36) NOT NULL,
  `firstname` varchar(40) NOT NULL,
  `lastname` varchar(40) NOT NULL,
  `password` varchar(64) DEFAULT NULL,
  `usersalt` varchar(8) NOT NULL,
  `userid` varchar(32) DEFAULT NULL,
  `userlevel` tinyint(1) UNSIGNED NOT NULL,
  `email` varchar(50) DEFAULT NULL,
  `timestamp` int(11) UNSIGNED NOT NULL,
  `previous_visit` int(11) UNSIGNED DEFAULT '0',
  `actkey` varchar(35) NOT NULL,
  `ip` varchar(15) NOT NULL,
  `regdate` int(11) UNSIGNED NOT NULL,
  `lastip` varchar(15) DEFAULT NULL,
  `user_login_attempts` tinyint(4) DEFAULT NULL,
  `user_home_path` varchar(50) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `firstname`, `lastname`, `password`, `usersalt`, `userid`, `userlevel`, `email`, `timestamp`, `previous_visit`, `actkey`, `ip`, `regdate`, `lastip`, `user_login_attempts`, `user_home_path`) VALUES
(1, 'Admin', 'Super', 'Admin', '67dfe8028693fcc39566f492ed0dd928c1a23e518364e7795bed5ffb80916f76', 'DRYEzhgu', '5e624fcedb7ff345b9b86050efe4a533', 10, 'testgauravhicinko@gmail.com', 1513336863, 1513335018, 'NSj0K9onsIVxNWZx', '::1', 1513333562, '::1', 0, NULL),
(2, 'gaurav', 'gaurav', 'chauhan', '4ea77286a9733f2dd7e5f7ffd8a289d6ff6cf753cfaba6e57fa9cbe5c1efe3f8', 'ZdLPJPfM', 'c38258d40efb5c1bc8c56991b3cd5d6a', 3, 'gaurav@hicinko.com', 1513340766, 1513339259, 'JDBEDUZvaEiZ77Ij', '::1', 1513333782, '::1', 0, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users_groups`
--

CREATE TABLE `users_groups` (
  `id` smallint(5) UNSIGNED NOT NULL,
  `user_id` int(11) NOT NULL,
  `group_id` smallint(6) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users_groups`
--

INSERT INTO `users_groups` (`id`, `user_id`, `group_id`) VALUES
(1, 1, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `active_guests`
--
ALTER TABLE `active_guests`
  ADD PRIMARY KEY (`ip`);

--
-- Indexes for table `active_users`
--
ALTER TABLE `active_users`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `banlist`
--
ALTER TABLE `banlist`
  ADD PRIMARY KEY (`ban_id`);

--
-- Indexes for table `configuration`
--
ALTER TABLE `configuration`
  ADD PRIMARY KEY (`config_name`);

--
-- Indexes for table `groups`
--
ALTER TABLE `groups`
  ADD PRIMARY KEY (`group_id`);

--
-- Indexes for table `log_table`
--
ALTER TABLE `log_table`
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD UNIQUE KEY `id` (`id`),
  ADD KEY `username` (`username`);

--
-- Indexes for table `users_groups`
--
ALTER TABLE `users_groups`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `banlist`
--
ALTER TABLE `banlist`
  MODIFY `ban_id` mediumint(8) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `groups`
--
ALTER TABLE `groups`
  MODIFY `group_id` smallint(5) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `log_table`
--
ALTER TABLE `log_table`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users_groups`
--
ALTER TABLE `users_groups`
  MODIFY `id` smallint(5) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
