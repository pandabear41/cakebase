-- phpMyAdmin SQL Dump
-- version 3.3.2deb1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jul 01, 2010 at 06:01 AM
-- Server version: 5.1.41
-- PHP Version: 5.3.2-1ubuntu4

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";

--
-- Database: `cakebase`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `login` varchar(32) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(128) COLLATE utf8_unicode_ci NOT NULL,
  `emailcheckcode` varchar(128) COLLATE utf8_unicode_ci NOT NULL,
  `passwordchangecode` varchar(128) COLLATE utf8_unicode_ci NOT NULL,
  `disable` tinyint(1) NOT NULL COMMENT 'Disable/enable account',
  `lastvisit` datetime NOT NULL,
  `expire_account` date NOT NULL,
  `created` datetime DEFAULT NULL,
  `updated` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `username` (`login`),
  UNIQUE KEY `email` (`email`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=2 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `login`, `password`, `email`, `emailcheckcode`, `passwordchangecode`, `disable`, `lastvisit`, `expire_account`, `created`, `updated`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3', 'root', '', '', 0, '2010-07-01 05:59:16', '0000-00-00', '0000-00-00 00:00:00', '2008-02-12 12:19:31');

