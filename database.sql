SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;


CREATE TABLE IF NOT EXISTS `addresses` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `street` varchar(50) DEFAULT NULL,
  `number` varchar(10) DEFAULT NULL,
  `city` varchar(30) DEFAULT NULL,
  `district` varchar(20) DEFAULT NULL,
  `state` varchar(10) DEFAULT NULL,
  `zip_code` varchar(9) DEFAULT NULL,
  `country` varchar(20) DEFAULT NULL,
  `entity_id` int(11) DEFAULT NULL,
  `table_name` varchar(20) DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

INSERT INTO `addresses` (`id`, `street`, `number`, `city`, `district`, `state`, `zip_code`, `country`, `entity_id`, `table_name`, `created`, `modified`) VALUES
(1, 'Lie to me street', '100', 'Neverland', 'Bronx', 'NY', '111111111', 'USA', 1, 'clients', '2012-01-23 16:42:17', '2012-01-23 18:36:41'),
(2, 'No Street', '200', 'New York', 'Queens', 'NY', '123456789', 'USA', 3, 'clients', '2012-01-23 18:18:19', '2012-01-23 18:18:19'),
(3, 'Main street of nowhere', '400', 'New York', 'Queens', 'NY', '555555555', 'USA', 5, 'clients', '2012-01-23 18:27:40', '2012-01-23 18:27:40'),
(4, 'The null street', '600', 'New York', 'Bronx', 'NY', '444444444', 'USA', 6, 'clients', '2012-01-23 18:32:55', '2012-01-23 18:32:55'),
(5, 'The end of the world', '500', 'New York', 'Manhattan', 'NY', '888888888', 'USA', 7, 'clients', '2012-01-23 18:35:08', '2012-01-23 18:35:08'),
(6, 'Muppet street2', '100', 'Toronto', 'Center', 'TO', '888888888', 'Canada', 8, 'clients', '2012-01-23 19:55:30', '2012-01-24 16:40:42'),
(7, 'Nowhere to run street', '100', 'New York', 'Center', 'NY', '222222222', 'USA', 1, 'professionals', '2012-01-24 16:47:23', '2012-01-30 15:02:46'),
(8, 'Mother Earth street', '200', 'New York', 'Center', 'NY', '333333333', 'USA', 2, 'professionals', '2012-01-24 16:52:38', '2012-01-24 16:52:38'),
(9, '', '', '', '', '', '', '', 10, 'clients', '2012-01-24 17:06:29', '2012-01-24 17:06:29'),
(10, 'The street of sorrow', '100', 'Boston', '', '', '', 'USA', 1, 'services', '2012-01-25 13:35:44', '2012-01-25 13:35:44');

