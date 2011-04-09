CREATE TABLE `jos_ccido_events` (
	`ccido_event_id` SERIAL,

	`title` varchar(100) NOT NULL,
	`description` text NOT NULL COMMENT '@Filter("html")',
	`location` varchar(150) NOT NULL,
	`directions` text NOT NULL COMMENT '@Filter("html")',

	PRIMARY KEY (`cci_do_event_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;


CREATE TABLE `jos_ccido_messages` (
  `ccido_message_id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `created_on` datetime NOT NULL,
  `author` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` text NOT NULL COMMENT '@Filter("html")',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
