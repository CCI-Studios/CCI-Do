CREATE TABLE `jos_cci_do_events` (
	`cci_do_event_id` SERIAL,

	`title` varchar(100) NOT NULL,
	`description` text NOT NULL COMMENT '@Filter("html")',
	`location` varchar(150) NOT NULL,
	`directions` text NOT NULL COMMENT '@Filter("html")',

	PRIMARY KEY (`cci_do_event_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