CREATE TABLE IF NOT EXISTS `clients` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `client_name` varchar(50) DEFAULT NULL,
  `corporate_name` varchar(50) DEFAULT NULL,
  `phone` varchar(15) DEFAULT NULL,
  `federal_tax_number` varchar(18) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `website` varchar(100) DEFAULT NULL,
  `client_category_id` int(11) NOT NULL,
  `client_type_id` int(11) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  PRIMARY KEY (`id`),
  KEY `categoriacliente_id` (`client_category_id`),
  KEY `name` (`client_name`),
  KEY `fk_clients_client_categories` (`client_category_id`),
  KEY `fk_clients_client_types` (`client_type_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

INSERT INTO `clients` (`id`, `client_name`, `corporate_name`, `phone`, `federal_tax_number`, `email`, `website`, `client_category_id`, `client_type_id`, `created`, `modified`) VALUES
(1, 'Fake Company 1', 'Fake Company Inc', '5551234', '1234567890', 'nobody@fakecompany.com', 'www.fakecompany.com', 3, 2, '2012-01-23 17:40:05', '2012-01-23 18:36:41'),
(3, 'Zero Company', 'Zero Company Inc', '5559876', '222222222222222222', 'nobody@zerocompany.com', 'thezerocompany.com', 2, 2, '2012-01-23 18:18:19', '2012-01-23 18:18:19'),
(4, 'Zen Company', 'Zen Company Inc', '555333444', '333333333333333333', 'nobody@zen.com', 'zen.com', 3, 2, '2012-01-23 18:20:10', '2012-01-23 18:20:10'),
(5, 'Nothing Company', 'Notinhg Company Inc', '5551144', '', 'nobody@nothing.com', 'nothing.com', 3, 2, '2012-01-23 18:27:40', '2012-01-23 18:27:40'),
(6, 'Zero the Hero', 'Zero the Hero', '555-8989', '', 'contact@zerothehero.com', '', 1, 1, '2012-01-23 18:32:55', '2012-01-23 18:32:55'),
(7, 'No man company', 'No man Inc', '5557896', '', 'nobody@noman.com', 'noman.com', 2, 2, '2012-01-23 18:35:08', '2012-01-23 18:35:08'),
(8, 'Almost zero company', 'Almost zero inc', '555-22222', '', 'nobody@almostzero.com', 'almostzero.com', 2, 2, '2012-01-23 19:55:30', '2012-01-24 16:40:42'),
(10, 'Christine Sixteen', 'KISS Inc', '555-33333', '', 'chistine@kiss.com', '16.com', 3, 1, '2012-01-24 17:06:29', '2012-01-24 17:06:29');

CREATE TABLE IF NOT EXISTS `client_categories` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `client_category_desc` varchar(30) DEFAULT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

INSERT INTO `client_categories` (`id`, `client_category_desc`, `created`, `modified`) VALUES
(1, 'Credit institutions', '2012-01-12 00:00:00', '2012-01-12 00:00:00'),
(2, 'Insurance companies', '2012-01-12 00:00:00', '2012-01-12 00:00:00'),
(3, 'Investment firms', '2012-01-12 00:00:00', '2012-01-12 00:00:00');

CREATE TABLE IF NOT EXISTS `client_types` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `client_type_desc` varchar(20) DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

INSERT INTO `client_types` (`id`, `client_type_desc`, `created`, `modified`) VALUES
(1, 'Individual', '2012-01-12 00:00:00', '2012-01-12 00:00:00'),
(2, 'Company', '2012-01-12 00:00:00', '2012-01-12 00:00:00');

CREATE TABLE IF NOT EXISTS `contacts` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `client_id` int(11) DEFAULT NULL,
  `contact_name` varchar(50) DEFAULT NULL,
  `role` varchar(50) DEFAULT NULL,
  `birth_date` date DEFAULT NULL,
  `cell_phone` varchar(15) DEFAULT NULL,
  `phone` varchar(15) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  PRIMARY KEY (`id`),
  KEY `name` (`contact_name`),
  KEY `fk_contacts_clients` (`client_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

INSERT INTO `contacts` (`id`, `client_id`, `contact_name`, `role`, `birth_date`, `cell_phone`, `phone`, `email`, `created`, `modified`) VALUES
(1, 6, 'John', 'Vice-president', NULL, '', '', '', '2012-01-24 19:15:07', '2012-01-24 19:15:07');

CREATE TABLE IF NOT EXISTS `professionals` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `professional_name` varchar(50) DEFAULT NULL,
  `birth_date` date DEFAULT NULL,
  `sex` varchar(1) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `phone` varchar(15) DEFAULT NULL,
  `social_security_number` varchar(15) DEFAULT NULL,
  `bank` varchar(15) DEFAULT NULL,
  `account_number` varchar(15) DEFAULT NULL,
  `account_name` varchar(30) DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

INSERT INTO `professionals` (`id`, `professional_name`, `birth_date`, `sex`, `email`, `phone`, `social_security_number`, `bank`, `account_number`, `account_name`, `created`, `modified`) VALUES
(1, 'John Doe', '1970-01-01', 'M', 'johndoe@nobody.com', '555-12345', '', '', '', '', '2012-01-24 16:47:23', '2012-01-30 15:02:46'),
(2, 'Mary Ann', '1975-01-01', 'F', 'maryann@nobody.com', '555-12345', '', '', '', '', '2012-01-24 16:52:38', '2012-01-24 16:52:38');

CREATE TABLE IF NOT EXISTS `professionals_services` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `professional_id` int(11) NOT NULL,
  `service_id` int(11) NOT NULL,
  `total_time` int(11) DEFAULT NULL,
  `total_value` float DEFAULT NULL,
  `payment_date` date DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `professional_id` (`professional_id`,`service_id`),
  KEY `fk_employees_services_services` (`service_id`),
  KEY `fk_professionals_services_professionals` (`professional_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

INSERT INTO `professionals_services` (`id`, `professional_id`, `service_id`, `total_time`, `total_value`, `payment_date`, `created`, `modified`) VALUES
(5, 1, 1, NULL, NULL, NULL, '2012-01-26 21:36:26', '2012-01-26 21:36:26'),
(7, 2, 1, NULL, NULL, NULL, '2012-01-28 13:01:54', '2012-01-28 13:01:54');

CREATE TABLE IF NOT EXISTS `services` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `service_state_id` int(11) NOT NULL,
  `client_id` int(11) NOT NULL,
  `service_type_id` int(11) DEFAULT NULL,
  `approval_date` date DEFAULT NULL,
  `expiration_date` date DEFAULT NULL,
  `payment_date` date DEFAULT NULL,
  `service_description` text,
  `begin_date` date DEFAULT NULL,
  `end_date` date DEFAULT NULL,
  `estimated_value` float DEFAULT NULL,
  `real_value` float DEFAULT NULL,
  `discount_value` float DEFAULT NULL,
  `paid_value` float DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_services_clients` (`client_id`),
  KEY `fk_services_service_types` (`service_type_id`),
  KEY `fk_services_service_states` (`service_state_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

INSERT INTO `services` (`id`, `service_state_id`, `client_id`, `service_type_id`, `approval_date`, `expiration_date`, `payment_date`, `service_description`, `begin_date`, `end_date`, `estimated_value`, `real_value`, `discount_value`, `paid_value`, `created`, `modified`) VALUES
(1, 1, 8, 1, '2012-01-25', NULL, NULL, '', '2012-02-01', '2012-02-10', 1000, NULL, NULL, NULL, '2012-01-25 13:35:44', '2012-01-25 13:35:44');

CREATE TABLE IF NOT EXISTS `service_states` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `service_state_desc` varchar(20) DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

INSERT INTO `service_states` (`id`, `service_state_desc`, `created`, `modified`) VALUES
(1, 'Opened', '2012-01-12 00:00:00', '2012-01-12 00:00:00'),
(2, 'Developing', '2012-01-12 00:00:00', '2012-01-12 00:00:00'),
(3, 'Closed', '2012-01-12 00:00:00', '2012-01-12 00:00:00');

CREATE TABLE IF NOT EXISTS `service_types` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `service_type_desc` varchar(30) DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

INSERT INTO `service_types` (`id`, `service_type_desc`, `created`, `modified`) VALUES
(1, 'Translation', '2012-01-12 00:00:00', '2012-01-12 00:00:00'),
(2, 'Interpreter', '2012-01-12 00:00:00', '2012-01-12 00:00:00');

CREATE TABLE IF NOT EXISTS `settings` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `my_company_name` varchar(50) DEFAULT NULL,
  `hourly_rate` float DEFAULT NULL,
  `language` varchar(3) DEFAULT 'eng',
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

INSERT INTO `settings` (`id`, `my_company_name`, `hourly_rate`, `language`, `modified`) VALUES
(1, 'Example Company', 10, 'eng', '2012-01-12 00:00:00');

CREATE TABLE IF NOT EXISTS `skills` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `skill_desc` varchar(20) DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=14 ;

INSERT INTO `skills` (`id`, `skill_desc`, `created`, `modified`) VALUES
(1, 'English', '2012-01-12 00:00:00', '2012-01-12 00:00:00'),
(2, 'Portuguese', '2012-01-12 00:00:00', '2012-01-12 00:00:00'),
(3, 'French', '2012-01-12 00:00:00', '2012-01-12 00:00:00'),
(4, 'German', '2012-01-12 00:00:00', '2012-01-12 00:00:00'),
(5, 'Italian', '2012-01-12 00:00:00', '2012-01-12 00:00:00'),
(6, 'Chinese', '2012-01-19 13:48:00', '2012-01-19 13:48:00'),
(7, 'Hebrew', '2012-01-19 13:48:51', '2012-01-19 13:48:51'),
(8, 'Japanese', '2012-01-19 13:49:14', '2012-01-19 13:49:14'),
(9, 'Polish', '2012-01-19 13:50:50', '2012-01-19 13:50:50'),
(10, 'Russian', '2012-01-19 13:51:13', '2012-01-19 13:51:13'),
(11, 'Romanian', '2012-01-19 13:51:30', '2012-01-19 13:51:30'),
(12, 'Spanish', '2012-01-19 13:52:24', '2012-01-19 13:52:24'),
(13, 'Swedish', '2012-01-19 13:52:50', '2012-01-19 13:52:50');

CREATE TABLE IF NOT EXISTS `skills_professionals` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `skill_id` int(11) NOT NULL,
  `professional_id` int(11) NOT NULL,
  `rating` smallint(6) NOT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `skill_id` (`skill_id`,`professional_id`),
  KEY `fk_skills_employees_skills` (`skill_id`),
  KEY `fk_skills_professionals_professionals` (`professional_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;


CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(30) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `role` varchar(5) DEFAULT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;



ALTER TABLE `clients`
  ADD CONSTRAINT `fk_clients_client_categories` FOREIGN KEY (`client_category_id`) REFERENCES `client_categories` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_clients_client_types` FOREIGN KEY (`client_type_id`) REFERENCES `client_types` (`id`) ON UPDATE CASCADE;

ALTER TABLE `contacts`
  ADD CONSTRAINT `fk_contacts_clients` FOREIGN KEY (`client_id`) REFERENCES `clients` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

ALTER TABLE `professionals_services`
  ADD CONSTRAINT `fk_employees_services_services` FOREIGN KEY (`service_id`) REFERENCES `services` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_professionals_services_professionals` FOREIGN KEY (`professional_id`) REFERENCES `professionals` (`id`) ON UPDATE CASCADE;

ALTER TABLE `services`
  ADD CONSTRAINT `fk_services_clients` FOREIGN KEY (`client_id`) REFERENCES `clients` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_services_service_states` FOREIGN KEY (`service_state_id`) REFERENCES `service_states` (`id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_services_service_types` FOREIGN KEY (`service_type_id`) REFERENCES `service_types` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

ALTER TABLE `skills_professionals`
  ADD CONSTRAINT `fk_skills_employees_skills` FOREIGN KEY (`skill_id`) REFERENCES `skills` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_skills_professionals_professionals` FOREIGN KEY (`professional_id`) REFERENCES `professionals` (`id`) ON UPDATE CASCADE;
