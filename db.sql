SET sql_mode = '';
SET NAMES 'utf8';

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `login` varchar(255) NOT NULL UNIQUE,
  `hash` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `role` int(3) NOT NULL default 0,
  PRIMARY KEY (`id`)
);

CREATE TABLE IF NOT EXISTS `roles` ( 
	  `id` int (10) unsigned NOT NULL auto_increment,
    `role` varchar(255) NOT NULL,
    `enabled` TINYINT unsigned default 1, 
    PRIMARY KEY(`id`)
);

CREATE TABLE IF NOT EXISTS `messages` ( 
	  `id` int (10) unsigned NOT NULL auto_increment,
    `username` varchar(255) NOT NULL,
    `email` varchar(255) NOT NULL,
    `subject` varchar(255),
    `message` TEXT  NOT NULL,
    `DT` TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    `respond` TINYINT unsigned default 0, 
    PRIMARY KEY(`id`)
) ENGINE = MyISAM;

CREATE TABLE IF NOT EXISTS `comments` ( 
	  `id` int (10) unsigned NOT NULL auto_increment,
    `client` int (10) unsigned NOT NULL default 1,
    `work` int (10) unsigned NOT NULL default 1,
    `comment` TEXT,
    `DT` TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    `eDT` DATETIME NOT NULL,
    `hidden` TINYINT unsigned default 0, 
    PRIMARY KEY(`id`),
    FULLTEXT (comment)
) ENGINE = MyISAM;

CREATE TABLE IF NOT EXISTS `clients` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `firstName` varchar(255) NOT NULL,
  `lastName` varchar(255) NOT NULL,
  `company` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
);

CREATE TABLE IF NOT EXISTS `categories` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `category` varchar(255) NOT NULL,
  hidden` TINYINT unsigned NOT NULL default 0,
  PRIMARY KEY (`id`)
);

CREATE TABLE IF NOT EXISTS `portfolios` ( 
	  `id` int (10) unsigned NOT NULL auto_increment,
	  `title` varchar(255) NOT NULL,
    `category` int (10) unsigned,
    `client` int (10) unsigned,
    `pics` varchar(255) NOT NULL,
    `views` int (10) unsigned default 0,
    `comment` TEXT,
    `DT` TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    `eDT` DATETIME NOT NULL,
    `hidden` TINYINT unsigned NOT NULL default 0, 
    PRIMARY KEY(`id`)
);

#pass=1234
INSERT INTO users (`login`, `hash`, `email`, `role`) VALUES ('admin', '$2y$10$w1X3aLiYhMaK/zBP8WYMDOOs97u3UpBn/TtAzWdHgzsVU8fNJL7Q6', 'kaktus@studio.ua',2);
INSERT INTO roles (`role`) VALUES ('Пользователь');
INSERT INTO roles (`role`) VALUES ('Администратор');