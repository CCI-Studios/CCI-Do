CREATE TABLE `#__ccido_albums` (
  `ccido_album_id` SERIAL,
  `title` varchar(255) NOT NULL,
  `filename` varchar(255) NOT NULL,
  PRIMARY KEY (`ccido_album_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

CREATE TABLE `#__ccido_images` (
  `ccido_image_id` SERIAL,

  `title` varchar(255) NOT NULL,
  `filename` varchar(255) NOT NULL,

  `ccido_album_id` bigint(20) UNSIGNED NOT NULL,
  PRIMARY KEY (`ccido_image_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;


CREATE TABLE `#__ccido_events` (
	`ccido_event_id` SERIAL,

	`title` varchar(100) NOT NULL,
	`location` varchar(150) NOT NULL,
	`description` text NOT NULL COMMENT '@Filter("html")',
	`directions` text NOT NULL COMMENT '@Filter("html")',

	PRIMARY KEY (`ccido_event_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

CREATE TABLE `#__ccido_links` (
  `ccido_link_id` SERIAL,

  `title` varchar(255) NOT NULL,
  `url` varchar(255) NOT NULL,
  `description` text NOT NULL COMMENT '@Filter("html")',

  PRIMARY KEY (`ccido_link_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

CREATE TABLE `#__ccido_members` (
  `ccido_member_id` SERIAL,

  `name` varchar(255) NOT NULL,
  `filename` varchar(255) NOT NULL,
  `bridesmaid` tinyint(1) NOT NULL,
  `description` TEXT NOT NULL,

  PRIMARY KEY (`ccido_member_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;


CREATE TABLE `#__ccido_messages` (
  `ccido_message_id` SERIAL,

  `created_on` datetime NOT NULL,
  `author` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,

  `description` text NOT NULL COMMENT '@Filter("html")',
  PRIMARY KEY (`ccido_message_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
